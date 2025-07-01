@extends('layouts.app')

@section('content')
<section class="d-flex flex-column justify-content-center align-items-center text-center" style="height: 85vh; background-image: url('{{asset('/img/inicio.jpg')}}'); background-size: cover; background-position: center; background-repeat: no-repeat; color: white; padding: 0 1rem;">
    <div class="container">
    <h1 class="fw-bold mb-4"
    style="font-size: 2.5rem;
           color: white;
           -webkit-text-stroke: 0.5px rgba(59, 103, 236, 0.2);
           text-stroke: 0.5px rgba(59, 103, 236, 0.5);
           text-shadow: 4px 0 4px rgba(59, 103, 236, 1);">
    ENCONTRAD LA CASA DONDE EMPEZAR <br> VUESTRA HISTORIA
</h1>
<div class="d-flex flex-column flex-md-row justify-content-center gap-5">
{{-- Solo visible para usuarios no logueados --}}
            @guest
            <a href="{{ route('register') }}"
               class="btn btn-outline-blue btn-lg px-4 fw-bold rounded-pill">
                REGISTRARSE
            </a>
            @endguest

    <a href="{{ route('inmuebles') }}"
       class="btn btn-blue-inverse btn-lg px-4 fw-bold rounded-pill d-flex align-items-center justify-content-center gap-2">
        <i class="bi bi-house-door-fill"></i> INMUEBLES
    </a>
</div>

    </div>
</section>
@endsection
