@extends('layouts.master')

@section('title', 'Bienvenidos')

@section('content')
    @include('partials.orbit')

    <!-- Contenido Principal -->
    <main>
        <h4>Florería Arte Natural</h4>
        <div class="arreglos">
            <div class="item">
                <a href="arreglos/toda_ocasion">
                    <div class="thumnails">
                        <img src="img/catalogos/obsequio.jpg" width="280" height="280" />
                    </div>
                </a>
                    <h4>Arreglos para Toda Ocasión</h4>
                    <p>Click en la imagen para ver el catálogo completo</p>
            </div>
            <div class="item">
                <a href="arreglos/especiales">
                    <div class="thumnails">
                        <img src="img/catalogos/especiales.jpg" width="280" height="280" />
                    </div>
                    <h4>Catálogo de Especiales</h4>
                    <p>Click en la imagen para ver el catálogo completo</p>
                </a>
            </div>
            <div class="item">
                <a href="arreglos/orquideas">
                    <div class="thumnails">
                        <img src="img/catalogos/orquideas.jpg" width="280" height="280" />
                    </div>
                    <h4>Arreglos con Orquídeas</h4>
                    <p>Click en la imagen para ver el catálogo completo</p>
                </a>
            </div>
            <div class="item">
                <a href="arreglos/frutales">
                    <div class="thumnails">
                        <img src="img/catalogos/frutales.jpg" width="280" height="280" />
                    </div>
                    <h4>Arreglos Frutales</h4>
                    <p>Click en la imagen para ver el catálogo completo</p>
                </a>
            </div>
            <div class="item">
                <a href="arreglos/bebes">
                    <div class="thumnails">
                        <img src="img/catalogos/bebes.jpg" width="280" height="280" />
                    </div>
                    <h4>Arreglos para Bebés</h4>
                    <p>Click en la imagen para ver el catálogo completo</p>
                </a>
            </div>
            <div class="item">
                <a href="arreglos/centros-mesa">
                    <div class="thumnails">
                        <img src="img/catalogos/centros.jpg" width="280" height="280" />
                    </div>
                    <h4>Centros de Mesa</h4>
                    <p>Click en la imagen para ver el catálogo completo</p>
                </a>
            </div>
            <div class="item">
                <a href="arreglos/ramos-para-novia">
                    <div class="thumnails">
                        <img src="img/catalogos/ramos.jpg" width="280" height="280" />
                    </div>
                    <h4>Ramos de Novia</h4>
                    <p>Click en la imagen para ver el catálogo completo</p>
                </a>
            </div>
            <div class="item">
                <a href="arreglos/religiosos">
                    <div class="thumnails">
                        <img src="img/catalogos/religiosos.jpg" width="280" height="280" />
                    </div>
                    <h4>Arreglos Religiosos</h4>
                    <p>Click en la imagen para ver el catálogo completo</p>
                </a>
            </div>
            <div class="item">
                <a href="arreglos/funebres">
                    <div class="thumnails">
                        <img src="img/catalogos/funerarios.jpg" width="280" height="280" />
                    </div>
                    <h4>Arreglos Fúnebres</h4>
                    <p>Click en la imagen para ver el catálogo completo</p>
                </a>
            </div>
            <div class="item">
                <a href="arreglos/empresariales">
                    <div class="thumnails">
                        <img src="img/catalogos/empresariales.jpg" width="280" height="280" />
                    </div>
                    <h4>Arreglos Empresariales</h4>
                    <p>Click en la imagen para ver el catálogo completo</p>
                </a>
            </div>
            <div class="item">
                <a href="arreglos/navidad">
                    <div class="thumnails">
                        <img src="img/catalogos/navidad.jpg" width="280" height="280" />
                    </div>
                    <h4>Arreglos Navideños</h4>
                    <p>Click en la imagen para ver el catálogo completo</p>
                </a>
            </div>
            <div class="item">
                <a href="arreglos/ornamentales">
                    <div class="thumnails">
                        <img src="img/catalogos/ornamental.jpg" width="280" height="280" />
                    </div>
                    <h4>Plantas Ornamentales</h4>
                    <p>Click en la imagen para ver el catálogo completo</p>
                </a>
            </div>
        </div>
    </main>
@endsection