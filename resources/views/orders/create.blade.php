<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AriDhi Collections - Premium handcrafted bedsheets, table runners, rugs & cushions with timeless elegance and comfort.">
    <meta name="keywords" content="bedsheets, table runners, rugs, cushions, handmade, luxury home decor">
    <meta name="author" content="AriDhi Collections">
    
    <title>AriDhi Collections - Checkout</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Bootstrap JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
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
        .py-5 {
            padding-top: 60px !important;
            padding-bottom: 60px !important;
        }

        .display-4 {
            font-family: 'Geist', sans-serif;
            font-weight: 700;
            font-size: 2.5rem;
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

        .sticky-top {
            z-index: 1000;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        .text-primary {
            color: var(--primary-color) !important;
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .progress-bar {
            border-radius: 4px;
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
            
            .display-4 {
                font-size: 2rem;
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
            
            .py-5 {
                padding: 40px 20px !important;
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

                <button class="mobile-menu-btn">&#9776;</button>

                <nav>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('products.index') }}">Products</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ route('cart.index') }}">Cart</a></li>
                        <li><a href="{{ route('checkout') }}" class="active">Checkout</a></li>
                        <li class="auth-buttons">
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
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- MAIN CONTENT -->
        <main>
            <div class="container py-5">
                <!-- Page Header -->
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h1 class="display-4 fw-bold mb-3" style="color: #8B4513;">
                            <i class="fas fa-credit-card me-3"></i>Secure Checkout
                        </h1>
                        <p class="lead text-muted">Complete your purchase with AriDhi Collections</p>
                        
                        <!-- Progress Indicator -->
                        <div class="d-flex justify-content-center mb-4">
                            <div class="progress" style="height: 8px; max-width: 400px;">
                                <div class="progress-bar" role="progressbar" style="width: 75%; background-color: #8B4513;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <small class="text-muted">
                                <i class="fas fa-shopping-cart me-2"></i>Cart 
                                <i class="fas fa-chevron-right mx-2"></i> 
                                <strong><i class="fas fa-credit-card me-2"></i>Checkout</strong> 
                                <i class="fas fa-chevron-right mx-2"></i> 
                                <i class="fas fa-check-circle me-2"></i>Confirmation
                            </small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Checkout Form -->
                    <div class="col-lg-8">
                        <div class="card shadow-sm border-0 mb-4">
                            <div class="card-header bg-white py-3">
                                <h5 class="mb-0">
                                    <i class="fas fa-truck me-2"></i>Shipping Information
                                </h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('checkout.process') }}" id="checkout-form">
                                    @csrf
                                    
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="last_name" class="form-label">Last Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                        <div class="form-text">We'll send your order confirmation to this email.</div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" id="phone" name="phone" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="shipping_address" class="form-label">Shipping Address <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="shipping_address" name="shipping_address" rows="3" required placeholder="Street address, Apartment, suite, unit, building, floor, etc."></textarea>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="city" class="form-label">City <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="city" name="city" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="postal_code" class="form-label">Postal Code <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="postal_code" name="postal_code" required>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
                                        <select class="form-select" id="country" name="country" required>
                                            <option value="">Select Country</option>
                                            <option value="india" selected>India</option>
                                            <option value="usa">United States</option>
                                            <option value="uk">United Kingdom</option>
                                            <option value="canada">Canada</option>
                                        </select>
                                    </div>
                                    
                                    <!-- Payment Method -->
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="payment_method" id="cash_on_delivery" value="cash_on_delivery" checked>
                                                <label class="form-check-label" for="cash_on_delivery">
                                                    <i class="fas fa-money-bill-wave me-2 text-success"></i>
                                                    Cash on Delivery
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-8 mb-3">
                                            <div class="alert alert-info">
                                                <h5><i class="fas fa-info-circle me-2"></i>Payment Information</h5>
                                                <p class="mb-1">For direct payments, please contact us:</p>
                                                <p class="mb-1"><i class="fas fa-phone me-2"></i>Phone: 9660893743</p>
                                                <p class="mb-0"><i class="fas fa-envelope me-2"></i>Email: vaishaleenath@gmail.com</p>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <!-- Payment Method Card (Removed as it's now inside the form) -->
                        
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
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Subtotal</span>
                                    <strong>₹<span id="subtotal-amount">{{ number_format($total, 2) }}</span></strong>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Shipping</span>
                                    <strong class="text-success">Free</strong>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Tax</span>
                                    <strong>₹<span id="tax-amount">{{ number_format($total * 0.1, 2) }}</span></strong>
                                </div>
                                <div class="d-flex justify-content-between mb-2" id="discount-row" style="display: none;">
                                    <span>Discount (10% for QR Code Payment)</span>
                                    <strong class="text-success">-₹<span id="discount-amount">0.00</span></strong>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Total</h5>
                                    <h5 class="mb-0" style="color: #8B4513;">₹<span id="total-amount">{{ number_format($total * 1.1, 2) }}</span></h5>
                                </div>
                                
                                <button type="submit" class="btn btn-primary w-100 btn-lg mt-3" form="checkout-form">
                                    <i class="fas fa-lock me-2"></i>Place Order
                                </button>
                                
                                <div class="text-center mt-3">
                                    <small class="text-muted">
                                        <i class="fas fa-shield-alt me-1"></i>Secure checkout with 256-bit SSL encryption
                                    </small>
                                </div>
                                
                                <div class="mt-4">
                                    <h6 class="mb-3">Order Items</h6>
                                    <div class="border rounded p-3">
                                        @foreach($cartItems as $item)
                                            @php
                                                $itemTotal = $item->product->price * $item->quantity;
                                            @endphp
                                            <div class="d-flex justify-content-between mb-2">
                                                <div>
                                                    <small>{{ $item->product->name }} <span class="text-muted">x{{ $item->quantity }}</span></small>
                                                </div>
                                                <div>
                                                    <small>₹{{ number_format($itemTotal, 2) }}</small>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

    <!-- Order Confirmation Modal -->
    <div class="modal fade" id="orderConfirmationModal" tabindex="-1" aria-labelledby="orderConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderConfirmationModalLabel">Confirm Your Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to place this order?</p>
                    <div class="border rounded p-3">
                        <h6>Order Summary</h6>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal</span>
                            <strong>₹<span class="modal-subtotal">{{ number_format($total, 2) }}</span></strong>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Shipping</span>
                            <strong class="text-success">Free</strong>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Tax</span>
                            <strong>₹<span class="modal-tax">{{ number_format($total * 0.1, 2) }}</span></strong>
                        </div>
                        <div class="d-flex justify-content-between mb-2 modal-discount-row" style="display: none;">
                            <span>Discount (10%)</span>
                            <strong class="text-success">-₹<span class="modal-discount">0.00</span></strong>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h6>Total</h6>
                            <h6 style="color: #8B4513;">₹<span class="modal-total">{{ number_format($total * 1.1, 2) }}</span></h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmOrderBtn" style="background-color: #8B4513; border-color: #8B4513;">
                        Place Order
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Success Modal -->
    <div class="modal fade" id="paymentSuccessModal" tabindex="-1" aria-labelledby="paymentSuccessModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentSuccessModalLabel">Payment Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div class="mb-3">
                        <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                    </div>
                    <h4 class="mb-3">🎉 Thank you for ordering with AriDhi Collections!</h4>
                    <p>We'll confirm your order shortly.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style="background-color: #8B4513; border-color: #8B4513;">
                        Continue
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            document.querySelector('nav ul').classList.toggle('show');
        });

        // Show/hide card details based on payment method selection
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });
            
            // Handle order confirmation
            const placeOrderBtn = document.querySelector('[form="checkout-form"]');
            const confirmOrderBtn = document.getElementById('confirmOrderBtn');
            const orderConfirmationModal = new bootstrap.Modal(document.getElementById('orderConfirmationModal'));
            
            // QR Code Payment Modal Elements
            const qrPaymentModal = new bootstrap.Modal(document.getElementById('qrPaymentModal'));
            const switchToCodBtn = document.getElementById('switchToCodBtn');
            const confirmPaymentBtn = document.getElementById('confirmPaymentBtn');
            const paymentScreenshotForm = document.getElementById('paymentScreenshotForm');
            
            // Payment Success Modal
            const paymentSuccessModal = new bootstrap.Modal(document.getElementById('paymentSuccessModal'));
            
            if (placeOrderBtn) {
                placeOrderBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Get selected payment method
                    const selectedPaymentMethod = document.querySelector('input[name="payment_method"]:checked').value;
                    
                    // For Cash on Delivery, show confirmation modal
                    orderConfirmationModal.show();
                });
            }
            
            if (confirmOrderBtn) {
                confirmOrderBtn.addEventListener('click', function() {
                    // Submit the form
                    document.getElementById('checkout-form').submit();
                });
            }
            
            // Switch to COD from QR payment modal
            if (switchToCodBtn) {
                switchToCodBtn.addEventListener('click', function() {
                    qrPaymentModal.hide();
                    // Select COD payment method
                    document.getElementById('cash_on_delivery').checked = true;
                    // Show confirmation modal
                    orderConfirmationModal.show();
                });
            }
            
            // Confirm QR code payment with screenshot upload
            if (confirmPaymentBtn) {
                confirmPaymentBtn.addEventListener('click', function() {
                    const orderId = paymentScreenshotForm.dataset.orderId;
                    const paymentScreenshotInput = document.getElementById('payment_screenshot');
                    
                    if (!paymentScreenshotInput.files.length) {
                        alert('Please upload a payment screenshot.');
                        return;
                    }
                    
                    const formData = new FormData();
                    formData.append('payment_screenshot', paymentScreenshotInput.files[0]);
                    formData.append('order_id', orderId);
                    formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
                    
                    // Show loading state
                    confirmPaymentBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Uploading...';
                    confirmPaymentBtn.disabled = true;
                    
                    fetch('{{ route("payment.upload") }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                            }
                    })
                    .then(response => {
                        // Check if response is JSON
                        const contentType = response.headers.get('content-type');
                        if (contentType && contentType.includes('application/json')) {
                            return response.json();
                        } else {
                            // If not JSON, get text response
                            return response.text().then(text => {
                                throw new Error('Server returned non-JSON response: ' + text);
                            });
                        }
                    })
                    .then(data => {
                        if (data.success) {
                            // Hide QR payment modal
                            qrPaymentModal.hide();
                            
                            // Show success modal
                            paymentSuccessModal.show();
                            
                            // Auto redirect after 5 seconds
                            setTimeout(function() {
                                window.location.href = data.redirect_url;
                            }, 5000);
                        } else {
                            alert('Failed to upload payment screenshot: ' + data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred while uploading the payment screenshot: ' + error.message);
                    })
                    .finally(() => {
                        confirmPaymentBtn.innerHTML = 'Confirm Payment';
                        confirmPaymentBtn.disabled = false;
                    });
                });
            }
            
            // Auto-close success modal and redirect
            document.getElementById('paymentSuccessModal').addEventListener('shown.bs.modal', function () {
                setTimeout(function() {
                    paymentSuccessModal.hide();
                }, 5000);
            });
            
            // Handle payment method change to calculate discount
            const paymentMethodInputs = document.querySelectorAll('input[name="payment_method"]');
            const subtotalAmount = {{ $total }};
            const taxAmount = {{ $total * 0.1 }};
            const totalWithTax = {{ $total * 1.1 }};
            
            // Elements to update
            const subtotalElement = document.getElementById('subtotal-amount');
            const taxElement = document.getElementById('tax-amount');
            const discountRow = document.getElementById('discount-row');
            const discountElement = document.getElementById('discount-amount');
            const totalElement = document.getElementById('total-amount');
            
            // Modal elements
            const modalSubtotalElements = document.querySelectorAll('.modal-subtotal');
            const modalTaxElements = document.querySelectorAll('.modal-tax');
            const modalDiscountRow = document.querySelector('.modal-discount-row');
            const modalDiscountElements = document.querySelectorAll('.modal-discount');
            const modalTotalElements = document.querySelectorAll('.modal-total');
            
            // Format number to currency format
            function formatCurrency(amount) {
                return parseFloat(amount).toFixed(2);
            }
            
            // Update order summary (removed QR code discount logic)
            function updateOrderSummary() {
                // Always hide discount row since QR code option is removed
                discountRow.style.display = 'none';
                modalDiscountRow.style.display = 'none';
                
                // Update total amount without discount
                const finalTotal = totalWithTax;
                totalElement.textContent = formatCurrency(finalTotal);
                modalTotalElements.forEach(el => el.textContent = formatCurrency(finalTotal));
            }
            
            // Add event listeners to payment method inputs
            paymentMethodInputs.forEach(input => {
                input.addEventListener('change', updateOrderSummary);
            });
            
            // Initialize with default selection
            updateOrderSummary();
        });
    </script>
</body>
</html>