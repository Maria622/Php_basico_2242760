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



//definir relacion artista1 - M albums

public function discos(){
//hasmany: parametros
//1.Modelo a relacionar
//2. Fk del modelo papa
//3.La clave primaria del modelo hijo
return $this-> hasMany('App\Disco', 'ArtistId' );

}

//definir la relacion de multitabla entre artista y sus canciones
//artista y sus canciones(tracks)

public function canciones(){
//hasManyThrough: parametros :
//1. modelo nieto
//2. modelo papa
//3. FK del abuelo en el papa
//4. FK del papaenelnieto
//5.clave primaria del abuelo
//6.la clave primria del papa
return $this->hasManyThrough('App\Cancion',
                            'App\Disco',
                             'ArtistId',
                            'AlbumId',
                             'ArtistId',
                             'AlbumId');

}


}
