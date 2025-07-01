<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ "HOME-FINDER" }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column min-vh-100">
    <div id="app" class="flex-grow-1 d-flex flex-column">

        <!-- HEADER / NAVBAR -->
        <nav class="navbar navbar-expand-md navbar-dark sticky-top"
            style="background-color: #3B67EC; box-shadow: 0 4px 10px rgba(255, 255, 255, 0.7); z-index: 1030;">
            <div class="container d-flex flex-wrap justify-content-between align-items-center gap-2">

                <!-- LOGO -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo-homefinder.jpg') }}" alt="Logo HomeFinder" style="height: 60px; max-width: 100%; object-fit: contain;">
                </a>

                <!-- SELECTOR DE IDIOMA -->
                <form method="POST" action="{{ route('language.change') }}" class="d-flex align-items-center gap-2">
                    @csrf
                    <i class="bi bi-globe text-white"></i>
                    <select name="locale" onchange="this.form.submit()" class="form-select form-select-sm w-auto text-center"
                        style="
            font-weight: bold;
            @if(app()->getLocale() === 'es')
                background-image: linear-gradient(to bottom, red 33%, yellow 33% 66%, red 66%);
                color: black;
            @else
                background-color: white;
                color: black;
            @endif">
                        <option value="es" {{ app()->getLocale() === 'es' ? 'selected' : '' }}>ES</option>
                        <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>EN 🇬🇧</option>
                    </select>
                </form>

                <!-- BOTÓN HAMBURGUESA -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- MENÚ -->
                <div class="collapse navbar-collapse mt-3 mt-md-0" id="mainNavbar">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/') }}">{{ __('app.home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('inmuebles') }}">{{ __('app.properties') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('nosotros') }}">{{ __('app.about') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('contacto') }}">{{ __('app.contact') }}</a>
                        </li>
                    </ul>

                    <!-- LOGIN / REGISTER -->
                    <div class="d-flex flex-column flex-md-row align-items-center gap-1">
                        @guest
                        @if (Route::has('login'))
                        <a class="btn btn-auth btn-login" href="{{ route('login') }}">{{ __('auth.login') }}</a>
                        @endif
                        @if (Route::has('register'))
                        <a class="btn btn-auth btn-signin" href="{{ route('register') }}">{{ __('auth.register') }}</a>
                        @endif
                        @else
                        <a class="btn btn-outline-light" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('auth.logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>

        <!-- CONTENIDO -->
        <main class="flex-grow-1">
            @yield('content')
        </main>

        <!-- FOOTER -->
        <footer class="text-white py-4" style="background-color: #3B67EC;">
            <div class="container">
                <div class="row gy-4 flex-wrap text-center text-md-start d-flex justify-content-between align-items-center">

                    <!-- Logo y Marca -->
                    <div class="col-12 col-md-3 d-flex flex-column align-items-center align-items-md-start gap-2">
                        <a href="{{ url('/') }}" class="text-white text-decoration-none d-flex flex-column align-items-center align-items-md-start">
                            <img src="{{ asset('img/logo-homefinder.jpg') }}" alt="Logo HomeFinder" style="height: 100px; max-width: 100%;">
                            <span class="fw-semibold mt-1">@2025 HOME-FIND S.L</span>
                        </a>
                    </div>

                    <!-- Enlaces (centrado real) -->
                    <div class="col-12 col-md-6 d-flex justify-content-center">
                        <div class="d-flex gap-4 flex-wrap text-uppercase fw-bold justify-content-center">
                            <a href="{{ route('cookies') }}" class="footer-link">{{ __('footer.cookies') }}</a>
                            <a href="{{ route('privacy') }}" class="footer-link">{{ __('footer.privacy') }}</a>
                            <a href="{{ route('legal') }}" class="footer-link">{{ __('footer.legal') }}</a>

                        </div>
                    </div>

                    <!-- Botón Contacto -->
                    <div class="col-12 col-md-3 d-flex justify-content-center justify-content-md-end">
                        <a href="{{ url('/contacto') }}" class="btn-contacto text-uppercase w-70 w-md-auto text-center">
                            {{ __('app.contact') }}
                        </a>
                    </div>

                </div>

            </div>
        </footer>

    </div>
</body>

</html>
