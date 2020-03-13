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
                $usu1=Auth::user();
                @endphp

                <strong style="font-size: 20px; color:#2e4965">@if ($usu1->EMPRESA_id==1)
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
                                <h4 class="page-title">REGISTRO DE CLIENTES</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 bounceInDown animated">

                    </div>
                    <div class="row">

                        <div class="col-md-12">
                          <div class="card bounceInDown animated" style=" margin-bottom: 0px;   ">

                            <!-- /.card-header -->
                            <div class="card-body col-md-12" style="padding-left: 0px; padding-right: 0px;">
                                <div class="row" >
                                    <form action=" {{route('clienteStore')}} " method="POST" enctype="multipart/form-data" class="col-md-12">
                                    {{ csrf_field()}}
                                    <div class="row" >
                                        <div class="col-md-6">
                                        <div class="form-inline" style="margin-left: 20px">
                                            <div class="form-group">
                                              <i class="mdi mdi-24px mdi-clipboard-account-outline"></i> <h5>Registrado por:</h5> &nbsp&nbsp
                                            <input type="text" id="USER_id" name="USER_id" value="{{$usu1->email}}"  style=" color:#2e4965" class="form-control form-control-sm" disabled>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-inline" style="margin-left: 20px">
                                            <div class="form-group">
                                              <i class="mdi mdi-24px mdi-clipboard-account-outline"></i> <h5>Vendedor:</h5> &nbsp&nbsp
                                              <select name="" id=""  class="form-control form-control-sm">
                                                  <option value="">Vendedor1</option>
                                                  <option value="">Vendedor2</option>
                                                  <option value="">Vendedor3</option>
                                                  <option value="">Vendedor4</option>

                                              </select>
                                             </div>
                                        </div>
                                        </div>
                                    </div>

                                    <br>
                                        <div class="card-box " style=" padding-top: 0px; margin-bottom: 0px;padding-bottom: 5px;">
                                            <ul class="nav nav-tabs" style="background:#f5f5f5">
                                                <li class="nav-item">
                                                    <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                       Datos de Cliente
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="#messages" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                        Contacto de Cliente
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content ">
                                                <div class="tab-pane show active " id="home">
                                                    <div class="row">


                                                        <div class=" col-md-6 ">

                                                          <label for="" >Tipo de cliente:</label>
                                                            <select class="selectpicker form-control  form-control-sm" data-style="btn-light" id="TIPPROVE_id" name="TIPPROVE_id"  style="background:#f5f5f5">
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
                                                              <input type="text" class="form-control form-control-sm"   placeholder="RUC de cliente" name="CLIE_ruc" id="CLIE_ruc">
                                                                <div  id="cargarRuc" style="display:none"> <button class="btn btn-info btn-sm" type="button"  >
                                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="sr-only"></span>
                                                            </button></div>
                                                            </div>
                                                            </div>
                                                           </div>
                                                        <div class=" row col-md-12" id="verD"  style=" padding: 0;  margin: 0;  ">
                                                        </div>
                                                        <div class="col-md-4" style=" padding-bottom: 18px;">
                                                            <div class="row">
                                                          <div class="col-md-12">
                                                            <label for="">Región</label>
                                                            <select class="form-control  form-control-sm" id="region" name="CLIE_region" >
                                                            <option value="0">[Seleccionar]</option>
                                                                @foreach ($region as $regiones)
                                                                    <option value="{{$regiones->id}}">{{$regiones->estadonombre}}</option>
                                                                    @endforeach
                                                        </select>
                                                        </div>
                                                        </div></div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                              <label class="control-label" for="CLIE_telefono">Telefono: </label>
                                                              <input type="text" class="form-control form-control-sm" required placeholder="Telefono" name="CLIE_telefono"> </div>
                                                           </div>
                                                           <div class="col-md-4">
                                                            <div class="form-group">
                                                              <label class="control-label" for="CLIE_email" >Email: </label>
                                                              <input type="text" class="form-control form-control-sm" required  placeholder="Email" name="CLIE_email"> </div>
                                                           </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label >Direccion Principal </label>
                                                                <div id="div_1000" class="row col-md-12" >
                                                                    <input type="text" name="CLIEDIRE_descripcion[]" id="CLIEDIRE_descripcion"  class="form-control form-control-sm " style="margin-left: 2%;">
                                                                    <!--<input class="btn btn-primary bt_plus" id="100" type="button" value="+">-->
                                                                    <button class="btn btn-primary bt_plus1 btn-sm" id="1000" type="button"  style=" background-color: #446e8c; border-Color:#04233a;margin-left: 101%;margin-top: -7%;"><i class="fe-plus fe-plus-sm" ></i>direccion</button><br>
                                                                    <div class="error_form"></div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                </div>
                                                </div>

                                                <div class="tab-pane " id="messages">
                                                        <div class="row">
                                                        <div class="col-sm-12">
                                                        <label for="" class="control-label">Contacto(s):</label>   </div>
                                                        </div>
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
                                                            <input type="text" name="CLIECON_descripcion[]" id="CLIECON_descripcion"  class="form-control form-control-sm col-sm-2" style="margin-left: 2%;">
                                                            <span class="col-sm-1"></span>
                                                            <input type="text" name="CLIECON_nombre[]" id="CLIECON_nombre"  class="form-control form-control-sm col-sm-2">
                                                            <span class="col-sm-1"></span>
                                                            <input type="number" name="CLIECON_telefono[]" id="CLIECON_telefono"  class="form-control form-control-sm col-sm-2">
                                                            <span class="col-sm-1"></span>
                                                            <input type="email" name="CLIECON_email[]"  id="CLIECON_email" class=" form-control form-control-sm col-sm-2" style="margin-right: 2%;">

                                                            <!--<input class="btn btn-primary bt_plus" id="100" type="button" value="+">-->
                                                            <button class="btn btn-primary bt_plus" id="100" type="button"  style="padding: 4px 8px; background-color: #446e8c; border-Color:#04233a;"><i class="fe-phone-forwarded" style="width:20px; height:20px;" ></i></button>
                                                            <div class="error_form"></div>
                                                        </div>
                                                </div> <br>
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
        $(".bt_plus1").each(function (el){
            $(this).bind("click",addField1);
        });
            $.ajax({
                url:"/cliente/datosCliente/1",
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
            $('#TIPPROVE_id').change(function(){
                var tipoPr= $(this).val();
                $.ajax({
                    url:"/cliente/datosCliente/"+tipoPr,
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
        $newClone.children("input").eq(0).attr("id",'CLIECON_descripcion'+newID).val('');
        //Borro el valor del segundo campo input(este caso es el campo de cantidad)
        $newClone.children("input").eq(1).attr("id",'CLIECON_nombre'+newID).val('');
        $newClone.children("input").eq(2).attr("id",'CLIECON_telefono'+newID).val('');
        $newClone.children("input").eq(3).attr("id",'CLIECON_email'+newID).val('');
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
        function addField1(){
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
        $newClone.children("input").eq(0).attr("id",'CLIECON_descripcion'+newID).val('');
        //Borro el valor del segundo campo input(este caso es el campo de cantidad)
        $newClone.children("input").eq(1).attr("id",'CLIECON_nombre'+newID).val('');
        $newClone.children("input").eq(2).attr("id",'CLIECON_telefono'+newID).val('');
        $newClone.children("input").eq(3).attr("id",'CLIECON_email'+newID).val('');
        //Asigno nuevo id al boton
        $newClone.children("button").attr("id",newID)
        //Inserto el div clonado y modificado despues del div original
        $newClone.insertAfter($('#div_'+clickID));
        //Cambio el signo "+" por el signo "-" y le quito el evento addfield
        //$("#"+clickID-1).remove();
        $("#"+clickID).css("backgroundColor","#c54040");
        $("#"+clickID).css("border-Color"," #4e0303");

        $("#"+clickID).html('<i class="fe-minus" style="width:20px; height:20px;"></i>').unbind("click",addField1);
        //Ahora le asigno el evento delRow para que borre la fial en caso de hacer click
        $("#"+clickID).bind("click",delRow1);
        }
        function delRow() {
        // Funcion que destruye el elemento actual una vez echo el click
        $(this).parent('div').remove();
        }
        function delRow1() {
        // Funcion que destruye el elemento actual una vez echo el click
        $(this).parent('div').remove();
        }

</script>



<script>
    $(document).ready(function(){


        $("#CLIE_ruc").keyup(function(){
	var numruc = $("#CLIE_ruc").val();
	if(numruc.length == 11){
	consultadatosSUNAT(numruc);

	}
 });


  function consultadatosSUNAT(CLIE_ruc){
    $('#cargarRuc').show();
    var ruc=$('#CLIE_ruc').val();

        $.ajax({

            method:'GET',
           url: "http://siempreaqui.com/json-sunat/consulta.php",
			data:'nruc='+ruc,

            success:function(data){
                $('#cargarRuc').hide();
                var dataObject = jQuery.parseJSON(data);

                         if (dataObject.success == true) {
						  $("#CLIE_razon_social").val(dataObject.result.RazonSocial);
                           $("#CLIE_razon_comercial").val(dataObject.result.NombreComercial);
                           $("#CLIEDIRE_descripcion").val(dataObject.result.Direccion);

                           $("#CLIE_dni").val(ruc.substr(2,8));

                         // $("#rs_dni").val(dataObject.result.DNI); No devuelve DNI
                         }
            }
        });
    }
});
</script>
    </body>
</html>
