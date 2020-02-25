

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
    </head>
    <body>
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
                                <h4 class="page-title">REGISTRO DE USUARIOS</h4>
                            </div>
                        </div>
                    </div>

                    <div  class="row bounceInUp animated">
                        <div class="col-md-12">
                          <div class="card" style=" margin-bottom: 0px;   ">

                            <!-- /.card-header -->
                            <div class="card-body col-md-12" style="padding-left: 0px; padding-right: 0px;">
                                <div class="row" >
                                    <form action=" # " method="POST" enctype="multipart/form-data" class="col-md-12">
                                    {{ csrf_field()}}
                                        <div class="card-box " style=" padding-top: 0px; margin-bottom: 0px;padding-bottom: 5px;">
                                            <ul class="nav nav-tabs" style="background:#f5f5f5">
                                                <li class="nav-item">
                                                    <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                        <i class="mdi mdi-database-edit"></i> Datos de Proveedor
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content ">
                                                <div class="tab-pane show active " id="home">
                                                    <div class="row">
                                                        <div class=" row col-md-12" id="verD"  style=" padding: 0;  margin: 0;  ">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                  <label class="control-label">Tipo de documento: </label>
                                                                  <select  class="form-control  form-control-sm" name="PROVEDOC_descripcion" id="">
                                                                  @foreach($documento as $documentos)
                                                                  <option value="{{$documentos->PROVEDOC_id}}">{{$documentos->PROVEDOC_descripcion}}</option>
                                                                  @endforeach
                                                                  </select>
                                                               </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="control-label" for="PROVE_dni">
                                                                   Documento
                                                                 </label>
                                                                 <div class="input-group">
                                                                <input type="text" class="form-control form-control-sm" required  placeholder="Documento" id="PROVE_dni" name="PROVE_dni">
                                                                <div  id="cargarDni" style="display:none"> <button class="btn btn-info btn-sm" type="button"  >
                                                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="sr-only">f</span>
                                                                </button></div>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="form-group">
                                                                <label class="control-label" for="PROVE_razon_social" >
                                                                   Nombre
                                                                </label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control form-control-sm" required  placeholder="Nombre" name="PROVE_razon_social"  id="PROVE_razon_social"> </div>
                                                            </div></div>
                                                        </div>


                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label">Direccion: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-bank-transfer-in"></i></span>
                                                                </div>
                                                              <input type="text" class="form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion"> </div>
                                                           </div></div>
                                                           <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label" for="PROVE_email" >Email: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-email mr-1"></i></span>
                                                                </div>  <input type="text" class="form-control form-control-sm" required  placeholder="Email" name="PROVE_email"> </div>
                                                           </div></div>

                                                           <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label" for="PROVE_telefono">Teléfono 1: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-phone mr-1"></i></span>
                                                                </div> <input type="text" class="form-control form-control-sm" required placeholder="Telefono" name="PROVE_telefono"> </div>
                                                           </div></div>
                                                           <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label" for="PROVE_telefono">Telefono 2: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-phone mr-1"></i></span>
                                                                </div> <input type="text" class="form-control form-control-sm" required placeholder="Telefono" name="PROVE_telefono"> </div>
                                                           </div></div>

                                                           <div class="col-lg-12">
                                                            <!-- Portlet card -->
                                                            <div class="card">
                                                                <div class="card-body" style="padding:0">
                                                                    <div class="card-widgets">
                                                                        <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2" class="collapsed"><i class="mdi mdi-minus"></i></a>
                                                                    </div>
                                                                    <h5 class="card-title mb-0">Usuario:</h5>
                                                                    <div id="cardCollpase2" class="pt-3 collapse">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label class="control-label" for="PROVE_telefono">Username: </label>
                                                                                <div class="input-group">
                                                                                <div class="input-group-prepend ">
                                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="fas fa-user"></i></span>
                                                                                    </div> <input type="text" class="form-control form-control-sm" required placeholder="Usuario" name="PROVE_telefono"> </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                <label class="control-label" for="PROVE_telefono">Contraseña: </label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend ">
                                                                                        <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="fas fa-key"></i></span>
                                                                                    </div> <input type="password" class="form-control form-control-sm" required placeholder="Contraseña" name="PROVE_telefono"> </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                  <label class="control-label">Rol:</label>
                                                                                  <select  class="form-control  form-control-sm" name="ROL_id" id="">
                                                                                  @foreach($rol as $roles)
                                                                                  <option value="{{$roles->ROL_id}}">{{$roles->ROL_descripcion}}</option>
                                                                                  @endforeach
                                                                                  </select>
                                                                               </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end card-->
                                                        </div><!-- end col -->
                                                        <div class="col-lg-12">
                                                            <!-- Portlet card -->
                                                            <div class="card">
                                                                <div class="card-body" style="padding:0">
                                                                    <div class="card-widgets">
                                                                        <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1" class="collapsed"><i class="mdi mdi-minus"></i></a>
                                                                    </div>
                                                                    <h5 class="card-title mb-0">Empleado:</h5>
                                                                    <div id="cardCollpase1" class="pt-3 collapse">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label class="control-label" for="PROVE_telefono">Fecha de Incorporación: </label>
                                                                                <div class="input-group">
                                                                                <div class="input-group-prepend ">
                                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="fas fa-user"></i></span>
                                                                                    </div> <input type="text" class="form-control form-control-sm" required placeholder="Telefono" name="PROVE_telefono"> </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                <label class="control-label" for="PROVE_telefono">Cargo: </label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend ">
                                                                                        <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="fas fa-key"></i></span>
                                                                                    </div> <input type="password" class="form-control form-control-sm" required placeholder="Telefono" name="PROVE_telefono"> </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                  <label class="control-label">Rol:</label>
                                                                                  <select  class="form-control  form-control-sm" name="ROL_id" id="">
                                                                                  @foreach($rol as $roles)
                                                                                  <option value="{{$roles->ROL_id}}">{{$roles->ROL_descripcion}}</option>
                                                                                  @endforeach
                                                                                  </select>
                                                                               </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end card-->
                                                        </div><!-- end col -->
                                                </div>
                                                </div>

                                        <div class="modal-footer d-flex" style="background:#f5f5f5">
                                        <button type="submit" class="btn btn-primary" style="background-color: #446e8c;">Save changes</button>
                                      </div>
                                        </div> <!-- end card-box-->
                                    </form>
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- /.card-body -->
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
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        @include('layouts.scripts')

        <script>
            $(document).ready(function(){
              $('#cargarDni').hide();

                $("#PROVE_dni").keyup(function(){
           var numdni= $("#PROVE_dni").val();
           if(numdni.length == 8){
           consultadatosSUNAT2(numdni);


           }
         });


          function consultadatosSUNAT2(PROVE_dni){
              $('#cargarDni').show();

            var dni=$('#PROVE_dni').val();
            var token='?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImFsaWNpYXJvZHJpZ3VlejEzMUBnbWFpbC5jb20ifQ.a3lvPXVhSwXBw-I8VQ9gS7WS-HZMAzMTMCcFLW3V1eE';
                $.ajax({
                    method:'GET',
                   url: "https://dniruc.apisperu.com/api/v1/dni/"+dni +token,
                   success:function(data){
                    $('#cargarDni').hide();
                              var resultados=data;
                                  $('#PROVE_razon_social').val(data.apellidoPaterno+" "+data.apellidoMaterno+" "+ data.nombres);
                          }
                });
                                 }

                });

        </script>
    </body>
</html>
