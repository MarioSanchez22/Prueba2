<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\categoria_producto;
use App\marca;
class categoriaController extends Controller
{
    public function index(){
    $categoria_producto=categoria_producto::all();
    //dd($proveedor);
       return view('categoria.index',[ 'categoria_producto'=>$categoria_producto]);
    }
    public function store( Request $request){
        $categoria=new categoria_producto();
        $categoria->CATPRO_descripcion=$request->get('CATPRO_descripcion');
        $categoria->save();
        return 0;
    }

}
