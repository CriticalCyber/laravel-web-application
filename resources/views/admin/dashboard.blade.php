@extends('layouts.admin')

@section('title', 'AriDhi Collections Admin Dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">AriDhi Collections Admin Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary" id="shareBtn">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary" id="exportBtn">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
        </button>
    </div>
</div>

<!-- Share Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="shareModalLabel">Share Dashboard</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Share this link with others to give them access to this dashboard:</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="shareableLink" readonly>
                    <button class="btn btn-outline-secondary" type="button" id="copyLinkBtn">Copy</button>
                </div>
                <div class="alert alert-success d-none" id="copySuccessMessage" role="alert">
                    Link copied to clipboard!
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Stats Cards -->
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card bg-primary text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Total Products</h5>
                        <p class="card-text display-6" id="productsCount">{{ $productsCount }}</p>
                    </div>
                    <i class="fas fa-box fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="card bg-success text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Total Orders</h5>
                        <p class="card-text display-6" id="ordersCount">{{ $ordersCount }}</p>
                    </div>
                    <i class="fas fa-shopping-cart fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="card bg-warning text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Categories</h5>
                        <p class="card-text display-6" id="categoriesCount">{{ $categoriesCount }}</p>
                    </div>
                    <i class="fas fa-tags fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="card bg-info text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Low Stock Items</h5>
                        <p class="card-text display-6" id="lowStockCount">{{ $lowStockProducts->count() }}</p>
                    </div>
                    <i class="fas fa-exclamation-triangle fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Charts Row -->
<div class="row mb-4">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>Sales Overview</h5>
            </div>
            <div class="card-body">
                <canvas id="salesChart" height="100"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5>Top Categories</h5>
            </div>
            <div class="card-body">
                <canvas id="categoriesChart" height="100"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Recent Activity -->
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>Recent Orders</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="recentOrdersTable">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentOrders as $order)
                                <tr>
                                    <td>#{{ $order->id }}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->created_at->format('M d, Y') }}</td>
                                    <td>
                                        <span class="badge bg-success">Completed</span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">No recent orders</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>Low Stock Products</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="lowStockTable">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Stock</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($lowStockProducts as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->stock_quantity }}</td>
                                    <td>
                                        @if($product->stock_quantity <= 5)
                                            <span class="badge bg-danger">Critical</span>
                                        @elseif($product->stock_quantity <= 10)
                                            <span class="badge bg-warning">Low</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">All products are well stocked</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js Scripts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Sales Chart
    const salesCtx = document.getElementById('salesChart').getContext('2d');
    const salesLabels = @json($salesData['labels']);
    const salesValues = @json($salesData['data']);
    
    const salesChart = new Chart(salesCtx, {
        type: 'line',
        data: {
            labels: salesLabels,
            datasets: [{
                label: 'Sales (₹)',
                data: salesValues,
                borderColor: 'rgb(75, 192, 192)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                tension: 0.1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Categories Chart
    const categoriesCtx = document.getElementById('categoriesChart').getContext('2d');
    
    // Get real category sales data
    const categorySalesData = @json($categorySalesData);
    const categoryNames = categorySalesData.map(item => item.name);
    const categorySales = categorySalesData.map(item => item.sales);
    
    const backgroundColors = [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(153, 102, 255)',
        'rgb(255, 159, 64)',
        'rgb(199, 199, 199)',
        'rgb(83, 102, 255)'
    ];
    
    const categoriesChart = new Chart(categoriesCtx, {
        type: 'doughnut',
        data: {
            labels: categoryNames,
            datasets: [{
                label: 'Sales (₹)',
                data: categorySales,
                backgroundColor: backgroundColors.slice(0, categoryNames.length)
            }]
        },
        options: {
            responsive: true
        }
    });
</script>

<!-- Font Awesome for Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Custom JavaScript for Share and Export functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Pass PHP data to JavaScript
        const dashboardData = {
            productsCount: {{ $productsCount }},
            ordersCount: {{ $ordersCount }},
            categoriesCount: {{ $categoriesCount }},
            lowStockCount: {{ $lowStockProducts->count() }},
            recentOrders: [
                @forelse($recentOrders as $order)
                {
                    id: {{ $order->id }},
                    customer: "{{ $order->user->name }}",
                    date: "{{ $order->created_at->format('M d, Y') }}",
                    status: "Completed"
                },
                @empty
                @endforelse
            ],
            lowStockProducts: [
                @forelse($lowStockProducts as $product)
                {
                    name: "{{ $product->name }}",
                    stock: {{ $product->stock_quantity }},
                    status: "@if($product->stock_quantity <= 5) Critical @elseif($product->stock_quantity <= 10) Low @endif"
                },
                @empty
                @endforelse
            ]
        };

        // Share button functionality
        const shareBtn = document.getElementById('shareBtn');
        const shareModal = new bootstrap.Modal(document.getElementById('shareModal'));
        const shareableLink = document.getElementById('shareableLink');
        const copyLinkBtn = document.getElementById('copyLinkBtn');
        const copySuccessMessage = document.getElementById('copySuccessMessage');
        
        shareBtn.addEventListener('click', function() {
            // Generate shareable link (current page URL)
            shareableLink.value = window.location.href;
            shareModal.show();
        });
        
        copyLinkBtn.addEventListener('click', function() {
            // Copy link to clipboard
            shareableLink.select();
            document.execCommand('copy');
            
            // Show success message
            copySuccessMessage.classList.remove('d-none');
            
            // Hide success message after 2 seconds
            setTimeout(function() {
                copySuccessMessage.classList.add('d-none');
            }, 2000);
        });
        
        // Export button functionality
        const exportBtn = document.getElementById('exportBtn');
        
        exportBtn.addEventListener('click', function() {
            // Export dashboard data to CSV
            exportDashboardData(dashboardData);
        });
        
        function exportDashboardData(data) {
            // Create CSV content
            let csvContent = "Dashboard Data Export\\n\\n";
            
            // Add summary data
            csvContent += "Summary\\n";
            csvContent += "Total Products,Total Orders,Categories,Low Stock Items\\n";
            csvContent += data.productsCount + "," + data.ordersCount + "," + data.categoriesCount + "," + data.lowStockCount + "\\n\\n";
            
            // Add recent orders data
            csvContent += "Recent Orders\\n";
            csvContent += "Order ID,Customer,Date,Status\\n";
            
            if (data.recentOrders.length > 0) {
                data.recentOrders.forEach(order => {
                    csvContent += "#" + order.id + "," + order.customer + "," + order.date + "," + order.status + "\\n";
                });
            } else {
                csvContent += "No recent orders\\n";
            }
            
            csvContent += "\\n";
            
            // Add low stock products data
            csvContent += "Low Stock Products\\n";
            csvContent += "Product,Stock,Status\\n";
            
            if (data.lowStockProducts.length > 0) {
                data.lowStockProducts.forEach(product => {
                    csvContent += product.name + "," + product.stock + "," + product.status + "\\n";
                });
            } else {
                csvContent += "All products are well stocked\\n";
            }
            
            // Create blob and download
            const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
            const url = URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.setAttribute('href', url);
            link.setAttribute('download', 'dashboard_data.csv');
            link.style.visibility = 'hidden';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    });
</script>
@endsection