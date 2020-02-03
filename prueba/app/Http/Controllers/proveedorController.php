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
        public function sunat($id){
            // $proveedor=proveedor::all();
             
 
             return view('sunat.consulta',['nruc'=>$id]);
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
