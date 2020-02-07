<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Storage;
use App\proveedor;
use App\origen_proveedor;
use App\proveedor_documento;

use App\tipo_proveedor;
use App\pais;
use App\region;



class clienteController extends Controller
{
    public function index(){
        //dd(1);
    
    //dd($proveedor);
       return view('cliente.index');
    }
    public function create(){
        $tipo=tipo_proveedor::all();
        $origen=origen_proveedor::all();
       return view('cliente.clienteCreate',['tipo'=>$tipo,'origen'=>$origen]);
    }

}
