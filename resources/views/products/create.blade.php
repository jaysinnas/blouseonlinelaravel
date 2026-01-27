@extends('layouts.app')

@section('title', 'Add New Product')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Add New Product</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Product Name --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Product Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Product Description --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Description</label>
            <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Price --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Price</label>
            <input type="number" name="price" class="form-control" step="0.01" min="0" value="{{ old('price') }}" required>
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
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
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
            <input type="checkbox" name="is_trendy" value="1" class="form-check-input" id="isTrendy" {{ old('is_trendy') ? 'checked' : '' }}>
            <label class="form-check-label fw-bold" for="isTrendy">Mark as Trendy & Stylish</label>
        </div>

        {{-- Image Upload --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Product Image</label>
            <input type="file" name="image" class="form-control" accept="image/*">
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Submit Button --}}
        <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Save Product</button>
    </form>
</div>
@endsection