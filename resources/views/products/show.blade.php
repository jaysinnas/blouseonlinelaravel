 @extends('layouts.app')


@extends('layouts.app')

@section('title', $product->name) 

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">{{ $product->name }}</h1>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <img src="{{ $product->image_url ?? asset('images/default-blouse.jpg') }}" class="img-fluid rounded shadow" alt="{{ $product->name }}">
        </div>

        <div class="col-md-5">
            <p class="fw-bold fs-4">Price: {{ $product->price }} Rs</p>
            <p class="text-muted">{{ $product->description }}</p>

            <!-- <form method="POST" action="{{ route('cart.add', $product) }}" class="p-3 border rounded bg-light">
                @csrf
                <label class="fw-bold">Size</label>
                <select name="size" class="form-select mb-2" required>
                    <option value="">Choose size</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="Custom">Custom Tailoring</option>
                </select>

                <label class="fw-bold mt-2">Mesurement Notes (Optional)</label>
                <textarea name="measurements" class="form-controle mb-3"  rows="3"
                          placeholder="Example: Chest: 20in, Waist: 18in, Length: 25in..."></textarea>
                <label class="fw-bold">Quantity</label>
                <input type="number" name="quantity" value="1" min="1" class="form-control mb-3">

                <button type="submit" class="btn btn-success w-100">Add to Cart</button>
            </form> -->
            <form method="POST" action="{{ route('cart.add', $product) }}" class="p-4 border rounded bg-white shadow-sm">
    @csrf
    
    <div class="mb-3">
        <label class="fw-bold mb-1">Size</label>
        <select name="size" class="form-select" required>
            <option value="">Choose size</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="Custom">Custom Tailoring</option>
        </select>
    </div>

    <!-- <div class="row">
        <div class="col-md-8 mb-3">
            <label class="fw-bold mb-1">Measurement Notes (Optional)</label>
            <textarea name="measurements" class="form-control" rows="3" 
                placeholder="Example: Chest: 20in, Waist: 18in, Length: 25in..."></textarea>
        </div>
        
        <div class="col-md-4 mb-3">
            <label class="fw-bold mb-1">Quantity</label>
            <input type="number" name="quantity" value="1" min="1" class="form-control">
        </div>
    </div> -->
<div class="row">
    <div class="col-8">
        <label class="fw-bold">Measurement Notes</label>
        <textarea name="measurements" class="form-control" rows="3" placeholder="Chest, Waist, Height..."></textarea>
    </div>
    
    <div class="col-4">
        <label class="fw-bold">Quantity</label>
        <input type="number" name="quantity" value="1" min="1" class="form-control">
    </div>
</div>




    <!-- *************** -->

    <button type="submit" class="btn btn-success w-100 py-2 fw-bold">Add to Cart</button>
</form>
        </div>
    </div>

    <hr class="my-5">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Comments ({{ $product->comments->count() }})</h3>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Leave a Comment</h5>
                    <form action="{{ route('comments.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        
                        <div class="row mb-2">
                            <div class="col">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col">
                                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="mb-2">
                            <textarea name="comment" class="form-control" rows="3" placeholder="What do you think of this blouse?" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Comment</button>
                    </form>
                </div>
            </div>

            @forelse($product->comments->sortByDesc('created_at') as $comment)
                <div class="card mb-3 p-3 shadow-sm">
                    <div class="d-flex justify-content-between">
                        <strong>{{ $comment->name }}</strong>
                        <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                    </div>
                    <p class="mb-0">{{ $comment->comment }}</p>

                    @auth
                        @if(auth()->user()->is_admin)
                            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="mt-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this comment?')">Delete</button>
                            </form>
                        @endif
                    @endauth
                </div>
            @empty
                <p class="text-center text-muted">No comments yet. Be the first!</p>
            @endforelse
        </div>
    </div>
</div>
@endsection