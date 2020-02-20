<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria_producto extends Model
{
    protected $table = 'categoria_producto';
    protected $primaryKey = 'CATPRO_id';
    protected $fillable = ['CATPRO_id','CATPRO_descripcion','CATPRO_precio1','CATPRO_precio2','CATPRO_precio3','CATPRO_descuento'];
    
}
