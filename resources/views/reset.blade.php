@extends('layouts.app')


@section('title', 'Aari blousesBlouse On Line')

@section('content')

    
    <!-- Forget password title  -->
    <div class="container my-5 ">
        <h4 class="text-center fw_bold fs-3">Forgot Password</h4>
        <!-- Main Section -->
        <div class=" my-5 ">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-lg p-4 bg-danger-subtle rounded-4 shadow-sm">
                        <h4 class="mb-3 text-center text-success fw_bold">Reset Your Password</h4>
                        <p class="text-muted text-center text-success fw-bold">
                            Enter the registered <strong class="text-success fw-bold">Email ID</strong> of your OrderOnline Account.<br>
                            The new password will be sent to your registered Email ID.
                        </p>

                        <form id="resetForm">
                            <div class="mb-3">
                            <label for="resetEmail" class="form-label fw-bold text-success fw-bold">Email</label>
                            <input type="text" id="resetEmail" class="form-control" placeholder="Enter your registered email" required>
                            </div>

                            <div class="d-grid">
                            <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>

                    <!-- Success Message -->
                        <div id="resetSuccess" class="alert alert-success mt-3 d-none text-success fw-bold">
                            ✅ A new password has been sent to your registered Email ID.
                        </div>

                        <div class="text-center mt-3">
                            <a href="{{ route('index') }}" class="text-decoration-none text-success fw-bold">&larr; Back To Home Page</a>
                        </div>
                    </div>
                </div>
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