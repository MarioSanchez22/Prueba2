@php
use App\producto;
use App\umedidas;
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
      <!-- Sweet Alert-->
      <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body >
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
 <style>
     .swal2-modal{
         zoom:70%;

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

            <div class="content-page" >
                <div id="ajustarprecio" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="background-color: rgba(33, 33, 33, 0.46);">
                    <div class="modal-dialog modal-full modal-dialog-centered" style="width: 70%">
                        <div class="modal-content">
                            <div class="modal-header" style="padding: 0px; background-color:white;">
                               <div class="col-md-12">
                                <div class="row">
                                   <div class="col-md-4" style=" background: #2d3640; color: white">
                                    <div class="form-inline">
                                    <label for="">NOMBRE:</label>&nbsp;&nbsp;&nbsp;
                                    <input type="text"   class="col-md-4 form-control-plaintext form-control-sm " style="color:white;font-weight:bold;" id="nombreArti" >
                                    </div>
                                    <div class="form-inline">
                                    <label for="">Existencias: </label> &nbsp;&nbsp;&nbsp;
                                    <input type="text"   class="col-md-2 form-control-plaintext form-control-sm " style="color:white;font-weight:bold;" id=""  value="333">
                                    <input type="text"  class="col-md-4 form-control-plaintext form-control-sm text-left" style="margin-left: -15px;color:white;font-weight:bold;" value="unidad(es)">
                                        <label for="">Costo anterior: S/.</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text"   class="col-md-2 form-control-plaintext form-control-sm " style="color:white;font-weight:bold;" id="costoAnte" >
                                        </div>
                                    <div class="form-inline">

                                   </div>
                                </div>
                                   <div class="col-md-4" style="background:#4b6980d1;color:white">
                                    <label style="margin-top: 20px; margin-bottom: 5px;" for="">INGRESANDO :</label>&nbsp;&nbsp;&nbsp;
                                    <div class="form-inline" >
                                    <input type="text"   class="col-md-2 form-control-plaintext form-control-sm text-left" style="color:white;font-weight:bold;"  id="cantidadProd" disabled >
                                    <input type="text"  class="col-md-4 form-control-plaintext form-control-sm text-left" style="margin-left: -15px;color:white;font-weight:bold;" value="Producto(s)">


                                  </div>
                                   </div>
                                   <div class="col-md-4" style=" background:#275677; color:white">
                                       <DIV style="">
                                       <label style="margin-top: 20px; margin-bottom: 5px;" for="">PROVEEDOR: </label>
                                    <input type="text"   class="form-control-plaintext form-control-sm " style="color:white;font-weight:bold;" id="nombredeP" >
                                </DIV> </div>
                                  </div>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">


                                            <div class="card" style=" margin-bottom: 0px;">

                                              <!-- /.card-header -->

                                                          <div class="card-box " style=" padding-top: 0px; margin-bottom: 0px;padding-bottom: 5px;border: 2px solid #e8e8e8;" >


                                                         <br>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                      <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked >
                                                                        <label class="custom-control-label" for="customCheck1">Ajuste automático</label>
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck2" >
                                                                        <label class="custom-control-label" for="customCheck2">Precio venta con IGV</label>
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-md-4  text-right">
                                                                    <div class="custom-control custom-switch">
                                                                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                                        <label class="custom-control-label" for="customSwitch1">Redondear</label>
                                                                    </div>
                                                                  </div>
                                                                 <div class="col-md-12" style="margin-bottom: 20px"></div>
                                                                 <div class="col-md-2" style="margin-top: 10px">
                                                                    <div class="row">
                                                                        <div class="col-md-6" id="iconoCosto">

                                                                        </div>
                                                                        <div class="col-md-6" style="padding-right: 0px;
                                                                        margin-top: 20px;">

                                                                                <div class="row">
                                                                                    <div class="form-inline">
                                                                                        <input type="number" placeholder=""  id="porcentaje" style="font-size: 20px"class="col-md-6 form-control-plaintext form-control-sm text-right" disabled style="font-weight:bold;">
                                                                                        <label class="text-left" style="font-weight:bold;" for="">%</label>
                                                                                    </div>

                                                                                </div>

                                                                        </div>
                                                                    </div>

                                                                 </div>


                                                                 <div class="col-md-4">
                                                                     <div class="form-group">
                                                                         <label class="control-label" for="">Costo:</label>
                                                                         <input type="text" id="n3" class="form-control form-control-sm">
                                                                     </div>

                                                                 </div>
                                                                 <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="">Precio 1:</label>
                                                                        <input type="number" class="form-control form-control-sm" id="precio1ver">
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="">Precio 2:</label>
                                                                        <input type="number" class="form-control form-control-sm" id="precio2ver" step="0.01">
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="">Precio 3:</label>
                                                                        <input type="number" class="form-control form-control-sm" id="precio3ver">
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-2" id="estadocosto"></div>
                                                                </div>


                                                                  <br>

                                                          </div> <!-- end card-box-->

                                              <!-- /.card-body -->
                                            </div>


                                          <!-- /.col -->


                            </div>
                            <div class="modal-footer" style="padding: 6px">
                                <button type="button" class="btn btn-light waves-effect btn-sm" data-dismiss="modal">Cerrar</button>
                                <button type="button" id="" class="btn btn-light waves-effect waves-light btn-sm">Guardar</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <div id="agregarArti" class="modal fade" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-full" style="width: 78%">
                        <div class="modal-content">
                            <div class="modal-header" style="padding: 9px; background-color:#dbdfe2d1;">
                                <h5 class="modal-title" id="full-width-modalLabel" style="color:#6c757d">Agregar producto a la compra</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body" id="modalbo" style=" padding-bottom: 0px;   zoom: 95%; padding-top: 10px; margin-bottom: -50px">
                                <div class="wrapper">
                                    <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-8"  style="zoom:95%">
                                            <div class="card-box" style="border: 2px solid #e8e8e8;">
                                                <h4 class="header-title mb-2">Datos de articulo</h4>
                                                <div class="row">
                                                    <div class="col-md-9 mb-2">
                                                        <div class="input-group ">
                                                            <select id="bprodu" name="bprodu" class="form-control" data-toggle="select2" >
                                                                <option value="0" >         [Busque articulo ]        </option>
                                                                @foreach ($producto as $productos)
                                                                    <option   value="{{$productos->PRO_id}}">{{$productos->PRO_codigo}} - {{$productos->PRO_nombre}}</option>
                                                                @endforeach
                                                            </select>
                                                            <span class="input-group-append">
                                                                <span class="input-group-text " id="basic-addon1" style="color:#a9a9a9"><i class="fe-search"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-2" style="right:40px">
                                                        <button type="button" class="btn  btn-light " data-toggle="modal" data-target="#agregarArticulo"><span class=" fa fa-plus-square"> </span> Nuevo</button>
                                                    </div>

                                                    <div class="col-md-12 mb-2">
                                                        <div class="form-inline">
                                                            <label class="" >Nombre:</label>&nbsp;&nbsp;&nbsp;
                                                            <input type="text" style="background: #f2f3f5;" id="PRO_nombre" class="col-md-9 form-control form-control-sm" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 mb-2">
                                                        <div class="form-inline">
                                                            <label for="">Garantia: </label>&nbsp;&nbsp;
                                                            <input type="text" id="PRO_garantia" class="col-md-4 form-control form-control-sm">&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label for="">días</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 mb-2">
                                                        <div class="form-inline">
                                                            <label for="">Descuento: </label>&nbsp;&nbsp;
                                                            <div class="input-group">
                                                                <input type="number" class="col-md-8 form-control form-control-sm" id="PRO_DESC"  name="CATPRO_precio1" min="0" max="99">
                                                                <div class="input-group-prepend ">
                                                                    <span class="col-md-9 input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9; padding-left: 4px">%</span>
                                                                </div>
                                                            </div> &nbsp;
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
                                                            <label for="">Cantidad: </label>&nbsp;&nbsp;
                                                            <input type="text" id="cantidad" class="col-md-7 form-control form-control-sm" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <div class="form-inline">
                                                            <label for="">Costo: </label>&nbsp;&nbsp;
                                                            <input type="number" id="costo" class="col-md-7 form-control form-control-sm" required>
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
                                    <div class="col-md-12 mb-2 text-center">
                                        <div class="form-inline text-center">
                                            <label class="text-center" for="">Costo anterior:</label>

                                            <input type="number" style="background: #f2f3f5;"  disabled class="col-md-5 form-control form-control-sm text-center" id="costoAnterior">
                                        </div>
                                    </div>
                                    <input type="hidden" id="PRO_codigo">
                                    <input type="hidden" id="PRO_id">
                                    <input type="hidden" id="precio1Pro">
                                    <input type="hidden" id="precio2Pro">
                                    <input type="hidden" id="precio3Pro">
                                    <input type="hidden" id="precio1deC">
                                    <input type="hidden" id="precio2deC">
                                    <input type="hidden" id="precio3deC">
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
                                    <div class="col-md-4 mb-2" >
                                        <div class="form-group">
                                            <label class="control-label">Ubicacion: </label>
                                            <div class="form-inline">
                                            <input type="text" class="col-md-8 form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion"> &nbsp;&nbsp;
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="form-group">
                                                <label class="control-label">Cantidad: </label>
                                                <div class="form-inline">
                                                <input type="text" class="col-md-5 form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion">
                                                <button type="button" class="btn  btn-light btn-sm" ><span class=" fa fa-plus-square"> </span></button>
                                            </div></div>

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
        <div id="agregarArticulo" class="modal fade" style="background-color: rgba(33, 33, 33, 0.46);">
            <div class="modal-dialog modal-full modal-dialog-centered" style="width: 70%">
                <div class="modal-content">
                    <div class="modal-header" style="padding: 9px; background-color:#dbdfe2d1;">
                        <h5 class="modal-title" id="full-width-modalLabel" style="color:#6c757d">Registrar nuevo producto </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">


                                    <div class="card" style=" margin-bottom: 0px;">

                                      <!-- /.card-header -->

                                                  <div class="card-box " style=" padding-top: 0px; margin-bottom: 0px;padding-bottom: 5px; zoom:90%;border: 2px solid #e8e8e8;" >


                                                  <label for="" class="header-title mb-2">  <i class="mdi mdi-database-edit"></i> Datos de Producto</label>



                                                                <br>
                                                              <div class="row">
                                                                  <div class="col-md-4">
                                                                      <input type="hidden" value=" {{$ultimoid}}" id="id_ultimoP">
                                                                      <div class="form-group">
                                                                        <label class="control-label">Codigo: </label>
                                                                        <div class="input-group">
                                                                          <div class="input-group-prepend ">
                                                                              <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-barcode"></i></span>
                                                                          </div>
                                                                        <input type="text" class="form-control form-control-sm"  name="PRO_codigo"  id="PRO_rcodigo"> </div>
                                                                     </div></div>

                                                                    <div class="col-md-4" >
                                                                      <div class="form-group">
                                                                        <label class="control-label">Estado: </label>

                                                                        <input type="text" class="form-control form-control-sm border border-light"  disabled value="Activo">
                                                                     </div></div>
                                                                     <div class="col-md-4">
                                                                        <label for="">¿Utiliza numero de serie?</label><br>
                                                                        <div style="margin-left: 23%; margin-top: 5%;">
                                                                        <div class="radio radio-info form-check-inline">
                                                                            <input type="radio" id="inlineRadio1" value="0" name="serie" checked>
                                                                            <label for="inlineRadio1"> No </label>
                                                                        </div>
                                                                        <div class="radio radio-info form-check-inline">
                                                                            <input type="radio" id="inlineRadio2" value="1" name="serie">
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
                                                                        <input type="text" class="form-control form-control-sm"  name="PRO_rnombre"  id="PRO_rnombre"> </div>
                                                                     </div></div>
                                                                     <div class="col-md-4">
                                                                      <label for="">Categoria</label>
                                                                        <select class="selectpicker form-control  form-control-sm" data-style="btn-light" id="PRO_rcategoria" name="PRO_rcategoria">
                                                                          @foreach ($categoria_pr as $categorias_pr)
                                                                        <option value="{{$categorias_pr->CATPRO_id}}">{{$categorias_pr->CATPRO_descripcion}}</option>
                                                                          @endforeach
                                                                        </select>
                                                                    </div>
                                                                     <div class="col-md-4">
                                                                      <label for="">Marca</label>
                                                                        <select class=" form-control  form-control-sm"  id="PRO_rmarca" name="PRO_rmarca">
                                                                          @foreach ($marcap as $marcas_p)
                                                                          <option value="{{$marcas_p->MARCA_id}}">{{$marcas_p->MARCA_descripcion}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                      <div class="form-group">
                                                                        <label class="control-label">Modelo: </label>
                                                                        <div class="input-group">
                                                                          <div class="input-group-prepend ">
                                                                              <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class=" mdi mdi-border-color"></i></span>
                                                                          </div>
                                                                        <input type="text" class="form-control form-control-sm"  name="PRO_rmodelo"  id="PRO_rmodelo"> </div>
                                                                     </div></div>
                                                                     <div class="col-md-4">
                                                                      <div class="form-group">
                                                                        <label class="control-label">Detalle: </label>
                                                                        <div class="input-group">
                                                                          <div class="input-group-prepend ">
                                                                              <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class=" mdi mdi-border-color"></i></span>
                                                                          </div>
                                                                        <input type="text" class="form-control form-control-sm"  name="PRO_rdetalle"  id="PRO_rdetalle"> </div>
                                                                     </div></div>

                                                                     <div class="col-md-4">
                                                                      <div class="form-group">
                                                                        <label class="control-label">Unidad predeterminada: </label>
                                                                        <div class="input-group">
                                                                          <div class="input-group-prepend ">
                                                                              <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class=" mdi mdi-border-color"></i></span>
                                                                          </div>
                                                                          <select class="form-control  form-control-sm" data-style="btn-light" id="PRO_runi" name="PRO_runi">

                                                                            @foreach ($umedidasp as $umedidasps)
                                                                            <option value="{{$umedidasps->UME_id}}">{{$umedidasps->UME_descripcion}}</option>
                                                                              @endforeach
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
                                                                          <input type="text" class="form-control form-control-sm"  name="PRO_rmin"  id="PRO_rmin"> </div>
                                                                       </div>
                                                                     </div>
                                                                     <div class="col-md-3">
                                                                      <div class="form-group">
                                                                          <label class="control-label">Maxima: </label>
                                                                          <div class="input-group">
                                                                            <div class="input-group-prepend ">
                                                                                <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-server-plus"></i></span>
                                                                            </div>
                                                                          <input type="text" class="form-control form-control-sm"  name="PRO_rmax"  id="PRO_rmax"> </div>
                                                                       </div>
                                                                     </div>
                                                                     <div class="col-md-3">
                                                                      <div class="form-group">
                                                                          <label class="control-label">Al comprar: </label>
                                                                          <div class="input-group">
                                                                            <div class="input-group-prepend ">
                                                                                <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-timetable"></i></span>
                                                                            </div>
                                                                          <input type="text" class="form-control form-control-sm"  name="PRO_rcomprar"  id="PRO_rcomprar"> </div>
                                                                       </div>
                                                                     </div>
                                                                     <div class="col-md-3">
                                                                      <div class="form-group">
                                                                          <label class="control-label">Al vender: </label>
                                                                          <div class="input-group">
                                                                            <div class="input-group-prepend ">
                                                                                <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-timetable"></i></span>
                                                                            </div>
                                                                          <input type="text" class="form-control form-control-sm"  name="PRO_rvender"  id="PRO_rvender"> </div>
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
                        <button type="button" class="btn btn-light waves-effect btn-sm" data-dismiss="modal">Cerrar</button>
                        <button type="button" id="guardarPr" class="btn btn-light waves-effect waves-light btn-sm">Guardar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
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
                                                    <input type="number" class="form-control form-control-sm" required min="1" placeholder="Dias " name="PROVE_dias_credito">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">RUC: </label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm"   placeholder="RUC de empresa" name="PROVE_ruc" id="PROVE_ruc">
                                                    <div  id="cargarRuc" style="display:none">
                                                        <button class="btn btn-info btn-sm" type="button"  >
                                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="sr-only"></span>
                                                        </button>
                                                    </div>
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
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="PROVE_telefono">Telefono: </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend ">
                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-phone mr-1"></i></span>
                                                </div> <input type="text" class="form-control form-control-sm" required placeholder="Telefono" name="PROVE_telefono"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="PROVE_email" >Email: </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend ">
                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-email mr-1"></i></span>
                                                </div>
                                                <input type="text" class="form-control form-control-sm" required  placeholder="Email" name="PROVE_email"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="padding: 6px">
                            <div class="text-right">
                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" onclick="Custombox.close();" id="cancelar">Cancelar</button>
                                <button type="submit" class="btn btn-blue waves-effect waves-light btn-sm">Guardar</button>

                            </div>
                        </div>
                    </div>

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

                          <form action="{{route('comprahecha')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field()}}
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
                                                            <input  class=" col-md-3 form-control form-control-sm" type="number"  id="PROVE_dias" name="COMPRO_diasC" min="1" name="" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    <div class="card-body" style="font-size: 12.8px;padding-bottom: 10px;padding-top: 12px;border-right: solid 1px #dee2e6;border-left: solid 1px #dee2e6;border-bottom: solid 1px #dee2e6;  ">

                                        <div class="row">

                                            <div class="col-md-10 mb-2">
                                                <div class="form-inline">


                                                    <label class="not-bold">Proveedor:</label> &nbsp;


                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                        <select id="bpro" style="width: 200px!important" class=" col-md-12 form-control" data-toggle="select2" name="PROVE_id">
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
                                                    <input type="hidden" id="inputse" >


                                                </div>
                                            </div>

                                            <div class="col-md-2 mb-2" >

                                                <a href="#modal-prov" class="btn btn-light waves-effect btn-sm" style="width: 105%; right: 11px"  data-animation="fadein" data-plugin="custommodal" data-overlayColor="#38414a"><i class=" fa fa-plus-square"></i> Nuevo</a>
                                            </div>

                                            <div class="col-md-10 mb-2">
                                                <div class="form-inline">

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="factura" onclick="activacompra()">
                                                    <label class=" not-bold">Factura: </label> &nbsp;
                                                </div>
                                                <div class="col-md-4"><input class="form-control form-control-sm" type="text"  name="COMPRO_factura" disabled></div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input class="form-control form-control-sm" data-date-format="dd/mm/yyyy" id="datepicker" name="COMPRO_facturaF" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-10 mb-2">
                                            <div class="form-inline">

                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gria" onclick="activacompraG()">
                                                <label class=" not-bold">GRIA: </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                              </div>
                                             <div class="col-md-4"><input class="form-control form-control-sm" type="text" name="COMPRO_gria" disabled></div>
                                              <div class="col-md-4">
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                  </div>
                                                  <input class="form-control form-control-sm" data-date-format="dd/mm/yyyy" id="datepicker1" name="COMPRO_griaF" disabled>
                                                </div>
                                              </div>
                                            </div>


                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <div class="form-inline">
                                                  <label class="not-bold">Almacen: </label> &nbsp;&nbsp;&nbsp;&nbsp;
                                                <div class="col-md-5">
                                                  <select class="form-control form-control-sm" name="COMPRO_almacen">
                                                    <option value="1">option 1</option>
                                                    <option value="2">option 2</option>
                                                  </select>
                                                  </div>
                                              </div>
                                        </div>
                                        <div class="col-md-5 mb-2" style="left: 100px">
                                            <div class="form-inline">
                                                    <label class="not-bold">Moneda: </label> &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <div class="col-md-5">
                                                        <select class="form-control form-control-sm" name="COMPRO_moneda">
                                                            <option>Soles</option>
                                                            <option>Dolar</option>
                                                        </select>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            {{-- <a href="#custom-modal1" class="btn btn-light btn-rounded waves-effect btn-sm" style="width: 105%; right: 11px"  data-animation="fadein" data-plugin="custommodal" data-overlayColor="#38414a"><i class="mdi mdi-plus-circle mr-1"></i> Agregar producto a la compra</a> --}}
                                          <button type="button"  id="guardarCompra" class="btn btn-light btn-rounded waves-effect btn-sm" data-toggle="modal"   style="width: 100%; right: 8px" disabled  data-target="#agregarArti"><span class=" fa fa-plus-square"> </span> Agregar producto a la compra</button></div>
                                        </div>
                                        <div class="col-md-12">
                                      <table id="tabA" class="table table-bordered table-sm">
                                        <thead>
                                          <tr style="background: #ebececc9;">
                                            <th>#</th>
                                            <th>Codigo</th>
                                            <th>Nombre</th>
                                            <th>Cantidad</th>
                                            <th>Costo U.</th>
                                            <th>Unidad</th>

                                            <th>Total</th>
                                            <th >Opciones</th>
                                          </tr>
                                        </thead>
                                        @php
                                            $subtotal=0;
                                        @endphp
                                        <tbody>
                                         @foreach ($productoCom as $productoComs)
                                         @php

                                            $subtotal=$subtotal+$productoComs->PRO_costo*$productoComs->PRO_cantidad;


                                         $producto=producto::where('PRO_id','=',$productoComs->PRO_id)->first();

                                         if ($producto!=null) {
                                            $unidadProd=umedidas::where('UME_id','=',$producto->UME_id)->first();
                                         }
                                         @endphp
                                          <tr  id="{{$productoComs->PROCO_id}}">
                                            <td>{{$loop->index+1}}</td>
                                            <td  class="align-middle" style="padding: 4px;">{{$producto->PRO_codigo}}</td>
                                            <td   class="align-middle" style="padding: 4px;">{{$producto->PRO_nombre}}</td>
                                            <td   class="align-middle" style="padding: 4px;">{{$productoComs->PRO_cantidad}}</td>
                                            <td  class="align-middle" style="padding: 4px;">{{$productoComs->PRO_costo}}</td>
                                            <td  class="align-middle" style="padding: 4px;" >{{$unidadProd->UME_descripcion}}</td>
                                            <td  class="align-middle" style="padding: 4px;">{{$productoComs->PRO_cantidad * $productoComs->PRO_costo}}</td>
                                            <td   class="align-middle"style="padding: 4px;"><a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a></td>
                                          </tr>

                                          @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                    <div id="calculos">
                                    <div class=" col-md-12 form-inline">
                                          <div class="col-md-9 mb-1 ">
                                            <label class="" style="margin-left: 87%;">SUB TOTAL</label>
                                          </div>
                                      <div class="col-md-3 mb-1 text-right" style="padding-right: 0px;">
                                      <input class=" form-control form-control-sm text-right" type="text" id="subT" style="color: #131177;" name="COMPRO_subtotal" value="{{$subtotal}}" >
                                        </div>

                                    </div>
                                    <div class=" col-md-12 form-inline">
                                        <div class="col-md-9 mb-1 ">
                                          <label class="" style="margin-left: 87%;">IGV(18%)</label>
                                        </div>
                                    <div class="col-md-3 mb-1 text-right" style="padding-right: 0px;">
                                       <input class=" form-control form-control-sm text-right" type="text" id="igvP" style="color: #5a0808;" name="COMPRO_igv" value="{{$subtotal*0.18}}" >
                                      </div>

                                  </div>
                                  <div class=" col-md-12 form-inline">
                                    <div class="col-md-9 mb-1 ">
                                      <label class="" style="margin-left: 87%;">  TOTAL</label>
                                    </div>
                                <div class="col-md-3 mb-1 text-right" style="padding-right: 0px;">
                                   <input class=" form-control form-control-sm text-right" type="text" id="totalPr" style="font-weight:bold;" name="COMPRO_total" value="{{$subtotal+$subtotal*18/100}}" >
                                  </div>
                              </div>
                            </div>
                                    </div>
                                    </div>
                                    <div class="card-footer" style="padding: 8px">
                                        <DIV class="row">
                                        <div class="col-md-6 text-left">
                                            <button type="button" class="btn btn-secondary waves-effect btn-sm" id="cancelarCompra" >Cancelar compra</button>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <button type="submit" name="guardartodo" id="guardartodo" onclick="guardarmensaje()" class="btn btn-blue waves-effect waves-light btn-sm" disabled>Save changes</button></a>
                                        </div>
                                        </DIV>

                                    </div>
                                    <!-- /.card-body -->
                                  </div>
     <!-- Bootstrap Tables js -->
                    </div>
                </form>
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
<script src="{{asset('assets/libs/custombox/custombox.min.js')}}"></script>
<!-- Sweet Alerts js -->
<script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('assets/libs/autonumeric/autoNumeric-min.js')}}"></script>
 <!-- Init js-->
 <script src="{{asset('assets/js/pages/form-masks.init.js')}}"></script>
 <script src="{{asset('assets/libs/jquery-mask-plugin/jquery.mask.min.js')}}"></script>

