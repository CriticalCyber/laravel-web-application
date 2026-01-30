<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AriDhi Collections - Premium handcrafted bedsheets, table runners, rugs & cushions with timeless elegance and comfort.">
    <meta name="keywords" content="bedsheets, table runners, rugs, cushions, handmade, luxury home decor">
    <meta name="author" content="AriDhi Collections">
    
    <title>Terms & Conditions - AriDhi Collections</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;700&display=swap" rel="stylesheet">
    
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
            box-shadow: var(--shadow);
            overflow-x: hidden;
            min-height: 100vh;
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

        /* Vertical Navigation for Desktop */
        .vertical-nav {
            display: none;
        }

        .vertical-nav.open {
            display: block;
        }

        .vertical-nav ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin: 0;
            padding: 20px;
            align-items: flex-start;
            background: #fff;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            z-index: 999;
            border-top: 1px solid #eee;
        }

        .vertical-nav li {
            width: 100%;
        }

        .vertical-nav a {
            text-decoration: none;
            color: #222;
            font-weight: 500;
            font-size: 16px;
            transition: all 0.3s ease;
            position: relative;
            display: block;
            padding: 10px 0;
            font-family: 'Geist', sans-serif;
            border-bottom: 1px solid #f0f0f0;
        }

        .vertical-nav a:hover, .vertical-nav a.active {
            color: #8B5E3C;
        }

        .vertical-nav a.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: #8B5E3C;
        }

        /* Burger Menu Button */
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

        /* Burger Icon */
        .burger-icon {
            position: relative;
            width: 40px;
            height: 4px;
            background-color: #333;
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        .burger-icon::before,
        .burger-icon::after {
            content: '';
            position: absolute;
            width: 40px;
            height: 4px;
            background-color: #333;
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        .burger-icon::before {
            top: -12px;
        }

        .burger-icon::after {
            top: 12px;
        }

        /* Active State for Burger Icon */
        .burger-menu-btn.active .burger-icon {
            background-color: transparent;
        }

        .burger-menu-btn.active .burger-icon::before {
            top: 0;
            transform: rotate(45deg);
        }

        .burger-menu-btn.active .burger-icon::after {
            top: 0;
            transform: rotate(-45deg);
        }

        /* Slide-in Menu */
        .slide-menu {
            position: fixed;
            top: 0;
            right: -300px;
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
            right: 0;
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
            color: #333;
        }

        .close-menu-btn {
            background: none;
            border: none;
            font-size: 28px;
            cursor: pointer;
            color: #333;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slide-menu-nav ul {
            list-style: none;
            padding: 0;
            margin: 10px ;
            display: flex;
            flex-direction: column;
        }

        .slide-menu-nav li {
            margin-bottom: 15px;
        }

        .slide-menu-nav a {
            text-decoration: none;
            color: #333;
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
            color: #8B5E3C;
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
            border-radius: 8px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Geist', sans-serif;
        }

        .slide-btn-login {
            border: 2px solid #8B5E3C;
            color: #8B5E3C;
            background: transparent;
        }

        .slide-btn-login:hover {
            background: #8B5E3C;
            color: #fff;
        }

        .slide-btn-register, .slide-btn-logout {
            background: #8B5E3C;
            color: #fff;
            border: 2px solid #8B5E3C;
        }

        .slide-btn-register:hover, .slide-btn-logout:hover {
            background: transparent;
            color: #8B5E3C;
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

        /* Main Content */
        .policy-content {
            padding: 60px 0;
            max-width: 1000px;
            margin: 0 auto;
        }

        .policy-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .policy-header h1 {
            font-family: 'Geist', sans-serif;
            font-weight: 700;
            font-size: 36px;
            color: var(--text-dark);
            margin-bottom: 20px;
        }

        .policy-header .last-updated {
            color: #666;
            font-size: 16px;
        }

        .policy-section {
            margin-bottom: 30px;
        }

        .policy-section h4 {
            font-family: 'Geist', sans-serif;
            font-weight: 500;
            font-size: 22px;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .policy-section p {
            margin-bottom: 15px;
            line-height: 1.7;
        }

        .policy-section ul {
            padding-left: 20px;
            margin-bottom: 20px;
        }

        .policy-section ul li {
            margin-bottom: 10px;
            line-height: 1.7;
        }

        .policy-section a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .policy-section a:hover {
            text-decoration: underline;
        }

        .thank-you {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #666;
        }

        /* FOOTER */
        footer {
            background: var(--dark-bg);
            color: var(--text-light);
            padding: 60px 0 30px;
            margin-top: 60px;
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
        @media (max-width: 992px) {
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
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
            
            .policy-header h1 {
                font-size: 28px;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .header-container {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .policy-content {
                padding: 40px 20px;
            }
            
            .policy-header h1 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>
    <div class="page">
        <!-- HEADER -->
        <header>
            <div class="header-container">
                <!-- Logo + Brand -->
                <a href="{{ route('home') }}" class="logo-area">
                    <img src="{{ asset('images/logotm.jpeg') }}" alt="AriDhi Collections Logo" class="logo-img">
                    <div class="brand">AriDhi Collections</div>
                </a>

                <!-- Burger / Menu Button for Mobile -->
                <div style="display: flex; align-items: center; gap: 15px;">
                    <button class="burger-menu-btn" id="burgerMenuBtn">
                        <div class="burger-icon"></div>
                    </button>
                    
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
                        <a href="{{ route('login') }}" class="btn-auth btn-login" style="height: 40px; display: flex; align-items: center;">Login</a>
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

                        <!-- Auth Section - Only show Login/Register for guests -->
                        @guest
                        <li class="auth-buttons">
                            <a href="{{ route('login') }}" class="btn-auth btn-login">Login</a>
                            <a href="{{ route('register') }}" class="btn-auth btn-register">Register</a>
                        </li>
                        @endguest
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
                <button class="close-menu-btn" id="closeMenuBtn">&times;</button>
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
                    <a href="{{ route('login') }}" class="slide-btn-auth slide-btn-login">Login</a>
                    <a href="{{ route('register') }}" class="slide-btn-auth slide-btn-register">Register</a>
                </div>
            @endauth
        </div>

        <!-- Menu Overlay -->
        <div class="menu-overlay" id="menuOverlay"></div>

        <!-- MAIN CONTENT -->
        <main class="policy-content">
            <div class="container">
                <div class="policy-header">
                    <h1>Terms & Conditions</h1>
                    <p class="last-updated"><strong>Last updated:</strong> {{ date('F d, Y') }}</p>
                </div>

                <div class="policy-section">
                    <p>Welcome to AriDhi Collections. These Terms & Conditions ("Terms") govern your use of the website and purchase of products.</p>
                </div>

                <div class="policy-section">
                    <h4>1. Acceptance of Terms</h4>
                    <p>By accessing or using our website and placing an order, you agree to be bound by these Terms and our Privacy Policy.</p>
                </div>

                <div class="policy-section">
                    <h4>2. Use of the Website</h4>
                    <p>You agree to use the website only for lawful purposes. You must not use the site in any way that causes damage or interference with the site (including uploading harmful code, etc.).</p>
                </div>

                <div class="policy-section">
                    <h4>3. Products and Orders</h4>
                    <ul>
                        <li>We strive to display accurate product information; however we do not warrant that product descriptions or other content are complete or error-free.</li>
                        <li>All orders are subject to acceptance and availability. We may refuse or cancel any order at our discretion.</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h4>4. Pricing & Payment</h4>
                    <ul>
                        <li>Prices are quoted in INR and exclude applicable taxes unless stated otherwise.</li>
                        <li>Payment must be made via the methods we provide, and you represent that you are authorized to use the payment method.</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h4>5. Shipping & Delivery</h4>
                    <ul>
                        <li>We will ship your order to the address you provide.</li>
                        <li>Delivery times are estimates and commence from the date of shipping. We are not responsible for delays caused by carriers, customs, or other factors outside our control.</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h4>6. Return, Refund and Exchange</h4>
                    <p>Please refer to our separate <a href="{{ route('refund.policy') }}">Refund & Return Policy</a> page for full details.</p>
                </div>

                <div class="policy-section">
                    <h4>7. Intellectual Property</h4>
                    <p>All content on this site, including text, images, graphics, logos, and software, is the property of AriDhi Collections or its licensors and is protected by applicable intellectual property laws. You may not reproduce, distribute or create derivative works without our prior written permission.</p>
                </div>

                <div class="policy-section">
                    <h4>8. Limitation of Liability</h4>
                    <p>To the fullest extent permitted by law, AriDhi Collections shall not be liable for any indirect, incidental, special or consequential loss arising out of or in connection with your use of the website or purchase of products.</p>
                </div>

                <div class="policy-section">
                    <h4>9. Governing Law & Jurisdiction</h4>
                    <p>These Terms shall be governed by and construed in accordance with the laws of Rajasthan, India. Any disputes shall be subject to the exclusive jurisdiction of the courts of Jodhpur.</p>
                </div>

                <div class="policy-section">
                    <h4>10. Changes to Terms</h4>
                    <p>We may update these Terms from time to time. The revised version will be effective as of the date indicated at the top of this page. Your continued use of the website after such changes constitutes your acceptance of the new Terms.</p>
                </div>

                <div class="thank-you">
                    <p>Thank you for choosing AriDhi Collections!</p>
                </div>
            </div>
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
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="#">Bedsheets</a></li>
                            <li><a href="#">Cushions</a></li>
                            <li><a href="#">Rugs</a></li>
                            <li><a href="#">Table Runners</a></li>
                            <li><a href="#">New Arrivals</a></li>
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
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Burger menu functionality
        document.addEventListener('DOMContentLoaded', function() {
            const burgerMenuBtn = document.getElementById('burgerMenuBtn');
            const closeMenuBtn = document.getElementById('closeMenuBtn');
            const slideMenu = document.getElementById('slideMenu');
            const menuOverlay = document.getElementById('menuOverlay');
            const verticalNav = document.querySelector('.vertical-nav');
            const body = document.body;
            
            // Toggle desktop vertical navigation
            burgerMenuBtn.addEventListener('click', function() {
                if (window.innerWidth > 768) {
                    // Desktop view - toggle vertical nav
                    verticalNav.classList.toggle('open');
                } else {
                    // Mobile view - open slide menu
                    slideMenu.classList.add('open');
                    menuOverlay.classList.add('open');
                    body.style.overflow = 'hidden';
                            
                    // Focus first element in menu for accessibility
                    const firstFocusableElement = slideMenu.querySelector('a, button');
                    if (firstFocusableElement) {
                        setTimeout(() => firstFocusableElement.focus(), 100);
                    }
                }
                burgerMenuBtn.classList.toggle('active');
            });
            
            // Close menu function for mobile
            function closeMobileMenu() {
                slideMenu.classList.remove('open');
                menuOverlay.classList.remove('open');
                burgerMenuBtn.classList.remove('active');
                body.style.overflow = '';
            }
            
            // Close menu when close button is clicked
            closeMenuBtn.addEventListener('click', closeMobileMenu);
            
            // Close menu when overlay is clicked
            menuOverlay.addEventListener('click', closeMobileMenu);
            
            // Close menu when a link is clicked
            const menuLinks = document.querySelectorAll('.slide-menu-nav a');
            menuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    // Add a small delay to allow for navigation
                    setTimeout(closeMobileMenu, 150);
                });
            });
            
            // Close menu with ESC key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && slideMenu.classList.contains('open')) {
                    closeMobileMenu();
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
            
            // Close desktop nav when clicking outside
            document.addEventListener('click', function(event) {
                if (verticalNav && verticalNav.classList.contains('open') && 
                    !verticalNav.contains(event.target) && 
                    !burgerMenuBtn.contains(event.target)) {
                    verticalNav.classList.remove('open');
                    burgerMenuBtn.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>