@extends('layouts.app')


@section('title', 'Aari blousesBlouse On Line')

@section('content')

    <section class="container my-5">
        <div class=" pt-2 mb-3 bg-danger-subtle rounded " >
            <div class="row g-5 mt-4 mx-auto">
                <h2 class="text-center text-success fw-bold">Enquiry Form</h2>
                <!-- Contact Form -->
                <div class="col-12 col-md-5 p-4 mx-auto mb-5 border border-danger rounded shadow-sm text-success fw-bold">
                    <p class=" text-success fw-bold">Feel free to contact us</p>
                    
                    <form id="contactForm">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">Email</label>
                            <input type="text" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Mobile</label>
                            <input type="text" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="4" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-success w-25 align-items-center">Submit</button>
                    </form>

                    <!-- Message success -->
                    <div id="successMessage" class="alert alert-success mt-3 d-none text-success fw-bold">
                        Enquiry submitted successfully ✅
                    </div>
                </div>

                <!-- Contact Details -->
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4">
                    <div class="text-start text">
                        <h3 class="text-success">Contact Details</h3>
                        <p>
                            <a href="https://wa.me/919383439098" target="_blank" class="text-decoration-none text-success fw-bold">
                                <i class="fa-brands fa-whatsapp"></i> +91 93 83 43 90 98
                            </a>
                        </p>
                        <p>
                            <a href="https://wa.me/919383439098" target="_blank" class="text-decoration-none text-success fw-bold">
                                <i class="fa-solid fa-fax"></i> 919383439098
                            </a>
                        </p>
                        <p>
                            <a href="mailto:webgathindia@gmail.com" class="text-decoration-none text-success fw-bold">
                                <i class="fa-solid fa-envelope "></i> webgathindia@gmail.com
                            </a>
                        </p>
                        <p>
                            <a href="mailto:info@webgath.com" class="text-decoration-none text-success fw-bold">
                                <i class="fa-solid fa-envelope "></i> info@webgath.com
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Ajouter icon angle up -->
    <a id="scrollup" href="#top">
        <i class="fa fa-angle-up text-danger"></i>
    </a>


@endsection