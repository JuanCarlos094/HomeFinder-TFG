@extends('layouts.app')

@section('content')
<section class="py-5" style="background-color: #f9f9f9;">
    <div class="container">
    <h1 class="mb-4 fw-bold text-center" style="color: #3B67EC; font-family: 'Poppins', sans-serif;">
    Legal Advice – 
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
            <p><strong>Company Information</strong></p>
            <p>In accordance with Law 34/2002 on Information Society Services and Electronic Commerce, the following information is provided:</p>
            <ul>
                <li><strong>Company:</strong> HOME-FINDER S.L.</li>
                <li><strong>Tax ID:</strong> B1357924</li>
                <li><strong>Address:</strong> Elche/Alicante – UMH Business Campus (Building 2)</li>
                <li><strong>Email:</strong> info@home-finder.com</li>
            </ul>

            <p><strong>Purpose</strong></p>
            <p>This website aims to provide property price and feature comparisons across various real estate portals.</p>

            <p><strong>Intellectual Property</strong></p>
            <p>All content on this website, including texts, images, and logos, is owned by HOME-FINDER or third parties with permission and is protected by intellectual property laws.</p>

            <p><strong>Liability</strong></p>
            <p>HOME-FINDER is not responsible for any misuse of the information provided or for possible inaccuracies in data published by external real estate websites.</p>

            <p class="mt-4 text-end"><em>Last updated: {{ now()->format('m/d/Y') }}</em></p>
        </div>
    </div>
</section>
@endsection
