<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Storage;
use App\proveedor;
use App\origen_proveedor;
use App\proveedor_documento;
use App\proveedor_contacto;
use App\proveedorExpediente;
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
    public function buscar(Request $request){
        //dd(1);
     dd($request);
    }




    public function create(){
        $tipo=tipo_proveedor::all();
        $origen=origen_proveedor::all();
       return view('proveedor.proveedorCreate',['tipo'=>$tipo,'origen'=>$origen]);
    }
    public function store(Request $request){
        //dd($request);
    $proveedor=new proveedor();

      $proveedor->fill($request->only('PROVE_ruc','PROVE_razon_social',
      'PROVE_razon_comercial','PROVE_direccion','PROVE_email',
      'PROVE_telefono','PROVE_etiqueta','PROVE_dni','PROVE_dias_credito',
      'PROVE_web','TIPPROVE_id','PROVEDOC_descripcion'));
      /*dd($proveedor->fill($request->only('PROVE_ruc','PROVE_razon_social',
      'PROVE_razon_comercial','PROVE_direccion','PROVE_email',
      'PROVE_telefono','PROVE_etiqueta','PROVE_dni','PROVE_dias_credito',
      'PROVE_web','TIPPROVE_id','PROVEDOC_descripcion')));*/
      if($request->get('PROVEDOC_descripcion')!=null){
          $documento=proveedor_documento::where('PROVEDOC_id','=',$request->get('PROVEDOC_descripcion'))->get();

          $proveedor->PROVEDOC_descripcion=$documento[0]->PROVEDOC_descripcion;
      }
      $pais=pais::where('id','=',$request->get('PROVE_pais'))->get();
      $region=region::where('id','=',$request->get('PROVE_region'))->get();
      $origen=origen_proveedor::where('ORIPROVE_id','=',$request->get('PROVE_origen'))->get();
//dd($origen);
        $proveedor->PROVE_pais=$pais[0]->paisnombre;
        $proveedor->PROVE_region=$region[0]->estadonombre;
        $proveedor->PROVE_origen=$origen[0]->ORIPROVE_descripcion;
        $proveedor->PROVE_estado=1;
        $proveedor->updated_at=null;
        $proveedor->save();
        if ($request->hasFile('file')) {
            $expediente=new proveedorExpediente();
            $expedienteFile= $request->file('file');
            $expedienteFile_route=time().'_'.$expedienteFile->getClientOriginalName();
            $expedienteFile_extension=$expedienteFile->getClientOriginalExtension();
            Storage::disk('imgExpedientes')->put($expedienteFile_route, file_get_contents($expedienteFile->getRealPath()));
            $expediente->PROEXP_descripcion=$request->get('PROEXP_descripcion');
            $expediente->PROEXP_ruta=$expedienteFile_route;
            $expediente->PROEXP_extension=$expedienteFile_extension;
            $expediente->PROVE_id=$proveedor->PROVE_id;
            $expediente->USER_id=1;
            $expediente->updated_at=null;
            $expediente->save();
        }
        $telefono=$request->get('PROVECONT_telefono');
        $cargo=$request->get('PROVECONT_descripcion');
        $nombre=$request->get('PROVECONT_nombre');
        $email=$request->get('PROVECONT_email');

        //dd($cargo[0]);
        if($request->get('PROVECONT_telefono')!=null){
            for ($i=0; $i < sizeof($telefono) ; $i++) {
                $contacto=new proveedor_contacto();
                $contacto->PROVECONT_descripcion=$cargo[$i];
                $contacto->PROVECONT_nombre=$nombre[$i];
                $contacto->PROVECONT_telefono=$telefono[$i];
                $contacto->PROVECONT_email=$email[$i];
                $contacto->PROVE_id=$proveedor->PROVE_id;
                $contacto->save();
            }
        }
//dd($proveedor);
$proveedor2=proveedor::all();
           return view('proveedor.index',['proveedor'=>$proveedor2]);
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

           // $proveedor=proveedor::all();
            //dd($id);



    public function datos($id){

        $documento=proveedor_documento::all();

        return view('proveedor.datosProv',['tipoPr'=>$id,'documento'=>$documento]);
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
