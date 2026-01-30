@extends('layouts.custom')

@section('title', $product->name)

@section('content')
<!-- Product Detail Page Redesign -->
<div class="product-detail-container">
    <div class="container">
       
        <div class="product-detail-wrapper">
            <!-- Product Image Gallery -->
            <div class="product-gallery">
                <div class="main-image-container">
                    @if($product->image_path)
                        <img src="{{ $product->image_url }}" class="main-image" alt="{{ $product->name }}" id="mainImage">
                    @else
                        <img src="https://via.placeholder.com/600x600?text=Aridhi+Collection" class="main-image" alt="{{ $product->name }}" id="mainImage">
                    @endif
                </div>
                <!-- Thumbnails would go here if we had multiple images -->
            </div>

            <!-- Product Information -->
            <div class="product-info">
                <div class="product-header">
                    <h1 class="product-title">{{ $product->name }}</h1>
                    <div class="product-category">
                        <span class="category-badge">{{ $product->category->name ?? 'Uncategorized' }}</span>
                        @if($product->is_featured)
                            <span class="featured-badge">Featured</span>
                        @endif
                    </div>
                </div>

                <div class="product-price-section">
                    <div class="price-container">
                        <span class="current-price">₹{{ number_format($product->price, 2) }}</span>
                    </div>
                    <div class="stock-status">
                        @if($product->stock_quantity > 0)
                            <span class="in-stock"><i class="fas fa-check-circle"></i> In Stock ({{ $product->stock_quantity }} available)</span>
                        @else
                            <span class="out-of-stock"><i class="fas fa-times-circle"></i> Out of Stock</span>
                        @endif
                    </div>
                </div>

                <div class="product-description">
                    <h3>Description</h3>
                    <p>{{ $product->description ?? 'No description available for this product.' }}</p>
                </div>

                <div class="product-specs">
                    <h3>Product Details</h3>
                    <div class="specs-grid">
                        <div class="spec-item">
                            <span class="spec-label">Category:</span>
                            <span class="spec-value">{{ $product->category->name ?? 'Uncategorized' }}</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Product Code:</span>
                            <span class="spec-value">#{{ $product->id }}</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Brand:</span>
                            <span class="spec-value">AriDhi Collections</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Availability:</span>
                            <span class="spec-value">
                                @if($product->stock_quantity > 0)
                                    <span class="text-success">In Stock</span>
                                @else
                                    <span class="text-danger">Out of Stock</span>
                                @endif
                            </span>
                        </div>
                    </div>
                </div>

                @auth
                    @if($product->stock_quantity > 0)
                        <form action="{{ route('cart.store') }}" method="POST" class="add-to-cart-form">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            
                            <div class="quantity-selector">
                                <label for="quantity">Quantity:</label>
                                <div class="quantity-controls">
                                    <button type="button" class="qty-btn" id="decreaseQty">-</button>
                                    <input type="number" id="quantity" name="quantity" value="1" min="1" max="{{ $product->stock_quantity }}">
                                    <button type="button" class="qty-btn" id="increaseQty">+</button>
                                </div>
                                <span class="max-quantity">Max: {{ $product->stock_quantity }}</span>
                            </div>
                            
                            <div class="action-buttons">
                                <button type="submit" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart
                                </button>
                                <button type="button" class="btn-wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </form>
                    @else
                        <div class="out-of-stock-message">
                            <i class="fas fa-exclamation-triangle"></i> This product is currently out of stock.
                        </div>
                    @endif
                @else
                    <div class="login-prompt">
                        <i class="fas fa-user"></i> Please <a href="{{ route('login') }}">login</a> to add this product to your cart.
                    </div>
                    <form action="{{ route('login') }}" method="GET" class="add-to-cart-form">
                        <div class="action-buttons">
                            <button type="submit" class="btn-add-to-cart">
                                <i class="fas fa-shopping-cart"></i> Login to Add to Cart
                            </button>
                        </div>
                    </form>
                @endauth
            </div>
        </div>

        <!-- Product Tabs -->
        <div class="product-tabs">
            <div class="tab-buttons">
                <button class="tab-btn active" data-tab="description">Description</button>
                <button class="tab-btn" data-tab="specifications">Specifications</button>
                <button class="tab-btn" data-tab="reviews">Reviews</button>
            </div>
            
            <div class="tab-content">
                <div class="tab-pane active" id="description-tab">
                    <h3>Product Description</h3>
                    <p>{{ $product->description ?? 'No description available for this product.' }}</p>
                    <p>Our {{ $product->name }} is crafted with premium quality materials to ensure durability and comfort. Designed with attention to detail, this product enhances the aesthetic appeal of your home while providing excellent functionality.</p>
                </div>
                
                <div class="tab-pane" id="specifications-tab">
                    <h3>Product Specifications</h3>
                    <div class="specs-table">
                        <div class="spec-row">
                            <span class="spec-key">Product Name</span>
                            <span class="spec-value">{{ $product->name }}</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-key">Category</span>
                            <span class="spec-value">{{ $product->category->name ?? 'Uncategorized' }}</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-key">Brand</span>
                            <span class="spec-value">AriDhi Collections</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-key">Product Code</span>
                            <span class="spec-value">#{{ $product->id }}</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-key">Availability</span>
                            <span class="spec-value">
                                @if($product->stock_quantity > 0)
                                    <span class="text-success">In Stock ({{ $product->stock_quantity }} available)</span>
                                @else
                                    <span class="text-danger">Out of Stock</span>
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane" id="reviews-tab">
                    <h3>Customer Reviews</h3>
                    <div class="no-reviews">
                        <i class="fas fa-info-circle"></i> Be the first to review this product!
                    </div>
                    <p>Share your experience with this product and help other customers make informed decisions.</p>
                    <button class="btn-review">Write a Review</button>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        <div class="related-products-section">
            <h2 class="section-title">Related Products</h2>
            <div class="related-products-grid">
                @if($relatedProducts->count() > 0)
                    @foreach($relatedProducts as $relatedProduct)
                        <div class="related-product-card">
                            @if($relatedProduct->image_path)
                                <img src="{{ $relatedProduct->image_url }}" alt="{{ $relatedProduct->name }}">
                            @else
                                <img src="https://via.placeholder.com/300x300" alt="{{ $relatedProduct->name }}">
                            @endif
                            <div class="product-info">
                                <h4>{{ $relatedProduct->name }}</h4>
                                <div class="price">₹{{ number_format($relatedProduct->price, 2) }}</div>
                                <a href="{{ route('products.show', $relatedProduct) }}" class="btn-view-details">View Details</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="no-related-products">
                        <p>No related products found.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<style>
