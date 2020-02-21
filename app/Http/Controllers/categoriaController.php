<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\categoria_producto;
use App\marca;
class categoriaController extends Controller
{
    public function ultimo(){
        $last_categoria = categoria_producto::where('CATPRO_estado','=','1')->count();
        $id_ultimo= $last_categoria +1;
        return $id_ultimo;
    }
    public function index(){
    $categoria_producto=categoria_producto::where('CATPRO_estado','=','1')->get();
         $id_ultimo=$this->ultimo();
    //dd($id_ultimo);
       return view('categoria.index',[ 'categoria_producto'=>$categoria_producto,'id_ultimo'=>$id_ultimo]);
    }
    public function store( Request $request){

        $categoria=new categoria_producto();
        $categoria->CATPRO_descripcion=$request->get('CATPRO_descripcion');
        if($request->get('CATPRO_codigo')>9){
            $categoria->CATPRO_codigo=$request->get('CATPRO_codigo');

         }else{
            $categoria->CATPRO_codigo='0'.$request->get('CATPRO_codigo');
         }
        $categoria->CATPRO_estado=1;
        $categoria->CATPRO_precio1=$request->get('CATPRO_precio1');
        $categoria->CATPRO_precio2=$request->get('CATPRO_precio2');
        $categoria->CATPRO_precio3=$request->get('CATPRO_precio3');
        $categoria->CATPRO_descuento=$request->get('CATPRO_descuento');
        $categoria->updated_at=null;
        $categoria->save();

        $id_ultimo=$this->ultimo();

        return $id_ultimo;
    }

    public function delete($categoria){
       $cat=categoria_producto::find($categoria);
       $cat->CATPRO_estado=0;
       $cat->updated_at=now();
       $cat->save();
       return back();
    }

}
