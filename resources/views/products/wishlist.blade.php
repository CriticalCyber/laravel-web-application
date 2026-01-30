<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your wishlist at AriDhi Collections - Premium handcrafted home furnishings">
    <meta name="keywords" content="wishlist, favorite products, bedsheets, table runners, rugs, cushions">
    <meta name="author" content="AriDhi Collections">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>My Wishlist - AriDhi Collections</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Geist Font Import -->
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;700&display=swap" rel="stylesheet">
    
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
            --transition: all 0.3s ease;
            --max-width: 1200px;
            --border-radius: 8px;
            --light-beige: #FAF9F6;
            --gold: #8B5E3C; /* Updated to primary brown */
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

        /* HEADER */
        header {
            position: sticky;
            top: 0;
            z-index: 100;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 32px;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .logo-img {
            height: 50px;
            width: auto;
        }

        .brand {
            font-family: 'Geist', sans-serif;
            font-size: 20px;
            font-weight: 700; /* Geist Bold for brand */
            color: var(--text-dark);
            letter-spacing: 1px;
            text-transform: capitalize;
            position: relative;
            padding: 0 5px;
            line-height: 1.2; /* Adjusted for Geist font */
            align-self: center;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 24px;
            margin: 0;
            padding: 0;
            align-items: center;
            height: 100%;
        }

        nav a {
            text-decoration: none;
            color: #222;
            font-weight: 500; /* Geist Medium for navigation */
            font-size: 16px;
            transition: var(--transition);
            position: relative;
            display: flex;
            align-items: center;
            height: auto;
            font-family: 'Geist', sans-serif;
        }

        nav a:hover, nav a.active {
            color: var(--primary-color);
        }

        nav a.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--primary-color);
        }

        nav a:not(.btn-auth):hover::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--primary-color);
        }

        .auth-buttons {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .user-dropdown {
            position: relative;
            display: inline-block;
        }

        .user-icon-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            transition: var(--transition);
            padding: 0;
        }

        .user-img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }

        .user-icon-btn:hover {
            background: var(--primary-dark);
            transform: scale(1.05);
        }

        .dropdown-menu {
            position: absolute;
            top: 50px;
            right: 0;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 15px;
            min-width: 180px;
            display: none;
            z-index: 1000;
            border: 1px solid var(--border-color);
        }

        .dropdown-menu.show {
            display: block;
        }

        .user-name {
            display: block;
            font-weight: 600;
            color: var(--text-dark);
            padding-bottom: 10px;
            margin-bottom: 10px;
            border-bottom: 1px solid var(--border-color);
            font-family: 'Geist', sans-serif;
        }

        .dropdown-menu a {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--text-dark);
            text-decoration: none;
            padding: 8px 0;
            font-size: 14px;
            transition: var(--transition);
            font-family: 'Geist', sans-serif;
        }

        .dropdown-menu a:hover {
            color: var(--primary-color);
        }

        .welcome-text {
            color: var(--text-dark);
            font-weight: 500; /* Geist Medium */
            margin-right: 10px;
            font-family: 'Geist', sans-serif;
        }

        .btn-auth {
            padding: 8px 16px;
            border-radius: var(--border-radius);
            font-weight: 500; /* Geist Medium for buttons */
            text-decoration: none;
            transition: var(--transition);
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            font-family: 'Geist', sans-serif;
        }

        .btn-login {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            background: transparent;
        }

        .btn-login:hover {
            background: var(--primary-color);
            color: var(--text-light);
        }

        .btn-register, .btn-logout {
            background: var(--primary-color);
            color: var(--text-light);
            border: 2px solid var(--primary-color);
        }

        .btn-register:hover, .btn-logout:hover {
            background: transparent;
            color: var(--primary-color);
        }

        /* MAIN CONTENT */
        .hero-section {
            padding: 40px 0;
            text-align: center;
            background: linear-gradient(to bottom, var(--light-beige), #fff);
            padding-top: 100px; /* Add padding to account for fixed header */
        }

        .hero-section h1 {
            font-family: 'Geist', sans-serif;
            font-size: 2.5rem;
            font-weight: 700; /* Geist Bold */
            color: var(--primary-color);
            margin-bottom: 20px;
            line-height: 1.3; /* Adjusted for Geist font */
        }

        .hero-section p {
            font-family: 'Geist', sans-serif;
            font-size: 1.2rem;
            font-weight: 400; /* Geist Regular */
            max-width: 700px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }

        .wishlist-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
            margin: 40px 0;
        }

        .product-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .featured-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: var(--primary-color);
            color: #fff;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            font-family: 'Geist', sans-serif;
        }

        .wishlist-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #fff;
            border: none;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            color: #e74c3c;
        }

        .product-details {
            padding: 20px;
        }

        .product-category {
            font-family: 'Geist', sans-serif;
            font-size: 0.85rem;
            font-weight: 400; /* Geist Regular */
            color: #777;
            margin-bottom: 5px;
        }

        .product-title {
            font-family: 'Geist', sans-serif;
            font-size: 1.1rem;
            font-weight: 700; /* Geist Bold */
            margin-bottom: 10px;
            line-height: 1.3; /* Adjusted for Geist font */
        }

        .product-description {
            font-family: 'Geist', sans-serif;
            font-size: 0.9rem;
            font-weight: 400; /* Geist Regular */
            color: #666;
            margin-bottom: 15px;
            height: 60px;
            overflow: hidden;
            line-height: 1.6;
        }

        .product-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .product-price {
            font-family: 'Geist', sans-serif;
            font-weight: 700; /* Geist Bold */
            color: var(--primary-color);
            font-size: 1.2rem;
        }

        .stock-badge {
            font-family: 'Geist', sans-serif;
            font-size: 0.8rem;
            font-weight: 500; /* Geist Medium */
            padding: 3px 10px;
            border-radius: 10px;
        }

        .stock-badge.in-stock {
            background: #e8f5e9;
            color: #4caf50;
        }

        .stock-badge.out-of-stock {
            background: #ffebee;
            color: #f44336;
        }

        .product-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-top: 15px;
        }

        .btn-add-cart {
            background: var(--primary-color);
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            font-family: 'Geist', sans-serif;
            font-weight: 500; /* Geist Medium */
        }

        .btn-add-cart:hover {
            background: var(--primary-dark);
        }

        .btn-move-cart {
            background: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            font-family: 'Geist', sans-serif;
            font-weight: 500; /* Geist Medium */
        }

        .btn-move-cart:hover {
            background: #388E3C;
        }

        .btn-remove-wishlist {
            background: #f44336;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            font-family: 'Geist', sans-serif;
            font-weight: 500; /* Geist Medium */
            grid-column: span 2;
        }

        .btn-remove-wishlist:hover {
            background: #d32f2f;
        }

        .btn-view-details {
            background: transparent;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
            padding: 10px;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            font-family: 'Geist', sans-serif;
            font-weight: 500; /* Geist Medium */
            text-align: center;
        }

        .btn-view-details:hover {
            background: var(--primary-color);
            color: #fff;
        }

        .empty-wishlist {
            text-align: center;
            padding: 60px 20px;
        }

        .empty-wishlist i {
            font-size: 4rem;
            color: #ddd;
            margin-bottom: 20px;
        }

        .empty-wishlist h3 {
            font-family: 'Geist', sans-serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 15px;
        }

        .empty-wishlist p {
            font-family: 'Geist', sans-serif;
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-shop-now {
            display: inline-block;
            background: var(--primary-color);
            color: #fff;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            font-family: 'Geist', sans-serif;
            font-weight: 500;
        }

        .btn-shop-now:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
        }

        /* FOOTER */
        footer {
            background: var(--dark-bg);
            color: var(--text-light);
            padding: 60px 0 30px;
            margin-top: 50px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-family: 'Geist', sans-serif;
            font-size: 22px;
            font-weight: 700; /* Geist Bold */
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
            line-height: 1.3; /* Adjusted for Geist font */
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background: var(--primary-color);
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            font-family: 'Geist', sans-serif;
            font-weight: 400; /* Geist Regular */
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-column ul li a:hover {
            color: var(--primary-color);
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: var(--text-light);
            text-decoration: none;
            transition: var(--transition);
        }

        .social-links a:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 14px;
            color: rgba(255, 255, 255, 0.6);
            font-family: 'Geist', sans-serif;
            font-weight: 400; /* Geist Regular */
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .wishlist-grid {
                grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            }
            
            .product-image {
                height: 220px;
            }
            
            .product-title {
                font-size: 1rem;
            }
        }

        @media (max-width: 992px) {
            .header-container {
                padding: 15px 20px;
            }
            
            nav ul {
                display: none;
                position: absolute;
                top: 70px;
                left: 0;
                right: 0;
                background: #fff;
                flex-direction: column;
                padding: 20px;
                box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            }
            
            nav ul.show {
                display: flex;
            }
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .wishlist-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
            
            .product-image {
                height: 200px;
            }
        }

        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2rem;
            }
            
            .hero-section p {
                font-size: 1rem;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .footer-column h3::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .social-links {
                justify-content: center;
            }
            
            .wishlist-grid {
                grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            }
            
            .product-image {
                height: 160px;
            }
            
            .product-actions {
                grid-template-columns: 1fr;
            }
            
            .btn-remove-wishlist {
                grid-column: span 1;
            }
        }

        @media (max-width: 576px) {
            .header-container {
                flex-direction: row;
                align-items: center;
                gap: 15px;
            }
            
            .auth-buttons {
                margin-top: 0;
            }
            
            .hero-section {
                padding: 30px 0;
            }
            
            .hero-section h1 {
                font-size: 1.8rem;
            }
            
            .wishlist-grid {
                grid-template-columns: 1fr;
            }
            
            .product-image {
                height: 250px;
            }
        }

        @media (max-width: 360px) {
            .header-container {
                padding: 10px;
            }
            
            .logo-img {
                height: 35px;
            }
            
            .brand {
                font-size: 18px;
            }
            
            footer {
                padding: 40px 0 20px;
            }
            
            .footer-column h3 {
                font-size: 18px;
            }
            
            .copyright {
                font-size: 12px;
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
                        <li><a href="{{ route('wishlist.index') }}" class="{{ request()->routeIs('wishlist.index') ? 'active' : '' }}">Wishlist</a></li>

                        @auth
                            <li><a href="{{ route('cart.index') }}" class="{{ request()->routeIs('cart.index') ? 'active' : '' }}">Cart</a></li>
                            <li><a href="{{ route('orders.index') }}" class="{{ request()->routeIs('orders.index') ? 'active' : '' }}">Orders</a></li>
                        @endauth
                        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
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
                    <li><a href="{{ route('wishlist.index') }}" class="{{ request()->routeIs('wishlist.index') ? 'active' : '' }}">Wishlist</a></li>
                    @auth
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

        <main class="container mt-4">
            <div class="hero-section">
                <h1>My Wishlist</h1>
                <p>Your favorite products saved for later</p>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if($wishlistItems->count() > 0)
                <div class="wishlist-grid">
                    @foreach($wishlistItems as $item)
                        @php
                            $product = $item->product;
                        @endphp
                        <div class="product-card">
                            <div class="product-image">
                                @if($product->image_path)
                                    <img src="{{ asset('storage/'.$product->image_path) }}" alt="{{ $product->name }}" class="img-fluid">
                                @else
                                    <img src="https://via.placeholder.com/300x250" alt="{{ $product->name }}" class="img-fluid">
                                @endif
                                @if($product->is_featured)
                                    <span class="featured-badge">
                                        <i class="fas fa-star me-1"></i>Featured
                                    </span>
                                @endif
                                <button class="wishlist-btn" disabled>
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-details">
                                <div class="product-category">{{ $product->category->name ?? 'Home Textile' }}</div>
                                <h3 class="product-title">{{ $product->name }}</h3>
                                <p class="product-description">{{ Str::limit($product->description, 60) }}</p>
                                <div class="product-footer">
                                    <div class="product-price">₹{{ number_format($product->price, 2) }}</div>
                                    @if($product->stock_quantity > 0)
                                        <span class="stock-badge in-stock">In Stock</span>
                                    @else
                                        <span class="stock-badge out-of-stock">Out of Stock</span>
                                    @endif
                                </div>
                                <div class="product-actions">
                                    @auth
                                        <form action="{{ route('wishlist.move_to_cart', $product->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn-move-cart">
                                                <i class="fas fa-shopping-cart me-1"></i>Move to Cart
                                            </button>
                                        </form>
                                        <form action="{{ route('wishlist.remove', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-remove-wishlist">
                                                <i class="fas fa-trash me-1"></i>Remove
                                            </button>
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}" class="btn-add-cart">
                                            <i class="fas fa-shopping-cart me-1"></i>Add to Cart
                                        </a>
                                    @endauth
                                    <a href="{{ route('products.show', $product) }}" class="btn-view-details">
                                        <i class="fas fa-eye me-1"></i>View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-wishlist">
                    <i class="far fa-heart"></i>
                    <h3>Your Wishlist is Empty</h3>
                    <p>Save items that you like in your wishlist to view them later.</p>
                    <a href="{{ route('products.collection') }}" class="btn-shop-now">
                        <i class="fas fa-shopping-bag me-2"></i>Shop Now
                    </a>
                </div>
            @endif
        </main>

        <!-- FOOTER -->
        <footer>
            <div class="container">
                <div class="footer-content">
                    <div class="footer-column">
                        <h3>AriDhi Collections</h3>
                        <p>Premium handcrafted home furnishings that bring elegance and comfort to your living spaces.</p>
                        <div class="social-links">
                            <a href="https://www.instagram.com/aridhicollections?igsh=MTk5azhuMWM5Nzg3YQ%3D%3D&utm_source=qr" target="_blank" title="Instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="footer-column">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('products.index') }}">Products</a></li>
                            <li><a href="{{ route('products.collection') }}">Collections</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="{{ route('terms.conditions') }}">Terms & Conditions</a></li>
                            <li><a href="{{ route('refund.policy') }}">Return & Refund Policy</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="{{ route('products.collection.bedsheets') }}">Bedsheets</a></li>
                            <li><a href="{{ route('products.collection.cushions') }}">Cushions</a></li>
                            <li><a href="{{ route('products.collection.rugs') }}">Rugs</a></li>
                            <li><a href="{{ route('products.collection.table_runners') }}">Table Runners</a></li>
                            <li><a href="{{ route('products.collection.new_arrivals') }}">New Arrivals</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>Contact Us</h3>
                        <ul>
                            <li>Email: aridhicollections@gmail.com</li>
                            <li>Phone: +91 6000756720 </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="copyright">
                    <p>&copy; 2025 AriDhi Collections. All rights reserved.</p>
                    <p>Developed by <a href="https://www.digihype.in" target="_blank" style="color: var(--primary-color); text-decoration: none;">The Digi Hype</a></p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Burger menu functionality
        document.addEventListener('DOMContentLoaded', function() {
            const burgerMenuBtn = document.getElementById('burgerMenuBtn');
            const slideMenu = document.getElementById('slideMenu');
            const closeMenuBtn = document.getElementById('closeMenuBtn');
            const menuOverlay = document.getElementById('menuOverlay');
            const body = document.body;
            
            // Toggle slide menu
            burgerMenuBtn.addEventListener('click', function() {
                slideMenu.classList.add('open');
                menuOverlay.classList.add('open');
                burgerMenuBtn.classList.add('active');
                body.style.overflow = 'hidden'; // Disable scroll
            });
            
            // Close slide menu
            function closeMenu() {
                slideMenu.classList.remove('open');
                menuOverlay.classList.remove('open');
                burgerMenuBtn.classList.remove('active');
                body.style.overflow = ''; // Enable scroll
            }
            
            // Close slide menu when clicking on close button
            closeMenuBtn.addEventListener('click', closeMenu);
            
            // Close slide menu when clicking on overlay
            menuOverlay.addEventListener('click', closeMenu);
            
            // Close slide menu when pressing ESC key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && slideMenu.classList.contains('open')) {
                    closeMenu();
                }
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
        });
    </script>
</body>
</html>