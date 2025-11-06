@extends('layouts.app')
@section('title', 'contact - Blouse Online')

@section('content')
<div class="row justify-content-center p-4 bg-success-subtle rounded text-success fw-bold">
            <div class="col-md-6 shop-container text-center">
                <h2 class="mb-4 mt-4 ">Most Liked Shop</h2>
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-4">
                  
                    <!-- Adresse à droite (ou en dessous sur mobile) -->
                    <div class=" border border-success rounded p-md-5" >
                        <h4 class="fs-3 ">Contact Address</h4> 
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
                </div>
            </div>
        </div> 
        @endsection