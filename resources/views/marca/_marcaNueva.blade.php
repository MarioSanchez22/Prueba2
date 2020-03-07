
<script src="{{asset('assets/libs/bootstrap-table/bootstrap-table.min.js')}}"></script>

<!-- Init js -->
<script src="{{asset('assets/js/pages/bootstrap-tables.init.js')}}"></script>

<table data-toggle="table"
data-page-size="5"
data-buttons-class="xs btn-light"
data-pagination="true" class="table-bordered " style="display: inline-table;">
        <thead class="thead-light">
            <th>#</th>
            <th>Descripción</th>
            <th>Opciones</th>
    </thead>
    <tbody>
        @foreach ($marca as $marcas )
        <tr id="{{$marcas->MARCA_id}}">
            <td>{{$loop->index+1}}</td>
            <td>{{$marcas->MARCA_descripcion}}</td>
            <td>
                <a href="#" class="action-icon" data-toggle="modal" data-target=".bs-example-modal-lg2" title="Editar" onclick="MarcaBuscar({{$marcas->MARCA_id}})"><i class="mdi mdi-square-edit-outline"></i></a>
                <a href="javascript:void(0);" class="action-icon" title="Eliminar"><i class="mdi mdi-delete" onclick="MarcaEliminar({{$marcas->MARCA_id}})"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
