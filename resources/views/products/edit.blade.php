@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="container my-5">

    <h2 class="mb-4">Edit Product</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Price (Rs)</label>
            <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Current Image</label><br>
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" width="100" class="rounded mb-2">
            @endif
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-warning">Update Product</button>
    </form>
    <div class="form-check mb-3">
        <input type="hidden" name="is_trendy" value="0"> {{-- Ensures a 0 is sent if unchecked --}}
        <input type="checkbox" name="is_trendy" value="1" class="form-check-input" id="isTrendy">
        <label class="form-check-label fw-bold" for="isTrendy">Mark as Trendy & Stylish</label>
    </div>

</div>
@endsection
