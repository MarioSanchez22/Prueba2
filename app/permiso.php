<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permiso extends Model
{
    protected $table = 'permiso';
    protected $primaryKey = 'PERMISO_id';
    protected $fillable = ['PERMISO_id','PERMISO_estado','SUBMENU_id','id','PERMISO_descripcion','PERMISO_editar',
    'PERMISO_crear','PERMISO_eliminar'];

}
