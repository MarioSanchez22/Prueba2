<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clienteController extends Controller
{
    public function index(){
        //dd(1);
    
    //dd($proveedor);
       return view('cliente.index');
    }
}
