<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
      //vvincular modelo atributo
      protected $table="employee";
      //establecer la PK para la entidad (por defecto: id)
      protected $primaryKey ="EmployeeId";

          //omitir campos de auditoria
          public $timestamps = false;




        //relacion 1 - m cliente
        public function clientes(){

            return $this->hasMany('App\Customer' , 'SupportRepId');
        }


// [...] relacion 1 - M con facturas (a traves del cliente )

public function facturas (){
    return $this->hasManyThrough('App\Factura',
                                  'App\Customer',
                                  'SupportRepId',//clave forane del abuelo en el papà
                                  'CustomerId',
                                  'EmployeeId',
                                  'CustomerId'
                                );
}


        }

