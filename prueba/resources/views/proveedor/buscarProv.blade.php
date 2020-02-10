
<script src="{{asset('assets/libs/bootstrap-table/bootstrap-table.min.js')}}"></script>

<!-- Init js -->
<script src="{{asset('assets/js/pages/bootstrap-tables.init.js')}}"></script>
<table data-toggle="table"
data-page-size="5"
data-buttons-class="xs btn-light"
data-pagination="true" class="table-bordered " style="display: inline-table;">
<thead class="" style="background:#778084;
color: white;">
<tr>
<th data-field="state" >#</th>
<th data-field="id" data-switchable="false">RUC</th>
<th data-field="name">Razon social</th>


<th data-field="amount">Email</th>
<th data-field="amRount">Telefono</th>
<th data-field="amTount">Etiqueta</th>
<th data-field="user-status">Estado</th>
<th data-field="amouWnt">Opciones</th>
</tr>
</thead>
    <tbody>
    @foreach ($proveedor as $proveedores)
        <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$proveedores->PROVE_ruc}}</td>
                <td>{{$proveedores->PROVE_razon_social}}</td>
                <td>{{$proveedores->PROVE_email}}</td>
                <td>{{$proveedores->PROVE_telefono}}</td>
                <td>{{$proveedores->PROVE_etiqueta}}</td>
                <td>
                    @if($proveedores->PROVE_estado==1)
                        <span class="badge bg-soft-success text-success shadow-none">Activo</span>
                    @else
                        <span class="badge bg-soft-danger text-danger shadow-none">Bloqueado</span>
                    @endif
                    </td>
                    <td>  <a href="{{route('proveedorShow',[ $proveedores->PROVE_id] )}}" class="action-icon" title="Ver"> <i class="mdi mdi-eye"></i></a>
                        <a href="{{route('proveedorEdit',[$proveedores->PROVE_id])}}" class="action-icon" title="Editar"> <i class="mdi mdi-square-edit-outline"></i></a>
                        @if($proveedores->PROVE_estado==1)
                        <a href="{{route('proveedorDarBaja',[ $proveedores->PROVE_id] )}}" class="action-icon" title="Bloquear"> <i class="mdi mdi-block-helper"></i></a></td>
                        @else
                        <a href="{{route('proveedorDarAlta',[ $proveedores->PROVE_id] )}}" class="action-icon" title="Activar"> <i class="mdi mdi-transfer-up"></i></a></td>
                        @endif
                </tr>
    @endforeach
    </tbody>
    </table>
 <!-- Bootstrap Tables js -->



     <!-- Bootstrap Tables js -->

