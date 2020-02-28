<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    protected $table = 'persona';
    protected $primaryKey = 'PERSONA_id';
    protected $fillable = ['PERSONA_id','PERSONA_identificador','PERSONA_nombres','PERSONA_sexo','PERSONA_nacimiento','PERSONA_direccion','PROVEDOC_id','PERSONA_telefono','PERSONA_celular','SUCURSAL_id'];
}