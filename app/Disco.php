<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{
        //vvincular modelo atributo
        protected $table="album";
        //establecer la PK para la entidad (por defecto: id)
        protected $primaryKey ="AlbumId";

            //omitir campos de auditoria
            public $timestamps = false;

            //inverso de la relacion muchos a 1

            public function artista(){
                //belongsTo permite traer la relacion m a 1
                return $this->belongsTo('App\Artista' , 'ArtistId');
            }
}
