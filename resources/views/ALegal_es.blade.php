@extends('layouts.app')

@section('content')
<section class="py-5" style="background-color: #f9f9f9;">
    <div class="container">
    <h1 class="mb-4 fw-bold text-center" style="color: #3B67EC; font-family: 'Poppins', sans-serif;">
    Aviso Legal – 
    <span style="
        color: white; 
        text-shadow: 
            -1px -1px 0 #3B67EC,  
             1px -1px 0 #3B67EC,
            -1px  1px 0 #3B67EC,
             1px  1px 0 #3B67EC;">
        HOME-FINDER
    </span>
</h1>


        <div class="bg-white p-4 rounded shadow-sm" style="font-family: 'Poppins', sans-serif; line-height: 1.7; color: #333;">
            <p><strong>Datos Identificativos</strong></p>
            <p>En cumplimiento con la Ley 34/2002, de Servicios de la Sociedad de la Información y del Comercio Electrónico, se informa que:</p>
            <ul>
                <li><strong>Empresa:</strong> HOME-FINDER S.L.</li>
                <li><strong>NIF:</strong> B1357924</li>
                <li><strong>Dirección:</strong> Elche/Alicante - Campus Empresarial de la UMH(Edificio 2)</li>
                <li><strong>Email:</strong> info@home-finder.com</li>
            </ul>

            <p><strong>Objeto</strong></p>
            <p>La presente web tiene como finalidad ofrecer comparación de precios y características de inmuebles en diferentes portales inmobiliarios.</p>

            <p><strong>Propiedad Intelectual</strong></p>
            <p>Todos los contenidos de esta web, incluyendo textos, imágenes y logotipos, son propiedad de HOME-FINDER o de terceros con autorización, estando protegidos por la normativa de propiedad intelectual.</p>

            <p><strong>Responsabilidad</strong></p>
            <p>HOME-FINDER no se hace responsable del uso indebido de la información ofrecida ni de posibles errores en los datos publicados por portales externos.</p>

            <p class="mt-4 text-end"><em>Actualizado: {{ now()->format('d/m/Y') }}</em></p>
        </div>
    </div>
</section>
@endsection
