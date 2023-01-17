<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#0086FF" />
    <meta name="msapplication-TileColor" content="#0086FF">
    <meta name="msapplication-navbutton-color" content="#FFFDFA">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0086FF">
    <meta content="text/html; charset=UTF-8" name="Content-Type" />
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="description" content="Autopedia - Content Management System">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="MicroAd Indonesia">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Autopedia Dashboard</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" type="image/png" sizes="180x180"
        href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png') }}">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{!! mix('/css/login.css') !!}">
    <link rel="stylesheet" href="{!! mix('/css/app.css') !!}">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    {!! ReCaptcha::htmlScriptTagJsApi() !!}
</head>
<body>
<div id="app">
    {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center poppins" href="/">
                <img id="imageLogo" src="{{ asset('assets/images/svg/logo.svg') }}" class="img-fluid logo" alt="logo">
            </a>
        </div>
    </nav> --}}

    <main class="login">
        @yield('content')
    </main>
</div>
</body>
</html>
