<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedor;

class proveedorController extends Controller
{
    public function index(){
    $proveedor=proveedor::all();
    //dd($proveedor);
       return view('proveedor.index');
    }
}
