
<script src="{{asset('assets/libs/bootstrap-table/bootstrap-table.min.js')}}"></script>

<!-- Init js -->
<script src="{{asset('assets/js/pages/bootstrap-tables.init.js')}}"></script>
<table data-toggle="table"
data-page-size="5"
data-buttons-class="xs btn-light"
data-pagination="true" class="table-bordered " style="display: inline-table;">
<thead class="" style="background: #003346;
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
                <td>{{$proveedores->PROVE_estado}}</td>
                <td>  <a href="{{route('proveedorShow',[ $proveedores->PROVE_id] )}}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a></td>
</tr>
    @endforeach
    </tbody>
    </table>
 <!-- Bootstrap Tables js -->


  
     <!-- Bootstrap Tables js -->
 
