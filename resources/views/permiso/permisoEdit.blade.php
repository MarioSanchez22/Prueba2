
@php
use App\permiso;
@endphp
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- Plugins css -->
        <link href="{{asset('assets/libs/jquery-nice-select/nice-select.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/multiselect/multi-select.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- Bootstrap Tables css -->
  <link href="{{asset('assets/libs/bootstrap-table/bootstrap-table.min.css')}}" rel="stylesheet" type="text/css" />

  <link href="{{asset('assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div  id="preloader">

            <div id="status" >

                @php
                $usuario=Auth::user();
                @endphp

                <strong style="font-size: 20px; color:#2e4965">@if ($usuario->EMPRESA_id==1)
                 MACROchips
                  @else
                  NeptComputer
                  @endif</strong>
                  <div class="spinner-grow avatar-sm text-secondary m-2" role="status"></div>

            </div>
        </div>
        <!-- Begin page -->
        <div id="wrapper">

            @include('layouts.header')

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">
                @include('layouts.menu')
            </div>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <div class="content">
                    <!-- Start Content-->
                    <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">

                                </div>
                                <div class="row">
                                    <div class="col-12">

                                <div class="row icons-list-demo" style="color:#373f5f">
                                    <div class="col-sm-12 col-md-7 col-lg-4" style="font-size: 19px;font-weight: bold;padding-top: 5px; padding-left: 0px">
                                        <i class="mdi mdi-24px mdi-home-city" style=" margin-right: -6px;color:#373f5f"></i>PRIVILEGIOS: {{$usuario->email}}
                                    </div>

                            </div>
                        </div>

                    </div>
                            </div>
                        </div>
                    </div>

                    <div  class="row bounceInUp animated">
                        <div class="col-md-12">
                          <div class="card" style=" margin-bottom: 0px;   ">
                            <div class="card-body col-md-12" style="padding-left: 0px; padding-right: 0px;">
                                        <div class="card-box " style=" padding-top: 0px; margin-bottom: 0px;padding-bottom: 5px;">
                                            <ul class="nav nav-tabs" style="background:#f5f5f5">
                                                <li class="nav-item">
                                                    <a href="#messages" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                        Edición de privilegios
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content ">
                                                <div class="tab-pane show active" id="messages">

                                                        <div class="col-md-12">
                                                            <form action="{{route('privilegiosUpdate',[$usuario])}}" method="POST"      enctype="multipart/form-data" class="col-md-12">
                                                                {{ csrf_field()}}
                                                            <table class="table table-bordered">
                                                                <thead>

                                                                    <tr style="background-color: #446e8c;color: white;">
                                                                        @php
                                                                            $permiso=permiso::where('id','=',$usuario->id)->first();
                                                                        @endphp
                                                                    <th colspan="2"  style="vertical-align: middle;"> <input type="text" class="form-control form-control-sm"  name="PERMISO_descripcion"  id="PROVE_direccion" placeholder="Rol*" value="{{$permiso->PERMISO_descripcion}}" required> </div> </th>
                                                                        <th colspan="3" class="text-center" style="vertical-align: middle;">Privilegios</th>
                                                                    </tr>
                                                                    <tr style="background-color: #446e8c;color: white;">
                                                                        <th><div class="switchery-demo  text-center">Vistas</div></th>
                                                                        <th><div class="switchery-demo  text-center">Permisos</div></th>
                                                                        <th><div class="switchery-demo  text-center">Crear</div></th>
                                                                        <th><div class="switchery-demo  text-center">Editar</div></th>
                                                                        <th><div class="switchery-demo  text-center">Eliminar</div> </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($menu as $menus)
                                                                    <tr style="background-color: #c6ced8a1; color: #343a40;">
                                                                        <th>{{$menus->MENU_descripcion}} </th>
                                                                        <td>
                                                                            <div class="custom-control custom-switch" style="">
                                                                            <input type="checkbox" class="custom-control-input" id="MENU-{{$menus->MENU_id}}" checked>
                                                                            <label class="custom-control-label" for="MENU-{{$menus->MENU_id}}" style="margin:0 50%;"
                                                                            onclick="ver({{$menus->MENU_id}})"></label>

                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="custom-control custom-switch">
                                                                            <input type="checkbox" class="custom-control-input" id="MENU-{{$menus->MENU_id}}-CREAR" checked>
                                                                            <label class="custom-control-label" for="MENU-{{$menus->MENU_id}}-CREAR" onclick="crear({{$menus->MENU_id}})" style="margin:0 50%;"></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="custom-control custom-switch">
                                                                            <input type="checkbox" class="custom-control-input" id="MENU-{{$menus->MENU_id}}-EDITAR" checked>
                                                                            <label class="custom-control-label" for="MENU-{{$menus->MENU_id}}-EDITAR" onclick="editar({{$menus->MENU_id}})" style="margin:0 50%;"></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="custom-control custom-switch">
                                                                            <input type="checkbox" class="custom-control-input" id="MENU-{{$menus->MENU_id}}-ELIMINAR" checked>
                                                                            <label class="custom-control-label" for="MENU-{{$menus->MENU_id}}-ELIMINAR" onclick="eliminar({{$menus->MENU_id}})" style="margin:0 50%;"></label>
                                                                            </div>
                                                                        </td>
                                                                        @foreach ($submenu as $submenus)
                                                                        @if ($menus->MENU_id==$submenus->MENU_id)
                                                                            @php
                                                                                $permiso=permiso::where('id','=',$usuario->id)
                                                                                ->where('SUBMENU_id','=',$submenus->SUBMENU_id)->first();
                                                                            @endphp
                                                                            <tr>
                                                                                <td ><span style="margin-left: 10%;">{{$submenus->SUBMENU_descripcion}}</span></td>
                                                                                @if ($permiso != null)
                                                                                    @if ($permiso->PERMISO_estado ==1)
                                                                                    <td>
                                                                                        <div class="custom-control custom-switch">
                                                                                        <input type="checkbox" class="custom-control-input SUBMENU-{{$menus->MENU_id}}" id="SUBMENU-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}" name="SUBMENU_id[]" value="{{$submenus->SUBMENU_descripcion}}"checked>
                                                                                        <label class="custom-control-label" for="SUBMENU-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}" style="margin:0 50%;" onclick="vista({{$menus->MENU_id}},{{$submenus->SUBMENU_id}})"></label>
                                                                                        </div>
                                                                                    </td>
                                                                                    @else
                                                                                    <td>
                                                                                        <div class="custom-control custom-switch">
                                                                                        <input type="checkbox" class="custom-control-input SUBMENU-{{$menus->MENU_id}}" id="SUBMENU-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}" name="SUBMENU_id[]" value="{{$submenus->SUBMENU_descripcion}}">
                                                                                        <label class="custom-control-label" for="SUBMENU-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}" style="margin:0 50%;" onclick="vista({{$menus->MENU_id}},{{$submenus->SUBMENU_id}})"></label>
                                                                                        </div>
                                                                                    </td>
                                                                                    @endif

                                                                                    @if ($permiso->PERMISO_crear ==1)
                                                                                    <td>
                                                                                        <div class="custom-control custom-switch">
                                                                                        <input type="checkbox" class="custom-control-input SUBMENU-CREAR-{{$menus->MENU_id}}" id="SUBMENU-CREAR-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}"  name="PERMISO_crear[]" value="{{$submenus->SUBMENU_descripcion}}"checked>
                                                                                        <label class="custom-control-label" for="SUBMENU-CREAR-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}" style="margin:0 50%;"></label>
                                                                                        </div>
                                                                                    </td>

                                                                                    @else
                                                                                    <td>
                                                                                        <div class="custom-control custom-switch">
                                                                                        <input type="checkbox" class="custom-control-input SUBMENU-CREAR-{{$menus->MENU_id}}" id="SUBMENU-CREAR-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}"  name="PERMISO_crear[]" value="{{$submenus->SUBMENU_descripcion}}">
                                                                                        <label class="custom-control-label" for="SUBMENU-CREAR-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}" style="margin:0 50%;"></label>
                                                                                        </div>
                                                                                    </td>
                                                                                    @endif
                                                                                    @if ($permiso->PERMISO_editar==1)
                                                                                    <td>
                                                                                        <div class="custom-control custom-switch">
                                                                                        <input type="checkbox" class="custom-control-input SUBMENU-EDITAR-{{$menus->MENU_id}}" id="SUBMENU-EDITAR-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}"  name="PERMISO_editar[]" value="{{$submenus->SUBMENU_descripcion}}"checked>
                                                                                        <label class="custom-control-label" for="SUBMENU-EDITAR-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}" style="margin:0 50%;"></label>
                                                                                        </div>
                                                                                    </td>
                                                                                    @else
                                                                                    <td>
                                                                                        <div class="custom-control custom-switch">
                                                                                        <input type="checkbox" class="custom-control-input SUBMENU-EDITAR-{{$menus->MENU_id}}" id="SUBMENU-EDITAR-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}"  name="PERMISO_editar[]" value="{{$submenus->SUBMENU_descripcion}}">
                                                                                        <label class="custom-control-label" for="SUBMENU-EDITAR-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}" style="margin:0 50%;"></label>
                                                                                        </div>
                                                                                    </td>
                                                                                    @endif
                                                                                    @if ($permiso->PERMISO_eliminar ==1)
                                                                                    <td>
                                                                                        <div class="custom-control custom-switch">
                                                                                        <input type="checkbox" class="custom-control-input SUBMENU-ELIMINAR-{{$menus->MENU_id}}" id="SUBMENU-ELIMINAR-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}"  name="PERMISO_eliminar[]" value="{{$submenus->SUBMENU_descripcion}}"checked>
                                                                                        <label class="custom-control-label" for="SUBMENU-ELIMINAR-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}" style="margin:0 50%;""></label>
                                                                                        </div>
                                                                                    </td>
                                                                                    @else
                                                                                    <td>
                                                                                        <div class="custom-control custom-switch">
                                                                                        <input type="checkbox" class="custom-control-input SUBMENU-ELIMINAR-{{$menus->MENU_id}}" id="SUBMENU-ELIMINAR-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}"  name="PERMISO_eliminar[]" value="{{$submenus->SUBMENU_descripcion}}">
                                                                                        <label class="custom-control-label" for="SUBMENU-ELIMINAR-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}" style="margin:0 50%;""></label>
                                                                                        </div>
                                                                                    </td>
                                                                                    @endif
                                                                                @else
                                                                                <td>
                                                                                    <div class="custom-control custom-switch">
                                                                                    <input type="checkbox" class="custom-control-input SUBMENU-{{$menus->MENU_id}}" id="SUBMENU-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}" name="SUBMENU_id[]" value="{{$submenus->SUBMENU_descripcion}}">
                                                                                    <label class="custom-control-label" for="SUBMENU-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}" style="margin:0 50%;"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="custom-control custom-switch">
                                                                                    <input type="checkbox" class="custom-control-input SUBMENU-CREAR-{{$menus->MENU_id}}" id="SUBMENU-CREAR-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}"  name="PERMISO_crear[]" value="{{$submenus->SUBMENU_descripcion}}">
                                                                                    <label class="custom-control-label" for="SUBMENU-CREAR-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}" style="margin:0 50%;"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="custom-control custom-switch">
                                                                                    <input type="checkbox" class="custom-control-input SUBMENU-EDITAR-{{$menus->MENU_id}}" id="SUBMENU-EDITAR-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}"  name="PERMISO_editar[]" value="{{$submenus->SUBMENU_descripcion}}">
                                                                                    <label class="custom-control-label" for="SUBMENU-EDITAR-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}" style="margin:0 50%;"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="custom-control custom-switch">
                                                                                    <input type="checkbox" class="custom-control-input SUBMENU-ELIMINAR-{{$menus->MENU_id}}" id="SUBMENU-ELIMINAR-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}"  name="PERMISO_eliminar[]" value="{{$submenus->SUBMENU_descripcion}}">
                                                                                    <label class="custom-control-label" for="SUBMENU-ELIMINAR-{{$menus->MENU_id}}-{{$submenus->SUBMENU_id}}" style="margin:0 50%;""></label>
                                                                                    </div>
                                                                                </td>
                                                                                @endif
                                                                            </tr>



                                                                        @endif
                                                                    @endforeach
                                                                    </tr>
                                                                    @endforeach

                                                                </tbody>
                                                            </table>
                                                            <div class="modal-footer d-flex" style="background:#f5f5f5">
                                                                <a href="{{route('privilegiosIndex')}}"><button type="button" class="btn btn-primary" style="background-color: #af2323;border-color: #af2323;">Cancelar</button></a>
                                                                <button type="submit" class="btn btn-primary" style="background-color: #446e8c;">Save changes</button>
                                                              </div>
                                                        </div>
                                                    </form>
                                                        </div>
                                                </div> <br>

                                        <!-- end card-box-->

                                </div>
                                <!-- end row -->
                            </div>

                            <!-- /.card-body -->
                          </div>
                        <!-- /.col -->
                      </div>
                    </div> <!-- container -->
                </div> <!-- content -->





                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2015 - 2019 &copy; UBold theme by <a href="">Coderthemes</a>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                    </div>
                    <h5><a href="javascript: void(0);">Geneva Kennedy</a> </h5>
                    <p class="text-muted mb-0"><small>Admin Head</small></p>
                </div>
                <!-- Settings -->
                <hr class="mt-0" />
                <h5 class="pl-3">Basic Settings</h5>
                <hr class="mb-0" />

                <div class="p-3">
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox1" type="checkbox" checked>
                        <label for="Rcheckbox1">
                            Notifications
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox2" type="checkbox" checked>
                        <label for="Rcheckbox2">
                            API Access
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox3" type="checkbox">
                        <label for="Rcheckbox3">
                            Auto Updates
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox4" type="checkbox" checked>
                        <label for="Rcheckbox4">
                            Online Status
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-0">
                        <input id="Rcheckbox5" type="checkbox" checked>
                        <label for="Rcheckbox5">
                            Auto Payout
                        </label>
                    </div>
                </div>
                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="px-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->
            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <script role="preloader" src="{{asset('assets/libs/jquery-nice-select/jquery.nice-select.min.js')}}"></script>
 <!-- Vendor js -->
 <script src="{{asset('assets/js/vendor.min.js')}}"></script>

 <script src="{{asset('assets/libs/jquery-nice-select/jquery.nice-select.min.js')}}"></script>
 <script src="{{asset('assets/libs/switchery/switchery.min.js')}}"></script>
 <script src="{{asset('assets/libs/multiselect/jquery.multi-select.js')}}"></script>
 <script src="{{asset('assets/libs/select2/select2.min.js')}}"></script>
 <script src="{{asset('assets/libs/jquery-mockjax/jquery.mockjax.min.js')}}"></script>
 <script src="{{asset('assets/libs/autocomplete/jquery.autocomplete.min.js')}}"></script>
 <script src="{{asset('assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
 <script src="{{asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
 <script src="{{asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

 <!-- Init js-->
 <script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>

 <!-- App js -->
 <script src="{{asset('assets/js/app.min.js')}}"></script>
   <!-- Bootstrap Tables js -->
   <script src="{{asset('assets/libs/bootstrap-table/bootstrap-table.min.js')}}"></script>

   <!-- Init js -->
   <script src="{{asset('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('assets/js/pages/bootstrap-tables.init.js')}}"></script>
    <script src="{{asset('assets/libs/datatables/dataTables.bootstrap4.js')}}')}}"></script>
       <script src="{{asset('assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
       <script src="{{asset('assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
       <script src="{{asset('assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
       <script src="{{asset('assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
       <script src="{{asset('assets/libs/datatables/buttons.html5.min.js')}}"></script>
       <script src="{{asset('assets/libs/datatables/buttons.flash.min.js')}}"></script>
       <script src="{{asset('assets/libs/datatables/buttons.print.min.js')}}"></script>
       <script src="{{asset('assets/libs/datatables/dataTables.keyTable.min.js')}}"></script>
       <script src="{{asset('assets/libs/datatables/dataTables.select.min.js')}}"></script>
       <script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>




