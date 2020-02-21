@php
$usuario=Auth::user();
use App\rol;
use App\menu;
use App\permiso;
use App\rol_usuario;
use App\submenu;
use App\empresa;


$permiso_usuario=permiso::where('id','=',$usuario->id)->get();
$menu=array();
$submenu=array();
if (! $permiso_usuario->isEmpty()) {
    for ($i=0; $i <sizeof($permiso_usuario) ; $i++) {
        $valor2=submenu::where('SUBMENU_id','=',$permiso_usuario[$i]->SUBMENU_id)->first();
        if (in_array($valor2,$submenu)==false) {
            $submenu[$i]=$valor2;
        }
    }
    if ( sizeof($submenu)>0) {
        for ($i=0; $i < sizeof($submenu); $i++) {
            $valor=menu::where('MENU_id','=',$submenu[$i]->MENU_id)->first();
                if (in_array($valor,$menu)==false) {
                    $menu[$i]=$valor;
            }
        }
    }

}
/*dd($permiso_usuario);
dd($rol_usuario);
    $l=0;
    for ($i=0; $i < $rol_usuario->count() ; $i++) {
            $permiso2=permiso::where('ROL_id','=',$rol_usuario[$i]->ROL_id)->get();
            for ($j=0; $j < $permiso2->count() ; $j++) {
                $permiso[$l]=$permiso2[$j];
                $l++;
            }
    }
    for ($i=0; $i < sizeof($permiso) ; $i++) {
        $submenu[$i]=submenu::where('SUBMENU_id','=',$permiso[$i]->SUBMENU_id)->first();
    }
    $menu=array();
    for ($i=0; $i < sizeof($submenu); $i++) {
        $valor=menu::where('MENU_id','=',$submenu[$i]->MENU_id)->first();
            if (in_array($valor,$menu)==false) {
                $menu[$i]=$valor;
            }
    }*/



/*$rol_usuario=rol_usuario::where('USU_id','=',$usuario->id)->get();
    for ($i=0; $i < sizeof($rol_usuario) ; $i++) {
        $permiso[$i]=permiso::where('ROLUSU_id','=',$rol_usuario[$i]->ROLUSU_id)->get();
    }
$k=0;
    for ($i=0; $i < sizeof($permiso) ; $i++) {
        for($j=0; $j < sizeof($permiso[$i]) ; $j++){
            $submenu[$k]=submenu::where('SUBMENU_id','=',$permiso[$i][$j]->SUBMENU_id)->first();
            $k++;
        }
    }
    for ($i=0; $i < sizeof($submenu); $i++) {
        $menuaux[$i]=menu::where('MENU_id','=',$submenu[$i]->MENU_id)->first();
    }

    $colect2=collect();
    $colect=collect();
    $merged=$colect->merge($menuaux);
    $merged=$merged->unique();
    $submenu2=$colect2->merge($submenu);
    dd($submenu2);*/

    //dd($submenu2);
@endphp
<div class="left-side-menu " style="background-color:#f9f9f9" >
<div class="slimscroll-menu" >

    <!--- Sidemenu -->
    <div id="sidebar-menu" >

        <ul class="metismenu" id="side-menu">

            <li class="menu-title" >Navigation</li>

            <li >
                <a href="javascript: void(0);">
                    <i class="fe-airplay"></i>
                    <span class="badge badge-success badge-pill float-right">4</span>
                    <span> Dashboards </span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li>
                        <a href="index.html">Dashboard 1</a>
                    </li>
                    <li>
                        <a href="dashboard-2.html">Dashboard 2</a>
                    </li>
                    <li>
                        <a href="dashboard-3.html">Dashboard 3</a>
                    </li>
                    <li>
                        <a href="dashboard-4.html">Dashboard 4</a>
                    </li>
                </ul>
            </li>
            @foreach ($menu as $menus)
            <li >
                <a href="javascript: void(0);" class="nav-link" >
                    <i class="{{$menus->MENU_icono}}"></i>
                    <span> {{$menus->MENU_descripcion}}</span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    @foreach ($submenu as $submenus)
                        @if ($submenus->MENU_id == $menus->MENU_id)
                        <li >
                            <a href="{{route($submenus->SUBMENU_ruta)}}" class="nav-link">{{$submenus->SUBMENU_descripcion}}</a>
                        </li>
                        @endif
                    @endforeach

                </ul>
            </li>
            @endforeach
        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>
</div>
</div>
