@extends('layouts.app')

@section('content')
<div class="container text-center my-5">
    <h1>✅ Payment Successful</h1>
    <p>Thank you for your order!</p>

    <a href="{{ route('index') }}" class="btn btn-primary mt-3">
        Continue Shopping
    </a>
</div>
@endsection
