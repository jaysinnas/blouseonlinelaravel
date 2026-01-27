<h2 class="text-2xl font-bold mb-4">Trendy & Stylish</h2>
<div class="flex gap-4">
    @foreach($products as $product)
        <div class="product-card w-48">
            <a href="{{ route('product.show', $product->id) }}">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded">
            </a>
            <p class="mt-2 font-semibold">{{ $product->name }}</p>
            <p class="text-gray-500">${{ $product->price }}</p>
        </div>
    @endforeach
</div>
