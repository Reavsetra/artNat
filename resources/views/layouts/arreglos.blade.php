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
            
            <!-- Contenido Principal -->
            <main class="arr-list">
                <h4>@yield('title')</h4>
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
    </body>

</html>