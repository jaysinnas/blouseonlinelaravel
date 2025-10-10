@extends('layouts.app')

@section('title', 'Blouse On Line')

@section('content')

    <section class="bg-success-subtle">
        <!-- Image Home page - overlay text -->
        <div class="text-center my-5 p-3 position-relative">
            <img class="img-fluid custom-img border border-5 border-success rounded-4" 
                src="{{ asset('assets/images/imagescontainer/accueil_image/ardy-arjun-2k6O6XQTrJY-unsplash.jpg') }}" 
                alt="habits style">
            <div class="overlay-text position-absolute top-50 start-50 translate-middle text-white text-center fade-in">
                <h1 class="title">Trendy & stylish</h1>
                <p class="subtitle">Découvrez notre nouvelle collection</p>
                <div class="d-flex align-items-center justify-content-center">
                    <a href="https://names4brands.com" class="text-success fw-bold fs-4 text-decoration-none">
                        More infos
                    </a>
                    <hr class="flex-grow-1 border border-success ms-3">
                </div>
            </div>
        </div>

        <!-- Boutiques images -->
        <div class="boutique d-flex justify-content-center flex-wrap gap-5 my-5 p-3">
            <div>
                <a href="{{ route('index') }}">
                    <img class="shop-img" src="{{ asset('assets/images/boutique_images/dibya-bhattacharjee-BwZ5ptis1ik-unsplash.jpg') }}" alt="Bhatterjee Sarees">
                </a>
            </div>
            <div>
                <a href="{{ route('index') }}">
                    <img class="shop-img" src="{{ asset('assets/images/boutique_images/dollar-gill--B_mXm2zQDs-unsplash.jpg') }}" alt="Dollar Gill Sarees">
                </a>
            </div>
            <div>
                <a href="{{ route('index') }}">
                    <img class="shop-img" src="{{ asset('assets/images/boutique_images/suits-me-online-_MrdhhuR26Q-unsplash.jpg') }}" alt="Suits Me Online">
                </a>
            </div>
        </div>

        <!-- NEW PRODUCTS -->
        <div class="bg-danger-subtle p-5">
            <h2 class="fs-3 text-danger fw-bold mb-4 text-center">New Products</h2>
            <div class="row justify-content-center g-4">
                @foreach([
                    ['aariWork_1.jpg','Aari Work Blouse','₹5000.00 to ₹30000.00'],
                    ['bridelBlouse_1.jpg','Bridal Blouse Design','₹3000.00 to ₹24000.00'],
                    ['mother_daughter.jpg','Mother and Daughter','₹10000.00 to ₹20000.00'],
                    ['embroideryBlouse_3.jpg','Embroidery Blouse','₹4500.00 to ₹15000.00'],
                ] as $product)
                    <div class="col-md-3">
                        <a href="{{ route('tailoringboutique') }}" class="text-decoration-none text-dark">
                            <div class="card border-danger rounded-4 shadow-sm h-100">
                                <img src="{{ asset('assets/images/imagescontainer/new_products/'.$product[0]) }}" 
                                    class="card-img-top rounded-top-4" alt="{{ $product[1] }}">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-danger fw-bold">{{ $product[1] }}</h5>
                                    <p class="card-text">{{ $product[2] }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- STYLISH AND TRENDY Section -->
        <div class="trendy container w-100 mx-auto p-md-5 mt-4">
            <div class="row g-5">
                @foreach([
                    ['bag.jpg', 'Ladies Bag', 'Hurry up! 49% off', 'index', 4, 300],
                    ['hats.jpg', 'Ladies Hats', 'Black Friday Offer!', 'index', 4, 300],
                    ['shoes.jpg', 'Ladies Shoes', 'Hurry up! 65% off', 'index', 4, 300],
                    ['trend_style.jpg', 'Trendy & Stylish', 'Produce and supplies various Handicraft items all over the world', 'index', 8, 300],
                    ['new_dresses.jpg', 'New Dresses', 'Mega sale offer', 'index', 4, 300],
                ] as $card)
                    <div class="col-md-{{ $card[4] }}">
                        <a href="{{ route($card[3]) }}">
                            <div class="card border-success rounded-4 shadow-lg h-100">
                                <img src="{{ asset('assets/images/imagescontainer/trendy/'.$card[0]) }}" 
                                    class="card-img img-fluid object-fit-cover" alt="{{ $card[1] }}" style="height:{{ $card[5] }}px;">
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <h2 class="fs-5 text-danger">{{ $card[1] }}</h2>
                                    <p class="text-danger fw-bold fs-4">{{ $card[2] }}</p>
                                    <p class="fw-bold text-black">Shop now!</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- POPULAR Section -->
        <div class="bg-danger-subtle p-5 mt-5">
            <h2 class="text-center fs-2 fw-bold mb-5 text-success">POPULAR IN THIS WEEK</h2>
            <div class="row g-4">
                @foreach([
                    ['kidsDress.jpg','Babies','3050','index'],
                    ['Babies.jpg','Kids','5500','index'],
                    ['aariWorks.jpg','Aari Blouse','7000','aariblouse'],
                    ['mother_daughter.jpg','Mother & Daughter','9500','mumchild'],
                ] as $popular)
                    <div class="col-md-3">
                        <div class="card border-success rounded-4 shadow-lg h-100 position-relative overflow-hidden">
                            <a href="{{ route($popular[3]) }}">
                                <img src="{{ asset('assets/images/popular/'.$popular[0]) }}" class="card-img img-fluid object-fit-cover" alt="{{ $popular[1] }}" style="height:400px;">
                            </a>
                            <div class="popular position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-center">
                                <h4 class="fw-bold text-success">{{ $popular[1] }} <br><span>{{ $popular[2] }} RS</span></h4>
                                <a href="{{ route($popular[3]) }}" class="btn btn-sm btn-success mt-2">View all</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Subscription Form -->
        <div class="container py-4 px-5 bg-danger-subtle rounded-4 mt-5">
            <div class="row align-items-center">
                <div class="col-md-8 mb-3 mb-md-0">
                    <h4 class="fs-2 fw-bold">Subscribe to our Newsletter</h4>
                    <p class="fs-5 text-success">Subscribe today and get 15% discount coupon code</p>
                </div>
                <div class="col-md-4">
                    <form action="#">
                        <div class="input-group input-group-mb">
                            <input type="text" class="form-control py-2" placeholder="Enter your mail">
                            <button class="btn btn-success rounded" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <a id="scrollup" href="#top">
        <i class="fa fa-angle-up text-danger"></i>
    </a>

@endsection
