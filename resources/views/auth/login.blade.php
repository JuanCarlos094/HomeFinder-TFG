@extends('layouts.app')

@section('content')
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">
                                <div class="text-center">
                                    <a href="https://imgbb.com/"><img src="https://i.ibb.co/hDNWw6d/zataca.png"  style="width: 115px;" alt="logo"></a>
                                       
                                    <h4 class="mt-1 mb-5 pb-1">Inicia sesión en el sistema</h4>
                                </div>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email">Dirección de correo</label>
                                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" placeholder="Email address" />
                                        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Contraseña</label>
                                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" />
                                        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!--<div class="form-outline mb-4">
                                        <label class="form-label" for="rol">Rol en la empresa</label>
                                        <select id="rol" name="rol" class="form-select">
                                            <option value="CEO">CEO</option>
                                            <option value="Administración">Administración</option>
                                        </select>
                                    </div>-->
                             
                                    <div class="text-center pt-1 mb-5 pb-1">    
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log in</button>
                                        <br>
                                        <a class="text-muted" href="{{ route('password.request') }}">Olvidé mi contraseña</a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">No tienes una cuenta?</p>
                                        <a href="{{ route('register') }}" class="btn btn-outline-danger">Create new</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2" style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">Somos más que una compañía</h4>
                                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
