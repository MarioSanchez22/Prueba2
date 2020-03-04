

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
                                <h4 class="page-title">REGISTRO DE PRODUCTOS</h4>
                            </div>
                        </div>
                    </div>

                    <div  class="row bounceInUp animated">
                        <div class="col-md-12">
                          <div class="card" style=" margin-bottom: 0px;   ">

                            <!-- /.card-header -->
                            <div class="card-body col-md-12" style="padding-left: 0px; padding-right: 0px;">
                                <div class="row" >
                                    <form action=" {{route('proveedorStore')}} " method="POST" enctype="multipart/form-data" class="col-md-12">
                                    {{ csrf_field()}}
                                        <div class="card-box " style=" padding-top: 0px; margin-bottom: 0px;padding-bottom: 5px;">
                                            <ul class="nav nav-tabs" style="background:#f5f5f5">
                                                <li class="nav-item">
                                                    <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                        <i class="mdi mdi-database-edit"></i> Datos de Producto
                                                    </a>
                                                </li>

                                            </ul>
                                            <div class="tab-content ">
                                                <div class="tab-pane show active " id="home">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                              <label class="control-label">Codigo: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-barcode"></i></span>
                                                                </div>
                                                              <input type="text" class="form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion"> </div>
                                                           </div></div>
                                                           <div class="col-md-4">
                                                            <label for="">Categoria</label>
                                                              <select class="selectpicker form-control  form-control-sm" data-style="btn-light" id="PROVE_origen" name="PROVE_origen">
                                                                <option value="">Laptop</option>
                                                              </select>
                                                          </div>
                                                          <div class="col-md-2" style="margin-left: 170px;">
                                                            <div class="form-group">
                                                              <label class="control-label">Estado: </label>

                                                              <input type="text" class="form-control form-control-sm border border-light"  disabled value="Activo">
                                                           </div></div>

                                                          <div class="col-md-5">
                                                            <div class="form-group">
                                                              <label class="control-label">Nombre: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class=" mdi mdi-border-color"></i></span>
                                                                </div>
                                                              <input type="text" class="form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion"> </div>
                                                           </div></div>
                                                           <div class="col-md-3">
                                                            <label for="">Marca</label>
                                                              <select class=" form-control  form-control-sm"  id="PROVE_origen" name="PROVE_origen">
                                                                <option value="">HP</option>
                                                                <option value="">Lenovo</option>
                                                              </select>
                                                          </div>
                                                          <div class="col-md-4">
                                                            <div class="form-group">
                                                              <label class="control-label">Modelo: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class=" mdi mdi-border-color"></i></span>
                                                                </div>
                                                              <input type="text" class="form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion"> </div>
                                                           </div></div>
                                                           <div class="col-md-4">
                                                            <div class="form-group">
                                                              <label class="control-label">Unidad predeterminada: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class=" mdi mdi-border-color"></i></span>
                                                                </div>
                                                                <select class="form-control  form-control-sm" data-style="btn-light" id="PROVE_origen" name="PROVE_origen">

                                                                    <option value="">Unidad</option>
                                                                    <option value="">Litros</option>
                                                                  </select> </div>
                                                           </div></div>
                                                           <div class="col-md-4">
                                                            <label for="">¿Utiliza numero de serie?</label><br>
                                                            <div style="margin-left: 23%; margin-top: 5%;">
                                                            <div class="radio radio-info form-check-inline">
                                                                <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked>
                                                                <label for="inlineRadio1"> No </label>
                                                            </div>
                                                            <div class="radio radio-info form-check-inline">
                                                                <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                                                <label for="inlineRadio2"> Si </label>
                                                            </div>
                                                           </div>
                                                          </div>
                                                          <div class="col-md-4">
                                                            <div class="form-group">
                                                              <label class="control-label">Origen: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class=" mdi mdi-border-color"></i></span>
                                                                </div>
                                                                <select class="form-control  form-control-sm" data-style="btn-light" id="PROVE_origen" name="PROVE_origen">
                                                                    <option value="">Nacional</option>
                                                                    <option value="">Importado</option>
                                                                  </select> </div>
                                                           </div></div>
                                                           <div class="col-md-6">
                                                            <h5>Existencia: </h5>
                                                           </div>
                                                           <div class="col-md-6">
                                                            <h5>Dias de garantia: </h5>
                                                           </div>
                                                           <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Minima: </label>
                                                                <div class="input-group">
                                                                  <div class="input-group-prepend ">
                                                                      <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class=" mdi mdi-server-minus"></i></span>
                                                                  </div>
                                                                <input type="text" class="form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion"> </div>
                                                             </div>
                                                           </div>
                                                           <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Maxima: </label>
                                                                <div class="input-group">
                                                                  <div class="input-group-prepend ">
                                                                      <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-server-plus"></i></span>
                                                                  </div>
                                                                <input type="text" class="form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion"> </div>
                                                             </div>
                                                           </div>
                                                           <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Al comprar: </label>
                                                                <div class="input-group">
                                                                  <div class="input-group-prepend ">
                                                                      <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-timetable"></i></span>
                                                                  </div>
                                                                <input type="text" class="form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion"> </div>
                                                             </div>
                                                           </div>
                                                           <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Al vender: </label>
                                                                <div class="input-group">
                                                                  <div class="input-group-prepend ">
                                                                      <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-timetable"></i></span>
                                                                  </div>
                                                                <input type="text" class="form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion"> </div>
                                                             </div>
                                                           </div>








                                                </div>
                                                </div>


                                                <br>
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
        $(document).ready(function() {
        //Llenar div de datos al inicio
        $(".bt_plus").each(function (el){
            $(this).bind("click",addField);
        });
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
        function addField(){
        // ID del elemento div quitandole la palabra "div_" de delante. Pasi asi poder aumentar el número.
        // Esta parte no es necesaria pero yo la utilizaba ya que cada campo de mi formulario tenia un autosuggest,
        // así que dejo como seria por si a alguien le hace falta.
        var clickID = parseInt($(this).parent('div').attr('id').replace('div_',''));
        // Genero el nuevo numero id
        var newID = (clickID+1);
        // Creo un clon del elemento div que contiene los campos de texto
        $newClone = $('#div_'+clickID).clone(true);
        //Le asigno el nuevo numero id
        $newClone.attr("id",'div_'+newID);
        //Asigno nuevo id al primer campo input dentro del div y le borro cualquier valor
        // que tenga asi no copia lo ultimo que hayas escrito.(igual que antes no es necesario tener un id)
        $newClone.children("input").eq(0).attr("id",'PROVECONT_descripcion'+newID).val('');
        //Borro el valor del segundo campo input(este caso es el campo de cantidad)
        $newClone.children("input").eq(1).attr("id",'PROVECONT_nombre'+newID).val('');
        $newClone.children("input").eq(2).attr("id",'PROVECONT_telefono'+newID).val('');
        $newClone.children("input").eq(3).attr("id",'PROVECONT_email'+newID).val('');
        //Asigno nuevo id al boton
        $newClone.children("button").attr("id",newID)
        //Inserto el div clonado y modificado despues del div original
        $newClone.insertAfter($('#div_'+clickID));
        //Cambio el signo "+" por el signo "-" y le quito el evento addfield
        //$("#"+clickID-1).remove();
        $("#"+clickID).css("backgroundColor","#c54040");
        $("#"+clickID).css("border-Color"," #4e0303");

        $("#"+clickID).html('<i class="fe-phone-off" style="width:20px; height:20px;"></i>').unbind("click",addField);
        //Ahora le asigno el evento delRow para que borre la fial en caso de hacer click
        $("#"+clickID).bind("click",delRow);
        }
        function delRow() {
        // Funcion que destruye el elemento actual una vez echo el click
        $(this).parent('div').remove();
        }
        function addFieldCu(){
        // ID del elemento div quitandole la palabra "div_" de delante. Pasi asi poder aumentar el número.
        // Esta parte no es necesaria pero yo la utilizaba ya que cada campo de mi formulario tenia un autosuggest,
        // así que dejo como seria por si a alguien le hace falta.
        var clickID = parseInt($(this).parent('div').attr('id').replace('div_',''));
        // Genero el nuevo numero id
        var newID = (clickID+1);
        // Creo un clon del elemento div que contiene los campos de texto
        $newClone = $('#div_'+clickID).clone(true);
        //Le asigno el nuevo numero id
        $newClone.attr("id",'div_'+newID);
        //Asigno nuevo id al primer campo input dentro del div y le borro cualquier valor
        // que tenga asi no copia lo ultimo que hayas escrito.(igual que antes no es necesario tener un id)
        $newClone.children("input").eq(0).attr("id",'PROVECU_beneficiario'+newID).val('');
        //Borro el valor del segundo campo input(este caso es el campo de cantidad)
        $newClone.children("input").eq(1).attr("id",'PROVECU_cuenta'+newID).val('');
        $newClone.children("input").eq(2).attr("id",'PROVECU_observacion'+newID).val('');

        //Asigno nuevo id al boton
        $newClone.children("button").attr("id",newID)
        //Inserto el div clonado y modificado despues del div original
        $newClone.insertAfter($('#div_'+clickID));
        //Cambio el signo "+" por el signo "-" y le quito el evento addfield
        //$("#"+clickID-1).remove();
        $("#"+clickID).css("backgroundColor","#c54040");
        $("#"+clickID).css("border-Color"," #4e0303");

        $("#"+clickID).html('<i class="fe-phone-off" style="width:20px; height:20px;"></i>').unbind("click",addField);
        //Ahora le asigno el evento delRow para que borre la fial en caso de hacer click
        $("#"+clickID).bind("click",delRow);
        }
        function delRowCu() {
        // Funcion que destruye el elemento actual una vez echo el click
        $(this).parent('div').remove();
        }

</script>



<script>
    $(document).ready(function(){


        $("#PROVE_ruc").keyup(function(){
	var numruc = $("#PROVE_ruc").val();
	if(numruc.length == 11){
	consultadatosSUNAT(numruc);

	}
 });


  function consultadatosSUNAT(PROVE_ruc){
    $('#cargarRuc').show();
    var ruc=$('#PROVE_ruc').val();

        $.ajax({

            method:'GET',
           url: "http://siempreaqui.com/json-sunat/consulta.php",
			data:'nruc='+ruc,

            success:function(data){
                $('#cargarRuc').hide();
                var dataObject = jQuery.parseJSON(data);

                         if (dataObject.success == true) {
						  $("#PROVE_razon_social").val(dataObject.result.RazonSocial);
                           $("#PROVE_razon_comercial").val(dataObject.result.NombreComercial);
                           $("#PROVE_direccion").val(dataObject.result.Direccion);
                           $("#PROVE_dni").val(ruc.substr(2,8));

                         // $("#rs_dni").val(dataObject.result.DNI); No devuelve DNI
                         }
            }
        });
    }
});
</script>
    </body>
</html>
