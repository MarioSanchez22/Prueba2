<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\marca;
class marcaController extends Controller
{
    public function index(){
        $marca=marca::all();

        //dd($proveedor);
           return view('marca.index',[ 'marca'=>$marca]);
        }

        public function store(Request $request){    //dd($request);
            $marca=new marca();
              $marca->fill($request->only('MARCA_descripcion'));
                  $marca->MARCA_descripcion=$request->get('MARCA_descripcion');
                $marca->save();
        //dd($proveedor);
        $marca2=marca::all();
                   return view('marca.index',['marca'=>$marca2]);
                }
}