<script>
     $('#buscar').click(function(){
        var ruc=$('#PROVE_ruc').val();
        var razon=$('#PROVE_razon_social').val();
        var etiqueta=$('#PROVE_etiqueta').val();
        $('#tablageneral').hide();
        if(ruc==''){
            ruc='0';
        }
        if(razon==''){
            razon='0';
        }
        if(etiqueta==''){
            etiqueta='0';
        }
    $.ajax({
    url:"proveedor/buscar/"+ruc+"/"+razon+"/"+etiqueta,
    method:"GET",
    success:function(data1){
        $('#tabla1').html(data1);
        }
});
});

</script>
<script>
    function ver(menu){
            $('#MENU-'+menu+'').on('change',function(){
            if ($(this).is(':checked')) {
            var a=$('.switchery ');
            console.log(a);
                $('#MENU-'+menu+'-CREAR').prop('checked',true);
                $('#MENU-'+menu+'-EDITAR').prop('checked',true);
                $('#MENU-'+menu+'-ELIMINAR').prop('checked',true);
                $('#MENU-'+menu+'-CREAR').prop('disabled',false);
                $('#MENU-'+menu+'-EDITAR').prop('disabled',false);
                $('#MENU-'+menu+'-ELIMINAR').prop('disabled',false);


                $('.SUBMENU-'+menu).prop('checked',true);
                $('.SUBMENU-'+menu).prop('disabled',false);

                $('.SUBMENU-CREAR-'+menu).prop('checked',true);
                $('.SUBMENU-CREAR-'+menu).prop('disabled',false);

                $('.SUBMENU-EDITAR-'+menu).prop('checked',true);
                $('.SUBMENU-EDITAR-'+menu).prop('disabled',false);

                $('.SUBMENU-ELIMINAR-'+menu).prop('checked',true);
                $('.SUBMENU-ELIMINAR-'+menu).prop('disabled',false);
            }else{
                $('#MENU-'+menu+'-CREAR').prop('checked',false);
                $('#MENU-'+menu+'-EDITAR').prop('checked',false);
                $('#MENU-'+menu+'-ELIMINAR').prop('checked',false);
                $('#MENU-'+menu+'-CREAR').prop('disabled',true);
                $('#MENU-'+menu+'-EDITAR').prop('disabled',true);
                $('#MENU-'+menu+'-ELIMINAR').prop('disabled',true);


                $('.SUBMENU-'+menu).prop('checked',false);
                $('.SUBMENU-'+menu).prop('disabled',true);

                $('.SUBMENU-CREAR-'+menu).prop('checked',false);
                $('.SUBMENU-CREAR-'+menu).prop('disabled',true);

                $('.SUBMENU-EDITAR-'+menu).prop('checked',false);
                $('.SUBMENU-EDITAR-'+menu).prop('disabled',true);

                $('.SUBMENU-ELIMINAR-'+menu).prop('checked',false);
                $('.SUBMENU-ELIMINAR-'+menu).prop('disabled',true);
            }
        });
    }
