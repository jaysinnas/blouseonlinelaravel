@extends('layouts.app')

@section('title', 'Shopping Cart')

@section('content')

<div class="container my-5 rounded-4">
    <h1 class="text-center mb-5 fw-bold text-success">Your Shopping Cart</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('cart') && count(session('cart')) > 0)
        <table class="table table-striped table-hover">
            <thead class="border-danger">
                <tr>
                    <th class="text-danger">Product</th>
                    <th class="text-danger">Size</th>
                    <th class="text-danger">Price</th>
                    <th class="text-danger" style="width: 15%">Quantity</th>
                    <th class="text-danger">Subtotal</th>
                    <th class="text-danger" style="width: 10%">Action</th> 
                </tr>
            </thead>
            
            <tbody>
                @php $total = 0 @endphp
               
                @foreach(session('cart') as $cartItemId => $item) 
                    <tr>
                        <td>
                            @php
                                $image = filter_var($item['image'], FILTER_VALIDATE_URL)
                                    ? $item['image']
                                    : asset('storage/' . $item['image']);
                            @endphp

                            <img src="{{ $image }}"
                                alt="{{ $item['name'] }}"
                                style="width: 50px; height: 50px;"
                                class="me-2 rounded">
                        </td>
                        <td class="text-danger">{{ $item['size'] }}</td>
                        <td class="text-danger">₹{{ number_format($item['price'], 0) }}</td>
                        
                        <td>
                            <form action="{{ route('cart.update', $cartItemId) }}" method="POST" class="d-flex border border-2">
                                @csrf
                                <input type="number" 
                                       name="quantity" 
                                       value="{{ $item['quantity'] }}" 
                                       min="1" 
                                       class="form-control me-2 text-danger" 
                                       style="width: 80px;"
                                       onchange="this.form.submit()">
                            </form>
                        </td>

                        <td class="text-danger">₹{{ number_format($item['price'] * $item['quantity'], 0) }}</td>
                        
                        <td>
                            <a href="{{ route('cart.remove', $cartItemId) }}" 
                               class="btn btn-sm btn-danger"
                               onclick="return confirm('Are you sure you want to remove this item?');">
                                <i class="fas fa-trash text-info"></i>
                            </a>
                        </td>
                    </tr>
                    
                    @php $total += $item['price'] * $item['quantity'] @endphp
                @endforeach
            </tbody>
        </table>

        <div class="row justify-content-end mt-4">
            <div class="col-md-4">
                <div class="card p-3 shadow-sm">
                    <h5 class="fw-bold text-danger">Cart Total: <span class="float-end text-danger">₹{{ number_format($total, 0) }}</span></h5>
                    <hr>
                   
                    <a href="{{ route('checkout.index') }}" class="btn btn-success btn-lg">Proceed to Checkout</a>

                </div>
            </div>
        </div>
        
    @else
    <div class="alert alert-info text-center" role="alert">
            <h4 class="alert-heading">Your cart is empty!</h4>
            <p>Looks like you haven't added anything to your cart yet.</p>
            <a href="{{ route('boutique') }}" class="btn btn-info mt-2">Continue Shopping</a>
        </div>
    @endif
</div>

@endsection