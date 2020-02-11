<?php

namespace App\Http\Controllers;
use App\proveedor_contacto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class contactosProvController extends Controller
{
    //
    public function index(){
       $contactos=proveedor_contacto::all();
       //dd($contactos[0]->PROVE_id);
       return view('contactosProveedores.index',['contactos'=>$contactos]);
    }

    public function buscar($nombre2,$razon2,$etiqueta2){

        $nombre=$nombre2;
        $razon=$razon2;
        $etiqueta=$etiqueta2;

        if($nombre=='0'){
            if($razon=='0'){
                if($etiqueta=='0'){
                    $contactoPro=proveedor_contacto::all();

                }else{
                    $contactoPro=proveedor_contacto::where('PROVECONT_etiqueta','LIKE','%'.$etiqueta.'%')->get();
                }
            }else{
                if($etiqueta=='0'){
                    $contactoPro=DB::table('proveedor_contacto')
                    ->join('proveedor','proveedor.PROVE_id','=','proveedor_contacto.PROVE_id')
                    ->select('proveedor_contacto.*')->where('proveedor.PROVE_razon_social','LIKE','%'.$razon.'%')->get();

                }else{
                    $contactoPro=DB::table('proveedor_contacto')
                    ->join('proveedor','proveedor.PROVE_id','=','proveedor_contacto.PROVE_id')
                    ->select('proveedor_contacto.*')
                    ->where('proveedor.PROVE_razon_social','LIKE','%'.$razon.'%')
                    ->where('proveedor_contacto.PROVECONT_etiqueta','LIKE','%'.$etiqueta.'%')->get();
                }
            }
        }else{
            if($razon=='0'){
                if($etiqueta=='0'){
                    $contactoPro=proveedor_contacto::where('PROVECONT_nombre','LIKE','%'.$nombre.'%')->get();

                }else{
                    $contactoPro=proveedor_contacto::where('PROVECONT_nombre','LIKE','%'.$nombre.'%')
                    ->where('PROVECONT_etiqueta','LIKE','%'.$etiqueta.'%')->get();

                }
            }else{
                if($etiqueta=='0'){
                    $contactoPro=DB::table('proveedor_contacto')
                    ->join('proveedor','proveedor.PROVE_id','=','proveedor_contacto.PROVE_id')
                    ->select('proveedor_contacto.*')->where('proveedor_contacto.PROVECONT_nombre','LIKE','%'.$nombre.'%')
                    ->where('proveedor.PROVE_razon_social','LIKE','%'.$razon.'%')->get();
                    

                }else{
                    $contactoPro=DB::table('proveedor_contacto')
                    ->join('proveedor','proveedor.PROVE_id','=','proveedor_contacto.PROVE_id')
                    ->select('proveedor_contacto.*')->where('proveedor_contacto.PROVECONT_nombre','LIKE','%'.$nombre.'%')
                    ->where('proveedor.PROVE_razon_social','LIKE','%'.$razon.'%')
                    ->where('PROVE_etiqueta','LIKE','%'.$etiqueta.'%')->get();


                }
            }
        }
        return view('contactosProveedores.buscarContacto',['contactos'=>$contactoPro]);
    }
}
