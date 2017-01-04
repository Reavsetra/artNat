@extends('layouts.arreglos')

@section('mdescription', "Arreglos florales para toda ocasión con servicio de entrega exprés en la zona de Cuajimalpa")

@section('mkeywords', "Florería en Cuajimlpa, arreglos florales para toda ocasión, envío de flores a domicilio, florerías en Cuajimalpa")

@section('title', "Florería en Cuajimalpa")

@section('content')
    <div class="arreglos">
        @foreach($arreglos as $arreglo)
            @if($arreglo->webdir == "toda-ocasion")
                @foreach($arreglo->lista as $item)
                     <div class="item">
                        <a class="light-gallery" rel="group" href="{{ asset('img/arreglos/') }}/{{$item->foto}}">
                            <div class="thumnails">
                                <img src="{{ asset('img/arreglos/') }}/{{$item->foto}}" width="280" height="280" />
                            </div>
                        </a>
                        <div class="contenido">
                            <p>{{$item->nombre}}</p>
                            <p class="price">{{$item->precio}}<span class="send"> más envio</span></p>
                        </div>
                     </div>
                @endforeach
            @endif
        @endforeach
    </div>
@endsection