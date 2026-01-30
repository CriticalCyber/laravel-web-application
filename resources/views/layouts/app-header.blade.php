<header>
    <div class="header-container">
        <!-- Logo + Brand -->
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
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>

                @auth
                    <li><a href="{{ route('wishlist.index') }}" class="{{ request()->routeIs('wishlist.index') ? 'active' : '' }}">Wishlist</a></li>
                    <li><a href="{{ route('cart.index') }}" class="{{ request()->routeIs('cart.index') ? 'active' : '' }}">Cart</a></li>
                    <li><a href="{{ route('orders.index') }}" class="{{ request()->routeIs('orders.index') ? 'active' : '' }}">Orders</a></li>
                @endauth
                
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

<!-- Mobile Slide Menu -->
<div class="slide-menu" id="slideMenu">
    <div class="slide-menu-header">
        <div class="slide-menu-logo">
            <img src="{{ asset('images/logotm.jpeg') }}" alt="AriDhi Collections Logo" class="slide-menu-logo-img">
            <span>AriDhi Collections</span>
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
            <a href="{{ route('login') }}" class="btn-auth btn-login" style="height: 40px; display: flex; align-items: center;">Login</a>
            <a href="{{ route('register') }}" class="btn-auth btn-register" style="height: 40px; display: flex; align-items: center;">Register</a>
        </div>
    @endauth
</div>

<!-- Menu Overlay -->
<div class="menu-overlay" id="menuOverlay"></div>