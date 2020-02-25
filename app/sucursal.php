<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sucursal extends Model
{
    protected $table = 'sucursal';
    protected $primaryKey = 'SUCURSAL_id';
    protected $fillable = ['SUCURSAL_id','SUCURSAL_nombre','EMPRESA_id'];
}
