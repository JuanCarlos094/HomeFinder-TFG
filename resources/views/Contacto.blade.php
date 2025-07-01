@extends('layouts.app')

@section('content')

<style>
    button.btn-contact-submit:hover {
        background-color: #2e54c9 !important;
        box-shadow: 0 6px 16px rgba(59, 103, 236, 0.5) !important;
    }
</style>

<section class="py-5" style="background: linear-gradient(to bottom right, #e8eefc, #ffffff); font-family: 'Poppins', sans-serif;">
<div class="container position-relative">
    <h1 class="text-center fw-bold"
        style="
            color: #3B67EC;
            font-size: 2.75rem;
            text-shadow: 0 2px 10px rgba(59, 103, 236, 0.5);
            padding: 1rem 2.5rem;
            border-radius: 1rem;
            position: relative;
            top: -2rem;
            margin-bottom: -1rem;
            left: 20%;
            z-index: 3;
            transition: all 0.3s ease;">
        Contáctanos
    </h1>

        <div class="row justify-content-center align-items-center">
            <!-- Logo -->
            <div class="col-md-5 text-center mb-4 mb-md-0">
                <img src="{{ asset('img/logo-homefinder.jpg') }}" alt="Logo HomeFinder"
                    class="img-fluid"
                    style="max-height: 280px; border-radius: 25px; box-shadow: 0 0 25px rgba(255, 255, 255, 0.9); filter: drop-shadow(0 0 10px #ffffff);">
            </div>

            <!-- Formulario -->
            <div class="col-md-7">
                <div class="bg-white p-5 rounded-4 shadow-lg" style="transition: all 0.3s ease-in-out;">
                    <p class="mb-4 text-center text-md-start" style="color: #333;">
                        ¿Tienes alguna duda, sugerencia o propuesta? Rellena este formulario y te responderemos lo antes posible.
                    </p>

                    @if(session('success'))
                    <div class="alert alert-success text-center">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ url('/contacto') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Nombre<span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control shadow-sm border-0 @error('name') is-invalid @enderror" required placeholder="Tu nombre completo" value="{{ old('name') }}">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Correo electrónico<span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control shadow-sm border-0 @error('email') is-invalid @enderror" required placeholder="ejemplo@correo.com" value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label fw-semibold">Asunto<span class="text-danger">*</span></label>
                            <input type="text" name="subject" id="subject" class="form-control shadow-sm border-0 @error('subject') is-invalid @enderror" required placeholder="Motivo de contacto" value="{{ old('subject') }}">
                            @error('subject')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label fw-semibold">Mensaje<span class="text-danger">*</span></label>
                            <textarea name="message" id="message" rows="5" class="form-control shadow-sm border-0 @error('message') is-invalid @enderror" required placeholder="Escribe tu mensaje aquí...">{{ old('message') }}</textarea>
                            @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center text-md-end">
                            <button type="submit"
                                class="btn px-5 py-2 fw-bold btn-contact-submit"
                                style="background-color: #3B67EC; color: white; border-radius: 50px;
                                box-shadow: 0 4px 12px rgba(59, 103, 236, 0.4);
                                transition: all 0.3s ease;">
                                Enviar Mensaje
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection