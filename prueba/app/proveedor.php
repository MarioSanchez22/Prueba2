<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $table = 'proveedor';
    protected $primaryKey = 'PROVE_id';
    protected $fillable = ['PROVE_id','PROVE_ruc','PROVE_razon_comercial','PROVE_razon_social',
    'PROVE_direccion','PROVE_email','PROVE_telefono','PROVE_etiqueta','PROVE_dni','PROVE_estado',
    'PROVE_dias_credito','PROVE_origen','PROVE_web','PROVE_region','PROVE_pais','TIPPROVE_id',
    'PROVEDOC_descripcion','PROVEDOC_descripcion'];
}  

