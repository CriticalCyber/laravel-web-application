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
                <button class="wishlist-btn">
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
                    <a href="{{ route('products.show', $product) }}" class="btn-view-details">
                        <i class="fas fa-eye me-1"></i>View Details
                    </a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert alert-info text-center py-5">
                <i class="fas fa-box-open fa-3x mb-3 text-muted"></i>
                <h4>No products available for the selected filters.</h4>
                <p class="mb-0">Try adjusting your filters or check back later for new arrivals.</p>
            </div>
        </div>
    @endforelse
</div>

<style>
    /* Additional responsive styles for product cards */
    @media (max-width: 576px) {
        .product-card {
            max-width: 100%;
        }
        
        .product-image {
            height: 200px;
        }
        
        .product-title {
            font-size: 1.1rem;
        }
        
        .product-description {
            font-size: 0.85rem;
            height: 45px;
        }
        
        .product-price {
            font-size: 1.1rem;
        }
        
        .btn-add-cart, .btn-view-details {
            font-size: 0.9rem;
            padding: 8px;
        }
    }
    
    @media (max-width: 480px) {
        .product-image {
            height: 180px;
        }
        
        .product-title {
            font-size: 1rem;
        }
        
        .product-description {
            font-size: 0.8rem;
            height: 40px;
        }
        
        .product-price {
            font-size: 1rem;
        }
        
        .btn-add-cart, .btn-view-details {
            font-size: 0.85rem;
            padding: 6px;
        }
    }
    
    @media (max-width: 360px) {
        .product-image {
            height: 160px;
        }
        
        .product-title {
            font-size: 0.95rem;
        }
        
        .product-description {
            font-size: 0.75rem;
            height: 35px;
        }
        
        .product-price {
            font-size: 0.95rem;
        }
        
        .btn-add-cart, .btn-view-details {
            font-size: 0.8rem;
            padding: 5px;
        }
    }
</style>