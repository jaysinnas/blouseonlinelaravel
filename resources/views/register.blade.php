@extends('layouts.app')


@section('title', 'Aari blousesBlouse On Line')

@section('content')

        
        <!--SIGNUP FORM  -->

        <div class="container my-5">
            <h1>Signup</h1>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-lg p-4">
                    <h3 class="mb-3 text-center">Create Your Account</h3>

                        <form>
                            <!-- Full Name -->
                            <div class="mb-3">
                                <label class="form-label fw-bold">Full Name</label>
                                <input type="text" class="form-control" placeholder="Enter your full name" required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label fw-bold">Email</label>
                                <input type="text" class="form-control" placeholder="Enter your email" required>
                            </div>

                            <!-- Mobile -->
                            <div class="mb-3">
                                <label class="form-label fw-bold">Mobile Number</label>
                                <input type="text" class="form-control" placeholder="Enter your mobile number" required>
                            </div>

                            <!-- Password -->
                            <div class="mb-3 position-relative">
                                <label class="form-label fw-bold">Password</label>
                                <input type="password" id="password" class="form-control" placeholder="Enter password" required>
                                <button type="button" class="btn btn-sm btn-outline-secondary position-absolute end-0 top-50 translate-middle-y me-2" onclick="togglePassword('password')">Show</button>
                            </div>

                            <!-- Repeat Password -->
                            <div class="mb-3 position-relative">
                                <label class="form-label fw-bold">Repeat Password</label>
                                <input type="password" id="repeatPassword" class="form-control" placeholder="Repeat password" required>
                                <button type="button" class="btn btn-sm btn-outline-secondary position-absolute end-0 top-50 translate-middle-y me-2" onclick="togglePassword('repeatPassword')">Show</button>
                            </div>

                            <!-- Terms -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="terms" required>
                                <label for="terms" class="form-check-label">
                                    By clicking on the "Register" button, you agree to our
                                    <a href="terms.html" class="text-decoration-none">Terms & Conditions</a>
                                </label>
                            </div>

                            <!-- Register Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>

                        <!-- Divider -->
                        <hr class="my-4">

                        <!-- Google Login -->
                        <p class="mb-2 text-center">
                            You can also
                            <a href="https://blouseonline.com" class="text-decoration-none">
                            <i class="fa-brands fa-google text-danger"></i> Login with Google
                            </a>
                        </p>

                        <!-- Redirect to Login -->
                        <p class="text-center">
                            Already have an account? 
                            <a href="login.html" class="text-decoration-none">Login Here</a>
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