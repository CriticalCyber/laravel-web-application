<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AriDhi Collections Admin')</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
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
            font-weight: 400;
            background-color: var(--light-bg);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-y: auto;
            height: auto;
        }

        .container {
            width: 100%;
            max-width: var(--max-width);
            margin: 0 auto;
            padding: 0 20px;
        }

        .page {
            background: #fff;
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* HEADER */
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
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
            font-weight: 700;
            font-size: 28px;
            color: var(--text-dark);
            letter-spacing: 1px;
            text-transform: capitalize;
            position: relative;
            padding: 0 5px;
            line-height: 1;
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
            font-weight: 500;
            font-size: 16px;
            transition: var(--transition);
            position: relative;
            display: flex;
            align-items: center;
            height: auto;
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
            gap: 8px; /* Reduced gap between icons */
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
        }

        .dropdown-menu a:hover {
            color: var(--primary-color);
        }

        .welcome-text {
            color: var(--text-dark);
            font-weight: 500;
            margin-right: 10px;
        }

        .btn-auth {
            padding: 8px 16px;
            border-radius: var(--border-radius);
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
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

        /* Admin Sidebar */
        .admin-sidebar {
            position: fixed;
            top: 100px;
            left: 0;
            width: 250px;
            height: calc(100vh - 100px);
            background: #f8f9fa;
            border-right: 1px solid #dee2e6;
            padding: 20px 0;
            overflow-y: auto;
            z-index: 999;
            transition: all 0.3s ease;
        }

        .admin-sidebar .nav-link {
            color: #495057;
            padding: 12px 20px;
            border-radius: 0;
            font-weight: 500;
            display: block;
            border-bottom: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .admin-sidebar .nav-link:hover, .admin-sidebar .nav-link.active {
            background: var(--primary-color);
            color: white;
        }

        .admin-sidebar .nav-link:last-child {
            border-bottom: none;
        }

        /* Mobile Admin Sidebar */
        .mobile-admin-sidebar {
            position: fixed;
            top: 100px;
            left: -300px;
            width: 300px;
            height: calc(100vh - 100px);
            background: #f8f9fa;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            z-index: 1001;
            transition: all 0.3s ease;
            overflow-y: auto;
            padding: 20px 0;
        }

        .mobile-admin-sidebar.open {
            left: 0;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            margin-left: 250px;
            padding-top: 100px; /* Add padding to account for fixed header */
        }

        /* Vertical Navigation for Admin Menu */
        .admin-nav {
            display: flex;
            flex-direction: column;
        }

        .admin-nav .nav-item {
            margin-bottom: 0;
        }

        .admin-nav .nav-link {
            color: #495057;
            padding: 12px 20px;
            border-radius: 0;
            font-weight: 500;
            display: block;
            border-bottom: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .admin-nav .nav-link:hover, .admin-nav .nav-link.active {
            background: var(--primary-color);
            color: white;
        }

        .admin-nav .nav-link:last-child {
            border-bottom: none;
        }

        /* Overlay */
        .menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            backdrop-filter: blur(3px);
        }

        .menu-overlay.open {
            opacity: 1;
            visibility: visible;
        }

        /* Sidebar Toggle Button */
        .sidebar-toggle {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: var(--text-dark);
            padding: 0;
            margin-right: 8px; /* Reduced margin */
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
            font-weight: 700;
            font-size: 22px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
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
                gap: 6px; /* Reduced gap on smaller screens */
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
            
            .admin-sidebar {
                width: 220px;
                padding: 15px 0;
            }
            
            .admin-sidebar .nav-link {
                padding: 10px 15px;
                font-size: 15px;
            }
            
            .main-content {
                padding: 15px;
                margin-left: 220px;
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
            .admin-sidebar {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid #dee2e6;
                position: relative;
                height: auto;
            }
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .header-container {
                padding: 15px 20px;
            }
            
            .logo-img {
                height: 45px;
            }
            
            .brand {
                font-size: 22px;
            }
            
            .main-content {
                margin-left: 0;
                padding-top: 100px; /* Add padding to account for fixed header */
            }
        }
        
        /* Tablet styles */
        @media (max-width: 768px) {
            .admin-sidebar {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid #dee2e6;
                padding: 15px 0;
                position: relative;
                height: auto;
                display: none;
            }
            
            .admin-sidebar .nav-link {
                padding: 12px 20px;
                font-size: 16px;
            }
            
            .main-content {
                padding: 15px;
                padding-top: 100px; /* Add padding to account for fixed header */
                margin-left: 0;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .footer-column h3 {
                font-size: 20px;
            }
            
            .header-container {
                padding: 15px 20px;
            }
            
            .auth-buttons {
                gap: 6px; /* Keep reduced gap on mobile */
            }
            
            .admin-sidebar .nav {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                gap: 5px;
            }
            
            .admin-sidebar .nav-item {
                margin-bottom: 5px;
            }
            
            .admin-sidebar .nav-link {
                border-radius: 5px;
                text-align: center;
                padding: 8px 12px;
                font-size: 14px;
            }
        }

        @media (max-width: 576px) {
            .header-container {
                padding: 12px 15px;
                /* Keep items in a row on mobile */
                flex-direction: row;
            }
            
            .logo-img {
                height: 40px;
            }
            
            .brand {
                font-size: 22px;
            }
            
            .admin-sidebar .nav-link {
                padding: 10px 15px;
                font-size: 15px;
            }
            
            .main-content {
                padding: 12px;
                padding-top: 100px; /* Add padding to account for fixed header */
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
            
            .auth-buttons {
                margin-top: 0;
                width: auto;
                justify-content: flex-end;
                gap: 6px; /* Keep reduced gap on small screens */
            }
            
            .admin-sidebar .nav {
                flex-direction: column;
                align-items: center;
            }
            
            .admin-sidebar .nav-link {
                width: 90%;
                text-align: center;
                padding: 10px;
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
            
            .admin-sidebar .nav-link {
                padding: 8px 12px;
                font-size: 14px;
            }
            
            .main-content {
                padding: 10px;
                padding-top: 100px; /* Add padding to account for fixed header */
            }
            
            .footer-column h3 {
                font-size: 18px;
            }
            
            .copyright {
                font-size: 11px;
            }
            
            .auth-buttons {
                gap: 5px; /* Minimal gap on very small screens */
            }
            
            .admin-sidebar .nav-link {
                width: 95%;
                padding: 8px;
                font-size: 13px;
            }
        }

        @media (max-width: 400px) {
            .header-container {
                padding: 8px;
            }
            
            .logo-img {
                height: 30px;
            }
            
            .brand {
                font-size: 18px;
            }
            
            .admin-sidebar .nav-link {
                padding: 6px 10px;
                font-size: 12px;
            }
            
            .main-content {
                padding: 8px;
                padding-top: 100px; /* Add padding to account for fixed header */
            }
            
            .footer-column h3 {
                font-size: 16px;
                margin-bottom: 10px;
            }
            
            .copyright {
                font-size: 10px;
                padding-top: 15px;
            }
            
            .auth-buttons {
                gap: 4px; /* Minimal gap on extremely small screens */
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

                <!-- User Profile Button with Sidebar Toggle -->
                <div class="auth-buttons">
                    <button class="sidebar-toggle" id="sidebarToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    @auth
                        <div class="user-dropdown" id="userDropdown">
                            <button class="user-icon-btn">
                                <i class="fas fa-user"></i>
                            </button>
                            <div class="dropdown-menu" id="dropdownMenu">
                                <span class="user-name">{{ Auth::user()->name }}</span>
                                <a href="{{ route('logout') }}" 
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="btn-auth btn-login">Login</a>
                        <a href="{{ route('register') }}" class="btn-auth btn-register">Register</a>
                    @endauth
                </div>
            </div>
        </header>

        <!-- ADMIN SIDEBAR -->
        <!-- Desktop Sidebar -->
        <nav class="admin-sidebar" id="desktopSidebar">
            <ul class="nav admin-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.index') ? 'active' : '' }}" href="{{ route('admin.index') }}">
                        <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.products*') ? 'active' : '' }}" href="{{ route('admin.products') }}">
                        <i class="fas fa-box me-2"></i>Products
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('categories*') ? 'active' : '' }}" href="{{ route('categories.index') }}">
                        <i class="fas fa-tags me-2"></i>Categories
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.orders*') ? 'active' : '' }}" href="{{ route('admin.orders') }}">
                        <i class="fas fa-shopping-cart me-2"></i>Orders
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.new_arrivals') ? 'active' : '' }}" href="{{ route('admin.new_arrivals') }}">
                        <i class="fas fa-star me-2"></i>New Arrivals
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.contacts*') ? 'active' : '' }}" href="{{ route('admin.contacts') }}">
                        <i class="fas fa-envelope me-2"></i>Contact Messages
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="fas fa-arrow-left me-2"></i>Back to Store
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Mobile Sidebar -->
        <nav class="mobile-admin-sidebar" id="mobileSidebar">
            <ul class="nav admin-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.index') ? 'active' : '' }}" href="{{ route('admin.index') }}">
                        <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.products*') ? 'active' : '' }}" href="{{ route('admin.products') }}">
                        <i class="fas fa-box me-2"></i>Products
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('categories*') ? 'active' : '' }}" href="{{ route('categories.index') }}">
                        <i class="fas fa-tags me-2"></i>Categories
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.orders*') ? 'active' : '' }}" href="{{ route('admin.orders') }}">
                        <i class="fas fa-shopping-cart me-2"></i>Orders
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.new_arrivals') ? 'active' : '' }}" href="{{ route('admin.new_arrivals') }}">
                        <i class="fas fa-star me-2"></i>New Arrivals
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.contacts*') ? 'active' : '' }}" href="{{ route('admin.contacts') }}">
                        <i class="fas fa-envelope me-2"></i>Contact Messages
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="fas fa-arrow-left me-2"></i>Back to Store
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Overlay for mobile sidebar -->
        <div class="menu-overlay" id="menuOverlay"></div>

        <!-- MAIN CONTENT -->
        <div class="main-content">
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

            @yield('content')
        </div>

        <!-- FOOTER -->
        <footer>
            <div class="container">
                <div class="footer-content">
                    <div class="footer-column">
                        <h3>AriDhi Collections</h3>
                        <p>Premium handcrafted home furnishings that bring elegance and comfort to your living spaces.</p>
                        <div class="social-links">
                            <a href="https://www.instagram.com/aridhicollections?igsh=MTk5azhuMWM5Nzg3YQ%3D%3D&utm_source=qr" target="_blank" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            
                        </div>
                    </div>
                    <div class="footer-column">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('products.index') }}">Products</a></li>
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
                            <li>Phone: +91 6000756720</li>
                        </ul>
                    </div>
                </div>
                <div class="copyright">
                    <p>&copy; 2025 AriDhi Collections. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Admin sidebar functionality
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebarToggle');
            const desktopSidebar = document.getElementById('desktopSidebar');
            const mobileSidebar = document.getElementById('mobileSidebar');
            const menuOverlay = document.getElementById('menuOverlay');
            const body = document.body;
            
            // Open sidebar
            sidebarToggle.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    // Mobile view - toggle mobile sidebar
                    mobileSidebar.classList.toggle('open');
                    menuOverlay.classList.toggle('open');
                    body.style.overflow = mobileSidebar.classList.contains('open') ? 'hidden' : '';
                } else {
                    // Desktop view - toggle desktop sidebar
                    if (desktopSidebar.style.display === 'none') {
                        desktopSidebar.style.display = 'block';
                        document.querySelector('.main-content').style.marginLeft = '250px';
                    } else {
                        desktopSidebar.style.display = 'none';
                        document.querySelector('.main-content').style.marginLeft = '0';
                    }
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
            
            // Close mobile sidebar when clicking on overlay
            menuOverlay.addEventListener('click', function() {
                if (mobileSidebar.classList.contains('open')) {
                    mobileSidebar.classList.remove('open');
                    menuOverlay.classList.remove('open');
                    body.style.overflow = '';
                }
            });
            
            // Close mobile sidebar when clicking on a link
            const mobileSidebarLinks = document.querySelectorAll('.mobile-admin-sidebar .nav-link');
            mobileSidebarLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileSidebar.classList.remove('open');
                    menuOverlay.classList.remove('open');
                    body.style.overflow = '';
                });
            });
            
            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    // Desktop view
                    desktopSidebar.style.display = 'block';
                    document.querySelector('.main-content').style.marginLeft = '250px';
                    mobileSidebar.classList.remove('open');
                    menuOverlay.classList.remove('open');
                    body.style.overflow = '';
                } else {
                    // Mobile view
                    desktopSidebar.style.display = 'none';
                    document.querySelector('.main-content').style.marginLeft = '0';
                }
            });
        });
    </script>
    
    @yield('scripts')
</body>
</html>