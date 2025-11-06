@extends('layouts.app')


@section('title', 'Aari blousesBlouse On Line')

@section('content')

    <section class="container my-5 text-center">
        <div class="alert alert-success p-4 rounded shadow">
            <h3 class="fw-bold">✅ Enquiry Submitted Successfully</h3>
            <p class="mt-2">Thank you for contacting us. We will get back to you soon.</p>
            <a href="{{ route('index') }}" class="btn btn-primary mt-3">Back to Home</a>
        </div>
    </section>

   

    <!-- Ajouter icon angle up -->
    <a id="scrollup" href="#top">
        <i class="fa fa-angle-up text-danger"></i>
    </a>

@endsection