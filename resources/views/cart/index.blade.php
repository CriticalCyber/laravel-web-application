<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AriDhi Collections - Premium handcrafted bedsheets, table runners, rugs & cushions with timeless elegance and comfort.">
    <meta name="keywords" content="bedsheets, table runners, rugs, cushions, handmade, luxury home decor">
    <meta name="author" content="AriDhi Collections">
    
    <title>AriDhi Collections - Shopping Cart</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Geist Font Import -->
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Navbar CSS -->
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #8B5E3C; /* Updated to brown */
            --primary-dark: #5C3B24; /* Updated to dark brown */
            --secondary-color: #D7BFA7; /* Updated to accent beige */
            --dark-bg: #2a2a2a;
            --light-bg: #f8f8f8;
            --text-dark: #333;
            --text-light: #fff;
            --border-color: #eee;
            --shadow: none; /* Removed shadow for flat design */
            --transition: all 0.3s ease;
            --max-width: 1200px;
            --border-radius: 8px;
            --light-beige: #FAF9F6;
            --gold: #8B5E3C; /* Updated to primary brown */
            --silver: #D0D0D0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Geist', sans-serif;
            font-weight: 400; /* Geist Regular for body text */
            background-color: var(--light-bg);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-y: auto; /* Ensure vertical scrolling */
            height: auto; /* Allow natural height */
        }

        .container {
            width: 100%;
            max-width: var(--max-width);
            margin: 0 auto;
            padding: 0 20px;
        }

        .page {
            background: #fff;
            min-height: 100vh; /* Ensure full viewport height */
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        /* Main Content */
        .py-5 {
            padding-top: 100px !important;
            padding-bottom: 60px !important;
        }

        .display-4 {
            font-family: 'Geist', sans-serif;
            font-size: 2.5rem;
            font-weight: 700; /* Geist Bold */
            line-height: 1.3; /* Adjusted for Geist font */
        }

        .card {
            border-radius: 10px;
            border: none;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }

        .card-header {
            border-bottom: 1px solid #eee;
            border-radius: 10px 10px 0 0 !important;
            background-color: #fff;
        }

        .cart-item {
            transition: background-color 0.2s;
        }

        .cart-item:hover {
            background-color: #f8f9fa;
        }

        .qty-btn {
            padding: 0.25rem 0.5rem;
        }

        .sticky-top {
            z-index: 1000;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            font-family: 'Geist', sans-serif;
            font-weight: 500; /* Geist Medium */
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        .text-primary {
            color: var(--primary-color) !important;
        }

        /* Footer Responsive Styles */
        @media (max-width: 1200px) {
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
                gap: 25px;
            }
            
            .footer-column h3 {
                font-size: 20px;
            }
        }

        @media (max-width: 992px) {
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }
        }

        @media (max-width: 768px) {
            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .footer-column {
                text-align: center;
            }
            
            .footer-column h3::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .social-links {
                justify-content: center;
            }
        }

        @media (max-width: 576px) {
            footer {
                padding: 50px 0 20px;
            }
            
            .footer-column h3 {
                font-size: 20px;
                margin-bottom: 15px;
            }
            
            .footer-column ul li {
                margin-bottom: 6px;
            }
            
            .footer-column ul li a {
                font-size: 13px;
            }
            
            .social-links {
                gap: 8px;
            }
            
            .social-links a {
                width: 28px;
                height: 28px;
            }
            
            .copyright {
                font-size: 12px;
                padding-top: 20px;
            }
        }

        @media (max-width: 480px) {
            footer {
                padding: 40px 0 15px;
            }
            
            .footer-column h3 {
                font-size: 18px;
                margin-bottom: 12px;
            }
            
            .footer-column ul li {
                margin-bottom: 5px;
            }
            
            .footer-column ul li a {
                font-size: 12px;
            }
            
            .social-links {
                gap: 6px;
            }
            
            .social-links a {
                width: 24px;
                height: 24px;
            }
            
            .copyright {
                font-size: 11px;
                padding-top: 15px;
            }
        }

        @media (max-width: 360px) {
            footer {
                padding: 30px 0 10px;
            }
            
            .footer-column h3 {
                font-size: 16px;
                margin-bottom: 10px;
            }
            
            .footer-column ul li {
                margin-bottom: 4px;
            }
            
            .footer-column ul li a {
                font-size: 11px;
            }
            
            .social-links {
                gap: 5px;
            }
            
            .social-links a {
                width: 20px;
                height: 20px;
                font-size: 12px;
            }
            
            .copyright {
                font-size: 10px;
                padding-top: 12px;
            }
        }

        /* Responsive */
        @media (max-width: 992px) {
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .py-5 {
                padding: 80px 20px 40px !important;
            }
            
            .display-4 {
                font-size: 2rem;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .py-5 {
                padding: 70px 15px 30px !important;
            }
            
            .display-4 {
                font-size: 1.75rem;
            }
        }
    </style>
</head>

<body>
    <div class="page">
        <!-- HEADER -->
        <header>
            <div class="header-container">
                <a href="{{ route('home') }}" class="logo-area">
                    <img src="{{ asset('images/logotm.jpeg') }}" alt="AriDhi Collections Logo" class="logo-img">
                    <div class="brand">AriDhi Collections</div>
                </a>

                <div style="display: flex; align-items: center; gap: 15px;">
                    <!-- Burger Menu Button -->
                    <button class="burger-menu-btn" id="burgerMenuBtn">☰</button>
                    
                    <!-- User Profile Icon (Always Visible) -->
                    @auth
                        <div class="user-dropdown">
                            <button class="user-icon-btn" id="userDropdown">
                                <img src="{{ asset('images/icon.png') }}" alt="User" class="user-img">
                            </button>
                            <div class="dropdown-menu" id="dropdownMenu">
                                <span class="user-name">{{ Auth::user()->name }}</span>
                                @if(Auth::user()->isAdmin())
                                    <a href="{{ route('admin.index') }}">
                                        <i class="fas fa-tachometer-alt"></i> Dashboard
                                    </a>
                                @endif
                                <a href="{{ route('logout') }}" 
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                            </div>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn-auth btn-login">Login</a>
                        <a href="{{ route('register') }}" class="btn-auth btn-register">Register</a>
                    @endauth
                </div>

                <!-- Vertical Navigation for Desktop -->
                <nav class="vertical-nav">
                    <ul>
                        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                        <li><a href="{{ route('products.collection') }}" class="{{ request()->routeIs('products.collection') ? 'active' : '' }}">Collection</a></li>
                        <li><a href="{{ route('products.new_arrival') }}" class="{{ request()->routeIs('products.new_arrival') ? 'active' : '' }}">New Arrivals</a></li>
                        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>

                        @auth
                            <li><a href="{{ route('wishlist.index') }}" class="{{ request()->routeIs('wishlist.index') ? 'active' : '' }}">Wishlist</a></li>
                            <li><a href="{{ route('cart.index') }}" class="{{ request()->routeIs('cart.index') ? 'active' : '' }}">Cart</a></li>
                            <li><a href="{{ route('orders.index') }}" class="{{ request()->routeIs('orders.index') ? 'active' : '' }}">Orders</a></li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Slide-in Menu (Mobile) -->
        <div class="slide-menu" id="slideMenu">
            <div class="slide-menu-header">
                <div class="slide-menu-logo">
                    <img src="{{ asset('images/logotm.jpeg') }}" alt="AriDhi Collections Logo" class="slide-menu-logo-img">
                    <div class="slide-menu-brand">AriDhi Collections</div>
                </div>
                <button class="close-menu-btn" id="closeMenuBtn">×</button>
            </div>

            <nav class="slide-menu-nav">
                <ul>
                    @auth
                        @if(Auth::user()->isAdmin())
                            <li><a href="{{ route('admin.index') }}" class="{{ request()->routeIs('admin.index') ? 'active' : '' }}">Dashboard</a></li>
                        @endif
                    @endauth
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                    <li><a href="{{ route('products.collection') }}" class="{{ request()->routeIs('products.collection') ? 'active' : '' }}">Collection</a></li>
                    <li><a href="{{ route('products.new_arrival') }}" class="{{ request()->routeIs('products.new_arrival') ? 'active' : '' }}">New Arrivals</a></li>
                    @auth
                        <li><a href="{{ route('wishlist.index') }}" class="{{ request()->routeIs('wishlist.index') ? 'active' : '' }}">Wishlist</a></li>
                        <li><a href="{{ route('cart.index') }}" class="{{ request()->routeIs('cart.index') ? 'active' : '' }}">Cart</a></li>
                        <li><a href="{{ route('orders.index') }}" class="{{ request()->routeIs('orders.index') ? 'active' : '' }}">Orders</a></li>
                    @endauth
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>
            </nav>

            <!-- Auth Buttons for Mobile -->
            @auth
                <div class="slide-auth-buttons">
                    <a href="{{ route('logout') }}" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                       class="slide-btn-auth slide-btn-logout">
                        Logout
                    </a>
                </div>
            @else
                <div class="slide-auth-buttons">
                     <a href="{{ route('login') }}" class="btn-auth btn-login" style="height: 40px; display: flex; align-items: center;">Login</a>
                        <a href="{{ route('register') }}" class="btn-auth btn-register" style="height: 40px; display: flex; align-items: center;">Register</a>
                </div>
            @endauth
        </div>

        <!-- Menu Overlay -->
        <div class="menu-overlay" id="menuOverlay"></div>

        <!-- MAIN CONTENT -->
        <main>
            <div class="container py-5">
                <!-- Page Header -->
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h1 class="display-4 fw-bold mb-3" style="color: #8B4513;">
                            <i class="fas fa-shopping-cart me-3"></i>Your Shopping Cart
                        </h1>
                        <p class="lead text-muted">Review your items and proceed to checkout</p>
                    </div>
                </div>

                @if($cartItems->count() > 0)
                    <div class="row">
                        <!-- Cart Items -->
                        <div class="col-lg-8">
                            <div class="card shadow-sm border-0 mb-4">
                                <div class="card-header bg-white py-3">
                                    <h5 class="mb-0">
                                        <i class="fas fa-boxes me-2"></i>Cart Items 
                                        <span class="badge bg-secondary ms-2">{{ $cartItems->count() }}</span>
                                    </h5>
                                </div>
                                <div class="card-body p-0">
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach($cartItems as $item)
                                        @php
                                            $itemTotal = $item->product->price * $item->quantity;
                                            $total += $itemTotal;
                                        @endphp
                                        <div class="cart-item border-bottom p-4">
                                            <div class="row align-items-center">
                                                <!-- Product Image -->
                                                <div class="col-md-2 col-3 text-center">
                                                    @if($item->product->image_path)
                                                        <img src="{{ Storage::url($item->product->image_path) }}" class="img-fluid rounded" alt="{{ $item->product->name }}" style="max-height: 100px; object-fit: cover;">
                                                    @else
                                                        <img src="https://via.placeholder.com/100x100?text=AC" class="img-fluid rounded" alt="{{ $item->product->name }}" style="max-height: 100px;">
                                                    @endif
                                                </div>
                                                
                                                <!-- Product Details -->
                                                <div class="col-md-4 col-9">
                                                    <h6 class="mb-1">{{ $item->product->name }}</h6>
                                                    <p class="text-muted small mb-2">{{ $item->product->category->name ?? 'Product' }}</p>
                                                    <p class="fw-bold mb-0" style="color: #8B4513;">₹{{ number_format($item->product->price, 2) }}</p>
                                                </div>
                                                
                                                <!-- Quantity Control -->
                                                <div class="col-md-3 col-6">
                                                    <div class="input-group input-group-sm">
                                                        <button class="btn btn-outline-secondary qty-btn" type="button" onclick="updateQuantity({{ $item->id }}, {{ $item->quantity - 1 }})">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                        <input type="text" class="form-control text-center" value="{{ $item->quantity }}" readonly>
                                                        <button class="btn btn-outline-secondary qty-btn" type="button" onclick="updateQuantity({{ $item->id }}, {{ $item->quantity + 1 }})">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                
                                                <!-- Total & Actions -->
                                                <div class="col-md-3 col-6 text-end">
                                                    <p class="fw-bold mb-2">₹{{ number_format($itemTotal, 2) }}</p>
                                                    <form action="{{ route('cart.destroy', $item) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Remove item">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            
                            <!-- Continue Shopping Button -->
                            <div class="text-start mb-4">
                                <a href="{{ route('products.collection') }}" class="btn btn-outline-primary">
                                    <i class="fas fa-arrow-left me-2"></i>Continue Shopping
                                </a>
                            </div>
                        </div>
                        
                        <!-- Order Summary -->
                        <div class="col-lg-4">
                            <div class="card shadow-sm border-0 sticky-top" style="top: 20px;">
                                <div class="card-header bg-white py-3">
                                    <h5 class="mb-0">
                                        <i class="fas fa-receipt me-2"></i>Order Summary
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between px-0">
                                            <span>Subtotal</span>
                                            <strong>₹{{ number_format($total, 2) }}</strong>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between px-0">
                                            <span>Shipping</span>
                                            <strong class="text-success">Free</strong>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between px-0">
                                            <span>Tax</span>
                                            <strong>₹{{ number_format($total * 0.1, 2) }}</strong>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between px-0">
                                            <span>Discount</span>
                                            <strong class="text-success">-₹0.00</strong>
                                        </li>
                                    </ul>
                                    <hr>
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0">Total</h5>
                                        <h5 class="mb-0" style="color: #8B4513;">₹{{ number_format($total * 1.1, 2) }}</h5>
                                    </div>
                                    <a href="{{ route('checkout') }}" class="btn btn-primary w-100 btn-lg">
                                        <i class="fas fa-lock me-2"></i>Proceed to Checkout
                                    </a>
                                    <div class="text-center mt-3">
                                        <small class="text-muted">
                                            <i class="fas fa-shield-alt me-1"></i>Secure checkout with 256-bit SSL encryption
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Empty Cart -->
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card shadow-sm border-0 text-center py-5">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <i class="fas fa-shopping-cart fa-4x text-muted"></i>
                                    </div>
                                    <h3 class="mb-3">Your Cart is Empty</h3>
                                    <p class="text-muted mb-4">Looks like you haven't added any items to your cart yet.</p>
                                    <a href="{{ route('products.collection') }}" class="btn btn-primary btn-lg">
                                        <i class="fas fa-shopping-bag me-2"></i>Start Shopping
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </main>

        <!-- FOOTER -->
        @include('layouts.app-footer')
    </div>

    <script>
        // Burger menu functionality
        document.addEventListener('DOMContentLoaded', function() {
            const burgerMenuBtn = document.getElementById('burgerMenuBtn');
            const slideMenu = document.getElementById('slideMenu');
            const closeMenuBtn = document.getElementById('closeMenuBtn');
            const menuOverlay = document.getElementById('menuOverlay');
            
            // Toggle slide menu
            burgerMenuBtn.addEventListener('click', function() {
                slideMenu.classList.add('open');
                menuOverlay.classList.add('open');
                burgerMenuBtn.classList.add('active');
            });
            
            // Close slide menu
            closeMenuBtn.addEventListener('click', function() {
                slideMenu.classList.remove('open');
                menuOverlay.classList.remove('open');
                burgerMenuBtn.classList.remove('active');
            });
            
            // Close slide menu when clicking on overlay
            menuOverlay.addEventListener('click', function() {
                slideMenu.classList.remove('open');
                menuOverlay.classList.remove('open');
                burgerMenuBtn.classList.remove('active');
            });
            
            // User dropdown functionality
            const userDropdown = document.getElementById('userDropdown');
            const dropdownMenu = document.getElementById('dropdownMenu');
            
            if (userDropdown && dropdownMenu) {
                userDropdown.addEventListener('click', function() {
                    dropdownMenu.classList.toggle('show');
                });
                
                // Close dropdown when clicking outside
                document.addEventListener('click', function(event) {
                    if (!userDropdown.contains(event.target) && !dropdownMenu.contains(event.target)) {
                        dropdownMenu.classList.remove('show');
                    }
                });
            }
            
            function updateQuantity(cartId, newQuantity) {
                if (newQuantity < 1) {
                    // If quantity is less than 1, remove the item
                    if (confirm('Are you sure you want to remove this item from your cart?')) {
                        document.querySelector(`form[action$="${cartId}"]`).submit();
                    }
                    return;
                }
                
                // In a real implementation, you would make an AJAX call to update the quantity
                // For now, we'll just show an alert
                alert(`In a full implementation, this would update the quantity to ${newQuantity}`);
                
                // Reload the page to reflect changes (temporary solution)
                location.reload();
            }
        });
    </script>
</body>
</html>