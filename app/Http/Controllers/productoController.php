<?php

namespace App\Http\Controllers;
use App\producto;

use App\categoria_producto;
use App\marca;
class productoController extends Controller
{
    public function index(){
        //dd(1);
    $producto=producto::all();
    $categoria_producto=categoria_producto::all();
    $marca=marca::all();
    //dd($proveedor);
       return view('productos.index',['producto'=>$producto, 'categoria_producto'=>$categoria_producto,'marca'=>$marca]);
    }
    public function create()
    {
        return view('productos.productoCreate');
    }
}
