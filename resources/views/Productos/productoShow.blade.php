<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         <!-- App favicon -->
         @include('layouts.estilos')
         <link href="{{asset('assets/libs/c3/c3.min.css')}}" rel="stylesheet" type="text/css" />
         <style>
        .labelEstilo{
        color: #2e667b;
        font-weight: 705;
        font-family:Arial, Helvetica, sans-serif;
        }
         </style>

    </head>

    <body style="color: #4585bd;">
        @include('layouts._preReload')
        <!-- Begin page -->
        <div id="wrapper">

            @include('layouts.header')
             <!-- C3 Chart css -->


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
                            <h4 class="page-title">PRODUCTO </h4>
                            </div>
                        </div>
                    </div>  <!-- end row -->

                    <div class="row">
                        <div class="col-md-12 bounceInDown animated">
                            <!-- /.card-header -->
                                <div class="row" >
                                <div class="col-lg-12 col-xl-12">
                                <div class="card-box">
                                    <div class="row">
                                         <div class=col-md-3>
                                            <div class="col-md-12 text-center">
                                                <img src="{{asset('producto.png')}}" class="rounded-circle avatar-lg img-thumbnail"
                                               alt="profile-image">
                                               <h4 class="mb-0">{{$producto->PRO_nombre}}</h4>
                                               </div><br>
                                               <div class="col-md-12 text-center">
                                                @if($producto->PRO_estadoCrea==1)
                                                <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Activo</button>
                                                @else
                                                <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Bloqueado</button>
                                                @endif
                                            </div>
                                         </div>

                                         <div class="col-md-9">
                                            <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="">CÓDIGO:</label>
                                                    <input type="text" readonly="" class="form-control-plaintext form-control-sm " value="{{$producto->PRO_codigo}}"  >
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="">CATEGORÍA:</label>
                                                    <input type="text" readonly="" class="form-control-plaintext form-control-sm " value="{{$categoria->CATPRO_descripcion}}"  >
                                                </div>

                                            </div>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="">MARCA:</label>
                                                    <input type="text" readonly="" class="form-control-plaintext form-control-sm " value="{{$marca->MARCA_descripcion}}"  >
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="">MODELO:</label>
                                                    <input type="text" readonly="" class="form-control-plaintext form-control-sm " value="{{$producto->PRO_modelo}}"  >
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="">MEDIDA:</label>
                                                    <input type="text" readonly="" class="form-control-plaintext form-control-sm " value="{{$unidad->UME_descripcion}}"  >
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="">ESTADO:</label>
                                                    <input type="text" readonly="" class="form-control-plaintext form-control-sm " value="{{$producto->PRO_estado}}"  >
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="">Utiliza serie?:</label>
                                                    @if ($producto->PRO_estado==1)
                                                    <input type="text" readonly="" class="form-control-plaintext form-control-sm " value="SI">
                                                    @else
                                                    <input type="text" readonly="" class="form-control-plaintext form-control-sm " value="NO">
                                                   @endif

                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="">STOCK MIN:</label>
                                                    <input type="text" readonly="" class="form-control-plaintext form-control-sm " value="{{$producto->PRO_min}}"  >
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="">STOCK MAX:</label>
                                                    <input type="text" readonly="" class="form-control-plaintext form-control-sm " value="{{$producto->PRO_max}}"  >
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="">dias de garantia al comprar:</label>
                                                    <input type="text" readonly="" class="form-control-plaintext form-control-sm " value="{{$producto->PRO_gcomprar}}"  >
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="">dias de garantia al vender:</label>
                                                    <input type="text" readonly="" class="form-control-plaintext form-control-sm " value="{{$producto->PRO_gvender}}"  >
                                                </div>

                                            </div>
                                         </div>
                                        </div>
                                </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col-->

                     <div class="col-lg-8 col-xl-8">
                     <div class="card-box ">
                      <div class="row">
                      {{--   <div class="col-lg-12">
                            <div class="card-box">
                                <h4 class="header-title mb-3">Bar Chart</h4>

                                <div id="chart" style="height: 300px;" dir="ltr"></div>
                            </div> <!-- end card-->
                        </div> <!-- end col--> --}}
                     </div>  <!-- /.end row -->
                     </div>  <!-- /.end car box -->

                     <div class="card-box ">
                     <div class="row">

                     <div class="col-md-12"><label for="" class="control-label"><i class="mdi mdi-briefcase-account mr-1"></i>Contacto(s):</label> </div>


                    <form class="form-inline col-md-12" style="border-top: solid; padding-top:7px">
                        <div class="form-group"><label class="control-label">Nombre: </label>  <input type="text"  id="PROVECONT_nombre"  class="form-control-plaintext form-control-sm "  value="">
                        </div></form>
                        <div class="col-md-4">
                         <div class="form-group">
                         <label class="control-label" >Cargo: </label>
                         <input type="text"   class="form-control-plaintext form-control-sm " id="PROVECONT_descripcion"    value="">
                        </div>
                        </div>

                        <div class="col-md-3">
                        <div class="form-group"><label class="control-label">Número: </label>  <input type="text"    id="PROVECONT_telefono"  class="form-control-plaintext form-control-sm " value=""></div></div>

                        <div class="col-md-4">
                        <div class="form-group">
                        <label class="control-label">Email: </label>
                         <input type="email"  id="PROVECONT_email" class="form-control-plaintext form-control-sm " style="margin-right: 2%;" value=""></div> </div>




            <br>



               <div class="col-md-12" style="border-top: solid; padding-top:7px">
                        <div class="form-group"><label class="control-label">Expediente: </label></div>  </div>
                    <div class="col-md-6">
                        <label for="PROEXP_descripcion" style=" "><i class="mdi mdi-clipboard-account-outline mr-1"></i>Descripcion:</label>
                        <input type="text" class="form-control-plaintext form-control-sm "  >
                    </div>
                    <br>
                    <form class="form-inline">
                    <div class="col-md-6 form-group">

                            <label for="PROEXP_descripcion" style=" "><i class="mdi mdi-file mr-1"></i>Archivo:</label>

                            <form class="form-inline">
                            <div class="form-group"><a  href="">
                              <span><i class='mdi  mdi-file-download ' style='font-size:18px;'></i></span>
                            </a> </div>
                              </form>

                    </div>
                    </form>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Observacion: </label>
                            <input type="text" class="form-control-plaintext form-control-sm "  value=>
                        </div>
                    </div>


              </div>      <!-- /.end row -->
                     </div>  <!-- /.end car box -->


                     </div>  <!-- /.end col lg8 -->
                     </div>

                            </div>
                            <!-- /.card-body -->

                            </div> <!-- end row -->
                    </div> <!-- container fluid -->

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
            </div>  <!-- End Page content -->
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        @include('layouts.scripts')
   <!--C3 Chart-->
   <script src="{{asset('assets/libs/d3/d3.min.js')}}"></script>
   <script src="{{asset('assets/libs/c3/c3.min.js')}}"></script>

   <!-- Init js -->
<script>
    !function(t){
        "use strict";
        var e=function(){};
        e.prototype.init=function(){
            c3.generate({
                bindto:"#chart",
                data:{columns:[["Tablets",200,130,90,240,130,220],["Mobiles",300,200,160,400,250,250]],
                type:"bar",
                colors:{Tablets:"#4a81d4",Mobiles:"#1abc9c"} }
          })
    },t.ChartC3=new e,t.ChartC3.Constructor=e}(window.jQuery),function(t){"use strict";window.jQuery.ChartC3.init()}();


</script>

    </body>
</html>
