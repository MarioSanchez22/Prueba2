<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productoController extends Controller
{
    public function index(){
        //$producto= producto::all();
        //$rpta="";
        //dd($producto);

       //return view('prueba',['producto'=>$producto,'rpta'=>$rpta]);
       return view('home');
    }
}
