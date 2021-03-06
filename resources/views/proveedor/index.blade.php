@php
  use App\proveedor_contacto;
  use App\proveedor_cuenta;
@endphp

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{csrf_token()}}"/>

        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">


        <!-- App css -->
          <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
          <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
          <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
          <link href="{{asset('assets/libs/bootstrap-table/bootstrap-table.min.css')}}" rel="stylesheet" type="text/css" />
          <link href="{{asset('assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />

    </head>
    <body>
        @include('layouts._preReload')
        <!-- Begin page -->
        <div id="wrapper">
            @include('layouts.header')
            <!-- ========= Left Sidebar Start ========== -->
           
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
                                        <i class="mdi mdi-24px mdi-home-city" style=" margin-right: -6px;color:#373f5f"></i> PROVEEDORES
                                    </div>
                                    <div class="col-md-8" style="padding-top: 6px">
                                        <button type="button" class="btn  btn-primary btn-sm" style="margin-left:84%" onclick="location.href='{{route('proveedorCreate')}}'"><span class=" fa fa-user-plus"> </span>  Proveedor</button>
                                    </div>
                            </div>
                        </div>

                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col 12">
                      <div class="card-box " style="padding-bottom: 8px; padding-top: 8px; margin-bottom: 0px; background: #566675; color:#fff">

                        <div class="row">
                        <div class="col-md-3">
                            <form action="" class="form-inline">
                            <div class="form-group">
                            <label class="control-label" >RUC:   </label>&nbsp&nbsp
                             <input type="text"  id="PROVE_ruc" name="PROVE_ruc" class="form-control form-control-sm">
                            </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <form action="" class="form-inline">
                            <div class="form-group">
                            <label class="control-label" >Razon social: </label>&nbsp&nbsp
                            <input type="text" id="PROVE_razon_social" name="PROVE_razon_social" class="form-control form-control-sm">
                            </div>
                        </form>
                        </div>
                        <div class="col-md-3">
                            <form action="" class="form-inline">
                            <div class="form-group">
                            <label class="control-label" >Etiquetas: </label> &nbsp&nbsp
                             <input type="text" id="PROVE_etiqueta" name="PROVE_etiqueta" class="form-control form-control-sm">
                            </div>
                            </form>
                        </div>
                        <div class="col-md-2" style="padding-left: 10%" >
                             <button class="btn  btn-blue btn-sm"  id="buscar" name="buscar"><i class="fe-search" style="font-size:16px"></i>  </button>

                            </div>
                        </div>

                      </div>

                          <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body" style="background:#fff">
                                <!--  Modal content for the above example -->
 <div class="modal fade bs-example-modal-lg" id="modal"  role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Agregar contacto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-sm-2"><label >Cargo: </label></div>
                    <span class="col-sm-1"></span>
                    <div class="col-sm-2"><label >Nombre: </label></div>
                    <span class="col-sm-1"></span>
                    <div class="col-sm-2"><label >Número: </label></div>
                    <span class="col-sm-1"></span>
                    <div class="col-sm-2"><label >Email: </label></div>
                </div>
                <div id="div_100" class="row" style="margin-bottom: 2%;">
                    <input type="text" name="PROVECONT_descripcion" id="PROVECONT_descripcion"  class="form-control form-control-sm col-sm-2" style="margin-left: 2%;">
                        <span class="col-sm-1"></span>
                        <input type="text" name="PROVECONT_nombre" id="PROVECONT_nombre"  class="form-control form-control-sm col-sm-2" >
                        <span class="col-sm-1"></span>
                        <input type="number" name="PROVECONT_telefono" id="PROVECONT_telefono"  class="form-control form-control-sm col-sm-2" >
                        <span class="col-sm-1"></span>
                        <input type="email" name="PROVECONT_email"  id="PROVECONT_email" class=" form-control form-control-sm col-sm-2" style="margin-right: 2%;" >
                        <!--<input class="btn btn-primary bt_plus" id="100" type="button" value="+">-->
                <button class="btn btn-primary bt_plus"  type="button"  style="padding: 4px 8px; background-color: #446e8c; border-Color:#04233a;"><i class="fe-phone-forwarded" style="width:20px; height:20px;" ></i></button>
                        <div class="error_form"></div>
                </div>
                        <button class="btn btn-primary bt_guarda" id="bt_guarda" style=""  type="button"  style="padding: 4px 8px; background-color: #446e8c; border-Color:#04233a;">Guardar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                                <div id="tablageneral" class="bounceInLeft animated">
                                <table   data-toggle="table"
                                data-page-size="6"
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
                                        <tr id="{{$proveedores->PROVE_id}}">
                                                <td>{{$loop->index+1}}</td>
                                                <td>{{$proveedores->PROVE_ruc}}</td>
                                                <td>{{$proveedores->PROVE_razon_social}}</td>
                                                <td>{{$proveedores->PROVE_email}}</td>
                                                <td>{{$proveedores->PROVE_telefono}}</td>
                                                <td>{{$proveedores->PROVE_etiqueta}}</td>
                                                <td>
                                                    @if($proveedores->PROVE_estado==1)
                                                        <span class="badge bg-soft-success text-success shadow-none">Activo</span>
                                                    @else
                                                        <span class="badge bg-soft-danger text-danger shadow-none">Bloqueado</span>
                                                    @endif
                                                    </td>
                                                    <td>
                                                        <div class="dropdown float-right">
                                                            <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                                <i class=" mdi mdi-settings m-0 text-muted h3"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="{{route('proveedorShow',[ $proveedores->PROVE_id] )}}" class="dropdown-item" title="Ver"> <i class="mdi mdi-eye"></i> Ver</a>
                                                                 <a href="{{route('proveedorEdit',[$proveedores->PROVE_id])}}" class="dropdown-item" title="Editar"> <i class="mdi mdi-square-edit-outline"></i> Editar</a>
                                                                 <a   data-toggle="modal" href="#modal" class="dropdown-item" > <i class="mdi mdi-plus"></i> Agregar contacto</a>
                                                            </div>
                                                        </div>

                                                        @if($proveedores->PROVE_estado==1)
                                                            <a href="#" class="action-icon" title="" onclick="bloquear({{$proveedores->PROVE_id}})"> <i class="mdi mdi-block-helper"></i></a>
                                                        @else
                                                            <a href="#" onclick="activar({{$proveedores->PROVE_id}})"" class="action-icon" title="Activar"> <i class="mdi mdi-transfer-up"></i></a>
                                                        @endif
                                                    </td>
                                                </tr>
                                    @endforeach
                                    </tbody>
                                    </table>
                                    </div>

     <!-- Bootstrap Tables js -->

                                <div id ="tabla1" class="bounceInLeft animated">

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
       

 <!-- Vendor js -->

 <script src="{{asset('assets/js/vendor.min.js')}}"></script>
 <!-- App js-->
 <script src="{{asset('assets/js/app.min.js')}}"></script>

 <!-- Bootstrap Tables js -->
     <script src="{{asset('assets/libs/bootstrap-table/bootstrap-table.min.js')}}"></script>
     <script src="{{asset('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
     <script src="{{asset('assets/js/pages/bootstrap-tables.init.js')}}"></script>
      <script src="{{asset('assets/libs/datatables/dataTables.bootstrap4.js')}}"></script>

<script src="{{asset('assets/js/proveedor.js')}}"></script>
    </body>
</html>
