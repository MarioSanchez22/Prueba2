<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\categoria_producto;
use App\marca;
class categoriaController extends Controller
{
    public function ultimo(){
        $last_categoria = categoria_producto::where('CATPRO_estado','=','1')->get();
        $ultimo=$last_categoria->last();
        if($ultimo!=null){
            $id_ultimo= $ultimo->CATPRO_codigo +1;}
        else{
            $id_ultimo=1;
        }
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
        $categoria_producto=categoria_producto::where('CATPRO_estado','=','1')->get();
        return view('categoria._categoriaNueva',['categoria_producto'=>$categoria_producto,'id_ultimo'=>$id_ultimo ]);
    }
    public function buscar(Request $request){
        $categoria=categoria_producto::find($request->get('CATEGORIA_id'));
        return $categoria;
    }
    public function update(Request $request){
        $categoria=categoria_producto::find($request->get('CATPRO_id'));
        $categoria->CATPRO_descripcion=$request->get('CATPRO_descripcion');
        $categoria->CATPRO_precio1=$request->get('CATPRO_precio1');
        $categoria->CATPRO_precio2=$request->get('CATPRO_precio2');
        $categoria->CATPRO_precio3=$request->get('CATPRO_precio3');
        $categoria->CATPRO_descuento=$request->get('CATPRO_descuento');
        $categoria->save();
        return $categoria->CATPRO_id;
    }

 public function delete(Request $request){
        $categoria=categoria_producto::find($request->get('CATPRO_id'));
        $categoria->CATPRO_estado=0;
        $categoria->save();
        $categoria_producto=categoria_producto::where('CATPRO_estado','=','1')->get();
        return view('categoria._categoriaNueva',['categoria_producto'=>$categoria_producto]);
}

}
