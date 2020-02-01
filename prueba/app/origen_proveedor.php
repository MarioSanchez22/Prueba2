<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class origen_proveedor extends Model
{
    protected $table = 'origen_proveedor';
    protected $primaryKey = 'ORIPROVE_id';
    protected $fillable = ['ORIPROVE_id','ORIPROVE_descripcion'];
    public $timestamps = false;
}
