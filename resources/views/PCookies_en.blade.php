@extends('layouts.app')

@section('content')
<section class="py-5" style="background-color: #f9f9f9;">
    <div class="container">
    <h1 class="mb-4 fw-bold text-center" style="color: #3B67EC; font-family: 'Poppins', sans-serif;">
    Cookie Policy – 
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
            <p><strong>What are cookies?</strong></p>
            <p>At <strong>HOME-FINDER</strong>, we use cookies to ensure the site functions correctly, enhance your user experience, and help you find the best real estate options from multiple portals.</p>

            <p><strong>What types of cookies do we use?</strong></p>
            <ul>
                <li><strong>Essential cookies:</strong> Enable navigation on our platform and features like account registration and login.</li>
                <li><strong>Performance cookies:</strong> Help us understand how users interact with the site to improve its functionality, without identifying individuals.</li>
                <li><strong>Personalization cookies:</strong> Save your preferences (city, property type, price range, etc.) so you don't have to re-enter them.</li>
                <li><strong>Third-party cookies:</strong> Used by tools such as Google Analytics or integrated real estate portals to display updated information.</li>
                <li><strong>Payment cookies:</strong> If you make a reservation, these cookies ensure transaction security and remember your progress in the payment process.</li>
            </ul>

            <p><strong>Why do we use cookies?</strong></p>
            <p>We want to provide a seamless experience when comparing properties from sites like Idealista, Fotocasa, or Solvia. Cookies allow us to display more relevant results and remember your search history and preferences.</p>

            <p><strong>Cookie management</strong></p>
            <p>You can enable or reject cookies directly through your browser settings. Please note that disabling them may limit access to certain features such as login or reservation processing.</p>

            <p><strong>Consent</strong></p>
            <p>By continuing to browse <strong>HOME-FINDER</strong>, you consent to the use of cookies in accordance with this policy. You can change your preferences at any time via your browser settings.</p>

            <p class="mt-4 text-end"><em>Last updated: {{ now()->format('m/d/Y') }}</em></p>
        </div>
    </div>
</section>
@endsection
