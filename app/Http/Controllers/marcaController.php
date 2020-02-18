<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\marca;
class marcaController extends Controller
{
    public function index(){
        $marca=marca::all();

        //dd($proveedor);
           return view('marca.index',[ 'marca'=>$marca]);
        }
}
