<header class="sticky-top bg-white border-bottom border-light shadow-sm" style="z-index: 1030;">
    <nav class="navbar navbar-expand-lg py-3">
        <div class="container">
            
            
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <span class="font-oswald display-6 fw-bold text-dark text-uppercase tracking-wider m-0" style="letter-spacing: 1.5px;">SPORTIFY</span>
            </a>

            
            <button class="navbar-toggler border-0 shadow-none rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSportify" aria-controls="navbarSportify" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            
            <div class="collapse navbar-collapse" id="navbarSportify">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-lg-4 font-oswald fw-bold text-uppercase" style="font-size: 0.95rem; letter-spacing: 0.08em;">
                    
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('home') ? 'text-dark active border-bottom border-2 border-dark' : 'text-black-50 hover-text-dark' }} transition-colors px-1" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('about') ? 'text-dark active border-bottom border-2 border-dark' : 'text-black-50 hover-text-dark' }} transition-colors px-1" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('regulations') ? 'text-dark active border-bottom border-2 border-dark' : 'text-black-50 hover-text-dark' }} transition-colors px-1" href="{{ route('regulations') }}">Regulations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('sport') ? 'text-dark active border-bottom border-2 border-dark' : 'text-black-50 hover-text-dark' }} transition-colors px-1" href="{{ route('sport') }}">Sport</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('profile') ? 'text-dark active border-bottom border-2 border-dark' : 'text-black-50 hover-text-dark' }} transition-colors px-1" href="{{ route('profile') }}">Profile</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>
</header>