@php
use App\marca;
use App\categoria_producto;
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
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        @include('layouts.estilos')
        <!-- Sweet Alert-->
        <link href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Jquery Toast css -->
        <link href="assets/libs/jquery-toast/jquery.toast.min.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div  id="preloader">
            <div id="status" >
                @php
                    $usu1=Auth::user();
                @endphp
                <strong style="font-size: 20px; color:#2e4965">@if ($usu1->EMPRESA_id==1)
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
                                        <i class="mdi mdi-24px mdi-apps" style=" margin-right: -6px;color:#373f5f"></i> PRODUCTOS
                                    </div>

                                    <div class="col-md-8" style="padding-top: 6px">
                                        <button type="button" class="btn  btn-primary btn-sm" style="margin-left:84%" onclick="location.href='{{route('productoCreate')}}'"><span class=" fa fa-user-plus"> </span>  Producto</button>
                                    </div>
                            </div>
                        </div>

                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 10px;">

                        <div class="col 12 bounceInLeft animated">
                            <div class="col-xl-12">
                                <div class="card-box">
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="home1">
                                            <div id="tablageneral" class="bounceInLeft animated">
                                                <table   data-toggle="table"
                                                    data-page-size="6"
                                                    data-buttons-class="xs btn-light"
                                                    data-pagination="true" class="table-bordered ">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th data-field="name">Código</th>
                                                        <th data-field="amount">Producto</th>
                                                        <th data-field="unidad">U. Med.</th>
                                                        <th data-field="stack">Stack [min-max]</th>
                                                        <th data-field="garantiac">Garantía compra</th>
                                                        <th data-field="garantiav">Garantía venta</th>
                                                        <th data-field="amouWnt">Opciones</th>
                                                    </tr>
                                                    </thead>
                                                        <tbody>
                                                            @foreach ($productos as $producto)
                                                                @php
                                                                    $unidad=umedidas::where('UME_id','=',$producto->UME_id)->first();
                                                                    $categoria=categoria_producto::where('CATPRO_id','=',$producto->CATPRO_id)->first();
                                                                    $marca=marca::where('MARCA_id','=',$producto->MARCA_id)->first();
                                                                @endphp
                                                                <tr id="{{$producto->PRO_id}}">
                                                                    <td>{{$producto->PRO_codigo}}</td>
                                                                <td>{{$producto->PRO_nombre}}-{{$producto->PRO_modelo}}-{{$marca->MARCA_descripcion}}-{{$categoria->CATPRO_descripcion}}</td>
                                                                    <td>{{$unidad->UME_abreviatura}}</td>
                                                                    <td>[{{$producto->PRO_min}}-{{$producto->PRO_max}}]</td>
                                                                    <td>{{$producto->PRO_gcomprar}} días</td>
                                                                    <td>{{$producto->PRO_gvender}} días</td>
                                                                <td>
                                                                    @if ($producto->PRO_estadoCrea==1)
                                                                        <span class="badge bg-soft-success text-success shadow-none">Activo</span>
                                                                    @else
                                                                        <span class="badge bg-soft-danger text-danger shadow-none">Bloqueado</span>
                                                                    @endif
                                                                    <div class="dropdown float-right">
                                                                        <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                                            <i class=" mdi mdi-settings m-0 text-muted h3"></i>
                                                                        </a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <a href="{{route('productoShow',[$producto->PRO_id])}}" class="dropdown-item" title="Ver"> <i class="mdi mdi-eye"></i> Ver</a>
                                                                            <a href="{{route('productoEdit',[$producto->PRO_id])}}" class="dropdown-item" title="Editar"><i class="mdi mdi-square-edit-outline"></i>Editar</a>
                                                                            @if ($producto->PRO_estadoCrea==1)
                                                                                <a href="#" class="dropdown-item" title="Bloquear" onclick="bloquear({{$producto->PRO_id}})"> <i class="mdi mdi-block-helper"></i> Bloquear</a>
                                                                            @else
                                                                                <a href="#" onclick="activar({{$producto->PRO_id}})" id="toastr-three" class="dropdown-item" title="Activar"> <i class="mdi mdi-transfer-up"></i> Activar</a>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                        </table>
                                                </div>
                                        </div>


                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->


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

<!-- Sweet alert init js-->
<script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('assets/js/pages/sweet-alerts.init.js')}}"></script>


<!-- Tost-->
<script src="assets/libs/jquery-toast/jquery.toast.min.js"></script>
<!-- toastr init js-->
<script src="assets/js/pages/toastr.init.js"></script>

<script>
    @if (session('producto_success'))
            Swal.fire({
                title: "{{session('producto_success')}}",
                type: "success",
                showConfirmButton: false,
                timer: 3000
            });
    @endif
</script>

<script>
    function bloquear(producto){
        $.ajaxSetup({
            headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:"{{route('productoDarBaja')}}",
            method:"POST",
            data:{
                PRO_id:producto
            },
            success:function(data){
                $('#'+data+'').load(location.href+" #"+data+">*");
                $.toast({
                    @if($usu1->EMPRESA_id==1)
                        heading: 'Corporación MacroChip',
                    @else
                        heading: 'NepComputer SRL.',
                    @endif
                    text: 'Producto bloqueado',
                    icon: 'error',
                    position:'bottom-right',
                    loader: true, // Change it to false to disable loader
                    loaderBg: '#f1556c' // To change the background
                })
            }
        });
    }
    function activar(producto){
        $.ajaxSetup({
            headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:"{{route('productoDarAlta')}}",
            method:"POST",
            data:{
                PRO_id:producto
            },
            success:function(data){
                $('#'+data+'').load(location.href+" #"+data+">*");
                $.toast({
                    @if($usu1->EMPRESA_id==1)
                        heading: 'Corporación MacroChip',
                    @else
                        heading: 'NepComputer SRL.',
                    @endif
                    text: 'Producto activado',
                    icon: 'success',
                    position:'bottom-right',
                    loader: true, // Change it to false to disable loader
                    loaderBg: '#1abc9c' // To change the background
                    })
                }
            });
        }
</script>
    </body>
</html>
