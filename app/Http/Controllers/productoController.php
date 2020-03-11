<?php
namespace App\Http\Controllers;
use App\producto;
use App\umedidas;
use App\categoria_producto;
use App\marca;
use App\origen_proveedor;
use Illuminate\Http\Request;

class productoController extends Controller
{
    public function index(){
        //dd(1);
    $productos=producto::all();
    //dd($proveedor);
       return view('productos.index',['productos'=>$productos]);
    }
    public function create()
    {
        $categorias=categoria_producto::all();
        $marcas=marca::all();
        $unidades=umedidas::all();
        $origenes=origen_proveedor::all();
        return view('productos.productoCreate',['categorias'=>$categorias,'marcas'=>$marcas,'unidades'=>$unidades,'origenes'=>$origenes]);
    }
    public function store(Request $request){
        $productoreg=new producto();
        $productoreg->PRO_codigo=$request->get('PRO_codigo');
        $productoreg->CATPRO_id=$request->get('CATPRO_id');
        $productoreg->PRO_estado='Activo';
        if($request->get('serie')!=null){
        $productoreg->PRO_serie=$request->get('serie');
        }
        else {
            $productoreg->PRO_serie=0;
        }
        $productoreg->PRO_nombre=$request->get('PRO_nombre');
        $productoreg->MARCA_id=$request->get('MARCA_id');
        $productoreg->PRO_modelo=$request->get('PRO_modelo');
        $productoreg->PRO_detalle=$request->get('detalle');
        $productoreg->UME_id=$request->get('UME_id');
        $productoreg->PRO_min=$request->get('PRO_min');
        $productoreg->PRO_max=$request->get('PRO_max');
        $productoreg->PRO_gcomprar=$request->get('PRO_gcomprar');
        $productoreg->PRO_gvender=$request->get('PRO_gvender');
        $productoreg-> PRO_estadoCrea=1;
        $productoreg->updated_at=null;
        $productoreg->save();
        return redirect(route('productosIndex'));
    }
    public function show($producto){
        $producto2=producto::find($producto);
        $marca=marca::where('MARCA_id','=',$producto2->MARCA_id)->first();
        $categoria=categoria_producto::where('CATPRO_id','=',$producto2->CATPRO_id)->first();
        $unidad=umedidas::where('UME_id','=',$producto2->UME_id)->first();

        return view('Productos.productoShow',['producto'=>$producto2,'categoria'=>$categoria,'marca'=>$marca,'unidad'=>$unidad ]);
    }
    public function edit($producto){
        $producto2=producto::find($producto);
        $categorias=categoria_producto::all();
        $marcas=marca::all();
        $unidades=umedidas::all();
        $origenes=origen_proveedor::all();
        return view('Productos.productoEdit',['producto'=>$producto2, 'categorias'=>$categorias,'marcas'=>$marcas,'unidades'=>$unidades,'origenes'=>$origenes]);
    }
    public function update($producto,Request $request){
        $productoreg=producto::find($producto);
        $productoreg->PRO_codigo=$request->get('PRO_codigo');
        $productoreg->CATPRO_id=$request->get('CATPRO_id');
        $productoreg->PRO_estado='Activo';
        if($request->get('serie')!=null){
            $productoreg->PRO_serie=$request->get('serie');
        }
        else {
            $productoreg->PRO_serie=0;
        }
        $productoreg->PRO_nombre=$request->get('PRO_nombre');
        $productoreg->MARCA_id=$request->get('MARCA_id');
        $productoreg->PRO_modelo=$request->get('PRO_modelo');
        $productoreg->PRO_detalle=$request->get('detalle');
        $productoreg->UME_id=$request->get('UME_id');
        $productoreg->PRO_min=$request->get('PRO_min');
        $productoreg->PRO_max=$request->get('PRO_max');
        $productoreg->PRO_gcomprar=$request->get('PRO_gcomprar');
        $productoreg->PRO_gvender=$request->get('PRO_gvender');
        $productoreg->updated_at=NOW();
        $productoreg->save();
        return redirect(route('productosIndex'));
    }

    public function darBaja(Request $request ){
        $producto2=producto::find($request->get('PRO_id'));
        $producto2->PRO_estadoCrea=0;
        $producto2->save();
        return $producto2->PRO_id;
    }

    public function darAlta(Request $request ){
        $producto2=producto::find($request->get('PRO_id'));
        $producto2->PRO_estadoCrea=1;
        $producto2->save();
        return $producto2->PRO_id;
    }
}
