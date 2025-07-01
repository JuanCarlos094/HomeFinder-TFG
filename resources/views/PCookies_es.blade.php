@extends('layouts.app')

@section('content')
<section class="py-5" style="background-color: #f9f9f9;">
    <div class="container">
    <h1 class="mb-4 fw-bold text-center" style="color: #3B67EC; font-family: 'Poppins', sans-serif;">
    Política de Cookies – 
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
            <p><strong>¿Qué son las cookies?</strong></p>
            <p>En <strong>HOME-FINDER</strong> utilizamos cookies para garantizar el correcto funcionamiento del sitio, mejorar tu experiencia como usuario, y ayudarte a encontrar la mejor opción inmobiliaria entre múltiples portales.</p>

            <p><strong>¿Qué tipo de cookies usamos?</strong></p>
            <ul>
                <li><strong>Cookies esenciales:</strong> Permiten navegar por nuestra plataforma y usar funcionalidades como el registro o el acceso a tu cuenta.</li>
                <li><strong>Cookies de rendimiento:</strong> Nos ayudan a entender cómo se usa la web para mejorar su funcionamiento, sin identificarte personalmente.</li>
                <li><strong>Cookies de personalización:</strong> Guardan tus preferencias (ciudad, tipo de vivienda, rango de precios...) para que no tengas que reintroducirlas.</li>
                <li><strong>Cookies de terceros:</strong> Utilizadas por herramientas de análisis (como Google Analytics) o por portales inmobiliarios integrados para mostrar información actualizada.</li>
                <li><strong>Cookies de pago:</strong> Si realizas una reserva, usamos cookies para verificar la seguridad de la transacción y recordar el estado del proceso de pago.</li>
            </ul>

            <p><strong>¿Por qué usamos cookies?</strong></p>
            <p>Queremos ofrecerte una experiencia fluida al comparar viviendas de distintos portales como Idealista, Fotocasa o Solvia. Las cookies nos permiten mostrarte resultados más relevantes y recordarte tus búsquedas y preferencias.</p>

            <p><strong>Gestión de cookies</strong></p>
            <p>Puedes permitir o rechazar el uso de cookies directamente desde tu navegador. Ten en cuenta que desactivarlas puede limitar el acceso a ciertas funciones como el login o el proceso de reserva.</p>

            <p><strong>Consentimiento</strong></p>
            <p>Al seguir navegando por <strong>HOME-FINDER</strong>, consientes el uso de cookies según esta política. Siempre podrás cambiar tu decisión desde la configuración de tu navegador.</p>

            <p class="mt-4 text-end"><em>Última actualización: {{ now()->format('d/m/Y') }}</em></p>
        </div>
    </div>
</section>
@endsection
