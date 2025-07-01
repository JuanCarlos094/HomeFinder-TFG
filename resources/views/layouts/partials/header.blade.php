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

<nav class="navbar navbar-expand-md navbar-dark sticky-top py-4"
     style="background-color: #3B67EC; box-shadow: 0 4px 10px rgba(255, 255, 255, 0.7); z-index: 1030;">
    <div class="container d-flex flex-wrap justify-content-between align-items-center gap-3">

        <!-- Botón hamburguesa (responsive) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar"
                aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menú de navegación -->
        <div class="collapse navbar-collapse mt-3 mt-md-0" id="adminNavbar">
    <ul class="navbar-nav mx-auto text-center flex-column flex-md-row align-items-center gap-3 gap-md-4">
        <li class="nav-item">
            <a class="nav-link text-white fw-semibold" href="{{ route('inmuebles') }}">{{ __('app.properties') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white fw-semibold" href="{{ route('nosotros') }}">{{ __('app.about') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white fw-semibold" href="{{ route('contacto') }}">{{ __('app.contact') }}</a>
        </li>
    </ul>

            <!-- Usuario (derecha) -->
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item text-white text-center me-3">
                    <i class="bi bi-person-circle fs-3"></i>
                    <div><strong>Usuario:</strong> {{ auth()->user()->nombre }}</div>
                    @role('CEO')
                        <div><strong>Puesto:</strong> {{ auth()->user()->rol }}</div>
                    @endrole
                </li>
            </ul>
        </div>
    </div>
</nav>
