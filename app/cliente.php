<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'CLIE_id';
    protected $fillable = ['CLIE_id_id','CLIE_ruc','CLIE_razon_social','CLIE_razon_comercial',
    'CLIE_email','CLIE_telefono','PROVE_telefono','CLIE_dni','CLIE_estado','CLIE_region',
    'USER_id','TIPPROVE_id','EMPLE_id','PROVEDOC_descripcion'];
}
