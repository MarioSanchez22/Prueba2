<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente_contacto extends Model
{
    //
    protected $table = 'cliente_contacto';
    protected $primaryKey = 'CLIECON_id';
    protected $fillable = ['CLIECON_id','CLIECON_descripcion','CLIECON_nombre','CLIECON_telefono',
    'CLIECON_email','CLIE_id'];
}
