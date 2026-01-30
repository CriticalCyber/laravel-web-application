<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - AriDhi Collections</title>
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

        .login {
            max-width: 280px;
            background-color: #ffffff;
            border-radius: 5px;
            margin: 30px auto;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,.1);
        }

        .hader {
            text-align: center;
            font-family: 'Geist', sans-serif;
            font-size: 22px;
            font-weight: 700; /* Geist Bold */
            margin-bottom: 10px;
            line-height: 1.3; /* Adjusted for Geist font */
        }

        .hader p {
            text-align: center;
            font-family: 'Geist', sans-serif;
            font-size: 18px;
            font-weight: 400; /* Geist Regular */
            color: #706b6b;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }

        form input {
            height: 40px;
            outline: none;
            border: 1px solid #cccccc;
            padding: 10px;
            font-size: 15px;
            border-radius: 8px;
            width: 100%;
            box-sizing: border-box;
            font-family: 'Geist', sans-serif;
            font-weight: 400; /* Geist Regular */
        }

        form input[type="submit"] {
            background-color: var(--primary-color);
            color: #ffffff;
            font-size: 17px;
            border: none;
            cursor: pointer;
            border-radius: 8px;
            font-family: 'Geist', sans-serif;
            font-weight: 500; /* Geist Medium */
        }

        form input[type="submit"]:hover {
            background-color: var(--primary-dark);
        }

        form span {
            text-align: center;
            font-family: 'Geist', sans-serif;
            font-size: 16px;
            padding-top: 10px;
            color: #706b6b;
            font-weight: 400; /* Geist Regular */
        }

        form span a {
            text-decoration: none;
            color: var(--primary-color);
            font-weight: 500; /* Geist Medium */
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
            
            .login {
                max-width: 90%;
                padding: 15px;
            }
            
            .hader {
                font-size: 20px;
            }
            
            .hader p {
                font-size: 16px;
            }
            
            form input {
                height: 36px;
                padding: 8px;
                font-size: 14px;
            }
            
            form input[type="submit"] {
                font-size: 16px;
                height: 40px;
            }
            
            form span {
                font-size: 14px;
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
            
            .login {
                max-width: 90%;
                padding: 15px;
            }
            
            .hader {
                font-size: 20px;
            }
            
            .hader p {
                font-size: 16px;
            }
            
            form input {
                height: 36px;
                padding: 8px;
                font-size: 14px;
            }
            
            form input[type="submit"] {
                font-size: 16px;
                height: 40px;
            }
            
            form span {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .login {
                max-width: 95%;
                padding: 10px;
            }
            
            .hader {
                font-size: 18px;
            }
            
            .hader p {
                font-size: 14px;
            }
            
            form input {
                height: 32px;
                padding: 6px;
                font-size: 13px;
            }
            
            form input[type="submit"] {
                font-size: 15px;
                height: 36px;
            }
            
            form span {
                font-size: 13px;
            }
        }

        @media (min-width: 1200px) {
            .login {
                max-width: 320px;
                padding: 25px;
            }
            
            .hader {
                font-size: 24px;
            }
            
            .hader p {
                font-size: 20px;
            }
            
            form input {
                height: 45px;
                padding: 12px;
                font-size: 16px;
            }
            
            form input[type="submit"] {
                font-size: 18px;
                height: 48px;
            }
            
            form span {
                font-size: 17px;
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

        <div class="login">
            <div class="hader">
                <span>Sign Up & Enjoy 10% Off Your First Purchase!</span>
            </div>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <input type="text" placeholder="Enter Name" name="name" value="{{ old('name') }}" required />
                
                <input type="email" placeholder="Enter Email" name="email" value="{{ old('email') }}" required />
                
                <input type="password" placeholder="Choose A Password" name="password" required />
                
                <input type="password" placeholder="Re-Enter Password" name="password_confirmation" required />
                
                <input type="submit" value="Signup" />
                
                <span>Already a member? <a href="{{ route('login') }}">Login Here</a></span>
            </form>
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