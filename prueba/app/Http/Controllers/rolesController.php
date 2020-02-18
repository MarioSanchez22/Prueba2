<?php

namespace App\Http\Controllers;

use App\rol;
use App\menu;
use App\permiso;
use App\rol_usuario;
use App\submenu;
use App\empresa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;

class rolesController extends Controller
{
    public function index(){
        $rol=rol::all();
        $usuario=User::all();
        $permiso=permiso::all();
        $menu=menu::all();
        $submenu=submenu::all();

    return view('roles.index',['rol'=>$rol,'permiso'=>$permiso, 'usuario'=>$usuario,
    'menu'=>$menu,'submenu'=>$submenu]);
    }

    public function create(){
        $rol=rol::all();
        $menu=menu::all();
        $submenu=submenu::all();
       return view('roles.rolCreate',['rol'=>$rol,'menu'=>$menu,'submenu'=>$submenu]);
    }
    public function store(Request $request){
        $rolUsuario=new rol_usuario();
        $rolUsuario->ROL_id=$request->get('ROL_id');


    }
}
