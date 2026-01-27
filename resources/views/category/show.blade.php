@extends('layouts.app') 

@section('content')
<div class="container my-5">
    {{-- Dynamic Title based on the Category --}}
    <h2 class="text-center text-danger fw-bold mb-5">{{ $category->name }} Collection</h2>
    
    <div class="row g-4 justify-content-center">
        @forelse($products as $product)
            <div class="col-12 col-md-6 col-lg-4">
                {{-- Link to individual product details --}}
                <a href="{{ route('products.show', $product->id) }}" class="text-decoration-none">
                    <div class="card h-100 border-success rounded-4 shadow-lg border-2 overflow-hidden position-relative">
                        
                        {{-- Product Image --}}
                        <img src="{{ $product->image_url }}" 
                             class="card-img object-fit-cover" 
                             style="height: 400px;" 
                             alt="{{ $product->name }}">

                        {{-- The Trendy Style Overlay --}}
                        <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-25">
                            <h2 class="fs-4 text-white fw-bold mb-0" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.7);">
                                {{ $product->name }}
                            </h2>
                            
                            <p class="text-white fw-bold fs-5 mb-1">
                                ₹{{ number_format($product->price, 2) }}
                            </p>

                            @if($product->discount_percent > 0)
                                <span class="badge bg-danger w-50 mb-2">
                                    {{ $product->discount_percent }}% OFF
                                </span>
                            @endif

                            <!-- <button class="btn btn-success btn-sm w-100 mt-2">View Details</button> -->
                            <span class="btn btn-success btn-sm w-100 mt-2">View Details</span>

                        </div>
                    </div>
                </a>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <p class="text-muted fs-4">No products found in this category.</p>
                <a href="{{ route('index') }}" class="btn btn-outline-success">Back to Home</a>
            </div>
        @endforelse
    </div>

    {{-- Pagination --}}
    <div class="mt-5 d-flex justify-content-center">
        {{ $products->links() }}
    </div>
</div>
@endsection
