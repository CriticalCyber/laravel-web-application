@extends('layouts.app')

@section('title', 'AriDhi Collections - My Orders')

@section('content')
<style>
    body {
        font-family: 'Geist', sans-serif;
        font-weight: 400;
        overflow-y: auto;
        height: auto;
    }
    
    .display-4 {
        font-family: 'Geist', sans-serif;
        font-weight: 700;
    }
    
    .page {
        min-height: 100vh;
        overflow-x: hidden;
    }
</style>
<div class="container py-5 mt-3">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="display-4 fw-bold mb-3" style="color: #8B4513;">
                <i class="fas fa-shopping-bag me-3"></i>My Orders
            </h1>
            <p class="lead text-muted">Track your order history and status</p>
        </div>
    </div>

    @if($orders->count() > 0)
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0">
                            <i class="fas fa-list me-2"></i>Order History
                            <span class="badge bg-secondary ms-2">{{ $orders->count() }} Orders</span>
                        </h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Date</th>
                                        <th>Items</th>
                                        <th>Total Amount</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>
                                                <strong>#{{ $order->id }}</strong>
                                            </td>
                                            <td>
                                                <small>{{ $order->created_at->format('M d, Y') }}</small>
                                                <div class="text-muted small">{{ $order->created_at->format('h:i A') }}</div>
                                            </td>
                                            <td>
                                                <span class="badge bg-primary">{{ $order->orderItems->count() }} items</span>
                                            </td>
                                            <td>
                                                <strong>₹{{ number_format($order->total_amount, 2) }}</strong>
                                            </td>
                                            <td>
                                                @switch($order->status)
                                                    @case('pending')
                                                        <span class="badge bg-warning text-dark">Pending</span>
                                                        @break
                                                    @case('processing')
                                                        <span class="badge bg-info">Processing</span>
                                                        @break
                                                    @case('shipped')
                                                        <span class="badge bg-primary">Shipped</span>
                                                        @break
                                                    @case('delivered')
                                                        <span class="badge bg-success">Delivered</span>
                                                        @break
                                                    @case('cancelled')
                                                        <span class="badge bg-danger">Cancelled</span>
                                                        @break
                                                    @default
                                                        <span class="badge bg-secondary">{{ ucfirst($order->status) }}</span>
                                                @endswitch
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-outline-primary">
                                                    <i class="fas fa-eye me-1"></i>View
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @if($orders->hasPages())
                        <div class="card-footer bg-white">
                            <div class="d-flex justify-content-center">
                                {{ $orders->links() }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @else
        <!-- No Orders -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm border-0 text-center py-5">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="fas fa-shopping-bag fa-4x text-muted"></i>
                        </div>
                        <h3 class="mb-3">No Orders Yet</h3>
                        <p class="text-muted mb-4">You haven't placed any orders with AriDhi Collections.</p>
                        <a href="{{ route('products.collection') }}" class="btn btn-primary btn-lg" style="background-color: #8B4513; border-color: #8B4513;">
                            <i class="fas fa-shopping-bag me-2"></i>Start Shopping
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Custom Styles -->
<style>
    .card {
        border-radius: 10px;
    }
    
    .card-header {
        border-bottom: 1px solid #eee;
        border-radius: 10px 10px 0 0 !important;
    }
    
    .table th {
        font-weight: 600;
    }
    
    .table-hover tbody tr:hover {
        background-color: rgba(139, 69, 19, 0.05);
    }
</style>
@endsection