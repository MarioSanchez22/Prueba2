<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\marca;
class marcaController extends Controller
{
    public function index(){
        $marca=marca::all();
        //dd($proveedor);
        return view('marca.index',['marca'=>$marca]);
    }
    public function store(Request $request){    //dd($request);
        $marca=new marca();
        $marca->MARCA_descripcion=$request->get('MARCA_descripcion');
        $marca->save();
        $marca2=marca::all();
        //dd($marca2);
        return view('marca._marcaNueva',['marca'=>$marca2]);
    }
    public function buscar(Request $request){
        $marca=marca::find($request->get('MARCA_id'));
        return $marca;
    }

    public function update(Request $request){
        $marca=marca::find($request->get('MARCA_idE'));
        $marca->MARCA_descripcion=$request->get('MARCA_descripcionE');
        $marca->save();
        return $marca;
    }
    public function delete(Request $request){
        $marca=marca::find($request->get('MARCA_id'));
        $marca->delete();
        $marca2=marca::all();
        //dd($marca2);
        return view('marca._marcaNueva',['marca'=>$marca2]);
    }

}
