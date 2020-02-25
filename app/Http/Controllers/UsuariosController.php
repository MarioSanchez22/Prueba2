<?php

namespace App\Http\Controllers;

use App\origen_proveedor;
use App\proveedor_documento;
use App\rol;
use App\tipo_proveedor;
use App\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');// redirecciona si no esta logueado
    }

    public function index()
    {
        //return view('usuarios');
        $usuarios =User::all();
        return view('usuarios.index',['usuarios'=>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documento=proveedor_documento::all();
        $tipo=tipo_proveedor::all();
        $rol=rol::all();

        return view('usuarios.usuarioCreate',['tipo'=>$tipo,'documento'=>$documento,'rol'=>$rol]);
    }

}
