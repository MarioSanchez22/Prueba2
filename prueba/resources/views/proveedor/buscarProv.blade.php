
    <table data-toggle="table"
     data-page-size="5"
    data-buttons-class="xs btn-light"
    data-pagination="true" class="table-bordered ">
    <thead class="thead-light">
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
                <td>{{$proveedores->PROVE_estado}}</td>
                <td> </td>
        </tr>
    @endforeach
    </tbody>
    </table>

