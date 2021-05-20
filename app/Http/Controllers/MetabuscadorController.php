<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{

//accion para mostrar el fomulario de busqueda
public function formulario_buscador(){

    //mostrar la vista del metabuscador
    return view('metabuscador');
}

//accion para realizar la busqueda
public function buscar(){


    //Datos llegan al arreglo $_POST
    echo "<pre>" ;
    print_r($_POST);
    echo "</pre>";

    $termino= $_POST["termino"];
    $motor= $_POST["Motores"];
//redireccionar al motor correcto, junto con el termino
//queystring
switch($motor){
    case 1: return redirect()-> to("https://www.google.com/search?q=$termino");
       break;
    case 2: return redirect()-> to ("https://www.bing.com/search?q=$termino");
        break;

    case 3 : return redirect()-> to ("https://www.ecosia.org/search?q=$termino");
     break;

     case 4: return redirect()-> to ("https://search.lilo.org/?q=$termino");
     break;

    case 5: return redirect()-> to ("https://duckduckgo.com/?q=$termino");
    break;

    case 6: return redirect()-> to ("https://swisscows.com/web?culture=es$termino");
    break;

    case 7: return redirect()-> to ("https://co.seekweb.com/ws?q=$termino");
    break;


    case 8: return redirect ()-> to ("https://yandex.com/search/?text=$termino");
    break;

    case 9: return redirect ()-> to ("https://www.facebook.com/search/top/?q=$termino");
    break;




}

}

}
