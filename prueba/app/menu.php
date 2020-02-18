<?php

    namespace App;
    use Illuminate\Database\Eloquent\Model;
    class menu extends Model
    {   protected $table = 'menu';
        protected $primaryKey = 'MENU_id';
        protected $fillable = ['MENU_id','MENU_descripcion','MENU_icono','MENU_ruta'];
        public $timestamps = false;
    }
