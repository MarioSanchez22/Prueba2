<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $table = 'empleado';
    protected $primaryKey = 'EMPLEADO_id';
    protected $fillable = ['EMPLEADO_id','EMPLEADO_cargo','AREA_id','PERSONA_id','EMPLEADO_fecha_incorporacion','SUCURSAL_id'];
}
