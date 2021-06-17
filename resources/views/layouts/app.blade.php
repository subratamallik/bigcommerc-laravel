<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css?v=1.0') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body class="{{getController()}}">
    <div class="wrapper_container">
        <div class="container-fluid">@yield('content')</div>
    </div>
</body>
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap-4.3.1-dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
@yield('script')

</html>