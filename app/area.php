<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    protected $table = 'area';
    protected $primaryKey = 'AREA_id';
    protected $fillable = ['AREA_id','AREA_descripcion','AREA_estado','EMPRESA_id'];
}
