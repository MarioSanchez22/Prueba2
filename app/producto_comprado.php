<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto_comprado extends Model
{
    protected $table = 'producto_comprado';
    protected $primaryKey = 'PROCO_id';
    protected $fillable = ['PROCO_id','PRO_id',	'PRO_garantia','PRO_costo',	'PRO_cantidad','USER_id','PROV_id','PROCO_factura','PROCO_facturaF','PROCO_gria','	PROCO_griaF','PROCO_igv'];

}
