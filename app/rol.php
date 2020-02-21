<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{   protected $table = 'rol';
    protected $primaryKey = 'ROL_id';
    protected $fillable = ['ROL_id','ROL_descripcion','ROL_estado'];

}