</script>
<script>
    function crear(menu){

            $('#MENU-'+menu+'-CREAR').on('change',function(){
            if ($(this).is(':checked')) {
                $('.SUBMENU-CREAR-'+menu).prop('checked',true);
                $('.SUBMENU-CREAR-'+menu).prop('disabled',false);
            }else{
                $('.SUBMENU-CREAR-'+menu).prop('checked',false);
                $('.SUBMENU-CREAR-'+menu).prop('disabled',true);
            }
        });
    }
</script>
<script>
    function editar(menu){

            $('#MENU-'+menu+'-EDITAR').on('change',function(){
            if ($(this).is(':checked')) {
                $('.SUBMENU-EDITAR-'+menu).prop('checked',true);
                $('.SUBMENU-EDITAR-'+menu).prop('disabled',false);
            }else{
                $('.SUBMENU-EDITAR-'+menu).prop('checked',false);
                $('.SUBMENU-EDITAR-'+menu).prop('disabled',true);
            }
        });
    }
</script>
<script>
    function eliminar(menu){

            $('#MENU-'+menu+'-ELIMINAR').on('change',function(){
            if ($(this).is(':checked')) {
                $('.SUBMENU-ELIMINAR-'+menu).prop('checked',true);
                $('.SUBMENU-ELIMINAR-'+menu).prop('disabled',false);
            }else{
                $('.SUBMENU-ELIMINAR-'+menu).prop('checked',false);
                $('.SUBMENU-ELIMINAR-'+menu).prop('disabled',true);
            }
        });
    }
