<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index()
    {
        $productsCount = Product::count();
        $ordersCount = Order::count();
        $categoriesCount = Category::count();
        $recentOrders = Order::with('user')->latest()->take(5)->get();
        $lowStockProducts = Product::where('stock_quantity', '<=', 10)->get();
        $categories = Category::all();
        
        // Get sales data for the last 6 months
        $salesData = $this->getSalesData();
        
        // Get category-wise sales data
        $categorySalesData = $this->getCategorySalesData();
        
        return view('admin.dashboard', compact(
            'productsCount', 
            'ordersCount', 
            'categoriesCount', 
            'recentOrders', 
            'lowStockProducts', 
            'categories',
            'salesData',
            'categorySalesData'
        ));
    }
    
    private function getSalesData()
    {
        // Get sales data grouped by month for the last 6 months
        $salesData = [];
        $months = [];
        
        for ($i = 5; $i >= 0; $i--) {
            $date = now()->subMonths($i);
            $month = $date->format('M');
            $year = $date->format('Y');
            
            $totalSales = Order::whereYear('created_at', $year)
                ->whereMonth('created_at', $date->month)
                ->sum('total_amount');
                
            $salesData[] = $totalSales;
            $months[] = $month;
        }
        
        return [
            'labels' => $months,
            'data' => $salesData
        ];
    }
    
    private function getCategorySalesData()
    {
        // Get sales data by category
        $categories = Category::with('products.orderItems.order')->get();
        
        $categorySales = [];
        foreach ($categories as $category) {
            $totalSales = 0;
            foreach ($category->products as $product) {
                foreach ($product->orderItems as $orderItem) {
                    $totalSales += $orderItem->price * $orderItem->quantity;
                }
            }
            
            if ($totalSales > 0) { // Only include categories with sales
                $categorySales[] = [
                    'name' => $category->name,
                    'sales' => $totalSales
                ];
            }
        }
        
        // Sort by sales amount descending
        usort($categorySales, function($a, $b) {
            return $b['sales'] <=> $a['sales'];
        });
        
        return $categorySales;
    }

    public function products()
    {
        $products = Product::with('category')->paginate(10);
        $categories = Category::all();
        return view('admin.products', compact('products', 'categories'));
    }

    public function createProduct()
    {
        $categories = Category::all();
        return view('admin.create-product', compact('categories'));
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'nullable|boolean',
            'stock_quantity' => 'required|integer|min:0'
        ]);

        // Set default value for is_featured if not provided
        $requestData = $request->except('image');
        $requestData['is_featured'] = $request->has('is_featured') ? true : false;
        
        // Handle image upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/products');
            $requestData['image_path'] = str_replace('public/', '', $path);
            // Set the image URL
            $requestData['image_url'] = route('storage.serve', ['path' => $requestData['image_path']]);
        }

        Product::create($requestData);

        return redirect()->route('admin.products')->with('success', 'Product created successfully.');
    }

    public function editProduct(Product $product)
    {
        $categories = Category::all();
        return view('admin.edit-product', compact('product', 'categories'));
    }

    public function updateProduct(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'nullable|boolean',
            'stock_quantity' => 'required|integer|min:0'
        ]);

        // Set default value for is_featured if not provided
        $requestData = $request->except('image');
        $requestData['is_featured'] = $request->has('is_featured') ? true : false;
        
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image_path) {
                Storage::delete('public/' . $product->image_path);
            }
            
            $path = $request->file('image')->store('public/products');
            $requestData['image_path'] = str_replace('public/', '', $path);
            // Set the image URL
            $requestData['image_url'] = route('storage.serve', ['path' => $requestData['image_path']]);
        }

        $product->update($requestData);

        return redirect()->route('admin.products')->with('success', 'Product updated successfully.');
    }

    public function destroyProduct(Product $product)
    {
        // Delete image if exists
        if ($product->image_path) {
            Storage::delete('public/' . $product->image_path);
        }
        
        $product->delete();
        return redirect()->route('admin.products')->with('success', 'Product deleted successfully.');
    }

    public function newArrivals()
    {
        // Get the "New Arrival" category
        $newArrivalCategory = Category::where('name', 'New Arrival')->first();
        
        // If the category exists, get products in that category, otherwise get an empty paginator
        if ($newArrivalCategory) {
            $products = Product::with('category')->where('category_id', $newArrivalCategory->id)->paginate(10);
        } else {
            // Return an empty paginator
            $products = new \Illuminate\Pagination\LengthAwarePaginator([], 0, 10);
        }
        
        return view('admin.new-arrivals', compact('products'));
    }

    public function orders()
    {
        // Add this debug code
        $totalOrders = Order::count();
        \Log::info('Admin Panel - Total orders in database: ' . $totalOrders);
        
        $orders = Order::with('user', 'orderItems.product')->latest()->paginate(10);
        
        \Log::info('Admin Panel - Orders retrieved: ' . $orders->count());
        \Log::info('Admin Panel - Order IDs: ' . $orders->pluck('id')->toJson());
        
        return view('admin.orders', compact('orders'));
    }

    public function completeOrder(Order $order)
    {
        $order->update(['status' => 'completed']);
        return redirect()->back()->with('success', 'Order marked as completed.');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->back()->with('success', 'Order deleted successfully.');
    }

    public function contacts()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('admin.contacts', compact('contacts'));
    }

    public function destroyContact(Contact $contact)
    {
        $contact->delete();
        return redirect()->back()->with('success', 'Contact message deleted successfully.');
    }
}