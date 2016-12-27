<!doctype html>
<html class="no-js" lang="es">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Floreria Arte Natural - @yield('title')</title>
    </head>

    <body>
        <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas  data-transition-time="500">
            @include('partials.res-nav')
        </div>
        <div class="off-canvas-content" data-off-canvas-content>
            @include('partials.principal-nav')

            @yield('content')
        </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>

</html>