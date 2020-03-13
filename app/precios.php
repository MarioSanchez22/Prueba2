<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class precios extends Model
{
    //
    protected $table = 'precio';
    protected $primaryKey = 'PREC_id';
    protected $fillable = ['MARCA_id','PREC_precio1','PREC_precio2','PREC_precio3','PRO_id','USER_id'];
    public $timestamps = false;
}
