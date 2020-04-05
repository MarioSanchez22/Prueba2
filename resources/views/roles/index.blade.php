@php
use App\rol;
use App\menu;
use App\permiso;
use App\rol_usuario;
use App\submenu;
use App\empresa;
use App\User;
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
        <link href="assets/libs/jquery-nice-select/nice-select.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/multiselect/multi-select.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
  <!-- Bootstrap Tables css -->
  <link href="{{asset('assets/libs/bootstrap-table/bootstrap-table.min.css')}}" rel="stylesheet" type="text/css" />

  <link href="{{asset('assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        @include('layouts._preReload')
        <!-- Begin page -->
        <div id="wrapper">

            @include('layouts.header')

            <!-- ========== Left Sidebar Start ========== -->
         


                @include('layouts.menu')

           
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
                                    <div class="col-sm-7 col-md-7 col-lg-4" style="font-size: 19px;font-weight: bold;padding-top: 5px; padding-left: 0px">
                                        <i class="mdi mdi-24px mdi-home-city" style=" margin-right: -6px;color:#373f5f"></i>REGISTRO DE ROLES
                                    </div>
                                    <div class="col-md-8" style="padding-top: 6px">
                                        <button type="button" class="btn  btn-primary btn-sm" style="margin-left:84%" onclick="location.href='{{route('rolCreate')}}'"><span class=" fa fa-user-plus"> </span>  Rol</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                    <div  class="row bounceInUp animated">
                        <div class="col-md-12">
                          <div class="card" style=" margin-bottom: 0px;">
                            <div class="card-body col-md-12" style="padding-left: 0px; padding-right: 0px;">
                                        <div class="card-box " style=" padding-top: 0px; margin-bottom: 0px;padding-bottom: 5px;">
                                            <ul class="nav nav-tabs" style="background:#f5f5f5">
                                                <li class="nav-item">
                                                    <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                       Roles
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane show active" id="home">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <table   data-toggle="table"
                                                            data-page-size="6"
                                                            data-buttons-class="xs btn-light"
                                                            data-pagination="true" class="table-bordered" >
                                                            <thead class="thead-light">
                                                            <tr>
                                                            <th data-field="state" >#</th>
                                                            <th data-field="id" data-switchable="false">Rol</th>
                                                            <th data-field="Estado">Estado</th>
                                                            <th data-field="Opciones">Opciones</th>
                                                            </tr>
                                                            </thead>
                                                                <tbody>
                                                                    @foreach ($rol as $roles)
                                                                    <tr>
                                                                        <td>{{$loop->index + 1}}</td>
                                                                        <td>{{$roles->ROL_descripcion}}</td>
                                                                        <td>
                                                                            @if($roles->ROL_estado==1)
                                                                                <span class="badge bg-soft-success text-success shadow-none">Activo</span>
                                                                            @else
                                                                                <span class="badge bg-soft-danger text-danger shadow-none">Bloqueado</span>
                                                                            @endif
                                                                        </td>
                                                                        <td>
                                                                            <a href="{{route('rolEdit',[$roles->ROL_id])}}" class="action-icon" title="Editar"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                </div>
                                                </div>
                                        <div class="modal-footer d-flex" style="background:#f5f5f5">
                                      </div>
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

                            </div>
                        </div>
                    </div>
                    <div class="row" >
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
 <script src="assets/js/vendor.min.js"></script>

 <script src="assets/libs/jquery-nice-select/jquery.nice-select.min.js"></script>
 <script src="assets/libs/switchery/switchery.min.js"></script>
 <script src="assets/libs/multiselect/jquery.multi-select.js"></script>
 <script src="assets/libs/select2/select2.min.js"></script>
 <script src="assets/libs/jquery-mockjax/jquery.mockjax.min.js"></script>
 <script src="assets/libs/autocomplete/jquery.autocomplete.min.js"></script>
 <script src="assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
 <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
 <script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

 <!-- Init js-->
 <script src="assets/js/pages/form-advanced.init.js"></script>

 <!-- App js -->
 <script src="assets/js/app.min.js"></script>
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

    </body>
</html>
