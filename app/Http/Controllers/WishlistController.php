<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlistItems = Wishlist::with('product.category')
            ->where('user_id', Auth::id())
            ->get();
            
        return view('products.wishlist', compact('wishlistItems'));
    }
    
    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);
        
        $wishlistItem = Wishlist::firstOrCreate([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id
        ]);
        
        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Product added to wishlist']);
        }
        
        return redirect()->back()->with('success', 'Product added to wishlist');
    }
    
    public function remove(Request $request, $id)
    {
        $wishlistItem = Wishlist::where('user_id', Auth::id())
            ->where('product_id', $id)
            ->first();
            
        if ($wishlistItem) {
            $wishlistItem->delete();
            
            if ($request->ajax()) {
                return response()->json(['success' => true, 'message' => 'Product removed from wishlist']);
            }
            
            return redirect()->back()->with('success', 'Product removed from wishlist');
        }
        
        if ($request->ajax()) {
            return response()->json(['success' => false, 'message' => 'Product not found in wishlist']);
        }
        
        return redirect()->back()->with('error', 'Product not found in wishlist');
    }
    
    public function moveToCart(Request $request, $id)
    {
        // First remove from wishlist
        $wishlistItem = Wishlist::where('user_id', Auth::id())
            ->where('product_id', $id)
            ->first();
            
        if ($wishlistItem) {
            $wishlistItem->delete();
        }
        
        // Then redirect to add to cart
        return redirect()->route('cart.store', ['product_id' => $id, 'quantity' => 1]);
    }
}
