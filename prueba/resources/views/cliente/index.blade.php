
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        @include('layouts.estilos')

    </head>

    <body>

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
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                        <li class="breadcrumb-item active">Calendar</li>
                                    </ol>
                                </div>
                                <div class="row">
                                 <div class="col-md-8"><h4 class="page-title">CLIENTES</h4></div>


                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                          <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header" style="background:#f1f5f7">
                                    <div class="row">
                                        <div class="col-md-3">
                                         <label for="">RUC/DNI:</label>
                                     </div>
                                     <div class="col-md-3">
                                        <label for="">NOMBRE:</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">fecha 1:</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">fecha 2:</label>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn  btn-primary btn-sm" onclick="location.href='{{route('proveedorCreate')}}'"><span class=" fa fa-user-plus"> </span>  Proveedor</button>
                                    </div>
                                 </div>

                                    </div>
                                    <div class="card-body" style="background:#f7fafb">
                                    
                                        <div class="row">
                                            <div class="col-md-3">
                                            <input type="text"  id="PROVE_ruc" name="PROVE_ruc" class="form-control form-control-sm">
                                            </div>
                                            <div class="col-md-3">
                                            <input type="text" id="PROVE_razon_social" name="PROVE_razon_social" class="form-control form-control-sm">
                                            </div>
                                            <div class="col-md-3">
                                            <input type="text" id="PROVE_etiqueta" name="PROVE_etiqueta" class="form-control form-control-sm">
                                            </div>
                                            <div class="col-md-3">
                                            <button class="btn  btn-blue btn-sm"  id="buscar" name="buscar"><span class=" fa fa-search-plus"> </span>  Buscar</button>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <div id="tablageneral">
                                <table   data-toggle="table"
                                data-page-size="4"
                                data-buttons-class="xs btn-light"
                                data-pagination="true" class="table-bordered ">
                                <thead class="thead-light">
                                <tr>
                                <th data-field="state" >#</th>
                                <th data-field="id" data-switchable="false">RUC</th>
                                <th data-field="name">Razon social</th>


                                <th data-field="amount">Email</th>
                                <th data-field="amRount">Telefono</th>
                                <th data-field="amTount">Etiqueta</th>
                                <th data-field="user-status">Estado</th>
                                <th data-field="amouWnt">Opciones</th>
                                </tr>
                                </thead>
                                    <tbody>
                                    @foreach ($proveedor as $proveedores)
                                        <tr>
                                                <td>{{$loop->index+1}}</td>
                                                <td>{{$proveedores->PROVE_ruc}}</td>
                                                <td>{{$proveedores->PROVE_razon_social}}</td>
                                                <td>{{$proveedores->PROVE_email}}</td>
                                                <td>{{$proveedores->PROVE_telefono}}</td>
                                                <td>{{$proveedores->PROVE_etiqueta}}</td>
                                                <td>{{$proveedores->PROVE_estado}}</td>
                                                <td><a href="{{route('proveedorShow',[ $proveedores->PROVE_id] )}}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a> </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    </table>
                                    </div>
   
     <!-- Bootstrap Tables js -->
 
                                <div id ="tabla1" >
                                
                                </div>
                                
                                
                    </div>
                       <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
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

@include('layouts.scripts')



<script>
     $('#buscar').click(function(){
        $('#tablageneral').hide();
    var ruc=$('#PROVE_ruc').val();
    var razon=$('#PROVE_razon_social').val();
    var etiqueta=$('#PROVE_etiqueta').val();
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
