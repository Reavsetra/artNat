<!doctype html>
<html class="no-js" lang="es">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="@yield('mdescription')">
        <meta name="keywords" content="@yield('mkeywords')">
        <meta name="author" content="Navrojs.com">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Floreria Arte Natural | @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        {{-- Menú canvas off responsive  --}}
        <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas  data-transition-time="500">
            @include('partials.res-nav')
        </div>
        <div class="off-canvas-content" data-off-canvas-content>
            @include('partials.principal-nav')

            @yield('content')
        </div>
        {{-- Scripts  --}}
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/flor.js') }}"></script>
        @if (\Request::is('contacto')) 
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWY-SJ_3hztn-mEep1zYhE1_7Do89JnAk&callback=initMap">
            </script>
        @endif 
    </body>
</html>