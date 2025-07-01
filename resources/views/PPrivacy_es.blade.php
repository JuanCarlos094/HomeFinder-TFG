@extends('layouts.app')

@section('content')
<section class="py-5" style="background-color: #f9f9f9;">
    <div class="container">
    <h1 class="mb-4 fw-bold text-center" style="color: #3B67EC; font-family: 'Poppins', sans-serif;">
    Política de Privacidad – 
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
            <p><strong>Responsable del Tratamiento</strong></p>
            <p>El responsable de tus datos es <strong>HOME-FINDER S.L.</strong>, con domicilio en Elche/Alicante - Campus Empresarial de la UMH(Edificio 2), contacto: info@home-finder.com.</p>

            <p><strong>Finalidad del Tratamiento</strong></p>
            <p>Recopilamos y tratamos datos personales con las siguientes finalidades:</p>
            <ul>
                <li>Facilitar la comparación de precios de inmuebles entre distintos portales.</li>
                <li>Gestionar tu registro y acceso como usuario de la plataforma.</li>
                <li>Procesar reservas de inmuebles y pagos.</li>
                <li>Enviar comunicaciones informativas o comerciales relacionadas con el servicio (previo consentimiento).</li>
            </ul>

            <p><strong>Legitimación</strong></p>
            <p>La base legal es tu consentimiento, el cumplimiento de un contrato y nuestro interés legítimo en mejorar los servicios.</p>

            <p><strong>Destinatarios</strong></p>
            <p>No compartimos tus datos con terceros, salvo que sea necesario para procesar reservas, pagos o cumplir obligaciones legales.</p>

            <p><strong>Conservación</strong></p>
            <p>Tus datos se conservarán mientras seas usuario activo. Puedes solicitar la eliminación en cualquier momento.</p>

            <p><strong>Derechos</strong></p>
            <p>Puedes ejercer tus derechos de acceso, rectificación, cancelación, oposición y portabilidad mediante un email a: privacidad@home-finder.com.</p>

            <p class="mt-4 text-end"><em>Actualizado: {{ now()->format('d/m/Y') }}</em></p>
        </div>
    </div>
</section>
@endsection