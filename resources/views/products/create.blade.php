@extends('layouts.app')

@section('content')

    <h1 class="text-center mb-5">Add New Product</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="w-75 mx-auto p-4 bg-light rounded shadow-sm">
        @csrf

        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" step="0.01" name="price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-primary w-100">Add Product</button>
    </form>

    <div class="form-check mb-3">
        <input type="hidden" name="is_trendy" value="0"> {{-- Ensures a 0 is sent if unchecked --}}
        <input type="checkbox" name="is_trendy" value="1" class="form-check-input" id="isTrendy">
        <label class="form-check-label fw-bold" for="isTrendy">Mark as Trendy & Stylish</label>
    </div>

@endsection
