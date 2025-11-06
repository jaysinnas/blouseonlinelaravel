@extends('layouts.app')


@section('title', 'Aari blousesBlouse On Line')

@section('content')


        <!-- login form -->
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4 rounded-4" style="max-width: 400px; width: 100%;">
        
        <!-- Title -->
        <h3 class="text-center mb-3 fw-bold">Login</h3>

            <!-- Form -->
            <form action="login.php" method="post">
                <!-- Email / Mobile -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Email / Mobile Number</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter your email or mobile" required>
                </div>

                <!-- Password -->
                <div class="mb-3 position-relative">
                    <label class="form-label fw-bold">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                    <small class="text-primary mt-1 d-block" style="cursor:pointer;" onclick="togglePassword()">👁 Show</small>
                </div>

                <!-- Login Button -->
                <button type="submit" class="btn btn-success w-100 mb-3">Login</button>

                <!-- Forgot Password -->
                <p class="text-center mb-0">
                    Forgot your password? <a href="{{ route('reset') }}" class="text-decoration-none">Reset Here</a>
                </p>
            </form>

            <!-- Divider -->
            <hr class="my-4">

            <!-- Extra Options -->
            <div class="text-center">
                <p class="mb-1">You can also 
                    <a href="https://blouseonline.com" class="text-decoration-none">
                        <i class="fa-brands fa-google text-danger"></i> Login with Google
                    </a>
                </p>
                <p class="mb-0">Don't have any account? 
                    <a href="{{ route('register') }}" class="text-decoration-none fw-bold">Register Here</a>
                </p>
            </div>
        </div>
    </div>
  


       <!-- Modal Invalid Email -->
    <div class="modal fade" id="invalidEmailModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">Error</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Invalid email. Please try again.
                </div>
            </div>
        </div>
    </div>

  
        <!-- Ajouter icon angle up -->
        <a id="scrollup" href="#top">
            <i class="fa fa-angle-up text-danger"></i>
        </a>

@endsection