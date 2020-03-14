@php
  use App\cliente_contacto;
  use App\proveedor;
  use App\compro_item;
  use App\producto;
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

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            @include('layouts.header')

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">


                @include('layouts.menu')

            </div>
            @include('layouts._preReload')
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
                        <div class="col-sm-10 col-md-10 col-lg-10 form-inline">
                         {{--    <div class="row icons-list-demo" style="color:#373f5f">
                                <div class="col-sm-7 col-md-7 col-lg-4" style="font-size: 19px;font-weight: bold;padding-top: 5px; padding-left: 0px">
                                    <i class="fas fas-24px fas fa-cart-plus" style=" margin-right: -6px;color:#373f5f"></i>Lista de Compras
                                </div>

                        </div> --}}

                        <i class="mdi mdi-48px mdi-cart-outline" style="font-family:'Roboto',sans-serif;color:#373f5f"></i> <h3 style="color:#373f5f;font-size: 28px">Lista de Compras</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                          <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body"  >
                                <div class="card">

                                    <div class="card-box " style="padding-bottom: 8px; padding-top: 8px; margin-bottom: 0px; background: #566675; color:#fff">

                                        <div class="row">
                                        <div class="col-md-3">
                                            <form action="" class="form-inline">
                                            <div class="form-group">
                                            <label class="control-label" >Proveedor:   </label>&nbsp&nbsp
                                             <input type="text"  id="CLIE_ruc" name="CLIE_ruc" class="form-control form-control-sm">
                                            </div>
                                            </form>
                                        </div>
                                        <div class="col-md-4">
                                            <form action="" class="form-inline">
                                            <div class="form-group">
                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label class="control-label" >Almacen: </label>&nbsp&nbsp
                                           <select class="form-control  form-control-sm" name="TIPPROVE_id" id="TIPPROVE_id"> <option value="0">[seleccione]</option> <option value="1">Empresa</option> <option value="2">Persona Natural</option></select>
                                            </div>
                                        </form>
                                        </div>
                                        <div class="col-md-3">
                                            <form action="" class="form-inline">
                                            <div class="form-group">
                                            <label class="control-label" >Producto: </label> &nbsp&nbsp
                                             <input type="text" id="USER_id" name="USER_id" class="form-control form-control-sm">
                                            </div>
                                            </form>
                                        </div>
                                        <div class="col-md-2" style="padding-left: 10%" >
                                             <button class="btn  btn-blue btn-sm"  id="buscar" name="buscar"><i class="fe-search" style="font-size:16px"></i>  </button>

                                            </div>
                                        </div>

                                      </div>
                                </div>

                                <div id="tablageneral" class="">
                                <table   data-toggle="table"
                                data-page-size="4"
                                data-buttons-class="xs btn-light"
                                data-pagination="true" class="table-bordered ">
                                <thead class="" style="color: #2e4965;
                                background-color: #e4e4e4!important;
                            }
                            ">
                                <tr>
                                <th data-field="state" >#</th>
                                <th data-field="id">Proveedor</th>
                                <th data-field="iEd" >Dias credito</th>
                                <th data-field="name">Almacen</th>

                                <th data-field="amRount">Total</th>

                                <th data-field="amuuTount">Productos</th>
                                <th data-field="user-status">Estado</th>
                                <th data-field="amouWnt">Opciones</th>
                                </tr>
                                </thead>
                                <tbody>

                                  @foreach ($compra_p as $compra_ps)
                                  @php
                                  $proveedor=proveedor::where('PROVE_id','=',$compra_ps->PROVE_id)->get();
                                  $productoCom=compro_item::where('COMPRO_id','=',$compra_ps->COMPRO_id)->get();

                              @endphp

                                        <tr>
                                                <td>{{$loop->index+1}}</td>
                                                <td>{{$proveedor[0]->PROVE_razon_social}}

                                                </td>
                                                 <td> {{$compra_ps->COMPRO_diasC}}</td>

                                                <td>{{$compra_ps->COMPRO_almacen}}</td>

                                                <td>{{$compra_ps->COMPRO_total}}</td>



                                                <td>
                                                    @foreach ( $productoCom as $item)
                                                    @php
                                                    $producto=producto::where('PRO_id','=',$item->PRO_id)->get();
                                                    @endphp

                                                          <li>{{$producto[0]->PRO_nombre}}</li>
                                                     @endforeach
                                                   </td>


                                                <td>

                                                        <span class="badge bg-soft-success text-success shadow-none">Activo</span>

                                                    </td>
                                                    <td class="text-center" >
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                                <i class=" mdi mdi-settings m-0 text-muted h3"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="" class="dropdown-item" title="Ver"> <i class="mdi mdi-eye"></i> Ver</a>
                                                                 <a href="" class="dropdown-item" title="Editar"> <i class="mdi mdi-square-edit-outline"></i> Editar</a>


                                                            </div>
                                                        </div>


                                                    </td>


                                                </tr>
                                    @endforeach
                                    </tbody>
                                    </table>
                                    </div>

     <!-- Bootstrap Tables js -->

                                <div id ="tabla1" >

                                </div>


                    </div>
                       <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
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


@include('layouts.scripts')





    </body>
</html>
