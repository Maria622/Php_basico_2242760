<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

  //vvincular modelo atributo
  protected $table="customer";
  //establecer la PK para la entidad (por defecto: id)
  protected $primaryKey ="CustomerId";

      //omitir campos de auditoria
      public $timestamps = false;


}
//find () : selecciona una instancia(registro) por PK o id
//puede seleccionar varias instancias
//where(): selecciona segun el valor de un atributo: parametros: nombre atributo, operador, valor a buscar
//orwhere(): emula el operador or en un multi where
//select(): establecer los atributos a consultar cara todas las instancias que retorne la consulta
//get se utiliza si trae varios registros
//orderby: ordena por atributo, ascendente(por defecto), o descendente
//wherebetween(filtro entre 2 valores)
