@php
  use App\proveedor_contacto;
  use App\proveedor_cuenta;
@endphp

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
                                <h4 class="page-title">REGISTRO DE PROVEEDORES</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                          <div class="card" style=" margin-bottom: 0px;   ">

                            <!-- /.card-header -->
                            <div class="card-body col-md-12" style="padding-left: 0px; padding-right: 0px;">
                                <div class="row" >
                                    <form action=" {{route('proveedorStore')}} " method="POST" enctype="multipart/form-data" class="col-md-12">
                                        <div class="card-box " style=" padding-top: 0px; margin-bottom: 0px;padding-bottom: 5px;">


                                            <ul class="nav nav-tabs" style="background:#f5f5f5">
                                                <li class="nav-item">
                                                    <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                       Datos de Proveedor
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#profile" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                                        Expediente de Proveedor
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
                                                    <div class="row">


                                                        <div class=" col-md-6 ">

                                                          <label for="" >Tipo de proveedor:</label>
                                                            <select class="selectpicker form-control  form-control-sm" data-style="btn-light" id="TipoP" name="TipoP"  style="background:#f5f5f5">
                                                                @foreach ($tipo as $tipos)
                                                              <option value="{{$tipos->TIPPROVE_id}}">{{$tipos->TIPPROVE_descripcion}}</option>
                                                                @endforeach
                                                                <!--<option selected type="" value="" disabled selected >[Seleccionar modo de pago]</option>-->
                                                              </select>

                                                          </div>
                                                          <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label">RUC: </label>
                                                              <div class="input-group">
                                                              <input type="text" class="form-control form-control-sm" required  placeholder="RUC de empresa" name="PROVE_ruc" id="PROVE_ruc">

                                                                <img src="{{asset('ajax.gif')}}" class="ajaxgif hide">

                                                            </div>
                                                            </div>
                                                           </div>

                                                        <div class=" row col-md-12" id="verD"  style=" padding: 0;  margin: 0;  ">

                                                        </div>

                                                        <div class="col-md-12" style=" padding-bottom: 18px;">
                                                            <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="">Origen de proveedor</label>
                                                              <select class="selectpicker form-control  form-control-sm" data-style="btn-light" id="PROVE_origen" name="PROVE_origen">
                                                                @foreach ($origen as $origenes)
                                                              <option value="{{$origenes->ORIPROVE_id}}">{{$origenes->ORIPROVE_descripcion}}</option>
                                                                @endforeach
                                                              </select>
                                                          </div>
                                                          <div class="col-md-4">
                                                            <label for="">País</label>
                                                            <div id="select2lista"></div>
                                                          </div>
                                                          <div class="col-md-4">
                                                            <label for="">Región</label>
                                                            <div id="select3lista"></div>
                                                        </div>

                                                        </div></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label">Direccion: </label>
                                                              <input type="text" class="form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion"> </div>
                                                           </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label">Telefono: </label>
                                                              <input type="text" class="form-control form-control-sm" required placeholder="Telefono" name="PROVE_telefono"> </div>
                                                           </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label">Web: </label>
                                                              <input type="text" class="form-control form-control-sm"  placeholder="direccion web" name="PROVE_email"> </div>
                                                           </div>
                                                           <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label">Email: </label>
                                                              <input type="text" class="form-control form-control-sm" required  placeholder="Email" name="Email"> </div>
                                                           </div>
                                                           <div class="col-md-12">
                                                            <div class="form-group">
                                                              <label class="control-label">Etiquetas: </label>
                                                              <textarea class="form-control" id="example-textarea" rows="3"></textarea></div>
                                                           </div>







                                                </div>
                                                </div>
                                                <div class="tab-pane " id="profile">
                                                <div class="row">
                                                    <div class=" col-md-12 form-inline ">
                                                        <div class=" form-group ">
                                                           <div class="col-md-6"  style="padding-left: 5px;"><label for="" style=" ">Descripcion:</label></div>


                                                           <div class="col-md-6">
                                                            <input type="text" class="form-control form-control-sm"   placeholder="RUC de empresa" name="PROVE_rr">
                                                            </div>
                                                            </div>
                                                        </div>
                                                     <br>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <label class="control-label">Subir archivo: </label>
                                                            <div class="input-group">
                                                              <div class="custom-file">
                                                                <input type="file" class="custom-file-input form-control-sm" id="exampleInputFile">
                                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                              </div>

                                                            </div>
                                                    </div>   </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                          <label class="control-label">Observacion: </label>
                                                          <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea> </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="tab-pane " id="messages">

                                                </div>
                                            </div> <br><br>
                                        <div class="modal-footer d-flex" style="background:#f5f5f5">

                                        <button type="submit" class="btn btn-primary" style="align:">Save changes</button>
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
        $(document).ready(function() {
//Llenar div de datos al inicio
            $.ajax({
                url:"/proveedor/datos/1",
                method:"GET",
                success:function(data){
                    $('#verD').html(data);
                    }
            });
//Llenar div de origen al inicio
            $.ajax({
                url:"/proveedor/origen/"+0,
                method:"GET",
                success:function(data){
                    $('#select2lista').html(data);
                    }
            });

//Llenar div de datos al cambiar
            $('#TipoP').change(function(){
                var tipoPr= $(this).val();
                $.ajax({
                    url:"/proveedor/datos/"+tipoPr,
                    method:"GET",
                    success:function(data){
                        $('#verD').html(data);
                        }
                    });
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

</script>

<script type="text/javascript">
 function recargarLista(){
		$.ajax({
            url:"/proveedor/origen"
             method:"POST",
			data:"origen=" + $('#PROVE_origen').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script>

<script>
    $(document).ready(function(){
        $('.ajaxgif').hide();

        $("#PROVE_ruc").keyup(function(){
	var numruc = $("#PROVE_ruc").val();
	if(numruc.length == 11){
	consultadatosSUNAT(numruc);

	}
 });


  function consultadatosSUNAT(PROVE_ruc){
    $('.ajaxgif').show();
    var ruc=$('#PROVE_ruc').val();

        $.ajax({

            method:'GET',
           url: "http://siempreaqui.com/json-sunat/consulta.php",
			data:'nruc='+ruc,

            success:function(data){
                $('.ajaxgif').hide();
                var dataObject = jQuery.parseJSON(data);

                         if (dataObject.success == true) {
						  $("#PROVE_razon_social").val(dataObject.result.RazonSocial);
                           $("#PROVE_razon_comercial").val(dataObject.result.RazonComercial);
                           $("#PROVE_direccion").val(dataObject.result.Direccion);


                         // $("#rs_dni").val(dataObject.result.DNI); No devuelve DNI
                         }



            }
        });


    }
});
</script>
    </body>
</html>
