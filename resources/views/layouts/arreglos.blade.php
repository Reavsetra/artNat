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
        <link rel="stylesheet" href="{{ asset('lib/fancybox/source/jquery.fancybox.css?v=2.1.5') }}" type="text/css" media="screen" />
        <script src="https://use.fontawesome.com/8a5b6d39c1.js"></script>
    </head>
    <body>
        <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas  data-transition-time="500">
            @include('partials.res-nav')
        </div>
        <div class="off-canvas-content" data-off-canvas-content>
            @include('partials.principal-nav')
            @include('partials.footer-contact')
            <!-- Contenido Principal -->
            <main class="arr-list">
                <h1>@yield('title')</h1>
                <div class="expanded row">
                    <div class="hide-for-small-only medium-3 large-2 columns">
                        <!-- Barra de Navegación -->
                        @include('partials.sub-nav')
                    </div>
                    <div class="small-12 medium-3 large-2 medium-push-8 columns contact">

                        @include('partials.payments')
                        @include('partials.cities')
                    </div>
                    <div class="small-12 medium-6 large-8 medium-pull-2 columns">
                        <!-- Contenido Principal -->
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Add fancyBox -->
        <script type="text/javascript" src="{{ asset('lib/fancybox/source/jquery.fancybox.pack.js?v=2.1.5') }}"></script>
        <script src="{{ asset('js/flor.js') }}"></script>
    </body>
</html>