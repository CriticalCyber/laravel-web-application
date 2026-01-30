<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AriDhi Collections - Premium handcrafted bedsheets, table runners, rugs & cushions with timeless elegance and comfort.">
    <meta name="keywords" content="bedsheets, table runners, rugs, cushions, handmade, luxury home decor">
    <meta name="author" content="AriDhi Collections">
    
    <title>About Us - AriDhi Collections</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Geist Font Import -->
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
            font-weight: 400; /* Geist Regular for body text */
            background-color: var(--light-bg);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-y: auto; /* Ensure vertical scrolling is enabled */
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

        /* Mobile responsive styles for navbar */
        @media (max-width: 768px) {
            .header-container {
                padding: 15px 20px;
            }
            
            .logo-img {
                height: 50px;
            }
            
            .brand {
                font-size: 24px;
            }
        }

        @media (max-width: 576px) {
            .header-container {
                padding: 12px 15px;
            }
            
            .logo-img {
                height: 45px;
            }
            
            .brand {
                font-size: 22px;
            }
        }

        @media (max-width: 480px) {
            .header-container {
                padding: 10px;
            }
            
            .logo-img {
                height: 40px;
            }
            
            .brand {
                font-size: 20px;
            }
        }

        @media (max-width: 360px) {
            .header-container {
                padding: 8px;
            }
            
            .logo-img {
                height: 35px;
            }
            
            .brand {
                font-size: 18px;
            }
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
            width: 40px;
            height: 40px;
            z-index: 1001;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 8px;
            padding: 0;
            font-size: 24px; /* Reduced icon size */
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

        /* ABOUT PAGE STYLES */
        .about-page {
            font-family: 'Geist', sans-serif;
            font-weight: 400; /* Geist Regular */
            background-color: var(--light-bg);
            color: var(--text-dark);
            line-height: 1.6;
            padding-bottom: 60px; /* Add bottom padding to ensure content is visible */
        }

        .section-title {
            text-align: center;
            font-family: 'Geist', sans-serif;
            font-size: 36px;
            font-weight: 700; /* Geist Bold for headings */
            color: var(--text-dark);
            margin-bottom: 60px;
            position: relative;
            text-transform: uppercase;
            line-height: 1.3; /* Adjusted for Geist font */
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--primary-color);
        }

        /* Founder Section */
        .founder-section {
            padding: 80px 0;
            background: #fff;
        }

        .founder-content {
            display: flex;
            align-items: center;
            gap: 40px;
            margin-bottom: 80px;
        }

        .founder-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .founder-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }

        .founder-image img:hover {
            transform: scale(1.03);
        }

        .founder-text {
            flex: 1;
        }

        .founder-text h2 {
            font-family: 'Geist', sans-serif;
            font-size: 32px;
            font-weight: 700; /* Geist Bold */
            margin-bottom: 20px;
            color: var(--text-dark);
            position: relative;
            padding-bottom: 15px;
            line-height: 1.3; /* Adjusted for Geist font */
        }

        .founder-text h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--primary-color);
        }

        .founder-tagline {
            font-family: 'Geist', sans-serif;
            font-size: 20px;
            font-weight: 500; /* Geist Medium */
            color: var(--primary-color);
            margin-bottom: 25px;
            line-height: 1.4; /* Adjusted for Geist font */
        }

        .founder-text p {
            font-family: 'Geist', sans-serif;
            font-size: 16px;
            font-weight: 400; /* Geist Regular */
            line-height: 1.8;
            color: #555;
            margin-bottom: 20px;
        }

        /* Brand Section */
        .brand-section {
            padding: 80px 0;
            background: var(--light-beige);
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
        }

        .brand-hero {
            background: url('{{ asset('images/25.jpg') }}') center/cover no-repeat;
            border-radius: 10px;
            height: 400px;
            margin-bottom: 60px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand-hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            border-radius: 10px;
        }

        .brand-hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
            max-width: 800px;
            padding: 0 20px;
        }

        .brand-hero-content h2 {
            font-family: 'Geist', sans-serif;
            font-size: 48px;
            font-weight: 700; /* Geist Bold */
            margin-bottom: 20px;
            line-height: 1.2; /* Adjusted for Geist font */
        }

        .brand-hero-content p {
            font-family: 'Geist', sans-serif;
            font-size: 20px;
            font-weight: 500; /* Geist Medium */
            margin-bottom: 30px;
            line-height: 1.5; /* Adjusted for Geist font */
        }

        .brand-content {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .brand-content h3 {
            font-family: 'Geist', sans-serif;
            font-size: 24px;
            font-weight: 700; /* Geist Bold */
            margin-bottom: 20px;
            color: var(--text-dark);
            position: relative;
            padding-bottom: 10px;
            line-height: 1.3; /* Adjusted for Geist font */
        }

        .brand-content h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--primary-color);
        }

        .brand-content p {
            font-family: 'Geist', sans-serif;
            font-size: 16px;
            font-weight: 400; /* Geist Regular */
            line-height: 1.8;
            color: #555;
            margin-bottom: 25px;
        }

        .brand-subsections {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .brand-subsection {
            background: var(--light-bg);
            padding: 30px;
            border-radius: 8px;
            border-left: 3px solid var(--primary-color);
            transition: transform 0.3s ease;
        }

        .brand-subsection:hover {
            transform: translateY(-5px);
        }

        .brand-subsection h4 {
            font-family: 'Geist', sans-serif;
            font-size: 20px;
            font-weight: 700; /* Geist Bold */
            margin-bottom: 15px;
            color: var(--primary-dark);
            line-height: 1.3; /* Adjusted for Geist font */
        }

        .brand-subsection p {
            font-family: 'Geist', sans-serif;
            font-size: 15px;
            font-weight: 400; /* Geist Regular */
            line-height: 1.7;
            margin-bottom: 0;
            color: #555;
        }

        /* Animations */
        .fade-in {
            animation: fadeIn 0.8s ease forwards;
            opacity: 0;
        }

        .fade-in.delay-1 {
            animation-delay: 0.2s;
        }

        .fade-in.delay-2 {
            animation-delay: 0.4s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
            
            .founder-content {
                flex-direction: column;
            }
            
            .founder-image, .founder-text {
                width: 100%;
            }
            
            .brand-hero {
                height: 300px;
            }
            
            .brand-hero-content h2 {
                font-size: 36px;
            }
            
            .section-title {
                font-size: 28px;
            }
            
            .founder-text h2 {
                font-size: 28px;
            }
        }

        @media (max-width: 992px) {
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }
            
            .brand-hero {
                height: 300px;
            }
            
            .brand-hero-content h2 {
                font-size: 36px;
            }
            
            .section-title {
                font-size: 28px;
            }
            
            .founder-text h2 {
                font-size: 28px;
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
            
            .auth-buttons {
                margin-top: 15px;
            }
            
            .section-title {
                font-size: 28px;
            }
            
            .founder-text h2 {
                font-size: 28px;
            }
            
            .brand-hero {
                height: 250px;
            }
            
            .brand-hero-content h2 {
                font-size: 28px;
            }
            
            .brand-hero-content p {
                font-size: 18px;
            }
            
            .brand-content {
                padding: 25px;
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
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                gap: 15px;
            }
            
            .section-title {
                font-size: 24px;
            }
            
            .brand-hero-content h2 {
                font-size: 24px;
            }
            
            .brand-hero-content p {
                font-size: 16px;
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
            .header-container {
                padding: 10px;
            }
            
            .logo-img {
                height: 40px;
            }
            
            .brand {
                font-size: 20px;
            }
            
            .burger-menu-btn {
                font-size: 24px;
            }
            
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
            .header-container {
                padding: 8px;
            }
            
            .logo-img {
                height: 35px;
            }
            
            .brand {
                font-size: 18px;
            }
            
            .burger-menu-btn {
                font-size: 24px;
            }
            
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
                <!-- Logo + Brand -->
                <a href="{{ route('home') }}" class="logo-area">
                    <img src="{{ asset('images/logotm.jpeg') }}" alt="AriDhi Collections Logo" class="logo-img">
                    <div class="brand">AriDhi Collections</div>
                </a>

                <!-- Burger / Menu Button for Mobile -->
                <div style="display: flex; align-items: center; gap: 15px;">
                    <button class="burger-menu-btn" id="burgerMenuBtn">&#9776;</button>
                    
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
                        <!-- Show Login and Register buttons for guests on desktop -->
                        <a href="{{ route('login') }}" class="btn-auth btn-login" style="height: 40px; display: flex; align-items: center;">Login</a>
                        <a href="{{ route('register') }}" class="btn-auth btn-register" style="height: 40px; display: flex; align-items: center;">Register</a>
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

            <div class="about-page">
                <!-- Founder Section -->
                <section class="founder-section">
                    <div class="container">
                        <h2 class="section-title fade-in">About Our Founder</h2>
                        <div class="founder-content">
                            <div class="founder-image fade-in">
                                <img src="{{ asset('images/aridhi.png') }}" alt="Vaishalee, Founder of AriDhi Collections">
                            </div>
                            <div class="founder-text fade-in delay-1">
                                <h2>Vaishalee</h2>
                                <p class="founder-tagline">"Elegance is not just a style, it's a story."</p>
                                <p>At 50, she found her true calling.</p>
                                <p>Born in the serene city of Guwahati, Assam. Vaishalee Nath grew up in a traditional family where dreams often waited quietly in the background. Married at 23, she moved to Delhi with her husband, a telecom officer whose transferable career kept the family on the move. While raising two sons and managing a home, Vaishalee nurtured a quiet ambition — a dream to build something of her own.</p>
                                <p>As the years went by, that spark only grew stronger. Nearing 50, she took a bold step and joined an NGO that supported local artisans through handcrafted work. Immersed in the world of textiles and artistry, she discovered not just a passion, but a purpose.</p>
                                <p>Within two years, she took the leap of faith — founding her own venture, AriDhi Collections, lovingly named after her two sons, Arihant and Dhimant... What began as a small initiative soon evolved into a celebration of India's handwoven textiles, artisanal craftsmanship, and sustainable design.</p>
                                <p>Today, at 50, Vaishalee stands as a proud entrepreneur, a voice for sustainability, and a devoted champion of India's timeless heritage of arts and crafts. Her journey is a reminder that passion knows no age — and that it's never too late to turn a dream into a legacy.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Brand Section -->
                <section class="brand-section">
                    <div class="container">
                        <h2 class="section-title fade-in">About AriDhi Collections</h2>
                        
                        <div class="brand-hero fade-in delay-1">
                            <div class="brand-hero-content">
                                <h2>AriDhi Collections</h2>
                                <p>Where traditional craftsmanship meets modern elegance</p>
                            </div>
                        </div>
                        
                        <div class="brand-content fade-in delay-2">
                            <p>Welcome to AriDhi Collections — where traditional Indian craftsmanship meets modern elegance. Founded by Vaishalee, AriDhi Collections was born out of a passion for preserving India's rich textile heritage and empowering artisan communities across Jaipur and Mirzapur</p>
                            <p>Our curated range of handblock-printed bedsheets, table linens, cushion covers, and handwoven rugs and carpets reflects centuries-old techniques passed down through generations. Each piece in our collection is more than just home décor — it is a story of culture, artistry, and sustainability.</p>
                            
                            <div class="brand-subsections">
                                <div class="brand-subsection">
                                    <h4>Our Story</h4>
                                    <p>AriDhi Collections was founded with a vision to bring authentic Indian craftsmanship to homes worldwide. What started as a small venture supporting local artisans has grown into a brand that represents the pinnacle of handcrafted luxury. Our journey has been one of passion, dedication, and an unwavering commitment to quality.</p>
                                </div>
                                
                                <div class="brand-subsection">
                                    <h4>Our Mission</h4>
                                    <p>Our mission is to create timeless pieces that bring elegance and comfort to your living spaces while supporting sustainable practices and empowering artisan communities. We believe in ethical luxury that doesn't compromise on beauty or quality, ensuring that every purchase contributes to a better future for our artisans and the environment.</p>
                                </div>
                                
                                <div class="brand-subsection">
                                    <h4>Why Choose Us</h4>
                                    <p>We stand out through our commitment to authentic craftsmanship, premium materials, and attention to detail. Each piece is handcrafted by skilled artisans using traditional techniques, ensuring uniqueness and quality. Our focus on sustainability, ethical production, and timeless design makes us the preferred choice for discerning customers who value both beauty and responsibility.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
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
            
            // Initialize animations when elements come into view
            const fadeElements = document.querySelectorAll('.fade-in');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, {
                threshold: 0.1
            });
            
            fadeElements.forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</body>
</html>