<!doctype html>

<html lang="en" class="overflow-x-hidden">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Pet Hamper, Arcade Direct, Passion4events">
    <meta name="author" content="Nathan Williams">
    <meta name="description" content="P4UK - {{ $title }}">

    <!-- Title -->
    <title>{{ $company_details['company_name'] }} - {{ $title }}</title>

    <!-- Styles -->
    <link type='text/css' href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    @include('styles.custom_variables')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preload"
          href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap"
          as="style"
          onload="this.onload=null;this.rel='stylesheet'"/>

    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap"
              rel="stylesheet"
              type="text/css"/>
    </noscript>

    <!-- favicon -->
    @if($company_details['favicon'])
        <link rel="icon" type="image/x-icon" href="{{ $company_details['favicon']['permalink'] }}">
    @endif

    <!-- Font Awesome -->
    <script defer src="https://kit.fontawesome.com/713e0a7437.js" crossorigin="anonymous"></script>

</head>

<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
