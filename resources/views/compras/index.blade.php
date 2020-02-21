@php
  use App\cliente_contacto;
  use App\cliente_direccion;
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
        @include('layouts.estilos')
        <link href="assets/libs/custombox/custombox.min.css" rel="stylesheet">

    </head>

    <body>
 <style>
 .custom-modal-title {
    background-color:#526f8c;
 }</style>
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

                                        <input  class=" col-md-3 form-control form-control-sm" type="number"  min="1" name="" value="1">
                                     </div>
                                    </div>
                                       </div>
                                    </div>
                                    </div>
                                   <!-- Modal -->
                                  <div id="custom-modal" class="modal-demo"  role="dialog" style="width: 1000px!important;bottom: 40px;">
                                    <button type="button" class="close" onclick="Custombox.modal.close();" style="top:10px">
                                        <span>&times;</span><span class="sr-only">Close</span>
                                    </button>
                                    <h5 class="custom-modal-title" style="padding: 10px; font-size: 15px">Agregar producto a la compra</h5>
                                    <div class="custom-modal-text text-left" style="background: ##526f8c; padding-bottom: 0px;    padding-top: 10px;">
                                       <div class="row">
                                           <div class="card-box col-md-7" style="background: #fff;left: 20px; padding-top: 10px;
                                           margin-bottom: 10px; border: 2px solid #e8e8e8;">

                                              <h5 style="font-size: 16px!important">Datos de articulo</h5>
                                              <div class="row">
                                                <div class="col-md-7 mb-2">
                                                    <div class="form-inline">


                                                        <label class="not-bold">Codigo:</label> &nbsp;


                                                        <div class="col-md-9">
                                                         <div class="input-group input-group-sm">
                                                            <input type="text" class="form-control form-control-sm">
                                                            <span class="input-group-append">
                                                              <button type="button" class="btn btn-info btn-flat btn-sm"><span class=" fa fa-search"> </span></button>
                                                            </span>
                                                          </div>
                                                        </div>



                                                     </div>
                                                    </div>
                                                    <div class="col-md-3 mb-2"  style="left:26px">
                                                        <button type="button" class="btn btn-block btn-light btn-sm" ><span class=" fa fa-plus-square"> </span> Nuevo</button></div>
                                                        <div class="col-md-12 mb-2">
                                                            <div class="form-inline">


                                                                <label class="" >Nombre:</label>&nbsp;&nbsp;&nbsp;




                                                                    <input type="text" style="background: #f2f3f5;" class="col-md-9 form-control form-control-sm" disabled>






                                                             </div>
                                                            </div>
                                                            <div class="col-md-6 mb-2">
                                                                <div class="form-inline">
                                                                    <label for="">Cantidad: </label>&nbsp;&nbsp;
                                                                    <input type="text" class="col-md-8 form-control form-control-sm">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-2">
                                                                <div class="form-inline">
                                                                    <label for="">Garantia: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <input type="text" class="col-md-5 form-control form-control-sm">&nbsp;&nbsp;
                                                                    <label for="">mes(es)</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 mb-2">
                                                                <div class="form-inline">
                                                                    <label for="">Costo: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <input type="text" class="col-md-7 form-control form-control-sm">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-7 mb-2">
                                                                <div class="form-inline">
                                                                    <label for="">Descuento: </label>&nbsp;&nbsp;
                                                                    <input type="text" class="col-md-6 form-control form-control-sm">
                                                                    <select class="form-control form-control-sm" name="" id="">&nbsp;
                                                                        <option value="">%</option>
                                                                        <option value="">S/</option>
                                                                        <option value="">$</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                    </div>
                                           </div>
                                           <div class="card-box col-md-4" style="background: #fff;left: 60px;padding-top: 10px; margin-bottom: 10px;border: 2px solid #e8e8e8;">
                                            <h5 style="font-size: 16px!important" class="text-center">Informacion de articulo</h5><br>
                                            <div class="col-md-12 mb-2 text-center">
                                              <div class="form-inline text-center">

                                                  <label for="">Categoria: </label>&nbsp;
                                                  <input type="text" style="background: #f2f3f5;" disabled class="col-md-8 form-control form-control-sm">
                                              </div>
                                          </div>
                                          <div class="col-md-12 mb-2 text-center">
                                              <div class="form-inline text-center">
                                                  <label class="text-center" for="">Marca: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                  <input type="text" style="background: #f2f3f5;" disabled class="col-md-8 form-control form-control-sm text-center">
                                              </div>
                                          </div>
                                          <div class="col-md-12 mb-2 text-center">
                                              <div class="form-inline text-center">
                                                  <label class="text-center" for="">Modelo: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                  <input type="text" style="background: #f2f3f5;" disabled class="col-md-8 form-control form-control-sm text-center">
                                              </div>
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
                                    <div class="card-body" style=" zoom:95%; padding-bottom: 10px;padding-top: 12px;border-right: solid 1px #dee2e6;border-left: solid 1px #dee2e6;border-bottom: solid 1px #dee2e6;  ">
                                        <div class="row">

                                             <div class="col-md-10 mb-2">
                                            <div class="form-inline">


                                                <label class="not-bold">Proveedor:</label> &nbsp;


                                                <div class="col-md-8">
                                                 <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control form-control-sm">
                                                    <span class="input-group-append">
                                                      <button type="button" class="btn btn-info btn-flat btn-sm"><span class=" fa fa-search"> </span></button>
                                                    </span>
                                                  </div>
                                                </div>



                                             </div>
                                            </div>

                                            <div class="col-md-2 mb-2" >
                                                <button type="button" class="btn btn-block btn-light btn-sm" ><span class=" fa fa-plus-square"> </span> Nuevo</button></div>

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
                                                  <input type="text" class="form-control form-control-sm " data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
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
                                                  <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
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
                                        <div class="col-md-6 mb-2" style="left: 100px">
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
                                        <div class="col-md-3 mb-2">
                                          <a href="#custom-modal" class="btn btn-light btn-rounded waves-effect btn-sm" style="width: 105%; right: 11px"  data-animation="fadein" data-plugin="custommodal" data-overlayColor="#38414a"><i class="mdi mdi-plus-circle mr-1"></i> Agregar producto a la compra</a>

                                        </div>


                                        <div class="col-md-12">
                                      <table class="table table-bordered table-sm">
                                        <thead>
                                          <tr style="background: #ebececc9;">
                                             <th >#</th>
                                            <th>Codigo</th>
                                            <th>Nombre</th>
                                            <th>Cantidad</th>
                                            <th>Unidad</th>
                                            <th>Costo U.</th>
                                            <th>Total</th>
                                            <th >Opciones</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr >
                                            <td  class="align-middle" style="padding: 4px;">1.</td>
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




    </body>
</html>
