<script src="{{asset('assets/libs/bootstrap-table/bootstrap-table.min.js')}}"></script>

<!-- Init js -->
<script src="{{asset('assets/js/pages/bootstrap-tables.init.js')}}"></script>
<table   data-toggle="table"
data-page-size="4"
data-buttons-class="xs btn-light"
data-pagination="true" class="table-bordered " style="display: inline-table;">
<thead class="thead-light">
<tr>
<th data-field="state" >#</th>
<th data-field="id" data-switchable="false">RUC</th>
<th data-field="idd" data-switchable="false">DNI</th>
<th data-field="name">Razon social</th>
<th data-field="amount">Email</th>
<th data-field="amRount">Telefono</th>
<th data-field="amTount">Region</th>
<th data-field="amuuTount">Vendedor</th>
<th data-field="user-status">Estado</th>
<th data-field="amouWnt">Opciones</th>
</tr>
</thead>
<tbody>
    @foreach ($cliente as $clientes)
        <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{($clientes->CLIE_ruc)}}

                </td>
                 <td> {{$clientes->CLIE_dni}}</td>

                <td>{{$clientes->CLIE_razon_social}}</td>
                <td>{{$clientes->CLIE_email}}</td>
                <td>{{$clientes->CLIE_telefono}}</td>

                <td>{{$clientes->CLIE_region}}</td>
                <td>{{$clientes->USER_id}}</td>
                <td>
                    @if($clientes->CLIE_estado==1)
                        <span class="badge bg-soft-success text-success shadow-none">Activo</span>
                    @else
                        <span class="badge bg-soft-danger text-danger shadow-none">Bloqueado</span>
                        @endif
                    </td>
                    <td>  <a href="" class="action-icon" title="Ver"> <i class="mdi mdi-eye"></i></a>
                        <a href="" class="action-icon" title="Editar"> <i class="mdi mdi-square-edit-outline"></i></a>

                        @if($clientes->CLIE_estado==1)
                        <a href="" class="action-icon" title="Bloquear"> <i class="mdi mdi-block-helper"></i></a></td>
                        @else
                        <a href="" class="action-icon" title="Activar"> <i class="mdi mdi-transfer-up"></i></a></td>
                        @endif
                </tr>
    @endforeach
    </tbody>
    </table>
