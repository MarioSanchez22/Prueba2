<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedor;
class proveedorController extends Controller
{
    public function index(){
    $proveedor=proveedor::all();
    //dd($proveedor);
       return view('proveedor.index',['proveedor'=>$proveedor]);
    }
    public function store(){
        $proveedor=proveedor::all();
        //dd($proveedor);
           return view('proveedor.index',['proveedor'=>$proveedor]);
        }
        public function datos($id){
           // $proveedor=proveedor::all();
            //dd($id);

            return view('proveedor.datosProv',['prove'=>$id]);
            }
}
