<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class empresa extends Model
{
    protected $table = 'EMPRESA';
    protected $primaryKey = 'EMPRESA_id';
    protected $fillable = ['EMPRESA_id','EMPRESA_nombre','EMPRESA_descripcion'];
    public $timestamps = false;
}
