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
use App\proveedor_cuenta;
use App\region;
class proveedorController extends Controller
{
    public function index(){
        //dd(1);
    $proveedor=proveedor::all();
    //dd($proveedor);
       return view('proveedor.index',['proveedor'=>$proveedor]);
    }
    public function buscar($ruc2,$razon2,$etiqueta2){
        $ruc=$ruc2;
        $razon=$razon2;
        $etiqueta=$etiqueta2;

        if($ruc=='0'){
            if($razon=='0'){
                if($etiqueta=='0'){
                    $proveedor=proveedor::all();

                }else{
                    $proveedor=proveedor::where('PROVE_etiqueta','LIKE','%'.$etiqueta.'%')->get();
                }
            }else{
                if($etiqueta=='0'){
                    $proveedor=proveedor::where('PROVE_razon_social','LIKE','%'.$razon.'%')->get();

                }else{
                    $proveedor=proveedor::where('PROVE_razon_social','LIKE','%'.$razon.'%')
                    ->where('PROVE_etiqueta','LIKE','%'.$etiqueta.'%')->get();
                }
            }
        }else{
            if($razon=='0'){
                if($etiqueta=='0'){
                    $proveedor=proveedor::where('PROVE_ruc','LIKE','%'.$ruc.'%')->get();

                }else{
                    $proveedor=proveedor::where('PROVE_ruc','LIKE','%'.$ruc.'%')
                    ->where('PROVE_etiqueta','LIKE','%'.$etiqueta.'%')->get();

                }
            }else{
                if($etiqueta=='0'){
                    $proveedor=proveedor::where('PROVE_ruc','LIKE','%'.$ruc.'%')->
                    where('PROVE_razon_social','LIKE','%'.$razon.'%')->get();


                }else{
                    $proveedor=proveedor::where('PROVE_ruc','LIKE','%'.$ruc.'%')
                    ->where('PROVE_razon_social','LIKE','%'.$razon.'%')
                    ->where('PROVE_etiqueta','LIKE','%'.$etiqueta.'%')->get();

                }
            }
        }
        return view('proveedor.buscarProv',['proveedor'=>$proveedor]);
    }




