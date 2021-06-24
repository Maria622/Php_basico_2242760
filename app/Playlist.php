<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{

    protected $table="playlist";
    //establecer la PK para la entidad (por defecto: id)
    protected $primaryKey ="PlaylistId";

        //omitir campos de auditoria
        public $timestamps = false;

public function canciones(){
    //metodo: belongsToMany
    //1.modelo destino
    //2. tabla pivote
    //3.FK tabla origen
    //4. FK tabla destino
    return $this->belongsToMany('App\Cancion',
                                 'playlisttrack',
                                 'PlaylistId',
                                 'TrackId',
);
}

}
