@extends('layouts.app')

@section('title', 'Jobs - Blouse Online')

@section('content')
<div class="container my-5">
    <!-- Page Title -->
    <h1 class="text-success fw-bold mb-4 text-center">Join Our Team</h1>
    <p class="text-muted text-center mb-5">
        At <strong>Blouse Online</strong>, we’re passionate about fashion and creativity. 
        We’re always looking for talented people to join our growing team and help us design 
        elegant and customizable dresses for every occasion.
    </p>

    <!-- Company Values / Mission -->
    <div class="row mb-5">
        <div class="col-md-4 text-center">
            <i class="fas fa-lightbulb fa-3x text-success mb-3"></i>
            <h5 class="fw-bold">Innovation</h5>
            <p class="small text-muted">We love bringing new ideas to fashion and tailoring.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-users fa-3x text-success mb-3"></i>
            <h5 class="fw-bold">Teamwork</h5>
            <p class="small text-muted">Collaboration and creativity drive everything we do.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-heart fa-3x text-success mb-3"></i>
            <h5 class="fw-bold">Customer Focus</h5>
            <p class="small text-muted">Our customers are at the heart of every design.</p>
        </div>
    </div>

    <!-- Job Listings -->
    <h3 class="text-success fw-bold mb-4">Open Positions</h3>
    <div class="row g-4">
        <!-- Job 1 -->
        <div class="col-md-6">
            <div class="card shadow-sm p-4 border-success rounded-4">
                <h5 class="fw-bold text-success">Tailor (Men & Women)</h5>
                <p>We are looking for skilled tailors with experience in traditional and modern designs.</p>
                <a href="{{ route('contact') }}" class="btn btn-outline-success mt-2">Apply Now</a>
            </div>
        </div>
        <!-- Job 2 -->
        <div class="col-md-6">
            <div class="card shadow-sm p-4 border-success rounded-4">
                <h5 class="fw-bold text-success">Store Assistant</h5>
                <p>Help our customers find their perfect outfit and manage daily boutique operations.</p>
                <a href="{{ route('contact') }}" class="btn btn-outline-success mt-2">Apply Now</a>
            </div>
        </div>
        <!-- Job 3 -->
        <div class="col-md-6">
            <div class="card shadow-sm p-4 border-success rounded-4">
                <h5 class="fw-bold text-success">Fashion Designer</h5>
                <p>Create unique and stylish dresses and blouses for our seasonal collections.</p>
                <a href="{{ route('contact') }}" class="btn btn-outline-success mt-2">Apply Now</a>
            </div>
        </div>
        <!-- Job 4 -->
        <div class="col-md-6">
            <div class="card shadow-sm p-4 border-success rounded-4">
                <h5 class="fw-bold text-success">Marketing Coordinator</h5>
                <p>Promote our brand through social media, campaigns, and events.</p>
                <a href="{{ route('contact') }}" class="btn btn-outline-success mt-2">Apply Now</a>
            </div>
        </div>
    </div>

    <!-- Contact / Apply Info -->
    <div class="text-center mt-5">
        <p class="fw-bold text-success">Interested in joining us? <a href="{{ route('contact') }}" class="text-decoration-none">Contact us</a> to submit your CV or portfolio.</p>
    </div>
</div>
@endsection

