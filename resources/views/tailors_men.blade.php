@extends('layouts.app')


@section('title', 'Aari blousesBlouse On Line')

@section('content')

    <section class="container my-5 p-5 bg-danger-subtle rounded shadow-lg">
        <h2 class="text-center text-success fs-1 mb-5" style="font-family:Oleo Script, system-ui; ">Men Tailors</h2>
        <div class="row g-4">
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('assets/images/mentailor/men_tailor_1.jpg') }}" alt="Golden Aari Blouse"   class="img-fluid shadow-sm gallery-img rounded">
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('assets/images/mentailor/men_tailor_2.jpg') }}" alt="Meroon Aari blouse"   class="img-fluid shadow-sm gallery-img rounded">
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('assets/images/mentailor/men_tailor_3.jpg') }}" alt="Merron Aari back"   class="img-fluid shadow-sm gallery-img rounded">
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('assets/images/mentailor/men_tailor_4.jpg') }}" alt="men dress"   class="img-fluid shadow-sm gallery-img rounded">
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('assets/images/mentailor/men_kurta_5.jpg') }}" alt="kurta dress"   class="img-fluid shadow-sm gallery-img rounded">
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('assets/images/mentailor/men_tailor_6.jpg') }}" alt="men dresses"   class="img-fluid shadow-sm gallery-img rounded">
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('assets/images/mentailor/men-shrit_7.jpg') }}" alt="men shirt"   class="img-fluid shadow-sm gallery-img rounded">
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('assets/images/mentailor/men_vest_8.jpg')}}" alt="men vest"   class="img-fluid shadow-sm gallery-img rounded">
            </div>
        </div>
    </section>
    <section>
        <!-- TAILOR SHOP : Boutique section-->
        <div class="row justify-content-center bg-success-subtle p-5">
            <div class="col-md-8 shop-container text-center">
                <h2 class="mb-4 mt-4 text-success">Most Liked Shop</h2>
                <!-- flex container: image on the left address on the right -->
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-5">
                    <div class="tailor_Shop">
                        <img src="{{ asset('assets/images/imagescontainer/tailor_shop/raj-adhikari-XcsFNBAeb9k-unsplash.jpg') }}" alt="Tailoring shop"
                        class="img-fluid rounded border border-3 border-danger" style="max-width:500px;">
                    </div>
                    <!-- Contact address-->
                    <div class=" border border-danger rounded p-md-5" >
                        <h4 class="fs-3 fw-bold">Contact Address</h4> 
                        <p>Door no : 7</p>
                        <p>Duraisamy road, near Sivan kovil, above Bank ATM</p>
                        <p>Vadapalani</p>
                        <p>Chennai</p>
                        <p>TamilNadu - 600026</p>
                    </div>
                </div>
                <h3 class="mt-4 text-danger">Fabloon Boutique & Tailoring Shop Chennai</h3>

                <!-- Boutons horizontaux -->
                <div class="d-flex justify-content-center gap-3 mt-4 flex-wrap">
                    <a href="tel:09962544411" class="btn btn-outline-danger"><i class="fa fa-phone"></i> 09962544411</a>
                    <a href="https://wa.me/6589310969" class="btn btn-outline-success"><i class="fa fa-whatsapp"></i> 6589310969</a>
                    <a href="{{ route('index') }}"><button type="button" class="btn btn-primary">Visit Store</button></a>
                </div>
            </div>
        </div> 
    </section>


    <!-- Ajouter icon angle up -->
    <a id="scrollup" href="#top">
        <i class="fa fa-angle-up text-danger"></i>
    </a>
  
 @endsection