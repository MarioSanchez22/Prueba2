<?php

namespace App\Http\Controllers;

use App\producto;
use Illuminate\Http\Request;
use App\region;
use App\producto_comprado;
use App\proveedor;
use App\tipo_proveedor;
use App\categoria_producto;
use App\compra_producto;
use App\compro_item;
use App\marca;
use App\umedidas;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class comprasController extends Controller
{
    //
    public function prod_id(){

        $last_producto = producto::all()->last();
        $id_ultimo= $last_producto->PRO_id +1;


        return $id_ultimo;
    }
   public function index(){
    $tipo=tipo_proveedor::all();
    $proveedor=proveedor::all();
    $producto=producto::all();
   $categoriap=categoria_producto::all();
   $marcap=marca::all();
   $umedidasp=umedidas::all();
   $productocom=producto_comprado::all();
    $region=region::where('ubicacionpaisid','=',89)->get();
    $id_ultimo=$this->prod_id();


       return view('compras.Index',['tipo'=>$tipo,'region'=>$region,'proveedor'=>$proveedor,'producto'=>$producto,'categoria_pr'=>$categoriap,'marcap'=>$marcap,'umedidasp'=>$umedidasp,'ultimoid'=>$id_ultimo,'productoCom'=>$productocom]);
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
    $productoreg->PRO_detalle=$request->get('detalle');
    $productoreg->UME_id=$request->get('unidad');
    $productoreg->PRO_min=$request->get('gmin');
    $productoreg->PRO_max=$request->get('gmax');
    $productoreg->PRO_gcomprar=$request->get('dcomprar');
    $productoreg->PRO_gvender=$request->get('dvender');
    $productoreg-> PRO_estadoCrea=1;

    $productoreg->save();
    return($productoreg);

}
public function rproductoCstore(Request $request){
    $productoregC=new producto_comprado();
    $productoregC->PRO_id=$request->get('idprod');
    $productoregC->PRO_garantia=$request->get('garantia');
    $productoregC->PRO_costo=$request->get('costo');
    $productoregC->PRO_cantidad=$request->get('cantidad');
    $productoregC->USER_id=Auth::user()->id;

    $productoregC->save();
    return($productoregC);
}
/* public function rproductoCstore(Request $request){
{
    Schema::create('temp_message', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('idprod');
        $table->integer('garantia');
        $table->integer('costo');
        $table->integer('cantidad');

        $table->timestamps();
        $table->temporary();
    });

    DB::table('temp_message')->insert(['idprod'=>$request->get('idprod'),'garantia'=>$request->get('garantia'),'costo'=>$request->get('costo'),'cantidad'=>$request->get('cantidad')]);

    $data = DB::table('temp_message')->get();

        DD($data);
    Schema::drop('temp_message');

    return $data;
    }
} */
public function comprahecha(Request $request ){
        $compra_producto=new compra_producto();
        $compra_producto->COMPRO_diasC=$request->get('COMPRO_diasC');
        $compra_producto->PROVE_id=$request->get('PROVE_id');

        $compra_producto->COMPRO_factura=$request->get('COMPRO_factura');
            $fecha2=$request->get('COMPRO_facturaF');
            $f2 = explode("/", $fecha2);
        $compra_producto->COMPRO_facturaF = $f2[2]."-".$f2[1]."-".$f2[0];

        $compra_producto->COMPRO_gria=$request->get('COMPRO_gria');
            $fecha1=$request->get('COMPRO_griaF');
            $f1 = explode("/", $fecha1);
        $compra_producto->COMPRO_griaF = $f1[2]."-".$f1[1]."-".$f1[0];

        $compra_producto->COMPRO_almacen=$request->get('COMPRO_almacen');
        $compra_producto->COMPRO_moneda=$request->get('COMPRO_moneda');
        $compra_producto->COMPRO_subtotal=$request->get('COMPRO_subtotal');
        $compra_producto->COMPRO_igv=$request->get('COMPRO_igv');
        $compra_producto->COMPRO_total=$request->get('COMPRO_total');
        $compra_producto->USER_id=Auth::user()->id;
        $compra_producto->updated_at=null;
        $compra_producto->save();
        $compro_fantasma=producto_comprado::where('USER_id','=',Auth::user()->id)->get();
        foreach($compro_fantasma as $compro_fantasmas )
        {   $compro_item=new compro_item();
            $compra_elimina=producto_comprado::find($compro_fantasmas->PROCO_id);
            $compro_item->PRO_id=$compro_fantasmas->PRO_id;
            $compro_item->COMPROI_garantia=$compro_fantasmas->PRO_garantia;
            $compro_item->COMPROI_costo=$compro_fantasmas->PRO_costo;
            $compro_item->COMPROI_cantidad=$compro_fantasmas->PRO_cantidad;
            $compro_item->COMPRO_id=$compra_producto->COMPRO_id;
            $compro_item->updated_at=null;
            $compro_item->save();
            $compra_elimina->delete();
        }
        return back();
     }
}
