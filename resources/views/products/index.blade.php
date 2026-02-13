@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Nos Produits</h1>

    <div class="row g-4">
        @foreach ($products as $product)
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card shadow-sm h-100 rounded-4 overflow-hidden">

                    {{-- Image via accessor --}}
                    <img src="{{ $product->image_url }}" 
                         class="card-img-top object-fit-cover" 
                         style="height: 220px;" 
                         alt="{{ $product->name }}">

                    <div class="card-body text-center">
                        <h5 class="fw-bold text-danger">{{ $product->name }}</h5>
                        <p class="text-danger fw-bold mb-1">₹{{ number_format($product->price, 2) }}</p>
                        <p class="small text-muted">{{ Str::limit($product->description, 50) }}</p>

                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-success mt-2 w-100">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Pagination if needed --}}
    <div class="d-flex justify-content-center mt-5">
        {{ $products->links() }}
    </div>
</div>
@endsection


