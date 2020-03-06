<?php

namespace App\Http\Controllers;

use App\area;
use App\empresa;
use App\sucursal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class empresaController extends Controller
{
    public function show(){
        $empresa=empresa::where('EMPRESA_id','=',Auth::user()->EMPRESA_id)->first();
        $sucursales=sucursal::where('EMPRESA_id','=',$empresa->EMPRESA_id)->get();
        $areas=area::where('EMPRESA_id','=',$empresa->EMPRESA_id)->get();

        $apertura=strtotime($empresa->EMPRESA_fecha_apertura);
        $aniversario=getdate()['year']-date("Y",$apertura);

        $f1 = explode("-", $empresa->EMPRESA_fecha_apertura);
        $fechaI = $f1[2]."/".$f1[1]."/".$f1[0];



        return view('empresas.show',['empresa'=>$empresa,'sucursales'=>$sucursales,'areas'=>$areas,'aniversario'=>$aniversario,'fechaApertura'=>$fechaI]);
    }

    public function sucursalCreate(Request $request){
        $sucursal=new sucursal();
        $sucursal->SUCURSAL_nombre=$request->get('SUCURSAL_nombre');
        $sucursal->SUCURSAL_descripcion=$request->get('SUCURSAL_descripcion');
        $sucursal->EMPRESA_id=$request->get('EMPRESA_id');
        $sucursal->save();
        return 0;
    }
    public function areaCreate(Request $request){
        $area=new area();
        $area->AREA_descripcion=$request->get('AREA_nombre');
        $area->AREA_estado=1;
        $area->EMPRESA_id=$request->get('EMPRESA_id');
        $area->updated_at=null;
        $area->save();
        return 0;
    }

    public function update($empresa, Request $request){

        $area=$request->get('AREA_id');
        $sucursal=$request->get('SUCURSAL_id');
        $AREA_descripcion=$request->get('AREA_descripcion');
        $SUCURSAL_nombre=$request->get('SUCURSAL_nombre');
        $SUCURSAL_descripcion=$request->get('SUCURSAL_descripcion');
        $empresa2=empresa::find($empresa);
        $empresa2->EMPRESA_comercial=$request->get('EMPRESA_comercial');
        $empresa2->EMPRESA_descripcion=$request->get('EMPRESA_descripcion');

            $f1 = explode("/", $request->get('EMPRESA_fecha_apertura'));
            $fechaI = $f1[2]."-".$f1[1]."-".$f1[0];

        $empresa2->EMPRESA_fecha_apertura=$fechaI;
        $empresa2->save();
        for ($i=0; $i < sizeof($area); $i++) {
            $area2=area::find($area[$i]);
            $area2->AREA_descripcion=$AREA_descripcion[$i];
            $area2->save();
        }
        for ($j=0; $j < sizeof($sucursal); $j++) {
            $sucursal2=sucursal::find($sucursal[$j]);
            $sucursal2->SUCURSAL_nombre=$SUCURSAL_nombre[$j];
            $sucursal2->SUCURSAL_descripcion=$SUCURSAL_descripcion[$j];
            $sucursal2->save();
        }
        return back();
    }


}
