<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'AriDhi Collections')</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;700&display=swap" rel="stylesheet">
    
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
            height: 40px;
            width: auto;
        }

        .brand {
            font-family: 'Geist', sans-serif;
            font-weight: 700;
            font-size: 20px;
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

        /* Add new styles for the burger menu button */
        .burger-menu-btn {
            display: flex;
            background: none;
            border: none;
            cursor: pointer;
            color: #333;
            position: relative;
            width: 40px;
            height: 40px;
            z-index: 1001;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 8px;
            padding: 0;
            font-size: 32px; /* Increase icon size */
        }

        /* Remove or comment out the old mobile menu button styles */
        /*
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-dark);
            position: relative;
            width: 30px;
            height: 30px;
            z-index: 1001;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 6px;
            padding: 0;
        }

        .burger-icon {
            position: relative;
            width: 30px;
            height: 3px;
            background-color: var(--text-dark);
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        .burger-icon::before,
        .burger-icon::after {
            content: '';
            position: absolute;
            width: 30px;
            height: 3px;
            background-color: var(--text-dark);
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        .burger-icon::before {
            top: -8px;
        }

        .burger-icon::after {
            top: 8px;
        }

        .mobile-menu-btn.active .burger-icon {
            background-color: transparent;
        }

        .mobile-menu-btn.active .burger-icon::before {
            top: 0;
            transform: rotate(45deg);
        }

        .mobile-menu-btn.active .burger-icon::after {
            top: 0;
            transform: rotate(-45deg);
        }
        */

        /* Slide-in Menu */
        .slide-menu {
            position: fixed;
            top: 0;
            left: -300px;
            width: 300px;
            height: 100%;
            background: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            z-index: 1001;
            transition: all 0.3s ease;
            overflow-y: auto;
            padding: 20px;
        }

        .slide-menu.open {
            left: 0;
        }

        .slide-menu-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
            margin-bottom: 20px;
        }

        .slide-menu-logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .slide-menu-logo-img {
            height: 40px;
            width: auto;
        }

        .slide-menu-brand {
            font-family: 'Geist', sans-serif;
            font-size: 20px;
            font-weight: 700;
            color: var(--text-dark);
        }

        .close-menu-btn {
            background: none;
            border: none;
            font-size: 28px;
            cursor: pointer;
            color: var(--text-dark);
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slide-menu-nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .slide-menu-nav li {
            margin-bottom: 15px;
        }

        .slide-menu-nav a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            font-size: 18px;
            display: block;
            padding: 12px 0;
            border-bottom: 1px solid #eee;
            transition: color 0.3s ease;
            font-family: 'Geist', sans-serif;
        }

        .slide-menu-nav a:hover,
        .slide-menu-nav a.active {
            color: var(--primary-color);
        }

        .slide-menu-nav a:last-child {
            border-bottom: none;
        }

        .slide-auth-buttons {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .slide-btn-auth {
            padding: 12px 20px;
            border-radius: var(--border-radius);
            font-weight: 500;
            text-decoration: none;
            transition: var(--transition);
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Geist', sans-serif;
        }

        .slide-btn-login {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            background: transparent;
        }

        .slide-btn-login:hover {
            background: var(--primary-color);
            color: var(--text-light);
        }

        .slide-btn-register, .slide-btn-logout {
            background: var(--primary-color);
            color: var(--text-light);
            border: 2px solid var(--primary-color);
        }

        .slide-btn-register:hover, .slide-btn-logout:hover {
            background: transparent;
            color: var(--primary-color);
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
            .header-container {
                padding: 15px 20px;
            }
            
            nav ul {
                display: none;
            }
            
            /* Update the mobile menu button display */
            .burger-menu-btn {
                display: block;
            }
            
            /* Slide-in Menu */
            .slide-menu {
                position: fixed;
                top: 0;
                left: -300px;
                width: 300px;
                height: 100%;
                background: #fff;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
                z-index: 1001;
                transition: all 0.3s ease;
                overflow-y: auto;
                padding: 20px;
            }

            .slide-menu.open {
                left: 0;
            }

            .slide-menu-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding-bottom: 20px;
                border-bottom: 1px solid #eee;
                margin-bottom: 20px;
            }

            .slide-menu-logo {
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .slide-menu-logo-img {
                height: 40px;
                width: auto;
            }

            .slide-menu-brand {
                font-family: 'Geist', sans-serif;
                font-size: 20px;
                font-weight: 700;
                color: var(--text-dark);
            }

            .close-menu-btn {
                background: none;
                border: none;
                font-size: 28px;
                cursor: pointer;
                color: var(--text-dark);
                width: 30px;
                height: 30px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .slide-menu-nav ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .slide-menu-nav li {
                margin-bottom: 15px;
            }

            .slide-menu-nav a {
                text-decoration: none;
                color: var(--text-dark);
                font-weight: 500;
                font-size: 18px;
                display: block;
                padding: 12px 0;
                border-bottom: 1px solid #eee;
                transition: color 0.3s ease;
                font-family: 'Geist', sans-serif;
            }

            .slide-menu-nav a:hover,
            .slide-menu-nav a.active {
                color: var(--primary-color);
            }

            .slide-menu-nav a:last-child {
                border-bottom: none;
            }

            .slide-auth-buttons {
                margin-top: 30px;
                display: flex;
                flex-direction: column;
                gap: 15px;
            }

            .slide-btn-auth {
                padding: 12px 20px;
                border-radius: var(--border-radius);
                font-weight: 500;
                text-decoration: none;
                transition: var(--transition);
                font-size: 16px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: 'Geist', sans-serif;
            }

            .slide-btn-login {
                border: 2px solid var(--primary-color);
                color: var(--primary-color);
                background: transparent;
            }

            .slide-btn-login:hover {
                background: var(--primary-color);
                color: var(--text-light);
            }

            .slide-btn-register, .slide-btn-logout {
                background: var(--primary-color);
                color: var(--text-light);
                border: 2px solid var(--primary-color);
            }

            .slide-btn-register:hover, .slide-btn-logout:hover {
                background: transparent;
                color: var(--primary-color);
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
            .header-container {
                flex-wrap: nowrap;
                position: relative;
                padding: 15px 20px;
            }
            
            .auth-buttons {
                margin-top: 15px;
            }
            
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
            </div>
        </header>

        <!-- Slide-in Menu -->
        <div class="slide-menu" id="slideMenu">
            <div class="slide-menu-header">
                <div class="slide-menu-logo">
                    <img src="{{ asset('images/logotm.jpeg') }}" alt="AriDhi Collections Logo" class="slide-menu-logo-img">
                    <div class="slide-menu-brand">AriDhi Collections</div>
                </div>
                <button class="close-menu-btn" id="closeMenuBtn">&times;</button>
            </div>
            <nav class="slide-menu-nav">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
                    <li><a href="{{ route('products.index') }}">Products</a></li>
                    <li><a href="{{ route('products.new_arrival') }}">New Arrivals</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                    @auth
                        <li><a href="{{ route('wishlist.index') }}">Wishlist</a></li>
                        <li><a href="{{ route('cart.index') }}">Cart</a></li>
                        <li><a href="{{ route('orders.index') }}">Orders</a></li>
                        <li>
                            <a href="{{ route('logout') }}" 
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endauth
                </ul>
            </nav>
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
        <main style="padding-top: 100px;">
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
        </main>

        <!-- FOOTER -->
        @include('layouts.app-footer')
    </div>

    <script>
        // Burger menu functionality
        document.addEventListener('DOMContentLoaded', function() {
            const burgerMenuBtn = document.getElementById('burgerMenuBtn');
            const closeMenuBtn = document.getElementById('closeMenuBtn');
            const slideMenu = document.getElementById('slideMenu');
            const menuOverlay = document.getElementById('menuOverlay');
            const body = document.body;
            
            // Open menu
            burgerMenuBtn.addEventListener('click', function() {
                slideMenu.classList.add('open');
                menuOverlay.classList.add('open');
                body.style.overflow = 'hidden';
                
                // Focus first element in menu for accessibility
                const firstFocusableElement = slideMenu.querySelector('a, button');
                if (firstFocusableElement) {
                    setTimeout(() => firstFocusableElement.focus(), 100);
                }
            });
            
            // Close menu
            function closeMenu() {
                slideMenu.classList.remove('open');
                menuOverlay.classList.remove('open');
                body.style.overflow = '';
            }
            
            // Close menu when close button is clicked
            closeMenuBtn.addEventListener('click', closeMenu);
            
            // Close menu when overlay is clicked
            menuOverlay.addEventListener('click', closeMenu);
            
            // Close menu when a link is clicked
            const menuLinks = document.querySelectorAll('.slide-menu-nav a');
            menuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    // Add a small delay to allow for navigation
                    setTimeout(closeMenu, 150);
                });
            });
            
            // Close menu with ESC key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && slideMenu.classList.contains('open')) {
                    closeMenu();
                }
            });
            
            // Focus trap for accessibility
            const focusableElements = slideMenu.querySelectorAll('a, button');
            if (focusableElements.length > 0) {
                const firstFocusableElement = focusableElements[0];
                const lastFocusableElement = focusableElements[focusableElements.length - 1];
                
                // Trap focus within the menu when it's open
                slideMenu.addEventListener('keydown', function(e) {
                    if (e.key === 'Tab') {
                        if (e.shiftKey && document.activeElement === firstFocusableElement) {
                            e.preventDefault();
                            lastFocusableElement.focus();
                        } else if (!e.shiftKey && document.activeElement === lastFocusableElement) {
                            e.preventDefault();
                            firstFocusableElement.focus();
                        }
                    }
                });
            }

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