@extends('layouts.app')


@section('title', 'Aari blousesBlouse On Line')

@section('content')

    <section class="container my-5 p-5 bg-danger-subtle rounded shadow-lg">
    
            <h2 class="text-center text-success fs-1 mb-5" style="font-family:Oleo Script, system-ui; ">Aari Blouses Modeles</h2>
            <div class="d-flex justify-content-center gap-3">
                <div>
                    <img src="{{ asset('assets/images/imagescontainer/Aari_blouses/bulbul-ahmed-snzEA5rDOWs-unsplash.jpg') }}" alt="Golden Aari Blouse"   class="img-fluid me-5 mb-4 rounded" style="width: 400px; height: auto;" >
                </div>
                <div>
                    <img src="{{ asset('assets/images/imagescontainer/Aari_blouses/ikshana-productions-T-VtubWVnZg-unsplash.jpg') }}" alt="Meroon Aari blouse"   class="img-fluid me-5 mb-4 rounded" style="width: 400px; height: auto;"> 
                </div>
                <div>
                    <img src="{{ asset('assets/images/imagescontainer/Aari_blouses/ikshana-productions-WwjqSo1so4g-unsplash.jpg') }}" alt="Merron Aari back"   class="img-fluid me-5 rounded mb-4" style="width: 400px; height: auto;">
                </div>
                <div>
                    <img src="{{ asset('assets/images/imagescontainer/Aari_blouses/ritish-reeek-pK1RTYrGrQc-unsplash.jpg') }}" alt="Green and Red blouse"   class="img-fluid me-5 rounded mb-4" style="width: 400px; height: auto;">
                </div>
            </div>
        
    </section>

    <!-- Ajouter icon angle up -->
    <a id="scrollup" href="#top">
        <i class="fa fa-angle-up text-danger"></i>
    </a>
    



@endsection