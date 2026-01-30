<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AriDhi Collections - Premium handcrafted bedsheets, table runners, rugs & cushions with timeless elegance and comfort.">
    <meta name="keywords" content="bedsheets, table runners, rugs, cushions, handmade, luxury home decor">
    <meta name="author" content="AriDhi Collections">
    
    <title>Refund & Return Policy - AriDhi Collections</title>

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

        nav a:not(.btn-auth):hover {
            color: var(--primary-color);
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

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: var(--text-dark);
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
                <a href="{{ route('home') }}" class="logo-area">
                    <img src="{{ asset('images/logotm.jpeg') }}" alt="AriDhi Collections Logo" class="logo-img">
                    <div class="brand">AriDhi Collections</div>
                </a>

                <button class="mobile-menu-btn">&#9776;</button>

                <nav>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('products.index') }}">Products</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ route('refund.policy') }}" class="active">Return Policy</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- MAIN CONTENT -->
        <main class="policy-content">
            <div class="container">
                <div class="policy-header">
                    <h1>Refund & Return Policy</h1>
                    <p class="last-updated"><strong>Last updated:</strong> {{ date('F d, Y') }}</p>
                </div>

                <div class="policy-section">
                    <p>Thank you for shopping with AriDhi Collections. We endeavour to ensure that you are fully satisfied with your purchase. If for any reason you are not satisfied, here's our policy:</p>
                </div>

                <div class="policy-section">
                    <h4>1. Return Eligibility</h4>
                    <ul>
                        <li>You may request a return for a full refund (or exchange/store credit) <strong>within 4 days</strong> from the date of delivery.</li>
                        <li>To be eligible, the item must be unused, in the same condition that you received it, and with all original packaging and tags.</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h4>2. Non-returnable / Excluded Items</h4>
                    <ul>
                        <li>Items that are personalized/customised, or made-to-order, may not be eligible for return.</li>
                        <li>Items damaged through misuse, or items whose tags/packaging have been removed, are not eligible.</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h4>3. Return Process</h4>
                    <ul>
                        <li>To start a return, please contact us at <a href="mailto:aridhicollections@gmail.com">aridhicollections@gmail.com</a> with your order number and reason for return.</li>
                        <li>We will provide a return shipping label or instructions for drop-off.</li>
                        <li>After we receive and inspect your returned item, we will notify you of the approval or rejection of your refund/exchange.</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h4>4. Refunds</h4>
                    <ul>
                        <li>If approved, your refund will be processed within 5 business days, and a credit will automatically be applied to your original method of payment.</li>
                        <li>Shipping costs are non-refundable unless the return is due to our error (e.g., wrong item shipped).</li>
                        <li>Restocking fee: We do not charge a restocking fee.</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h4>5. Exchanges</h4>
                    <ul>
                        <li>If you wish to exchange an item for the same item (e.g., wrong size), follow the return process above and place a new order for the correct item.</li>
                        <li>Alternatively, we may directly process the exchange if stock allows.</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h4>6. Shipping Costs for Returns</h4>
                    <ul>
                        <li>Unless the return is our fault, you will be responsible for paying the return shipping costs.</li>
                        <li>If we provide pre-paid shipping, we may deduct that cost from your refund if the return is not due to our error.</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h4>7. Late or Missing Refunds</h4>
                    <ul>
                        <li>If you haven't received your refund yet, first check your bank account.</li>
                        <li>Then contact your payment provider—it may take some time before your refund is officially posted.</li>
                        <li>If you've done both and still haven't received your refund, please contact us at <a href="mailto:aridhicollections@gmail.com">aridhicollections@gmail.com</a>.</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h4>8. Contact Information</h4>
                    <p>For any return, refund or exchange questions, reach us at:</p>
                    <ul>
                        <li>Email: <a href="mailto:aridhicollections@gmail.com">aridhicollections@gmail.com</a></li>
                        <li>Phone: +91 6000756720</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h4>9. Changes to this Policy</h4>
                    <p>We reserve the right to modify this policy at any time. Revisions will be posted here with an updated "Last updated" date.</p>
                </div>

                <div class="thank-you">
                    <p>We appreciate your understanding and aim to make our return process as easy and transparent as possible.</p>
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
        // Mobile menu toggle
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            document.querySelector('nav ul').classList.toggle('show');
        });
    </script>
</body>
</html>