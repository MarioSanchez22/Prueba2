<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria_producto extends Model
{
    protected $table = 'categoria_producto';
    protected $primaryKey = 'CATPRO_id';
    protected $fillable = ['CATPRO_id','CATPRO_descripcion'];
    public $timestamps = false;
}
