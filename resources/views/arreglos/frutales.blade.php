@extends('layouts.arreglos')

@section('content')
    <div class="arreglos">
        @foreach($arreglos as $arreglo)
            @if($arreglo->webdir == "frutales")
                @section('title', $arreglo->nombre)
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