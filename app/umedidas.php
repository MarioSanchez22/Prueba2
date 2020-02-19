<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class umedidas extends Model
{

    protected $table = 'umedidas';
    protected $primaryKey = 'UME_id';
    protected $fillable = ['UME_id','UME_descripcion','UME_abreviatura'];


}
