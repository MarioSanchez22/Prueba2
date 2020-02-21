<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor_cuenta extends Model
{
    protected $table = 'proveedor_cuenta';
    protected $primaryKey = 'PROVECU_id';
    protected $fillable = ['PROVECU_id','PROVECU_beneficiario','PROVECU_cuenta','PROVECU_observacion','PROVE_id'];

}
