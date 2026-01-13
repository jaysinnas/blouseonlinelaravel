@extends('layouts.app')

@section('title', $categoryName . ' Collection')

@section('content')

<div class="container my-5">
    <h1 class="text-center mb-5 fw-bold text-primary">{{ $categoryName }} Collection</h1>

    @if($products->isEmpty())
        <div class="alert alert-warning text-center" role="alert">
            No products found in the {{ $categoryName }} collection yet. Check back soon!
        </div>
    @else
        <div class="row g-4">
            <!-- {{-- Loop through the dynamically fetched products --}} -->
            @foreach($products as $product)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 rounded-4 shadow border-0 overflow-hidden">
                    <!-- {{-- Displays the product image using the Model Accessor --}} -->
                    <img src="{{ $product->image_url }}" 
                         class="card-img-top object-fit-cover" 
                         alt="{{ $product->name }}" 
                         style="height: 300px;">
                    
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold text-danger">{{ $product->name }}</h5>
                        <p class="card-text text-muted flex-grow-1 text-danger">{{ Str::limit($product->description, 80) }}</p>
                        
                        <div class="mt-2">
                            <!-- {{-- Displays the price from the database --}} -->
                            <span class="fs-4 fw-bolder text-danger">₹{{ number_format($product->price, 0) }}</span>
                        </div>

                        <!-- {{-- Button to view the product detail page --}} -->
                        <a href="{{ route('products.show', $product) }}" class="btn btn-outline-primary mt-3 w-100">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endif

    <div class="mt-5 text-center">
        <a href="{{ route('boutique') }}" class="btn btn-secondary btn-lg">← Back to Boutique</a>
    </div>

</div>

@endsection

