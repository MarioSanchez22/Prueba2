<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class submenu extends Model
{
    protected $table = 'submenu';
    protected $primaryKey = 'SUBMENU_id';
    protected $fillable = ['SUBMENU_id','SUBMENU_descripcion','SUBMENU_icono','SUBMENU_ruta','MENU_id'];
    public $timestamps = false;
}
