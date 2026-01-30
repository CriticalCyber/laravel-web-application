<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('products')->get();
        $featured = Product::where('is_featured', true)->get();
        
        return view('products.index', compact('categories', 'featured'));
    }

    /**
     * Display all products for the collection page.
     *
     * @return \Illuminate\Http\Response
     */
    public function collection(Request $request)
    {
        try {
            // Start building the query with eager loading
            $query = Product::with(['category']);
            
            // Apply category filters if provided
            if ($request->has('categories') && is_array($request->categories) && !empty($request->categories)) {
                $query->whereIn('category_id', $request->categories);
            } else {
                // Exclude New Arrival products from main collection page when no specific categories are selected
                $newArrivalCategory = Category::where('name', 'New Arrival')->first();
                if ($newArrivalCategory) {
                    $query->where('category_id', '!=', $newArrivalCategory->id);
                }
            }
            
            // Apply sorting based on new requirements
            switch ($request->sort) {
                case 'newest':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'oldest':
                    $query->orderBy('created_at', 'asc');
                    break;
                case 'price_asc':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('price', 'desc');
                    break;
                case 'featured':
                    $query->orderBy('is_featured', 'desc');
                    break;
                default:
                    $query->orderBy('created_at', 'desc');
                    break;
            }
            
            // Paginate results
            $products = $query->paginate(12);
            
            // Get all categories for filter with count
            $categories = Category::withCount('products')->get();
            
            // Check if it's an AJAX request
            if ($request->ajax()) {
                // Return only the products grid and pagination for AJAX requests
                return response()->json([
                    'products_html' => view('products.collection-partials.products', compact('products'))->render(),
                    'pagination_html' => $products->links()->toHtml()
                ]);
            }
            
            return view('products.collection', compact('products', 'categories'));
        } catch (\Exception $e) {
            Log::error('Error in collection method: ' . $e->getMessage());
            
            // Check if it's an AJAX request
            if ($request->ajax()) {
                return response()->json(['error' => 'An error occurred while fetching products.'], 500);
            }
            
            // For non-AJAX requests, show error page or redirect
            return redirect()->back()->with('error', 'An error occurred while fetching products.');
        }
    }

    /**
     * Display products for a specific category.
     * This method is scalable for any category, including special categories like "New Arrival"
     *
     * @param  string  $categorySlug
     * @return \Illuminate\Http\Response
     */
    public function collectionByCategory(Request $request, $categorySlug = null)
    {
        try {
            // Map slugs to category names
            // This mapping can be easily extended for new special categories
            $categoryMap = [
                'bedsheets' => 'Bedsheets',
                'cushions' => 'Cushions',
                'rugs' => 'Rugs',
                'table-runners' => 'Table Runners',
                'new-arrivals' => 'New Arrival' // Changed from 'New Arrivals' to 'New Arrival' to match the category name
            ];
            
            // Start building the query with eager loading
            $query = Product::with(['category']);
            
            // Apply category filter if provided and exists in our map
            // For all categories including special ones, filter by category name
            if ($categorySlug && array_key_exists($categorySlug, $categoryMap)) {
                $category = Category::where('name', $categoryMap[$categorySlug])->first();
                if ($category) {
                    $query->where('category_id', $category->id);
                }
            } else {
                // If no specific category is selected, exclude New Arrival products
                $newArrivalCategory = Category::where('name', 'New Arrival')->first();
                if ($newArrivalCategory) {
                    $query->where('category_id', '!=', $newArrivalCategory->id);
                }
            }
            
            // Apply sorting based on new requirements
            switch ($request->sort) {
                case 'newest':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'oldest':
                    $query->orderBy('created_at', 'asc');
                    break;
                case 'price_asc':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('price', 'desc');
                    break;
                case 'featured':
                    $query->orderBy('is_featured', 'desc');
                    break;
                default:
                    // For all categories, sort by created_at desc as default
                    $query->orderBy('created_at', 'desc');
                    break;
            }
            
            // Paginate results
            $products = $query->paginate(12);
            
            // Get all categories for filter with count
            $categories = Category::withCount('products')->get();
            
            // Check if it's an AJAX request
            if ($request->ajax()) {
                // Return only the products grid and pagination for AJAX requests
                return response()->json([
                    'products_html' => view('products.collection-partials.products', compact('products'))->render(),
                    'pagination_html' => $products->links()->toHtml()
                ]);
            }
            
            return view('products.collection', compact('products', 'categories'));
        } catch (\Exception $e) {
            Log::error('Error in collectionByCategory method: ' . $e->getMessage());
            
            // Check if it's an AJAX request
            if ($request->ajax()) {
                return response()->json(['error' => 'An error occurred while fetching products.'], 500);
            }
            
            // For non-AJAX requests, show error page or redirect
            return redirect()->back()->with('error', 'An error occurred while fetching products.');
        }
    }

    /**
     * Display the specified product.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product->load('category');
        
        // Get related products from the same category
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();
        
        return view('products.show', compact('product', 'relatedProducts'));
    }
}