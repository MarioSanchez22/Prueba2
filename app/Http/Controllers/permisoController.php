<?php

namespace App\Http\Controllers;

use App\menu;
use App\permiso;
use App\rol;
use App\submenu;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class permisoController extends Controller
{
    public function index(){
        $user=User::all();
        $roles=rol::all();
        return view('permiso.permisoIndex',['usuarios'=>$user,'roles'=>$roles]);
    }
    public function editar($usuario){
        $user=User::find($usuario);
        //dd($user);
        $menu=menu::all();
        $submenu=submenu::all();
        return view('permiso.permisoEdit',['usuario'=>$user,'menu'=>$menu,'submenu'=>$submenu]);
    }

    public function update($usuario2, Request $request){

        $submenu=$request->get('SUBMENU_id');
        $submenuDefecto=submenu::all();
        $crear=$request->get('PERMISO_crear');
        $editar=$request->get('PERMISO_editar');
        $eliminar=$request->get('PERMISO_eliminar');
        if ($submenu !=null){
            $permiso4=permiso::where('id','=',$usuario2)->get();
            foreach($permiso4 as $permiso){
                $permiso3=permiso::find($permiso->PERMISO_id);
                $permiso3->PERMISO_descripcion=$request->get('PERMISO_descripcion');
                $permiso3->save();
            }
            foreach($submenuDefecto as $submenuDefectos){
                //dd($submenuDefectos->SUBMENU_descripcion);
                $permiso2=permiso::where('SUBMENU_id','=',$submenuDefectos->SUBMENU_id)
                                      ->where('id','=',$usuario2)->first();
                $permiso=permiso::find($permiso2->PERMISO_id);
                $permiso->SUBMENU_id=$submenuDefectos->SUBMENU_id;
                $permiso->updated_at=NOW();
                    if(in_array($submenuDefectos->SUBMENU_descripcion,$submenu)==false){
                        $permiso->PERMISO_estado=0;
                        $permiso->PERMISO_crear=0;
                        $permiso->PERMISO_editar=0;
                        $permiso->PERMISO_eliminar=0;
                    }
                    else{
                        $permiso->PERMISO_estado=1;
                            if($crear!=null){
                                if(in_array($submenuDefectos->SUBMENU_descripcion,$crear)==false){
                                    $permiso->PERMISO_crear=0;
                                }else{
                                    for ($j=0; $j < sizeof($crear); $j++) {
                                        if($submenuDefectos->SUBMENU_descripcion == $crear[$j]){
                                            $permiso->PERMISO_crear=1;
                                        }
                                    }
                                }
                            }
                            else{
                                $permiso->PERMISO_crear=0;
                            }
                            if($editar!=null){
                                if(in_array($submenuDefectos->SUBMENU_descripcion,$editar)==false){
                                    $permiso->PERMISO_editar=0;
                                }else{
                                    for ($k=0; $k < sizeof($editar); $k++) {
                                        if($submenuDefectos->SUBMENU_descripcion==$editar[$k]){
                                            $permiso->PERMISO_editar=1;
                                        }
                                    }
                                }
                            }
                            else{
                                $permiso->PERMISO_editar=0;
                            }
                            if($eliminar!=null){
                                if(in_array($submenuDefectos->SUBMENU_descripcion,$eliminar)==false){
                                    $permiso->PERMISO_eliminar=0;
                                }else{
                                    for ($l=0; $l < sizeof($eliminar); $l++) {
                                        if($submenuDefectos->SUBMENU_descripcion==$eliminar[$l]){
                                            $permiso->PERMISO_eliminar=1;
                                        }
                                    }
                                }
                            }
                            else{
                                $permiso->PERMISO_eliminar=0;
                            }
                        }
                        $permiso->save();
                }
        }
        return back();
    }

    public function buscar($email2,$PERSONA_identificador2,$ROL_id2){
        $email=$email2;
        $PERSONA_identificador=$PERSONA_identificador2;
        $ROL_id=$ROL_id2;

        if($email=='0'){
            if($PERSONA_identificador=='0'){
                if($ROL_id=='0'){
                    $usuario=User::all();
                }else{
                    $usuario=User::where('ROL_id','=',$ROL_id)->get();
                }
            }else{
                if($ROL_id=='0'){
                    $usuario=DB::table('users')->join('persona','persona.PERSONA_id','=','users.PERSONA_id')
                    ->where('persona.PERSONA_identificador','LIKE','%'.$PERSONA_identificador.'%')->get();

                }else{
                    $usuario=DB::table('users')->join('persona','persona.PERSONA_id','=','users.PERSONA_id')
                    ->where('users.ROL_id','=',$ROL_id)
                    ->where('persona.PERSONA_identificador','LIKE','%'.$PERSONA_identificador.'%')
                    ->get();
                }
            }
        }else{
            if($PERSONA_identificador=='0'){
                if($ROL_id=='0'){
                    $usuario=User::where('email','LIKE','%'.$email.'%')->get();
                }else{
                    $usuario=User::where('email','LIKE','%'.$email.'%')
                    ->where('ROL_id','=',$ROL_id)->get();
                }
            }else{
                if($ROL_id=='0'){
                    $usuario=DB::table('users')->join('persona','persona.PERSONA_id','=','users.PERSONA_id')
                    ->where('users.email','LIKE','%'.$email.'%')
                    ->where('persona.PERSONA_identificador','LIKE','%'.$PERSONA_identificador.'%')
                    ->get();


                }else{
                    $usuario=DB::table('users')->join('persona','persona.PERSONA_id','=','users.PERSONA_id')
                    ->where('users.email','LIKE','%'.$email.'%')
                    ->where('users.ROL_id','=',$ROL_id)
                    ->where('persona.PERSONA_identificador','LIKE','%'.$PERSONA_identificador.'%')
                    ->get();
                }
            }
        }
        return view('permiso.buscarUser',['usuarios'=>$usuario]);
    }
}
