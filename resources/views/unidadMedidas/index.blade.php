@php
use App\umedidas;

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
       
        <!-- Sweet Alert-->
        <link href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    </head>
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
           


                @include('layouts.menu')

          
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog" style="max-width: 700px">
                            <div class="modal-content" style="width: 60%; margin: 10% auto;">
                                <div class="modal-header" style="padding: 9px; background-color:#697582;">
                                    <h5 class="modal-title" style="color:white;">Registro de unidad de medida</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">×</button>
                                </div>
                                <div class="modal-body p-2">
                                    <div class="form-group">
                                        <label for="">Descripción:</label>
                                        <input type="text" class="form-control form-control-sm" id="UME_descripcion" name="UME_descripcion">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Abreviatura:</label>
                                        <input type="text" class="form-control form-control-sm" id="UME_abreviatura" name="UME_abreviatura">
                                    </div>
                                </div>
                                <div class="modal-footer" style="padding: 10px;">
                                    <button type="button" class="btn btn-light btn-sm waves-effect" data-dismiss="modal" onclick="limpiarMarca()">Cancelar</button>
                                    <button type="submit"  id="bt_guarda1" name="bt_guarda"  onclick="marcaGuarda()" class="btn btn-blue btn-sm waves-effect waves-light bt_guarda1" >Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.modal -->
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
                                        <i class="mdi mdi-24px mdi-led-strip" style=" margin-right: -6px;color:#373f5f"></i> UNIDAD DE MEDIDAS
                                    </div>
                                    <div class="col-md-8" style="padding-top: 6px">
                                        <button type="button" class="btn  btn-primary btn-sm" style="margin-left:80%" data-toggle="modal" data-target="#con-close-modal"><span class=" fa fa-user-plus"> </span> Uni. medida</button>
                                    </div>
                            </div>
                        </div>

                    </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                <div id="listaUnidadNueva">
                                </div>
                                <div id="listaUnidad">
                                    <table data-toggle="table"
                                    data-show-columns="false"
                                    data-page-list="[5, 10, 20]"
                                    data-page-size="5"
                                    data-buttons-class="xs btn-light"
                                    data-pagination="true" class="table-borderless">
                                 <thead class="thead-light">
                                              <tr>
                                              <th>#</th>
                                              <th>Descripcion</th>
                                              <th>Abreviatura</th>
                                              <th>Opciones</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                            @foreach ($umedidas as $umedidas )
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$umedidas->UME_descripcion}}</td>
                                            <td>{{$umedidas->UME_abreviatura}}</td>
                                            <td><a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a></td></tr>
                                            @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

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

    <!-- Init js -->
    
    <script src="{{asset('assets/js/pages/bootstrap-tables.init.js')}}"></script>
    
    
        <script src="{{asset('assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
      
        <script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>




<script src="{{asset('assets/js/umedida.js')}}"></script>
    </body>
</html>
