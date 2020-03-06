<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class empresa extends Model
{
    protected $table = 'empresa';
    protected $primaryKey = 'EMPRESA_id';
    protected $fillable = ['EMPRESA_id','EMPRESA_nombre','EMPRESA_comercial','EMPRESA_fecha_apertura','EMPRESA_descripcion','EMPRESA_ruc','	EMPRESA_certificado_digital','EMPRESA_sunat_clave','EMPRESA_sunat_usuario'];
}
