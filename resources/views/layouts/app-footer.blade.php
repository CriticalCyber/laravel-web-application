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
                    <li><a href="{{ route('home') }}">Home</a></li>
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
                    <li>Phone: +91 6000756720</li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2025 AriDhi Collections. All rights reserved.</p>
            <p>Developed by <a href="https://www.digihype.in" target="_blank" style="color: var(--primary-color); text-decoration: none;">The Digi Hype</a></p>
        </div>
    </div>
</footer>

<style>
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

    /* Responsive styles - matching welcome page */
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