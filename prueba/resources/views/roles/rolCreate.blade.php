

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
                                <h4 class="page-title">REGISTRO DE ROLES Y PERMISOS</h4>
                            </div>
                        </div>
                    </div>

                    <div  class="row bounceInUp animated">
                        <div class="col-md-12">
                          <div class="card" style=" margin-bottom: 0px;   ">

                            <!-- /.card-header -->
                            <div class="card-body col-md-12" style="padding-left: 0px; padding-right: 0px;">
                                <div class="row" >
                                    <form action=" {{route('rolStore')}} " method="POST" enctype="multipart/form-data" class="col-md-12">
                                        {{ csrf_field()}}
                                        <div class="card-box " style=" padding-top: 0px; margin-bottom: 0px;padding-bottom: 5px;">
                                            <ul class="nav nav-tabs" style="background:#f5f5f5">
                                                <li class="nav-item">
                                                    <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                        <i class="mdi mdi-database-edit"></i> Roles y Permisos
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content ">
                                                <div class="tab-pane show active " id="home">
                                                    <div class="row">
                                                        <div class=" col-md-6 ">
                                                          <label for="" >Usuarios:</label>
                                                            <select class="selectpicker form-control  form-control-sm" data-style="btn-light"  name="USER_id"  style="background:#f5f5f5">
                                                                <option value="">USUARIOS</option>
                                                                @foreach ($usuario as $usuarios)
                                                              <option value="{{$usuarios->id}}">{{$usuarios->email}}</option>
                                                                @endforeach
                                                                <!--<option selected type="" value="" disabled selected >[Seleccionar modo de pago]</option>-->
                                                              </select>
                                                          </div>
                                                          <div class=" col-md-6 ">
                                                            <label for="" >Roles:</label>
                                                              <select class="selectpicker form-control  form-control-sm" data-style="btn-light"  name="ROL_id"  style="background:#f5f5f5">
                                                                <option value="">ROLES</option>
                                                                @foreach ($rol as $roles)
                                                                <option value="{{$roles->ROL_id}}">{{$roles->ROL_descripcion}}</option>
                                                                  @endforeach
                                                                  <!--<option selected type="" value="" disabled selected >[Seleccionar modo de pago]</option>-->
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                           <div class="col-md-6">
                                                                @foreach ($menu as $menus)
                                                                <div class="form-group">
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-checkbox mb-2">
                                                                        <input type="checkbox" class="custom-control-input" name="menu[]" id="menu{{$menus->MENU_id}}" value="{{$menus->MENU_descripcion}}">
                                                                        <label class="custom-control-label" for="menu{{$menus->MENU_id}}" >{{$menus->MENU_descripcion}}</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    @foreach ($submenu as $submenus)
                                                                        @if ($menus->MENU_id==$submenus->MENU_id)
                                                                        <div class="form-group" style="margin-left: 5%;">
                                                                            <div class="col-auto">
                                                                                <div class="custom-control custom-checkbox mb-2">
                                                                                    <input type="checkbox" class="custom-control-input" name="submenu[]" id="submenu{{$submenus->SUBMENU_id}}" value="{{$submenus->SUBMENU_descripcion}}">
                                                                                <label class="custom-control-label"  for="submenu{{$submenus->SUBMENU_id}}">{{$submenus->SUBMENU_descripcion}}</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                 <br>
                                        <div class="modal-footer d-flex" style="background:#f5f5f5">
                                        <button type="submit" class="btn btn-primary" style="background-color: #446e8c;">Save changes</button>
                                      </div>
                                        </div>
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
