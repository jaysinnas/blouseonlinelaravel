@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2>My Order History</h2>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Order #</th>
                <th>Date</th>
                <th>Total</th>
                <th>Status</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach(auth()->user()->orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->created_at->format('d M Y') }}</td>
                <td>{{ $order->total_price }} Rs</td>
                <td><span class="badge bg-info">{{ $order->status }}</span></td>
                <td>
                    <a href="#" class="btn btn-sm btn-primary">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection