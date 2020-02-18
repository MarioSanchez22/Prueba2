<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pais extends Model
{
    protected $table = 'pais';
    protected $primaryKey = 'id';
    protected $fillable = ['id','paisnombre'];
}
