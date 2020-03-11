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
        @include('layouts.estilos')
        <!-- Sweet Alert-->
        <link href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    </head>
    <style>
        .swal2-modal{
            zoom:70%;
        }
    </style>
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

<!-- Vendor js -->
<script src="{{asset('assets/js/vendor.min.js')}}"></script>
<!-- Plugins js-->
 <script src="{{asset('assets/js/pages/animation.init.js')}}"></script>
<script src="{{asset('assets/libs/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
<!-- Dashboar 1 init js-->
<script src="{{asset('assets/js/pages/dashboard-1.init.js')}}"></script>
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
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });
//////////////////////////////////////////
///////////////////Llenar div de datos al inicio
    $(".bt_guarda1").each(function (el){
        $(this).bind("click",saveCategoria);
    });
    function saveCategoria(){
        var codigo=parseInt($('#codigo').val());
        var codigonuevo=codigo+1;
        var categoria=$('#CATPRO_descripcion').val();
        var precio1=$('#CATPRO_precio1').val();
        var precio2=$('#CATPRO_precio2').val();
        var precio3=$('#CATPRO_precio3').val();
        var descuento=$('#CATPRO_descuento').val();
            $.ajax({
                url:"{{route('categoriaStore')}}",
                method:"POST",
                data:{
                    CATPRO_codigo:codigo,
                    CATPRO_descripcion:categoria,
                    CATPRO_precio1: precio1/100,
                    CATPRO_precio2: precio2/100,
                    CATPRO_precio3: precio3/100,
                    CATPRO_descuento: descuento/100
                },
                success:function(data){
                    $('#listaCategoriasNueva').hide();
                    $('#listaCategoriasNueva2').html(data);
                    $("#con-close-modal").modal("hide");
                    $('#codigo').val(codigonuevo);
                    limpiarFormCategoria();
                        Swal.fire({
                            title: "Categoría agregada Correctamente",
                            type: "success",
                            showConfirmButton: false,
                            timer: 2000
                        });
                    },error:function(){
                        Swal.fire({
                            title: "Hubo un error",
                            type: 'warning',
                            showConfirmButton: false,
                            timer: 2000
                    });
                }
            });
        }
    })
</script>
<script>
    function limpiarFormCategoria(){
            $('#CATPRO_descripcion').val('');
            $('#CATPRO_precio1').val('');
            $('#CATPRO_precio2').val('');
            $('#CATPRO_precio3').val('');
            $('#CATPRO_descuento').val('');

            $('#CATPRO_descripcionE').val('');
            $('#CATPRO_precio1E').val('');
            $('#CATPRO_precio2E').val('');
            $('#CATPRO_precio3E').val('');
            $('#CATPRO_descuentoE').val('');
            $('#bt_guarda1').prop('disabled',true);
        };
</script>
<script>
    function categoriaEditar(){
        var CATPRO_id=$('#CATPRO_id').val();

        var CATPRO_descripcion=$('#CATPRO_descripcionE').val();
        var CATPRO_precio1=$('#CATPRO_precio1E').val();
        var CATPRO_precio2=$('#CATPRO_precio2E').val();
        var CATPRO_precio3=$('#CATPRO_precio3E').val();
        var CATPRO_descuento=$('#CATPRO_descuentoE').val();
        $.ajax({
            url:"{{route('categoriaUpdate')}}",
            method:"POST",
            data:{
                CATPRO_id:CATPRO_id,
                CATPRO_descripcion:CATPRO_descripcion,
                CATPRO_precio1: CATPRO_precio1/100,
                CATPRO_precio2: CATPRO_precio2/100,
                CATPRO_precio3: CATPRO_precio3/100,
                CATPRO_descuento: CATPRO_descuento/100
            },
            success:function(data){
                $("#con-close-modal2").modal("hide");
                limpiarFormCategoria();
                $('#'+data+'').load(location.href+" #"+data+">*");
                    Swal.fire({
                        title:"Categoría editada correctamente",
                        type: 'success',
                        showConfirmButton: false,
                        timer: 2000
                    });
                },error:function(){
                    Swal.fire({
                        title: "Hubo un error",
                        type: 'warning',
                        showConfirmButton: false,
                        timer: 2000
                    });
                }
        });
    }
</script>
<script>function codigoUltimo(){
$.ajax({
            url:"{{route('codigoUltimo')}}",
            method:"POST",
            success:function(data){
                $('#codigo').val(data);
            }
        });
}
</script>
<script>
    function eliminarCategoria(categoria){
        Swal.fire({
        title: '¿Está seguro que desea eliminar la categoría?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#1c2c3d',
        cancelButtonColor: '#797979',
        confirmButtonText: 'Si',
        cancelButtonText: 'Cancelar'
            }).then((result) =>{
            if (result.value) {
                codigoUltimo();
                $.ajax({
                    url:"{{route('categoriaDelete')}}",
                    method:"POST",
                    data:{
                        CATPRO_id:categoria,
                    },
                    success:function(data){
                        $('#listaCategoriasNueva').hide();
                        $('#listaCategoriasNueva2').html(data);
                    }
                });
            Swal.fire(
                'La categoría fue eliminada!',
                )
            }
        })
    }
</script>