/* Product Detail Page Styles */
.product-detail-container {
    padding: 30px 0;
    background-color: #fff;
    min-height: calc(100vh - 200px);
    font-family: 'Geist', sans-serif;
    font-weight: 400; /* Geist Regular */
    overflow-y: auto; /* Ensure vertical scrolling */
}

.product-detail-wrapper {
    display: flex;
    gap: 40px;
    margin-bottom: 50px;
    flex-wrap: wrap;
}

/* Product Gallery */
.product-gallery {
    flex: 1;
    min-width: 300px;
}

.main-image-container {
    background: #f8f9fa;
    padding: 20px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.main-image {
    max-width: 100%;
    max-height: 500px;
    object-fit: contain;
    border-radius: 5px;
}

/* Product Information */
.product-info {
    flex: 1;
    min-width: 300px;
}

.product-header {
    margin-bottom: 20px;
}

.product-title {
    font-family: 'Geist', sans-serif;
    font-size: 2rem;
    font-weight: 700; /* Geist Bold */
    color: #333;
    margin-bottom: 10px;
    border-bottom: 2px solid #8B4513;
    padding-bottom: 10px;
    line-height: 1.3; /* Adjusted for Geist font */
}

.product-category {
    display: flex;
    gap: 10px;
}

.category-badge {
    background-color: #e9ecef;
    color: #495057;
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-family: 'Geist', sans-serif;
    font-weight: 500; /* Geist Medium */
}

.featured-badge {
    background-color: #8B4513;
    color: white;
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-family: 'Geist', sans-serif;
    font-weight: 500; /* Geist Medium */
}

/* Price Section */
.product-price-section {
    margin-bottom: 25px;
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 10px;
}

.price-container {
    margin-bottom: 10px;
}

.current-price {
    font-family: 'Geist', sans-serif;
    font-size: 2rem;
    font-weight: 700; /* Geist Bold */
    color: #8B4513;
}

.stock-status .in-stock {
    color: #28a745;
    font-weight: 500;
    font-family: 'Geist', sans-serif;
}

.stock-status .out-of-stock {
    color: #dc3545;
    font-weight: 500;
    font-family: 'Geist', sans-serif;
}

/* Description and Specs */
.product-description h3,
.product-specs h3 {
    font-family: 'Geist', sans-serif;
    font-size: 1.3rem;
    font-weight: 700; /* Geist Bold */
    margin-bottom: 15px;
    color: #333;
    border-bottom: 1px solid #dee2e6;
    padding-bottom: 8px;
    line-height: 1.3; /* Adjusted for Geist font */
}

.product-description p {
    color: #6c757d;
    line-height: 1.7;
    font-family: 'Geist', sans-serif;
    font-weight: 400; /* Geist Regular */
}

.specs-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
}

