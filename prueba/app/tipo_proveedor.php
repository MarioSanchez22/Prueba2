<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_proveedor extends Model
{
    protected $table = 'tipo_proveedor';
    protected $primaryKey = 'TIPPROVE_id';
    protected $fillable = ['TIPPROVE_id','TIPPROVE_descripcion'];
    public $timestamps = false;
}
