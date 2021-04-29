<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//callback: funcion sin nombre
//que hace parte de los parametros de la invocacion de otra
Route::get('variables', function(){

    $mensaje = 10;
    var_dump($mensaje);
    echo "<hr >";
    $mensaje = true;
    var_dump($mensaje);


});

//valores almacenados
//escalares numericos indices los pone por defecto
//direcciones
//indices asociativos asocian el indce con su correspondiente dato o valor
Route::get('arreglos', function(){
    //arreglo=estructura de datos
    $estudiantes = [  "AN" => "Ana",
                      "MA" => "Maria" ,
                      "JO" => "Jorge"
                    ];
    echo"<pre>";
    print_r($estudiantes);
    echo"</pre>";


});
