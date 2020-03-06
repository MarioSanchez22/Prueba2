@php
    use App\User;
    $usuarioRegistro=User::where('id','=',$empresa->id)->first();
@endphp

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{csrf_token()}}"/>
        
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author"/>
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





<!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="margin-top: 15%;">
        <div class="modal-content" style="width:50%; margin: auto;">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Agregar área</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div id="div_100" class="row" style="margin-bottom: 2%;">
                    <div class="col-12">
                        <label >Área:</label>
                        <input type="text" name="AREA_nombre" id="AREA_nombre"  class="form-control form-control-sm " onkeyup="activaboton2()">
                        <span class="col-12"></span>
                        <input type="text" name="EMPRESA_id" id="EMPRESA_id"  class="form-control form-control-sm " value="{{$empresa->EMPRESA_id}}" style="display:none;">
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary bt_guarda" id="bt_guarda2" style=""  type="button"  style="padding: 4px 8px; background-color: #446e8c; border-Color:#04233a;" onclick="saveArea()" disabled >Guardar</button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--  Modal content for the above example -->
<div class="modal fade bs-example-modal2-lg" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="margin-top: 15%;">
        <div class="modal-content" style="width: 50%; margin:auto;">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Agregar sucursal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                    <div id="div_100" class="row" style="margin-bottom: 2%;">
                        <div class="col-12">
                            <label >Sucursal:</label>
                            <input type="text" name="SUCURSAL_nombre" id="SUCURSAL_nombre"  class="form-control form-control-sm " onkeyup="activaboton1()">
                            <span class="col-12"></span>
                        </div>
                        <div class="col-12">
                            <label>Descripción:</label>
                            <input type="text" name="SUCURSAL_descripcion" id="SUCURSAL_descripcion"  class="form-control form-control-sm ">
                            <span class="col-12"></span>
                            <input type="text" name="EMPRESA_id" id="EMPRESA_id"  class="form-control form-control-sm " value="{{$empresa->EMPRESA_id}}" style="display:none;">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary bt_guarda" id="bt_guarda1" style=""  type="button"  style="padding: 4px 8px; background-color: #446e8c; border-Color:#04233a;" onclick="saveSucursal()" disabled>Guardar</button>
                        </div>
                    </div>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



                    <!-- start page title -->
                    <div class="row">
                            <div class="col-10" style="font-size: 19px;font-weight: bold;padding-top: 5px; padding-left: 0px">
                                <i class="mdi mdi-24px mdi-home-city" style=" margin-right: 6px;color:#373f5f"></i>EMPRESA: {{$empresa->EMPRESA_nombre}}
                            </div>
                            <div class="col-2 " style="padding-top: 6px; ">
                                <button type="button" id="editar" class="btn  btn-primary btn-sm"  style="float:right; margin:4% 0;" onclick="activaEditar()"><span class=" mdi mdi-square-edit-outline"> </span> Empresa</button>
                                <button type="button" id="cancelar" class="btn btn-primary btn-sm" style="float:right; background-color: #af2323;border-color: #af2323; display: none; margin:4% 0;"><span class=" mdi mdi-square-edit-outline" onclick="desactivaEditar()"> Cancelar</button>
                            </div>
                    </div>  <!-- end row -->
                <form action="{{route('empresaUpdate',['empresa'=>$empresa->EMPRESA_id])}}" method="POST">
                        {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12 bounceInDown ">
                            <!-- /.card-header -->
                            <div class="row" >
                                <div class="col-lg-6 col-xl-6">
                                    <div class="card-box ">
                                        <div class="row ">
                                            <div clas="col-lg-7 "  style="width: 45%">
                                                <div class="text-center mt-3">
                                                    <img src="{{asset('asistencia-social.png')}}" class="rounded-circle avatar-lg img-thumbnail"
                                                        alt="profile-image">
                                                    <p>RUC: {{$empresa->EMPRESA_ruc}}</p>
                                                    <p id="aniversario">Aniversario: <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">{{$aniversario}}</button></p>
                                                </div>
                                                <div class="text-center mt-3" id="aniversarioEdit" style="display: none;">
                                                    <br>
                                                    <label class="control-label" for="EMPRESA_fecha_apertura">Fecha apertura: </label>
                                                    <div class="input-group">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-calendar-alt "></i></span>
                                                      </div>
                                                    <input class="form-control form-control-sm " data-date-format="dd/mm/yyyy" id="datepicker2" name="EMPRESA_fecha_apertura" value="{{$fechaApertura}}">
                                                    </div>
                                                </div>
                                                <div class="text-center mt-3">
                                                    <h4 class="font-13 text-uppercase text-center">Empresa :</h4> <input type="text" class="form-control-plaintext form-control-sm  text-center" id="EMPRESA_comercial"  value="{{$empresa->EMPRESA_comercial}}" name="EMPRESA_comercial" disabled>
                                                    <br><br>
                                                    <p class="text-muted mb-1 font-13"><strong>Descripción :</strong> <br> <input type="text" class="form-control-plaintext form-control-sm  text-center" id="EMPRESA_descripcion" name="EMPRESA_descripcion"  value="{{$empresa->EMPRESA_descripcion}}" disabled></p>
                                                </div>
                                            </div>

                                            <div class="col-lg-5 col-xl-5">
                                                <div class="col-lg-12 col-xl-12" style="border-left: solid; border-color:#afbdca">
                                                    <div class="form-group" style="    width: 160%;">
                                                        <label class="control-label" for="EMPRESA_sunat_usuario"><i class="fe-user"></i> Usuario: </label>
                                                        <input type="text" readonly="" class=" form-control-plaintext form-control-sm "  required placeholder="Telefono" name="EMPRESA_sunat_usuario" value="{{$empresa->EMPRESA_sunat_usuario}}" disabled>
                                                    </div>
                                                </div> <br>
                                                <div class="col-lg-12 col-xl-12" style="border-left: solid; border-color:#afbdca">
                                                    <div class="form-group" style="width: 160%;">
                                                        <label class="control-label" for="EMPRESA_sunat_clave"><i class="mdi mdi-key"></i> Clave Sol: </label>
                                                        <input type="text" readonly="" class=" form-control-plaintext form-control-sm "  required placeholder="clave" name="EMPRESA_sunat_clave" value="{{$empresa->EMPRESA_sunat_clave }}" disabled>
                                                    </div>
                                                </div> <br>
                                                <div class="col-lg-12 col-xl-12" style="border-left: solid; border-color:#afbdca">
                                                    <div class="form-group" style="width: 160%;">
                                                        <label class="control-label" for="EMPRESA_sunat_clave"><i class="mdi mdi-file-pdf"></i> Certificado digital: </label>
                                                        <input type="text" readonly="" class=" form-control-plaintext form-control-sm "  required placeholder="clave" name="EMPRESA_sunat_clave" value=" {{$empresa->EMPRESA_certificado_digital}}" disabled>
                                                    </div>
                                                </div> <br>
                                                <div class="col-lg-12 col-xl-12" style="border-left: solid; border-color:#afbdca">
                                                    <div class="form-group" style="width: 160%;">
                                                        <label class="control-label" for="EMPRESA_sunat_clave"><i class="mdi mdi-shield-account"></i> Registrado por: </label>
                                                        <input type="text" readonly="" class=" form-control-plaintext form-control-sm "  required placeholder="clave" name="EMPRESA_sunat_clave" value="{{$usuarioRegistro->email}}" disabled>
                                                    </div>
                                                </div> <br>
                                            </div>
                                        </div>
                                    </div> <!-- end card-box -->
                                </div> <!-- end col-->
                                <div class="col-lg-6 col-xl-6">
                                    <div class="card-box" style="padding-bottom: 0px">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <label for="" class="control-label"><i class="mdi mdi-briefcase-account mr-1"></i>Datos de Sucursales:</label>
                                            </div>
                                            <div class="col-md-1">
                                                <a href="#" data-toggle="modal" data-target=".bs-example-modal2-lg" id="agsucursal"><span class="fe-plus-circle" title="Agregar Sucursal" ></a>
                                            </div>
                                            <div id="sucursal">
                                                 @if ($sucursales->count()>0)
                                                    <div class="row">
                                                        @foreach ($sucursales as $sucursal)
                                                            <input type="text"   class="form-control-plaintext form-control-sm SUCURSAL_nombre" name="SUCURSAL_id[]"  value="{{$sucursal->SUCURSAL_id}}" disabled style="display:none">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label" >Sucursal: </label>
                                                                    <input type="text"   class="form-control-plaintext form-control-sm SUCURSAL_nombre" name="SUCURSAL_nombre[]"    value="{{$sucursal->SUCURSAL_nombre}}" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label ">Sucursal descripción: </label>
                                                                    <input type="text"    name="SUCURSAL_descripcion[]" class="form-control-plaintext form-control-sm SUCURSAL_nombre" value="{{$sucursal->SUCURSAL_descripcion}}" disabled>
                                                                </div>
                                                            </div>
                                                    @endforeach
                                                    </div>
                                                    <br>
                                                @endif
                                            </div>
                                        </div> <!-- /.end row -->
                                    </div>  <!-- /.end car box -->
                                    <div class="card-box" style="padding-bottom: 0px">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <label for="" class="control-label"><i class="mdi mdi-briefcase-account mr-1"></i>Datos de Áreas:</label>
                                            </div>
                                            <div class="col-md-1">
                                                <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" id="agarea"><span class="fe-plus-circle"  title="Agregar Área"></a>
                                            </div>
                                            <div id="areas">
                                                @if ($areas->count()>0)
                                                    <form class="form-inline col-md-12" style="border-top: solid; padding-top:7px">
                                                    </form>
                                                    <div class="row">
                                                        @foreach ($areas as $area)
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Área: </label>
                                                                    <input type="text"   class="form-control-plaintext form-control-sm AREA_descripcion" name="AREA_descripcion[]"  value="{{$area->AREA_descripcion}}" disabled>
                                                                    <input type="text"   class="form-control-plaintext form-control-sm AREA_descripcion" name="AREA_id[]"  value="{{$area->AREA_id}}" disabled style="display:none">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <br>
                                                @endif
                                            </div>
                                        </div> <!-- /.end row -->
                                    <div class="row">
                                        <div class="col-md-12 text-right" style="display: none" id="divguardar">
                                            <div class="form-group">
                                                <button type="submit"  class="btn btn-primary btn-sm" style="float:right; background-color: #446e8c;border-color: #446e8c; margin:2% 0;" ><span class=" mdi mdi-square-edit-outline"> Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>  <!-- /.end car box -->
                            </div>  <!-- /.end col lg6 -->
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
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
            function saveArea(){
                var AREA_nombre= $('#AREA_nombre').val();
                var EMPRESA_id= $('#EMPRESA_id').val();
                $.ajax({
                    url:"{{route('areaCreate')}}",
                    method:"POST",
                    data:{
                        AREA_nombre:AREA_nombre,
                        EMPRESA_id:EMPRESA_id
                    },
                    success:function(data){
                        $('#modal').modal("hide");
                        $('#areas').load(location.href+" #areas>*");
                        limpiarFormArea();
                    }
                });
            }
        </script>
        <script>
                function activaboton1(){
                    var SUCURSAL_nombre= $('#SUCURSAL_nombre').val();
                    if ((SUCURSAL_nombre!=null) &&(SUCURSAL_nombre!='')) {
                        $('#bt_guarda1').prop('disabled',false);

                    }else{
                        $('#bt_guarda1').prop('disabled',true);
                        $('#SUCURSAL_descripcion').val('');
                    }
                };
                function activaboton2(){
                    var AREA_nombre= $('#AREA_nombre').val();
                    if ((AREA_nombre!=null) &&(AREA_nombre!='')) {
                        $('#bt_guarda2').prop('disabled',false);
                    }else{
                        $('#bt_guarda2').prop('disabled',true);

                    }
                };
        </script>
        <script>
            function saveSucursal(){
                var SUCURSAL_nombre= $('#SUCURSAL_nombre').val();
                var SUCURSAL_descripcion=$('#SUCURSAL_descripcion').val();
                var EMPRESA_id= $('#EMPRESA_id').val();
                $.ajax({
                    url:"{{route('sucursalCreate')}}",
                    method:"POST",
                    data:{
                        SUCURSAL_nombre:SUCURSAL_nombre,
                        SUCURSAL_descripcion:SUCURSAL_descripcion,
                        EMPRESA_id:EMPRESA_id
                    },
                    success:function(data){
                        $('#modal2').modal("hide");
                        $('#sucursal').load(location.href+" #sucursal>*");
                        limpiarFormArea();
                    }
                });
            }
        </script>
        <script>
            function limpiarFormArea(){
                $('#AREA_nombre').val('');
                $('#SUCURSAL_nombre').val('');
                $('#SUCURSAL_descripcion').val('');
            }
        </script>

        <script>
        function activaEditar(){
            $('#cancelar').show();
            $('#editar').hide();
            $('#divguardar').show();

            $('.AREA_descripcion').prop('disabled',false);
            $('.SUCURSAL_nombre').prop('disabled',false);
            $('#EMPRESA_descripcion').prop('disabled',false);
            $('#EMPRESA_comercial').prop('disabled',false);

            $('#agsucursal').hide();
            $('#agarea').hide();

            $('#aniversario').hide();
            $('#aniversarioEdit').show();
        };
        function desactivaEditar(){
            $('#editar').show();
            $('#cancelar').hide();
            $('#divguardar').hide();

            $('.AREA_descripcion').prop('disabled',true);
            $('.SUCURSAL_nombre').prop('disabled',true);
            $('#EMPRESA_descripcion').prop('disabled',true);
            $('#EMPRESA_comercial').prop('disabled',true);

            $('#agsucursal').show();
            $('#agarea').show();

            $('#aniversario').show();
            $('#aniversarioEdit').hide();
        }
        </script>
        <script type="text/javascript">
            $('#datepicker2').datepicker({
                weekStart: 1,
                daysOfWeekHighlighted: "6,0",
                autoclose: true
            });
        </script>
    </body>
</html>