<script>
    function buscarCategoria(categoria){
        $.ajax({
            url:"{{route('categoriaBuscar')}}",
            method:"POST",
            data:{
                CATEGORIA_id:categoria
            },
            success:function(data){
                $('#CATPRO_codigoE').val(data.CATPRO_codigo);
                $('#CATPRO_descripcionE').val(data.CATPRO_descripcion);
                $('#CATPRO_precio1E').val(parseFloat(data.CATPRO_precio1)*100);
                $('#CATPRO_precio2E').val(parseFloat(data.CATPRO_precio2)*100);
                $('#CATPRO_precio3E').val(parseFloat(data.CATPRO_precio3)*100);
                $('#CATPRO_descuentoE').val(parseFloat(data.CATPRO_descuento)*100);
                $('#CATPRO_id').val(data.CATPRO_id);
            }
        });
    }
</script>

<script>
     function activaboton(){
        var CATPRO_descripcion=$('#CATPRO_descripcion').val();
        var CATPRO_precio1=$('#CATPRO_precio1').val();
        var CATPRO_precio2=$('#CATPRO_precio2').val();
        var CATPRO_precio3=$('#CATPRO_precio3').val();
        var CATPRO_descuento=$('#CATPRO_descuento').val();

        if((CATPRO_descripcion!=null)&&(CATPRO_descripcion!='')&&
        (CATPRO_precio1!=null)&&(CATPRO_precio1!='')&&
        (CATPRO_precio2!=null)&&(CATPRO_precio2!='')&&
        (CATPRO_precio3!=null)&&(CATPRO_precio3!='')&&
        (CATPRO_descuento!=null)&&(CATPRO_descuento!='')){
            $('#bt_guarda1').prop('disabled',false);
        }
        else{
            $('#bt_guarda1').prop('disabled',true);
        }
     }
</script>

<script>
    function activaboton2(){
       var CATPRO_descripcion=$('#CATPRO_descripcionE').val();
       var CATPRO_precio1=$('#CATPRO_precio1E').val();
       var CATPRO_precio2=$('#CATPRO_precio2E').val();
       var CATPRO_precio3=$('#CATPRO_precio3E').val();
       var CATPRO_descuento=$('#CATPRO_descuentoE').val();

       if((CATPRO_descripcion!=null)&&(CATPRO_descripcion!='')&&
       (CATPRO_precio1!=null)&&(CATPRO_precio1!='')&&
       (CATPRO_precio2!=null)&&(CATPRO_precio2!='')&&
       (CATPRO_precio3!=null)&&(CATPRO_precio3!='')&&
       (CATPRO_descuento!=null)&&(CATPRO_descuento!='')){
           $('#bt_guarda2').prop('disabled',false);
       }
       else{
           $('#bt_guarda2').prop('disabled',true);
       }
    }
</script>


<script>
    var input=  document.getElementById('CATPRO_precio1');
        input.addEventListener('input',function(){
            var val = this.value;
            this.value = val.replace(/\D|\-/,'');
        })
        input.addEventListener('input',function(){
            if (this.value.length > 2)
                this.value = this.value.slice(0,2);
        })
    var input=  document.getElementById('CATPRO_precio2');
        input.addEventListener('input',function(){
            var val = this.value;
            this.value = val.replace(/\D|\-/,'');
        })
        input.addEventListener('input',function(){
            if (this.value.length > 2)
                this.value = this.value.slice(0,2);
        })
    var input=  document.getElementById('CATPRO_precio3');
        input.addEventListener('input',function(){
            var val = this.value;
            this.value = val.replace(/\D|\-/,'');
        })
        input.addEventListener('input',function(){
            if (this.value.length > 2)
                this.value = this.value.slice(0,2);
        })
    var input=  document.getElementById('CATPRO_descuento');
        input.addEventListener('input',function(){
            var val = this.value;
            this.value = val.replace(/\D|\-/,'');
        })
        input.addEventListener('input',function(){
            if (this.value.length > 2)
                this.value = this.value.slice(0,2);
        })
    var input=  document.getElementById('CATPRO_precio1E');
        input.addEventListener('input',function(){
                var val = this.value;
                this.value = val.replace(/\D|\-/,'');
            })
        input.addEventListener('input',function(){
            if (this.value.length > 2)
                this.value = this.value.slice(0,2);
        })
    var input=  document.getElementById('CATPRO_precio2E');
        input.addEventListener('input',function(){
            var val = this.value;
            this.value = val.replace(/\D|\-/,'');
        })
        input.addEventListener('input',function(){
            if (this.value.length > 2)
                this.value = this.value.slice(0,2);
        })
    var input=  document.getElementById('CATPRO_precio3E');
        input.addEventListener('input',function(){
            var val = this.value;
            this.value = val.replace(/\D|\-/,'');
        })
        input.addEventListener('input',function(){
            if (this.value.length > 2)
                this.value = this.value.slice(0,2);
        })
    var input=  document.getElementById('CATPRO_descuentoE');
        input.addEventListener('input',function(){
            var val = this.value;
            this.value = val.replace(/\D|\-/,'');
        })
        input.addEventListener('input',function(){
            if (this.value.length > 2)
                this.value = this.value.slice(0,2);
        })
</script>
    </body>
</html>
