<?php

namespace App\Http\Controllers;
use App\proveedor_contacto;
use Illuminate\Http\Request;

class contactosProvController extends Controller
{
    //
    public function index(){
       $contactos=proveedor_contacto::all();
       //dd($contactos[0]->PROVE_id);
       return view('contactosProveedores.index',['contactos'=>$contactos]);
    }
}
