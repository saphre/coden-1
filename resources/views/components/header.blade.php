<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            {{-- <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i> --}}
            <i class="d-flex align-items-center">RECEPISSE  054/RDA/D04.01/SAAJP</i>

        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        {{-- <h1 class="logo"><a href="{{ route('home') }}"><span>.</span></a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ route('home') }}" class="logo"><img src="assets/img/logo.jpg" alt="CODEN Logo"></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link  {{ Route::currentRouteName() == 'home' ? 'active' :''}}" href="{{ route('home') }}">Accueil</a></li>
                <li><a class="nav-link {{ Route::currentRouteName() == 'about' ? 'active' :''}} " href="{{ route('about') }}">A propos</a></li>
                <li><a class="nav-link {{ Route::currentRouteName() == 'activities' ? 'active' :''}}" href="{{ route('activities') }}">Activités</a></li>
                <li><a class="nav-link {{ Route::currentRouteName() == 'realisations' ? 'active' :''}} " href="{{ route('realisations') }}">Réalisations</a></li>
                <li class="dropdown">
                    <a href="{{ route('sites') }}" class="{{ Route::currentRouteName() == 'sites' ? 'active' :''}} ">
                        <span>Sites Touristiques</span> <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li><a href="#">Centre Culturel de Ndjola</a></li>
                        <li><a href="#">Musée de Ndjola</a></li>
                    </ul>
                </li>
                <li><a class="nav-link {{ Route::currentRouteName() == 'news' ? 'active' :''}}" href="{{ route('news') }}">Actualités</a></li>
                <li><a class="nav-link {{ Route::currentRouteName() == 'contactus' ? 'active' :''}}" href="{{ route('contactus') }}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

    </div>
</header>
<!-- End Header -->
