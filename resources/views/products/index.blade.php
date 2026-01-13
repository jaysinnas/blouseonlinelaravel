@extends('layouts.app')

<!-- @section('title', 'Products') -->
@section('content')
<div class="container">
    <h1 class="text-center">Nos Produits</h1>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-3">
                <div class="card mb-3">
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5>{{ $product->name }}</h5>
                        <p>{{ $product->price }} €</p>
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>





<!-- <div class="container my-5">

    <h1 class="text-center mb-5">Nos Produits</h1>

    <div class="row g-4">
        @foreach ($products as $product)
            <div class="col-md-3">
                <div class="card shadow-sm h-100">

                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" 
                             class="card-img-top" 
                             alt="{{ $product->name }}"
                             style="height: 220px; object-fit: cover;">
                    @else
                        <img src="https://via.placeholder.com/300x220?text=No+Image"
                             class="card-img-top">
                    @endif

                    <div class="card-body">
                        <h5 class="fw-bold">{{ $product->name }}</h5>

                        <p class="text-success fw-bold mb-1">
                            ₹ {{ number_format($product->price, 2) }}
                        </p>

                        <p class="small text-muted">{{ $product->description }}</p>
                    </div>

                </div>
            </div>
        @endforeach
    </div>

</div> -->

@endsection








