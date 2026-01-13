@extends('layouts.app')


@section('title', 'Aari blouses | Tailoring boutique')

@section('content')

    <section class="container my-5">
        <!-- page heading -->
        <h1 class="text-center text-danger mb-5">Tailoring Boutique</h1>
        
        <!-- service section -->
        <div class="row p-4 g-5 mt-3 bg-success-subtle border border-danger rounded shadow-sm">
           
            <!-- Left:image  side -->
            <div class="col-md-4">
                <div class="mb-3">
                    <img src="{{ asset('assets/images/imagescontainer/tailor_shop/raj-adhikari-XcsFNBAeb9k-unsplash.jpg') }}" alt="Tailoring shop"
                         class="img-fluid rounded border border-3 border-danger shadow-sm">
                </div>
            </div>


            <!-- Right services table -->
            <div class="col-md-8">
                <h4 class="mb-3 text-success fw-bold">Our Services</h4>
                
                <div class="table-responsive">
                <table class="table table-bordered border-danger table-striped align-middle mt-4">
                    <thead class="table-success border-danger">
                        <tr>
                            <th>Service</th>
                            <th>Duration</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Embroidery Blouse</td>
                            <td>5 days</td>
                            <td>1,500 Rs</td>
                        </tr>
                        <tr>
                            <td>Mother & Daughter Dresses</td>
                            <td>2 days</td>
                            <td>30,000 Rs</td>
                        </tr>
                        <tr>
                            <td>Bridal Blouse Design</td>
                            <td>5 days</td>
                            <td>15,000 Rs</td>
                        </tr>
                        <tr>
                            <td>Aari Work Blouse</td>
                            <td>3 days</td>
                            <td>20,000 Rs</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- comments section -->
        <div class="mt-5 p-4 rounded shadow-sm border border-danger border-rounded">
            <h4 class="text-center text-success">COMMENTS</h4>

             <!-- Message de succès Laravel -->
            @if(session('success'))
                <div class="alert alert-success mt-3 text-center">
                    {{ session('success') }}
                </div>
            @endif


            <form action="{{ route('comments.store') }}" method="POST" class="mt-3" id="contactForm">
                 @csrf
                <h5 class="text-center text-success fw-bold">Write your comment</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control" required />
                    </div>
                    <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control"  required/>
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <label for="comment" class="form-label">Comment</label>
                    <textarea name="comment" id="comment" class="form-control" rows="3" required></textarea>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success text-white">submit</button>
                </div>
            </form>
            <!-- confirmation message -->
            <p id="confirmationMessage" class="mt-3 text-success fw-bold" style="display: none;">
                Your comment has been submitted successfully. It will be published after admin approval.
            </p>
        </div>
    </section>
  
   <!-- Ajouter icon angle up -->
    <a id="scrollup" href="#top" class="position-fixed bottom-3 end-3 fs-3 text-primary">
        <i class="fa fa-angle-up text-danger"></i>
    </a>
  
@endsection