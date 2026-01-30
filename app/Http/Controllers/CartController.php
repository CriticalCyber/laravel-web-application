<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display the cart contents.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to view your cart.');
        }
        
        $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();
        
        return view('cart.index', compact('cartItems'));
    }

    /**
     * Add a product to the cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            // For AJAX requests, return JSON
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Please login to add items to your cart.'
                ], 401);
            }
            // For regular form submissions, redirect to login
            return redirect()->route('login')->with('error', 'Please login to add items to your cart.');
        }
        
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem = Cart::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
            ],
            [
                'quantity' => $request->quantity,
            ]
        );

        // For AJAX requests, return JSON
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Product added to cart!',
                'cart_count' => Cart::where('user_id', Auth::id())->count()
            ]);
        }
        
        // For regular form submissions, redirect to cart page
        return redirect()->route('cart.index')->with('success', 'Product added to cart!');
    }

    /**
     * Remove a product from the cart.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to manage your cart.');
        }
        
        if ($cart->user_id !== Auth::id()) {
            abort(403);
        }

        $cart->delete();

        return redirect()->back()->with('success', 'Product removed from cart!');
    }
}