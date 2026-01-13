@extends('layouts.app')

@section('title', 'Checkout Payment')

@section('content')
    <div class="container my-5 mx-auto border border-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 mt-4">
                <!-- checkout summary -->
                <div class="card shadow-lg border-0 mb-4">
                    <div class="card-body text-center border border-danger">
                        <h1 class="text-danger text-center">Checkout</h1>
                        @php
                            $cart = session('cart', []);
                            $total = 0;
                            foreach ($cart as $item) {
                                $total += $item['price'] * $item['quantity'];
                            }
                        @endphp
                        <h4 class="text-danger">Total Amount:
                            <span class="text-success"> ₹{{ number_format($total, 0) }}</span>
                        </h4>


                        <form method="GET" action="{{ route('checkout.payment') }}">
                            <button class="btn btn-success btn-lg px-5">
                                Proceed to Payment
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
@endsection