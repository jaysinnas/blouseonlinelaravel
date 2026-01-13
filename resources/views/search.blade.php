@extends('layouts.app')

@section('title', 'Search Products')

@section('content')

<div class="container my-5">
    <h1 class="text-center mb-5 fw-bold text-primary">Search Products</h1>

    <!-- Search Form -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <form action="{{ route('search.results') }}" method="GET" class="d-flex gap-2">
                <input 
                    type="text" 
                    name="q" 
                    class="form-control form-control-lg" 
                    placeholder="Search for products, collections, or styles..." 
                    value="{{ request('q') }}"
                    required>
                <button type="submit" class="btn btn-primary btn-lg px-4">Search</button>
            </form>
        </div>
    </div>

    <!-- Search Results -->
    @if(request('q'))
        <div class="row">
            <div class="col-12">
                <h5 class="text-muted mb-4">
                    Results for: <strong>"{{ request('q') }}"</strong>
                    @if($products->count())
                        <span class="badge bg-success">{{ $products->count() }} found</span>
                    @else
                        <span class="badge bg-danger">No results</span>
                    @endif
                </h5>
            </div>
        </div>

        @if($products->isEmpty())
            <div class="alert alert-warning text-center" role="alert">
                <h5>No products found matching "{{ request('q') }}"</h5>
                <p class="mb-0">Try searching with different keywords or browse our <a href="{{ route('boutique') }}">collections</a>.</p>
            </div>
        @else
            <div class="row g-4">
                @foreach($products as $product)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card h-100 rounded-4 shadow border-0 overflow-hidden">
                            <a href="{{ route('products.show', $product) }}">    
                                <img src="{{ $product->image_url }}" 
                                    class="card-img-top object-fit-cover" 
                                    alt="{{ $product->name }}" 
                                    style="height: 300px;">
                            </a>  
                             <!--******************  -->
                                <!-- <div class="wishlist-icon-overlay">
                                    <a href="{{ route('wishlist.add', $product) }}" title="Add to Wishlist">
                                       <i class="fa fa-heart text-danger" aria-hidden="true"></i>
                                        {{-- Use 'far fa-heart' (empty) for not saved, and 'fas fa-heart' (solid) for saved --}}
                                    </a>
                                </div> -->
                                @php
                                    $isWishlisted = in_array($product->id, $wishlistIds ?? []);
                                @endphp

                                <div class="wishlist-icon-overlay">
                                    <a href="{{ route('wishlist.add', $product) }}" title="Add to Wishlist">
                                        {{-- Use solid heart if wishlisted, outline if not --}}
                                        <i class="{{ $isWishlisted ? 'fas fa-heart text-danger' : 'far fa-heart' }}"></i>
                                    </a>
                                </div>

                             <!-- ************* -->
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title fw-bold text-dark">{{ $product->name }}</h5>
                                    <p class="card-text text-muted flex-grow-1">{{ Str::limit($product->description, 80) }}</p>
                                    
                                    <div class="mt-2">
                                        <span class="fs-4 fw-bolder text-danger">₹{{ number_format($product->price, 0) }}</span>
                                    </div>

                                    <a href="{{ route('products.show', $product) }}" class="btn btn-outline-primary mt-3 w-100">View Details</a>
                                </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    @else
        <!-- No search yet -->
        <div class="alert alert-info text-center" role="alert">
            <p class="mb-0">Enter a search term above to find products.</p>
        </div>
    @endif

    <div class="mt-5 text-center">
        <a href="{{ route('index') }}" class="btn btn-secondary btn-lg">← Back to Home</a>
    </div>

</div>

@endsection
