<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AriDhi Collections</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Geist Font Import -->
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
            font-weight: 500; /* Geist Medium for navigation */
            font-size: 16px;
            transition: var(--transition);
            position: relative;
            display: flex;
            align-items: center;
            height: auto;
            font-family: 'Geist', sans-serif;
        }

        nav a:hover {
            color: var(--primary-color);
        }

        .auth-buttons {
            display: flex;
            gap: 15px;
            align-items: center;
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

        .btn-register {
            background: var(--primary-color);
            color: var(--text-light);
            border: 2px solid var(--primary-color);
        }

        .btn-register:hover {
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

        .form-container {
            width: 350px;
            min-height: 500px;
            background-color: #fff;
            border-radius: 10px;
            box-sizing: border-box;
            padding: 20px 30px;
            margin: 30px auto;
            box-shadow: 0 0 20px rgba(0,0,0,.1);
        }

        .title {
            text-align: center;
            font-family: 'Geist', sans-serif;
            font-size: 28px;
            font-weight: 700; /* Geist Bold */
            margin: 10px 0 30px 0;
            line-height: 1.3; /* Adjusted for Geist font */
        }

        .form {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 18px;
            margin-bottom: 15px;
        }

        .input {
            border-radius: 20px;
            border: 1px solid #c0c0c0;
            outline: 0 !important;
            box-sizing: border-box;
            padding: 12px 15px;
            font-size: 14px;
            font-family: 'Geist', sans-serif;
            font-weight: 400; /* Geist Regular */
        }

        .page-link {
            text-decoration: underline;
            margin: 0;
            text-align: end;
            color: #747474;
            text-decoration-color: #747474;
            font-family: 'Geist', sans-serif;
            font-weight: 400; /* Geist Regular */
        }

        .page-link-label {
            cursor: pointer;
            font-family: 'Geist', sans-serif;
            font-size: 9px;
            font-weight: 500; /* Geist Medium */
        }

        .page-link-label:hover {
            color: #000;
        }

        .form-btn {
            padding: 10px 15px;
            font-family: 'Geist', sans-serif;
            font-weight: 500; /* Geist Medium for buttons */
            border-radius: 20px;
            border: 0 !important;
            outline: 0 !important;
            background: var(--primary-color);
            color: white;
            cursor: pointer;
            font-size: 14px;
        }

        .form-btn:hover {
            background: var(--primary-dark);
        }

        .form-btn:active {
            background: var(--primary-dark);
        }

        .sign-up-label {
            margin: 0;
            font-size: 10px;
            color: #747474;
            font-family: 'Geist', sans-serif;
            font-weight: 400; /* Geist Regular */
            text-align: center;
        }

        .sign-up-link {
            margin-left: 1px;
            font-size: 11px;
            text-decoration: underline;
            text-decoration-color: var(--primary-color);
            color: var(--primary-color);
            cursor: pointer;
            font-weight: 700; /* Geist Bold */
            font-family: 'Geist', sans-serif;
        }

        .buttons-container {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            margin-top: 20px;
            gap: 15px;
        }

        .apple-login-button,
        .google-login-button {
            border-radius: 20px;
            box-sizing: border-box;
            padding: 10px 15px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Geist', sans-serif;
            font-size: 11px;
            font-weight: 500; /* Geist Medium */
            gap: 5px;
            transition: all 0.3s ease;
        }

        .apple-login-button {
            background-color: #000;
            color: #fff;
            border: 2px solid #000;
        }

        .apple-login-button:hover {
            background-color: #333;
        }

        .google-login-button {
            border: 2px solid #747474;
            background-color: #fff;
            color: #747474;
        }

        .google-login-button:hover {
            background-color: #f8f8f8;
        }

        .apple-icon,
        .google-icon {
            font-size: 18px;
            margin-bottom: 1px;
        }

        /* Responsive styles */
        @media (max-width: 992px) {
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
            
            .form-container {
                width: 90%;
                max-width: 350px;
                margin: 20px auto;
                padding: 15px 20px;
            }
            
            .title {
                font-size: 24px;
            }
            
            .input, .form-btn {
                padding: 10px 12px;
            }
            
            .page-link-label, .sign-up-label, .sign-up-link, .apple-login-button, .google-login-button {
                font-size: 10px;
            }
        }

        @media (min-width: 769px) and (max-width: 1024px) {
            .form-container {
                width: 450px;
                min-height: 520px;
            }
        }

        @media (min-width: 1025px) {
            .form-container {
                width: 500px;
                min-height: 550px;
                padding: 30px 40px;
            }
            
            .title {
                font-size: 32px;
            }
            
            .input, .form-btn {
                padding: 14px 18px;
            }
            
            .page-link-label, .sign-up-label, .sign-up-link, .apple-login-button, .google-login-button {
                font-size: 12px;
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
            
            .form-container {
                width: 90%;
                max-width: 350px;
                margin: 20px auto;
                padding: 15px 20px;
            }
            
            .title {
                font-size: 24px;
            }
            
            .input, .form-btn {
                padding: 10px 12px;
            }
            
            .page-link-label, .sign-up-label, .sign-up-link, .apple-login-button, .google-login-button {
                font-size: 10px;
            }
        }

        @media (max-width: 576px) {
            .header-container {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .auth-buttons {
                margin-top: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="page">
        <!-- Custom Navigation Bar -->
        <header>
            <div class="header-container">
                <a href="{{ route('home') }}" class="logo-area">
                    <img src="{{ asset('images/logotm.jpeg') }}" alt="AriDhi Collections Logo" class="logo-img">
                    <div class="brand">AriDhi Collections</div>
                </a>

                <nav>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('products.index') }}">Products</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li class="auth-buttons">
                            <a href="{{ route('login') }}" class="btn-auth btn-login">Login</a>
                            <a href="{{ route('register') }}" class="btn-auth btn-register">Register</a>
                        </li>
                    </ul>
                </nav>

                <button class="mobile-menu-btn">&#9776;</button>
            </div>
        </header>

        <div class="form-container">
            <p class="title">Welcome back to AriDhi: Where Comfort Begins</p>

            <form method="POST" action="{{ route('login') }}" class="form">
                @csrf
                
                <input type="email" class="input" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required>
                
                <input type="password" class="input" placeholder="Password" id="password" name="password" required>
                
                <p class="page-link">
                    <span class="page-link-label">Forgot Password?</span>
                </p>
                
                <button type="submit" class="form-btn">Log in</button>
            </form>
            
            <p class="sign-up-label">
                Don't have an account? <a href="{{ route('register') }}" class="sign-up-link">Sign up</a>
            </p>
            
            <div class="buttons-container">
                <div class="apple-login-button">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" class="apple-icon" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M747.4 535.7c-.4-68.2 30.5-119.6 92.9-157.5-34.9-50-87.7-77.5-157.3-82.8-65.9-5.2-138 38.4-164.4 38.4-27.9 0-91.7-36.6-141.9-36.6C273.1 298.8 163 379.8 163 544.6c0 48.7 8.9 99 26.7 150.8 23.8 68.2 109.6 235.3 199.1 232.6 46.8-1.1 79.9-33.2 140.8-33.2 59.1 0 89.7 33.2 141.9 33.2 90.3-1.3 167.9-153.2 190.5-221.6-121.1-57.1-114.6-167.2-114.6-170.7zm-105.1-305c50.7-60.2 46.1-115 44.6-134.7-44.8 2.6-96.6 30.5-126.1 64.8-32.5 36.8-51.6 82.3-47.5 133.6 48.4 3.7 92.6-21.2 129-63.7z"></path>
                    </svg>
                    <span>Log in with Apple</span>
                </div>
                
                <a href="{{ route('auth.google.redirect') }}" class="google-login-button">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" x="0px" y="0px" class="google-icon" viewBox="0 0 48 48" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12
                        c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24
                        c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
                        <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657
                        C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
                        <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36
                        c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
                        <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571
                        c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                    </svg>
                    <span>Log in with Google</span>
                </a>
            </div>
        </div>
        
        <!-- Use shared footer component -->
        @include('layouts.app-footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            document.querySelector('nav ul').classList.toggle('show');
        });
    </script>
</body>
</html>