<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor_documento extends Model
{
    protected $table = 'proveedor_documento';
    protected $primaryKey = 'PROVEDOC_id';
    protected $fillable = ['PROVEDOC_id','PROVEDOC_descripcion'];
    public $timestamps = false;
}
