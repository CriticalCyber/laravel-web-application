@extends('layouts.app')

@section('title', 'Our Collection - AriDhi Collections')

@section('content')
<style>
    /* Collection-specific styles */
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

    /* FILTER SIDEBAR */
    .filter-sidebar {
        background: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
    }

    .filter-sidebar h3 {
        font-family: 'Geist', sans-serif;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: var(--primary-color);
        padding-bottom: 10px;
        border-bottom: 1px solid var(--border-color);
    }

    .filter-group {
        margin-bottom: 25px;
    }

    .filter-group h4 {
        font-family: 'Geist', sans-serif;
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 15px;
        color: var(--text-dark);
    }

    .filter-options {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .filter-option {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .filter-option input[type="checkbox"] {
        width: 18px;
        height: 18px;
        accent-color: var(--primary-color);
    }

    .filter-option label {
        font-family: 'Geist', sans-serif;
        font-weight: 400;
        cursor: pointer;
        flex: 1;
    }

    .clear-filters-btn {
        background: #f8f8f8;
        border: 1px solid #ddd;
        color: #666;
        padding: 8px 15px;
        border-radius: 5px;
        cursor: pointer;
        transition: var(--transition);
        font-family: 'Geist', sans-serif;
        font-weight: 500;
        width: 100%;
        margin-top: 10px;
    }

    .clear-filters-btn:hover {
        background: #eee;
        color: var(--primary-color);
    }

    /* ACTIVE FILTERS */
    .active-filters {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 20px;
    }

    .filter-tag {
        background: var(--primary-color);
        color: white;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 5px;
        font-family: 'Geist', sans-serif;
        font-weight: 500;
    }

    .filter-tag .remove-filter {
        background: none;
        border: none;
        color: white;
        cursor: pointer;
        font-size: 1rem;
        padding: 0;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 30px;
        margin-bottom: 40px;
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
        display: block;
        margin: 10px auto 0;
        width: auto;
        text-align: center;
    }

    .btn-view-details:hover {
        background: var(--primary-color);
        color: #fff;
    }

    .pagination {
        display: flex;
        justify-content: center;
        margin: 30px 0;
    }

    .pagination a, .pagination span {
        display: inline-block;
        padding: 10px 15px;
        margin: 0 5px;
        border-radius: 5px;
        text-decoration: none;
        color: var(--text-dark);
        border: 1px solid #ddd;
        font-family: 'Geist', sans-serif;
        font-weight: 400;
    }

    .pagination a:hover {
        background: var(--primary-color);
        color: #fff;
        border-color: var(--primary-color);
    }

    .pagination .active {
        background: var(--primary-color);
        color: #fff;
        border-color: var(--primary-color);
    }

    /* MODALS */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1000;
        align-items: center;
        justify-content: center;
    }
    
    .modal-open {
        overflow: hidden;
    }

    .modal-content {
        background: #fff;
        border-radius: 10px;
        width: 90%;
        max-width: 500px;
        max-height: 80vh;
        overflow-y: auto;
    }

    .modal-header {
        padding: 20px;
        border-bottom: 1px solid #eee;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .modal-title {
        font-family: 'Geist', sans-serif;
        font-size: 1.3rem;
        font-weight: 700;
        line-height: 1.3;
    }

    .close-modal {
        background: none;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
        color: #777;
    }

    .modal-body {
        padding: 20px;
    }

    .list-group {
        list-style: none;
    }

    .list-group-item {
        padding: 12px 15px;
        border-bottom: 1px solid #eee;
        text-decoration: none;
        color: var(--text-dark);
        display: block;
        transition: var(--transition);
        font-family: 'Geist', sans-serif;
        font-weight: 400;
    }

    .list-group-item:last-child {
        border-bottom: none;
    }

    .list-group-item:hover, .list-group-item.active {
        background: var(--light-beige);
        color: var(--primary-color);
    }

    .spinner-border {
        width: 3rem;
        height: 3rem;
        border-width: 0.2em;
        color: var(--primary-color);
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
        
        /* Mobile filter improvements */
        .filter-sidebar {
            padding: 15px;
        }
        
        .filter-sidebar h3 {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        
        .filter-group h4 {
            font-size: 1rem;
            margin-bottom: 10px;
        }
        
        .filter-option {
            gap: 8px;
        }
        
        .filter-option input[type="checkbox"] {
            width: 16px;
            height: 16px;
        }
        
        .filter-option label {
            font-size: 0.9rem;
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
        
        .hero-section {
            padding: 25px 0;
            margin-top: 70px;
        }
        
        .hero-section h1 {
            font-size: 1.8rem;
        }
        
        .hero-section p {
            font-size: 0.95rem;
        }
        
        .active-filters {
            gap: 8px;
        }
        
        .filter-tag {
            font-size: 0.8rem;
            padding: 4px 10px;
        }
        
        /* Collapsible filter sidebar for mobile */
        .filter-sidebar {
            position: relative;
        }
        
        .filter-sidebar .filter-content {
            display: none;
        }
        
        .filter-sidebar.expanded .filter-content {
            display: block;
        }
        
        .filter-toggle {
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-weight: 600;
            font-size: 1.1rem;
            padding: 10px 0;
            border-bottom: 1px solid var(--border-color);
            margin-bottom: 15px;
        }
        
        .filter-toggle::after {
            content: "▼";
            transition: transform 0.3s ease;
        }
        
        .filter-sidebar.expanded .filter-toggle::after {
            transform: rotate(180deg);
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
        
        .pagination a, .pagination span {
            padding: 8px 12px;
            margin: 0 3px;
            font-size: 0.9rem;
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
    
    /* Ensure footer alignment on mobile */
    @media (max-width: 768px) {
        .container {
            padding: 0 15px;
        }
        
        footer .container {
            padding: 0 15px;
        }
    }
    
    @media (max-width: 576px) {
        .container {
            padding: 0 10px;
        }
        
        footer .container {
            padding: 0 10px;
        }
    }
    
    @media (max-width: 480px) {
        .container {
            padding: 0 8px;
        }
        
        footer .container {
            padding: 0 8px;
        }
    }
    
    @media (max-width: 360px) {
        .container {
            padding: 0 5px;
        }
        
        footer .container {
            padding: 0 5px;
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

<div class="container">
    <!-- Hero Section -->
    <div class="hero-section">
        <h1>AriDhi Collections</h1>
        <p>Elevate your home with our premium collection of handcrafted rugs, carpets.</p>
    </div>

    <!-- Active Filters -->
    <div class="active-filters" id="activeFiltersContainer">
        <!-- Active filters will be displayed here dynamically -->
    </div>

    <div class="row">
        <!-- Filter Sidebar -->
        <div class="col-lg-3">
            <div class="filter-sidebar" id="filterSidebar">
                <div class="filter-toggle" id="filterToggle">
                    Filters
                </div>
                <div class="filter-content">
                    <h3>Filters</h3>
                    <div class="filter-group">
                        <h4>Categories</h4>
                        <div class="filter-options" id="categoryFilters">
                            <!-- Categories will be populated dynamically -->
                        </div>
                    </div>
                    <button class="clear-filters-btn" id="clearFiltersBtn">
                        <i class="fas fa-times-circle me-1"></i>Clear All Filters
                    </button>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="col-lg-9">
            <!-- Loading Spinner -->
            <div id="loadingSpinner" style="display: none; text-align: center; padding: 20px;">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <p>Loading products...</p>
            </div>

            <!-- Products Container -->
            <div class="row" id="productsContainer">
                @include('products.collection-partials.products', ['products' => $products])
            </div>

            <!-- Pagination -->
            <div class="pagination" id="paginationContainer">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>

<script>
    // AJAX Product Filtering functionality
    document.addEventListener('DOMContentLoaded', function() {
        const productsContainer = document.getElementById('productsContainer');
        const loadingSpinner = document.getElementById('loadingSpinner');
        const paginationContainer = document.getElementById('paginationContainer');
        const categoryFiltersContainer = document.getElementById('categoryFilters');
        const activeFiltersContainer = document.getElementById('activeFiltersContainer');
        const clearFiltersBtn = document.getElementById('clearFiltersBtn');
        const filterSidebar = document.getElementById('filterSidebar');
        const filterToggle = document.getElementById('filterToggle');
        
        // Prevent multiple simultaneous requests
        let isProcessing = false;
        
        // Get all categories from server
        const categories = @json($categories);
        
        // Toggle filter sidebar on mobile
        filterToggle.addEventListener('click', function() {
            filterSidebar.classList.toggle('expanded');
        });
        
        // Populate category filters
        function populateCategoryFilters() {
            categoryFiltersContainer.innerHTML = '';
            
            categories.forEach(category => {
                const filterOption = document.createElement('div');
                filterOption.className = 'filter-option';
                filterOption.innerHTML = `
                    <input type="checkbox" id="category-${category.id}" value="${category.id}" class="category-checkbox">
                    <label for="category-${category.id}">${category.name} (${category.products_count})</label>
                `;
                categoryFiltersContainer.appendChild(filterOption);
            });
            
            // Add event listeners to checkboxes
            document.querySelectorAll('.category-checkbox').forEach(checkbox => {
                checkbox.addEventListener('change', handleFilterChange);
            });
        }
        
        // Get current filters from URL
        function getCurrentFilters() {
            const urlParams = new URLSearchParams(window.location.search);
            const categories = urlParams.getAll('categories[]');
            return {
                categories: categories
            };
        }
        
        // Update URL with new filters
        function updateUrl(filters) {
            const urlParams = new URLSearchParams();
            
            if (filters.categories && filters.categories.length > 0) {
                filters.categories.forEach(category => {
                    urlParams.append('categories[]', category);
                });
            }
            
            const newUrl = window.location.pathname + (urlParams.toString() ? '?' + urlParams.toString() : '');
            window.history.replaceState({}, '', newUrl);
        }
        
        // Update active filters display
        function updateActiveFiltersDisplay() {
            const filters = getCurrentFilters();
            activeFiltersContainer.innerHTML = '';
            
            if (filters.categories && filters.categories.length > 0) {
                filters.categories.forEach(categoryId => {
                    const category = categories.find(cat => cat.id == categoryId);
                    if (category) {
                        const filterTag = document.createElement('div');
                        filterTag.className = 'filter-tag';
                        filterTag.innerHTML = `
                            ${category.name}
                            <button class="remove-filter" data-category="${categoryId}">&times;</button>
                        `;
                        activeFiltersContainer.appendChild(filterTag);
                    }
                });
                
                // Add event listeners to remove buttons
                document.querySelectorAll('.remove-filter').forEach(button => {
                    button.addEventListener('click', function() {
                        const categoryId = this.getAttribute('data-category');
                        removeCategoryFilter(categoryId);
                    });
                });
            }
        }
        
        // Remove a category filter
        function removeCategoryFilter(categoryId) {
            const checkbox = document.querySelector(`.category-checkbox[value="${categoryId}"]`);
            if (checkbox) {
                checkbox.checked = false;
            }
            handleFilterChange();
        }
        
        // Clear all filters
        function clearAllFilters() {
            document.querySelectorAll('.category-checkbox').forEach(checkbox => {
                checkbox.checked = false;
            });
            handleFilterChange();
        }
        
        // Handle filter change
        function handleFilterChange() {
            if (isProcessing) return;
            isProcessing = true;
            
            // Show loading spinner
            if (loadingSpinner) {
                loadingSpinner.style.display = 'block';
            }
            
            // Hide products container
            if (productsContainer) {
                productsContainer.style.display = 'none';
            }
            
            // Hide pagination
            if (paginationContainer) {
                paginationContainer.style.display = 'none';
            }
            
            // Get selected categories
            const selectedCategories = Array.from(document.querySelectorAll('.category-checkbox:checked'))
                .map(checkbox => checkbox.value);
            
            // Update URL
            updateUrl({ categories: selectedCategories });
            
            // Update active filters display
            updateActiveFiltersDisplay();
            
            // Fetch products with new filters
            fetchProductsWithFilters(selectedCategories);
        }
        
        // Fetch products with filters
        function fetchProductsWithFilters(categories = []) {
            const urlParams = new URLSearchParams();
            
            // If no categories are selected, we still need to send a request to get products
            // excluding New Arrival products
            if (categories.length > 0) {
                categories.forEach(category => {
                    urlParams.append('categories[]', category);
                });
            }
            
            const url = window.location.pathname + (urlParams.toString() ? '?' + urlParams.toString() : '');
            
            fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '{{ csrf_token() }}'
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // Update the products container
                if (productsContainer && data.products_html !== undefined) {
                    productsContainer.innerHTML = data.products_html;
                }
                
                // Update pagination
                if (paginationContainer && data.pagination_html !== undefined) {
                    paginationContainer.innerHTML = data.pagination_html;
                }
                
                // Hide loading spinner
                if (loadingSpinner) {
                    loadingSpinner.style.display = 'none';
                }
                
                // Show products container
                if (productsContainer) {
                    productsContainer.style.display = 'block';
                }
                
                // Show pagination
                if (paginationContainer) {
                    paginationContainer.style.display = 'block';
                }
            })
            .catch(error => {
                console.error('Error during product fetch:', error);
                // Hide loading spinner
                if (loadingSpinner) {
                    loadingSpinner.style.display = 'none';
                }
                
                // Show products container
                if (productsContainer) {
                    productsContainer.style.display = 'block';
                }
                
                // Show pagination
                if (paginationContainer) {
                    paginationContainer.style.display = 'block';
                }
                
                alert('An error occurred while fetching products. Please try again.');
            })
            .finally(() => {
                isProcessing = false;
            });
        }
        
        // Initialize the page
        function initPage() {
            populateCategoryFilters();
            updateActiveFiltersDisplay();
            
            // Set initial checkbox states based on URL
            const filters = getCurrentFilters();
            if (filters.categories && filters.categories.length > 0) {
                filters.categories.forEach(categoryId => {
                    const checkbox = document.querySelector(`.category-checkbox[value="${categoryId}"]`);
                    if (checkbox) {
                        checkbox.checked = true;
                    }
                });
            }
            
            // Add event listener to clear filters button
            if (clearFiltersBtn) {
                clearFiltersBtn.addEventListener('click', clearAllFilters);
            }
            
            // Initialize filter sidebar state based on screen size
            if (window.innerWidth <= 576) {
                filterSidebar.classList.remove('expanded');
            } else {
                filterSidebar.classList.add('expanded');
            }
        }
        
        // Initialize the page
        initPage();
        
        // Handle browser back/forward buttons
        window.addEventListener('popstate', function(event) {
            location.reload();
        });
        
        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth <= 576) {
                filterSidebar.classList.remove('expanded');
            } else {
                filterSidebar.classList.add('expanded');
            }
        });
    });
</script>
@endsection