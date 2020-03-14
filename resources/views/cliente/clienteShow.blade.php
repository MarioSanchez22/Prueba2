

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
         <style>
        .labelEstilo{
        color: #2e667b;
        font-weight: 705;
        font-family:Arial, Helvetica, sans-serif;
        }
         </style>

    </head>

    <body style="color: #649198;">
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
                            <h4 class="page-title">CLIENTE:{{$cliente->CLIE_razon_social}}</h4>
                            </div>
                        </div>
                    </div>  <!-- end row -->

                    <div class="row">
                        <div class="col-md-12 bounceInDown animated">

                            <!-- /.card-header -->

                                <div class="row" >
                                <div class="col-lg-6 col-xl-6">
                                <div class="card-box ">
                                    <div class="row ">
                                        <div clas="col-lg-7 col-xl-7"  style="width: 45%">
                                            <div class="text-center mt-3">
                                    <img src="{{asset('cliente.png')}}" class="rounded-circle avatar-lg img-thumbnail"
                                    alt="profile-image">

                                    <h4 class="mb-0">{{$cliente->CLIE_razon_social}}</h4> <BR>
                                    <p >RUC: {{$cliente->CLIE_ruc}}</p>
                                    <p >DNI: {{$cliente->CLIE_dni}}</p>
                                    @if($cliente->CLIE_estado==1)
                                    <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Activo</button>
                                    @else
                                    <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Bloqueado</button>
                                    @endif
                                </div>


                                    <div class="text-center mt-3">
                                        <h4 class="font-13 text-uppercase text-center">Ubicacion :</h4>



                                        <p class="text-muted mb-2 font-13"><strong>Region :</strong> <span class="ml-2 ">{{$cliente->CLIE_region }}</span></p>
                                        @if( count($direccion)>=1)
                                        <p class="text-muted mb-1 font-13"><strong>Direccion principal :</strong> <br> <label class="ml-2">{{$direccion[0]->CLIEDIRE_descripcion }}</label></p>
                                        @endif
                                    </div></div>
                                <div class="col-lg-5 col-xl-5">
                                    <div class="col-lg-12 col-xl-12" style="border-left: solid; border-color:#afbdca">
                                        <div class="form-group" style="    width: 160%;
                                        ">
                                            <label class="control-label" for="PROVE_telefono"><i class="mdi mdi-phone mr-1"></i>Telefono: </label>
                                            <input type="text" readonly="" class=" form-control-plaintext form-control-sm "  required placeholder="Telefono" name="PROVE_telefono" value=" {{$cliente->CLIE_telefono }}"> </div>
                                        </div> <br>


                                        <div class="col-md-12 " style="border-left: solid;border-color:#afbdca ">
                                        <div class="form-group" style="    width: 160%;
                                        ">
                                            <label class="control-label text-left" for="PROVE_email" > <i class="mdi mdi-email mr-1"></i>Email: </label>
                                            <input type="text" creadonly="" class=" col-md-12 form-control-plaintext form-control-sm "  required  placeholder="Email" name="PROVE_email" value=" {{$cliente->CLIE_email }}"> </div>
                                        </div>
                                        <br>
                                        @if( count($direccion)>1)
                                        <div class="col-md-12" style="border-left: solid;border-color:#afbdca "><label for="" class="control-label"><i class="mdi mdi-briefcase-account mr-1"></i>Otra(s) direccion(es):</label>
                                        @for ($i = 1; $i < sizeof($direccion); $i++)

                                        <form class="form-inline col-md-12" style="">
                                            <div class="form-group"><label class="control-label">Direccion: </label>  <input type="text"  id="PROVECONT_nombre"  class="form-control-plaintext form-control-sm "  value="{{$direccion[$i]->CLIEDIRE_descripcion}}">
                                            </div></form>



                                             @endfor

                                           <br> </div>

                                           @endif

                                    <div class="col-md-12 " style="border-left: solid;border-color:#afbdca ">
                                    <div class="form-group" style="    width: 160%;
                                    ">
                                        <label class="control-label text-left" for="PROVE_email" > <i class="mdi mdi-email mr-1"></i>creado por: </label>
                                        <input type="text" creadonly="" class=" col-md-12 form-control-plaintext form-control-sm "  required  placeholder="Email" name="PROVE_email" value=" {{$cliente->USER_id }}"> </div>
                                    </div>
                                    <div class="col-md-12 " style="border-left: solid;border-color:#afbdca ">
                                        <div class="form-group" style="    width: 160%;
                                        ">
                                            <label class="control-label text-left" for="PROVE_email" > <i class="mdi mdi-email mr-1"></i>Vendedor: </label>
                                            <input type="text" creadonly="" class=" col-md-12 form-control-plaintext form-control-sm "  required  placeholder="Email" name="PROVE_email" value=" {{$cliente->EMPLE_id }}"> </div>
                                        </div>
                                </div>
                                </div>
                                <div class="row">

                                </div>



                                </div> <!-- end card-box -->



                            </div> <!-- end col-->

                     <div class="col-lg-6 col-xl-6">


                     <div class="card-box ">
                     <div class="row">
                     @if( count($contacto)>=1)
                     <div class="col-md-12"><label for="" class="control-label"><i class="mdi mdi-briefcase-account mr-1"></i>Contacto(s):</label> </div>

                    @foreach ($contacto as $contactos)
                    <form class="form-inline col-md-12" style="border-top: solid; padding-top:7px">
                        <div class="form-group"><label class="control-label">Nombre: </label>  <input type="text"  id="PROVECONT_nombre"  class="form-control-plaintext form-control-sm "  value="{{$contactos->CLIECON_nombre}}">
                        </div></form>

                        <div class="col-md-4">
                         <div class="form-group">
                         <label class="control-label" >Cargo: </label>
                         <input type="text"   class="form-control-plaintext form-control-sm " id="PROVECONT_descripcion"    value="{{$contactos->CLIECON_descripcion}}">
                        </div>
                        </div>

                        <div class="col-md-3">
                        <div class="form-group"><label class="control-label">Número: </label>  <input type="text"    id="PROVECONT_telefono"  class="form-control-plaintext form-control-sm " value="{{$contactos->CLIECON_telefono}}"></div></div>

                        <div class="col-md-4">
                        <div class="form-group">
                        <label class="control-label">Email: </label>
                         <input type="email"  id="PROVECONT_email" class="form-control-plaintext form-control-sm " style="margin-right: 2%;" value="{{$contactos->CLIECON_email}}"></div> </div>



                    @endforeach
            <br>
            @endif


              </div>      <!-- /.end row -->
                     </div>  <!-- /.end car box -->

                     <div class="card-box ">
                        <div class="row">
                            <div class="col-md-6" style="margin-left: 27%">
                                <form action="" class="form-inline">
                                <div class="form-group">
                                <label class="control-label"  style="font-weight: bold;">Fecha y hora de creacion: </label> &nbsp&nbsp
                                 <input type="text" value="{{$contactos->created_at}}" class="form-control form-control-sm" style="border-color: #fff; font-weight: bold;">
                                </div>
                                </form>
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


    </body>
</html>
