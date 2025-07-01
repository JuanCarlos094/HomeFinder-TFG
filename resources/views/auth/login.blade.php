@extends('layouts.app')

@section('content')
<section class="h-100 gradient-form" style="background-image: url('{{asset('/img/casa.jpg')}}'); background-size: cover; background-position: center;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
            <div class="card rounded-3" style="background-color: transparent; box-shadow: none; color: #3b67ec;">
            <div class="row g-0">
                    <div class="col-lg-6 order-lg-1" style="background-color: rgba(59, 103, 236, 0.25); backdrop-filter: blur(10px); border-top-left-radius: 15px; border-bottom-left-radius: 15px;">
                    <div class="card-body p-md-5 mx-md-4">
                                <div class="text-center">
                                <img src="{{ asset('img/logo-homefinder.jpg') }}" alt="Logo HomeFinder" style="height: 90px; object-fit: contain; border-radius: 10px;">
                                <h4 class="mt-1 mb-15 pb-1" style="font-family: 'Poppins', sans-serif;"><strong>Inicia sesión</strong></h4>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                   
                                    @csrf

                                    <div class="form-outline mb-4">
                                        <label class="form-label " for="email"><strong>Dirección de correo</strong></label>
                                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" placeholder="Email address" style="color: #3B67EC; border: 2px solid #3B67EC; border-radius: 6px;" />
                                        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password"><strong>Contraseña</strong></label>
                                        <input type="password" id="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" style="color: #3B67EC; border: 2px solid #3B67EC; border-radius: 6px;" />
                                        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>                            

                                    </div>
                             

                                    <div class="text-center pt-1 mb-5 pb-1">    
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log in</button>
                                        <br>
                                        <a class="text-muted" href="{{ route('password.request') }}">Olvidé mi contraseña</a>
                                    </div>                       


                                </form>
                            </div>
                            <div class="col-lg-6 order-lg-2 d-flex align-items-center gradient-custom-2" style="background: linear-gradient(90deg, #3B67EC 70%, #2E58D1 75%, #224B9A 85%, #1A3B7F 100%);">
                            <div class="text-white py-4 p-md-5 mx-md-4">
                                <img src="{{ asset('img/logo-homefinder.jpg') }}" alt="Logo HomeFinder" style="height: 300px; object-fit: contain;">
                                </div>
                            </div>
                        </div>

                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
