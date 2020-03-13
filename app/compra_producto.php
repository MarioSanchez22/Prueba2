<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compra_producto extends Model
{
    protected $table = 'compra_producto';
    protected $primaryKey = 'COMPRO_id';
    protected $fillable = ['COMPRO_diasC','PROVE_id','COMPRO_factura','COMPRO_facturaF','COMPRO_gria','COMPRO_griaF','COMPRO_moneda','COMPRO_almacen','COMPRO_igv','COMPRO_subtotal','COMPRO_igvSub','COMPRO_total','USER_id'];
}
