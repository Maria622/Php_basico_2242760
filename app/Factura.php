<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table="invoice";
    //establecer la PK para la entidad(por defecto: id)
    protected $primaryKey = "InvoiceId";
    //Omitir campos de auditoria
    public $timestamps = false;



//Relacion M:M entre factura y canciones

public function canciones(){
    //relacion m a m;belongstomany
    //parametros: 1. Modelo  a relacionar
    //2.Nombre de la tabla intermedia
    //3.Fk del presente modelo en la tabla pivot
    //4.la clave foranea de la tabal relacionada en la tabal pivot
    return $this->belongsToMany('App\Cancion', 'invoiceline', 'InvoiceId', 'TrackId');

}


}
