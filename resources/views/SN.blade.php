@extends('layouts.app')

@section('content')
<section class="py-5" style="background-color: #eaf0ff; font-family: 'Poppins', sans-serif;">
    <div class="container">

        {{-- Sección 1 --}}
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <h2 class="fw-bold mb-3" style="color: #3B67EC;">El desafío de los jóvenes para encontrar hogar</h2>
                <p style="line-height: 1.7; color: #333;">
                    En un mundo donde los precios de las viviendas no dejan de crecer, los jóvenes se enfrentan a un reto cada vez mayor: acceder a una vivienda asequible. Muchos desean independizarse o iniciar una familia, pero se ven limitados por la falta de transparencia y las diferencias entre portales inmobiliarios. <strong>HOME-FINDER</strong> nace para ofrecer una visión clara y accesible.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('img/sobre1.png') }}" alt="Jóvenes buscando hogar" class="img-fluid rounded-4" style="box-shadow: 0 6px 24px rgba(59, 103, 236, 0.25);">
            </div>
        </div>

        {{-- Sección 2 --}}
        <div class="row align-items-center mb-5 flex-column-reverse flex-md-row">
            <div class="col-md-6 text-center">
                <img src="{{ asset('img/sobre2.png') }}" alt="Idea de la pareja" class="img-fluid rounded-4" style="box-shadow: 0 6px 24px rgba(59, 103, 236, 0.25);">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold mb-3" style="color: #3B67EC;">Una conversación entre sueños e incertidumbres</h2>
                <p style="line-height: 1.7; color: #333;">
                    Esta plataforma nació de una conversación con mi pareja, en medio de reflexiones sobre el futuro. Buscábamos una vivienda asequible para formar nuestra familia, pero la diferencia de precios entre portales nos desconcertó. Fue ahí cuando decidimos crear <strong>HOME-FINDER</strong>: una herramienta para comparar, entender y encontrar la vivienda ideal con claridad.
                </p>
            </div>
        </div>

        {{-- Sección 3 --}}
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold mb-3" style="color: #3B67EC;">Un proyecto con visión de futuro</h2>
                <p style="line-height: 1.7; color: #333;">
                    <strong>HOME-FINDER</strong> no es solo un comparador: es un impulso para que las nuevas generaciones no pierdan la esperanza. Con nuestra plataforma, pretendemos abrir caminos, ahorrar tiempo y facilitar el acceso a un hogar digno. Creemos en un futuro donde encontrar vivienda no sea un privilegio, sino un derecho.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('img/sobre3.png') }}" alt="Futuro con esperanza" class="img-fluid rounded-4" style="box-shadow: 0 6px 24px rgba(59, 103, 236, 0.25);">
            </div>
        </div>

    </div>
</section>
@endsection
