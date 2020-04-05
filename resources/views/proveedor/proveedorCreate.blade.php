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
          <!-- App favicon -->
   <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

   <!-- App css -->
     <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

   <link href="{{asset('assets/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />


    </head>

    <body>
        @include('layouts._preReload')
        <!-- Begin page -->
        <div id="wrapper">

            @include('layouts.header')

            <!-- ========== Left Sidebar Start ========== -->
           


                @include('layouts.menu')

         
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
                                                        <i class="mdi mdi-database-edit"></i> Datos de Proveedor
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="#messages" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                        <i class="mdi mdi-contacts"></i>     Contacto de Proveedor
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#cuentas" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                        <i class="mdi mdi-account-card-details"></i>     Cuentas de Proveedor
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#profile" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                                        <i class="mdi mdi-checkbox-multiple-blank-outline"></i>  Expediente de Proveedor
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content ">
                                                <div class="tab-pane show active " id="home">
                                                    <div class="row">


                                                        <div class=" col-md-6 ">

                                                          <label for="" >Tipo de proveedor:</label>
                                                            <select class="selectpicker form-control  form-control-sm" data-style="btn-light" id="TipoP" name="TIPPROVE_id"  style="background:#f5f5f5">
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

                                                              <input type="text" class="form-control form-control-sm"   placeholder="RUC de empresa" name="PROVE_ruc" id="PROVE_ruc">
                                                                <div  id="cargarRuc" style="display:none"> <button class="btn btn-info btn-sm" type="button"  >
                                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="sr-only"></span>
                                                            </button></div>


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
                                                              <label class="control-label">Dirección: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-bank-transfer-in"></i></span>
                                                                </div>
                                                              <input type="text" class="form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion" placeholder="Dirección"> </div>
                                                           </div></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label" for="PROVE_telefono">Teléfono: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-phone mr-1"></i></span>
                                                                </div> <input type="text" class="form-control form-control-sm" required placeholder="Telefono" name="PROVE_telefono" placeholder="Teléfono"> </div>
                                                           </div></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label" for="PROVE_web">Web: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-web mr-1"></i></span>
                                                                </div> <input type="text" class="form-control form-control-sm"  placeholder="Dirección web" name="PROVE_web"> </div>
                                                           </div></div>
                                                           <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label" for="PROVE_email" >Email: </label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend ">
                                                                    <span class="input-group-text form-control-sm" id="basic-addon1" style="color:#a9a9a9"><i class="mdi mdi-email mr-1"></i></span>
                                                                </div>  <input type="text" class="form-control form-control-sm" required  placeholder="Email" name="PROVE_email"> </div>
                                                           </div></div>
                                                           <div class="col-md-12">
                                                            <div class="form-group">
                                                              <label class="control-label">Etiquetas: </label>
                                                              <textarea class="form-control" id="example-textarea" rows="3" name="PROVE_etiqueta"></textarea></div>
                                                           </div>
                                                </div>
                                                </div>
                                                <div class="tab-pane " id="profile">
                                                <div class="row">

                                                        <div class="col-md-6">
                                                           <label for="PROEXP_descripcion" style=" ">Descripcion:</label>

                                                            <input type="text" class="form-control "   placeholder="Describa el archivo" name="PROEXP_descripcion">

                                                            </div>

                                                     <br>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <label class="control-label" for="file">Subir archivo: </label>
                                                            <div class="input-group">
                                                              <div class="custom-file">
                                                                <input type="file" class="custom-file-input form-control-sm" id="exampleInputFile" name="file">
                                                                <label class="custom-file-label form-control-sm" for="exampleInputFile">Choose file</label>
                                                              </div>
                                                            </div>
                                                    </div>   </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                          <label class="control-label">Observacion: </label>
                                                          <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea> </div>
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
                                                            <input type="text" name="PROVECONT_descripcion[]" id="PROVECONT_descripcion"  class="form-control form-control-sm col-sm-2" style="margin-left: 2%;">
                                                            <span class="col-sm-1"></span>
                                                            <input type="text" name="PROVECONT_nombre[]" id="PROVECONT_nombre"  class="form-control form-control-sm col-sm-2">
                                                            <span class="col-sm-1"></span>
                                                            <input type="number" name="PROVECONT_telefono[]" id="PROVECONT_telefono"  class="form-control form-control-sm col-sm-2">
                                                            <span class="col-sm-1"></span>
                                                            <input type="email" name="PROVECONT_email[]"  id="PROVECONT_email" class=" form-control form-control-sm col-sm-2" style="margin-right: 2%;">

                                                            <!--<input class="btn btn-primary bt_plus" id="100" type="button" value="+">-->
                                                            <button class="btn btn-primary bt_plus" id="100" type="button"  style="padding: 4px 8px; background-color: #446e8c; border-Color:#04233a;"><i class="fe-phone-forwarded" style="width:20px; height:20px;" ></i></button>
                                                            <div class="error_form"></div>
                                                        </div>
                                                </div>
                                                <div class="tab-pane " id="cuentas">
                                                    <div class="row">
                                                    <div class="col-sm-12">
                                                    <p>Cuenta(s):</p>   </div>
                                                    </div>
                                                    <div class="row">

                                                    <div class="col-sm-2"><label >Beneficiario: </label></div>
                                                    <span class="col-sm-1"></span>
                                                    <div class="col-sm-2"><label >Cuenta: </label></div>
                                                    <span class="col-sm-1"></span>
                                                    <div class="col-sm-2"><label >Observacion: </label></div>


                                                    </div>
                                                    <div id="div_300" class="row" style="margin-bottom: 2%;">
                                                        <input type="text" name="PROVECU_beneficiario[]" id="PROVECU_beneficiario"  class="form-control form-control-sm col-sm-2" style="margin-left: 2%;">
                                                        <span class="col-sm-1"></span>
                                                        <input type="text" name="PROVECU_cuenta[]" id="PROVECU_cuenta"  class="form-control form-control-sm col-sm-2">
                                                        <span class="col-sm-1"></span>
                                                        <input type="number" name="PROVECU_observacion[]" id="PROVECU_observacion"  class="form-control form-control-sm col-sm-2">
                                                        <span class="col-sm-1"></span>
                                                        <!--<input class="btn btn-primary bt_plus" id="100" type="button" value="+">-->
                                                        <button class="btn btn-primary bt_plus" id="300" type="button"  style="padding: 4px 8px; background-color: #446e8c; border-Color:#04233a;"><i class="fe-phone-forwarded" style="width:20px; height:20px;" ></i></button>
                                                        <div class="error_form"></div>
                                                    </div>
                                            </div>
                                                <br>
                                        <div class="modal-footer d-flex" style="background:#f5f5f5">
                                        <button type="submit" class="btn btn-primary" id="guardaP" style="background-color: #446e8c;">Save changes</button>
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
 

        <script src="{{asset('assets/js/vendor.min.js')}}"></script>
        <!-- App js-->
        <script src="{{asset('assets/js/app.min.js')}}"></script>
        <script src="{{asset('assets/libs/select2/select2.min.js')}}"></script>
   <script src="{{asset('assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
       
        <script src="{{asset('assets/js/proveedor.js')}}"></script>




    </body>
</html>
