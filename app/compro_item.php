<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compro_item extends Model
{
    protected $table = 'compro_item';
    protected $primaryKey = 'COMPROI_id';
    protected $fillable = ['PRO_id','COMPROI_garantia','COMPROI_costo','COMPROI_cantidad','COMPRO_id','COMPROI_precio1','COMPROI_precio2','COMPROI_precio3'];
}
