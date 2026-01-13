@extends('layouts.app')


@section('title', 'Aari blouses Contact Us')

@section('content')

    <section class="container my-5 p-4 bg-light rounded-4 shadow-sm">
        <div class="row g-5" >
            <!-- <div class="row g-5 mt-4 mx-auto"> -->
                <!-- <h2 class="text-center text-success fw-bold mb-4">Enquiry Form</h2> -->
                <!-- Contact Form -->
                <div class="col-12 col-md-5 p-4 mx-auto mb-5 border border-danger-subtle rounded shadow-sm text-success fw-bold">
                    <h2 class="text-center text-success fw-bold mb-4">Enquiry Form</h2>
                    <p class=" text-success fw-bold mb-4 ">Feel free to contact us</p>
                    
                    <form id="contactForm">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Full Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email</label>
                            <input type="text" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Mobile</label>
                            <input type="text" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Subject</label>
                            <input type="text" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Message</label>
                            <textarea class="form-control" rows="4" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-success w-25">Submit</button>
                    </form>

                    <!-- Message success -->
                    <div id="successMessage" class="alert alert-success mt-3 d-none text-success text-center fw-bold">
                        Enquiry submitted successfully ✅
                    </div>
                </div>

                <!-- Contact Details -->
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4">
                    <div class="text-start">
                        <h3 class="text-success mb-3">Contact Details</h3>
                        <p>
                            <a href="https://wa.me/919383439098" target="_blank" class="text-decoration-none text-success fw-bold">
                                <i class="fa-brands fa-whatsapp me-2"></i> +91 93 83 43 90 98
                            </a>
                        </p>
                        <p>
                            <a href="https://wa.me/919383439098" target="_blank" class="text-decoration-none text-success fw-bold">
                                <i class="fa-solid fa-fax me-2"></i> 919383439098
                            </a>
                        </p>
                        <p>
                            <a href="mailto:webgathindia@gmail.com" class="text-decoration-none text-success fw-bold">
                                <i class="fa-solid fa-envelope me-2"></i> webgathindia@gmail.com
                            </a>
                        </p>
                        <p>
                            <a href="mailto:info@webgath.com" class="text-decoration-none text-success fw-bold">
                                <i class="fa-solid fa-envelope me-2"></i> info@webgath.com
                            </a>
                        </p>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </section>
    

    <!-- Ajouter icon angle up -->
    <a id="scrollup" href="#top">
        <i class="fa fa-angle-up text-danger"></i>
    </a>

@endsection