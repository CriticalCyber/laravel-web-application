@extends('layouts.app')

@section('title', 'My Orders')

@section('content')
<h1>My Orders</h1>

@if($orders->count() > 0)
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Date</th>
                    <th>Total Amount</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->created_at->format('M d, Y') }}</td>
                        <td>${{ number_format($order->total_amount, 2) }}</td>
                        <td>
                            <span class="badge bg-primary">{{ ucfirst($order->status) }}</span>
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">View Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    {{ $orders->links() }}
@else
    <p>You haven't placed any orders yet. <a href="{{ route('products.index') }}">Start shopping</a></p>
@endif
@endsection