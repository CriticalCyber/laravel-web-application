<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AriDhi Collections')</title>
    <!-- Geist Font Import -->
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #8B5E3C;
            --primary-dark: #5C3B24;
            --secondary-color: #D7BFA7;
            --dark-bg: #2a2a2a;
            --light-bg: #f8f8f8;
            --text-dark: #333;
            --text-light: #fff;
            --border-color: #eee;
            --transition: all 0.3s ease;
            --max-width: 1200px;
            --border-radius: 8px;
            --light-beige: #FAF9F6;
            --gold: #8B5E3C;
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
            max-width: var(--max-width);
            margin: 0 auto;
        }

        /* Logo Area */
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
            font-size: 28px;
            font-weight: 700;
            color: #333;
            letter-spacing: 1px;
            text-transform: capitalize;
            position: relative;
            padding: 0 5px;
            line-height: 1.2;
            align-self: center;
        }

        /* Vertical Navigation for Desktop */
        .desktop-nav {
            display: none;
        }

        .desktop-nav.open {
            display: block;
        }

        .desktop-nav ul {
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

        .desktop-nav li {
            width: 100%;
        }

        .desktop-nav a {
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

        .desktop-nav a:hover, .desktop-nav a.active {
            color: #8B5E3C;
        }

        .desktop-nav a.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: #8B5E3C;
        }

        /* Auth Buttons */
        .auth-buttons {
            display: flex;
            flex-direction: column;
            gap: 15px;
            align-items: flex-start;
            width: 100%;
            padding-top: 15px;
            margin-top: 15px;
            border-top: 1px solid #eee;
        }

        .user-dropdown {
            position: relative;
            display: inline-block;
        }

        .user-icon-btn {
            background: #8B5E3C;
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
            transition: all 0.3s ease;
            padding: 0;
        }

        .user-img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }

        .user-icon-btn:hover {
            background: #5C3B24;
            transform: scale(1.05);
        }

        .dropdown-menu {
            position: absolute;
            top: 50px;
            right: 0;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 15px;
            min-width: 180px;
            display: none;
            z-index: 1000;
            border: 1px solid #eee;
        }

        .dropdown-menu.show {
            display: block;
        }

        .user-name {
            display: block;
            font-weight: 600;
            color: #333;
            padding-bottom: 10px;
            margin-bottom: 10px;
            border-bottom: 1px solid #eee;
            font-family: 'Geist', sans-serif;
        }

        .dropdown-menu a {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #333;
            text-decoration: none;
            padding: 8px 0;
            font-size: 14px;
            transition: all 0.3s ease;
            font-family: 'Geist', sans-serif;
        }

        .dropdown-menu a:hover {
            color: #8B5E3C;
        }

        .btn-auth {
            padding: 8px 16px;
            border-radius: 8px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            font-family: 'Geist', sans-serif;
            width: 100%;
        }

        .btn-login {
            border: 2px solid #8B5E3C;
            color: #8B5E3C;
            background: transparent;
        }

        .btn-login:hover {
            background: #8B5E3C;
            color: #fff;
        }

        .btn-register, .btn-logout {
            background: #8B5E3C;
            color: #fff;
            border: 2px solid #8B5E3C;
        }

        .btn-register:hover, .btn-logout:hover {
            background: transparent;
            color: #8B5E3C;
        }

        /* Burger Menu Button */
        .burger-menu-btn {
            display: flex;
            background: none;
            border: none;
            cursor: pointer;
            color: #333;
            position: relative;
            width: 30px;
            height: 30px;
            z-index: 1001;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 6px;
            padding: 0;
        }

        /* Burger Icon */
        .burger-icon {
            position: relative;
            width: 30px;
            height: 3px;
            background-color: #333;
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        .burger-icon::before,
        .burger-icon::after {
            content: '';
            position: absolute;
            width: 30px;
            height: 3px;
            background-color: #333;
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        .burger-icon::before {
            top: -8px;
        }

        .burger-icon::after {
            top: 8px;
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
            margin: 0;
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
        .main-content {
            padding-top: 120px;
        }

        /* Footer */
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

        .footer-column h5 {
            font-family: 'Geist', sans-serif;
            font-size: 22px;
            font-weight: 700; /* Geist Bold */
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
            line-height: 1.3; /* Adjusted for Geist font */
            color: var(--text-light);
        }

        .footer-column h5::after {
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

        /* Footer Responsive Styles */
        @media (max-width: 1200px) {
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
                gap: 25px;
            }
            
            .footer-column h5 {
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
            
            .footer-column h5::after {
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
            
            .footer-column h5 {
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
            
            .footer-column h5 {
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
            
            .footer-column h5 {
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
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
                gap: 25px;
            }
            
            .footer-column h5 {
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
                gap: 20px;
            }
        }

        @media (max-width: 768px) {
            .header-container {
                flex-wrap: nowrap;
                position: relative;
                padding: 15px 20px;
            }
            
            .vertical-nav {
                display: none;
            }
            
            .burger-menu-btn {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            .auth-buttons {
                display: none;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .footer-column {
                text-align: center;
            }
            
            .footer-column h5::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .social-links {
                justify-content: center;
            }
            
            .slide-menu {
                width: 280px;
            }
            
            .slide-menu-nav a {
                font-size: 16px;
            }
            
            .main-content {
                padding-top: 100px;
            }
        }

        @media (max-width: 576px) {
            .header-container {
                padding: 12px 15px;
            }
            
            .logo-img {
                height: 40px;
            }
            
            .brand {
                font-size: 20px;
            }
            
            .burger-menu-btn {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            footer {
                padding: 50px 0 20px;
            }
            
            .footer-column h5 {
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
            
            .slide-menu {
                width: 250px;
                padding: 15px;
            }
            
            .slide-menu-header {
                padding-bottom: 15px;
                margin-bottom: 15px;
            }
            
            .slide-menu-nav a {
                font-size: 15px;
                padding: 8px 0;
            }
            
            .slide-auth-buttons {
                margin-top: 20px;
                gap: 10px;
            }
            
            .slide-btn-auth {
                padding: 10px 16px;
                font-size: 14px;
            }
            
            .main-content {
                padding-top: 90px;
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
                font-size: 18px;
            }
            
            .burger-menu-btn {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            footer {
                padding: 40px 0 15px;
            }
            
            .footer-column h5 {
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
            
            .slide-menu {
                width: 230px;
            }
            
            .slide-menu-brand {
                font-size: 18px;
            }
            
            .main-content {
                padding-top: 80px;
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
                font-size: 16px;
            }
            
            .burger-menu-btn {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            footer {
                padding: 30px 0 10px;
            }
            
            .footer-column h5 {
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
            
            .slide-menu {
                width: 200px;
                padding: 10px;
            }
            
            .slide-menu-header {
                padding-bottom: 10px;
                margin-bottom: 10px;
            }
            
            .slide-menu-nav a {
                font-size: 14px;
                padding: 6px 0;
            }
            
            .slide-btn-auth {
                padding: 8px 12px;
                font-size: 13px;
            }
            
            .main-content {
                padding-top: 70px;
            }
        }
        
        /* Additional mobile improvements */
        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }
            
            .alert {
                padding: 12px;
                font-size: 0.9rem;
            }
        }
        
        @media (max-width: 576px) {
            .container {
                padding: 0 10px;
            }
            
            .alert {
                padding: 10px;
                font-size: 0.85rem;
            }
        }
        
        @media (max-width: 480px) {
            .container {
                padding: 0 8px;
            }
            
            .alert {
                padding: 8px;
                font-size: 0.8rem;
            }
        }
        
        @media (max-width: 360px) {
            .container {
                padding: 0 5px;
            }
            
            .alert {
                padding: 6px;
                font-size: 0.75rem;
            }
        }
    </style>
</head>
<body>
    <div class="page">
        <!-- Include the header -->
        @include('layouts.app-header')

        <main class="main-content container">
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

        <!-- Footer -->
        @include('layouts.app-footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<script>
    // Burger menu functionality
    document.addEventListener('DOMContentLoaded', function() {
        const burgerMenuBtn = document.getElementById('burgerMenuBtn');
        const closeMenuBtn = document.getElementById('closeMenuBtn');
        const slideMenu = document.getElementById('slideMenu');
        const menuOverlay = document.getElementById('menuOverlay');
        const desktopNav = document.querySelector('.vertical-nav');
        const body = document.body;
        
        // Toggle desktop navigation or mobile slide menu
        burgerMenuBtn.addEventListener('click', function() {
            if (window.innerWidth >= 769) {
                // Desktop view - toggle desktop nav
                desktopNav.classList.toggle('open');
            } else {
                // Mobile view - open slide menu
                slideMenu.classList.add('open');
                menuOverlay.classList.add('open');
                burgerMenuBtn.classList.add('active');
                body.style.overflow = 'hidden';
                        
                // Focus first element in menu for accessibility
                const firstFocusableElement = slideMenu.querySelector('a, button');
                if (firstFocusableElement) {
                    setTimeout(() => firstFocusableElement.focus(), 100);
                }
            }
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
            if (desktopNav && desktopNav.classList.contains('open') && 
                !desktopNav.contains(event.target) && 
                !burgerMenuBtn.contains(event.target)) {
                desktopNav.classList.remove('open');
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
        
        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 769) {
                // Close mobile menu if open and switching to desktop
                closeMobileMenu();
                // Ensure vertical nav is hidden on resize to desktop
                if (desktopNav) {
                    desktopNav.classList.remove('open');
                }
            }
        });
    });
</script>
</html>