<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente_direccion extends Model
{
    //
    protected $table = 'cliente_direccion';
    protected $primaryKey = 'CLIEDIRE_id';
    protected $fillable = ['CLIEDIRE_id','CLIEDIRE_descripcion','CLIE_id'];
}
