

@php
@endphp

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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
       @include('layouts.estilos')
        <link href="assets/libs/custombox/custombox.min.css" rel="stylesheet">

    </head>

    <body>
        <div id="preloader">
            <div id="status">
                <div class="spinner">Loading...</div>
            </div>
        </div>
 <style>
 .custom-modal-title {
    background-color:#dbdfe2d1;
    color:#6c757d;
 }</style>
 <style>
     .select2-container {
         width: 81%!important;
     }
 </style>
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
                            <div class="row icons-list-demo" style="color:#373f5f">
                                <div class="col-sm-7 col-md-7 col-lg-4" style="font-size: 19px;font-weight: bold;padding-top: 5px; padding-left: 0px">
                                    <i class="mdi mdi-24px mdi mdi-cart-minus" style=" margin-right: -6px;color:#373f5f"></i>REGISTRO DE COMPRAS
                                </div>

                        </div>
                        </div>
                    </div>
                          <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body"  >
                                <div class="card ">
                                    <div class="card-header" style="padding: 5px">
                                        <div class="row">
                                     <div class=" form-inline col-md-9" style="padding-left: 3%">
                                       <label for="">INGRESO DE COMPRAS</label>
                                     </div>
                                     <div class="col-md-3" style="padding-left: 5%">
                                      <div class="form-inline">
                                        <div class="form-group">
                                      <label for="">Dias de credito:</label> &nbsp;

                                        <input  class=" col-md-3 form-control form-control-sm" type="number"  id="PROVE_dias" name="PROVE_dias" min="1" name="" >
                                     </div>
                                    </div>
                                       </div>
                                    </div>
                                    </div>
                                     <!-- Modal -->
                                  <div id="modal-prov" class="modal-demo"  role="dialog" style="width: 900px!important;bottom: 40px;">
                                    <button type="button" class="close" onclick="Custombox.modal.close();" style="top:10px">
                                        <span style="color:#6c757d">&times;</span><span class="sr-only" style="color:#6c757d" >Close</span>
                                    </button>
                                    <h5 class="custom-modal-title" style="padding: 10px; font-size: 15px">Registro rapido de proveedor</h5>
                                    <div class="custom-modal-text text-left" style="background: ##526f8c; padding-bottom: 0px; zoom:95%;   padding-top: 10px;">
                                    <div class="row">


                                    <div class="card-box col-md-12" style="background: #fff; padding-top: 10px;
                                    margin-bottom: 10px; border: 2px solid #e8e8e8; ">
                                    <div class="row">
                                        <div class=" col-md-4 ">

                                            <label for="" >Tipo de proveedor:</label>
                                              <select class="selectpicker form-control  form-control-sm" data-style="btn-light" id="TipoP" name="TIPPROVE_id"  style="background:#f5f5f5">
                                                  @foreach ($tipo as $tipos)
                                                <option value="{{$tipos->TIPPROVE_id}}">{{$tipos->TIPPROVE_descripcion}}</option>
                                                  @endforeach
                                                  <!--<option selected type="" value="" disabled selected >[Seleccionar modo de pago]</option>-->
                                                </select>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                  <label class="control-label">Dias de crédito: </label>
                                                  <div class="input-group">

                                                  <input type="number" class="form-control form-control-sm" required min="1" placeholder="Dias " name="PROVE_dias_credito"> </div>
                                               </div></div>
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label class="control-label">RUC: </label>
                                                <div class="input-group">

                                                <input type="text" class="form-control form-control-sm"   placeholder="RUC de empresa" name="PROVE_ruc" id="PROVE_ruc">
                                                  <div  id="cargarRuc" style="display:none"> <button class="btn btn-info btn-sm" type="button"  >
                                                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="sr-only"></span>
                                              </button></div>


                                              </div>
                                              </div>
                                             </div>

                                          <div class=" row col-md-12" id="verD"  style=" padding: 0;  margin: 0;  ">

                                          </div>

                                          <div class="col-md-6">
                                            <label for="">Región</label>

                                            <select class="form-control  form-control-sm" id="region" name="CLIE_region" >
                                            <option value="0">[Seleccionar]</option>
                                                @foreach ($region as $regiones)
                                                    <option value="{{$regiones->id}}">{{$regiones->estadonombre}}</option>
                                                    @endforeach
                                        </select>


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
                                              <label class="control-label" for="PROVE_telefono">Telefono: </label>
                                              <div class="input-group">
                                                <div class="input-group-prepend ">
                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-phone mr-1"></i></span>
                                                </div> <input type="text" class="form-control form-control-sm" required placeholder="Telefono" name="PROVE_telefono"> </div>
                                           </div></div>

                                           <div class="col-md-6">
                                            <div class="form-group">
                                              <label class="control-label" for="PROVE_email" >Email: </label>
                                              <div class="input-group">
                                                <div class="input-group-prepend ">
                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-email mr-1"></i></span>
                                                </div>  <input type="text" class="form-control form-control-sm" required  placeholder="Email" name="PROVE_email"> </div>
                                           </div></div>






                                        </div>
                                    </div>

                                    </div>
                                    </div>
                                    <div class="modal-footer" style="padding: 6px">
                                    <div class="text-right">
                                        <button type="button" class="btn btn-light waves-effect waves-light btn-sm" onclick="Custombox.close();">Cancel</button>
                                      <button type="submit" class="btn btn-blue waves-effect waves-light btn-sm">Guardar</button>

                                  </div></div>
                                </div>
                                <div id="agregarArti" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-full" style="width: 78%">
                                        <div class="modal-content">
                                            <div class="modal-header" style="padding: 9px; background-color:#dbdfe2d1;">
                                                <h5 class="modal-title" id="full-width-modalLabel" style="color:#6c757d">Agregar producto a la compra</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body" style=" padding-bottom: 0px;   zoom: 95%; padding-top: 10px; margin-bottom: -50px">

                                                <div class="wrapper">
                                                <div class="container-fluid">






                                                    <div class="row">
                                                        <div class="col-md-8" >
                                                          <div class="card-box" style="border: 2px solid #e8e8e8;">
                                                            <h4 class="header-title mb-2">Datos de articulo</h4>

                                                            <div class="row">
                                                              <div class="col-md-9 mb-2">
                                                                  <div class="input-group ">
                                                                     <select id="bprodu" name="bprodu" class="form-control" data-toggle="select2">
                                                                         <option value="0" >         [Busque articulo ]        </option>
                                                                         @foreach ($producto as $productos)
                                                                 <option  value="{{$productos->PRO_id}}">{{$productos->PRO_id}} - {{$productos->PRO_nombre}}</option>
                                                                   @endforeach
                                                                       </select>
                                                                     <span class="input-group-append">
                                                                         <span class="input-group-text " id="basic-addon1" style="color:#a9a9a9"><i class="fe-search"></i></span>
                                                                     </span>
                                                                   </div>
                                                                 </div>
                                                            <div class="col-md-3 mb-2" style="right:40px">
                                                                <button type="button" class="btn  btn-light " data-toggle="modal"      data-target="#agregarArticulo"><span class=" fa fa-plus-square"> </span> Nuevo</button></div>

                                                                <div class="col-md-12 mb-2">
                                                                    <div class="form-inline">
                                                                        <label class="" >Nombre:</label>&nbsp;&nbsp;&nbsp;
                                                                            <input type="text" style="background: #f2f3f5;" id="PRO_nombre" class="col-md-9 form-control form-control-sm" disabled>
                                                                     </div>
                                                                    </div>
                                                                    <div class="col-md-5 mb-2">
                                                                      <div class="form-inline">
                                                                          <label for="">Garantia: </label>&nbsp;&nbsp;
                                                                          <input type="text" id="garantia" class="col-md-4 form-control form-control-sm">&nbsp;&nbsp;&nbsp;&nbsp;
                                                                          <label for="">días</label>
                                                                      </div>
                                                                  </div>
                                                                    <div class="col-md-7 mb-2">
                                                                      <div class="form-inline">
                                                                          <label for="">Descuento: </label>&nbsp;&nbsp;
                                                                          <div class="input-group">

                                                                            <input type="number" class="col-md-8 form-control form-control-sm" id="CATPRO_precio1"  name="CATPRO_precio1" min="0" max="99">
                                                                            <div class="input-group-prepend ">
                                                                              <span class="col-md-9 input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9; padding-left: 4px">%</span>
                                                                          </div> </div> &nbsp;
                                                                          <input type="number" class="col-md-3 form-control form-control-sm" id="CATPRO_precio1"  name="CATPRO_precio1" min="0" >

                                                                          <select class="form-control form-control-sm" name="" id="">&nbsp;

                                                                              <option value="">S/</option>
                                                                              <option value="">$</option>
                                                                          </select>
                                                                      </div>
                                                                  </div>

                                                                    <div class="col-md-4 mb-2">
                                                                      <div class="form-inline">
                                                                          <label class="" >medida:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                              <input type="text" style="background: #f2f3f5;" id="UME_id" class="col-md-6 form-control form-control-sm" disabled>
                                                                       </div>
                                                                      </div>
                                                                    <div class="col-md-4 mb-2">
                                                                      <div class="form-inline">
                                                                          <label for="">Costo: </label>&nbsp;&nbsp;
                                                                          <input type="text" id="cantidad" class="col-md-7 form-control form-control-sm">
                                                                      </div>
                                                                  </div>
                                                                    <div class="col-md-4 mb-2">
                                                                        <div class="form-inline">
                                                                            <label for="">Cantidad: </label>&nbsp;&nbsp;
                                                                            <input type="text" id="costo" class="col-md-7 form-control form-control-sm">
                                                                        </div>
                                                                    </div>


                                                                    <br>


                                                            </div>


                                                          </div> <!-- end card-box-->

                                                        </div> <!-- end col -->

                                                        <div class="col-md-4">
                                                            <div class="card-box" style="border: 2px solid #e8e8e8;">
                                                              <h4 class="header-title mb-2 text-center">Informacion de articulo</h4>
                                                              <div class="col-md-12 mb-2 text-center">
                                                                <div class="form-inline text-center">

                                                                    <label for="">Categoria: </label>&nbsp;
                                                                    <input type="text" style="background: #f2f3f5;" id="CATPRO_id" disabled class="col-md-8 form-control form-control-sm text-center">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mb-2 text-center">
                                                                <div class="form-inline text-center">
                                                                    <label class="text-center" for="">Marca: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <input type="text" style="background: #f2f3f5;" id="MARCA_id" disabled class="col-md-8 form-control form-control-sm text-center">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mb-2 text-center">
                                                                <div class="form-inline text-center">
                                                                    <label class="text-center" for="">Modelo: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <input type="text" style="background: #f2f3f5;" id="PRO_modelo" disabled class="col-md-8 form-control form-control-sm text-center">
                                                                </div>
                                                            </div>
                                                            <input type="hidden" id="PRO_codigo">
                                                            <br><br>
                                                            <div class="row">
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                      <label for="">Existencia</label>
                                                                      <input type="text" class="form-control form-control-sm">
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Disponible</label>
                                                                    <input type="text" class="form-control form-control-sm">
                                                                </div>
                                                            </div>
                                                            </div>
                                                            </div> <!-- end card-box-->
                                                        </div> <!-- end col -->
                                                        <div class="col-md-8" style="top: -80px; bottom: 20px">
                                                            <div class="card-box" style="border: 2px solid #e8e8e8; margin-bottom: 0px">
                                                              <div class="col-md-12"><h4 class="header-title mb-2">Ubicacion de existencias</h4></div>
                                                              <div class="row">
                                                              <div class="col-md-4 mb-2" >
                                                                <div class="form-group">
                                                                    <label for="">Almacen: </label>
                                                                    <select class="form-control form-control-sm" name="" id="">
                                                                        <option value="">Principal1</option>
                                                                      </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 mb-2" >
                                                                <div class="form-group">
                                                                    <label class="control-label">Ubicacion: </label>
                                                                    <div class="form-inline">
                                                                    <input type="text" class="col-md-8 form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion"> &nbsp;&nbsp;
                                                                    <button type="button" class="btn  btn-light btn-sm" ><span class=" fa fa-plus-square"> </span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Cantidad: </label>
                                                                        <input type="text" class="form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion">
                                                                        </div>
                                                                    </div>
                                                              </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end row -->

                                                </div> <!-- end container -->
                                            </div>


                                             </div>
                                            <div class="modal-footer" style="padding: 6px">
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button"id="guardarAr"  class="btn btn-primary waves-effect waves-light">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <div id="agregarArticulo" class="modal fade">
                                    <div class="modal-dialog modal-full modal-dialog-centered" style="width: 70%">
                                        <div class="modal-content">
                                            <div class="modal-header" style="padding: 9px; background-color:#dbdfe2d1;">
                                                <h5 class="modal-title" id="full-width-modalLabel" style="color:#6c757d">Registrar nuevo producto </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">


                                                            <div class="card" style=" margin-bottom: 0px;   ">

                                                              <!-- /.card-header -->

                                                                          <div class="card-box " style=" padding-top: 0px; margin-bottom: 0px;padding-bottom: 5px; zoom:90%;border: 2px solid #e8e8e8;" >


                                                                          <label for="" class="header-title mb-2">  <i class="mdi mdi-database-edit"></i> Datos de Producto</label>



                                                                                        <br>
                                                                                      <div class="row">
                                                                                          <div class="col-md-3">
                                                                                              <div class="form-group">
                                                                                                <label class="control-label">Codigo: </label>
                                                                                                <div class="input-group">
                                                                                                  <div class="input-group-prepend ">
                                                                                                      <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-barcode"></i></span>
                                                                                                  </div>
                                                                                                <input type="text" class="form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion"> </div>
                                                                                             </div></div>
                                                                                             <div class="col-md-3">
                                                                                              <label for="">Categoria</label>
                                                                                                <select class="selectpicker form-control  form-control-sm" data-style="btn-light" id="PROVE_origen" name="PROVE_origen">
                                                                                                  <option value="">Laptop</option>
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="col-md-2" >
                                                                                              <div class="form-group">
                                                                                                <label class="control-label">Estado: </label>

                                                                                                <input type="text" class="form-control form-control-sm border border-light"  disabled value="Activo">
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
                                                                                                <label class="control-label">Nombre: </label>
                                                                                                <div class="input-group">
                                                                                                  <div class="input-group-prepend ">
                                                                                                      <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class=" mdi mdi-border-color"></i></span>
                                                                                                  </div>
                                                                                                <input type="text" class="form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion"> </div>
                                                                                             </div></div>
                                                                                             <div class="col-md-2">
                                                                                              <label for="">Marca</label>
                                                                                                <select class=" form-control  form-control-sm"  id="PROVE_origen" name="PROVE_origen">
                                                                                                  <option value="">HP</option>
                                                                                                  <option value="">Lenovo</option>
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="col-md-3">
                                                                                              <div class="form-group">
                                                                                                <label class="control-label">Modelo: </label>
                                                                                                <div class="input-group">
                                                                                                  <div class="input-group-prepend ">
                                                                                                      <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class=" mdi mdi-border-color"></i></span>
                                                                                                  </div>
                                                                                                <input type="text" class="form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion"> </div>
                                                                                             </div></div>
                                                                                             <div class="col-md-3">
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

                                                                                  <br>

                                                                          </div> <!-- end card-box-->

                                                              <!-- /.card-body -->
                                                            </div>


                                                          <!-- /.col -->


                                            </div>
                                            <div class="modal-footer" style="padding: 6px">
                                                <button type="button" class="btn btn-light waves-effect btn-sm" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                   <!-- Modal -->
                                  <div id="custom-modal1" class="modal-demo kk"  role="dialog" style="width: 1000px!important; " >
                                    <button type="button" class="close" onclick="Custombox.modal.close();" style="top:10px">
                                        <span style="color:#6c757d">&times;</span><span class="sr-only" style="color:#6c757d" >Close</span>
                                    </button>
                                    <h5 class="custom-modal-title" style="padding: 10px; font-size: 15px">Agregar producto a la compra</h5>
                                    <div class="custom-modal-text text-left" style=" padding-bottom: 0px;   zoom: 95%; padding-top: 10px; margin-bottom: -50px">





                                              <div class="wrapper">
                                                  <div class="container-fluid">






                                                      <div class="row">
                                                          <div class="col-md-8" >
                                                            <div class="card-box" style="border: 2px solid #e8e8e8;">
                                                              <h4 class="header-title mb-2">Datos de articulo</h4>

                                                              <div class="row">
                                                                <div class="col-md-9 mb-2">
                                                                    <div class="input-group ">
                                                                       <select id="bprodu" name="bprodu" class="form-control" data-toggle="select2">
                                                                           <option value="0" >         [Busque articulo ]        </option>
                                                                           @foreach ($producto as $productos)
                                                                   <option  value="{{$productos->PRO_id}}">{{$productos->PRO_id}} - {{$productos->PRO_nombre}}</option>
                                                                     @endforeach
                                                                         </select>
                                                                       <span class="input-group-append">
                                                                           <span class="input-group-text " id="basic-addon1" style="color:#a9a9a9"><i class="fe-search"></i></span>
                                                                       </span>
                                                                     </div>
                                                                   </div>
                                                              <div class="col-md-3 mb-2" style="right:40px">
                                                                  <button type="button" class="btn  btn-light " data-toggle="modal"      data-target="#agregarArticulo"><span class=" fa fa-plus-square"> </span> Nuevo</button></div>

                                                                  <div class="col-md-12 mb-2">
                                                                      <div class="form-inline">
                                                                          <label class="" >Nombre:</label>&nbsp;&nbsp;&nbsp;
                                                                              <input type="text" style="background: #f2f3f5;" id="PRO_nombre" class="col-md-9 form-control form-control-sm" disabled>
                                                                       </div>
                                                                      </div>
                                                                      <div class="col-md-5 mb-2">
                                                                        <div class="form-inline">
                                                                            <label for="">Garantia: </label>&nbsp;&nbsp;
                                                                            <input type="text" id="garantia" class="col-md-4 form-control form-control-sm">&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            <label for="">mes(es)</label>
                                                                        </div>
                                                                    </div>
                                                                      <div class="col-md-7 mb-2">
                                                                        <div class="form-inline">
                                                                            <label for="">Descuento: </label>&nbsp;&nbsp;
                                                                            <div class="input-group">

                                                                              <input type="number" class="col-md-8 form-control form-control-sm" id="CATPRO_precio1"  name="CATPRO_precio1" min="0" max="99">
                                                                              <div class="input-group-prepend ">
                                                                                <span class="col-md-9 input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9; padding-left: 4px">%</span>
                                                                            </div> </div> &nbsp;
                                                                            <input type="number" class="col-md-3 form-control form-control-sm" id="CATPRO_precio1"  name="CATPRO_precio1" min="0" >

                                                                            <select class="form-control form-control-sm" name="" id="">&nbsp;

                                                                                <option value="">S/</option>
                                                                                <option value="">$</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                      <div class="col-md-4 mb-2">
                                                                        <div class="form-inline">
                                                                            <label class="" >medida:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <input type="text" style="background: #f2f3f5;" id="UME_id" class="col-md-6 form-control form-control-sm" disabled>
                                                                         </div>
                                                                        </div>
                                                                      <div class="col-md-4 mb-2">
                                                                        <div class="form-inline">
                                                                            <label for="">Costo: </label>&nbsp;&nbsp;
                                                                            <input type="text" id="cantidad" class="col-md-7 form-control form-control-sm">
                                                                        </div>
                                                                    </div>
                                                                      <div class="col-md-4 mb-2">
                                                                          <div class="form-inline">
                                                                              <label for="">Cantidad: </label>&nbsp;&nbsp;
                                                                              <input type="text" id="costo" class="col-md-7 form-control form-control-sm">
                                                                          </div>
                                                                      </div>


                                                                      <br>


                                                              </div>


                                                            </div> <!-- end card-box-->

                                                          </div> <!-- end col -->

                                                          <div class="col-md-4">
                                                              <div class="card-box" style="border: 2px solid #e8e8e8;">
                                                                <h4 class="header-title mb-2 text-center">Informacion de articulo</h4>
                                                                <div class="col-md-12 mb-2 text-center">
                                                                  <div class="form-inline text-center">

                                                                      <label for="">Categoria: </label>&nbsp;
                                                                      <input type="text" style="background: #f2f3f5;" id="CATPRO_id" disabled class="col-md-8 form-control form-control-sm text-center">
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-12 mb-2 text-center">
                                                                  <div class="form-inline text-center">
                                                                      <label class="text-center" for="">Marca: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                      <input type="text" style="background: #f2f3f5;" id="MARCA_id" disabled class="col-md-8 form-control form-control-sm text-center">
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-12 mb-2 text-center">
                                                                  <div class="form-inline text-center">
                                                                      <label class="text-center" for="">Modelo: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                      <input type="text" style="background: #f2f3f5;" id="PRO_modelo" disabled class="col-md-8 form-control form-control-sm text-center">
                                                                  </div>
                                                              </div>
                                                              <input type="hidden" id="PRO_codigo">
                                                              <br><br>
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="">Existencia</label>
                                                                        <input type="text" class="form-control form-control-sm">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="form-group">
                                                                      <label for="">Disponible</label>
                                                                      <input type="text" class="form-control form-control-sm">
                                                                  </div>
                                                              </div>
                                                              </div>
                                                              </div> <!-- end card-box-->
                                                          </div> <!-- end col -->
                                                          <div class="col-md-8" style="top: -80px; bottom: 20px">
                                                              <div class="card-box" style="border: 2px solid #e8e8e8; margin-bottom: 0px">
                                                                <div class="col-md-12"><h4 class="header-title mb-2">Ubicacion de existencias</h4></div>
                                                                <div class="row">
                                                                <div class="col-md-4 mb-2" >
                                                                  <div class="form-group">
                                                                      <label for="">Almacen: </label>
                                                                      <select class="form-control form-control-sm" name="" id="">
                                                                          <option value="">Principal1</option>
                                                                        </select>
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-5 mb-2" >
                                                                  <div class="form-group">
                                                                      <label class="control-label">Ubicacion: </label>
                                                                      <div class="form-inline">
                                                                      <input type="text" class="col-md-8 form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion"> &nbsp;&nbsp;
                                                                      <button type="button" class="btn  btn-light btn-sm" ><span class=" fa fa-plus-square"> </span></button></div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-3 mb-2">
                                                                      <div class="form-group">
                                                                          <label class="control-label">Cantidad: </label>
                                                                          <input type="text" class="form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion">
                                                                          </div>
                                                                      </div>
                                                                </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <!-- end row -->

                                                  </div> <!-- end container -->
                                              </div>


                                    </div>
                                    <div class="modal-footer" style="padding: 6px">
                                    <div class="text-right">
                                        <button type="button" class="btn btn-light waves-effect waves-light btn-sm" onclick="Custombox.close();">Cancel</button>
                                      <button type="submit" id="guardarAr1"  class="btn btn-blue waves-effect waves-light btn-sm">Guardar</button>

                                  </div></div>
                                </div>
                                <div class="card-body" style="font-size: 12.8px;padding-bottom: 10px;padding-top: 12px;border-right: solid 1px #dee2e6;border-left: solid 1px #dee2e6;border-bottom: solid 1px #dee2e6;  ">
                                        <div class="row">

                                             <div class="col-md-10 mb-2">
                                            <div class="form-inline">


                                                <label class="not-bold">Proveedor:</label> &nbsp;


                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                       <select name="bpro" id="bpro" style="width: 200px!important" class=" col-md-12 form-control" data-toggle="select2">
                                                           <option value="0" >[Busque proveedor]</option>
                                                           @foreach ($proveedor as $proveedores)
                                                   <option value="{{$proveedores->PROVE_id}}">{{$proveedores->PROVE_ruc}} - {{$proveedores->PROVE_razon_social}}</option>
                                                     @endforeach
                                                         </select>
                                                       <span class="input-group-append">
                                                           <span class="input-group-text " id="basic-addon1" style="color:#a9a9a9"><i class="fe-search"></i></span>
                                                       </span>
                                                     </div>
                                                   </div>



                                             </div>
                                            </div>

                                            <div class="col-md-2 mb-2" >

                                                <a href="#modal-prov" class="btn btn-light waves-effect btn-sm" style="width: 105%; right: 11px"  data-animation="fadein" data-plugin="custommodal" data-overlayColor="#38414a"><i class=" fa fa-plus-square"></i> Nuevo</a>
                                            </div>

                                        <div class="col-md-10 mb-2">
                                            <div class="form-inline">

                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked="">
                                                <label class=" not-bold">Factura: </label> &nbsp;
                                              </div>
                                             <div class="col-md-4"><input class="form-control form-control-sm" type="text" ></div>
                                              <div class="col-md-4">
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                  </div>
                                                  <input class="form-control form-control-sm" data-date-format="dd/mm/yyyy" id="datepicker">
                                                </div>
                                              </div>
                                            </div>


                                        </div>
                                        <div class="col-md-10 mb-2">
                                            <div class="form-inline">

                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked="">
                                                <label class=" not-bold">GRIA: </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                              </div>
                                             <div class="col-md-4"><input class="form-control form-control-sm" type="text" ></div>
                                              <div class="col-md-4">
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                  </div>
                                                  <input class="form-control form-control-sm" data-date-format="dd/mm/yyyy" id="datepicker1">
                                                </div>
                                              </div>
                                            </div>


                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <div class="form-inline">

                                                  <label class="not-bold">Almacen: </label> &nbsp;&nbsp;&nbsp;&nbsp;

                                                <div class="col-md-5">

                                                  <select class="form-control form-control-sm">
                                                    <option>option 1</option>
                                                    <option>option 2</option>


                                                  </select>
                                                  </div>
                                              </div>
                                        </div>
                                        <div class="col-md-5 mb-2" style="left: 100px">
                                            <div class="form-inline">

                                                  <label class="not-bold">Moneda: </label> &nbsp;&nbsp;&nbsp;&nbsp;

                                                <div class="col-md-5">

                                                  <select class="form-control form-control-sm">
                                                    <option>Soles</option>
                                                    <option>Dolar</option>


                                                  </select>
                                                  </div>
                                              </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            {{-- <a href="#custom-modal1" class="btn btn-light btn-rounded waves-effect btn-sm" style="width: 105%; right: 11px"  data-animation="fadein" data-plugin="custommodal" data-overlayColor="#38414a"><i class="mdi mdi-plus-circle mr-1"></i> Agregar producto a la compra</a> --}}
                                          <button type="button" class="btn btn-light btn-rounded waves-effect btn-sm" data-toggle="modal"   style="width: 100%; right: 8px"   data-target="#agregarArti"><span class=" fa fa-plus-square"> </span> Agregar producto a la compra</button></div>
                                        </div>


                                        <div class="col-md-12">
                                      <table id="tabA" class="table table-bordered table-sm">
                                        <thead>
                                          <tr style="background: #ebececc9;">

                                            <th>Codigo</th>
                                            <th>Nombre</th>
                                            <th>Cantidad</th>
                                            <th>Costo U.</th>
                                            <th>Unidad</th>

                                            <th>Total</th>
                                            <th >Opciones</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr >

                                            <td  class="align-middle" style="padding: 4px;">013232323</td>
                                            <td   class="align-middle" style="padding: 4px;">Update softwerwrwrwrvwaresdsd
                                            </td>
                                            <td   class="align-middle" style="padding: 4px;">121</td>
                                            <td  class="align-middle" style="padding: 4px;">123</td>
                                            <td  class="align-middle" style="padding: 4px;" >153</td>
                                            <td  class="align-middle" style="padding: 4px;">163334</td>
                                            <td   class="align-middle"style="padding: 4px;"><a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a></td>
                                          </tr>


                                        </tbody>
                                      </table>
                                    </div>
                                      <div class=" col-md-12 form-inline">
                                          <div class="col-md-9 mb-1 ">
                                            <label class="" style="margin-left: 87%;">SUB TOTAL</label>
                                          </div>
                                      <div class="col-md-3 mb-1 text-right" style="padding-right: 0px;">


                                         <input class=" form-control form-control-sm" type="text" >


                                        </div>

                                    </div>
                                    <div class=" col-md-12 form-inline">
                                        <div class="col-md-9 mb-1 ">
                                          <label class="" style="margin-left: 87%;">IGV(18%)</label>
                                        </div>
                                    <div class="col-md-3 mb-1 text-right" style="padding-right: 0px;">


                                       <input class=" form-control form-control-sm" type="text" >


                                      </div>

                                  </div>
                                  <div class=" col-md-12 form-inline">
                                    <div class="col-md-9 mb-1 ">
                                      <label class="" style="margin-left: 87%;">  TOTAL</label>
                                    </div>
                                <div class="col-md-3 mb-1 text-right" style="padding-right: 0px;">


                                   <input class=" form-control form-control-sm" type="text" >


                                  </div>

                              </div>



                                    </div>


                                    </div>
                                    <div class="card-footer" style="padding: 8px">
                                        <DIV class="row">
                                        <div class="col-md-6 text-left">
                                            <button type="button" class="btn btn-secondary waves-effect btn-sm" data-dismiss="modal">Close</button>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <button type="button" class="btn btn-blue waves-effect waves-light btn-sm">Save changes</button>
                                        </div>
                                        </DIV>

                                    </div>
                                    <!-- /.card-body -->
                                  </div>



     <!-- Bootstrap Tables js -->




                    </div>
                       <!-- /.card-body -->
                          </div>
                          <!-- /.card -->



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

        <!-- /Right-bar -->
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

