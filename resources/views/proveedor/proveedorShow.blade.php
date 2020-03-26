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
          <!-- App favicon -->
   <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

   <!-- App css -->
     <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

   <link href="{{asset('assets/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />


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
                            <h4 class="page-title">PROVEEDOR </h4>
                            </div>
                        </div>
                    </div>  <!-- end row -->

                    <div class="row">
                        <div class="col-md-12 bounceInDown animated">

                            <!-- /.card-header -->

                                <div class="row" >
                                <div class="col-lg-4 col-xl-4">
                                <div class="card-box text-center">
                                    <img src="{{asset('proveedor.png')}}" class="rounded-circle avatar-lg img-thumbnail"
                                        alt="profile-image">

                                    <h4 class="mb-0">{{$proveedor->PROVE_razon_social}}</h4> <BR>
                                    <p >RUC: {{$proveedor->PROVE_ruc}}</p>
                                    <p >DNI: {{$proveedor->PROVE_dni}}</p>
                                    @if($proveedor->PROVE_estado==1)
                                    <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Activo</button>
                                    @else
                                    <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Bloqueado</button>
                                    @endif



                                    <div class="text-center mt-3">
                                        <h4 class="font-13 text-uppercase text-center">Ubicacion :</h4>

                                        <p class="text-muted mb-2 font-13"><strong>Origen:</strong> <span class="ml-2">{{$proveedor->PROVE_origen }}</span></p>

                                        <p class="text-muted mb-2 font-13"><strong>Pais :</strong><span class="ml-2">{{$proveedor->PROVE_pais }}</span></p>

                                        <p class="text-muted mb-2 font-13"><strong>Region :</strong> <span class="ml-2 ">{{$proveedor->PROVE_region }}</span></p>

                                        <p class="text-muted mb-1 font-13"><strong>Direccion :</strong> <span class="ml-2">{{$proveedor->PROVE_direccion }}</span></p>
                                    </div>


                                </div> <!-- end card-box -->



                            </div> <!-- end col-->

                     <div class="col-lg-8 col-xl-8">
                     <div class="card-box ">
                      <div class="row">

                       <div class="col-md-4" style="border-right: solid; border-color:#afbdca">
                        <div class="form-group " style=" margin-bottom: 2px;">
                        <label class="control-label"><i class="mdi mdi-timer mr-1"></i>Dias de crédito: </label>
                        <input type="number" readonly="" class="form-control-plaintext form-control-sm "  required min="1" placeholder="Dias de crédito" name="PROVE_dias_credito" value="{{$proveedor->PROVE_dias_credito }}">
                         </div>
                         </div>

                <div class="col-md-4" style="border-right: solid; border-color:#afbdca">
                    <div class="form-group" style=" margin-bottom: 2px;">
                        <label class="control-label" for="PROVE_telefono"><i class="mdi mdi-phone mr-1"></i>Telefono: </label>
                        <input type="text" readonly="" class="form-control-plaintext form-control-sm "  required placeholder="Telefono" name="PROVE_telefono" value=" {{$proveedor->PROVE_telefono }}"> </div>
                    </div>
                <div class="col-md-4" style="border-right: solid;border-color:#afbdca ">
                    <div class="form-group" style=" margin-bottom: 2px;">
                        <label class="control-label" for="PROVE_web"><i class="mdi mdi-web mr-1"></i>Web: </label>
                        <input type="text" readonly="" class="form-control-plaintext form-control-sm "   placeholder="Direccion web" name="PROVE_web" value=" {{$proveedor->PROVE_web }}"> </div>
                    </div>
                    <div class="col-md-12" style="border-top: solid;border-color:#afbdca ">
                    </div>
                    <div class="col-md-6 " style="border-right: solid;border-color:#afbdca ">
                    <div class="form-group" style=" margin-bottom: 2px;">
                        <label class="control-label" for="PROVE_email" > <i class="mdi mdi-email mr-1"></i>Email: </label>
                        <input type="text" creadonly="" class="form-control-plaintext form-control-sm "  required  placeholder="Email" name="PROVE_email" value=" {{$proveedor->PROVE_email }}"> </div>
                    </div>
                    <div class="col-md-6 " style="border-right: solid;border-color:#afbdca ">
                        <div class="form-group" style=" margin-bottom: 2px;">
                        <label class="control-label"><i class="mdi mdi-needle mr-1"></i>Etiquetas:</label>
                        <input type="text" creadonly="" class="form-control-plaintext form-control-sm "  required  placeholder="Email" name="PROVE_email" value="{{$proveedor->PROVE_etiqueta }}"> </div>
                    </div>
                    <div class="col-md-12" style="border-top: solid;border-color:#afbdca ">
                    </div>
                     </div>  <!-- /.end row -->
                     </div>  <!-- /.end car box -->

                     <div class="card-box ">
                     <div class="row">
                     @if( count($contacto)>=1)
                     <div class="col-md-12"><label for="" class="control-label"><i class="mdi mdi-briefcase-account mr-1"></i>Contacto(s):</label> </div>

                    @foreach ($contacto as $contactos)
                    <form class="form-inline col-md-12" style="border-top: solid; padding-top:7px">
                        <div class="form-group"><label class="control-label">Nombre: </label>  <input type="text"  id="PROVECONT_nombre"  class="form-control-plaintext form-control-sm "  value="{{$contactos->PROVECONT_nombre}}">
                        </div></form>
                        <div class="col-md-4">
                         <div class="form-group">
                         <label class="control-label" >Cargo: </label>
                         <input type="text"   class="form-control-plaintext form-control-sm " id="PROVECONT_descripcion"    value="{{$contactos->PROVECONT_descripcion}}">
                        </div>
                        </div>

                        <div class="col-md-3">
                        <div class="form-group"><label class="control-label">Número: </label>  <input type="text"    id="PROVECONT_telefono"  class="form-control-plaintext form-control-sm " value="{{$contactos->PROVECONT_telefono}}"></div></div>

                        <div class="col-md-4">
                        <div class="form-group">
                        <label class="control-label">Email: </label>
                         <input type="email"  id="PROVECONT_email" class="form-control-plaintext form-control-sm " style="margin-right: 2%;" value="{{$contactos->PROVECONT_email}}"></div> </div>



                    @endforeach
            <br>
            @endif

               @if( count($expediente)>=1)
               <div class="col-md-12" style="border-top: solid; padding-top:7px">
                        <div class="form-group"><label class="control-label">Expediente: </label></div>  </div>
                    <div class="col-md-6">
                        <label for="PROEXP_descripcion" style=" "><i class="mdi mdi-clipboard-account-outline mr-1"></i>Descripcion:</label>
                        <input type="text" class="form-control-plaintext form-control-sm "  value={{$expediente[0]->PROEXP_descripcion}}>
                    </div>
                    <br>
                    <form class="form-inline">
                    <div class="col-md-6 form-group">

                            <label for="PROEXP_descripcion" style=" "><i class="mdi mdi-file mr-1"></i>Archivo:</label>

                            <form class="form-inline">
                            <div class="form-group"><a  href="{{route('proveedorExpedienteDownload',['expediente'=>$expediente[0]])}}">
                              <span><i class='mdi  mdi-file-download ' style='font-size:18px;'></i>{{$expediente[0]->PROEXP_ruta}}</span>
                            </a> </div>
                              </form>

                    </div>
                    </form>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Observacion: </label>
                            <input type="text" class="form-control-plaintext form-control-sm "  value={{$expediente[0]->PROEXP_observacion}}>
                        </div>
                    </div>

              @endif
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
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>
        <!-- App js-->
        <script src="{{asset('assets/js/app.min.js')}}"></script>
        <script src="{{asset('assets/libs/select2/select2.min.js')}}"></script>
   <script src="{{asset('assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>


    </body>
</html>
