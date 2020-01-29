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

  <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: right;
      padding-right: .75rem;
    }

    .color-palette.disabled {
      text-align: center;
      padding-right: 0;
      display: block;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette.disabled span {
      display: block;
      text-align: left;
      padding-left: .75rem;
    }

    .color-palette-box h4 {
      position: absolute;
      left: 1.25rem;
      margin-top: .75rem;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style>
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
              <div class="modal fade" id="modal-default">
                <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header" style=" padding-top: 5px; padding-bottom: 5px; background-color: #143d63; color:aliceblue ">
                          <h5 class="modal-title">Registrar Proveedor</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <blockquote class="quote-secondary">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Tipo de proveedor</label>
                                        <select class="form-control  form-control-sm" id="TipoP" name="TipoP">
                                            <option value="0">Empresa</option>
                                            <option value="1">Persona natural</option>
                                            <!--<option selected type="" value="" disabled selected >[Seleccionar modo de pago]</option>-->
                                          </select>
                                    </div>
                                    <div class="col-md-12" id="verD" style="top:7px">

                                    </div>




                            </div>
                        </blockquote>
                            </div>
                        <div class="col-md-6">
                            <div id="accordion">
                            <div class="card card-danger">
                                <div class="card-header">
                                  <h4 class="card-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                      Collapsible Group Danger
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                  <div class="card-body">
                                    <blockquote class="quote-secondary">
                                        <label for="">Datos de Expediente</label> <br>
                                        <div class="row ">
                                           <div  class="col-md-3" >
                                            <label class="control-label" style="display: inline-block;
                                           ">Descripcion: </label></div>
                                            <div class="col-md-9">
                                              <input type="text" class="form-control form-control-sm" id="" placeholder="Descripcion">
                                            </div> <br><br>
                                            <div  class="col-md-3" style=" display: inline-block;">
                                              Subir archivo:</div>
                                              <div class="input-group">
                                                <div class="custom-file">
                                                  <input type="file" class="custom-file-input form-control-sm" id="exampleInputFile">
                                                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>

                                              </div>
                                              <br><br><div  class="col-md-2" style=" display: inline-block;">
                                                Observacion:</div>
                                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                                <div id="div_1">
                                                    <span> Teléfono(s): </span><br>
                                                    <label>Compañía: </label>
                                                        <input type="text" name="compania[]" id="compania" style="width:120px;" required=""> <label>
                                                            Número: </label> <input type="number" name="telefono[]" style="width:110px;">
                                                    <input class=" btn btn-danger bt_plus" id="1" type="button" value="+">
                                                    <div class="error_form"></div>
                                                 </div>
                                          </blockquote>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>

                         </div>





                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div></form>
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
<script>
    $(document).ready(function() {
  //ACA le asigno el evento click a cada boton de la clase bt_plus y llamo a la funcion addField
  $(".bt_plus").each(function (el){
  $(this).bind("click",addField);
  });
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
  $newClone.children("input").eq(0).attr("id",'compania'+newID).val('');
  //Borro el valor del segundo campo input(este caso es el campo de cantidad)
  $newClone.children("input").eq(1).val('');
  //Asigno nuevo id al boton
  $newClone.children("input").eq(2).attr("id",newID)
  //Inserto el div clonado y modificado despues del div original
  $newClone.insertAfter($('#div_'+clickID));
  //Cambio el signo "+" por el signo "-" y le quito el evento addfield
  //$("#"+clickID-1).remove();
  $("#"+clickID).val('-').unbind("click",addField);
  //Ahora le asigno el evento delRow para que borre la fial en caso de hacer click
  $("#"+clickID).bind("click",delRow);
  }
  function delRow() {
  // Funcion que destruye el elemento actual una vez echo el click
  $(this).parent('div').remove();
  }
  </script>

<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>

<script src="{{asset('plugins/dropzone.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
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
<script>
    $(document).ready(function() {

$('#TipoP').change(function(){
      var tipoPr= $(this).val();

      $.ajax({
           url:"datos/"+tipoPr,
           method:"GET",
           success:function(data){
              ;
                $('#verD').html(data);
           }
      });
 });
});
</script>

</body>
</html>
