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

}
