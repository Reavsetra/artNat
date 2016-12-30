<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('contacto', function () {
    return view('contacto');
});

Route::group(['prefix' => 'arreglos'], function () {
    Route::get('{arreglo}', 'ArregloController@index');
}); 

Route::group(['prefix' => 'florerias'], function () {
    Route::get('{lugar}', function ($lugar)    {
    	return view('places.'.$lugar);
    });
});
