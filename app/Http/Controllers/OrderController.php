<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;

class OrderController extends Controller
{
    /**
     * Display a listing of the orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with('orderItems.product')
            ->where('user_id', Auth::id())
            ->paginate(10);
        
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new order.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
     * Store a newly created order in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'shipping_address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:100',
            'payment_method' => 'required|string|in:cash_on_delivery,qr_code',
        ]);

        $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();
        
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty!');
        }

        $totalAmount = 0;
        foreach ($cartItems as $item) {
            $totalAmount += $item->product->price * $item->quantity;
        }
        
        // Apply 10% discount for QR code payments
        $discountAmount = 0;
        if ($request->payment_method === 'qr_code') {
            $discountAmount = $totalAmount * 0.10;
            $totalAmount -= $discountAmount;
        }

        // Combine address fields for storage
        $fullAddress = $request->shipping_address . ', ' . $request->city . ', ' . $request->postal_code . ', ' . $request->country;

        // Log the order data before creating
        \Log::info('Creating order', [
            'user_id' => Auth::id(),
            'total_amount' => $totalAmount,
            'shipping_address' => $fullAddress,
            'payment_method' => $request->payment_method,
        ]);

        $order = Order::create([
            'user_id' => Auth::id(),
            'total_amount' => $totalAmount,
            'discount_amount' => $discountAmount,
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

        return redirect()->route('order.success', $order)->with('success', 'Order placed successfully!');
    }
    
    /**
     * Display the order success page.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function showSuccess(Order $order)
    {
        // Ensure the user can only view their own orders
        if ($order->user_id !== Auth::id()) {
            return redirect()->route('home')->with('error', 'Unauthorized access.');
        }
        
        return view('orders.success', compact('order'));
    }
}