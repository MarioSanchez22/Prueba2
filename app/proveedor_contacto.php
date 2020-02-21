<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor_contacto extends Model
{
    protected $table = 'proveedor_contacto';
    protected $primaryKey = 'PROVECONT_id';
    protected $fillable = ['PROVECONT_id','PROVECONT_descripcion','PROVECONT_nombre','PROVECONT_telefono','PROVECONT_email','PROVE_id','PROVECONT_etiqueta','USER_id'];

}
