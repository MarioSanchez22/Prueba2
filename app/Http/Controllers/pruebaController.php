<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;

class pruebaController extends Controller
{
    public function index(){
        //$producto= producto::all();
        //$rpta="";
        //dd($producto);

       //return view('prueba',['producto'=>$producto,'rpta'=>$rpta]);
       return view('home');
    }
    public function buscar(Request $request){
        $producto= producto::Where('PRO_id','=',$request->get('PRO_id'))->get();
        $compra=$request->get('PRO_costo');
        //dd($producto[0]);
        //dd($producto);
        if ($producto[0]->PRO_costo!=$compra){
            return view('prueba2',['producto'=>$producto,'compra'=>$compra]);
        }
        else{
            $rpta="Compra Registrada... ";
            return view('prueba',['producto'=>$producto,'rpta'=>$rpta]);
        }
    }

    public function Ajuste(Request $request,producto $id){
        //dd($id);
        $id->PRO_costo=$request->get('PRO_costo');
        $id->PRO_venta1=$request->get('PRO_venta1');
        $id->PRO_venta2=$request->get('PRO_venta2');
        $id->PRO_venta3=$request->get('PRO_venta3');
        $id->save();
        $rpta="";
        $producto=producto::all();
        return view('prueba',['producto'=>$producto,'rpta'=>$rpta]);
    }
}
