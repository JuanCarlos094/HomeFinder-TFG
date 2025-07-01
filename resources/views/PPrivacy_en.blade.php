@extends('layouts.app')

@section('content')
<section class="py-5" style="background-color: #f9f9f9;">
    <div class="container">
        <h1 class="mb-4 fw-bold text-center" style="color: #3B67EC; font-family: 'Poppins', sans-serif;">
            Privacy Policy –
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
            <p><strong>Data Controller</strong></p>
            <p>The entity responsible for your data is <strong>HOME-FINDER S.L.</strong>, located in Elche/Alicante - UMH Business Campus (Building 2), contact: info@home-finder.com.</p>

            <p><strong>Purpose of Processing</strong></p>
            <p>We collect and process personal data for the following purposes:</p>
            <ul>
                <li>To allow users to compare real estate prices across different portals.</li>
                <li>To manage user registration and access to the platform.</li>
                <li>To process property reservations and payments.</li>
                <li>To send informative or promotional communications related to our services (with prior consent).</li>
            </ul>

            <p><strong>Legal Basis</strong></p>
            <p>The legal basis is your consent, the performance of a contract, and our legitimate interest in improving services.</p>

            <p><strong>Recipients</strong></p>
            <p>We do not share your data with third parties unless it is necessary to process reservations, payments, or comply with legal obligations.</p>

            <p><strong>Data Retention</strong></p>
            <p>Your data will be retained as long as you remain an active user. You can request its deletion at any time.</p>

            <p><strong>Rights</strong></p>
            <p>You may exercise your rights to access, rectify, erase, object, or request data portability by emailing: privacidad@home-finder.com.</p>

            <p class="mt-4 text-end"><em>Last updated: {{ now()->format('m/d/Y') }}</em></p>
        </div>
    </div>
</section>
@endsection