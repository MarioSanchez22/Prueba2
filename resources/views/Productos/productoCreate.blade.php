

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
                                    <form action=" {{route('productoStore')}} " method="POST" enctype="multipart/form-data" class="col-md-12">
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
                                                              <label class="control-label">Código: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-barcode"></i></span>
                                                                </div>
                                                              <input type="text" class="form-control form-control-sm"  name="PRO_codigo"  id="PRO_codigo" required> </div>
                                                           </div></div>
                                                           <div class="col-md-4">
                                                            <label for="">Categoría</label>
                                                              <select class="selectpicker form-control  form-control-sm" data-style="btn-light" id="CATPRO_id" name="CATPRO_id" required>
                                                                <option value="">Categoría</option>
                                                                @foreach ($categorias as $categoria)
                                                                    <option value="{{$categoria->CATPRO_id}}">{{$categoria->CATPRO_descripcion}}</option>
                                                                @endforeach
                                                              </select>
                                                          </div>
                                                          <div class="col-md-2" style="margin-left: 170px;">
                                                            <div class="form-group">
                                                              <label class="control-label">Estado:</label>
                                                              <input type="text" class="form-control form-control-sm border border-light"  disabled value="Activo" id="PRO_estado" name="PRO_estado">
                                                           </div></div>

                                                          <div class="col-md-5">
                                                            <div class="form-group">
                                                              <label class="control-label">Nombre: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class=" mdi mdi-border-color"></i></span>
                                                                </div>
                                                              <input type="text" class="form-control form-control-sm"  name="PRO_nombre"  id="PRO_nombre" required> </div>
                                                           </div></div>
                                                           <div class="col-md-3">
                                                            <label for="">Marca</label>
                                                              <select class=" form-control  form-control-sm"  id="MARCA_id" name="MARCA_id" required>
                                                                <option value="">Marca</option>
                                                                @foreach ($marcas as $marca)
                                                                    <option value="{{$marca->MARCA_id}}">{{$marca->MARCA_descripcion}}</option>
                                                                @endforeach
                                                              </select>
                                                          </div>
                                                          <div class="col-md-4">
                                                            <div class="form-group">
                                                              <label class="control-label">Modelo:</label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class=" mdi mdi-border-color"></i></span>
                                                                </div>
                                                              <input type="text" class="form-control form-control-sm"  name="PRO_modelo"  id="PRO_modelo" required> </div>
                                                           </div></div>
                                                           <div class="col-md-4">
                                                            <div class="form-group">
                                                              <label class="control-label">Unidad predeterminada: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class=" mdi mdi-border-color"></i></span>
                                                                </div>
                                                                <select class="form-control  form-control-sm" data-style="btn-light" id="UME_id" name="UME_id" required>
                                                                    <option value="">Unidad</option>
                                                                    @foreach ($unidades as $unidad)
                                                                        <option value="{{$unidad->UME_id}}">{{$unidad->UME_abreviatura}}</option>
                                                                    @endforeach
                                                                  </select> </div>
                                                           </div></div>
                                                           <div class="col-md-4">
                                                            <label for="">¿Utiliza número de serie?</label><br>
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
                                                                <select class="form-control  form-control-sm" data-style="btn-light" id="PROVE_origen" name="PROVE_origen" required>
                                                                    @foreach ($origenes as $origen)
                                                                        <option value="{{$origen->ORIPROVE_id}}">{{$origen->ORIPROVE_descripcion}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5>Existencia: </h5>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5>Días de garantía: </h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Mínima: </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class=" mdi mdi-server-minus"></i></span>
                                                                </div>
                                                                <input type="number" min="0" class="form-control form-control-sm"  name="PRO_min"  id="PRO_min" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Máxima: </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-server-plus"></i></span>
                                                                </div>
                                                                <input type="number" min="0" class="form-control form-control-sm"  name="PRO_max" id="PRO_max" required> </div>
                                                             </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Al comprar: </label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend ">
                                                                        <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-timetable"></i></span>
                                                                    </div>
                                                                    <input type="number" min="0" class="form-control form-control-sm"  name="PRO_gcomprar" id="PRO_gcomprar" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Al vender: </label>
                                                                <div class="input-group">
                                                                  <div class="input-group-prepend ">
                                                                      <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-timetable"></i></span>
                                                                  </div>
                                                                <input type="number" min="0" class="form-control form-control-sm"  name="PRO_gvender"  id="PRO_gvender">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <!--Precio al vender:-->
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Precio1: </label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend ">
                                                                        <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-server-plus"></i></span>
                                                                    </div>
                                                                    <input type="number" min="0" class="form-control form-control-sm"  name="PREC_precio1" id="PREC_precio1" required> </div>
                                                                 </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">Precio2: </label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend ">
                                                                            <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-timetable"></i></span>
                                                                        </div>
                                                                        <input type="number" min="0" class="form-control form-control-sm"  name="PREC_precio2" id="PREC_precio2" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">Precio3: </label>
                                                                    <div class="input-group">
                                                                      <div class="input-group-prepend ">
                                                                          <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-timetable"></i></span>
                                                                      </div>
                                                                    <input type="number" min="0" class="form-control form-control-sm"  name="PREC_precio3"  id="PREC_precio3">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <br>
                                        <div class="modal-footer d-flex" style="background:#f5f5f5">
                                            <a href="{{route('productosIndex')}}"><button type="button" class="btn btn-primary" style="background-color: #bd3333;border-color:#bd3333; ">Cancelar</button></a>
                                            <button type="submit" class="btn btn-primary" style="background-color: #446e8c;">Guardar</button>
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

    </body>
</html>
