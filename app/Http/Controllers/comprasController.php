<?php

namespace App\Http\Controllers;

use App\producto;
use Illuminate\Http\Request;
use App\region;
use App\proveedor;
use App\tipo_proveedor;
use App\categoria_producto;
use App\marca;
use App\umedidas;
class comprasController extends Controller
{
    //

   public function index(){
    $tipo=tipo_proveedor::all();
    $proveedor=proveedor::all();
    $producto=producto::all();
    $region=region::where('ubicacionpaisid','=',89)->get();
       return view('compras.Index',['tipo'=>$tipo,'region'=>$region,'proveedor'=>$proveedor,'producto'=>$producto]);
   }
   public function showp(Request $request){

    $prove=proveedor::find($request->get('prov'));
    return $prove;
}
public function showart(Request $request){

    $producto=producto::find($request->get('producto'));
    $categoria=categoria_producto::where('CATPRO_id','=',$producto->CATPRO_id)->first();
    $marca=marca::where('MARCA_id','=',$producto->MARCA_id)->first();
    $medida=umedidas::where('UME_id','=',$producto->UME_id)->first();
    return [$producto,$categoria,$marca,$medida];
}
}
