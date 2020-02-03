<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedor;
use App\origen_proveedor;
use App\tipo_proveedor;
use App\pais;
use App\region;
class proveedorController extends Controller
{
    public function index(){
        //dd(1);
    $proveedor=proveedor::all();
    //dd($proveedor);
       return view('proveedor.index',['proveedor'=>$proveedor]);
    }
    public function create(){
        $tipo=tipo_proveedor::all();
        $origen=origen_proveedor::all();
       return view('proveedor.proveedorCreate',['tipo'=>$tipo,'origen'=>$origen]);
    }
    public function store(Request $request){
    $proveedor=new proveedor();
      $proveedor->fill($request->only('PROVE_ruc','PROVE_razon_social',
      'PROVE_razon_comercial','PROVE_direccion','PROVE_email',
      'PROVE_telefono','PROVE_etiqueta','PROVE_dni','PROVE_dias_credito',
      'PROVE_etiqueta','PROVE_web'));
dd($request);
      /*dd($proveedor->fill($request->only('PROVE_ruc','PROVE_web','PROVE_razon_social',
      'PROVE_razon_comercial','PROVE_direccion','PROVE_email',
      'PROVE_telefono','PROVE_etiqueta','PROVE_dni','PROVE_dias_credito')));*/
      $proveedor->PROVE_estado=1;
      $proveedor->updated_at=null;
      $proveedor->save();
        //dd($proveedor);
           return view('proveedor.index',['proveedor'=>$proveedor]);
        }


    public function sunat($id){
            // $proveedor=proveedor::all();      
        return view('sunat.consulta',['nruc'=>$id]);
    }
    public function datos($id){
        return view('proveedor.datosProv',['tipoPr'=>$id]);
    }
        public function origen($id){
            $pais=pais::all();
            return view('proveedor.origen',['origen'=>$id,'pais'=>$pais]);
        }
        public function pais($id){
            $region=region::where('ubicacionpaisid','=',$id)->get();
            //dd($region);

            return view('proveedor.pais',['region'=>$region]);
        }
}
