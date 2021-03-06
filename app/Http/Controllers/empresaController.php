<?php

namespace App\Http\Controllers;

use App\area;
use App\empresa;
use App\plantilla;
use App\rol;
use App\sucursal;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class empresaController extends Controller
{
    public function index(){
       $empresas=empresa::all();
       return view('empresas.index',['empresas'=>$empresas]);
    }

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
    public function store(Request $request){
        $empresa= new empresa();
        $empresa->EMPRESA_ruc= $request->get('EMPRESA_ruc');
        $empresa->EMPRESA_nombre= $request->get('EMPRESA_nombre');
        $empresa->EMPRESA_comercial= $request->get('EMPRESA_comercial');
        $empresa->EMPRESA_direccion= $request->get('EMPRESA_direccion');

        $f1 = explode("/", $request->get('EMPRESA_fecha_apertura'));
        $fechaI = $f1[2]."-".$f1[1]."-".$f1[0];
        $empresa->EMPRESA_fecha_apertura=$fechaI;

        $empresa->EMPRESA_sunat_usuario= $request->get('EMPRESA_sunat_usuario');
        $empresa->EMPRESA_sunat_clave= $request->get('EMPRESA_sunat_clave');
        $empresa->EMPRESA_certificado_digital= $request->get('EMPRESA_certificado_digital');
        $empresa->EMPRESA_descripcion= $request->get('EMPRESA_descripcion');
        $empresa->id= Auth::user()->id;
        $empresa->updated_at=null;
        $empresa->save();

        //Usuario Demo, importante para la creacion de empresas
        $demo=User::find(23);
        // Se busca la optimizacion de la creacion de empresas/ leer el proceso den el cuaderno

        $demo->EMPRESA_id=$empresa->EMPRESA_id;
        $demo->save();
        $empresas=empresa::all();
        return view('empresas._empresaNueva',['empresas'=>$empresas]);
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
        if ($area!=null) {
            for ($i=0; $i < sizeof($area); $i++) {
                $area2=area::find($area[$i]);
                $area2->AREA_descripcion=$AREA_descripcion[$i];
                $area2->save();
            }
        }
        if ($sucursal!=null) {
            for ($j=0; $j < sizeof($sucursal); $j++) {
                $sucursal2=sucursal::find($sucursal[$j]);
                $sucursal2->SUCURSAL_nombre=$SUCURSAL_nombre[$j];
                $sucursal2->SUCURSAL_descripcion=$SUCURSAL_descripcion[$j];
                $sucursal2->save();
            }
        }
        return back();
    }
}
