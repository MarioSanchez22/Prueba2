<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'PRO_id';
    protected $fillable = ['PRO_id','PRO_nombre','PRO_costo','PRO_venta1','PRO_venta2','PRO_venta3'];
}
