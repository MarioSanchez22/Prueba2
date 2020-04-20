@php
use App\marca;
use App\categoria_producto;
use App\umedidas;
    $usu1=Auth::user();
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
          <!-- App favicon -->
   <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">


   <!-- App css -->
     <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

     <link href="{{asset('assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />

     
        <!-- Sweet Alert-->
        <link href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Jquery Toast css -->
        <link href="assets/libs/jquery-toast/jquery.toast.min.css" rel="stylesheet" type="text/css" />
        <style>
            .swal2-modal{
                zoom:70%;
            }
        </style>
     
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

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="row" style="padding-bottom: 10px">
                                     <div class="col-12">
                                      <div class="row icons-list-demo" style="color:#373f5f">
                                        <div class="col-sm6 col-md-6 col-lg-6" style="font-size: 19px;font-weight: bold;padding-top: 5px; padding-left: 0px">
                                            <i class="mdi mdi-24px mdi-apps" style=" margin-right: -6px;color:#373f5f"></i> Productos
                                        </div>
                                        <input type="hidden" id="usu1_EMPRESA_id" value="{{$usu1->EMPRESA_id}}">
                                    
                                        <div class="col-md-6 text-right" style="padding-top: 6px">
                                            <button type="button" class="btn  btn-primary btn-sm" style="" onclick="location.href='{{route('productoCreate')}}'"><span class="mdi mdi-database-plus"> </span> Registrar Producto</button>
                                        </div>
                                      </div>
                                    </div>   
                                   </div> 
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Lista de productos</h4>
                                   <br>

                                    <div id="tablageneral" class="table-responsive">
                                    
                                        <table class="table datatable-basic dataTable no-footer" id="basic-datatable" style="color: #454545; font-size: 13px">
                                          <thead>
                                            <tr>
                                                <th >Código</th>
                                                <th >Producto</th>
                                                <th>Unidad. Med.</th>
                                                <th >Stack [min-max]</th>
                                                <th >Garantia compra</th>
                                                <th >Garantia venta</th>
                                                <th >Estado</th>
                                                <th >Acción</th>
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
                                              <td> @if ($producto->PRO_estadoCrea==1)
                                                  <span class="badge bg-soft-success text-success shadow-none">Activo</span>
                                              @else
                                                  <span class="badge bg-soft-danger text-danger shadow-none">Bloqueado</span>
                                              @endif</td>
                                          <td>
                                             
                                              <div class="dropdown text-center">
                                                  <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                      <i class=" mdi mdi-18px mdi-settings m-0 text-muted h3"></i>
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
                                </div> <!-- end card-box -->
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
     
     <script src="{{asset('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
  
      <script src="{{asset('assets/libs/datatables/dataTables.bootstrap4.js')}}"></script>

     
     
      <script src="{{asset('assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
     

<!-- Datatables init -->
<script src="assets/js/pages/datatables.init.js"></script>
<!-- Sweet alert init js-->
<script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('assets/js/pages/sweet-alerts.init.js')}}"></script>


<!-- Tost-->
<script src="assets/libs/jquery-toast/jquery.toast.min.js"></script>
<!-- toastr init js-->
<script src="assets/js/pages/toastr.init.js"></script>
<script src="{{asset('assets/js/producto.js')}}"></script>
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


    </body>
</html>
