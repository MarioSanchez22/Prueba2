<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
   protected $table = 'producto';
    protected $primaryKey = 'PRO_id';
    protected $fillable = ['PRO_id','CATPRO_id','MARCA_id','PRO_nombre',
    'PRO_codigo','PRO_modelo','PRO_detalle', 'UME_id','PRO_estado','PRO_serie',
    'PRO_min','PRO_max','PRO_gcomprar','PRO_gvender',' PRO_estadoCrea'];
}
