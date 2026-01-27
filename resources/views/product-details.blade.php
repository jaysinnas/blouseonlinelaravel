<div class="max-w-xl mx-auto">
    <h1 class="text-3xl font-bold mb-4">{{ $product->name }}</h1>

    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-96 object-cover rounded mb-4">

    <p class="mb-2">{{ $product->description }}</p>

    <p class="font-bold text-xl mb-2">Price: ${{ $product->price }}</p>

    @if($product->discount_percent > 0)
        <p class="text-red-600 mb-2">Discount: {{ $product->discount_percent }}%</p>
    @endif

    <p class="mb-4">Category: {{ $product->category->name ?? 'Uncategorized' }}</p>

    <a href="{{ route('trendy') }}" class="text-blue-500 hover:underline">← Back to Trendy Products</a>
</div>