    public function create(){
        $tipo=tipo_proveedor::all();
        $origen=origen_proveedor::all();
       return view('proveedor.proveedorCreate',['tipo'=>$tipo,'origen'=>$origen]);
    }
    public function store2(Request $request){
        $proveedor=new proveedor();
        $proveedor->fill($request->only('PROVE_ruc','PROVE_razon_social',
        'PROVE_razon_comercial','PROVE_direccion','PROVE_email',
        'PROVE_telefono','PROVE_etiqueta','PROVE_dni','PROVE_dias_credito',
        'TIPPROVE_id'));
        $proveedor->updated_at=null;
        $proveedor->save();
        return $proveedor;
    }
    public function store(Request $request){    //dd($request);
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
        $beneficiario=$request->get('PROVECU_beneficiario');
        $cuenta=$request->get('PROVECU_cuenta');
        $observacion=$request->get('PROVECU_observacion');

        //dd($cargo[0]);
        if($request->get('PROVECU_beneficiario')!=null){
            for ($i=0; $i < sizeof($telefono) ; $i++) {
                $cuentas=new proveedor_cuenta();
                $cuentas->PROVECU_beneficiario=$beneficiario[$i];
                $cuentas->PROVECU_cuenta=$cuenta[$i];
                $cuentas->PROVECU_observacion= $observacion[$i];

                $cuentas->PROVE_id=$proveedor->PROVE_id;
                $cuentas->save();
            }
        }
//dd($proveedor);
        $proveedor2=proveedor::all();
           return view('proveedor.index',['proveedor'=>$proveedor2]);
        }

//edit
public function editar($proveedor){
    $proveedor2=proveedor::find($proveedor);
    $tipoPro=tipo_proveedor::where('TIPPROVE_id','=',$proveedor2->TIPPROVE_id)->get();
    $contactoPro=proveedor_contacto::where('PROVE_id','=',$proveedor2->PROVE_id)->get();
   return view('proveedor.proveedorUpdate',['proveedor'=>$proveedor2,'tipopro'=>$tipoPro[0],'contactoPro'=>$contactoPro]);
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
        public function show($proveedor){
            $prove=proveedor::find($proveedor);

            $expediente=proveedorExpediente::where('PROVE_id','=',$proveedor)->get();
            $cuenta=proveedor_cuenta::where('PROVE_id','=',$proveedor)->get();
            $tipo=tipo_proveedor::where('TIPPROVE_id','=',$prove->TIPPROVE_id)->get();
            $contactoPro=proveedor_contacto::where('PROVE_id','=',$proveedor)->get();
            return view('proveedor.proveedorShow',['proveedor'=>$prove,'contacto'=>$contactoPro,'expediente'=>$expediente,'cuenta'=>$cuenta,'tipo'=>$tipo]);
        }
        public function update($proveedor,Request $request){
            $prove=proveedor::find($proveedor);

            $prove->fill($request->only('PROVE_ruc','PROVE_razon_social',
            'PROVE_razon_comercial','PROVE_direccion','PROVE_email',
            'PROVE_telefono','PROVE_etiqueta','PROVE_dni','PROVE_dias_credito',
            'PROVE_web','TIPPROVE_id'));
            $prove->save();

            $expediente=proveedorExpediente::where('PROVE_id','=',$proveedor)->get();
            $cuenta=proveedor_cuenta::where('PROVE_id','=',$proveedor)->get();
            $tipo=tipo_proveedor::where('TIPPROVE_id','=',$prove->TIPPROVE_id)->get();
            $contactoPro=proveedor_contacto::where('PROVE_id','=',$proveedor)->get();

            return view('proveedor.proveedorShow',['proveedor'=>$prove,'contacto'=>$contactoPro,'expediente'=>$expediente,'cuenta'=>$cuenta,'tipo'=>$tipo]);

        }
        public function download(proveedorExpediente $expediente){
            //dd($expediente->PROEXP_ruta->getClientOriginalExtension());
         //dd($expediente->PROEXP_extension);
            $file=public_path()."/imgExpedientes/".$expediente->PROEXP_ruta;
            $header=array(
                'Content-Type: application/'.$expediente->PROEXP_extension.'',
            );

            return response()->download($file,''.$expediente->PROEXP_descripcion.'.'.$expediente->PROEXP_extension,$header);
      }
        public function darBaja(Request $request ){
            $proveedor=proveedor::find($request->get('PROVE_id'));
            $proveedor->PROVE_estado=0;
            $proveedor->save();
            return $proveedor->PROVE_id;
        }
        public function darAlta(Request $request ){
            $proveedor=proveedor::find($request->get('PROVE_id'));
            $proveedor->PROVE_estado=1;
            $proveedor->save();
            return $proveedor->PROVE_id;
        }
        public function contactoStore($proveedor,Request $request){

            $contactoPro=new proveedor_contacto();
            $contactoPro->PROVECONT_descripcion=$request->get('PROVECONT_descripcion');
            $contactoPro->PROVECONT_nombre=$request->get('PROVECONT_nombre');
            $contactoPro->PROVECONT_telefono=$request->get('PROVECONT_telefono');
            $contactoPro->PROVECONT_email=$request->get('PROVECONT_email');
            $contactoPro->PROVE_id=$proveedor;
            $contactoPro->created_at=now();
            $contactoPro->updated_at=null;
            $contactoPro->save();
            $contacto=proveedor_contacto::where('PROVE_id','=',$proveedor)->get();
            return 0;
        }
        public function contactoUpdate($proveedor,Request $request){
            $PROVECONT_id=$request->get('PROVECONT_id');
            $PROVECONT_descripcion=$request->get('PROVECONT_descripcion');
            $PROVECONT_nombre=$request->get('PROVECONT_nombre');
            $PROVECONT_telefono=$request->get('PROVECONT_telefono');
            $PROVECONT_email=$request->get('PROVECONT_email');
            for ($i=0; $i <sizeof($PROVECONT_id) ; $i++) {
                $contacto=proveedor_contacto::find($PROVECONT_id[$i]);
                $contacto->PROVECONT_descripcion= $PROVECONT_descripcion[$i];
                $contacto->PROVECONT_nombre= $PROVECONT_nombre[$i];
                $contacto->PROVECONT_telefono= $PROVECONT_telefono[$i];
                $contacto->PROVECONT_email= $PROVECONT_email[$i];
                $contacto->save();
            }
            return back();
        }
    }
