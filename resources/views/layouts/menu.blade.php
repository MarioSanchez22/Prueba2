@php
$usuario=Auth::user();
use App\rol;
use App\menu;
use App\permiso;
use App\rol_usuario;
use App\submenu;
use App\empresa;
$permiso_usuario=permiso::where('id','=',$usuario->id)
                        ->where('PERMISO_estado','=',1)->get();
                        
$menu=array();
$submenu=array();
if (! $permiso_usuario->isEmpty()) {
    for ($i=0; $i <sizeof($permiso_usuario) ; $i++) {
        if ($permiso_usuario[$i]->PERMISO_estado==1) {
            $valor2=submenu::where('SUBMENU_id','=',$permiso_usuario[$i]->SUBMENU_id)->first();
            if (in_array($valor2,$submenu)==false) {
                $submenu[$i]=$valor2;
            }
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
<div class="left-side-menu " style="background-color:#fff;top: 50px;width: 259px" >
    <style>
        .footer{
            left: 260px;
        }
 /*        body{
            font-family: "Roboto", Helvetica Neue, Helvetica, Arial, sans-serif!important;
    font-size: 13px;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            font-family: "Roboto", Helvetica Neue, Helvetica, Arial, sans-serif!important;
        } */
    </style>
<div class="slimscroll-menu" >
   <!-- User box -->
   <div class="user-box ">
       <div class="row">
           <div class="col-md-3 text-right" style="left:10px">
            <img src="{{asset('assets/images/users/user.png')}}" alt="user-img" title="Mat Helme" class="rounded-circle avatar-sm">
           </div>
           <div class="col-md-5 text-left" style="top: -10px;">
          
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" style="font-weight: 600;
                font-size: 13px;" >{{auth()->user()->email}}</a>
              
            <p class="text-muted">Admin Head</p>
            
           </div>
          <div class="col-md-2 text-right" style="left: 30px;">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown"><i class="fe-settings" style="font-size: 17px"></i></a>
           
            </div>
          </div>
   
    
 </div>
    
</div>
    <!--- Sidemenu -->
    <div id="sidebar-menu" >
        <style>
            #sidebar-menu>ul>li>a.active{
                background: #f5f5f5;
                color: #333333!important;
                font-family: "Roboto", Helvetica Neue, Helvetica, Arial, sans-serif!important;

            }
        </style>
        <style>
            .nav-second-level li.active>a {
    color: #2d557f;
    font-weight: 700;
    font-family: "Roboto", Helvetica Neue, Helvetica, Arial, sans-serif!important;
}
        </style>
      <style>
          #sidebar-menu>ul>li>a{
              color:#333333;
              font-size: 13px!important;
              font-weight: 550;
              font-family: "Roboto", Helvetica Neue, Helvetica, Arial, sans-serif!important;
          }
          #sidebar-menu>ul>li>a i{
              font-weight: 600;
          }
          #sidebar-menu>ul>li>ul{
              padding-left: 30px;
          }
      </style>
      <style>
          .content-page{
              margin-top: 50px;
              padding: 0 10px 5px 25px;
          }
      </style>
      <style>
          .logo-box{
              height: 50px!important;
          }
      </style>
        <ul class="metismenu" id="side-menu">

            <style>
                .nav-second-level>li>a, .nav-thrid-level>li>a {
            color: #3c3b3b;
            font-size: 13px;
            
          }
            </style>

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
                            <a href="{{route($submenus->SUBMENU_ruta)}}" class="nav-link"><i class="fe-chevrons-right" style="padding-right: 8px;"></i>{{$submenus->SUBMENU_descripcion}}</a>
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
