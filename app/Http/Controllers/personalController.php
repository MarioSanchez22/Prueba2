<?php

namespace App\Http\Controllers;

use App\empresa;
use App\rol;
use App\User;
use Illuminate\Http\Request;

class personalController extends Controller
{
    public function index(){
        $usuarios=User::all();
        $empresas=empresa::all();
        $roles=rol::all();
        return view('personal.index',['usuarios'=>$usuarios,'empresas'=>$empresas,'roles'=>$roles]);
    }
}
