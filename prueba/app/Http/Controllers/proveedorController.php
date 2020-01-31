<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedor;
class proveedorController extends Controller
{
    public function index(){
        //dd(1);
    $proveedor=proveedor::all();
    //dd($proveedor);
       return view('proveedor.index',['proveedor'=>$proveedor]);
    }
    public function create(){
        //se cambia aqui no se envia proveedor
       return view('proveedor.proveedorCreate');
    }
    public function store(){
        $proveedor=proveedor::all();
        //dd($proveedor);
           return view('proveedor.index',['proveedor'=>$proveedor]);
        }
        public function datos($id){
           // $proveedor=proveedor::all();
            //dd($id);

            return view('proveedor.datosProv',['tipoPr'=>$id]);
            }
}
