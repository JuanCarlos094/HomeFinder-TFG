@extends('layouts.app')

@section('content')
<section class="py-5" style="background: url('/img/casa.jpg') no-repeat center center / cover; background-attachment: fixed;">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-xl-6">
            <div class="card rounded-3" style="background-color: rgba(255, 255, 255, 0.75); box-shadow: 0 4px 12px rgba(0,0,0,0.15); color: #3B67EC;">
                <div class="card-body p-md-5 mx-md-4">
                    <div class="text-center">
                        <img src="{{ asset('img/logo-homefinder.jpg') }}" alt="Logo HomeFinder" style="height: 90px; object-fit: contain; border-radius: 10px;">
                        <h4 class="mt-1 mb-4 pb-1" style="font-family: 'Poppins', sans-serif;">
                            <strong>Confirmar contraseña</strong>
                        </h4>
                        <p class="text-muted">Por favor, confirma tu contraseña antes de continuar.</p>
                    </div>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-outline mb-4">
                            <label for="password" class="form-label"><strong>Contraseña</strong></label>
                            <input id="password" type="password" name="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   required autocomplete="current-password"
                                   style="color: #3B67EC; border: 2px solid #3B67EC; border-radius: 6px;" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="text-center pt-1 mb-3 pb-1">
                            <button type="submit" class="btn btn-primary btn-block gradient-custom-2 mb-3">
                                Confirmar contraseña
                            </button>
                            @if (Route::has('password.request'))
                                <div>
                                    <a class="text-muted" href="{{ route('password.request') }}">
                                        ¿Has olvidado tu contraseña?
                                    </a>
                                </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
