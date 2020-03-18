@php
use App\marca;
use App\categoria_producto;
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
         <!-- App favicon -->
   <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">


   <!-- App css -->
     <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/libs/bootstrap-table/bootstrap-table.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    
        <!-- Sweet Alert-->
        <link href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    </head>
    <style>
        .swal2-modal{
            zoom:70%;
        }
    </style>
    <body>
        @include('layouts._preReload')
        <style>
            .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #5e6696;
                }
        </style>
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
                    <!--  Modal content for the above example -->
                    <div class="modal fade bs-example-modal-lg2" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg" style="margin-top: 10%;">
                            <div class="modal-content" style="width: 50%; margin:auto;">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Editar Marca</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Marca: </label>
                                                <input type="text" class="form-control form-control-sm" id="MARCA_descripcionE" name="MARCA_descripcionE">
                                                <input type="text" class="form-control form-control-sm" id="MARCA_idE" name="MARCA_idE" style="display: none;">
                                            </div>
                                                <button type="button" class="btn btn-dark waves-effect waves-light" onclick="marcaEditar()" >Actualizar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <!--  Modal content for the above example -->
                    <div class="modal fade bs-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg" style="margin-top: 10%;">
                            <div class="modal-content" style="width: 50%; margin:auto;">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Agregar Marca</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Marca:</label>
                                                <input type="text" class="form-control form-control-sm" id="MARCA_descripcion" name="MARCA_descripcion">
                                            </div>
                                                <button type="button"   class="btn btn-dark waves-effect waves-light" onclick="marcaRegistrar()" >Registrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

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
                                        <i class="mdi mdi-24px mdi-apps" style="margin:0 6px;color:#373f5f"></i>MARCAS
                                    </div>
                                    <div class="col-md-8" style="padding-top: 6px">
                                        <button type="button" class="btn  btn-primary btn-sm" style="margin-left:84%" data-toggle="modal" data-target=".bs-example-modal-lg"><span class=" fa fa-user-plus"> </span>&nbsp; Marca</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;" >
                        <div class="col 12 bounceInLeft animated">
                            <div class="card-box">
                            <div class="row">
                                <div class="col-md-10"  style="margin:0 auto;" id="listaMarcasNueva2">
                                </div>
                                <div class="col-md-10"  style="margin:0 auto;" id="listaMarcasNueva">
                                    <table data-toggle="table"
                                        data-page-size="5"
                                        data-buttons-class="xs btn-light"
                                        data-pagination="true" class="table-bordered " style="display: inline-table;">
                                        <thead class="thead-light">
                                                <th>#</th>
                                                <th>Descripción</th>
                                                <th>Opciones</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($marca as $marcas )
                                                <tr id="{{$marcas->MARCA_id}}">
                                                    <td>{{$loop->index+1}}</td>
                                                    <td >{{$marcas->MARCA_descripcion}}</td>
                                                    <td>
                                                        <a href="#" class="action-icon" data-toggle="modal" data-target=".bs-example-modal-lg2" title="Editar" onclick="MarcaBuscar({{$marcas->MARCA_id}})"><i class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon" title="Eliminar"><i class="mdi mdi-delete" onclick="MarcaEliminar({{$marcas->MARCA_id}})"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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



    <!-- Bootstrap Tables js -->
    <script src="{{asset('assets/libs/bootstrap-table/bootstrap-table.min.js')}}"></script>

   
        <script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>
   <!-- App js-->
        <script src="{{asset('assets/js/app.min.js')}}"></script>

    <!-- Bootstrap Tables js -->
        <script src="{{asset('assets/libs/bootstrap-table/bootstrap-table.min.js')}}"></script>

    <!-- Init js -->
    <script src="{{asset('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
    
    
       
  

<script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>


<script src="{{asset('assets/js/marca.js')}}"></script>


    </body>
</html>
