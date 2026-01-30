@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<h1>Checkout</h1>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Shipping Information</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('orders.store') }}">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="shipping_address" class="form-label">Shipping Address</label>
                        <textarea class="form-control" id="shipping_address" name="shipping_address" rows="3" required></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="payment_method" class="form-label">Payment Method</label>
                        <select class="form-select" id="payment_method" name="payment_method" required>
                            <option value="">Select Payment Method</option>
                            <option value="credit_card">Credit Card</option>
                            <option value="paypal">PayPal</option>
                            <option value="cash_on_delivery">Cash on Delivery</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-success">Place Order</button>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4>Order Summary</h4>
            </div>
            <div class="card-body">
                @php
                    $total = 0;
                @endphp
                @foreach($cartItems as $item)
                    @php
                        $itemTotal = $item->product->price * $item->quantity;
                        $total += $itemTotal;
                    @endphp
                    <div class="d-flex justify-content-between">
                        <span>{{ $item->product->name }} ({{ $item->quantity }})</span>
                        <span>₹{{ number_format($itemTotal, 2) }}</span>
                    </div>
                @endforeach
                <hr>
                <div class="d-flex justify-content-between">
                    <strong>Total:</strong>
                    <strong>₹{{ number_format($total, 2) }}</strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection