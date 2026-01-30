@extends('layouts.app')

@section('title', 'New Arrivals - AriDhi Collections')

@section('content')
<style>
    /* New Arrival-specific styles */
    .hero-section {
        padding: 40px 0;
        text-align: center;
        background: linear-gradient(to bottom, var(--light-beige), #fff);
        margin-top: 80px;
    }

    .hero-section h1 {
        font-family: 'Geist', sans-serif;
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 20px;
        line-height: 1.3;
    }

    .hero-section p {
        font-family: 'Geist', sans-serif;
        font-size: 1.2rem;
        font-weight: 400;
        max-width: 700px;
        margin: 0 auto 30px;
        line-height: 1.6;
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 30px;
        margin: 40px 0;
    }

    .product-card {
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: var(--transition);
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .product-image {
        position: relative;
        height: 250px;
        overflow: hidden;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .featured-badge {
        position: absolute;
        top: 10px;
        left: 10px;
        background: var(--primary-color);
        color: #fff;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        font-family: 'Geist', sans-serif;
    }

    .wishlist-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background: #fff;
        border: none;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .product-details {
        padding: 20px;
    }

    .product-category {
        font-family: 'Geist', sans-serif;
        font-size: 0.85rem;
        font-weight: 400;
        color: #777;
        margin-bottom: 5px;
    }

    .product-title {
        font-family: 'Geist', sans-serif;
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .product-description {
        font-family: 'Geist', sans-serif;
        font-size: 0.9rem;
        font-weight: 400;
        color: #666;
        margin-bottom: 15px;
        height: 60px;
        overflow: hidden;
        line-height: 1.6;
    }

    .product-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .product-price {
        font-family: 'Geist', sans-serif;
        font-weight: 700;
        color: var(--primary-color);
        font-size: 1.2rem;
    }

    .stock-badge {
        font-family: 'Geist', sans-serif;
        font-size: 0.8rem;
        font-weight: 500;
        padding: 3px 10px;
        border-radius: 10px;
    }

    .stock-badge.in-stock {
        background: #e8f5e9;
        color: #4caf50;
    }

    .stock-badge.out-of-stock {
        background: #ffebee;
        color: #f44336;
    }

    .product-actions {
        display: grid;
        grid-template-columns: 1fr;
        gap: 10px;
        margin-top: 15px;
    }

    .btn-add-cart {
        background: var(--primary-color);
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 5px;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        font-family: 'Geist', sans-serif;
        font-weight: 500;
    }

    .btn-add-cart:hover {
        background: var(--primary-dark);
    }

    .btn-view-details {
        background: transparent;
        color: var(--primary-color);
        border: 1px solid var(--primary-color);
        padding: 10px;
        border-radius: 5px;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        font-family: 'Geist', sans-serif;
        font-weight: 500;
    }

    .btn-view-details:hover {
        background: var(--primary-color);
        color: #fff;
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .products-grid {
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        }
        
        .product-image {
            height: 220px;
        }
        
        .product-title {
            font-size: 1.05rem;
        }
        
        .product-description {
            font-size: 0.85rem;
            height: 55px;
        }
        
        .product-price {
            font-size: 1.1rem;
        }
    }

    @media (max-width: 992px) {
        .products-grid {
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 25px;
        }
        
        .product-image {
            height: 200px;
        }
        
        .hero-section h1 {
            font-size: 2.2rem;
        }
        
        .hero-section p {
            font-size: 1.1rem;
        }
    }

    @media (max-width: 768px) {
        .products-grid {
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 20px;
        }
        
        .product-card {
            border-radius: 8px;
        }
        
        .product-image {
            height: 180px;
        }
        
        .product-details {
            padding: 15px;
        }
        
        .product-title {
            font-size: 1rem;
            margin-bottom: 8px;
        }
        
        .product-description {
            font-size: 0.8rem;
            height: 50px;
            margin-bottom: 12px;
        }
        
        .product-price {
            font-size: 1rem;
        }
        
        .btn-add-cart, .btn-view-details {
            padding: 8px;
            font-size: 0.85rem;
        }
    }

    @media (max-width: 576px) {
        .products-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        
        .product-image {
            height: 250px;
        }
    }

    @media (max-width: 480px) {
        .hero-section {
            padding: 25px 0;
        }
        
        .hero-section h1 {
            font-size: 1.8rem;
        }
        
        .hero-section p {
            font-size: 0.95rem;
        }
        
        .product-image {
            height: 220px;
        }
        
        .product-details {
            padding: 12px;
        }
        
        .product-title {
            font-size: 0.95rem;
        }
        
        .product-description {
            font-size: 0.75rem;
            height: 45px;
        }
        
        .product-price {
            font-size: 0.95rem;
        }
        
        .btn-add-cart, .btn-view-details {
            padding: 6px;
            font-size: 0.8rem;
        }
    }

    @media (max-width: 360px) {
        .hero-section {
            padding: 20px 0;
        }
        
        .hero-section h1 {
            font-size: 1.6rem;
        }
        
        .hero-section p {
            font-size: 0.9rem;
        }
        
        .product-image {
            height: 200px;
        }
        
        .product-title {
            font-size: 0.9rem;
        }
        
        .product-description {
            font-size: 0.7rem;
            height: 40px;
        }
        
        .product-price {
            font-size: 0.9rem;
        }
    }
</style>

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

<div class="hero-section">
    <h1>New Arrivals</h1>
    <p>Discover our latest collection of handcrafted home furnishings</p>
</div>

<div class="products-grid">
    @forelse($products as $product)
        <div class="product-card">
            <div class="product-image">
                @if($product->image_path)
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="img-fluid">
                @else
                    <img src="https://via.placeholder.com/300x250" alt="{{ $product->name }}" class="img-fluid">
                @endif
                @if($product->is_featured)
                    <span class="featured-badge">
                        <i class="fas fa-star me-1"></i>Featured
                    </span>
                @endif
                <button class="wishlist-btn" data-product-id="{{ $product->id }}">
                    <i class="far fa-heart"></i>
                </button>
            </div>
            <div class="product-details">
                <div class="product-category">{{ $product->category->name ?? 'Home Textile' }}</div>
                <h3 class="product-title">{{ $product->name }}</h3>
                <p class="product-description">{{ Str::limit($product->description, 60) }}</p>
                <div class="product-footer">
                    <div class="product-price">₹{{ number_format($product->price, 2) }}</div>
                    @if($product->stock_quantity > 0)
                        <span class="stock-badge in-stock">In Stock</span>
                    @else
                        <span class="stock-badge out-of-stock">Out of Stock</span>
                    @endif
                </div>
                <div class="product-actions">
                    @auth
                        <form action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" class="btn-add-cart w-100">
                                <i class="fas fa-shopping-cart me-1"></i>Add to Cart
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn-add-cart w-100">
                            <i class="fas fa-shopping-cart me-1"></i>Add to Cart
                        </a>
                    @endauth
                    <a href="{{ route('products.show', $product) }}" class="btn-view-details w-100 mt-2">
                        <i class="fas fa-eye me-1"></i>View Details
                    </a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert alert-info text-center py-5">
                <i class="fas fa-box-open fa-3x mb-3 text-muted"></i>
                <h4>No new arrivals at the moment. Please check back soon!</h4>
                <p class="mb-0">Check back later for our latest collection.</p>
            </div>
        </div>
    @endforelse
</div>
@endsection