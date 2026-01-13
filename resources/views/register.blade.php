@extends('layouts.app')


@section('title', 'Aari blousesBlouse On Line')

@section('content')

        <!--SIGNUP FORM  -->
        <div class="container my-5 bg-success-subtle rounded-4">
            <h1 class="text-center text-success mb-4 mt-4" >Signup</h1>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-lg p-6 text-success mb-4" style="background:#bbdaa4">
                        <h3 class="mb-3 text-center mt-4">Create Your Account</h3>

                            <form class="p-3">
                                <!-- Full Name -->
                                <div class="mb-3 col-md-8 col-lg-8 mx-auto">
                                    <label class="form-label fw-bold">Full Name</label>
                                    <input type="text" class="form-control text-success " placeholder="Enter your full name" required>
                                </div>

                                <!-- Email -->
                              <div class="mb-3 col-md-8 col-lg-8 mx-auto">
                                    <label class="form-label fw-bold">Email</label>
                                    <input type="text" class="form-control text-success" placeholder="Enter your email" required>
                                </div>

                                <!-- Mobile -->
                               <div class="mb-3 col-md-8 col-lg-8 mx-auto">
                                    <label class="form-label fw-bold">Mobile Number</label>
                                    <input type="text" class="form-control text-success" placeholder="Enter your mobile number" required>
                                </div>

                                <!-- Password -->
                                <div class="mb-3 col-md-8 col-lg-8 mx-auto position-relative">
                                    <label class="form-label fw-bold">Password</label>
                                    <div class="position-relative">
                                        <input type="password" id="password" class="form-control text-success" placeholder="Enter password" required>
                                        <button type="button" class="btn btn-sm btn-outline-secondary position-absolute end-0 top-50 translate-middle-y me-2" onclick="togglePassword('password')">Show</button>
                                    </div>
                                </div>

                                <!-- Repeat Password -->
                                <div class="mb-3 col-md-8 col-lg-8 mx-auto position-relative">
                                    <label class="form-label fw-bold">Repeat Password</label>
                                    <div class="position-relative">
                                        <input type="password" id="repeatPassword" class="form-control text-success" placeholder="Repeat password" required>
                                        <button type="button" class="btn btn-sm btn-outline-secondary position-absolute end-0 top-50 translate-middle-y me-2" onclick="togglePassword('repeatPassword')">Show</button>
                                    </div>
                                </div>

                                <!-- Terms -->
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input text-success" id="terms" required>
                                    <label for="terms" class="form-check-label">
                                        By clicking on the "Register" button, you agree to our
                                        <a href="{{ route('legal.terms') }}" class="text-decoration-none text-success fw-bold">Terms & Conditions</a>
                                    </label>
                                </div>

                                <!-- Register Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success fw-bold">Register</button>
                                </div>
                            </form>

                            <!-- Divider -->
                            <hr class="my-4">

                            <!-- Google Login -->
                            <p class="mb-2 text-center">
                                You can also
                                <a href="https://blouseonline.com" class="text-decoration-none text-success fw-bold">
                                <i class="fa-brands fa-google text-danger"></i> Login with Google
                                </a>
                            </p>

                            <!-- Redirect to Login -->
                            <p class="text-center">
                                Already have an account? 
                                <a href="{{ route('login') }}" class="text-decoration-none text-success fw-bold">Login Here</a>
                            </p>
                    </div>
                </div>
            </div>
        </div>

       <!-- Ajouter icon angle up -->
        <a id="scrollup" href="#top">
            <i class="fa fa-angle-up text-danger"></i>
        </a>
            
@endsection