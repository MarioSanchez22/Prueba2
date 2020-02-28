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
   $categoriap=categoria_producto::all();
   $marcap=marca::all();
   $umedidasp=umedidas::all();
    $region=region::where('ubicacionpaisid','=',89)->get();
       return view('compras.Index',['tipo'=>$tipo,'region'=>$region,'proveedor'=>$proveedor,'producto'=>$producto,'categoria_pr'=>$categoriap,'marcap'=>$marcap,'umedidasp'=>$umedidasp]);
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
public function rproductostore(Request $request){
    $productoreg=new producto();
    $productoreg->PRO_codigo=$request->get('codigo');
    $productoreg->CATPRO_id=$request->get('categoria');
    $productoreg->PRO_estado='Activo';
    $productoreg->PRO_serie=$request->get('serie');
    $productoreg->PRO_nombre=$request->get('nombre');
    $productoreg->MARCA_id=$request->get('marca');
    $productoreg->PRO_modelo=$request->get('modelo');
    $productoreg->UME_id=$request->get('unidad');
    $productoreg->PRO_min=$request->get('gmin');
    $productoreg->PRO_max=$request->get('gmax');
    $productoreg->PRO_gcomprar=$request->get('dcomprar');
    $productoreg->PRO_gvender=$request->get('dvender');
   
    $productoreg->save();

   
}
}
