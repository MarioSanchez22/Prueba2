<?php
namespace App\Http\Controllers;
use App\area;
use App\empleado;
use App\empresa;
use App\origen_proveedor;
use App\permiso;
use App\persona;
use App\plantilla;
use App\proveedor_documento;
use App\rol;
use App\sucursal;
use App\tipo_proveedor;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');// redirecciona si no esta logueado
    }

    public function index()
    {
        $user_global=Auth::user();
        //return view('usuarios');
        $personal=persona::where('EMPRESA_id','=',$user_global->EMPRESA_id)->get();
        $roles=rol::where('EMPRESA_id','=',$user_global->EMPRESA_id)->get();
        return view('usuarios.index',['personal'=>$personal,'roles'=>$roles]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $empresa=Auth::user()->EMPRESA_id;
        $documento=proveedor_documento::all();
        $tipo=tipo_proveedor::all();
        $rol=rol::where('EMPRESA_id','=',$empresa)->get();
        $area=area::where('EMPRESA_id','=',$empresa)->get();
        $sucursal=sucursal::where('EMPRESA_id','=',$empresa)->get();
        return view('usuarios.usuarioCreate',['tipo'=>$tipo,'documento'=>$documento,'rol'=>$rol,'area'=>$area,'sucursal'=>$sucursal]);
    }
    public function store(Request $request)
    {
        $empresa=Auth::user()->EMPRESA_id;
        $venta=$request->get('PERSONA_venta');
        $nombre=$request->get('name');
        $cargo=$request->get('EMPLEADO_cargo');

        $persona=new persona();
        $persona->PROVEDOC_id=$request->get('PROVEDOC_descripcion');
        $persona->PERSONA_identificador=$request->get('PERSONA_identificador');
        $persona->PERSONA_nombres=$request->get('PERSONA_nombres');
        $persona->PERSONA_direccion=$request->get('PERSONA_direccion');
        $persona->PERSONA_email=$request->get('PERSONA_email');
        $persona->PERSONA_celular=$request->get('PERSONA_celular');
        $persona->PERSONA_telefono=$request->get('PERSONA_telefono');
        $persona->EMPRESA_id=$empresa;
        $f1 = explode("/", $request->get('PERSONA_nacimiento'));
        $fechaI = $f1[2]."-".$f1[1]."-".$f1[0];
        $persona->PERSONA_nacimiento=$fechaI;
        if (!is_null($venta)) {
            $persona->PERSONA_venta=1;
        }
        else{
            $persona->PERSONA_venta=0;
        }
        $persona->save();


        if($nombre!=null){
            $usuario=new User();
            $usuario->email=$nombre;
            $usuario->USER_nick=$persona->PERSONA_email;
            $usuario->password=bcrypt($request->get('password'));
            $usuario->clave=$request->get('password');
            $usuario->updated_at=null;
            $usuario->USER_estado=1;
            $usuario->EMPRESA_id=$empresa;
            $usuario->ROL_id=$request->get('ROL_id');
            $usuario->PERSONA_id=$persona->PERSONA_id;
            $usuario->save();

            $plantilla=plantilla::where('ROL_id','=',$usuario->ROL_id)->get();
            foreach ($plantilla as $plantillas) {
                $permiso=new permiso();
                $permiso->PERMISO_estado=$plantillas->PLANTILLA_estado;
                $permiso->PERMISO_crear=$plantillas->PLANTILLA_crear;
                $permiso->PERMISO_editar=$plantillas->PLANTILLA_editar;
                $permiso->PERMISO_eliminar=$plantillas->PLANTILLA_eliminar;
                $permiso->PERMISO_descripcion='Privilegio'.' '.$usuario->email;
                $permiso->SUBMENU_id=$plantillas->SUBMENU_id;
                $permiso->id=$usuario->id;
                $permiso->created_at=now();
                $permiso->updated_at=null;
                $permiso->save();
            }
        }
            if($cargo!=null){
                $empleado=new empleado();
                $empleado->EMPLEADO_cargo=$cargo;
                $empleado->PERSONA_id=$persona->PERSONA_id;
                $f1 = explode("/", $request->get('EMPLEADO_fecha_incorporacion'));
                $fechaI = $f1[2]."-".$f1[1]."-".$f1[0];
                $empleado->EMPLEADO_fecha_incorporacion=$fechaI;
                $empleado->AREA_id=$request->get('AREA_id');
                $empleado->SUCURSAL_id=$request->get('SUCURSAL_id');
                $empleado->updated_at=null;
                $empleado->save();
            }

            return redirect(route('usuariosIndex'));
        }
        public function buscar($email2,$PERSONA_identificador2,$ROL_id2){
            $user_global=Auth::user();
            $email=$email2;
            $PERSONA_identificador=$PERSONA_identificador2;
            $ROL_id=$ROL_id2;

            if($email=='0'){
                if($PERSONA_identificador=='0'){
                    if($ROL_id=='0'){
                        $usuario=User::where('EMPRESA_id','=',$user_global->EMPRESA_id)
                                 ->where('id','!=',$user_global->id)->get();
                    }else{
                        $usuario=User::where('ROL_id','=',$ROL_id)
                                 ->where('id','!=',$user_global->id)
                                 ->where('EMPRESA_id','=',$user_global->EMPRESA_id)->get();
                    }
                }else{
                    if($ROL_id=='0'){
                        $usuario=DB::table('users')->join('persona','persona.PERSONA_id','=','users.PERSONA_id')
                        ->where('users.id','!=',$user_global->id)
                        ->where('users.EMPRESA_id','=',$user_global->EMPRESA_id)
                        ->where('persona.PERSONA_identificador','LIKE','%'.$PERSONA_identificador.'%')->get();

                    }else{
                        $usuario=DB::table('users')->join('persona','persona.PERSONA_id','=','users.PERSONA_id')
                        ->where('users.id','!=',$user_global->id)
                        ->where('users.ROL_id','=',$ROL_id)
                        ->where('users.EMPRESA_id','=',$user_global->EMPRESA_id)
                        ->where('persona.PERSONA_identificador','LIKE','%'.$PERSONA_identificador.'%')
                        ->get();
                    }
                }
            }else{
                if($PERSONA_identificador=='0'){
                    if($ROL_id=='0'){
                        $usuario=User::where('email','LIKE','%'.$email.'%')
                        ->where('id','!=',$user_global->id)
                        ->where('EMPRESA_id','=',$user_global->EMPRESA_id)->get();
                    }else{
                        $usuario=User::where('email','LIKE','%'.$email.'%')
                        ->where('id','!=',$user_global->id)
                        ->where('EMPRESA_id','=',$user_global->EMPRESA_id)
                        ->where('ROL_id','=',$ROL_id)->get();
                    }
                }else{
                    if($ROL_id=='0'){
                        $usuario=DB::table('users')->join('persona','persona.PERSONA_id','=','users.PERSONA_id')
                        ->where('users.id','!=',$user_global->id)
                        ->where('users.EMPRESA_id','=',$user_global->EMPRESA_id)
                        ->where('users.email','LIKE','%'.$email.'%')
                        ->where('persona.PERSONA_identificador','LIKE','%'.$PERSONA_identificador.'%')
                        ->get();


                    }else{
                        $usuario=DB::table('users')->join('persona','persona.PERSONA_id','=','users.PERSONA_id')
                        ->where('users.id','!=',$user_global->id)
                        ->where('users.EMPRESA_id','=',$user_global->EMPRESA_id)
                        ->where('users.email','LIKE','%'.$email.'%')
                        ->where('users.ROL_id','=',$ROL_id)
                        ->where('persona.PERSONA_identificador','LIKE','%'.$PERSONA_identificador.'%')
                        ->get();
                    }
                }
            }
            return view('usuarios.buscarUser',['usuarios'=>$usuario]);
        }

        public function show($personal){
            $persona=persona::find($personal);
            $provedoc=proveedor_documento::where('PROVEDOC_id','=',$persona->PROVEDOC_id)->get();
            $empresa=empresa::where('EMPRESA_id','=',$persona->EMPRESA_id)->first();
            //dd($empresa);
            $usuario=User::where('PERSONA_id','=',$personal)->first();

            $empleado=empleado::where('PERSONA_id','=',$personal)->first();
           
            return view('usuarios.usuariosShow',['persona'=>$persona,'provedoc'=>$provedoc,'empresa'=>$empresa,'usuario'=>$usuario,'empleado'=>$empleado]);
        }
}
