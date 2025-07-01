
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME-FINDER</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b7211d456f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('css/plugins/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('layouts.partials.header')

        @include('layouts.partials.sidebar')

        <div class="content-wrapper">
            @yield('content')
        </div>

        @include('layouts.partials.footer')
    </div>

    <script src="{{ asset('js/plugins/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    @yield('scripts')
    
</div>


</body>

</html>