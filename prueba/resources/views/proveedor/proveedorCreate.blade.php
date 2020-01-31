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
                                                        <div class="form-inline ">
                                                        <div class=" form-group ">
                                                           <div class="col-md-6"  style="padding-left: 6px;"><label for="" style=" font-size:15px">Tipo de proveedor:</label></div>


                                                           <div class="col-md-6">
                                                            <select class="form-control  form-control-sm" id="TipoP" name="TipoP" style="width: 150%">
                                                                <option value="0">Empresa</option>
                                                                <option value="1">Persona natural</option>
                                                                <!--<option selected type="" value="" disabled selected >[Seleccionar modo de pago]</option>-->
                                                              </select>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class=" row col-md-12" id="verD" style="top:18px">
                                                         
                                                        </div>

                                                    




                                                </div>
                                                </div>
                                                <div class="tab-pane " id="profile">
                                                <div class="row">
                                                    <div class=" col-md-12 form-inline ">
                                                        <div class=" form-group ">
                                                           <div class="col-md-6"  style="padding-left: 5px;"><label for="" style=" ">Descripcion:</label></div>


                                                           <div class="col-md-6">
                                                            <input type="text" class="form-control form-control-sm" required  placeholder="RUC de empresa" name="PROVE_rr">
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
                $.ajax({
                   url:"/proveedor/datos/"+0,
                   method:"GET",
                   success:function(data){

                        $('#verD').html(data);
                   }
              });
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
        });
        </script>
    </body>
</html>
