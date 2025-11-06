@extends('layouts.app')

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
@endsection
