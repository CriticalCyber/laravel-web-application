<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;

class CheckoutController extends Controller
{
    /**
     * Show the checkout page.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCheckout()
    {
        $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();
        
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty!');
        }
        
        // Calculate total for order summary
        $total = 0;
        foreach ($cartItems as $item) {
            $total += $item->product->price * $item->quantity;
        }
        
        return view('orders.create', compact('cartItems', 'total'));
    }

    /**
     * Process the checkout and create an order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function processCheckout(Request $request)
    {
        \Log::info('Checkout request received', [
            'user_id' => Auth::id(),
            'all_request_data' => $request->all(),
            'payment_method' => $request->payment_method,
            'has_payment_method' => $request->has('payment_method'),
            'payment_method_value' => $request->get('payment_method')
        ]);
        
        try {
            // Validate the request
            $validatedData = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'shipping_address' => 'required|string|max:255',
                'city' => 'required|string|max:100',
                'postal_code' => 'required|string|max:20',
                'country' => 'required|string|max:100',
                'payment_method' => 'required|string|in:cash_on_delivery', // Removed qr_code option
            ]);
            
            \Log::info('Checkout validation passed', [
                'user_id' => Auth::id(),
                'validated_data' => $validatedData
            ]);
        } catch (ValidationException $e) {
            \Log::error('Checkout validation failed', [
                'user_id' => Auth::id(),
                'errors' => $e->errors(),
                'request_data' => $request->all()
            ]);
            
            // For AJAX requests
            if ($request->ajax()) {
                // Flatten validation errors into a readable string
                $errorMessages = [];
                foreach ($e->errors() as $field => $messages) {
                    foreach ($messages as $message) {
                        $errorMessages[] = "$field: $message";
                    }
                }
                
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed: ' . implode(', ', $errorMessages)
                ], 422);
            }
            // For regular form submissions
            return redirect()->back()->withErrors($e->errors())->withInput();
        }

        $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();
        
        if ($cartItems->isEmpty()) {
            // For AJAX requests
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Your cart is empty!'
                ], 400);
            }
            return redirect()->route('cart.index')->with('error', 'Your cart is empty!');
        }

        try {
            DB::beginTransaction();
            
            $totalAmount = 0;
            foreach ($cartItems as $item) {
                $totalAmount += $item->product->price * $item->quantity;
            }
            
            // Combine address fields for storage
            $fullAddress = $request->shipping_address . ', ' . $request->city . ', ' . $request->postal_code . ', ' . $request->country;

            // Log the order data before creating
            \Log::info('Creating order', [
                'user_id' => Auth::id(),
                'user_guard' => Auth::getDefaultDriver(),
                'user_web_guard' => Auth::guard('web')->id(),
                'total_amount' => $totalAmount,
                'shipping_address' => $fullAddress,
                'payment_method' => $request->payment_method,
            ]);

            $order = Order::create([
                'user_id' => Auth::id(),
                'total_amount' => $totalAmount,
                'discount_amount' => 0, // Removed discount for QR code
                'shipping_address' => $fullAddress,
                'payment_method' => $request->payment_method,
            ]);

            // Log the created order
            \Log::info('Order created successfully', ['order_id' => $order->id]);

            foreach ($cartItems as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'price' => $item->product->price,
                ]);
            }

            // Clear the cart
            Cart::where('user_id', Auth::id())->delete();
            
            DB::commit();
            
            // For AJAX requests
            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'redirect_url' => route('order.success', $order),
                    'message' => 'Order placed successfully!'
                ]);
            }
            return redirect()->route('order.success', $order)->with('success', 'Order placed successfully!');
            
        } catch (\Exception $e) {
            DB::rollBack();
            
            // Log the error
            \Log::error('Order creation failed', [
                'error' => $e->getMessage(),
                'user_id' => Auth::id(),
                'trace' => $e->getTraceAsString()
            ]);
            
            // For AJAX requests
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to create order: ' . $e->getMessage()
                ], 500);
            }
            return redirect()->route('checkout')->with('error', 'Failed to process your order. Please try again.');
        }
    }
}