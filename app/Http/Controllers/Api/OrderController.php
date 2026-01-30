<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of orders.
     */
    public function index()
    {
        $orders = Order::where('user_id', auth()->id())->get();
        
        return response()->json([
            'orders' => $orders
        ]);
    }

    /**
     * Display a listing of orders (admin).
     */
    public function adminIndex()
    {
        $orders = Order::with('user')->get();
        
        return response()->json([
            'orders' => $orders
        ]);
    }

    /**
     * Display the specified order.
     */
    public function show($id)
    {
        $order = Order::where('id', $id)->where('user_id', auth()->id())->first();
        
        if (!$order) {
            return response()->json([
                'message' => 'Order not found'
            ], 404);
        }
        
        return response()->json([
            'order' => $order
        ]);
    }

    /**
     * Store a newly created order.
     */
    public function store(Request $request)
    {
        $request->validate([
            'items' => 'required|array',
            'shipping_address' => 'required|string',
            'payment_method' => 'required|in:cash_on_delivery,qr_code',
        ]);

        try {
            DB::beginTransaction();
            
            // Calculate total amount from items
            $totalAmount = 0;
            foreach ($request->items as $item) {
                $totalAmount += $item['price'] * $item['quantity'];
            }
            
            // Create the order with consistent field names
            $order = Order::create([
                'user_id' => auth()->id(),
                'total_amount' => $totalAmount,
                'shipping_address' => $request->shipping_address,
                'payment_method' => $request->payment_method,
            ]);

            // Log the created order
            \Log::info('API Order created successfully', [
                'order_id' => $order->id,
                'user_id' => $order->user_id,
                'total_amount' => $order->total_amount
            ]);

            DB::commit();

            return response()->json([
                'message' => 'Order created successfully',
                'order' => $order
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            
            // Log the error
            \Log::error('API Order creation failed', [
                'error' => $e->getMessage(),
                'user_id' => auth()->id(),
            ]);
            
            return response()->json([
                'message' => 'Failed to create order. Please try again.'
            ], 500);
        }
    }

    /**
     * Update order status.
     */
    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();

        return response()->json([
            'message' => 'Order status updated successfully',
            'order' => $order
        ]);
    }
}