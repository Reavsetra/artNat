@extends('layouts.arreglos')

@section('title', 'Bienvenidos')
@section('arreglo-name', 'Toda Ocasión')

@section('content')
	

	
    <!-- <div class="arreglos">
        <div class="item">
            <a class="light-gallery" rel="group" href="../assets/img/arreglos/bebes/007.jpg">
                <div class="thumnails">
                    <img src="../assets/img/arreglos/bebes/007.jpg" width="280" height="280" />
                </div>
            </a>
            <div class="contenido">
                <p>Bebés 07</p>
                <p class="price">$1,600.00<span class="send"> más envio</span></p>
            </div>
        </div>
    </div> -->


		<!-- {{File::get(public_path('js/arreglos.json'))}} -->

                <?php

                    $json = file_get_contents(public_path('js/arreglos.json'));
                    //$json = public_path('js/arreglos.json');
                    $json_output = json_decode($json);
                    $arreglo = $json_output->arreglos[1];
                    $arrList = $arreglo->lista;
                    echo '
                        <article>
                            <h3>'.$arreglo->nombre.'</h3>
                            <p>
                                '.$arreglo->introduccion.'
                            </p>
                            
                            <div class="gallery">';
                            foreach ($arrList as $value) {
                                echo '
                                <div class="item">
                                    <div class="thumbnail">
                                        <a class="fancybox" rel="group" href="http://www.floreriabiosfera.com/img/arreglos/'.$value->imagen.'">
                                        <img class="pic" src="http://www.floreriabiosfera.com/img/arreglos/'.$value->imagen.'" alt="" />
                                        </a>
                                    </div>
                                    <h3>'.$value->titulo.'</h3>
                                    <div class="price">
                                        <p>
                                            '.$value->precio.'
                                        </p>
                                    </div>
                                </div>
                                ';
                            }
                    echo "</div></article";
                ?>
@endsection