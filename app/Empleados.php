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
}
