<?php

namespace App\Http\Controllers;

use App\rol;
use App\menu;
use App\permiso;
use App\rol_usuario;
use App\submenu;
use App\empresa;
use App\User;
use App\plantilla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;

class rolesController extends Controller
{
    public function index(){
        $rol=rol::all();
        $usuario=User::all();
        $permiso=permiso::all();
        $menu=menu::all();
        $submenu=submenu::all();

    return view('roles.index',['rol'=>$rol,'permiso'=>$permiso, 'usuario'=>$usuario,
    'menu'=>$menu,'submenu'=>$submenu]);
    }

    public function create(){
        $rol=rol::all();
        $menu=menu::all();
        $submenu=submenu::all();
       return view('roles.rolesCreate',['rol'=>$rol,'menu'=>$menu,'submenu'=>$submenu]);
    }

    public function store(Request $request){
        $submenu=$request->get('SUBMENU_id');
        $submenuDefecto=submenu::all();
        $crear=$request->get('PLANTILLA_crear');
        $editar=$request->get('PLANTILLA_editar');
        $eliminar=$request->get('PLANTILLA_eliminar');
        if ($submenu !=null){
            $rol= new rol();
            $rol->ROL_descripcion=$request->get('ROL_descripcion');
            $rol->ROL_estado=1;
            $rol->updated_at=null;
            $rol->save();
            foreach($submenuDefecto as $submenuDefectos){
                //dd($submenuDefectos->SUBMENU_descripcion);
                $plantilla=new plantilla();
                $plantilla->PLANTILLA_descripcion='Plantilla '.$rol->ROL_descripcion;
                $plantilla->SUBMENU_id=$submenuDefectos->SUBMENU_id;
                $plantilla->updated_at=null;
                $plantilla->ROL_id=$rol->ROL_id;
                    if(in_array($submenuDefectos->SUBMENU_descripcion,$submenu)==false){
                        $plantilla->PLANTILLA_estado=0;
                        $plantilla->PLANTILLA_crear=0;
                        $plantilla->PLANTILLA_editar=0;
                        $plantilla->PLANTILLA_eliminar=0;
                    }
                    else{
                        $plantilla->PLANTILLA_estado=1;
                            if($crear!=null){
                                for ($j=0; $j < sizeof($crear); $j++) {
                                    if($submenuDefectos->SUBMENU_descripcion == $crear[$j]){
                                        $plantilla->PLANTILLA_crear=1;
                                    }
                                }
                            }
                            if($editar!=null){
                                for ($k=0; $k < sizeof($editar); $k++) {
                                    if($submenuDefectos->SUBMENU_descripcion==$editar[$k]){
                                        $plantilla->PLANTILLA_editar=1;
                                    }
                                }
                            }
                            if($eliminar!=null){
                                for ($l=0; $l < sizeof($eliminar); $l++) {
                                    if($submenuDefectos->SUBMENU_descripcion==$eliminar[$l]){
                                        $plantilla->PLANTILLA_eliminar=1;
                                    }
                                }
                            }
                        }
                        $plantilla->save();
                }

        }
        return redirect(route('rolesIndex'));
    }
    public function editar($rol){
        $rolid=rol::find($rol);
        $menu=menu::all();
        $submenu=submenu::all();
        return view('roles.rolesEdit',['rol'=>$rolid,'menu'=>$menu,'submenu'=>$submenu]);
    }
    public function update($rol2, Request $request){

        $submenu=$request->get('SUBMENU_id');
        $submenuDefecto=submenu::all();
        $crear=$request->get('PLANTILLA_crear');
        $editar=$request->get('PLANTILLA_editar');
        $eliminar=$request->get('PLANTILLA_eliminar');
        if ($submenu !=null){
           $rol=rol::find($rol2);
           $rol->ROL_descripcion=$request->get('ROL_descripcion');
           $rol->save();
            foreach($submenuDefecto as $submenuDefectos){
                //dd($submenuDefectos->SUBMENU_descripcion);
                $plantilla2=plantilla::where('SUBMENU_id','=',$submenuDefectos->SUBMENU_id)
                                      ->where('ROL_id','=',$rol2)->first();
                $plantilla=plantilla::find($plantilla2->PLANTILLA_id);
                $plantilla->PLANTILLA_descripcion='Plantilla '.$rol->ROL_descripcion;
                $plantilla->SUBMENU_id=$submenuDefectos->SUBMENU_id;
                $plantilla->updated_at=NOW();
                    if(in_array($submenuDefectos->SUBMENU_descripcion,$submenu)==false){
                        $plantilla->PLANTILLA_estado=0;
                        $plantilla->PLANTILLA_crear=0;
                        $plantilla->PLANTILLA_editar=0;
                        $plantilla->PLANTILLA_eliminar=0;
                    }
                    else{
                        $plantilla->PLANTILLA_estado=1;
                            if($crear!=null){
                                if(in_array($submenuDefectos->SUBMENU_descripcion,$crear)==false){
                                    $plantilla->PLANTILLA_crear=0;
                                }else{
                                    for ($j=0; $j < sizeof($crear); $j++) {
                                        if($submenuDefectos->SUBMENU_descripcion == $crear[$j]){
                                            $plantilla->PLANTILLA_crear=1;
                                        }
                                    }
                                }
                            }else{
                                $plantilla->PLANTILLA_crear=0;
                            }
                            if($editar!=null){
                                if(in_array($submenuDefectos->SUBMENU_descripcion,$editar)==false){
                                    $plantilla->PLANTILLA_editar=0;
                                }else{
                                    for ($k=0; $k < sizeof($editar); $k++) {
                                        if($submenuDefectos->SUBMENU_descripcion==$editar[$k]){
                                            $plantilla->PLANTILLA_editar=1;
                                        }
                                    }
                                }
                            }
                            else{
                                $plantilla->PLANTILLA_editar=0;
                            }
                            if($eliminar!=null){
                                if(in_array($submenuDefectos->SUBMENU_descripcion,$eliminar)==false){
                                    $plantilla->PLANTILLA_eliminar=0;
                                }else{
                                    for ($l=0; $l < sizeof($eliminar); $l++) {
                                        if($submenuDefectos->SUBMENU_descripcion==$eliminar[$l]){
                                            $plantilla->PLANTILLA_eliminar=1;
                                        }
                                    }
                                }
                            }
                            else{
                                $plantilla->PLANTILLA_eliminar=0;
                            }
                        }
                        $plantilla->save();
                }
        }
        return back();
    }
}
