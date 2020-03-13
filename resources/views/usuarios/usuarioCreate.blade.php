

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
                                <h4 class="page-title">REGISTRO DE PERSONAL</h4>
                            </div>
                        </div>
                    </div>

                    <div  class="row bounceInUp animated">
                        <div class="col-md-12">
                          <div class="card" style=" margin-bottom: 0px;   ">

                            <!-- /.card-header -->
                            <div class="card-body col-md-12" style="padding-left: 0px; padding-right: 0px;">
                                <div class="row" >
                                    <form action="{{route('usuariosStore')}}" method="POST"  class="col-md-12" id="form_usuario">
                                    {{ csrf_field()}}
                                        <div class="card-box " style=" padding-top: 0px; margin-bottom: 0px;padding-bottom: 5px;">
                                            <ul class="nav nav-tabs" style="background:#f5f5f5">
                                                <li class="nav-item">
                                                    <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                        <i class="mdi mdi-database-edit"></i> Datos de Personal
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
                                                            <div class="col-md-3">
                                                                <label class="control-label" for="PERSONA_identificador">
                                                                   Documento
                                                                 </label>
                                                                 <div class="input-group">
                                                                <input type="text" class="form-control form-control-sm" required  placeholder="Documento" id="PROVE_dni" name="PERSONA_identificador">
                                                                <div  id="cargarDni" style="display:none"> <button class="btn btn-info btn-sm" type="button"  >
                                                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="sr-only">f</span>
                                                                </button></div>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                <label class="control-label" for="PERSONA_nombres" >
                                                                   Nombre
                                                                </label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control form-control-sm" required  placeholder="Nombre" name="PERSONA_nombres"  id="PROVE_razon_social"> </div>
                                                            </div></div>

                                                            <div class="col-md-2" style="margin-top: 25px;">
                                                                <div class="custom-control custom-checkbox form-check">
                                                                    <input type="checkbox" class="custom-control-input" id="PERSONA_venta" name="PERSONA_venta" >
                                                                    <label class="custom-control-label" for="PERSONA_venta" onclick="vendedor()">Vendedor</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="control-label" for="PERSONA_nacimiento">Fecha de Incorporación: </label>
                                                            <div class="input-group">
                                                              <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="far fa-calendar-alt "></i></span>
                                                              </div>
                                                              <input class="form-control form-control-sm " data-date-format="dd/mm/yyyy" id="datepicker" name="PERSONA_nacimiento">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                              <label class="control-label">Direccion: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-bank-transfer-in"></i></span>
                                                                </div>
                                                              <input type="text" class="form-control form-control-sm"  name="PERSONA_direccion"  id="PERSONA_direccion"> </div>
                                                           </div></div>
                                                           <div class="col-md-4">
                                                            <div class="form-group">
                                                              <label class="control-label" for="USER_nick" >Email: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-email mr-1"></i></span>
                                                                </div>  <input type="text" class="form-control form-control-sm"   placeholder="Email" name="PERSONA_email" required> </div>
                                                           </div></div>

                                                           <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label" for="PERSONA_celular">Teléfono 1: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-phone mr-1"></i></span>
                                                                </div> <input type="text" class="form-control form-control-sm" placeholder="Teléfono" name="PERSONA_celular" required> </div>
                                                           </div></div>
                                                           <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label" for="PERSONA_telefono">Telefono 2: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-phone mr-1"></i></span>
                                                                </div> <input type="text" class="form-control form-control-sm" placeholder="Teléfono" name="PERSONA_telefono"> </div>
                                                           </div></div>

                                                           <div class="col-lg-12">
                                                            <!-- Portlet card -->
                                                            <div class="card">
                                                                <div class="card-body" style="padding:0">
                                                                    <div class="card-widgets">
                                                                        <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2" class="collapsed"><i class="mdi mdi-minus"></i></a>
                                                                    </div>
                                                                    <div class="form-inline">
                                                                        <div class="form-check">

                                                                            <h5 class="card-title mb-0">Usuario:</h5> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                          </div>
                                                                        </div>

                                                                    <div id="cardCollpase2" class="pt-3 collapse">
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label class="control-label" for="name">Username: </label>
                                                                                <div class="input-group">
                                                                                <div class="input-group-prepend ">
                                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="fas fa-user"></i></span>
                                                                                    </div> <input type="text" class="form-control form-control-sm iterar"  placeholder="Usuario" name="name" id="USER_name"  onkeyup="activaboton()"> </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                <label class="control-label" for="password">Contraseña: </label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend ">
                                                                                        <span class="input-group-text form-control-sm " id="basic-addon1" style="color:#a9a9a9"><i class="fas fa-key"></i></span>
                                                                                    </div> <input type="password" class="form-control form-control-sm iterar"  placeholder="Contraseña" id="USER_password" name="password"> </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                <label class="control-label" for="password_confirm">Confirmar contraseña: </label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend ">
                                                                                        <span class="input-group-text form-control-sm " id="basic-addon1" style="color:#a9a9a9"><i class="fas fa-key"></i></span>
                                                                                    </div> <input type="password" class="form-control form-control-sm iterar"  placeholder="Contraseña" id="password_confirm" name="password_confirm"> </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                  <label class="control-label">Rol:</label>
                                                                                  <select  class="form-control  form-control-sm " name="ROL_id" id="ROL_id">
                                                                                    <option value="">Rol</option>
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
                                                                    <div class="form-inline">
                                                                    <div class="form-check">
                                                                        <h5 class="card-title mb-0">Empleado:</h5> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                      </div>
                                                                    </div>
                                                                    <div id="cardCollpase1" class="pt-3 collapse">
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                <label class="control-label iterar" for="EMPLEADO_cargo">Cargo: </label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend ">
                                                                                        <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="fas fa-key"></i></span>
                                                                                    </div> <input type="text" class="form-control form-control-sm iterar" placeholder="Cargo" name="EMPLEADO_cargo" id="EMPLEADO_cargo" onkeyup="activaboton()"> </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="control-label" for="EMPLEADO_fecha_incorporacion">Fecha de Incorporación: </label>
                                                                                <div class="input-group">
                                                                                  <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="far fa-calendar-alt "></i></span>
                                                                                  </div>
                                                                                  <input class="form-control form-control-sm " data-date-format="dd/mm/yyyy" id="datepicker2" name="EMPLEADO_fecha_incorporacion">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                  <label class="control-label">Sucursal:</label>
                                                                                  <select  class="form-control  form-control-sm " name="SUCURSAL_id" id="SUCURSAL_id">
                                                                                    @foreach($sucursal as $sucursales)
                                                                                        <option value="{{$sucursales->SUCURSAL_id}}">{{$sucursales->SUCURSAL_nombre}}</option>
                                                                                    @endforeach
                                                                                  </select>
                                                                               </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                  <label class="control-label">Área:</label>

                                                                                  <select  class="form-control  form-control-sm " name="AREA_id" id="AREA_id">
                                                                                    @foreach($area as $areas)
                                                                                        <option value="{{$areas->AREA_id}}">{{$areas->AREA_descripcion}}</option>
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
                                        <a href="{{route('usuariosIndex')}}"><button  type="button" class="btn btn-primary" style="background-color: #bd3333;">Cancelar</button></a>
                                        <button type="submit" class="btn btn-primary" style="background-color: #446e8c;" id="btnguarda" disabled>Save changes</button>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
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

    <script type="text/javascript">
    function activaboton(){
        var EMPLEADO_cargo=$('#EMPLEADO_cargo').val();
        var usuario=$('#USER_name').val();

            if((EMPLEADO_cargo!=null)&&(EMPLEADO_cargo!='')){
                $('#btnguarda').prop('disabled',false);
                $('#EMPLEADO_cargo').prop('required',true);
                $('#EMPLEADO_fecha_incorporacion').prop('required',true);
                $('#AREA_id').prop('required',true);
                $('#SUCURSAL_id').prop('required',true);
            }
            else{
                if ((usuario!=null)&&(usuario!='')) {
                    $('#btnguarda').prop('disabled',false);
                    $('#USER_name').prop('required',true);
                    $('#USER_password').prop('required',true);
                    $('#password_confirm').prop('required',true);
                    $('#ROL_id').prop('required',true);
                }
                else{
                    $('#ROL_id').prop('required',false);
                    $('#btnguarda').prop('disabled',true);
                    $('#USER_password').prop('required',false);
                    $('#password_confirm').prop('required',false);
                    $('#AREA_id').prop('required',false);
                    $('#SUCURSAL_id').prop('required',false);
                    $('#EMPLEADO_fecha_incorporacion').prop('required',false);

                    $('#USER_password').val('');
                    $('#password_confirm').val('');
                    $('#ROL_id').val('')
                    $('#AREA_id').val('')
                    $('#SUCURSAL_id').val('')

                }
            }
    }
    </script>
    <script>
        function vendedor(){
            $('#PERSONA_venta').on('change',function(){

                if ($(this).is(':checked')) {
                    $('#btnguarda').prop('disabled',false);
                }else{
                    $('#btnguarda').prop('disabled',true);
                }
            });
        }
    </script>
    <script type="text/javascript">
            $('#datepicker').datepicker({
                weekStart: 1,
                daysOfWeekHighlighted: "6,0",
                autoclose: true,
                todayHighlight: true,
            });
            $('#datepicker').datepicker("setDate", new Date());

    </script>
    <script type="text/javascript">
        $('#datepicker2').datepicker({
            weekStart: 1,
            daysOfWeekHighlighted: "6,0",
            autoclose: true,
            todayHighlight: true,
        });
        $('#datepicker2').datepicker("setDate", new Date());
        </script>
    </body>
</html>
