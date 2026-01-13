<div class="comments-section">
    <h3>Comments ({{ $product->comments->count() }})</h3>
    
    @foreach($product->comments as $comment)
        <div class="comment-box" style="border-bottom: 1px solid #ccc; margin-bottom: 10px;">
            <strong>{{ $comment->name }}</strong> 
            <small>{{ $comment->created_at->diffForHumans() }}</small>
            <p>{{ $comment->comment }}</p>
        </div>
    @endforeach
</div>

<hr>

<form action="{{ route('comments.store') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">

    <div>
        <input type="text" name="name" placeholder="Your Name" required>
    </div>
    <div>
        <input type="email" name="email" placeholder="Your Email" required>
    </div>
    <div>
        <textarea name="comment" placeholder="Write your comment here..." required></textarea>
    </div>
    
    <button type="submit">Post Comment</button>
</form>

@if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif

@foreach($product->comments as $comment)
    <div class="comment-box" style="border: 1px solid #eee; padding: 10px; margin-bottom: 5px;">
        <strong>{{ $comment->name }}</strong>
        <p>{{ $comment->comment }}</p>

        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this comment?');">
            @csrf
            @method('DELETE')
            <button type="submit" style="color: red; border: none; background: none; cursor: pointer; font-size: 0.8em;">
                Delete Comment
            </button>
        </form>
    </div>
@endforeach
<!-- You don't want the "Delete" button to appear for regular visitors. We use the @if directive to check if the logged-in user is an admin. -->
@foreach($product->comments as $comment)
    <div class="comment-box">
        <strong>{{ $comment->name }}</strong>
        <p>{{ $comment->comment }}</p>

        @auth
            @if(auth()->user()->is_admin)
                <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete">Delete</button>
                </form>
            @endif
        @endauth
    </div>
@endforeach