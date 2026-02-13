{{-- resources/views/trendy/index.blade.php --}}
@extends('layouts.app')

@section('title','Trendy Products')

@section('content')


<div class="container my-5">
    <h2 class="text-center text-danger fw-bold mb-5">
        {{ $category->name }}
    </h2>

    <div class="row g-4">
        @forelse($categories as $category)
            @php $product = $category->products->first(); @endphp
             @if($product) 
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <img src="{{ $product->image_url }}"
                            class="card-img-top"
                            style="height:300px; object-fit:cover;">
                    </div>
                </div>
            @endif
        @empty
            <p class="text-center text-muted">No images found.</p>
        @endforelse
    </div>
</div>
@endsection
