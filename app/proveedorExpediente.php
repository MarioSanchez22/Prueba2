<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedorExpediente extends Model
{
    protected $table = 'proveedor_exped';
    protected $primaryKey = 'PROEXP_id';
    protected $fillable = ['PROEXP_id','PROEXP_descripcion','PROEXP_ruta','PROEXP_observacion','PROVE_id','USER_id',
    'PROEXP_extension'];
 
}
