@extends('layouts.app')


@section('title', 'Aari blousesBlouse On Line')

@section('content')

    <section class="container my-4 ">
        <div class="row justify-content-center mb-5 mt-5 bg-success-subtle rounded">
            <div class="col-md-4 d-flex flex-column gap-4 mt-4 mb-4">
                <a href="index.html"><img class="shop-img" src="{{ asset('assets/images/boutique_images/dibya-bhattacharjee-BwZ5ptis1ik-unsplash.jpg') }}" alt="bhaterjee Sarees"></a>
                <a href="index.html"><img class="shop-img" src="assets/images/boutique_images/dollar-gill--B_mXm2zQDs-unsplash.jpg" alt="Dollar Gill Sarees"></a>
                <a href="index.html"><img class="shop-img" src="assets/images/boutique_images/suits-me-online-_MrdhhuR26Q-unsplash.jpg" alt="Suits Me Online"></a>
            </div>
        </div>

        <!-- TAILOR SHOP : en dessous de Boutique -->
        <div class="row justify-content-center p-4 bg-success-subtle rounded">
            <div class="col-md-6 shop-container text-center">
                <h2 class="mb-4 mt-4 ">Most Liked Shop</h2>
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-4">
                    <!-- Image à gauche (ou en haut sur mobile) -->
                    <div class="tailor_Shop">
                        <img src="{{ asset('assets/images/imagescontainer/tailor_shop/raj-adhikari-XcsFNBAeb9k-unsplash.jpg') }}" alt="Tailoring shop"
                        class="img-fluid rounded border border-3 border-danger " style="max-width:400px; ">
                    </div>
                    <!-- Adresse à droite (ou en dessous sur mobile) -->
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
                <div class="d-flex justify-content-center gap-5 mt-4 flex-wrap">
                    <a href="tel:09962544411" class="btn btn-outline-danger"><i class="fa fa-phone"></i> 09962544411</a>
                    <a href="https://wa.me/6589310969" class="btn btn-outline-success"><i class="fa fa-whatsapp"></i> 6589310969</a>
                    <a href="tailoring_Boutique.html"><button type="button" class="btn btn-primary">Visit Store</button></a>
                </div>
            </div>
        </div> 
    </section>

    
     <!-- Ajouter icon angle up -->
    <a id="scrollup" href="#top">
        <i class="fa fa-angle-up text-danger"></i>
    </a>
    

@endsection