.spec-item {
    display: flex;
    justify-content: space-between;
    padding: 8px 0;
    border-bottom: 1px solid #eee;
}

.spec-label {
    font-weight: 600;
    color: #495057;
    font-family: 'Geist', sans-serif;
}

.spec-value {
    color: #6c757d;
    font-family: 'Geist', sans-serif;
    font-weight: 400; /* Geist Regular */
}

/* Add to Cart Form */
.add-to-cart-form {
    margin-top: 30px;
}

.quantity-selector {
    margin-bottom: 20px;
}

.quantity-selector label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #333;
    font-family: 'Geist', sans-serif;
}

.quantity-controls {
    display: flex;
    align-items: center;
    max-width: 150px;
}

.qty-btn {
    background-color: #8B4513;
    color: white;
    border: none;
    width: 40px;
    height: 40px;
    font-size: 1.2rem;
    cursor: pointer;
    transition: background-color 0.3s;
    font-family: 'Geist', sans-serif;
    font-weight: 500; /* Geist Medium */
}

.qty-btn:hover {
    background-color: #6b350f;
}

#quantity {
    width: 60px;
    height: 40px;
    text-align: center;
    border: 1px solid #ced4da;
    border-left: none;
    border-right: none;
    font-family: 'Geist', sans-serif;
}

.max-quantity {
    display: block;
    margin-top: 5px;
    font-size: 0.85rem;
    color: #6c757d;
    font-family: 'Geist', sans-serif;
    font-weight: 400; /* Geist Regular */
}

.action-buttons {
    display: flex;
    gap: 15px;
}

.btn-add-to-cart {
    flex: 1;
    background-color: #8B4513;
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 1rem;
    font-weight: 500; /* Geist Medium */
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    font-family: 'Geist', sans-serif;
}

.btn-add-to-cart:hover {
    background-color: #6b350f;
}

.btn-view-cart {
    background-color: #f8f9fa;
    color: #8B4513;
    border: 1px solid #8B4513;
    padding: 12px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    text-decoration: none;
    font-weight: 500; /* Geist Medium */
    font-family: 'Geist', sans-serif;
}

.btn-view-cart:hover {
    background-color: #8B4513;
    color: white;
}

.btn-view-cart-full {
    display: inline-block;
    background-color: #8B4513;
    color: white;
    border: 1px solid #8B4513;
    padding: 12px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s;
    text-decoration: none;
    font-weight: 500; /* Geist Medium */
    margin-top: 15px;
    text-align: center;
    font-family: 'Geist', sans-serif;
}

.btn-view-cart-full:hover {
    background-color: #6b350f;
    color: white;
}

.cart-link-section {
    margin-top: 15px;
}

.btn-wishlist {
    background-color: #f8f9fa;
    color: #8B4513;
    border: 1px solid #8B4513;
    width: 50px;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Geist', sans-serif;
}

.btn-wishlist:hover {
    background-color: #8B4513;
    color: white;
}

.out-of-stock-message,
.login-prompt {
    padding: 15px;
    background-color: #fff3cd;
    border: 1px solid #ffeaa7;
    border-radius: 5px;
    color: #856404;
    text-align: center;
    margin-top: 20px;
    font-family: 'Geist', sans-serif;
    font-weight: 400; /* Geist Regular */
}

.login-prompt a {
    color: #8B4513;
    font-weight: 600;
    text-decoration: none;
    font-family: 'Geist', sans-serif;
}

.login-prompt a:hover {
    text-decoration: underline;
}

