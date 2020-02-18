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
}
