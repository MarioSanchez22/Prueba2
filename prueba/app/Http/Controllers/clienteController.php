<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Storage;
use App\tipo_proveedor;
use App\region;
use App\cliente;
use App\cliente_contacto;
use App\cliente_direccion;
use App\proveedor_documento;

class clienteController extends Controller
{
    public function index(){
        //dd(1);

    //dd($proveedor);

    $cliente=cliente::all();
    //dd($proveedor);
       return view('cliente.index',['cliente'=>$cliente]);
       return view('cliente.index');
    }
    public function create(){
        $tipo=tipo_proveedor::all();

        $region=region::where('ubicacionpaisid','=',89)->get();
       return view('cliente.clienteCreate',['tipo'=>$tipo,'region'=>$region]);
    }
    public function datosCliente($id){
        $documento=proveedor_documento::all();

        return view('cliente.datosClie',['tipoPr'=>$id,'documento'=>$documento]);
    }
    public function buscar($ruc2,$tprove2,$user2){
        $ruc=$ruc2;
        $tprove=$tprove2;
        $user=$user2;

        if($ruc=='0'){
            if($tprove=='0'){
                if($user=='0'){
                    $cliente=cliente::all();

                }else{
                    $cliente=cliente::where('USER_id','LIKE','%'.$user.'%')->get();
                }
            }else{
                if($user=='0'){
                    $cliente=cliente::where('TIPPROVE_id','LIKE','%'.$tprove.'%')->get();

                }else{
                    $cliente=cliente::where('TIPPROVE_id','LIKE','%'.$tprove.'%')
                    ->where('USER_id','LIKE','%'.$user.'%')->get();
                }
            }
        }else{
            if($tprove=='0'){
                if($user=='0'){
                    $cliente=cliente::where('CLIE_ruc','LIKE','%'.$ruc.'%')->get();

                }else{
                    $cliente=cliente::where('CLIE_ruc','LIKE','%'.$ruc.'%')
                    ->where('USER_id','LIKE','%'.$user.'%')->get();

                }
            }else{
                if($user=='0'){
                    $cliente=cliente::where('CLIE_ruc','LIKE','%'.$ruc.'%')->
                    where('TIPPROVE_id','LIKE','%'.$tprove.'%')->get();


                }else{
                    $cliente=cliente::where('PROVE_ruc','LIKE','%'.$ruc.'%')
                    ->where('TIPPROVE_id','LIKE','%'.$tprove.'%')
                    ->where('USER_id','LIKE','%'.$user.'%')->get();

                }
            }
        }
        return view('cliente.buscaCliente',['cliente'=>$cliente]);
    }
    public function store(Request $request){


         //dd($request->GET('CLIECON_telefono'));
        $cliente=new cliente();
//name de inputs
        $cliente->fill($request->only('CLIE_ruc','CLIE_razon_social',
          'CLIE_razon_comercial','CLIE_email',
          'CLIE_telefono','CLIE_dni',
          'TIPPROVE_id','PROVEDOC_descripcion'));

          if($request->get('PROVEDOC_descripcion')!=null){
              $documento=proveedor_documento::where('PROVEDOC_id','=',$request->get('PROVEDOC_descripcion'))->get();

              $cliente->PROVEDOC_descripcion=$documento[0]->PROVEDOC_descripcion;
          }

          $region=region::where('id','=',$request->get('CLIE_region'))->get();

    //dd($origen);

            $cliente->CLIE_region=$region[0]->estadonombre;

            $cliente->CLIE_estado=1;

            $cliente->updated_at=null;


            $cliente->save();

            $direccion1=$request->get('CLIEDIRE_descripcion');
            if($request->get('CLIEDIRE_descripcion')!=null){
                for ($i=0; $i < sizeof($direccion1) ; $i++) {
                      $direccion=new cliente_direccion();
                   $direccion->CLIEDIRE_descripcion=$direccion1[$i];
                   $direccion->CLIE_id=$cliente->CLIE_id;
                       $direccion->save();
                   }
               }


            $telefono=$request->GET('CLIECON_telefono');
             $cargo=$request->get('CLIECON_descripcion');
             $nombre=$request->get('CLIECON_nombre');
             $email=$request->get('CLIECON_email');

            // //dd($cargo[0]);
            if($request->get('CLIECON_telefono')!=null){
              for ($i=0; $i < sizeof($telefono) ; $i++) {
                    $contacto=new cliente_contacto();
                 $contacto->CLIECON_descripcion=$cargo[$i];
                    $contacto->CLIECON_nombre=$nombre[$i];
                     $contacto->CLIECON_telefono=$telefono[$i];
                     $contacto->CLIECON_email=$email[$i];
                     $contacto->CLIE_id=$cliente->CLIE_id;
                     $contacto->save();
                 }
             }
    //dd($proveedor);
    $cliente2=cliente::all();
               return view('cliente.index',['cliente'=>$cliente2]);
            }

     public function show($cliente){
                $clie=cliente::find($cliente);


            $tipo=tipo_proveedor::where('TIPPROVE_id','=',$clie->TIPPROVE_id)->get();
            $contactoCli=cliente_contacto::where('CLIE_id','=',$cliente)->get();
            $direccionCli=cliente_direccion::where('CLIE_id','=',$cliente)->get();

                return view('cliente.clienteShow',['cliente'=>$clie,'contacto'=>$contactoCli,'tipo'=>$tipo,'direccion'=>$direccionCli]);
            }

            public function editar($cliente){
                $cliente2=cliente::find($cliente);
                $tipoPro=tipo_proveedor::where('TIPPROVE_id','=',$cliente2->TIPPROVE_id)->get();
                $contactoCli=cliente_contacto::where('CLIE_id','=',$cliente2->CLIE_id)->get();
               return view('cliente.clienteUpdate',['cliente'=>$cliente2,'tipopro'=>$tipoPro[0],'contacto'=>$contactoCli]);
            }

}
