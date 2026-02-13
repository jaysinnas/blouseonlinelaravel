@extends('layouts.app')

@section('title', 'Trendy in ' . $category->name)

@section('content')
    <div class="container my-5">
        <h2 class="text-center text-danger fw-bold mb-5">
            {{ $category->name }}
        </h2>

        <div class="row g-4">
            @forelse($products as $product)
                <div class="col-md-3">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ $product->image_url }}"
                            class="card-img-top"
                            style="height:300px; object-fit:cover"
                            alt="{{ $product->name }}">

                        <div class="card-body text-center">
                            <h5 class="fw-bold">{{ $product->name }}</h5>
                            <p class="text-danger fw-bold">{{ number_format($product->price) }} ₹</p>

                            <a href="{{ route('products.show', $product) }}"
                            class="btn btn-success btn-sm">
                                View details
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-muted">No trendy products found.</p>
            @endforelse
        </div>

        <div class="mt-4 d-flex justify-content-center p-2 bg-success-subtle rounded">
            {{ $products->links() }}
        </div>
    </div>
@endsection 