/* Product Tabs */
.product-tabs {
    margin: 50px 0;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.tab-buttons {
    display: flex;
    border-bottom: 1px solid #dee2e6;
}

.tab-btn {
    padding: 15px 25px;
    background: none;
    border: none;
    cursor: pointer;
    font-weight: 600;
    color: #6c757d;
    transition: all 0.3s;
    font-family: 'Geist', sans-serif;
}

.tab-btn.active {
    color: #8B4513;
    border-bottom: 3px solid #8B4513;
}

.tab-btn:hover:not(.active) {
    color: #333;
    background-color: #f8f9fa;
}

.tab-content {
    padding: 25px;
}

.tab-pane {
    display: none;
}

.tab-pane.active {
    display: block;
}

.tab-pane h3 {
    font-family: 'Geist', sans-serif;
    font-size: 1.3rem;
    font-weight: 700; /* Geist Bold */
    margin-bottom: 15px;
    color: #333;
    line-height: 1.3; /* Adjusted for Geist font */
}

.tab-pane p {
    color: #6c757d;
    line-height: 1.7;
    margin-bottom: 15px;
    font-family: 'Geist', sans-serif;
    font-weight: 400; /* Geist Regular */
}

.specs-table {
    border: 1px solid #dee2e6;
    border-radius: 5px;
    overflow: hidden;
}

.spec-row {
    display: flex;
    justify-content: space-between;
    padding: 12px 15px;
    border-bottom: 1px solid #dee2e6;
}

.spec-row:last-child {
    border-bottom: none;
}

.spec-key {
    font-weight: 600;
    color: #495057;
    font-family: 'Geist', sans-serif;
}

.no-reviews {
    background-color: #f8f9fa;
    padding: 20px;
    border-radius: 5px;
    text-align: center;
    margin-bottom: 20px;
    color: #6c757d;
    font-family: 'Geist', sans-serif;
    font-weight: 400; /* Geist Regular */
}

.btn-review {
    background-color: #8B4513;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-weight: 500; /* Geist Medium */
    transition: background-color 0.3s;
    font-family: 'Geist', sans-serif;
}

.btn-review:hover {
    background-color: #6b350f;
}

/* Related Products */
.related-products-section {
    margin: 50px 0;
}

.section-title {
    font-family: 'Geist', sans-serif;
    font-size: 1.8rem;
    font-weight: 700; /* Geist Bold */
    margin-bottom: 30px;
    color: #333;
    text-align: center;
    position: relative;
    line-height: 1.3; /* Adjusted for Geist font */
}

.section-title::after {
    content: '';
    display: block;
    width: 80px;
    height: 3px;
    background-color: #8B4513;
    margin: 10px auto;
    border-radius: 3px;
}

.related-products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 25px;
}

.related-product-card {
    border: 1px solid #eee;
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
    background-color: #fff;
}

.related-product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.related-product-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.product-info {
    padding: 20px;
}

.product-info h4 {
    font-family: 'Geist', sans-serif;
    font-size: 1.1rem;
    font-weight: 700; /* Geist Bold */
    margin-bottom: 10px;
    color: #333;
    line-height: 1.3; /* Adjusted for Geist font */
}

.price {
    font-family: 'Geist', sans-serif;
    font-size: 1.2rem;
    font-weight: 700; /* Geist Bold */
    color: #8B4513;
    margin-bottom: 15px;
}

.btn-view-details {
    display: block;
    width: 100%;
    padding: 10px;
    text-align: center;
    background-color: #8B4513;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: 500; /* Geist Medium */
    transition: background-color 0.3s;
    font-family: 'Geist', sans-serif;
}

.btn-view-details:hover {
    background-color: #6b350f;
}

.no-related-products {
    grid-column: 1 / -1;
    text-align: center;
    padding: 40px;
    color: #6c757d;
    font-family: 'Geist', sans-serif;
    font-weight: 400; /* Geist Regular */
}

/* Responsive Design */
@media (max-width: 768px) {
    .product-detail-wrapper {
        flex-direction: column;
    }
    
    .specs-grid {
        grid-template-columns: 1fr;
    }
    
    .action-buttons {
        flex-direction: column;
    }
    
    .btn-add-to-cart {
        width: 100%;
    }
    
    .tab-buttons {
        flex-direction: column;
    }
    
    .related-products-grid {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    }
    
    .product-title {
        font-size: 1.7rem;
    }
    
    .current-price {
        font-size: 1.7rem;
    }
    
    .section-title {
        font-size: 1.5rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Quantity adjustment
    const quantityInput = document.getElementById('quantity');
    const decreaseBtn = document.getElementById('decreaseQty');
    const increaseBtn = document.getElementById('increaseQty');
    const maxQuantity = {{ $product->stock_quantity }};
    
    if (decreaseBtn && increaseBtn && quantityInput) {
        decreaseBtn.addEventListener('click', function() {
            let currentValue = parseInt(quantityInput.value) || 1;
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        });
        
        increaseBtn.addEventListener('click', function() {
            let currentValue = parseInt(quantityInput.value) || 1;
            if (currentValue < maxQuantity) {
                quantityInput.value = currentValue + 1;
            }
        });
        
        quantityInput.addEventListener('change', function() {
            let value = parseInt(this.value) || 1;
            if (value < 1) {
                this.value = 1;
            } else if (value > maxQuantity) {
                this.value = maxQuantity;
            }
        });
    }
    
    // Tab functionality
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabPanes = document.querySelectorAll('.tab-pane');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons and panes
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabPanes.forEach(pane => pane.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Show corresponding pane
            const tabId = this.getAttribute('data-tab') + '-tab';
            document.getElementById(tabId).classList.add('active');
        });
    });
    
    // Handle Add to Cart form submission for AJAX requests (this will only apply if needed)
    const addToCartForm = document.querySelector('.add-to-cart-form');
    if (addToCartForm) {
        // We're not adding AJAX handling here because we want regular form submission
        // The form will submit normally and redirect to the cart page
    }
});
</script>
@endsection