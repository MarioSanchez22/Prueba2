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
    public function store(){
        $proveedor=proveedor::all();
        //dd($proveedor);
           return view('proveedor.index',['proveedor'=>$proveedor]);
        }
        public function sunat(Request $request){
            if ($request->ajax()) {
                $ruc=$request->get('ruc');
                $ruta = file_get_contents("https://api.sunat.cloud/ruc/".$ruc);

                 $info = json_decode($ruta, true);

    if($ruta==='[]' || $info['fecha_inscripcion']==='--'){
        $datos = array(0 => 'nada');
        echo json_encode($datos);
    }
                    $datos = array(
                        0 => $info['ruc'],
                        1 => $info['razon_social'],
                        2 => date("d/m/Y", strtotime($info['fecha_actividad'])),
                        3 => $info['contribuyente_condicion'],
                        4 => $info['contribuyente_tipo'],
                        5 => $info['contribuyente_estado'],
                        6 => date("d/m/Y", strtotime($info['fecha_inscripcion'])),
                        7 => $info['domicilio_fiscal'],
                        8 => date("d/m/Y", strtotime($info['emision_electronica']))
                    );
                        echo json_encode($datos);

            }

             }
        public function datos($id){
           // $proveedor=proveedor::all();
            //dd($id);

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
