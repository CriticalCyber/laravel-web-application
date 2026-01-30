<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AriDhi Collections - Premium handcrafted bedsheets, table runners, rugs & cushions with timeless elegance and comfort.">
    <meta name="keywords" content="bedsheets, table runners, rugs, cushions, handmade, luxury home decor">
    <meta name="author" content="AriDhi Collections">
    
    <title>AriDhi Collections | Handcrafted Elegance</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Geist Font Import -->
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;700&display=swap" rel="stylesheet">
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

        /* HERO SECTION */
        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url('{{ asset('images/head.jpeg') }}') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding-top: 80px; /* Account for fixed header */
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.2));
        }

        .hero .content {
            background: transparent;
            color: #FFFFFF;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 15%;
            position: relative;
            z-index: 2;
            max-width: 1000px;
            margin-left: 1%;
        }

        .hero .image {
            display: none;
        }

        .hero .title {
            font-family: 'Geist', sans-serif;
            font-size: 56px;
            font-weight: 700; /* Geist Bold */
            letter-spacing: 1px;
            margin: 0 0 20px 0;
            color: #FFFFFF;
            position: relative;
            display: block;
            line-height: 1.2; /* Adjusted for Geist font */
        }

        .hero .tagline {
            font-family: 'Geist', sans-serif;
            font-size: 24px;
            font-weight: 500; /* Geist Medium */
            color: #FFFFFF;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .hero .desc {
            font-family: 'Geist', sans-serif;
            font-size: 18px;
            font-weight: 400; /* Geist Regular */
            line-height: 1.7;
            color: #FFFFFF;
            margin-bottom: 32px;
            max-width: 100%;
        }

        .hero .btn {
            align-self: flex-start;
            margin-top: 10px;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            padding: 18px 40px;
            border-radius: 8px;
            color: var(--text-light);
            font-weight: 500; /* Geist Medium for buttons */
            letter-spacing: 0.05em;
            transition: var(--transition);
            text-align: center;
            width: fit-content;
            background: var(--gold);
            cursor: pointer;
            border: none;
            box-shadow: none !important;
            font-size: 18px;
            font-family: 'Geist', sans-serif;
        }

        .btn:hover {
            background: #5C3B24;
            color: var(--text-light);
            transform: translateY(-3px);
            box-shadow: none !important;
        }

        .btn-primary {
            background: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background: var(--text-light);
            color: var(--primary-dark);
        }

        /* WHY CHOOSE US */
        .why-choose-us {
          width: 90%;
          max-width: 1100px;
          margin: 100px auto;
          font-family: 'Geist', sans-serif;
          color: #2a2a2a;
          background-color: #fdf9f3;
          padding: 60px 40px;
          border-radius: 8px;
          box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
          border: 3px solid #3E2C18;
        }

        /* Why Choose Us Section Title */
        .why-choose-us .section-title {
          text-align: center;
          font-size: 2rem;
          font-weight: 700; /* Geist Bold */
          color:rgb(25, 14, 2);
          margin-bottom: 50px;
          position: relative;
          font-family: 'Geist', sans-serif;
        }

        .why-choose-us .section-title::after {
          content: "";
          display: block;
          width: 60px;
          height: 3px;
          background-color:rgb(63, 36, 9);
          margin: 10px auto 0;
          border-radius: 2px;
        }

        /* Each Row */
        .why-item {
          display: flex;
          justify-content: space-between;
          align-items: center;
          border-top: 1px solid #e2d5c3;
          padding: 25px 0;
        }

        .why-item:last-child {
          border-bottom: 1px solid #e2d5c3;
        }

        /* Text Area */
        .why-text h3 {
          font-size: 1.4rem;
          font-weight: 700; /* Geist Bold */
          color: #111;
          margin-bottom: 8px;
          letter-spacing: 0.3px;
          font-family: 'Geist', sans-serif;
          line-height: 1.3; /* Adjusted for Geist font */
        }

        .why-text p {
          font-family: 'Geist', sans-serif;
          font-size: 1rem;
          font-weight: 400; /* Geist Regular */
          color: #555;
          line-height: 1.6;
          max-width: 520px;
        }

        /* Image Area */
        .why-img img {
          width: 200px;
          height: 150px;
          object-fit: cover;
          border-radius: 8px;
          border: 1px solid #e2d5c3;
          transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .why-img img:hover {
          transform: scale(1.05);
          box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
        }

        /* FEATURES */
        .features {
            padding: 80px 0;
            background: var(--light-beige);
            border: 3px solid #3E2C18;
            border-radius: 8px;
            margin: 40px 20px 0 20px;
            box-shadow: none !important;
        }

        .section-title {
            text-align: center;
            font-family: 'Geist', sans-serif;
            font-size: 36px;
            font-weight: 700; /* Geist Bold */
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

        /* PRODUCT CAROUSEL */
        .product-carousel-section {
            padding: 80px 0 60px 0; /* Added bottom padding for spacing */
            background: #fff;
        }

        .carousel-container {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            overflow: hidden;
        }

        .carousel-wrapper {
            overflow: hidden;
            border-radius: 12px;
            position: relative;
        }

        .carousel-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carousel-slide {
            min-width: 100%;
            padding: 0 15px;
        }

        .product-slide-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            border: 1px solid #D0D0D0;
            background: #fff;
            height: 400px;
            display: flex;
            flex-direction: column;
        }

        .product-slide-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        .product-slide-img {
            height: 280px;
            background-size: cover;
            background-position: center;
            transition: transform 0.5s ease;
        }

        .product-slide-card:hover .product-slide-img {
            transform: scale(1.03);
        }

        .product-slide-info {
            padding: 15px;
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .product-slide-title {
            font-family: 'Geist', sans-serif;
            font-size: 20px;
            font-weight: 700; /* Geist Bold */
            margin-bottom: 12px;
            color: var(--text-dark);
            line-height: 1.3; /* Adjusted for Geist font */
        }

        .btn-slide {
            display: inline-block;
            padding: 10px 20px;
            background: var(--primary-color);
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500; /* Geist Medium */
            transition: all 0.3s ease;
            border: 2px solid var(--primary-color);
            font-size: 15px;
            margin: 0 auto;
            font-family: 'Geist', sans-serif;
        }

        .btn-slide:hover {
            background: transparent;
            color: var(--primary-color);
            transform: translateY(-2px);
        }

        .carousel-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }

        .carousel-nav:hover {
            background: white;
            transform: translateY(-50%) scale(1.1);
        }

        .carousel-nav-prev {
            left: 15px;
        }

        .carousel-nav-next {
            right: 15px;
        }

        .carousel-indicators {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 8px;
        }

        .indicator {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #D0D0D0;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .indicator.active {
            background: var(--primary-color);
            transform: scale(1.2);
        }

        /* Responsive adjustments for carousel */
        @media (max-width: 768px) {
            .product-slide-card {
                height: 350px;
            }
            
            .product-slide-img {
                height: 230px;
            }
            
            .carousel-nav {
                width: 35px;
                height: 35px;
            }
            
            .carousel-nav-prev {
                left: 10px;
            }
            
            .carousel-nav-next {
                right: 10px;
            }
        }

        @media (max-width: 480px) {
            .product-slide-card {
                height: 300px;
            }
            
            .product-slide-img {
                height: 180px;
            }
            
            .product-slide-title {
                font-size: 18px;
            }
            
            .btn-slide {
                padding: 8px 16px;
                font-size: 14px;
            }
        }

        /* FEATURES */
        /* Updated Features Grid - Zig-zag vertical layout */
        .features-grid {
            display: flex;
            flex-direction: column;
            gap: 40px;
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .feature-item.even {
            flex-direction: row-reverse;
        }

        .feature-icon-container {
            flex: 0 0 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--light-bg);
            border-radius: 50%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .feature-icon {
            font-size: 36px;
            color: var(--gold);
        }

        .feature-content {
            flex: 1;
        }

        .feature-title {
            font-family: 'Geist', sans-serif;
            font-size: 24px;
            font-weight: 700; /* Geist Bold */
            margin-bottom: 15px;
            color: var(--text-dark);
            text-transform: uppercase;
            line-height: 1.3; /* Adjusted for Geist font */
        }

        .feature-description {
            font-family: 'Geist', sans-serif;
            font-size: 16px;
            font-weight: 400; /* Geist Regular */
            color: #666;
            line-height: 1.6;
        }

        /* PRODUCTS */
        .products {
            padding: 80px 0 100px 0; /* Added bottom padding for spacing */
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
        }

        .product-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            border: 1px solid #D0D0D0;
            padding: 1.5rem;
            background: #fff;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .product-card:hover {
            transform: scale(1.03);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .product-img {
            height: 250px;
            background-size: cover;
            background-position: center;
            border-radius: 8px;
            margin-bottom: 1rem;
            flex-shrink: 0;
        }

        .product-info {
            padding: 0;
            background: #fff;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .product-category {
            color: var(--primary-color);
            font-size: 14px;
            font-weight: 500; /* Geist Medium */
            text-transform: uppercase;
            margin-bottom: 5px;
            font-family: 'Geist', sans-serif;
        }

        .product-title {
            font-family: 'Geist', sans-serif;
            font-size: 20px;
            font-weight: 700; /* Geist Bold */
            margin-bottom: 10px;
            line-height: 1.3; /* Adjusted for Geist font */
        }

        .product-price {
            font-weight: 700; /* Geist Bold */
            color: var(--primary-dark);
            font-size: 18px;
            margin-bottom: 15px;
            font-family: 'Geist', sans-serif;
        }

        .btn {
            align-self: flex-start;
            margin-top: auto;
        }

        /* ABOUT */
        .about-section {
          position: relative;
          width: 100%;
          min-height: 100vh;
          display: flex;
          align-items: center;
          justify-content: center;
          overflow: hidden;
          padding: 80px 0;
          background: url('{{ asset('images/25.jpg') }}') center/cover no-repeat;
          margin-top: 60px; /* Added top margin for spacing */
        }

        .about-overlay {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.5);
          z-index: 1;
        }

        .about-content {
          position: relative;
          z-index: 2;
          color: black;
          max-width: 1200px;
          margin: 0 auto;
          padding: 0 20px;
          display: flex;
          justify-content: flex-end;
          align-items: center;
          height: 100%;
        }

        .about-img {
          flex: 1;
          border-radius: 10px;
          overflow: hidden;
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .about-img img {
          width: 100%;
          height: auto;
          display: block;
        }

        .about-text {
          flex: 0 0 50%;
          background: white;
          padding: 40px;
          border-radius: 10px;
          box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
          margin-left: auto;
        }

        .about-text h2 {
          font-family: 'Geist', sans-serif;
          font-size: 2.5rem;
          font-weight: 700; /* Geist Bold */
          margin-bottom: 30px;
          color: #333;
          text-align: left;
          line-height: 1.3; /* Adjusted for Geist font */
        }

        .about-text p {
          font-family: 'Geist', sans-serif;
          font-size: 1.1rem;
          font-weight: 400; /* Geist Regular */
          line-height: 1.8;
          color: #555;
          margin-bottom: 25px;
        }

        .about-text .cta-btn {
          display: block;
          width: fit-content;
          margin: 30px 0 0;
          background: var(--primary-color);
          color: white;
          padding: 18px 40px;
          border-radius: 8px;
          font-weight: 500; /* Geist Medium */
          letter-spacing: 0.05em;
          transition: var(--transition);
          text-align: center;
          text-decoration: none;
          font-size: 18px;
          cursor: pointer;
          border: none;
          font-family: 'Geist', sans-serif;
        }

        .about-text .cta-btn:hover {
          background: var(--primary-dark);
          color: var(--text-light);
          transform: translateY(-3px);
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

        /* Animation for fade-in effect */
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

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero .content, .hero .image {
            animation: fadeIn 0.6s ease forwards;
        }

        .hero .content {
            animation-delay: 0.2s;
            opacity: 0;
        }

        .hero .image {
            animation-delay: 0.4s;
            opacity: 0;
        }

        .product-slide-card {
            animation: fadeInUp 0.5s ease forwards;
            opacity: 0;
        }

        /* Enhanced Footer Styles */
        .footer-column ul li a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition);
            display: inline-block;
        }

        .footer-column ul li a:hover {
            color: var(--primary-color);
            padding-left: 5px;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .hero .title {
                font-size: 48px;
            }
            
            .hero .tagline {
                font-size: 22px;
            }
            
            .hero .desc {
                font-size: 17px;
            }
            
            .why-choose-us {
                width: 95%;
                padding: 50px 30px;
            }
            
            .why-text h3 {
                font-size: 1.3rem;
            }
            
            .why-img img {
                width: 180px;
                height: 135px;
            }
            
            .product-slide-card {
                height: 380px;
            }
            
            .product-slide-img {
                height: 260px;
            }
            
            .footer-content {
                grid-template-columns: repeat(4, 1fr);
                gap: 25px;
            }
            
            .footer-column h3 {
                font-size: 20px;
            }
            
            .social-links {
                gap: 12px;
            }
            
            .social-links a {
                width: 36px;
                height: 36px;
            }
        }

        @media (max-width: 992px) {
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
            
            .hero {
                height: 80vh;
            }
            
            .hero .content {
                padding: 0 10%;
                margin-left: 0;
            }
            
            .hero .title {
                font-size: 42px;
            }
            
            .hero .tagline {
                font-size: 20px;
            }
            
            .hero .desc {
                font-size: 16px;
            }
            
            .btn {
                padding: 15px 35px;
                font-size: 16px;
            }
            
            .why-item {
                flex-direction: column;
                align-items: flex-start;
                text-align: left;
            }
            
            .why-text {
                margin-bottom: 20px;
            }
            
            .why-img {
                align-self: center;
            }
            
            .why-img img {
                width: 100%;
                height: auto;
                max-width: 300px;
            }
            
            .feature-item {
                flex-direction: column;
                text-align: center;
                gap: 20px;
            }
            
            .feature-item.even {
                flex-direction: column;
            }
            
            .feature-icon-container {
                margin: 0 auto;
            }
            
            .about-content {
                flex-direction: column;
                gap: 30px;
                padding: 0 15px;
            }
            
            .about-img, .about-text {
                width: 100%;
                flex: none;
            }
            
            .about-text {
                padding: 30px;
            }
            
            .about-text h2 {
                font-size: 2.2rem;
                text-align: center;
            }
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
                gap: 25px;
            }
            
            .footer-column h3 {
                font-size: 18px;
            }
            
            .footer-column ul li {
                margin-bottom: 8px;
            }
            
            .footer-column ul li a {
                font-size: 14px;
            }
            
            .social-links {
                gap: 10px;
            }
            
            .social-links a {
                width: 32px;
                height: 32px;
            }
            
            .copyright {
                font-size: 13px;
            }
        }

        @media (max-width: 768px) {
            .header-container {
                flex-wrap: wrap;
                position: relative;
            }
            
            nav ul {
                display: none;
            }
            
            .burger-menu-btn {
                display: block;
            }
            
            .hero {
                height: 70vh;
                background-position: center;
            }
            
            .hero .content {
                padding: 0 20px;
                text-align: center;
                align-items: center;
            }
            
            .hero .title {
                font-size: 36px;
            }
            
            .hero .tagline {
                font-size: 18px;
            }
            
            .hero .desc {
                font-size: 15px;
                margin-bottom: 25px;
            }
            
            .hero .btn {
                align-self: center;
                padding: 14px 30px;
                font-size: 15px;
            }
            
            .section-title {
                font-size: 30px;
            }
            
            .section-title::after {
                width: 60px;
                height: 2px;
            }
            
            .why-choose-us {
                margin: 60px auto;
                padding: 40px 20px;
            }
            
            .why-choose-us .section-title {
                font-size: 1.8rem;
            }
            
            .why-item {
                padding: 20px 0;
            }
            
            .why-text h3 {
                font-size: 1.2rem;
            }
            
            .why-text p {
                font-size: 0.95rem;
            }
            
            .product-carousel-section {
                padding: 60px 0;
            }
            
            .carousel-nav {
                width: 35px;
                height: 35px;
            }
            
            .carousel-nav-prev {
                left: 10px;
            }
            
            .carousel-nav-next {
                right: 10px;
            }
            
            .product-slide-card {
                height: 350px;
            }
            
            .product-slide-img {
                height: 230px;
            }
            
            .product-slide-title {
                font-size: 18px;
            }
            
            .btn-slide {
                padding: 8px 16px;
                font-size: 14px;
            }
            
            .products {
                padding: 60px 0;
            }
            
            .products-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 20px;
            }
            
            .product-card {
                padding: 1.2rem;
            }
            
            .product-img {
                height: 220px;
            }
            
            .product-title {
                font-size: 18px;
            }
            
            .product-price {
                font-size: 16px;
            }
            
            .about-section {
                padding: 60px 0;
                min-height: auto;
            }
            
            .about-text {
                padding: 25px;
            }
            
            .about-text h2 {
                font-size: 2rem;
            }
            
            .about-text p {
                font-size: 1rem;
            }
            
            .about-text .cta-btn {
                padding: 15px 30px;
                font-size: 16px;
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
            
            .auth-buttons {
                width: 100%;
                justify-content: center;
                margin-top: 15px;
            }
        }

        @media (max-width: 576px) {
            .header-container {
                padding: 15px;
            }
            
            .logo-img {
                height: 40px;
            }
            
            .brand {
                font-size: 20px;
            }
            
            .burger-menu-btn {
                font-size: 32px;
            }
            
            .hero {
                height: 60vh;
            }
            
            .hero .title {
                font-size: 30px;
            }
            
            .hero .tagline {
                font-size: 16px;
                margin-bottom: 20px;
            }
            
            .hero .desc {
                font-size: 14px;
                margin-bottom: 20px;
            }
            
            .hero .btn {
                padding: 12px 25px;
                font-size: 14px;
            }
            
            .section-title {
                font-size: 26px;
                margin-bottom: 40px;
            }
            
            .why-choose-us {
                padding: 30px 15px;
                margin: 50px auto;
            }
            
            .why-choose-us .section-title {
                font-size: 1.6rem;
                margin-bottom: 35px;
            }
            
            .why-item {
                padding: 15px 0;
            }
            
            .why-text h3 {
                font-size: 1.1rem;
                margin-bottom: 6px;
            }
            
            .why-text p {
                font-size: 0.9rem;
            }
            
            .product-carousel-section {
                padding: 50px 0;
            }
            
            .carousel-slide {
                padding: 0 10px;
            }
            
            .product-slide-card {
                height: 320px;
            }
            
            .product-slide-img {
                height: 200px;
            }
            
            .product-slide-title {
                font-size: 16px;
                margin-bottom: 10px;
            }
            
            .btn-slide {
                padding: 6px 14px;
                font-size: 13px;
            }
            
            .products {
                padding: 50px 0;
            }
            
            .products-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 20px;
            }
            
            .product-card {
                padding: 1rem;
            }
            
            .product-img {
                height: 200px;
            }
            
            .product-title {
                font-size: 17px;
            }
            
            .product-price {
                font-size: 15px;
            }
            
            .feature-title {
                font-size: 20px;
            }
            
            .feature-description {
                font-size: 14px;
            }
            
            .about-text {
                padding: 20px;
            }
            
            .about-text h2 {
                font-size: 1.8rem;
                margin-bottom: 20px;
            }
            
            .about-text p {
                font-size: 0.95rem;
                margin-bottom: 15px;
            }
            
            .about-text .cta-btn {
                padding: 12px 25px;
                font-size: 15px;
                margin: 20px 0 0;
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
            
            .hero {
                height: 50vh;
            }
            
            .hero .title {
                font-size: 26px;
            }
            
            .hero .tagline {
                font-size: 14px;
            }
            
            .hero .desc {
                font-size: 13px;
            }
            
            .hero .btn {
                padding: 10px 20px;
                font-size: 13px;
            }
            
            .section-title {
                font-size: 22px;
            }
            
            .why-choose-us {
                padding: 25px 10px;
                margin: 40px auto;
            }
            
            .why-choose-us .section-title {
                font-size: 1.4rem;
            }
            
            .product-slide-card {
                height: 280px;
            }
            
            .product-slide-img {
                height: 160px;
            }
            
            .product-slide-title {
                font-size: 15px;
            }
            
            .btn-slide {
                padding: 5px 12px;
                font-size: 12px;
            }
            
            .products-grid {
                gap: 15px;
            }
            
            .product-card {
                padding: 0.8rem;
            }
            
            .product-img {
                height: 180px;
            }
            
            .product-title {
                font-size: 16px;
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
        
        /* Responsive */
        
        /* Coming Soon Popup Styles */
        .coming-soon-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #8B5E3C 0%, #5C3B24 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            backdrop-filter: blur(5px);
        }
        
        .coming-soon-popup {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            padding: 40px;
            text-align: center;
            max-width: 90%;
            width: 500px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            animation: popupFadeIn 0.5s ease-out;
            position: relative;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        @keyframes popupFadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
        
        .coming-soon-title {
            font-family: 'Geist', sans-serif;
            font-size: 36px;
            font-weight: 700;
            color: #5C3B24;
            margin-bottom: 20px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .coming-soon-message {
            font-family: 'Geist', sans-serif;
            font-size: 18px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        
        .coming-soon-logo {
            max-width: 150px;
            margin-bottom: 20px;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));
        }
        
        .coming-soon-countdown {
            font-family: 'Geist', sans-serif;
            font-size: 24px;
            font-weight: 700;
            color: #8B5E3C;
            margin: 20px 0;
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        
        .countdown-item {
            background: #8B5E3C;
            color: white;
            padding: 10px;
            border-radius: 8px;
            min-width: 70px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .countdown-label {
            font-size: 12px;
            font-weight: 500;
            display: block;
            margin-top: 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .countdown-number {
            font-size: 24px;
            font-weight: 700;
        }
        
        .close-popup-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #999;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.3s ease;
        }
        
        .close-popup-btn:hover {
            background: #f0f0f0;
            color: #333;
        }
        
        .admin-notice {
            font-size: 14px;
            color: #8B5E3C;
            margin-top: 20px;
            font-style: italic;
        }
</style>
</head>

<body>
    <!-- Coming Soon Popup -->
    @if(isset($comingSoon) && $comingSoon)
    <div class="coming-soon-overlay" id="comingSoonPopup">
        <div class="coming-soon-popup">
            @if(isset($isAdmin) && $isAdmin)
            <button class="close-popup-btn" id="closePopupBtn">&times;</button>
            @endif
            <img src="{{ asset('images/logotm.jpeg') }}" alt="AriDhi Collections" class="coming-soon-logo">
            <h2 class="coming-soon-title">Coming Soon</h2>
            <p class="coming-soon-message">
                We're working hard to bring you an amazing experience. Our website is under construction and will be launching soon!
            </p>
            
            <!-- Countdown Timer -->
            <div class="coming-soon-countdown" id="countdown">
                <div class="countdown-item">
                    <span class="countdown-number" id="days">00</span>
                    <span class="countdown-label">Days</span>
                </div>
                <div class="countdown-item">
                    <span class="countdown-number" id="hours">00</span>
                    <span class="countdown-label">Hours</span>
                </div>
                <div class="countdown-item">
                    <span class="countdown-number" id="minutes">00</span>
                    <span class="countdown-label">Minutes</span>
                </div>
                <div class="countdown-item">
                    <span class="countdown-number" id="seconds">00</span>
                    <span class="countdown-label">Seconds</span>
                </div>
            </div>
            
            <p class="coming-soon-message">
                Thank you for your patience.
            </p>
            
            @if(isset($isAdmin) && $isAdmin)
            <p class="admin-notice">
                As an administrator, this popup will automatically close in 5 seconds.
            </p>
            @endif
        </div>
    </div>
    
    <script>
        // Close popup functionality for admins
        document.addEventListener('DOMContentLoaded', function() {
            const closeBtn = document.getElementById('closePopupBtn');
            const popup = document.getElementById('comingSoonPopup');
            
            if (closeBtn && popup) {
                closeBtn.addEventListener('click', function() {
                    // Only allow closing for admins
                    popup.style.display = 'none';
                });
            }
            
            // Automatically hide popup for admins after 5 seconds
            @if(isset($isAdmin) && $isAdmin)
            setTimeout(function() {
                if (popup) {
                    popup.style.display = 'none';
                }
            }, 5000);
            @endif
            
            // Countdown timer
            function updateCountdown() {
                // Set the launch date (you can change this to your desired date)
                const launchDate = new Date("December 31, 2025 00:00:00").getTime();
                
                // Update countdown every second
                const countdown = setInterval(function() {
                    // Get current date and time
                    const now = new Date().getTime();
                    
                    // Calculate time remaining
                    const distance = launchDate - now;
                    
                    // If countdown is finished
                    if (distance < 0) {
                        clearInterval(countdown);
                        document.getElementById("countdown").innerHTML = "Launching soon!";
                        return;
                    }
                    
                    // Calculate days, hours, minutes, seconds
                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                    // Display results
                    document.getElementById("days").innerHTML = days.toString().padStart(2, '0');
                    document.getElementById("hours").innerHTML = hours.toString().padStart(2, '0');
                    document.getElementById("minutes").innerHTML = minutes.toString().padStart(2, '0');
                    document.getElementById("seconds").innerHTML = seconds.toString().padStart(2, '0');
                }, 1000);
            }
            
            // Initialize countdown
            updateCountdown();
        });
    </script>
    @endif

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
                    @endauth
                </div>

                <!-- Vertical Navigation for Desktop -->
                <nav class="vertical-nav">
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
                        
                        <!-- Login and Register buttons for desktop (only shown when not authenticated) -->
                        @guest
                            <div class="auth-buttons">
                                <a href="{{ route('login') }}" class="btn-auth btn-login">Login</a>
                                <a href="{{ route('register') }}" class="btn-auth btn-register">Register</a>
                            </div>
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

        <!-- HERO -->
        <section class="hero">
            <div class="content">
                <h1 class="title">Elevate Your Space with AriDhi Collections</h1>
                <p class="tagline">Handcrafted Elegance for Your Home</p>
                <p class="desc">
                    Discover our premium collection of handcrafted bedsheets, cushions, rugs, and table runners that bring timeless elegance and comfort to every corner of your home.
                </p>
                <a href="{{ route('products.collection') }}" class="btn">Explore our Collection</a>
            </div>
            <div class="image"></div>
        </section>

        <!-- WHY CHOOSE US -->
        <section class="why-choose-us">

          <h2 class="section-title">Why Choose Us</h2>

          <div class="why-item">

            <div class="why-text">

              <h3>Premium Quality</h3>

              <p>Handcrafted with the finest materials and attention to detail for lasting beauty and comfort. </p>

            </div>

            <div class="why-img">

              <img src="{{ asset('images/2.jpg') }}" alt="Premium Quality">

            </div>

          </div>

          <div class="why-item">

            <div class="why-text">

              <h3>Artisan Craftsmanship</h3>

              <p>Each piece is meticulously created by skilled artisans using traditional techniques passed down through generations. We preserve heritage while embracing innovation.</p>

            </div>

            <div class="why-img">

              <img src="{{ asset('images/8.jpg') }}" alt="Artisan Craftsmanship">

            </div>

          </div>

          <div class="why-item">

            <div class="why-text">

              <h3>PAN-India Delivery</h3>

              <p>Free shipping on orders over 1000 INR with fast and reliable delivery to your doorstep. Track your order every step of the way with our real-time updates.</p>

            </div>

            <div class="why-img">

              <img src="{{ asset('images/12.jpg') }}" alt="Worldwide Delivery">

            </div>

         

        </section>

        <!-- PRODUCT CAROUSEL -->
        <section class="product-carousel-section">
            <div class="container">
                <div class="carousel-container">
                    <div class="carousel-wrapper">
                        <div class="carousel-track">
                            @if(isset($products) && $products->count() > 0)
                                @foreach($products as $product)
                                <div class="carousel-slide">
                                    <div class="product-slide-card">
                                        <div class="product-slide-img" style="background-image: url('{{ $product->image_url }}');"></div>
                                        <div class="product-slide-info">
                                            <h3 class="product-slide-title">{{ $product->name }}</h3>
                                            <a href="{{ route('products.show', $product) }}" class="btn btn-slide">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @else
                                <!-- Fallback slides with sample products -->
                                @php
                                    $sampleProducts = [
                                        ['name' => 'Luxury Cotton Bedsheet', 'image' => '2.jpg'],
                                        ['name' => 'Silk Bedsheet Set', 'image' => '8.jpg'],
                                        ['name' => 'Embroidered Table Runner', 'image' => '12.jpg'],
                                        ['name' => 'Persian Handmade Rug', 'image' => '24.png'],
                                        ['name' => 'Modern Geometric Rug', 'image' => '25.jpg'],
                                        ['name' => 'Memory Foam Cushion', 'image' => '10.jpg']
                                    ];
                                @endphp
                                @foreach($sampleProducts as $product)
                                <div class="carousel-slide">
                                    <div class="product-slide-card">
                                        <div class="product-slide-img" style="background-image: url('{{ asset('images/' . $product['image']) }}');"></div>
                                        <div class="product-slide-info">
                                            <h3 class="product-slide-title">{{ $product['name'] }}</h3>
                                            <a href="{{ route('products.collection') }}" class="btn btn-slide">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <button class="carousel-nav carousel-nav-prev" aria-label="Previous product">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </button>
                    <button class="carousel-nav carousel-nav-next" aria-label="Next product">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                    <div class="carousel-indicators">
                        <!-- Indicators will be generated by JavaScript -->
                    </div>
                </div>
            </div>
        </section>

        <!-- ALL PRODUCTS -->
        <section class="all-products">
            <div class="container">
                <h2 class="section-title">Explore Our Collection</h2>
                <div class="products-grid">
                    @if(isset($products))
                        @foreach($products as $product)
                        <div class="product-card">
                            <div class="product-img" style="background-image: url('{{ $product->image_url }}');"></div>
                            <div class="product-info">
                                <div class="product-category">{{ $product->category->name ?? 'Uncategorized' }}</div>
                                <h3 class="product-title">{{ $product->name }}</h3>
                                <div class="product-price">₹{{ number_format($product->price, 2) }}</div>
                                <a href="{{ route('products.show', $product) }}" class="btn">View Details</a>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <!-- Fallback products -->
                        @php
                            $sampleProducts = [
                                ['name' => 'Luxury Cotton Bedsheet', 'price' => '1299.00', 'category' => 'Bedsheets', 'image' => '2.jpg'],
                                ['name' => 'Silk Bedsheet Set', 'price' => '1899.00', 'category' => 'Bedsheets', 'image' => '8.jpg'],
                                ['name' => 'Embroidered Table Runner', 'price' => '799.00', 'category' => 'Table Runners', 'image' => '12.jpg'],
                                ['name' => 'Persian Handmade Rug', 'price' => '4599.00', 'category' => 'Rugs', 'image' => '24.png'],
                                ['name' => 'Modern Geometric Rug', 'price' => '3299.00', 'category' => 'Rugs', 'image' => '25.jpg'],
                                ['name' => 'Memory Foam Cushion', 'price' => '599.00', 'category' => 'Cushions', 'image' => '10.jpg']
                            ];
                        @endphp
                        @foreach($sampleProducts as $product)
                        <div class="product-card">
                            <div class="product-img" style="background-image: url('{{ asset('images/' . $product['image']) }}');"></div>
                            <div class="product-info">
                                <div class="product-category">{{ $product['category'] }}</div>
                                <h3 class="product-title">{{ $product['name'] }}</h3>
                                <div class="product-price">₹{{ $product['price'] }}</div>
                                <a href="{{ route('products.collection') }}" class="btn">View Details</a>
                            </div>
                        </div>
                        @endforeach
                    @endif
                        
                    
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="about-section">
            <div class="about-overlay"></div>
            <div class="container">
                <div class="about-content">
                    <div class="about-text">
                        <h2>About AriDhi Collections</h2>
                        <p>Welcome to AriDhi Collections — where traditional Indian craftsmanship meets modern elegance. Founded by Vaishalee, AriDhi Collections was born out of a passion for preserving India's rich textile heritage and empowering artisan communities across Mirzapur and Jaipur.</p>
                        <p>Our curated range of handblock-printed bedsheets, table linens, cushion covers, and handwoven rugs and carpets reflects centuries-old techniques passed down through generations. Each piece in our collection is more than just home décor — it is a story of culture, artistry, and sustainability.</p>
                        <p>At AriDhi, we believe in ethical luxury — supporting over 25,000 artisans, preserving age-old techniques, and creating timeless pieces that transform your home into a haven of handcrafted elegance. Bring the soul of India into your home with AriDhi Collections.</p>
                        <a href="{{ route('about') }}" class="cta-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

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

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        // Product Carousel
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.querySelector('.carousel-track');
            const slides = Array.from(track.children);
            const prevBtn = document.querySelector('.carousel-nav-prev');
            const nextBtn = document.querySelector('.carousel-nav-next');
            const indicatorsContainer = document.querySelector('.carousel-indicators');
            
            let currentIndex = 0;
            const slideCount = slides.length;
            const slideWidth = slides[0].getBoundingClientRect().width;
            
            // Set initial positions and apply animation delays
            slides.forEach((slide, index) => {
                slide.style.left = slideWidth * index + 'px';
                // Apply staggered animation delays
                slide.style.animationDelay = (index * 0.1) + 's';
                slide.style.opacity = '1';
            });
            
            // Create indicators
            slides.forEach((_, index) => {
                const indicator = document.createElement('button');
                indicator.classList.add('indicator');
                if (index === 0) indicator.classList.add('active');
                indicator.setAttribute('data-slide', index);
                indicatorsContainer.appendChild(indicator);
            });
            
            const indicators = Array.from(indicatorsContainer.children);
            
            // Update carousel position
            function moveToSlide(index) {
                track.style.transform = 'translateX(-' + slideWidth * index + 'px)';
                currentIndex = index;
                
                // Update indicators
                indicators.forEach(indicator => indicator.classList.remove('active'));
                indicators[index].classList.add('active');
            }
            
            // Move to next slide
            function nextSlide() {
                const nextIndex = (currentIndex + 1) % slideCount;
                moveToSlide(nextIndex);
            }
            
            // Move to previous slide
            function prevSlide() {
                const prevIndex = (currentIndex - 1 + slideCount) % slideCount;
                moveToSlide(prevIndex);
            }
            
            // Auto slide every 4 seconds
            let slideInterval = setInterval(nextSlide, 4000);
            
            // Reset interval on user interaction
            function resetInterval() {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, 4000);
            }
            
            // Event listeners
            nextBtn.addEventListener('click', () => {
                nextSlide();
                resetInterval();
            });
            
            prevBtn.addEventListener('click', () => {
                prevSlide();
                resetInterval();
            });
            
            // Indicator click events
            indicatorsContainer.addEventListener('click', (e) => {
                if (e.target.classList.contains('indicator')) {
                    const index = parseInt(e.target.getAttribute('data-slide'));
                    moveToSlide(index);
                    resetInterval();
                }
            });
            
            // Pause autoplay on hover
            const carousel = document.querySelector('.carousel-container');
            carousel.addEventListener('mouseenter', () => {
                clearInterval(slideInterval);

            });
            
            carousel.addEventListener('mouseleave', () => {
                slideInterval = setInterval(nextSlide, 4000);
            });
        });
    </script>
</body>
</html>