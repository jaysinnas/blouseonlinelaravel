@extends('layouts.app')


@section('title', 'Aari blousesBlouse On Line')

@section('content')

        <!-- ADD Mother and children sectio  -->

        <!-- Footer sections -->
        <footer class="bg-dark-subtle text-success py-5 mt-5">
            <div class="container">
                <div class="row">
                    <!-- LOGO + Description -->
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('index') }}">
                            <img src="assets/logo/logoblouse_2.png" alt="Logo" class="mb-3">
                        </a>
                        <p class="small fw-bold">
                            Sriyogavaraha is an organization engaged in marketing of various types 
                            of pooja products such as ornamentals, wearable items like bracelets 
                            and maalais, pooja items like...
                        </p>
                        <a href="{{ route('about') }}" class="text-dark fw-bold text-decoration-none">Read More...</a>
                    </div>

                    <!-- COMPANY -->
                    <div class="col-md-2 mb-4">
                        <h5 class="fw-bold">Company</h5>
                        <ul class="list-unstyled small">
                            <li><a href="{{ route('about') }}" class="text-success text-decoration-none">About Us</a></li>
                            <li><a href="{{ route('jobs') }}" class="text-success text-decoration-none">Jobs</a></li>
                            <li><a href="{{ route('press') }}" class="text-success text-decoration-none">Press</a></li>
                            <li><a href="{{ route('contact') }}" class="text-success text-decoration-none">Contact</a></li>
                        </ul>
                    </div>

                    <!-- COMMUNITY -->
                    <div class="col-md-2 mb-4">
                        <h5 class="fw-bold">Community</h5>
                        <ul class="list-unstyled small fw-bold">
                            <li><a href="{{ route('about')}}" class="text-success text-decoration-none">About Us</a></li>
                        </ul>
                    </div>

                    <!-- LEGAL -->
                    <div class="col-md-2 mb-4">
                        <h5 class="fw-bold">Legal</h5>
                        <ul class="list-unstyled small fw-bold">
                            <li><a href="{{ route('privacy') }}" class="text-success text-decoration-none">Privacy Policy</a></li>
                            <li><a href="{{ route('refund') }}" class="text-success text-decoration-none">Refund Policy</a></li>
                            <li><a href="{{ route('terms') }}" class="text-success text-decoration-none">Terms & Conditions</a></li>
                            <li><a href="{{ route('disclaimer') }}" class="text-success text-decoration-none">Disclaimer</a></li>
                        </ul>
                    </div>

                    <!-- CONTACT US -->
                    <div class="col-md-2 mb-4">
                        <h5 class="fw-bold">Contact Us</h5>
                        <p class="small mb-1 text-success fw-bold">sales@blouseonline.com</p>
                    </div>
                </div>
                <hr class="border-dark">
                <div class="container p-3">
                    <div class="row align-items-center text-center text-md-start">
                            
                        <!-- Réseaux sociaux -->
                        <div class="col-md-4 mb-3 mb-md-0">
                            <a href="https://www.facebook.com/" class="me-2"><i class="fa-brands fa-square-facebook fa-2x text-dark"></i></a>
                            <a href="https://x.com/" class="me-2"><i class="fa-brands fa-square-x-twitter fa-2x text-dark"></i></a>
                            <a href="https://www.linkedin.com/" class="me-2"><i class="fa-brands fa-linkedin fa-2x text-dark"></i></a>
                            <a href="https://www.instagram.com/?hl=en"><i class="fa-brands fa-square-instagram fa-2x text-dark"></i></a>
                        </div> 

                        <!-- Copyright -->
                        <div class="col-md-4 mb-3 mb-md-0 text-center">
                            <a href="{{ route('index') }}" class="text-decoration-none">
                                <small class="fw-bold text-success text-decoration-none">&copy; 2025 blouseonline. All Rights Reserved.</small>
                            </a>
                        </div> 

                        <!-- Icônes cartes de paiement -->
                        <div class="col-md-4 text-md-end text-center text-dark">
                            <i class="fab fa-cc-visa fa-2x me-2"></i>
                            <i class="fab fa-cc-mastercard fa-2x me-2"></i>
                            <i class="fab fa-cc-amex fa-2x me-2"></i>
                            <i class="fab fa-cc-paypal fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Ajouter icon angle up -->
        <a id="scrollup" href="#top">
            <i class="fa fa-angle-up text-danger"></i>
        </a>
@endsection