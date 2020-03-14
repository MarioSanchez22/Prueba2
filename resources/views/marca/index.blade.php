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

<script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

<!-- Sweet alert init js-->
<script src="{{asset('assets/js/pages/sweet-alerts.init.js')}}"></script>


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
    function limpiarMarca(){
        $('#MARCA_descripcion').val('');
        $('#MARCA_descripcionE').val('');
    };
    function marcaRegistrar(){
        var MARCA_descripcion= $('#MARCA_descripcion').val();
        $.ajax({
            url:"{{route('marcaStore')}}",
            method:"POST",
            data:{
                MARCA_descripcion:MARCA_descripcion,
            },
            success:function(data){
                $('#modal').modal("hide");
                limpiarMarca();
                $('#listaMarcasNueva').hide();
                $('#listaMarcasNueva2').html(data);
                    Swal.fire({
                        title:"Marca llenada correctamente",
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

<script>
    function marcaEditar(){
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
        var MARCA_idE= $('#MARCA_idE').val();
        var MARCA_descripcion= $('#MARCA_descripcionE').val();
        $.ajax({
            url:"{{route('marcaUpdate')}}",
            method:"POST",
            data:{
                MARCA_idE:MARCA_idE,
                MARCA_descripcionE:MARCA_descripcion
            },
            success:function(data){
                $('#modal2').modal("hide");
                $('#'+data.MARCA_id+'').load(location.href+" #"+data.MARCA_id+">*");
                limpiarMarca();
                    Swal.fire({
                        title:"Marca editada correctamente",
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
<script>
    function MarcaEliminar(Marca){
        Swal.fire({
        title: '¿Está seguro que desea eliminar la marca?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#1c2c3d',
        cancelButtonColor: '#797979',
        confirmButtonText: 'Si',
        cancelButtonText: 'Cancelar'
            }).then((result) =>{
            if (result.value) {
                $.ajax({
                        url:"{{route('marcaDelete')}}",
                        method:"POST",
                        data:{
                            MARCA_id:Marca,
                        },
                            success:function(data){
                            $('#listaMarcasNueva').hide();
                            $('#listaMarcasNueva2').html(data);
                        }
                    });
            Swal.fire(
                'La compra fue eliminada!',
                )
            }
        })
    }
</script>

<script>
    function activaRegistrar()
    {
        var MARCA_descripcion=$('#MARCA_descripcion').val();
        if((MARCA_descripcion!=null)&&(MARCA_descripcion!='')){
            $('#btnguarda').prop('disabled',false);
        }else{
            $('#btnguarda').prop('disabled',true);
        }

    };
    function acttivaEditar()
    {

    }
</script>
<script>
    function MarcaBuscar(Marca){
        $.ajax({
            url:"{{route('marcaBuscar')}}",
            method:"POST",
            data:{
                MARCA_id:Marca
            },
            success:function(data){
                limpiarMarca();
                $('#MARCA_descripcionE').val(data.MARCA_descripcion);
                $('#MARCA_idE').val(data.MARCA_id);
            }
        });
    }
</script>
    </body>
</html>
