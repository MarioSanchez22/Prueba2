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
  @include('layout.header')

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @extends('layout.menu')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Compras</h1>
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
    <section class="content">
    <div class="card ">
        <div class="card-header">
            <div class="row">
         <div class="col-md-9">
          <h7 class="">INGRESO DE COMPRAS</h7>
         </div>
         <div class="col-md-3">
          <div class="row">
            <div class="col-md-6">
            <h7 class="">Dias de credito: </h7> </div>
            <div class="col-md-6">
            <input  class="form-control form-control-sm" type="number"  min="1" name="" value="1"></div>
         </div>
           </div>
        </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="input-group mb-3">
                <div class="col-md-1">
                    <label class="not-bold">Proveedor:</label>
                </div>
                <div class="col-md-9">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control">
                        <span class="input-group-append">
                          <button type="button" class="btn btn-info btn-flat"><span class=" fa fa-search"> </span></button>
                        </span>
                      </div>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#modal-default"><span class=" fa fa-plus-square"> </span> Nuevo</button></div>
            </div>
            <div class="input-group mb-3">

                <div class="col-md-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" checked="">
                    <label class=" not-bold">Factura</label>
                  </div> </div>
                    <div class="col-md-4"><input class="form-control form-control-sm" type="text" ></div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                    </div>
                  </div>

            </div>
            <div class="input-group mb-3">

              <div class="col-md-1">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" checked="">
                  <label class=" not-bold">GRIA</label>
                </div> </div>
                  <div class="col-md-4"><input class="form-control form-control-sm" type="text" ></div>
                <div class="col-md-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                  </div>
                </div>

          </div>
          <div class="input-group mb-3">
          <table class="table table-bordered">
            <thead>                  
              <tr>
                <th >#</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Unidad</th>
                <th>Costo U.</th>
                <th>Total</th>
                <th ></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1.</td>
                <td>Update software</td>
                <td>
                  rrr
                </td>
                <td>rr</td>
                <td>rr</td>
                <td>rr</td>
                <td>rr</td>
                <td>h</td>
              </tr>
              <tr>
                <td>2.</td>
                <td>Clean database</td>
                <td>
                  d
                </td>
                <td>h</td>
                <td>h</td>
                <td>h</td>
                <td>h</td>
                <td>h</td>
              </tr>
              
            </tbody>
          </table>
          </div>
          <div class="input-group mb-3">
            <div class="col-md-1">
              <label class="not-bold">Almacen</label>
            </div>
            <div class="col-md-3">
              
              <select class="form-control form-control-sm">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
              </div>
          </div>
            
        </div>
          <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
          <br>
          <input class="form-control" type="text" placeholder="Default input">
          <br>
          <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
          <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
            </div>
          </div>
        </div>
        
        <!-- /.card-body -->
      </div>
      
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">



          <!-- ./col -->
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @extends('layout.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<style>.not-bold {font-weight:normal !important;display: inline-block;}</style>
</body>
</html>
