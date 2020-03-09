<script src="{{asset('assets/js/app.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
<!-- third party js ends -->
<!-- Datatables init -->
<script src="assets/js/pages/datatables.init.js"></script>


<table id="basic-datatable" class="table dt-responsive nowrap"  style=" font-size: 13px; border-collapse: collapse;border-left: solid 1px #dee2e6;border-right: solid 1px #dee2e6;border-bottom:solid 1px #dee2e6 ">
    <thead class="thead-light">
        <tr  style=" text-align: center;">
            <th rowspan="2"  class="align-middle" style="padding: 3px;border-right: solid 1px #dee2e6">#</th>
            <th rowspan="2"  class="align-middle" style="padding: 3px;border-right: solid 1px #dee2e6">Código</th>
            <th rowspan="2" class="align-middle" style="padding: 3px;border-right: solid 1px #dee2e6" >Categoría</th>
            <th colspan="3"  style="padding: 3px;">Ganancia</th>
            <th rowspan="2" class="align-middle" style="padding: 3px;border-left: solid 1px #dee2e6"> Descuento max</th>
            <th rowspan="2" class="align-middle" style="padding: 3px;border-left: solid 1px #dee2e6">Opciones</th>
        </tr>
        <tr style="text-align: center">
            <th  style="padding: 4px; ">Precio 1</th>
            <th style="padding: 4px;">Precio 2</th>
            <th style="padding: 4px; ">Precio 3</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categoria_producto as $categoria)
            <tr style=" text-align: center; "  id="{{$categoria->CATPRO_id}}">
                <td class="align-middle"   style="padding: 2px;border-right: solid 1px #dee2e6;">{{$loop->index+1}}</td>
                <td class="align-middle"   style="padding: 2px;border-right: solid 1px #dee2e6;">{{$categoria->CATPRO_codigo}}</td>
                <td class="align-middle" style="padding: 2px;">{{$categoria->CATPRO_descripcion}}</td>
                <td class="align-middle" style="padding: 2px;border-left: solid 1px #dee2e6;">{{$categoria->CATPRO_precio1*100}} % </td>
                <td class="align-middle" style="padding: 2px;border-left: solid 1px #dee2e6;">{{$categoria->CATPRO_precio2*100}} % </td>
                <td class="align-middle" style="padding: 2px;border-left: solid 1px #dee2e6;border-right: solid 1px #dee2e6; ">{{$categoria->CATPRO_precio3*100}} % </td>
                <td class="align-middle" style="padding: 2px;border-right: solid 1px #dee2e6;"> {{$categoria->CATPRO_descuento*100}} % </td>
                <td class="align-middle" style="padding: 2px"><a href="#" data-toggle="modal" data-target="#con-close-modal2" class="action-icon" onclick="buscarCategoria({{$categoria->CATPRO_id}})" title="Editar"> <i class="mdi mdi-square-edit-outline"></i></a>
                <a href="#" class="action-icon" onclick="eliminarCategoria({{$categoria->CATPRO_id}})" title="Eliminar"> <i class="mdi mdi-delete"></i></a></td>
            </tr>
        @endforeach
    </tbody>
</table>
