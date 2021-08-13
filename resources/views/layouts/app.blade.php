<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
    <style>
        .megamenu {
            position: static
        }

        .megamenu .dropdown-menu {
            background: none;
            width: 150%;
            padding:10px;
        }

        

        code {
            color: #745eb1;
            background: #fff;
            padding: 0.1rem 0.2rem;
            border-radius: 0.2rem
        }

        .text-uppercase {
            letter-spacing: 0.08em
        }
    </style>
    
</head>
<body>
    <div id="app">
        <main class="">
            @yield('content')
        </main>
    </div>
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
