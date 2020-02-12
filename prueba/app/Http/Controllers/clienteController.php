<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Storage;
use App\tipo_proveedor;
use App\region;
use App\cliente;
use App\cliente_contacto;
use App\cliente_direccion;
use App\proveedor_documento;

class clienteController extends Controller
{
    public function index(){
        //dd(1);
    
    //dd($proveedor);

    $cliente=cliente::all();
    //dd($proveedor);
       return view('cliente.index',['cliente'=>$cliente]);
       return view('cliente.index');
    }
    public function create(){
        $tipo=tipo_proveedor::all();
       
        $region=region::where('ubicacionpaisid','=',89)->get();
       return view('cliente.clienteCreate',['tipo'=>$tipo,'region'=>$region]);
    }
    public function datosCliente($id){
        $documento=proveedor_documento::all();
        
        return view('cliente.datosClie',['tipoPr'=>$id,'documento'=>$documento]);
    }
}
