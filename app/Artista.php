<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    //vvincular modelo atributo
    protected $table="artist";
//establecer la PK para la entidad (por defecto: id)
protected $primaryKey ="ArtistId";

    //omitir campos de auditoria
    public $timestamps = false;

}
