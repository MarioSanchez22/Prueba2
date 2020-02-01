<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class region extends Model
{
    protected $table = 'estado';
    protected $primaryKey = 'id';
    protected $fillable = ['id','ubicacionpaisid','estadonombre'];
}
