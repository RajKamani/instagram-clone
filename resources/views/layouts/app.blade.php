<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    {{-- <link href="css/style.css" rel="stylesheet">--}}
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('file')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        li {
            list-style-type: none;
        }
    </style>
    <script src="http://unpkg.com/turbolinks"></script>

</head>
<body>
<div id="app">
    @auth
        <nav class="navigation">
            <a href="{{route('home')}}">
                <img src="/images/navLogo.png" alt="logo" title="logo" class="navigation__logo">
            </a>
            <div class="navigation__search-container">
                <i class="fa fa-search"></i>

                <form id="myform"  method="get">
                    <input type="text" id="searchtxt" placeholder="Search">
                </form>

            </div>
            <div class="navigation__icons d-flex align-items-center">

                <a href="{{route('explore')}}" class="navigation__link">
                    <i class="fa fa-compass"></i>
                </a>
                <a href="#" class="navigation__link">
                    <i class="fa fa-heart-o"></i>
                </a>
                <a href="{{route('profile.show',auth()->user()->username)}}" class="navigation__link">
                    <i class="fa fa-user-o"></i>
                </a>

            </div>
        </nav>
    @endauth
</div>

<main class="py-4">
    <div id="demo" class="container d-flex justify-content-center">

    </div>
    @yield('content')
</main>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/search.js') }}" async></script>
</body>

</html>

