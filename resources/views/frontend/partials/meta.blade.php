    <!-- Basic Meta Page Needs -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0086FF" />
    <meta name="msapplication-TileColor" content="#0086FF">
    <meta name="msapplication-navbutton-color" content="#FFFDFA">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0086FF">
    <meta content="text/html; charset=UTF-8" name="Content-Type" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="csrf-recaptcha" content="{{env('INVISIBLE_RECAPTCHA_SITEKEY')}}" />
    <link rel="canonical" href="{{ url()->current() }}">

    <title>@yield('page-title', 'Autopedia | Omnichannel Automotive Marketplace')</title>
    
    <meta name="description" content="@yield('meta_desc','Omnichannel automotive marketplace yang paling terpercaya.')">
    <meta name="keywords" content="@yield('keyword','Omnichannel, Automotive Marketplace, JBA, Caroline, Cartalog')">
    <meta name="image" content="@yield('image','Meta Image')">

    <meta itemprop="name" content="@yield('page-title', 'Autopedia | Omnichannel Automotive Marketplace')">
    <meta itemprop="description" content="@yield('meta_desc','Omnichannel automotive marketplace yang paling terpercaya.')">
    <meta itemprop="image" content="@yield('image','Meta Image')">

    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="@yield('page-title', 'Autopedia | Omnichannel Automotive Marketplace')" />
    <meta property="og:description" content="@yield('meta_desc','Omnichannel automotive marketplace yang paling terpercaya.')" />
    <meta property="og:image" content="@yield('image','Meta Image')" />

    <meta name="twitter:card" content="@yield('page-title', 'Autopedia | Omnichannel Automotive Marketplace')" />
    <meta name="twitter:site" content="{{ url()->current() }}" />
    <meta name="twitter:title" content="@yield('page-title', 'Autopedia | Omnichannel Automotive Marketplace')" />
    <meta name="twitter:description" content="@yield('meta_desc','Omnichannel automotive marketplace yang paling terpercaya.')" />
    <meta name="twitter:image" content="@yield('image','Meta Image')" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" type="image/png" sizes="180x180"
        href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{!! mix('/css/main.css') !!}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/fd390cdeb8.js" crossorigin="anonymous"></script>


    {{-- chartjs --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!};
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FQ1V2T5L93"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-FQ1V2T5L93');
    </script>