@include('layouts.scripts')
<script src="assets/libs/custombox/custombox.min.js"></script>
<script>

    $(document).ready(function() {
        $('#guardarAr').click(function () {

var nombre = $('#PRO_nombre').val();
var cantidad = $('#cantidad').val();
var costo =$('#costo').val();
var codigo=$('#PRO_codigo').val();
var medida=$('#UME_id').val();

$('#tabA tbody').append('<tr><td class="align-middle" style="padding: 4px;">'+codigo+'</td><td class="align-middle" style="padding: 4px;">' + nombre + '</td><td class="align-middle" style="padding: 4px;">' + cantidad + '</td><td class="align-middle" style="padding: 4px;">' + costo + '</td><td class="align-middle" style="padding: 4px;">'+medida+'</td><td class="align-middle" style="padding: 4px;">' + costo*cantidad +'</td><td class="align-middle" style="padding: 4px;"><a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a><a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a></td></tr>');
$('#agregarArti').modal('hide');


});
      $("#bprodu").select2({
        minimumInputLength: 3,
        dropdownParent: $("#agregarArti")
      });
      $('#bprodu').change(function(){
           var producto = $(this).val();
           $.ajax({
                    url:"{{route('comprasShowart')}}",
                    method:"POST",
                    data:{
                        producto:producto,
                    },
                success:function(data){
                    $('#PRO_codigo').val(data[0].PRO_id);
                   $('#PRO_nombre').val(data[0].PRO_nombre);
                   $('#CATPRO_id').val(data[1].CATPRO_descripcion);
                   $('#MARCA_id').val(data[2].MARCA_descripcion);
                   $('#PRO_modelo').val(data[0].PRO_modelo);
                   $('#UME_id').val(data[3].UME_descripcion);
                }
           });
      });
    })

    </script>
<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });

            $('#bpro').select2({
         minimumInputLength: 3,
    });


    $('#bpro').change(function(){
           var prov = $(this).val();
           $.ajax({
                    url:"{{route('comprasShowp')}}",
                    method:"POST",
                    data:{
                        prov:prov,
                    },
                success:function(data){
                   $('#PROVE_dias').val(data.PROVE_dias_credito);
                }
           });
      });
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
        })
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>


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
    $('#datepicker1').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
    });
    $('#datepicker1').datepicker("setDate", new Date());

</script>
</body>

    </body>
</html>
