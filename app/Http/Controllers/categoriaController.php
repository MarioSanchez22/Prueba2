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
    $last_categoria = categoria_producto::all()->last();
    $id_ultimo= $last_categoria->CATPRO_id +1;
    //dd($id_ultimo);
       return view('categoria.index',[ 'categoria_producto'=>$categoria_producto,'id_ultimo'=>$id_ultimo]);
    }
    public function store( Request $request){
        $categoria=new categoria_producto();
        $categoria->CATPRO_descripcion=$request->get('CATPRO_descripcion');
        $categoria->CATPRO_precio1=$request->get('CATPRO_precio1');
        $categoria->CATPRO_precio2=$request->get('CATPRO_precio2');
        $categoria->CATPRO_precio3=$request->get('CATPRO_precio3');
        $categoria->CATPRO_descuento=$request->get('CATPRO_descuento');
        $categoria->save();
        return 0;
    }

}
