@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
    <!-- fake payment -->
    <div class="row justify-content-center border border-danger mx-auto">
        <div class="col-lg-6 mt-5 mb-5">
            <div class="card ">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-4 text-center text-success">Payment Method</h5>

                <form action="{{ route('checkout.store') }}" method="POST" class="text-success fw-bold">
                    @csrf
                    <!-- Payment options -->
                    <div class="mb-3">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="payment_method" value="credit_card" checked>
                            <label class="form-check-label">Credit Card</label>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="payment_method" value="debit_card">
                            <label class="form-check-label">Debit Card</label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="payment_method" value="cod">
                            <label class="form-check-label">Cash on Delivery</label>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-12 mb-3">
                                <input type="text" name="card_number" class="form-control form-control-lg"
                                    placeholder="Card Number (fake)" required>
                            </div>

                            <div class="col-12 mb-3">
                                <input type="text" name="card_name" class="form-control form-control-lg"
                                    placeholder="Name on Card" required>
                            </div>

                            <div class="col-6 mb-4">
                                <input type="text" name="expiry" class="form-control form-control-lg"
                                    placeholder="MM/YY" required>
                            </div>

                            <div class="col-6 mb-4">
                                <input type="text" name="cvv" class="form-control form-control-lg"
                                    placeholder="CVV" required>
                            </div>
                        </div>

                        <button class="btn btn-success btn-lg w-100">
                            Pay ₹{{ number_format($total, 0) }}
                        </button>


                </form>
            </div>
        </div>
    </div>
    


</div>
@endsection
