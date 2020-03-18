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
   
     
   <link href="{{asset('assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />

   
  
   
        



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
        <style>
            .estiloT{
                padding: 0px;
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
                                        <i class="mdi mdi-24px mdi-apps" style=" margin-right: -6px;color:#373f5f"></i> CATEGORIAS
                                    </div>
                                    <div class="col-md-8" style="padding-top: 6px">
                                        <button type="button" class="btn  btn-primary btn-sm" style="margin-left:84%" data-toggle="modal" data-target="#con-close-modal"><span class=" fa fa-user-plus"> </span> Categoría</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 0px;">
                        <div class="col 12 ">
                            <div class="card-box">
                                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog" style="max-width: 700px">
                                        <div class="modal-content">
                                            <div class="modal-header" style="padding: 9px; background-color:#697582;">
                                                <h5 class="modal-title" style="color:white;">Registro de categoría</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">×</button>
                                            </div>
                                            <div class="modal-body p-2">
                                            <div class="row">
                                                <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="">Código:</label>
                                                      <div class="input-group">
                                                        <div class="input-group-prepend ">
                                                            <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-barcode"></i></span>
                                                        </div>
                                                      <input type="text" class="form-control form-control-sm" value=" {{$id_ultimo}}"  id="codigo" name="codigo" disabled style="background: #e9ecef"> </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Descripción:</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend ">
                                                                <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class=" mdi mdi-border-color"></i></span>
                                                            </div>
                                                          <input type="text" class="form-control form-control-sm"  name="CATPRO_descripcion"  id="CATPRO_descripcion" onkeyup="activaboton()"> </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-12">
                                                    <hr style="border-top: 2px solid #f1f1f1; margin: 0px" />
                                                  </div>
                                                  <div class="col-md-12">
                                                      <h5>Ganancia</h5>
                                                  </div>
                                                  <div class="col-md-4">
                                                      <div class="form-group">
                                                          <label for="">Precio 1:</label>
                                                          <div class="input-group">

                                                          <input type="number" class="form-control form-control-sm" id="CATPRO_precio1"  name="CATPRO_precio1" onkeyup="activaboton()">
                                                          <div class="input-group-prepend ">
                                                            <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9">%</span>
                                                        </div> </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Precio 2:</label>
                                                        <div class="input-group">

                                                            <input type="number" class="form-control form-control-sm" id="CATPRO_precio2"  name="CATPRO_precio2" onkeyup="activaboton()">
                                                            <div class="input-group-prepend ">
                                                              <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9">%</span>
                                                          </div> </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Precio 3:</label>
                                                        <div class="input-group">

                                                            <input type="number" class="form-control form-control-sm" id="CATPRO_precio3"  name="CATPRO_precio3" onkeyup="activaboton()">
                                                            <div class="input-group-prepend ">
                                                              <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9">%</span>
                                                          </div> </div>
                                                    </div>
                                                </div><br>
                                                <div class="col-md-12">
                                                    <hr style="border-top: 2px solid #f1f1f1; margin: 0px" />
                                                  </div><br>
                                                <div class="col-md-6">
                                                    <div class="form-inline">
                                                        <div class="form-group">
                                                            <label for="">Descuento máximo: </label>&nbsp &nbsp
                                                            <div class="input-group col-md-5">

                                                                <input type="number" class="form-control form-control-sm" id="CATPRO_descuento" name="CATPRO_descuento" onkeyup="activaboton()">
                                                                <div class="input-group-prepend ">
                                                                  <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9">%</span>
                                                              </div> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            </div>
                                            <div class="modal-footer" style="padding: 10px;">
                                                <button type="button" class="btn btn-light btn-sm waves-effect" data-dismiss="modal" onclick="limpiarFormCategoria()">Cancelar</button>
                                                <button type="submit"  id="bt_guarda1" name="bt_guarda"  class="btn btn-blue btn-sm waves-effect waves-light bt_guarda1" disabled>Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.modal -->
                                <div id="con-close-modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog" style="max-width: 700px">
                                        <div class="modal-content">
                                            <div class="modal-header" style="padding: 9px; background-color:#697582;" >
                                                <h5 class="modal-title" style="color: white;">Edición de categoría</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">×</button>
                                            </div>
                                            <div class="modal-body p-2">
                                            <div class="row">
                                                <input type="text" class="form-control form-control-sm" id="CATPRO_id" name="CATPRO_id" disabled style="background: #e9ecef; display: none;">
                                                <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="">Código:</label>
                                                      <div class="input-group">
                                                        <div class="input-group-prepend ">
                                                            <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-barcode"></i></span>
                                                        </div>
                                                      <input type="text" class="form-control form-control-sm" id="CATPRO_codigoE" name="CATPRO_codigoE" disabled style="background: #e9ecef"> </div>

                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Descripción:</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend ">
                                                                <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class=" mdi mdi-border-color"></i></span>
                                                            </div>
                                                          <input type="text" class="form-control form-control-sm"  name="CATPRO_descripcionE"  id="CATPRO_descripcionE" onkeyup="activaboton2()"> </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-12">
                                                    <hr style="border-top: 2px solid #f1f1f1; margin: 0px" />
                                                  </div>
                                                  <div class="col-md-12">
                                                      <h5>Ganancia</h5>
                                                  </div>
                                                  <div class="col-md-4">
                                                      <div class="form-group">
                                                          <label for="">Precio 1:</label>
                                                          <div class="input-group">

                                                          <input type="number" class="form-control form-control-sm" id="CATPRO_precio1E"  name="CATPRO_precio1E" onkeyup="activaboton2()">
                                                          <div class="input-group-prepend ">
                                                            <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9">%</span>
                                                        </div> </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Precio 2:</label>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control form-control-sm" id="CATPRO_precio2E"  name="CATPRO_precio2E" onkeyup="activaboton2()">
                                                            <div class="input-group-prepend ">
                                                              <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9">%</span>
                                                          </div> </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Precio 3:</label>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control form-control-sm" id="CATPRO_precio3E"  name="CATPRO_precio3E" onkeyup="activaboton2()">
                                                            <div class="input-group-prepend ">
                                                              <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9">%</span>
                                                          </div> </div>
                                                    </div>
                                                </div><br>
                                                <div class="col-md-12">
                                                    <hr style="border-top: 2px solid #f1f1f1; margin: 0px" />
                                                  </div><br>
                                                <div class="col-md-6">
                                                    <div class="form-inline">
                                                        <div class="form-group">
                                                            <label for="">Descuento máximo: </label>&nbsp &nbsp
                                                            <div class="input-group col-md-5">
                                                                <input type="number" class="form-control form-control-sm" id="CATPRO_descuentoE" name="CATPRO_descuentoE" onkeyup="activaboton2()">
                                                                <div class="input-group-prepend ">
                                                                  <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9">%</span>
                                                              </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="modal-footer" style="padding: 10px;">
                                                <button type="button" class="btn btn-light btn-sm waves-effect" data-dismiss="modal">Cancelar</button>
                                                <button type="submit"   id="bt_guarda2"  class="btn btn-blue btn-sm waves-effect waves-light " onclick="categoriaEditar()">Actualizar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.modal -->

                                <div class="col-md-12" id="listaCategoriasNueva2">
                                </div>
                                <div class="col-md-12" id="listaCategoriasNueva">
                                    <table id="basic-datatable" class="table dt-responsive nowrap"  style=" font-size: 13px; border-collapse: collapse;border-left: solid 1px #dee2e6;border-right: solid 1px #dee2e6;border-bottom:solid 1px #dee2e6 ">
                                        <thead class="thead-light">
                                            <tr  style=" text-align: center;">
                                                <th rowspan="2"  class="align-middle" style="padding: 3px;border-right: solid 1px #dee2e6">#</th>
                                                <th rowspan="2"  class="align-middle" style="padding: 3px;border-right: solid 1px #dee2e6">Código</th>
                                                <th rowspan="2" class="align-middle" style="padding: 3px;border-right: solid 1px #dee2e6" >Categoría</th>
                                                <th colspan="3"  style="padding: 3px;">Ganancia</th>
                                                <th rowspan="2" class="align-middle" style="padding: 3px;border-left: solid 1px #dee2e6"> Descuento max</th>
                                                <th rowspan="2" class="align-middle" style="padding: 3px;border-left: solid 1px #dee2e6">Opciones</th>
                                            </tr>
                                            <tr style="text-align: center">
                                                <th  style="padding: 4px; ">Precio 1</th>
                                                <th style="padding: 4px;">Precio 2</th>
                                                <th style="padding: 4px; ">Precio 3</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categoria_producto as $categoria)
                                            <tr style=" text-align: center;" id="{{$categoria->CATPRO_id}}">
                                                    <td class="align-middle" style="padding: 2px;border-right: solid 1px #dee2e6;">{{$loop->index +1}}</td>
                                                    <td class="align-middle" style="padding: 2px;border-right: solid 1px #dee2e6;">{{$categoria->CATPRO_codigo}}</td>
                                                    <td class="align-middle" style="padding: 2px;">{{$categoria->CATPRO_descripcion}}</td>
                                                    <td class="align-middle" style="padding: 2px;border-left: solid 1px #dee2e6;">{{$categoria->CATPRO_precio1*100}} % </td>
                                                    <td class="align-middle" style="padding: 2px;border-left: solid 1px #dee2e6;">{{$categoria->CATPRO_precio2*100}} % </td>
                                                    <td class="align-middle" style="padding: 2px;border-left: solid 1px #dee2e6;border-right: solid 1px #dee2e6; ">{{$categoria->CATPRO_precio3*100}} % </td>
                                                    <td class="align-middle" style="padding: 2px;border-right: solid 1px #dee2e6;"> {{$categoria->CATPRO_descuento*100}} % </td>
                                                    <td class="align-middle" style="padding: 2px"><a href="#" data-toggle="modal" data-target="#con-close-modal2" class="action-icon" onclick="buscarCategoria({{$categoria->CATPRO_id}})" title="Editar"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="#" class="action-icon" onclick="eliminarCategoria({{$categoria->CATPRO_id}})" title="Eliminar"> <i class="mdi mdi-delete"></i></a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
<!-- Plugins js-->
 

<script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>

<!-- Sweet alert init js-->
<script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('assets/js/pages/sweet-alerts.init.js')}}"></script>


<!-- App js-->
<script src="{{asset('assets/js/app.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
<!-- third party js ends -->
<!-- Datatables init -->
<script src="assets/js/pages/datatables.init.js"></script>
<script src="{{asset('assets/js/categoria.js')}}"></script>
    </body>
</html>
