@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Edit Product</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Product Name --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Product Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}" required>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Product Description --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Description</label>
            <textarea name="description" class="form-control" rows="3">{{ old('description', $product->description) }}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Price --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Price</label>
            <input type="number" name="price" class="form-control" step="0.01" min="0" value="{{ old('price', $product->price) }}" required>
            @error('price')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Category --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Category</label>
            <select name="category_id" class="form-select" required>
                <option value="">-- Select Category --</option>
                @foreach(\App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Trendy Checkbox --}}
        <div class="form-check mb-3">
            <input type="hidden" name="is_trendy" value="0">
            <input type="checkbox" name="is_trendy" value="1" class="form-check-input" id="isTrendy" {{ old('is_trendy', $product->is_trendy) ? 'checked' : '' }}>
            <label class="form-check-label fw-bold" for="isTrendy">Mark as Trendy & Stylish</label>
        </div>

        {{-- Image Upload --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Product Image</label>
            <input type="file" name="image" class="form-control" accept="image/*">
            @if($product->image_url)
                <small class="text-muted">Current image:</small>
                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="img-thumbnail mt-2" style="height: 120px;">
            @endif
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Submit Button --}}
        <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Update Product</button>
    </form>
</div>
@endsection