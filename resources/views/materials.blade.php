@extends('layouts.app')


@section('title', 'Aari blousesBlouse On Line')

@section('content')

    <section class="materials container my-5 rounded">
        <div class="row row-cols-2 row-cols-md-4 justify-content-center g-4">
            <div class="col text-center ">
                <img src="{{ asset('assets/images/tailoring_matrials/andy-kennedy-546Ex9ITm7Q-unsplash.jpg') }}" alt="Sewing thread" class="img-fluid rounded">
                <p> Sewing thread</p>
            </div>
            <div class="col text-center">
                <img src="{{ asset('assets/images/tailoring_matrials/arawark-chen-HIrP05jnXNs-unsplash.jpg') }}" alt="Sewing studio " class="img-fluid rounded">
                <p>Sewing studio Mannequin</p>
            </div>
            <div class="col text-center">
                <img src="{{ asset('assets/images/tailoring_matrials/bozhin-karaivanov-vwUmBoT5_eA-unsplash.jpg') }}" alt="Presser foot" class="img-fluid rounded">
                <p>Presser foot</p>
            </div>
                <div class="col text-center">
                <img src="{{ asset('assets/images/tailoring_matrials/caroline-badran-YWTNP6Y5AHc-unsplash.jpg') }}" alt="Zigzag Stitch" class="img-fluid rounded">
                <p>Zigzag Stitch</p>
            </div>
                <div class="col text-center">
                <img src="{{ asset('assets/images/tailoring_matrials/emmanuel-boldo-3FUXXzpNx3o-unsplash.jpg') }}" alt="Draping" class="img-fluid rounded"> 
                <p>Draping(pinned onto a form)</p>
            </div>
            <div class="col text-center">
                <img src="{{ asset('assets/images/tailoring_matrials/faisal-qureshi-yytg385k3aU-unsplash.jpg') }}" alt="Sewing" class="img-fluid rounded">
                <p>Sewing</p>
            </div>
            <div class="col text-center">
                <img src="{{ asset('assets/images/tailoring_matrials/gabriel-5AzWcVjFrJY-unsplash.jpg') }}" alt="Crafting" class="img-fluid rounded">
                <p>Crafting or Cutting</p>
            </div>
            <div class="col text-center">
                <img src="{{ asset('assets/images/tailoring_matrials/merve-sehirli-nasir-sFubXOglx7g-unsplash.jpg') }}" alt="Buttons" class="img-fluid rounded">
                <p>Buttons</p>
            </div>
            <div class="col text-center">
                <img src="{{ asset('assets/images/tailoring_matrials/studio-crevettes-L80cC_5nAFI-unsplash.jpg') }}" alt="Measuring tape" class="img-fluid rounded">
                <p>Measuring tape</p>
            </div>
            <div class="col text-center">
                <img src="{{ asset('assets/images/tailoring_matrials/trac-vu-9VL-H0nnRm0-unsplash.jpg') }}" alt="Sewing machine" class="img-fluid rounded">
                <p>Sewing machine</p>
            </div>
            <div class="col text-center">
                <img src="{{ asset('assets/images/tailoring_matrials/varun-gaba-7lqa1OcJV9I-unsplash.jpg') }}" alt="Mannequin"  class="img-fluid rounded">
                <p> Mannequin</p>
            </div>
            <div class="col text-center">
                <img src="{{ asset('assets/images/tailoring_matrials/victor-volkov-jIyzx1YSH5g-unsplash.jpg') }}" alt="Textile" class="img-fluid rounded">
                <p>Textile thread</p>
            </div>
        </div>

    </section>
 
   

    <!-- Ajouter icon angle up -->
    <a id="scrollup" href="#top">
        <i class="fa fa-angle-up text-danger"></i>
    </a>
    
@endsection