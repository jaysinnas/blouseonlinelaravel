<header class="bg-success-subtle">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- 🔸 Logo -->
            <a class="navbar-brand text-success fw-bold fs-2" href="{{ route('index') }}">
                BLOUSE <span class="text-danger">ONLINE</span>
            </a>

            <!-- 🔸 Bouton Burger -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- navigation links-->
            <div class="collapse navbar-collapse" id="navbarContent">
                <!-- Menu principal (centré) -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 fs-5">
                    <li class="nav-item">
                        <a class="nav-link text-success fw-bold" href="{{ route('index') }}">Home</a>
                    </li>

                    <!-- Dropdown Categories -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-success fw-bold" href="#" id="categoriesDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                            <li><a class="dropdown-item text-success fw-bold" href="{{ route('boutique') }}">Boutique</a></li>
                            <li><a class="dropdown-item text-success fw-bold" href="{{ route('tailors.women') }}">Tailors for Women</a></li>
                            <li><a class="dropdown-item text-success fw-bold" href="{{ route('tailors.men') }}">Tailors for Men</a></li>
                            <li><a class="dropdown-item text-success fw-bold" href="{{ route('materials') }}">Tailoring Materials</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-success fw-bold" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>

                <!-- Icones -right position-->
                <ul class="navbar-nav d-flex flex-row fs-4">
                    <li class="nav-item me-3">
                        <a class="nav-link text-success" href="{{ route('search') }}">
                            <i class="fas fa-search"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="{{ route('login') }}">
                            <i class="fas fa-user"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
