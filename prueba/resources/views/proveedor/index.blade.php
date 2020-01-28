@php
  use App\proveedor_contacto;
  use App\proveedor_cuenta;
@endphp

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.header')
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
 @extends('layouts.menu')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Proveedores</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <div class="col-md-2">
                    <button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#modal-default"><span class=" fa fa-user-plus"> </span>  Proveedor</button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>RUC</th>
                        <th>Razon social</th>
                        <th>Razon comercial</th>
                        <th>Estado</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Etiqueta</th>
                        <TH>       Opciones</TH>
                    </tr>
                    </thead>
                    <tbody>




                        @foreach ($proveedor as $proveedores)
                        @php
                        $contacto=proveedor_contacto::where('PROVE_id','=',$proveedores->PROVE_id)->get();
                        $cuenta=proveedor_cuenta::where('PROVE_id','=',$proveedores->PROVE_id)->get();
                        @endphp
                            <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$proveedores->PROVE_ruc}}</td>
                                    <td>{{$proveedores->PROVE_razon_social}}</td>
                                    <td>{{$contacto[0]->PROVECONT_descripcion}}</td>
                                    <td>{{$proveedores->PROVE_est}}</td>
                                    <td>{{$proveedores->PROVE_email}}</td>
                                    <td>{{$proveedores->PROVE_telefono}}</td>
                                    <td>{{$proveedores->PROVE_etiqueta}}</td>
                                    <td><button title="Ver" data-toggle="modal" data-target="#verAl" class="btn btn-success btn-minier btn-sm" ><span class="fa fa-eye"></span></button> <button title="Ver" data-toggle="modal" data-target="#verAl" class="btn btn-danger btn-minier btn-sm" ><span class="fa fa-trash"></span></button>   <button title="Ver" data-toggle="modal" data-target="#verAl" class="btn btn-default btn-minier btn-sm" ><span class="fa fa-edit"></span></button> </td>
                            </tr>
                         @endforeach


                    </tbody>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
                <div class="modal fade " id="modal-default" aria-hidden="true" style="display: none;">
                   <div class="modal-dialog modal-lg" style="width: 60%" >
                      <div class="modal-content">
                        <div class="modal-header" style=" padding-top: 5px; padding-bottom: 5px; ">
                          <h5 class="modal-title">Registrar proveedor</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                        <label for="">Datos de Expediente</label>
                        <div class="form-group row">
                            <h5  class="col-sm-3 col-form-label">Descripcion:</h5>
                            <div class="col-sm-10">
                              <input type="text" class="form-control form-control-sm" id="" placeholder="Descripcion">
                            </div>
                            <h5  class="col-sm-3 col-form-label">Subir archivo:</h5>
                            <form action=""></form>
                          </div>


                            <input type="hidden" name="_token" value="ITir8SUwIRvHYe6XefXJrkbbnRNpfp2blz33yfTw">
                            <div class="row">
                            <div class="col s12 m6">
                                <span style="color:#E6B31E;"> RUC: </span>
                                <input type="text" class="form-control" name="razon_social" required="">
                              </div>
                              <div class="col s12 m6">
                                <span style="color:#E6B31E;"> Razón Social: </span>
                                <input type="text" class="form-control" name="razon_social" required="">
                              </div>
                              <div class="col s12 m6">
                                <span style="color:#E6B31E;"> Razón Comercial: </span>
                                <input type="text" class="form-control" name="razon_social" required="">
                              </div>
                            </div> <br>
                            <div class="row">
                              <div class="col s12 m6">
                                <span style="color:#E6B31E;"> Responsable de la Empresa: </span>
                                <input type="text" class="form-control" name="responsable" required="">
                              </div>
                              <div class="col s12 m6">
                                <span style="color:#E6B31E;"> Correo Electrónico: </span>
                                <input type="email" class="form-control" name="correo" required="">
                              </div>
                            </div> <br>
                            <div class="row">
                                <div class="col s12 m6">
                                  <span style="color:#E6B31E;"> Usuario: </span>
                                  <input type="text" class="form-control" name="usuario" required="">
                                </div>
                                <div class="col s12 m6">
                                  <span style="color:#E6B31E;"> Contraseña: </span>
                                  <input type="password" class="form-control" name="password" required="">
                                </div>
                            </div><br>
                            <div>
                            <div class="row">
                                <div class="col s12 m5">
                                    <span style="color:#E6B31E;"> Regimen: </span>
                                    <div class="select-wrapper"><select class="select-dropdown dropdown-trigger" type="text" readonly="true" data-target="select-options-716a253e-eca1-32ef-6446-390672b11e79"><ul id="select-options-716a253e-eca1-32ef-6446-390672b11e79" class="dropdown-content select-dropdown" tabindex="0"><li id="select-options-716a253e-eca1-32ef-6446-390672b11e790" tabindex="0" class="selected"><span>Seleccione</span></li><li id="select-options-716a253e-eca1-32ef-6446-390672b11e791" tabindex="0"><span>R. GENERAL</span></li><li id="select-options-716a253e-eca1-32ef-6446-390672b11e792" tabindex="0"><span>R. ESPECIAL</span></li><li id="select-options-716a253e-eca1-32ef-6446-390672b11e793" tabindex="0"><span>R. 4º CATEGORIA</span></li><li id="select-options-716a253e-eca1-32ef-6446-390672b11e794" tabindex="0"><span>NUEVO RUS</span></li><li id="select-options-716a253e-eca1-32ef-6446-390672b11e795" tabindex="0"><span>PLAME</span></li><li id="select-options-716a253e-eca1-32ef-6446-390672b11e796" tabindex="0"><span>MYPE TRIBUTARIO</span></li><li id="select-options-716a253e-eca1-32ef-6446-390672b11e797" tabindex="0"><span>OSCE</span></li><li id="select-options-716a253e-eca1-32ef-6446-390672b11e798" tabindex="0"><span>SENCICO</span></li></ul><svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg><select name="regimen_tipo" required="" tabindex="-1">
                                      <option value="">Seleccione</option>

                                      </select></div>
                                  </div>
                                  <div class="col s12 m7">
                                      <span style="color:#E6B31E;"> Personal: </span>
                                      <div class="select-wrapper">
                                      <select class="select-dropdown dropdown-trigger" type="text" readonly="true" data-target="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df"><ul id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df" class="dropdown-content select-dropdown" tabindex="0"><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df0" tabindex="0" class="selected"><span>Seleccione</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df1" tabindex="0"><span>Daniel Alexander Asencio Ortiz</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df2" tabindex="0"><span>Hugo Gracia</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df3" tabindex="0"><span>Hugo Gracia</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df4" tabindex="0"><span>VILLACORTA RAZON, JIMMY PAUL</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df5" tabindex="0"><span>MIO VASQUEZ, PAMELA KATHERIN</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df6" tabindex="0"><span>ROJAS CHINCHAY, TANIA</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df7" tabindex="0"><span>CHUQUILIN BAZAN, YLCIAS JESUS</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df8" tabindex="0"><span>VILLANUEVA GARCIA, CINDY DAYANA</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df9" tabindex="0"><span>BOLAÑOS CACERES, HECTOR</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df10" tabindex="0"><span>BOLAÑOS CACERES, HECTOR</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df11" tabindex="0"><span>VILLACORTA MOZO, HAROLD ANTHONY</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df12" tabindex="0"><span>MUDARRA ZEVALLOS, LUIGI ANTONNY</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df13" tabindex="0"><span>ANGULO DEZA, PEDRO DEIVY</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df14" tabindex="0"><span>NIETO MARQUINA, ANGIE ANAIS</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df15" tabindex="0"><span>CRUZ ZAVALA, LESLY ESTEFANY</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df16" tabindex="0"><span>PEREDA MENDEZ, HEINNER CARLOS</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df17" tabindex="0"><span>MENDEZ CHAVEZ, JEFERSON</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df18" tabindex="0"><span>DE LA CRUZ RAZON, MARVIN PAULO HERNESTO</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df19" tabindex="0"><span>VELARDE JUAREZ, KELVER GLODER</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df20" tabindex="0"><span>BOLAÑOS CACERES, HECTOR</span></li><li id="select-options-e6deeaf3-c1a2-b9b8-b8a5-9b6f17d7d9df21" tabindex="0"><span>administrador general</span></li></ul><svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg><select name="personal_id" required="" class="select2" tabindex="-1">
                                        <option value="">Seleccione</option>
                                      </select></div>
                                    </div>
                              </div> </div><br>
                              <div class="row">
                                  <div class="col s12 m4">
                                    <span style="color:#E6B31E;"> RUC: </span>
                                    <input type="text" class="form-control" name="ruc" maxlength="11" required="">
                                  </div>
                                  <div class="col s12 m4">
                                    <span style="color:#E6B31E;"> Usuario SUNAT: </span>
                                    <input type="text" class="form-control" name="usuario_sunat" required="">
                                  </div>
                                  <div class="col s12 m4">
                                      <span style="color: #E6B31E;"> Contraseña SUNAT: </span>
                                      <input type="text" class="form-control" name="password_sunat" required="">
                                  </div>
                                </div> <br>
                            <div class="row">
                              <div class="col s12 m5">
                                <div class="file-field input-field">
                                  <div class="btn">
                                      <span><i class="material-icons">
                                        cloud_upload
                                        </i></span>
                                      <input type="file" class="form-control" name="dni_empresa[]" multiple="">
                                  </div>
                                  <div class="file-path-wrapper">
                                      <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                  </div>
                              </div>
                              </div>
                              <div class="col s12 m7">

                                <div id="div_100">
                                  <span style="color:#E6B31E;"> Teléfono(s): </span><br>
                                  <label style="color:#E6B31E;">Compañía: </label>
                                      <input type="text" name="compania_cliente[]" id="compania_cliente" style="width:120px;" required=""> <label style="color:#E6B31E;">
                                          Número: </label> <input type="number" name="telefono_cliente[]" style="width:110px;margin-right: 2%;">
                                  <input class=" btn btn-danger bt_plus2" id="100" type="button" value="+">
                                  <div class="error_form"></div>
                              </div>
                              </div>
                            </div> <br>
                            <div class="row">

                              <div class="col s12 m4">
                                  <span style="color:#E6B31E;"> N°Cuenta: </span>
                              </div>
                              <div class="col s12 m4">
                                  <span style="color:#E6B31E;"> DNI/Usuario: </span>
                              </div>
                              <div class="col s12 m4">
                                  <span style="color:#E6B31E;"> Clave: </span>
                              </div>


                              <div class="col s12 m12" id="div_200">

                                  <input type="text" name="cuenta_cliente2[]" id="cuenta_cliente2" style="width:25%;margin-right: 9%; " required="">
                                  <input type="number" name="dni_cliente2[]" id="dni_cliente2" style="width:25%; margin-right: 9%;" required="">
                                  <input type="number" name="clave_cliente2[]" id="clave_cliente2" style="width:20%; margin-right: 1%" required="">
                                  <input class=" btn btn-danger bt_plus3" id="200" type="button" value="+">

                                  <div class="error_form">
                                  </div>
                              </div>
                          </div> <br>
                            <div class="row">
                                <div class="col s12 m12">
                                  <span style="color: #E6B31E;"> Observaciones: </span><br>
                                  <textarea name="detalle" id="" cols="90" rows="12" class="form-control"></textarea>
                                </div>
                              </div> <br>
                            <div align="center">
                            <button type="submit" class="btn btn-danger">Guardar Cliente</button>
                            </div>
                        </form>
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

<!-- /.footer-->
@extends('layouts.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->


  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>


<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>


<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>

<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>


<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

</body>
</html>
