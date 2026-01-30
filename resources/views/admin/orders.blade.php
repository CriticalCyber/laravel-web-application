@extends('layouts.admin')

@section('title', 'AriDhi Collections - Manage Orders')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><i class="fas fa-shopping-cart me-2"></i>Manage Orders</h1>
</div>

{{-- DEBUG: Remove this after testing --}}
<div style="background: yellow; padding: 10px;">
    <strong>DEBUG INFO:</strong><br>
    Total Orders: {{ $orders->total() }}<br>
    Orders on this page: {{ $orders->count() }}<br>
    Order IDs: {{ $orders->pluck('id')->implode(', ') }}<br>
    Logged in as: {{ Auth::user()->email }}<br>
    Is Admin: {{ Auth::user()->isAdmin() ? 'YES' : 'NO' }}
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Customer</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Date</th>
                        <th>Total (₹)</th>
                        <th>Status</th>
                        <th>Payment</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $order)
                        <tr>
                            <td class="text-center">{{ $order->id }}</td>
                            <td>{{ $order->user->name ?? 'N/A' }}</td>
                            <td>{{ $order->user->phone ?? 'N/A' }}</td>
                            <td>{{ $order->user->email ?? 'N/A' }}</td>
                            <td>{{ $order->shipping_address ?? 'N/A' }}</td>
                            <td>{{ $order->created_at->format('M d, Y') }}</td>
                            <td>₹{{ number_format($order->total_amount, 2) }}</td>
                            <td>
                                @if($order->status === 'Completed')
                                    <span class="badge bg-success">Completed</span>
                                @elseif($order->status === 'Pending')
                                    <span class="badge bg-warning text-dark">Pending</span>
                                @else
                                    <span class="badge bg-secondary">{{ ucfirst($order->status) }}</span>
                                @endif
                            </td>
                            <td><span class="badge bg-info">{{ ucfirst($order->payment_method) }}</span></td>
                            <td class="text-center">
                                @if($order->status !== 'Completed')
                                    <form action="{{ route('admin.orders.complete', $order->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm">Complete</button>
                                    </form>
                                @endif
                                <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this order?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10" class="text-center">
                                <div class="py-5">
                                    <i class="fas fa-shopping-cart fa-3x text-muted mb-3"></i>
                                    <h4>No orders found</h4>
                                    <p class="text-muted">No orders have been placed yet.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="d-flex justify-content-center">
            {{ $orders->links() }}
        </div>
    </div>
</div>
@endsection