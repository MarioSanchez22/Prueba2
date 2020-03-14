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
         <!-- App favicon -->
         @include('layouts.estilos')
    </head>

    <body>
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
                            <h4 class="page-title" style="color: #373f5f">EDICION DE CLIENTES: {{$cliente->CLIE_razon_social}}</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                          <div class="card" style=" margin-bottom: 0px;   ">

                            <!-- /.card-header -->
                            <div class="card-body col-md-12" style="">
                                <div class="row" >

                                        <div class="card-box " style=" padding-top: 0px; margin-bottom: 0px;padding-bottom: 5px;">
                                            <ul class="nav nav-tabs" style="background:#f5f5f5">
                                                <li class="nav-item">
                                                    <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                       Datos de Proveedor
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="#messages" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                        Contacto de Proveedor
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content ">
                                                <div class="tab-pane show active " id="home">
                                                    <form action=" {{route('clienteUpdate',['cliente'=>$cliente])}} " method="POST" enctype="multipart/form-data" class="col-md-12">
                                                        {{ csrf_field()}}
                                                    <div class="row">


                                                        <div class=" col-md-6 ">

                                                          <label for="" >Tipo de proveedor:</label>
                                                            <select class="selectpicker form-control  form-control-sm" data-style="btn-light" id="TipoP" name="TIPPROVE_id"  style="background:#f5f5f5">
                                                                    <option value="{{$tipopro->TIPPROVE_id}}">{{$tipopro->TIPPROVE_descripcion}}</option>
                                                                <!--<option selected type="" value="" disabled selected >[Seleccionar modo de pago]</option>-->
                                                              </select>
                                                          </div>
                                                          <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label">RUC: </label>
                                                              <div class="input-group">
                                                              <input type="text" class="form-control form-control-sm"   placeholder="RUC de empresa" name="CLIE_ruc" id="CLIE_ruc" value="{{$cliente->CLIE_ruc}}">
                                                                <div  id="cargarRuc" style="display:none"> <button class="btn btn-info btn-sm" type="button"  >
                                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="sr-only"></span>
                                                            </button></div>
                                                            </div>
                                                            </div>
                                                           </div>

                                                        <div class=" row col-md-12" id="verD"  style=" padding: 0;  margin: 0;  ">
                                                            @if($cliente->TIPPROVE_id==1)
                                                            <div class="col-md-5">
                                                                <div class="form-group">
                                                                <label class="control-label" for="PROVE_razon_social">
                                                                   Razon social
                                                                </label>
                                                                <input type="text" class="form-control form-control-sm" required  placeholder="Razon social" id="CLIE_razon_social" name="CLIE_razon_social" value="{{$cliente->CLIE_razon_social}}"> </div>
                                                            </div>

                                                               <div class="col-md-5">
                                                                <div class="form-group">
                                                                  <label class="control-label">Razon comercial: </label>
                                                                  <input type="text" class="form-control form-control-sm" placeholder="Razon comercial" name="CLIE_razon_comercial" id="CLIE_razon_comercial" value="{{$cliente->CLIE_razon_comercial}}"> </div>
                                                               </div>
                                                               @endif
                                                               @if($cliente->TIPPROVE_id==2)
                                                               <div class="col-md-3">
                                                                <div class="form-group">
                                                                  <label class="control-label">Tipo de documento: </label>
                                                                  <select  class="form-control  form-control-sm" name="PROVEDOC_descripcion" id="">
                                                                  <option value="{{$cliente->PROVEDOC_descripcion}}">{{$cliente->PROVEDOC_descripcion}}</option>

                                                                  </select>
                                                               </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label class="control-label" for="PROVE_dni">
                                                                   Documento
                                                                 </label>
                                                                 <div class="input-group">
                                                                 <input type="text" class="form-control form-control-sm" required  placeholder="Documento" id="CLIE_dni" name="CLIE_dni" value="{{$cliente->CLIE_dni }}">
                                                                <div  id="cargarDni" style="display:none"> <button class="btn btn-info btn-sm" type="button"  >
                                                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="sr-only"></span>
                                                                </button></div>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                <label class="control-label" for="PROVE_razon_social">
                                                                   Nombre
                                                                </label>
                                                            <input type="text" class="form-control form-control-sm" required  placeholder="Nombre" name="CLIE_razon_social"  id="CLIE_razon_social" value="{{$cliente->CLIE_razon_social}}"> </div>
                                                            </div>
                                                            @endif

                                                        </div>

                                                        <div class="col-md-12" style=" padding-bottom: 18px;">
                                                            <div class="row">


                                                          <div class="col-md-4">
                                                            <label for="">Región</label>
                                                            <select class="selectpicker form-control  form-control-sm" data-style="btn-light" id="region" name="CLIE_region">
                                                                <option value="{{$cliente->CLIE_region}}">{{$cliente->CLIE_region}}</option>
                                                              </select>
                                                            <div id="select3lista" style="display:none"></div>
                                                        </div>

                                                        </div></div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label" for="PROVE_telefono">Telefono: </label>
                                                              <input type="text" class="form-control form-control-sm" required placeholder="Telefono" name="CLIE_telefono" value="{{$cliente->CLIE_telefono}}"> </div>
                                                           </div>

                                                           <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label" for="PROVE_email" >Email: </label>
                                                              <input type="text" class="form-control form-control-sm" required  placeholder="Email" name="CLIE_email" value="{{$cliente->CLIE_email}}"> </div>
                                                           </div>

                                                           <div class="col-md-12" style="background:#f5f5f5">
                                                            <button type="submit" style="margin-left: 91%" class="btn btn-primary" style="background-color: #446e8c;">Guardar</button>
                                                          </div>

                                                </div>
                                                </div>
                                            </form>
                                                <div class="tab-pane " id="messages">
                                                    <div class="row">

                                                        <div class="col-sm-10">
                                                         </div>
                                                        <div class="col-sm-2">
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg"> <i class="mdi mdi-phone-plus" style="width:20px; height:20px;" ></i>  Contacto:</button>
                                                        </div>
                                                    </div> <br>
                                                    <div class="table-responsive">
                                                        <table class="table table-centered mb-0" id="btn-editable">
                                                            <thead style="background:  #f5f5f5">
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Cargo</th>
                                                                    <th>Nombre</th>
                                                                    <th>Numero</th>
                                                                    <th>Email</th>
                                                                    <th>Opciones</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>

                                                                    @foreach ($contacto as $contactos)
                                                                    <tr>
                                                                        <th>{{$loop->index+1}}</th>
                                                                        <th><input type="text" name="PROVECONT_descripcion[]" id="PROVECONT_descripcion"  class="form-control form-control-sm" style="margin-left: 2%;" value="{{$contactos->CLIECON_descripcion}}"></th>
                                                                        <th><input type="text" name="PROVECONT_nombre[]" id="PROVECONT_nombre"  class="form-control form-control-sm" value="{{$contactos->CLIECON_nombre}}"></th>

                                                                        <th><input type="number" name="PROVECONT_telefono[]" id="PROVECONT_telefono" class="form-control form-control-sm"  value="{{$contactos->CLIECON_telefono}}"></th>

                                                                       <th> <input type="email" name="PROVECONT_email[]"  id="PROVECONT_email" class="form-control form-control-sm"  value="{{$contactos->CLIECON_email}}"></th>
                                                                        <!--<input class="btn btn-primary bt_plus" id="100" type="button" value="+">-->
                                                                        <th><button type="button" class="btn btn-danger btn-xs waves-effect waves-light" ><i class="mdi mdi-trash-can-outline"></i></button></th>
                                                                    </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div> <!-- end .table-responsive-->
                                                    <div class="row" id="divmsg" style="display:none" class="alert alert-primary" role="alert "></div>



                                                        <!--  Modal content for the above example -->
                                                            <div class="modal fade bs-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title" id="myLargeModalLabel">Agregar contacto</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">

                                                                                <div class="col-sm-2"><label >Cargo: </label></div>
                                                                                <span class="col-sm-1"></span>
                                                                                <div class="col-sm-2"><label >Nombre: </label></div>
                                                                                <span class="col-sm-1"></span>
                                                                                <div class="col-sm-2"><label >Número: </label></div>
                                                                                <span class="col-sm-1"></span>
                                                                                <div class="col-sm-2"><label >Email: </label></div>
                                                                            </div>
                                                                            <div id="div_100" class="row" style="margin-bottom: 2%;">
                                                                                <input type="text" name="PROVECONT_descripcion" id="PROVECONT_descripcion"  class="form-control form-control-sm col-sm-2" style="margin-left: 2%;">
                                                                                    <span class="col-sm-1"></span>
                                                                                    <input type="text" name="PROVECONT_nombre" id="PROVECONT_nombre"  class="form-control form-control-sm col-sm-2" >
                                                                                    <span class="col-sm-1"></span>
                                                                                    <input type="number" name="PROVECONT_telefono" id="PROVECONT_telefono"  class="form-control form-control-sm col-sm-2" >
                                                                                    <span class="col-sm-1"></span>
                                                                                    <input type="email" name="PROVECONT_email"  id="PROVECONT_email" class=" form-control form-control-sm col-sm-2" style="margin-right: 2%;" >
                                                                                    <!--<input class="btn btn-primary bt_plus" id="100" type="button" value="+">-->
                                                                            <button class="btn btn-primary bt_plus" id="{{$cliente->CLIE_id}}" type="button"  style="padding: 4px 8px; background-color: #446e8c; border-Color:#04233a;"><i class="fe-phone-forwarded" style="width:20px; height:20px;" ></i></button>
                                                                                    <div class="error_form"></div>
                                                                            </div>
                                                                                    <button class="btn btn-primary bt_guarda" id="bt_guarda" type="button"  style="padding: 4px 8px; background-color: #446e8c; border-Color:#04233a;">Guardar</button>
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div><!-- /.modal -->









                                                </div> <br>
                                        </div>

                                        <!-- end card-box-->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- /.card-body -->
                          </div> <!-- /.card-body HEADER -->
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
    </div><!-- ==-->
        <!-- END wrapper -->
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <!-- Vendor js -->
        @include('layouts.scripts')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
            });
