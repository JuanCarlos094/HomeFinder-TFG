@extends('layouts.app')

@section('content')
<section class="py-5" style="background: url('/img/casa.jpg') no-repeat center center / cover; background-attachment: fixed;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-6">
                <div class="card rounded-3" style="background-color: rgba(255, 255, 255, 0.75); box-shadow: 0 4px 12px rgba(0,0,0,0.15); color: #3b67ec;">
                    <div class="card-body p-md-5 mx-md-4">
                        <div class="text-center">
                            <img src="{{ asset('img/logo-homefinder.jpg') }}" alt="Logo HomeFinder" style="height: 90px; object-fit: contain; border-radius: 10px;">
                            <h4 class="mt-1 mb-4 pb-1" style="font-family: 'Poppins', sans-serif;"><strong>Restablecer contraseña</strong></h4>
                        </div>

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-outline mb-4">
                                <label for="email" class="form-label"><strong>Dirección de correo</strong></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
                                    style="color: #3B67EC; border: 2px solid #3B67EC; border-radius: 6px;" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">
                                <label for="password" class="form-label"><strong>Contraseña</strong></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password"
                                    style="color: #3B67EC; border: 2px solid #3B67EC; border-radius: 6px;" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">
                                <label for="password-confirm" class="form-label"><strong>Confirmar contraseña</strong></label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    style="color: #3B67EC; border: 2px solid #3B67EC; border-radius: 6px;" />
                            </div>

                            <div class="text-center pt-1 mb-3 pb-1">
                                <button class="btn btn-primary btn-block gradient-custom-2 mb-3" type="submit">
                                    Restablecer contraseña
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection