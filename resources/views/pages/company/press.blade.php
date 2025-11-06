@extends('layouts.app')

@section('title', 'Press & Media - Blouse Online')

@section('content')
<div class="container my-5">
    <!-- Page Title -->
    <h1 class="text-success fw-bold mb-4 text-center">Press & Media</h1>
    <p class="text-muted text-center mb-5">
        Stay updated with the latest news, press releases, and events from 
        <strong>Blouse Online</strong>. Discover how we’re shaping the future of online tailoring and modern fashion.
    </p>

    <!-- Featured News -->
    <div class="card mb-5 p-4 border-success shadow-sm rounded-4">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="{{ asset('assets/all_images/press/press1.jpg') }}" alt="Press Image" class="img-fluid rounded-4">
            </div>
            <div class="col-md-8">
                <h4 class="text-success fw-bold">Blouse Online Launches New Tailoring Platform</h4>
                <p class="text-muted small mb-1">March 2025 • Marseille</p>
                <p>
                    Blouse Online has officially launched its new digital tailoring platform, allowing customers to 
                    design, preview, and order their custom-made outfits from home. 
                    This innovation marks a major step toward modernizing the traditional tailoring experience.
                </p>
                <a href="#" class="text-success fw-bold text-decoration-none">Read More →</a>
            </div>
        </div>
    </div>

    <!-- Other News -->
    <h3 class="text-success fw-bold mb-4">Recent Press Releases</h3>

    <div class="row g-4">
        <!-- Article 1 -->
        <div class="col-md-6">
            <div class="card p-4 border-success shadow-sm rounded-4 h-100">
                <h5 class="text-success fw-bold">Blouse Online Opens New Boutique in Bangalore</h5>
                <p class="text-muted small mb-2">February 2025</p>
                <p>Our newest boutique welcomes customers to experience our latest designs and fabrics up close.</p>
                <a href="#" class="text-success text-decoration-none fw-bold">Read More →</a>
            </div>
        </div>

        <!-- Article 2 -->
        <div class="col-md-6">
            <div class="card p-4 border-success shadow-sm rounded-4 h-100">
                <h5 class="text-success fw-bold">Partnership with Local Designers</h5>
                <p class="text-muted small mb-2">January 2025</p>
                <p>Blouse Online proudly collaborates with talented local designers to create exclusive collections.</p>
                <a href="#" class="text-success text-decoration-none fw-bold">Read More →</a>
            </div>
        </div>

        <!-- Article 3 -->
        <div class="col-md-6">
            <div class="card p-4 border-success shadow-sm rounded-4 h-100">
                <h5 class="text-success fw-bold">Blouse Online at the Fashion Expo 2024</h5>
                <p class="text-muted small mb-2">December 2024</p>
                <p>Our brand was proudly featured at the annual Bangalore Fashion Expo, showcasing our handmade blouses.</p>
                <a href="#" class="text-success text-decoration-none fw-bold">Read More →</a>
            </div>
        </div>

        <!-- Article 4 -->
        <div class="col-md-6">
            <div class="card p-4 border-success shadow-sm rounded-4 h-100">
                <h5 class="text-success fw-bold">Blouse Online Wins "Best Online Tailor" Award</h5>
                <p class="text-muted small mb-2">October 2024</p>
                <p>We’re honored to receive this recognition for innovation and excellence in online tailoring.</p>
                <a href="#" class="text-success text-decoration-none fw-bold">Read More →</a>
            </div>
        </div>
    </div>

    <!-- Press Contact -->
    <div class="mt-5 p-4 bg-danger-subtle rounded-4 shadow-sm text-center">
        <h4 class="fw-bold text-success mb-3">Press Contact</h4>
        <p class="text-success fw-bold mb-1">Email: <a href="mailto:press@blouseonline.com" class="text-decoration-none text-success">press@blouseonline.com</a></p>
        <p class="text-success fw-bold mb-1">Phone: +33 4 91 00 00 00</p>
        <p class="text-muted small">For interviews, event invitations, or media requests, please contact our PR department.</p>
    </div>
</div>
@endsection
