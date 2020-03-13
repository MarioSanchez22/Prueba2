<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\umedidas;

class umedidasController extends Controller
{
    public function index(){
        $umedidas=umedidas::all();
        return view('unidadMedidas.index',['umedidas'=>$umedidas]);
    }

     public function store( Request $request){
            $unidad=new umedidas();
            $unidad->UME_abreviatura=$request->get('UME_abreviatura');
            $unidad->UME_descripcion=$request->get('UME_descripcion');
            $unidad->save();
            
        }

}
