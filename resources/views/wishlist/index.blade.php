@extends('layouts.app')

@section('title', 'Your Wishlist')

@section('content')

<div class="container my-5 text-center">
    <h1 class=" mb-5 fw-bold text-danger">❤️ Your Wishlist</h1>

    @if(session('wishlist') && count(session('wishlist')) > 0)
        <div class="row g-4">
            @foreach(session('wishlist') as $item)
                
                @php
                    // Detect if image is a full URL or stored locally
                    $image = filter_var($item['image'], FILTER_VALIDATE_URL) 
                             ? $item['image'] 
                             : asset('storage/' . $item['image']);
                             
                @endphp


                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="{{ $image }}" 
                             class="card-img-top object-fit-cover" 
                             alt="{{ $item['name'] }}" 
                             style="height: 250px;">

                        
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">{{ $item['name'] }}</h5>
                            <p class="card-text text-danger fs-5 fw-bolder">₹{{ number_format($item['price'], 0) }}</p>
                            
                            <div class="mt-auto d-grid gap-2">
                                <a href="{{ route('products.show', $item['id']) }}" class="btn btn-primary">
                                    View Details
                                </a>

                                <a href="{{ route('wishlist.add', $item['id']) }}" class="btn btn-outline-danger">
                                    Remove
                                </a>
                            </div>
                            <form method="POST" action="{{ route('cart.add', $item['id']) }}">
                                @csrf
                                <input type="hidden" name="size" value="M">
                                <input type="hidden" name="quantity" value="1" class="text-danger">

                                <button type="submit" class="btn btn-success">
                                    Add to Cart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    @else
        <div class="alert alert-info text-center" role="alert">
            <h4 class="alert-heading">Your Wishlist is Empty!</h4>
            <p>Save products you love here for later. Click the heart icon on any product page.</p>
            <a href="{{ route('boutique') }}" class="btn btn-info mt-2">Start Shopping</a>
        </div>
    @endif
</div>

@endsection