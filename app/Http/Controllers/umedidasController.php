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
        $unidad->UME_descripcion=;
        return view('categoria._categoriaNueva',['categoria_producto'=>$categoria_producto,'id_ultimo'=>$id_ultimo ]);
    }

}
