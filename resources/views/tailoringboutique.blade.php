@extends('layouts.app')


@section('title', 'Aari blouses | Tailoring boutique')

@section('content')
    <section class="container my-5">
        <h1 class="text-center text-success mb-auto">Tailoring Boutique</h1>
        <div class="row p-4 g-5 bg-success-subtle rounded">
           
            <!-- partie gauche -->
            <div class="col-md-4">
                <div class="mb-3">
                    <img src="{{ asset('assets/images/imagescontainer/tailor_shop/raj-adhikari-XcsFNBAeb9k-unsplash.jpg') }}" alt="Tailoring shop"
                         class="img-fluid rounded border border-3 border-danger">
                </div>
            </div>
            <div class="col-md-6">
                <h5 class="mb-2 mt-5">Our services</h5>
                <div class="row fw-bold border-bottom pb-2 mb-2">
                    <div class="col">Service</div>
                    <div class="col">Duration</div>
                    <div class="col">Amount</div>
                </div>
                <div class="row border-bottom py-2">
                    <div class="col">Embroidery Blouse</div>
                    <div class="col">5 days</div>
                    <div class="col">1,500Rs</div>
                </div>
                <div class="row border-bottom py-2">
                    <div class="col">Mother & Daughter Dresses</div>
                    <div class="col">2 days</div>
                    <div class="col">30,000 Rs</div>
                </div>
                <div class="row border-bottom py-2">
                    <div class="col">Bridal Blouse design</div>
                    <div class="col">5 days</div>
                    <div class="col">15,000</div>
                </div>
                <div class="row border-bottom py-2">
                    <div class="col">Aari Work Blouse</div>
                    <div class="col">3 days</div>
                    <div class="col">20,000</div>
                </div>
            </div> 
        </div>

        <!-- comments section -->
        <div class="mt-5 bg-success-subtle rounded">
            <h4 class="text-center">Comments</h4>

            {{-- Message de succès --}}
            @if(session('success'))
                <div class="alert alert-success mt-3 text-center">
                    {{ session('success') }}
                </div>
            @endif

            <!-- <div class="mt-5 bg-success-subtle rounded">
            <h4 class="text-center">Comments</h4> -->
            <form action="{{ route('comments.store') }}" method="POST" class="mt-4 p-5" id="contactForm">
                 @csrf
                <h5 class="text-center mb-5">Write your comment</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control"  required/>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label">Comment</label>
                    <textarea name="comment" id="comment" class="form-control" rows="3" required></textarea>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success text-white">submit</button>
                </div>
            </form>
            <!-- confirmation message -->
            <!-- <p id="confirmationMessage" class="mt-3 text-success fw-bold" style="display: none;">
                Your comment has been submitted successfully. It will be published after admin approval.
            </p> -->
        </div>
</section>
  
   
    <!-- Ajouter icon angle up -->
    <a id="scrollup" href="#top">
        <i class="fa fa-angle-up text-danger"></i>
    </a>

   
@endsection