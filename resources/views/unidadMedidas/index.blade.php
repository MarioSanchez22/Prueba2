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
        @include('layouts.estilos')
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

                    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog" style="max-width: 700px">
                            <div class="modal-content">
                                <div class="modal-header" style="padding: 9px; background-color:#697582;">
                                    <h5 class="modal-title" style="color:white;">Registro de unidad de medida</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white;">×</button>
                                </div>
                                <div class="modal-body p-2">
                                    <div class="form-group">
                                        <label for="">Descripción:</label>
                                        <input type="text" class="form-control form-control-sm" id="MARCA_descripcion" name="MARCA_descripcion">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Abreviatura:</label>
                                        <input type="text" class="form-control form-control-sm" id="MARCA_abreviatura" name="MARCA_abreviatura">
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
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">

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




                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                        <div class="col-xl-4">
                            <div class="card-box">
                                <h4>Registro de unida de medidas</h4>
                                <div class="form-group">
                                    <label for="">Descripcion:</label>
                                    <input type="text" class="form-control form-control-sm" id="marca" name="marca">



                                </div>
                                <div class="form-group">
                                    <label for="">Abreviatura:</label>
                                    <input type="text" class="form-control form-control-sm" id="marca" name="marca">

                                </div>
                                <div class="text-right">
                                    <br>
                                <button type="button" class="btn btn-dark waves-effect waves-light">Registrar</button>
                                </div>


                            </div> <!-- end card-box-->
                        </div>
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
    $(document).ready(function() {
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });
})
</script>
<script>
    function marcaGuarda(){
        var MARCA_abreviatura=$('#MARCA_abreviatura').val();
        var MARCA_descripcion=$('#MARCA_descripcion').val();
            $.ajax({
                url:"{{route('umedidaStore')}}",
                method:"POST",
                data:{
                    MARCA_abreviatura:MARCA_abreviatura,
                    MARCA_descripcion: MARCA_descripcion,
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
</script>



    </body>
</html>