//////////////////////////////////////////
        //Llenar div de datos al inicio
        $(".bt_guarda").each(function (el){
            $(this).bind("click",saveContacto);
        });
//Llenar div de origen al inicio
            var origen=$('#PROVE_origen').val();
            $.ajax({
                url:"/proveedor/origen/"+origen,
                method:"GET",
                success:function(data){
                    $('#select2lista').html(data);
                    }
            });


//Llenar div de origem al cambiar
            $('#PROVE_origen').change(function(){
                var origen= $(this).val();
                $.ajax({
                    url:"/proveedor/origen/"+origen,
                    method:"GET",
                    success:function(data){
                        $('#select2lista').html(data);
                    }
                });
	        });
//Llenar div de pais al cambiar
        });

        function mostrarMensaje(mensaje){
            $('#divmsg').empty();
            $('#divmsg').append("<p>"+mensaje+"</p>");
            $('#divmsg').show(500);
            $('#divmsg').hide(5000);
        };
        function limpiarFormContacto(){
            $('#PROVECONT_descripcion').val('');
            $('#PROVECONT_nombre').val('');
            $('#PROVECONT_telefono').val('');
            $('#PROVECONT_email').val('');
        };

        // function saveContacto(){
        //     var cargo=$('#PROVECONT_descripcion').val();
        //     var nombre=$('#PROVECONT_nombre').val();
        //     var telefono=$('#PROVECONT_telefono').val();
        //     var email=$('#PROVECONT_email').val();

        //         $.ajax({
        //
        //             method:"POST",
        //             data:{
        //                 PROVECONT_descripcion:cargo,PROVECONT_nombre:nombre,PROVECONT_telefono:telefono,
        //                 PROVECONT_email:email
        //             },
        //         success:function(data){
        //             $('#modal').modal("hide");
        //             mostrarMensaje(data.mensaje);
        //             $('#ProveedorContactos').html(data);
        //             limpiarFormContacto();
        //         }
        // });




        // }
</script>
        </div>
    </body>
</html>
