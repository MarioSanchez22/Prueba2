<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol_usuario extends Model
{   protected $table = 'rol_usuario';
    protected $primaryKey = 'ROLUSU_id';
    protected $fillable = ['ROL_id','USU_id','EMPRESA_id','ROLUSU_estado','ROLUSU_descripcion','created_at','updated_at'];
}
