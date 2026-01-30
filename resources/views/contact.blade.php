<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AriDhi Collections - Premium handcrafted bedsheets, table runners, rugs & cushions with timeless elegance and comfort.">
    <meta name="keywords" content="bedsheets, table runners, rugs, cushions, handmade, luxury home decor">
    <meta name="author" content="AriDhi Collections">
    
    <title>Contact Us - AriDhi Collections</title>

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

        /* CONTACT PAGE STYLES */
        .contact-page {
            font-family: 'Geist', sans-serif;
            font-weight: 400; /* Geist Regular */
            background-color: var(--light-bg);
            color: var(--text-dark);
            line-height: 1.6;
            padding-top: 100px; /* Add padding to account for fixed header */
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

        .contact-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-bottom: 80px;
        }

        /* Contact Form */
        .contact-form-section {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--text-dark);
            font-family: 'Geist', sans-serif;
        }

        .form-control {
            width: 100%;
            padding: 14px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-family: 'Geist', sans-serif;
            font-weight: 400; /* Geist Regular */
            font-size: 16px;
            transition: var(--transition);
            line-height: 1.6;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(139, 94, 60, 0.1);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            padding: 16px 36px;
            border-radius: var(--border-radius);
            color: var(--text-light);
            font-weight: 500; /* Geist Medium */
            letter-spacing: 0.05em;
            transition: var(--transition);
            text-align: center;
            width: fit-content;
            background: var(--primary-color);
            cursor: pointer;
            border: none;
            font-size: 16px;
            font-family: 'Geist', sans-serif;
        }

        .btn:hover {
            background: var(--primary-dark);
            color: var(--text-light);
            transform: translateY(-3px);
        }

        /* Contact Info */
        .contact-info-section {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .contact-info-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 30px;
        }

        .contact-icon {
            flex: 0 0 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--light-bg);
            border-radius: 50%;
            color: var(--primary-color);
            font-size: 20px;
        }

        .contact-details h4 {
            font-family: 'Geist', sans-serif;
            font-size: 20px;
            font-weight: 700; /* Geist Bold */
            margin-bottom: 10px;
            color: var(--text-dark);
            line-height: 1.3; /* Adjusted for Geist font */
        }

        .contact-details p, .contact-details a {
            font-family: 'Geist', sans-serif;
            font-size: 16px;
            font-weight: 400; /* Geist Regular */
            color: #555;
            margin-bottom: 5px;
            text-decoration: none;
            display: block;
            line-height: 1.6;
        }

        .contact-details a:hover {
            color: var(--primary-color);
        }

        /* Social Media */
        .social-media-section {
            background: var(--light-beige);
            padding: 60px 40px;
            border-radius: 10px;
            text-align: center;
            margin-top: 40px;
        }

        .social-media-section h3 {
            font-family: 'Geist', sans-serif;
            font-size: 28px;
            font-weight: 700; /* Geist Bold */
            margin-bottom: 30px;
            color: var(--text-dark);
            line-height: 1.3; /* Adjusted for Geist font */
        }

        .social-links-contact {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: white;
            color: var(--primary-color);
            text-decoration: none;
            transition: var(--transition);
            font-size: 24px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .social-link:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-5px);
        }

        /* Map */
        .map-section {
            height: 300px;
            background: #f0f0f0;
            border-radius: 10px;
            margin-top: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #777;
            font-style: italic;
            font-family: 'Geist', sans-serif;
            font-weight: 400; /* Geist Regular */
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

        /* Make logo bigger on contact page */
        .contact-page .logo-img {
            height: 80px; /* Increased from 60px to 80px */
        }

        /* Responsive adjustments for bigger logo */
        @media (max-width: 1200px) {
            .contact-page .logo-img {
                height: 70px;
            }
        }

        @media (max-width: 992px) {
            .contact-page .logo-img {
                height: 65px;
            }
        }

        @media (max-width: 768px) {
            .contact-page .logo-img {
                height: 50px; /* Increased from 35px to 50px */
            }
        }

        @media (max-width: 576px) {
            .contact-page .logo-img {
                height: 45px; /* Increased from 35px to 45px */
            }
            
            .section-title {
                font-size: 28px;
            }
            
            .contact-content {
                grid-template-columns: 1fr;
            }
            
            .contact-form-section, .contact-info-section {
                padding: 25px;
            }
            
            .social-media-section {
                padding: 40px 20px;
            }
            
            .social-link {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .contact-page .logo-img {
                height: 40px; /* Increased from 30px to 40px */
            }
        }

        @media (max-width: 360px) {
            .contact-page .logo-img {
                height: 35px; /* Increased from 25px to 35px */
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
        @include('layouts.app-header')

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

            <div class="contact-page">
                <div class="container">
                    <h2 class="section-title">Contact Us</h2>
                    
                    <div class="contact-content">
                        <div class="contact-form-section">
                            <h3>Send us a message</h3>
                            <form id="contactForm">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="message">Your Message</label>
                                    <textarea id="message" name="message" class="form-control" required></textarea>
                                </div>
                                
                                <button type="submit" class="btn">Send Message</button>
                            </form>
                        </div>
                        
                        <div class="contact-info-section">
                            <h3>Get in touch</h3>
                            
                            <div class="contact-info-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="contact-details">
                                    <h4>Phone Number</h4>
                                    <a href="tel:+916000756720">+91 6000756720</a>
                                </div>
                            </div>
                            
                            <div class="contact-info-item">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-details">
                                    <h4>Email Address</h4>
                                    <a href="mailto:aridhicollections@gmail.com">aridhicollections@gmail.com</a>
                                </div>
                            </div>
                            
                            <div class="contact-info-item">
                                <div class="contact-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-details">
                                    <h4>Working Hours</h4>
                                    <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                                    <p>Saturday: 10:00 AM - 4:00 PM</p>
                                    <p>Sunday: Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="social-media-section">
                        <h3>Connect with Us</h3>
                        <div class="social-links-contact">
                            <a href="https://www.instagram.com/aridhicollections?igsh=MTk5azhuMWM5Nzg3YQ%3D%3D&utm_source=qr" target="_blank" class="social-link" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </main>

        <!-- FOOTER -->
        @include('layouts.app-footer')
    </div>

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
            
            // Contact form handling
            const contactForm = document.getElementById('contactForm');
            
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Get form values
                    const name = document.getElementById('name').value;
                    const email = document.getElementById('email').value;
                    const phone = document.getElementById('phone').value;
                    const message = document.getElementById('message').value;
                    
                    // Submit form data using fetch API
                    fetch('{{ route('contact.store') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            name: name,
                            email: email,
                            phone: phone,
                            message: message
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            alert(data.message);
                            // Reset form
                            contactForm.reset();
                        } else {
                            alert('There was an error submitting your message. Please try again.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('There was an error submitting your message. Please try again.');
                    });
                });
            }
        });
    </script>
</body>
</html>