<!-- Sweet alert init js-->
<script src="{{asset('assets/js/pages/sweet-alerts.init.js')}}"></script>

<script>
$('#cancelarCompra').click(function () {
    Swal.fire({
        title: 'Esta seguro que desea eliminar datos de esta compra?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#1c2c3d',
        cancelButtonColor: '#797979',
        confirmButtonText: 'Si',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
    if (result.value) {
        $.get("{{route('eliminarta')}}",
                        function (data, status) {
                            location.reload();
                });
        Swal.fire(
        'La compra fue eliminada!',
        )
    }
 })
});

function guardarmensaje(){
    Swal.fire({
    position: 'top',
    type: 'success',
    title: 'Compra realizada',
    showConfirmButton: false,
    timer: 1500
    })
}

   /*        $('#cancelarCompra').click(function () {

$.ajax({
                     url:"{{route('eliminarta')}}",
                     method:"get",
                     succes: function(data){
                        location.reload();
            }

                     });
}); */
    function activacompra(){
        if ($('#factura').is(':checked')) {
        $('input[name=COMPRO_factura]').prop('disabled',false);
        $('input[name=COMPRO_facturaF]').prop('disabled',false);
        $('input[name=COMPRO_factura]').prop('required',true);
        $('input[name=COMPRO_facturaF]').prop('required',true);
        if($('table#tabA tbody tr').length >0){
        $('button[name=guardartodo]').prop('disabled',false);}
        }
        else{
            $('input[name=COMPRO_factura]').prop('disabled',true);
        $('input[name=COMPRO_facturaF]').prop('disabled',true);
        $('input[name=COMPRO_factura]').prop('required',false);
        $('input[name=COMPRO_facturaF]').prop('required',false);
        $('input[name=COMPRO_factura]').val('');
        $('input[name=COMPRO_facturaF]').val('');
        if( $('#gria').is(':checked') &&  $('table#tabA tbody tr').length >0){
        $('button[name=guardartodo]').prop('disabled',false);}
        else{
            $('button[name=guardartodo]').prop('disabled',true);}
        }

        }



    function activacompraG(){
        if ($('#gria').is(':checked')) {
        $('input[name=COMPRO_gria]').prop('disabled',false);
        $('input[name=COMPRO_griaF]').prop('disabled',false);

        $('input[name=COMPRO_gria]').prop('required',true);
        $('input[name=COMPRO_griaF]').prop('required',true);
        if($('table#tabA tbody tr').length >0){
        $('button[name=guardartodo]').prop('disabled',false);}
        }
        else{
        $('input[name=COMPRO_gria]').prop('disabled',true);
        $('input[name=COMPRO_griaF]').prop('disabled',true);
        $('input[name=COMPRO_gria]').prop('required',false);
        $('input[name=COMPRO_griaF]').prop('required',false);
        $('input[name=COMPRO_gria]').val('');
        $('input[name=COMPRO_griaF]').val('');
        if( $('#factura').is(':checked') &&  $('table#tabA tbody tr').length >0){
        $('button[name=guardartodo]').prop('disabled',false);}
        else{
            $('button[name=guardartodo]').prop('disabled',true);}



        }

    }

