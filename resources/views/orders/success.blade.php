@extends('layouts.app')

@section('title', 'AriDhi Collections - Order Success')

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
<div class="container py-5">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-12 text-center">
            <div class="mb-4">
                <div class="icon-circle bg-success mx-auto mb-3">
                    <i class="fas fa-check fa-3x text-white"></i>
                </div>
                <h1 class="display-4 fw-bold mb-3" style="color: #8B4513;">
                    Order Placed Successfully!
                </h1>
                <p class="lead text-muted">Thank you for your purchase with AriDhi Collections</p>
                <div class="alert alert-success d-inline-block mt-3">
                    <h5 class="mb-0"><i class="fas fa-heart me-2"></i>Thanks for ordering!</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0">
                        <i class="fas fa-receipt me-2"></i>Order Summary
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h6 class="text-muted">Order ID</h6>
                            <p class="mb-0"><strong>#{{ $order->id }}</strong></p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <h6 class="text-muted">Order Date</h6>
                            <p class="mb-0"><strong>{{ $order->created_at->format('M d, Y') }}</strong></p>
                        </div>
                    </div>
                    
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h6 class="text-muted">Shipping Address</h6>
                            <p class="mb-0"><strong>{{ $order->shipping_address }}</strong></p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <h6 class="text-muted">Payment Method</h6>
                            <p class="mb-0">
                                @switch($order->payment_method)
                                    @case('cash_on_delivery')
                                        <strong>Cash on Delivery</strong>
                                        @break
                                    @default
                                        <strong>{{ ucfirst(str_replace('_', ' ', $order->payment_method)) }}</strong>
                                @endswitch
                            </p>
                        </div>
                    </div>
                    
                    <div class="table-responsive mb-4">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order->orderItems as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                @if($item->product->image_path)
                                                    <img src="{{ Storage::url($item->product->image_path) }}" class="img-fluid rounded me-3" alt="{{ $item->product->name }}" style="width: 60px; height: 60px; object-fit: cover;">
                                                @else
                                                    <img src="https://via.placeholder.com/60x60?text=AC" class="img-fluid rounded me-3" alt="{{ $item->product->name }}" style="width: 60px; height: 60px;">
                                                @endif
                                                <div>
                                                    <h6 class="mb-0">{{ $item->product->name }}</h6>
                                                    <small class="text-muted">{{ $item->product->category->name ?? 'Product' }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>₹{{ number_format($item->price, 2) }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>₹{{ number_format($item->price * $item->quantity, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot class="table-light">
                                <tr>
                                    <td colspan="3" class="text-end"><strong>Subtotal:</strong></td>
                                    <td><strong>₹{{ number_format($order->total_amount + $order->discount_amount, 2) }}</strong></td>
                                </tr>
                                @if($order->discount_amount > 0)
                                <tr>
                                    <td colspan="3" class="text-end"><strong>Discount:</strong></td>
                                    <td><strong class="text-success">-₹{{ number_format($order->discount_amount, 2) }}</strong></td>
                                </tr>
                                @endif
                                <tr>
                                    <td colspan="3" class="text-end"><strong>Total Amount:</strong></td>
                                    <td><strong>₹{{ number_format($order->total_amount, 2) }}</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    
                    <div class="alert alert-info">
                        <h6 class="alert-heading"><i class="fas fa-info-circle me-2"></i>Order Status</h6>
                        <p class="mb-0">Your order is currently <strong>{{ ucfirst($order->status) }}</strong>. We'll send you an email when your order status updates.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <a href="{{ route('products.collection') }}" class="btn btn-primary btn-lg me-2" style="background-color: #8B4513; border-color: #8B4513;">
                    <i class="fas fa-shopping-bag me-2"></i>Continue Shopping
                </a>
                <a href="{{ route('orders.index') }}" class="btn btn-outline-primary btn-lg">
                    <i class="fas fa-list me-2"></i>View All Orders
                </a>
            </div>
        </div>
    </div>
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
    
    .icon-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .table th {
        font-weight: 600;
    }
</style>
@endsection