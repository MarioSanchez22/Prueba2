

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
         <style>
        .labelEstilo{
        color: #2e667b;
        font-weight: 705;
        font-family:Arial, Helvetica, sans-serif;
        }
         </style>

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
                            <h4 class="page-title">PROVEEDOR: {{$proveedor->PROVE_razon_social}}</h4>
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
                                    {{ csrf_field()}}
                                        <div class="card-box " style=" padding-top: 0px; margin-bottom: 0px;padding-bottom: 5px;">
                                            <ul class="nav nav-tabs" style="background:#f5f5f5">
                                                <li class="nav-item">
                                                    <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                       Datos de Proveedor
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content ">
                                                <div class="tab-pane show active " id="home">
                                                    <div class="row">
                                                        <div class=" col-md-3">
                                                          <label class="labelEstilo" for="" >Tipo de proveedor:</label>
                                                        <input  type="text" readonly="" class="form-control-plaintext form-control-sm" id="example-static" value="{{$tipo[0]->TIPPROVE_descripcion}}" >
                                                          </div>
                                                       
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="labelEstilo">RUC: </label>
                                                                    <div class="input-group">
                                                                    <input  type="text" readonly="" class="form-control-plaintext form-control-sm" id="example-static" value="{{$proveedor->PROVE_ruc }}" >
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            @if($tipo[0]->TIPPROVE_id==1)
                                                                <label class="labelEstilo" for="PROVE_razon_social">
                                                                Razon social
                                                                </label>
                                                            @else
                                                                <label class="labelEstilo" for="PROVE_razon_social">
                                                                Nombre:
                                                                </label>
                                                            @endif
                                                            <input type="text" readonly="" class="form-control-plaintext form-control-sm" value="{{$proveedor->PROVE_razon_social }}"> </div>
                                                        </div>
                                                        @if($tipo[0]->TIPPROVE_id==1)
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                            <label class="control-label">Razon comercial: </label>
                                                            <input type="text" class="form-control form-control-sm" placeholder="Razon comercial" name="PROVE_razon_comercial" id="PROVE_razon_comercial" value="{{$proveedor->PROVE_razon_comercial }}"> </div>
                                                        </div>
                                                        @else
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Tipo de documento: </label>
                                                            <input  type="text" readonly="" class="form-control-plaintext form-control-sm" id="example-static" value="{{$proveedor->PROVEDOC_descripcion }}" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="control-label" for="PROVE_dni">
                                                                Documento
                                                            </label>
                                                            <input  type="text" readonly="" class="form-control-plaintext form-control-sm" id="example-static" value="{{$proveedor->PROVE_dni }}" >
                                                        </div>

                                                        @endif
                                                    </div>




                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                            <label class="control-label">Dias de crédito: </label>
                                                            <input type="number" class="form-control form-control-sm" required min="1" placeholder="Dias de crédito" name="PROVE_dias_credito" value="{{$proveedor->PROVE_dias_credito }}"> </div>
                                                        </div>

                                                        <div class="col-md-12" style=" padding-bottom: 18px;">
                                                            <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="labelEstilo" for="">Origen de proveedor</label>
                                                            <input class="form-control form-control-sm" type="text" value="{{$proveedor->PROVE_origen }}">
                                                          </div>
                                                          <div class="col-md-4">
                                                            <label class="labelEstilo" for="">País</label>
                                                            <input class="form-control form-control-sm" type="text" value="{{$proveedor->PROVE_pais }}">
                                                          </div>
                                                          <div class="col-md-4">
                                                            <label class="labelEstilo" for="">Región</label>
                                                            <input class="form-control form-control-sm" type="text" value="{{$proveedor->PROVE_region }}">
                                                        </div>

                                                        </div></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label">Direccion: </label>
                                                              <input type="text" class="form-control form-control-sm"  name="PROVE_direccion"  id="PROVE_direccion" value="{{$proveedor->PROVE_direccion }}"> </div>
                                                           </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label" for="PROVE_telefono">Telefono: </label>
                                                              <input type="text" class="form-control form-control-sm" required placeholder="Telefono" name="PROVE_telefono" value="{{$proveedor->PROVE_telefono }}"> </div>
                                                           </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label" for="PROVE_web">Web: </label>
                                                              <input type="text" class="form-control form-control-sm"  placeholder="Direccion web" name="PROVE_web" value="{{$proveedor->PROVE_web }}"> </div>
                                                           </div>
                                                           <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="control-label" for="PROVE_email" >Email: </label>
                                                              <input type="text" class="form-control form-control-sm" required  placeholder="Email" name="PROVE_email" value="{{$proveedor->PROVE_email }}"> </div>
                                                           </div>
                                                           <div class="col-md-12">
                                                                <div class="form-group">
                                                                <label class="control-label">Etiquetas:</label>
                                                                <textarea class="form-control" id="example-textarea" rows="3" name="PROVE_etiqueta">{{$proveedor->PROVE_etiqueta }}</textarea></div>
                                                                </div>
                                                    </div>
                                                </div>


                                                    @if( count($expediente)>=1)
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="PROEXP_descripcion" style=" ">Descripcion:</label>
                                                                <input type="text" class="form-control "  value={{$expediente[0]->PROEXP_descripcion}}>
                                                            </div>
                                                            <br>
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <label for="PROEXP_descripcion" style=" ">Archivo:</label>
                                                                </div>
                                                                <div class="row">
                                                                    <a href="{{route('proveedorExpedienteDownload',['expediente'=>$expediente[0]])}}">
                                                                        <label for="PROEXP_descripcion" style=" "><i class=' mdi mdi-file-download' style='font-size: xx-large;'></i>{{$expediente[0]->PROEXP_ruta}}</label>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Observacion: </label>
                                                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    @endif
                                                    @if( count($contacto)>=1)
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
                                                        @foreach ($contacto as $contactos)
                                                        <div id="div_100" class="row" style="margin-bottom: 2%;">
                                                        <input type="text"  id="PROVECONT_descripcion"  class="form-control form-control-sm col-sm-2" style="margin-left: 2%;" value="{{$contactos->PROVECONT_descripcion}}">
                                                            <span class="col-sm-1"></span>
                                                            <input type="text"  id="PROVECONT_nombre"  class="form-control form-control-sm col-sm-2" value="{{$contactos->PROVECONT_nombre}}">
                                                            <span class="col-sm-1"></span>
                                                            <input type="text"  id="PROVECONT_telefono"  class="form-control form-control-sm col-sm-2" value="{{$contactos->PROVECONT_telefono}}">
                                                            <span class="col-sm-1"></span>
                                                            <input type="email"  id="PROVECONT_email" class=" form-control form-control-sm col-sm-2" style="margin-right: 2%;" value="{{$contactos->PROVECONT_email}}">
                                                        </div>
                                                        @endforeach
                                                </div> <br>
                                                @endif
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
