@extends('layouts.app')

@section('title', 'Shopping Cart')

@section('content')
<h1>Shopping Cart</h1>

@if($cartItems->count() > 0)
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $total = 0;
                @endphp
                @foreach($cartItems as $item)
                    @php
                        $itemTotal = $item->product->price * $item->quantity;
                        $total += $itemTotal;
                    @endphp
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                @if($item->product->image_path)
                                    <img src="{{ Storage::url($item->product->image_path) }}" class="me-3" style="width: 80px; height: 80px; object-fit: cover;">
                                @else
                                    <img src="https://via.placeholder.com/80x80" class="me-3" alt="{{ $item->product->name }}">
                                @endif
                                <div>
                                    <h5>{{ $item->product->name }}</h5>
                                </div>
                            </div>
                        </td>
                        <td>₹{{ $item->product->price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>₹{{ number_format($itemTotal, 2) }}</td>
                        <td>
                            <form action="{{ route('cart.destroy', $item) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-end"><strong>Total:</strong></td>
                    <td><strong>₹{{ number_format($total, 2) }}</strong></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>
    
    <div class="d-flex justify-content-end">
        <a href="{{ route('orders.create') }}" class="btn btn-success">Proceed to Checkout</a>
    </div>
@else
    <p>Your cart is empty. <a href="{{ route('products.index') }}">Continue shopping</a></p>
@endif
@endsection