</script>

<script>
    function vista(menu,submenu){


            $('#SUBMENU-'+menu+'-'+submenu+'').on('change',function(){
                if ($(this).is(':checked')) {

                    $('#SUBMENU-CREAR-'+menu+'-'+submenu+'').prop('checked',true);
                    $('#SUBMENU-EDITAR-'+menu+'-'+submenu+'').prop('checked',true);
                    $('#SUBMENU-ELIMINAR-'+menu+'-'+submenu+'').prop('checked',true);

                    $('#SUBMENU-CREAR-'+menu+'-'+submenu+'').prop('disabled',false);
                    $('#SUBMENU-EDITAR-'+menu+'-'+submenu+'').prop('disabled',false);
                    $('#SUBMENU-ELIMINAR-'+menu+'-'+submenu+'').prop('disabled',false);
                }else{
                    $('#SUBMENU-CREAR-'+menu+'-'+submenu+'').prop('checked',false);
                    $('#SUBMENU-EDITAR-'+menu+'-'+submenu+'').prop('checked',false);
                    $('#SUBMENU-ELIMINAR-'+menu+'-'+submenu+'').prop('checked',false);

                    $('#SUBMENU-CREAR-'+menu+'-'+submenu+'').prop('disabled',true);
                    $('#SUBMENU-EDITAR-'+menu+'-'+submenu+'').prop('disabled',true);
                    $('#SUBMENU-ELIMINAR-'+menu+'-'+submenu+'').prop('disabled',true);
                }
            });
    }
</script>

    </body>
</html>
