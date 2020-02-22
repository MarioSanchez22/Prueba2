<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\region;

use App\tipo_proveedor;

class comprasController extends Controller
{
    //

   public function index(){
    $tipo=tipo_proveedor::all();
    $region=region::where('ubicacionpaisid','=',89)->get();
       return view('compras.Index',['tipo'=>$tipo,'region'=>$region]);
   }
}
