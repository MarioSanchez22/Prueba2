<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marca extends Model
{
    protected $table = 'marca';
    protected $primaryKey = 'MARCA_id';
    protected $fillable = ['MARCA_id','MARCA_descripcion'];
    public $timestamps = false;
}
