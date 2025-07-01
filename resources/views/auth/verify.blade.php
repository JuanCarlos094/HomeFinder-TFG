@extends('layouts.app')

@section('content')
<section class="py-5" style="background: url('/img/casa.jpg') no-repeat center center / cover; background-attachment: fixed;">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-xl-6">
            <div class="card rounded-3" style="background-color: rgba(255, 255, 255, 0.75); box-shadow: 0 4px 12px rgba(0,0,0,0.15); color: #3B67EC;">
                <div class="card-body p-md-5 mx-md-4 text-center">
                    <img src="{{ asset('img/logo-homefinder.jpg') }}" alt="Logo HomeFinder"
                         style="height: 90px; object-fit: contain; border-radius: 10px;">
                    <h4 class="mt-3 mb-4" style="font-family: 'Poppins', sans-serif;"><strong>Verificación de correo</strong></h4>

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Se ha enviado un nuevo enlace de verificación a tu correo electrónico.
                        </div>
                    @endif

                    <p>Antes de continuar, por favor revisa tu correo para verificar tu dirección.</p>
                    <p>¿No has recibido el correo?</p>

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary px-4 mt-2">Reenviar enlace</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
