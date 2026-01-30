<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AriDhi Collections - Premium handcrafted bedsheets, table runners, rugs & cushions with timeless elegance and comfort.">
    <meta name="keywords" content="bedsheets, table runners, rugs, cushions, handmade, luxury home decor">
    <meta name="author" content="AriDhi Collections">
    
    <title>Products - AriDhi Collections</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Geist Font Import -->
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
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
            height: 60px;
            width: auto;
        }

        .brand {
            font-family: 'Geist', sans-serif;
            font-size: 28px;
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

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: var(--text-dark);
        }

        /* PRODUCTS PAGE STYLES */
        .products-page {
            padding: 40px 0;
        }

        .page-title {
            text-align: center;
            font-family: 'Geist', sans-serif;
            font-size: 36px;
            font-weight: 700; /* Geist Bold */
            color: var(--text-dark);
            margin-bottom: 40px;
            position: relative;
            line-height: 1.3; /* Adjusted for Geist font */
        }

        .page-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--primary-color);
        }

        .filter-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-bottom: 40px;
        }

        .filter-btn {
            background: #fff;
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
            padding: 8px 20px;
            border-radius: 30px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 500; /* Geist Medium */
            font-family: 'Geist', sans-serif;
        }

        .filter-btn:hover, .filter-btn.active {
            background: var(--primary-color);
            color: #fff;
        }

        .category-section {
            margin-bottom: 50px;
        }

        .category-title {
            font-family: 'Geist', sans-serif;
            font-size: 28px;
            font-weight: 700; /* Geist Bold */
            margin-bottom: 25px;
            color: var(--text-dark);
            position: relative;
            padding-bottom: 10px;
            line-height: 1.3; /* Adjusted for Geist font */
        }

        .category-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background: var(--primary-color);
        }

        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        
        .card-body {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .card-title {
            font-family: 'Geist', sans-serif;
            font-size: 1.1rem;
            font-weight: 700; /* Geist Bold */
            margin-bottom: 10px;
            line-height: 1.3; /* Adjusted for Geist font */
        }
        
        .card-text {
            font-family: 'Geist', sans-serif;
            font-size: 0.9rem;
            font-weight: 400; /* Geist Regular */
            color: #666;
            margin-bottom: 10px;
            line-height: 1.6;
        }
        
        .btn-primary {
            background-color: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
            margin-top: auto;
            font-family: 'Geist', sans-serif;
            font-weight: 500; /* Geist Medium */
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark) !important;
            border-color: var(--primary-dark) !important;
        }
        
        .badge.bg-warning {
            position: absolute;
            top: 10px;
            right: 10px;
            font-family: 'Geist', sans-serif;
            font-weight: 500; /* Geist Medium */
        }

        /* FOOTER */
        footer {
            background: var(--dark-bg);
            color: var(--text-light);
            padding: 60px 0 30px;
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
            .container {
                padding: 0 15px;
            }
            
            .header-container {
                padding: 15px 20px;
            }
            
            .logo-img {
                height: 50px;
            }
            
            .brand {
                font-size: 24px;
            }
            
            nav ul {
                gap: 15px;
            }
            
            nav a {
                font-size: 15px;
            }
            
            .auth-buttons {
                gap: 10px;
            }
            
            .btn-auth {
                padding: 6px 12px;
                font-size: 13px;
                height: 36px;
            }
            
            .user-icon-btn {
                width: 36px;
                height: 36px;
                font-size: 16px;
            }
            
            .page-title {
                font-size: 32px;
            }
            
            .category-title {
                font-size: 26px;
            }
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
                gap: 25px;
            }
            
            .footer-column h3 {
                font-size: 20px;
            }
        }

        @media (max-width: 992px) {
            .header-container {
                padding: 15px 20px;
            }
            
            .logo-img {
                height: 45px;
            }
            
            .brand {
                font-size: 22px;
            }
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .page-title {
                font-size: 30px;
            }
            
            .category-title {
                font-size: 24px;
            }
        }

        @media (max-width: 768px) {
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
            
            .mobile-menu-btn {
                display: block;
            }
            
            .page-title {
                font-size: 28px;
            }
            
            .category-title {
                font-size: 24px;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
            }
            
            .filter-buttons {
                flex-wrap: wrap;
                gap: 8px;
            }
            
            .filter-btn {
                padding: 6px 16px;
                font-size: 14px;
            }
            
            .category-section {
                margin-bottom: 40px;
            }
        }

        @media (max-width: 576px) {
            .header-container {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 12px 15px;
            }
            
            .auth-buttons {
                margin-top: 15px;
                width: 100%;
                justify-content: center;
            }
            
            .products-page {
                padding: 30px 0;
            }
            
            .logo-img {
                height: 40px;
            }
            
            .brand {
                font-size: 22px;
            }
            
            .mobile-menu-btn {
                font-size: 24px;
            }
            
            .page-title {
                font-size: 26px;
                margin-bottom: 30px;
            }
            
            .filter-buttons {
                gap: 6px;
            }
            
            .filter-btn {
                padding: 5px 14px;
                font-size: 13px;
            }
            
            .category-title {
                font-size: 22px;
                margin-bottom: 20px;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 25px;
            }
            
            .footer-column h3::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .social-links {
                justify-content: center;
            }
            
            .copyright {
                font-size: 12px;
                padding-top: 20px;
            }
        }

        @media (max-width: 480px) {
            .header-container {
                padding: 10px;
            }
            
            .logo-img {
                height: 35px;
            }
            
            .brand {
                font-size: 20px;
            }
            
            .mobile-menu-btn {
                font-size: 20px;
            }
            
            .page-title {
                font-size: 24px;
            }
            
            .filter-buttons {
                gap: 5px;
            }
            
            .filter-btn {
                padding: 4px 12px;
                font-size: 12px;
            }
            
            .category-title {
                font-size: 20px;
            }
            
            .footer-column h3 {
                font-size: 18px;
            }
            
            .copyright {
                font-size: 11px;
            }
        }

        @media (max-width: 360px) {
            .header-container {
                padding: 8px;
            }
            
            .logo-img {
                height: 30px;
            }
            
            .brand {
                font-size: 18px;
            }
            
            .mobile-menu-btn {
                font-size: 18px;
            }
            
            .page-title {
                font-size: 22px;
            }
            
            .category-title {
                font-size: 18px;
            }
            
            .footer-column h3 {
                font-size: 16px;
                margin-bottom: 10px;
            }
            
            .copyright {
                font-size: 10px;
                padding-top: 15px;
            }
        }
        
        .overflow-auto::-webkit-scrollbar {
            height: 8px;
        }
        
        .overflow-auto::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        .overflow-auto::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }
        
        .overflow-auto::-webkit-scrollbar-thumb:hover {
            background: #555;
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
                        <li><a href="{{ route('products.index') }}" class="{{ request()->routeIs('products.index') ? 'active' : '' }}">Products</a></li>
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
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                    <li><a href="{{ route('products.index') }}" class="{{ request()->routeIs('products.index') ? 'active' : '' }}">Products</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                    @auth
                        <li><a href="{{ route('wishlist.index') }}" class="{{ request()->routeIs('wishlist.index') ? 'active' : '' }}">Wishlist</a></li>
                        <li><a href="{{ route('cart.index') }}" class="{{ request()->routeIs('cart.index') ? 'active' : '' }}">Cart</a></li>
                        <li><a href="{{ route('orders.index') }}" class="{{ request()->routeIs('orders.index') ? 'active' : '' }}">Orders</a></li>
                        @if(Auth::user()->isAdmin())
                            <li><a href="{{ route('admin.index') }}" class="{{ request()->routeIs('admin.index') ? 'active' : '' }}">Dashboard</a></li>
                        @endif
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="slide-btn-auth slide-btn-login">Login</a></li>
                        <li><a href="{{ route('register') }}" class="slide-btn-auth slide-btn-register">Register</a></li>
                    @endauth
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
                    <a href="{{ route('login') }}" class="slide-btn-auth slide-btn-login">Login</a>
                    <a href="{{ route('register') }}" class="slide-btn-auth slide-btn-register">Register</a>
                </div>
            @endauth
        </div>

        <!-- Menu Overlay -->
        <div class="menu-overlay" id="menuOverlay"></div>

        <!-- MAIN CONTENT -->
        <main>
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

            <div class="products-page">
                <div class="container">
                    <h1 class="page-title">Explore Our Collection</h1>
                    
                    <!-- Filter Buttons -->
                    <div class="filter-buttons">
                        <button class="filter-btn active" data-filter="all">All</button>
                        @foreach($categories as $category)
                            <button class="filter-btn" data-filter="{{ strtolower($category->name) }}">{{ $category->name }}</button>
                        @endforeach
                    </div>
                    
                    <!-- Products by Category -->
                    @foreach($categories as $category)
                        <section class="category-section" data-category="{{ strtolower($category->name) }}">
                            <h2 class="category-title">{{ $category->name }}</h2>
                            <div class="row flex-nowrap overflow-auto pb-4">
                                @foreach($category->products as $product)
                                    <div class="col-md-3 col-lg-2 col-xl-2 mb-4">
                                        <div class="card h-100 product-card">
                                            @if($product->image_path)
                                                <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
                                            @else
                                                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="{{ $product->name }}">
                                            @endif
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">{{ $product->name }}</h5>
                                                <p class="card-text">{{ Str::limit($product->description, 60) }}</p>
                                                <p class="card-text mt-auto"><strong>₹{{ number_format($product->price, 2) }}</strong></p>
                                                @if($product->is_featured)
                                                    <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-2">Featured</span>
                                                @endif
                                                <div class="mt-auto">
                                                    <a href="{{ route('products.show', $product) }}" class="btn btn-primary w-100">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    @endforeach
                </div>
            </div>
        </main>

        <!-- FOOTER -->
        @include('layouts.app-footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
            
            // Product filtering
            const filterButtons = document.querySelectorAll('.filter-btn');
            const categorySections = document.querySelectorAll('.category-section');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    // Show/hide sections based on filter
                    if (filterValue === 'all') {
                        categorySections.forEach(section => section.style.display = 'block');
                    } else {
                        categorySections.forEach(section => {
                            if (section.getAttribute('data-category') === filterValue) {
                                section.style.display = 'block';
                            } else {
                                section.style.display = 'none';
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>