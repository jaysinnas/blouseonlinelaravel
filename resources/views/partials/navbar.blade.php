<!-- barre de navigation -->
    <header class="mx-auto bg-success-subtle">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid d-flex justify-content-between align-items-center">
            
                <!-- Logo  -->
                <a class="navbar-brand text-success-subtle fw-bold fs-2 ms-2" href="{{ route('index') }}">
                    BLOUSE <span class="text-danger">ONLINE</span>
                </a>

                <!-- Menu center -->
                
                <ul class="navbar-nav mx-auto gap-4 fs-3">
                    <li class="nav-item">
                        <a class="nav-link active text-success fs-2 fw-bold" aria-current="page" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-success fs-2 fw-bold" id="dropdownMenuLink" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categories</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink ">
                        <li><a class="dropdown-item text-success fs-4 fw-bold" href="{{ route('boutique') }}">Boutique</a></li>
                        <li><a class="dropdown-item text-success fs-4 fw-bold" href="{{ route('tailors.women') }}">Tailors for Women</a></li>
                        <li><a class="dropdown-item text-success fs-4 fw-bold" href="{{ route('tailors.men') }}">Tailors for Men</a></li>
                        <li><a class="dropdown-item text-success fs-4 fw-bold" href="{{ route('materials') }}">Tailoring Materials</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success fs-2 fw-bold" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>

                <!-- Icônes alignées à droite -->
                <ul class="navbar-nav d-flex flex-row g-3 fs-3 me-5">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('search') }}"><i class="fas fa-search"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-user"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>