</script>

<script>


</script>
<script>
   function ajustar(precio1categorias){
    if ($('#customCheck1').is(':checked')) {
        alert(precio1categorias);

    }
  /*   else{
        $('#precio1ver').val(precio1p);
        $('#precio2ver').val(precio2p);
        $('#precio3ver').val(precio3p);
    } */

}
</script>
<script>

    $(document).ready(function() {


        $("#costo").blur(function(b){
             //obtenemos el texto introducido en el campo
             consulta = $('#costo').val();
             costoA=$('#costoAnterior').val();
             var n1 =parseFloat(consulta);
             var n2=parseFloat(costoA);
             //hace la búsqueda
             $("#costo").delay(0).queue(function(n) {


               if(n1>n2){
                 alert('El costo subio');}


             });


      });
        if ($('table#tabA tbody tr').length == 0){
            $('button[name=guardartodo]').prop('disabled',true);
        }
         else{
            var $prov = $("#bpro").select2();
            $.ajax({
                    url:"{{route('datosTemp')}}",
                    method:"get",

                success:function(data){

                 $prov.val(data[0].PROV_id).trigger("change"); //lo selecciona
                 $("#bpro").select2({
        minimumInputLength: 3,

      });

                }
           });



         }




        $('#guardarAr').click(function () {


var nombre = $('#PRO_nombre').val();
var cantidad = $('#cantidad').val();
var costo =$('#costo').val();
var codigo=$('#PRO_codigo').val();
var idprod=$('#PRO_id').val();
var medida=$('#UME_id').val();
var $example1 = $("#bprodu").select2();
var garantia=$('#PRO_garantia').val();
var proveedor=$('#bpro').val();
var factura=$('input[name=COMPRO_factura]').val();
var facturaF=$('input[name=COMPRO_facturaF]').val();
var gria=$('input[name=COMPRO_gria]').val();
var griaF=$('input[name=COMPRO_griaF]').val();
var costoAr=$('#costoAnterior').val();
var nombreProvee=$('#inputse').val();
var precio1p=$('#precio1Pro').val();
var precio2p=$('#precio2Pro').val();
var precio3p=$('#precio3Pro').val();
var precio1cate=$('#precio1deC').val();
var precio2cate=$('#precio2deC').val();
var precio3cate=$('#precio3deC').val();
$.ajax({
                     url:"{{route('rProductoCStore')}}",
                     method:"POST",
                     data:{
                        idprod,
                        garantia,
                        costo,
                        cantidad,
                        factura,
                        facturaF,
                        gria,
                        griaF,
                        proveedor
                     },
                 success:function(data){
                    var n3 =parseFloat(costo);
                    var  precio1categoria =parseFloat(precio1cate);
                    var  precio2categoria =parseFloat(precio2cate);
                    var  precio3categoria =parseFloat(precio3cate);
                    var n4=parseFloat(costoAr);



    if(n3!=n4  ){
/*                     Swal.fire({
  position: 'top',
  type: 'warning',
  title: 'El costo subio',
  showConfirmButton: false,
  timer: 1500
}) */
$("#ajustarprecio").modal("show");
$('#nombreArti').val(nombre);
$('#costoAnte').val(costoAr);

$('#cantidadProd').val(cantidad);
$('#nombredeP').val(nombreProvee);

$('#n3').val(n3);
var precio1ver=n3/(1-precio1categoria);
var precio2ver=n3/(1-precio2categoria);
var precio3ver=n3/(1-precio3categoria);
if(n3>n4)

{
    $('#iconoCosto').html('<i class="mdi mdi-48px mdi-arrow-up-circle" style="color:#c13434"></i>');
    $('#estadocosto').html('<p style="font-size:14px; color:red">EL COSTO SUBIO</p>');
    $('#porcentaje').val(((n3 - n4)/n4)*100);
    $('#precio1ver').val(precio1ver.toFixed(2));
    $('#precio2ver').val(precio2ver.toFixed(2));
    $('#precio3ver').val(precio3ver.toFixed(2));
    var checkbox = document.getElementById('customCheck1');
checkbox.addEventListener("change", validaCheckbox, false);

function validaCheckbox(){
  var checked = checkbox.checked;
  if(checked){
    $('#precio1ver').val(precio1ver.toFixed(2));
    $('#precio2ver').val(precio2ver.toFixed(2));
    $('#precio3ver').val(precio3ver.toFixed(2));

  }
  else{
    $('#precio1ver').val(precio1p);
        $('#precio2ver').val(precio2p);
        $('#precio3ver').val(precio3p);
  }
}
} else{
    $('#iconoCosto').html('<i class="mdi mdi-48px mdi-arrow-down-circle" style="color:#cc5c39"></i>');
    $('#estadocosto').html('<p style="font-size:17px; color:red">EL COSTO BAJO</p>');
    $('#porcentaje').val(((n4 - n3)/n4)*100);
    $('#precio1ver').val(precio1ver.toFixed(2));
    $('#precio2ver').val(precio2ver.toFixed(2));
    $('#precio3ver').val(precio3ver.toFixed(2));
    var checkbox = document.getElementById('customCheck1');
    checkbox.addEventListener("change", validaCheckbox1, false);

function validaCheckbox1(){
  var checked = checkbox.checked;
  if(checked){
    $('#precio1ver').val(precio1ver.toFixed(2));
    $('#precio2ver').val(precio2ver.toFixed(2));
    $('#precio3ver').val(precio3ver.toFixed(2));


  }
  else{
       $('#precio1ver').val(precio1p);
        $('#precio2ver').val(precio2p);
        $('#precio3ver').val(precio3p);
  }
}


}
}


                    // $('#tabA tbody').append('<tr><td class="align-middle" style="padding: 4px;">'+codigo+'</td><td class="align-middle" style="padding: 4px;">' + nombre + '</td><td class="align-middle" style="padding: 4px;">' + cantidad + '</td><td class="align-middle" style="padding: 4px;">' + costo + '</td><td class="align-middle" style="padding: 4px;">'+medida+'</td><td class="align-middle subtotal" style="padding: 4px;" >' + costo*cantidad +'</td><td class="align-middle" style="padding: 4px;"><a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a><a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a></td></tr>');

$('#PRO_nombre').val('');

$('#cantidad').val('');
$('#costo').val('');
$('#PRO_codigo').val('')
$('#UME_id').val('');
$('#CATPRO_id').val('');
 $('#MARCA_id').val('');
 $('#PRO_modelo').val('');
$example1.append($('<option>', { //agrego los valores que obtengo de una base de datos
        value: 0,
        text: '[Busque articulo]',
        selected: true
        }));
$example1.val(0).trigger("change"); //lo selecciona
$("#bprodu").select2({
        minimumInputLength: 3,
        dropdownParent: $("#agregarArti")
      });
$('#agregarArti').modal('hide');
$('#tabA').load(location.href+" #tabA>*");
$('#calculos').load(location.href+" #calculos>*");
if( $('#factura').is(':checked') ||  $('#gria').is(':checked')){
        $('button[name=guardartodo]').prop('disabled',false);}
        else{
            $('button[name=guardartodo]').prop('disabled',true);}
/*
var sum=0;
$('.subtotal').each(function() {
    sum += parseFloat($(this).text().replace(/,/g, ''), 10);
    porc=18*sum/100;
    total=sum+porc;
});
;
$('#subT').val(sum.toFixed(2));
$('#igvP').val(porc.toFixed(2));
$('#totalPr').val(total.toFixed(2)); */

                 }
             });





});
      $("#bprodu").select2({
        minimumInputLength: 3,
        dropdownParent: $("#agregarArti")
      });
      $('#bprodu').change(function(selectPro){
          selectPro=$('#bprodu').val();
           var producto = selectPro;

           $.ajax({
                    url:"{{route('comprasShowart')}}",
                    method:"POST",
                    data:{
                        producto:producto,
                    },
                success:function(data){
                    $('#PRO_codigo').val(data[0].PRO_codigo);
                    $('#PRO_id').val(data[0].PRO_id);
                   $('#PRO_nombre').val(data[0].PRO_nombre);
                   $('#PRO_garantia').val(data[0].PRO_gcomprar);
                   $('#CATPRO_id').val(data[1].CATPRO_descripcion);
                   $('#MARCA_id').val(data[2].MARCA_descripcion);
                   $('#PRO_modelo').val(data[0].PRO_modelo);
                   $('#UME_id').val(data[3].UME_descripcion);
                   $('#costoAnterior').val(data[4].COMPROI_costo);
                   $('#precio1Pro').val(data[4].COMPROI_precio1);
                   $('#precio2Pro').val(data[4].COMPROI_precio2);
                   $('#precio3Pro').val(data[4].COMPROI_precio3);
                   $('#precio1deC').val(data[1].CATPRO_precio1);
                   $('#precio2deC').val(data[1].CATPRO_precio2);
                   $('#precio3deC').val(data[1].CATPRO_precio3);
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
                   $('#inputse').val(data.PROVE_razon_social);
                   $('#guardarCompra').prop('disabled',false);
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
    $('#datepicker').datepicker( new Date());

</script>
<script type="text/javascript">
    $('#datepicker1').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
    });
    // $('#datepicker1').datepicker("setDate", new Date());
     $('#datepicker1').datepicker( new Date());

</script>

<script>
  $(document).ready(function() {
         $('#guardarPr').each(function (el){
             $(this).bind("click",saveProducto);
         });
         function saveProducto(){
             var codigo= $('#PRO_rcodigo').val();
             var categoria=$('#PRO_rcategoria').val();
          var serie=$('input:radio[name=serie]:checked').val()
             var nombre=$('#PRO_rnombre').val();
             var marca=$('#PRO_rmarca').val();
             var modelo=$('#PRO_rmodelo').val();
             var detalle=$('#PRO_rdetalle').val();
             var unidad=$('#PRO_runi').val();
             var gmin=$('#PRO_rmin').val();
             var gmax=$('#PRO_rmax').val();
             var dcomprar=$('#PRO_rcomprar').val();
             var dvender=$('#PRO_rvender').val();
             var ultimo=$('#id_ultimoP').val();
             var $example = $("#bprodu").select2();
                 $.ajax({
                     url:"{{route('rProductoStore')}}",
                     method:"POST",
                     data:{
                      codigo,
                      categoria,
                      serie,
                      nombre,
                      marca,
                      modelo,
                      detalle,
                      unidad,
                      gmin,
                      gmax,
                      dcomprar,
                      dvender
                     },
                 success:function(data){
                     $("#agregarArticulo").modal("hide");
$example.append($('<option>', { //agrego los valores que obtengo de una base de datos
                        value: data.PRO_id,
                        text: data.PRO_codigo+' - '+data.PRO_nombre,
                        selected: true
                       }));
$example.val(data.PRO_id).trigger("change"); //lo selecciona
$("#bprodu").select2({
        minimumInputLength: 3,
        dropdownParent: $("#agregarArti")
      });
      limpiarFormPro();
                 }
             });
         }
         function limpiarFormPro(){
             $('#PRO_rcodigo').val('');
             $('#PRO_rcategoria').val('1');
             $('#PRO_rnombre').val('');
             $('#PRO_rmarca').val('1');
             $('#PRO_rmodelo').val('');
             $('#PRO_rdetalle').val('');
             $('#PRO_runi').val('1');
             $('#PRO_rmin').val('');
             $('#PRO_rmax').val('');
             $('#PRO_rcomprar').val('');
             $('#PRO_rvender').val('');
             $('#id_ultimoP').val('');
         };
     })
 </script>
</body>


</html>
