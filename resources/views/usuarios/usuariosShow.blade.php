

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
                            <h4 class="page-title">PERSONA:{{$persona->PERSONA_nombres}}</h4>
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
                                    <img src="{{asset('asistencia-social.png')}}" class="rounded-circle avatar-lg img-thumbnail"
                                    alt="profile-image">
                                    <p >{{$persona->PERSONA_nombres}} </p >


                                        @if ($persona->PERSONA_venta==1)
                                        <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Vendedor</button>
                                    @endif
                                    @if ($usuarioP!=null)
                                    <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Usuario</button>
                                    @endif
                                    @if ($empleado!=null)
                                    <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Empleado</button>
                                    @endif
                                    <p >DNI: {{$persona->PERSONA_identificador}}</p>
                                    <p >Fecha de nacimiento: {{$persona->PERSONA_nacimiento}}</p>

                                </div>


                                    <div class="text-center mt-3">
                                        <h4 class="font-13 text-uppercase text-center">Empresa :</h4> {{$empresa->EMPRESA_nombre}}


                                            <br><br>

                                        <p class="text-muted mb-1 font-13"><strong>Direccion principal :</strong> <br> <label class="ml-2">{{$persona->PERSONA_direccion}}</label></p>

                                    </div></div>
                            <div class="col-lg-5 col-xl-5">
                                    <div class="col-lg-12 col-xl-12" style="border-left: solid; border-color:#afbdca">
                                        <div class="form-group" style="    width: 160%;
                                        ">
                                            <label class="control-label" for="PROVE_telefono"><i class="mdi mdi-phone mr-1"></i>Telefono: </label>
                                            <input type="text" readonly="" class=" form-control-plaintext form-control-sm "  required placeholder="Telefono" name="PROVE_telefono" value=" {{$persona->PERSONA_telefono }}"> </div>
                                        </div> <br>
                                        <div class="col-lg-12 col-xl-12" style="border-left: solid; border-color:#afbdca">
                                            <div class="form-group" style="    width: 160%;
                                            ">
                                                <label class="control-label" for="PROVE_telefono"><i class="mdi mdi-phone mr-1"></i>Celular: </label>
                                                <input type="text" readonly="" class=" form-control-plaintext form-control-sm "  required placeholder="Telefono" name="PROVE_telefono" value=" {{$persona->PERSONA_celular }}"> </div>
                                            </div> <br>



                                        <div class="col-md-12 " style="border-left: solid;border-color:#afbdca ">
                                        <div class="form-group" style="    width: 160%;
                                        ">
                                            <label class="control-label text-left" for="PROVE_email" > <i class="mdi mdi-email mr-1"></i>Email: </label>
                                            <input type="text" creadonly="" class=" col-md-12 form-control-plaintext form-control-sm "  required  placeholder="Email" name="PROVE_email" value=" {{$persona->PERSONA_email }}"> </div>
                                        </div>
                                        <br>


                                    <div class="col-md-12 " style="border-left: solid;border-color:#afbdca ">
                                    <div class="form-group" style="    width: 160%;
                                    ">
                                        <label class="control-label text-left" for="PROVE_email" > <i class="mdi mdi-email mr-1"></i>creado por: </label>
                                        <input type="text" creadonly="" class=" col-md-12 form-control-plaintext form-control-sm "  required  placeholder="Email" name="PROVE_email" value="123333 "> </div>
                                    </div>

                                </div>
                                </div>
                                <div class="row">

                                </div>



                                </div> <!-- end card-box -->



                            </div> <!-- end col-->

                   <div class="col-lg-6 col-xl-6">

                    @if ($empleado!=null)
                     <div class="card-box" style="padding-bottom: 0px">
                     <div class="row">

                     <div class="col-md-12"><label for="" class="control-label"><i class="mdi mdi-briefcase-account mr-1"></i>Datos de empleado:</label> </div>


                    <form class="form-inline col-md-12" style="border-top: solid; padding-top:7px">
                      
                        </form>

                        <div class="col-md-6">
                         <div class="form-group">
                         <label class="control-label" >Cargo: </label>
                         <input type="text"   class="form-control-plaintext form-control-sm " id="PROVECONT_descripcion"    value="{{$empleado->EMPLEADO_cargo }}">
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-group"><label class="control-label">Fecha de incorporacion: </label>  <input type="text"    id="PROVECONT_telefono"  class="form-control-plaintext form-control-sm " value="{{$empleado->EMPLEADO_fecha_incorporacion}}"></div></div>

                        <div class="col-md-6">
                        <div class="form-group">
                        <label class="control-label">Sucursal: </label>
                       
                         <input type="email"  id="PROVECONT_email" class="form-control-plaintext form-control-sm " style="margin-right: 2%;" value="{{$sucursalp->SUCURSAL_nombre}}"></div>
                        
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                            <label class="control-label">Area: </label>
                             <input type="email"  id="PROVECONT_email" class="form-control-plaintext form-control-sm " style="margin-right: 2%;" value="{{$areap->AREA_descripcion}}"></div>
                             </div>




            <br>



              </div>      <!-- /.end row -->
                     </div>  <!-- /.end car box -->
                     @endif
                     @if ($usuarioP!=null)
                     <div class="card-box" style="padding-bottom: 0px">
                     <div class="row">

                     <div class="col-md-12"><label for="" class="control-label"><i class="mdi mdi-briefcase-account mr-1"></i>Datos de usuario:</label> </div>
                     <form class="form-inline col-md-12" style="border-top: solid; padding-top:7px">
                      
                    </form>


                        <div class="col-md-4">
                         <div class="form-group">
                         <label class="control-label" >Nick: </label>
                         <input type="text"   class="form-control-plaintext form-control-sm " id="PROVECONT_descripcion"    value="{{$usuarioP->USER_nick}}">
                        </div>
                        </div>

                        <div class="col-md-3">
                        <div class="form-group"><label class="control-label">Usuario: </label>  <input type="text"    id="PROVECONT_telefono"  class="form-control-plaintext form-control-sm " value="{{$usuarioP->email}}"></div></div>

                        <div class="col-md-4">
                        <div class="form-group">
                        <label class="control-label">Estado: </label> <br>
                        @if($usuarioP->USER_estado==1)
                         <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Activo</button>
                        @else
                        <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Bloqueado</button>
                        @endif</div> </div>




            <br>



              </div>      <!-- /.end row -->
                     </div>  <!-- /.end car box -->
                     @endif
                  

                     </div>  <!-- /.end col lg6 -->






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
