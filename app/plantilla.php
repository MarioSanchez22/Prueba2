<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plantilla extends Model
{
    protected $table = 'plantilla';
    protected $primaryKey = 'PLANTILLA_id';
    protected $fillable = ['PLANTILLA_id','PLANTILLA_estado','SUBMENU_id','ROL_id','PLANTILLA_editar',
    'PLANTILLA_crear','PLANTILLA_eliminar'];
}
