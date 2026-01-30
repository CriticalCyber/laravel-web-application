<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Models\Product;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route to serve storage files for Hostinger where symlink is not available
Route::get('/storage/{path}', function ($path) {
    $filePath = storage_path('app/public/' . $path);
    
    // Check if file exists
    if (!file_exists($filePath)) {
        abort(404);
    }
    
    // Get file mime type
    $mimeType = mime_content_type($filePath);
    
    // Return file response
    return response()->file($filePath, [
        'Content-Type' => $mimeType,
    ]);
})->where('path', '.*')->name('storage.serve');

Route::get('/', function () {
    $products = Product::with('category')->take(8)->get();
    $comingSoon = env('COMING_SOON', true);
    $isAdmin = auth()->check() && auth()->user()->isAdmin();
    return view('welcome', compact('products', 'comingSoon', 'isAdmin'));
})->name('home');

// Collection page route
Route::get('/collection', [ProductController::class, 'collection'])->name('products.collection');

// Category-specific collection routes
Route::get('/collection/bedsheets', [ProductController::class, 'collectionByCategory'])->name('products.collection.bedsheets');
Route::get('/collection/cushions', [ProductController::class, 'collectionByCategory'])->name('products.collection.cushions');
Route::get('/collection/rugs', [ProductController::class, 'collectionByCategory'])->name('products.collection.rugs');
Route::get('/collection/table-runners', [ProductController::class, 'collectionByCategory'])->name('products.collection.table_runners');
Route::get('/collection/new-arrivals', [ProductController::class, 'collectionByCategory'])->name('products.collection.new_arrivals');

// New Arrival page
Route::get('/new-arrival', function () {
    // Get the "New Arrival" category
    $newArrivalCategory = Category::where('name', 'New Arrival')->first();
    
    // If the category exists, get products in that category, otherwise get an empty collection
    if ($newArrivalCategory) {
        $products = Product::with('category')->where('category_id', $newArrivalCategory->id)->latest()->get();
    } else {
        $products = collect(); // Empty collection
    }
    
    return view('products.new-arrival', compact('products'));
})->name('products.new_arrival');

// Wishlist Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/wishlist', [App\Http\Controllers\WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/wishlist/add', [App\Http\Controllers\WishlistController::class, 'add'])->name('wishlist.add');
    Route::delete('/wishlist/remove/{id}', [App\Http\Controllers\WishlistController::class, 'remove'])->name('wishlist.remove');
    Route::post('/wishlist/move-to-cart/{id}', [App\Http\Controllers\WishlistController::class, 'moveToCart'])->name('wishlist.move_to_cart');
});

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
// Google Authentication Routes
Route::get('/auth/google/redirect', [AuthController::class, 'redirectToGoogle'])->name('auth.google.redirect');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('auth.google.callback');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Product Routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Cart Routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::delete('/cart/{cart}', [CartController::class, 'destroy'])->name('cart.destroy');

// Checkout Routes
Route::get('/checkout', [CheckoutController::class, 'showCheckout'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'processCheckout'])->name('checkout.process');

// Order Routes
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/order-success/{order}', [OrderController::class, 'showSuccess'])->name('order.success');

// Contact Route
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin Routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/products', [AdminController::class, 'products'])->name('admin.products');
    Route::get('/admin/products/create', [AdminController::class, 'createProduct'])->name('admin.products.create');
    Route::post('/admin/products', [AdminController::class, 'storeProduct'])->name('admin.products.store');
    Route::get('/admin/products/{product}/edit', [AdminController::class, 'editProduct'])->name('admin.products.edit');
    Route::put('/admin/products/{product}', [AdminController::class, 'updateProduct'])->name('admin.products.update');
    Route::delete('/admin/products/{product}', [AdminController::class, 'destroyProduct'])->name('admin.products.destroy');
    Route::get('/admin/new-arrivals', [AdminController::class, 'newArrivals'])->name('admin.new_arrivals');
    Route::get('/admin/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/admin/contacts', [AdminController::class, 'contacts'])->name('admin.contacts');
    Route::post('/admin/orders/{order}/complete', [AdminController::class, 'completeOrder'])->name('admin.orders.complete');
    Route::delete('/admin/orders/{order}', [AdminController::class, 'destroy'])->name('admin.orders.destroy');
    Route::delete('/admin/contacts/{contact}', [AdminController::class, 'destroyContact'])->name('admin.contacts.destroy');
    
    // Category Management Routes
    Route::resource('admin/categories', CategoryController::class)->except(['show']);
});

// Test route to check database connection
Route::get('/test-db', function () {
    try {
        $orders = \App\Models\Order::with('user')->get();
        return response()->json([
            'status' => 'success',
            'orders_count' => $orders->count(),
            'orders' => $orders
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage()
        ], 500);
    }
});

// Test route to check current user
Route::get('/test-user', function () {
    if (auth()->check()) {
        $user = auth()->user();
        return response()->json([
            'status' => 'logged_in',
            'user_id' => $user->id,
            'email' => $user->email,
            'is_admin' => $user->isAdmin(),
            'all_users' => \App\Models\User::all()->pluck('email', 'id')
        ]);
    } else {
        return response()->json([
            'status' => 'not_logged_in'
        ]);
    }
});

// Test route to check admin dropdown
Route::get('/test-admin-dropdown', function () {
    if (auth()->check()) {
        $user = auth()->user();
        return response()->json([
            'logged_in' => true,
            'user_email' => $user->email,
            'is_admin' => $user->isAdmin(),
            'admin_email' => 'aridhi123@gmail.com',
            'emails_match' => $user->email === 'aridhi123@gmail.com'
        ]);
    } else {
        return response()->json([
            'logged_in' => false
        ]);
    }
});

// Policy Pages
Route::get('/terms-conditions', function () {
    return view('terms-conditions');
})->name('terms.conditions');

Route::get('/refund-policy', function () {
    return view('refund-policy');
})->name('refund.policy');

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');