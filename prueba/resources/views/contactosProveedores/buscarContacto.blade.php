@php
use App\proveedor;
@endphp
<script src="{{asset('assets/libs/bootstrap-table/bootstrap-table.min.js')}}"></script>

<!-- Init js -->
<script src="{{asset('assets/js/pages/bootstrap-tables.init.js')}}"></script>
<table   data-toggle="table" data-page-size="6" data-buttons-class="xs btn-light"
        data-pagination="true" class="table-bordered "  style="display: inline-table;">
<thead class="" style="background:#778084; color: white;">
    <tr>
        <th data-field="state" >#</th>
        <th data-field="empresa">Empresa</th  >
        <th data-field="cargo">Cargo</th>
        <th data-field="nombre" data-switchable="false">Nombre</th>
        <th data-field="etiqueta">Etiqueta</th>
        <th data-field="telefono">Telefono</th>
        <th data-field="email">Email</th>
        <th data-field="usuario">Usuario</th>
    </tr>
</thead>
<tbody>
    @foreach($contactos as $contacto)
    @php
        $empresa=proveedor::where('PROVE_id','=',$contacto->PROVE_id)->get();
    @endphp
    <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$empresa[0]->PROVE_razon_social}}</td>
        <td>{{$contacto->PROVECONT_descripcion}}</td>
        <td>{{$contacto->PROVECONT_nombre}}</td>
        <td>{{$contacto->PROVECONT_etiqueta}}</td>
        <td>{{$contacto->PROVECONT_telefono}}</td>
        <td>{{$contacto->PROVECONT_email}}</td>
        <td>{{$contacto->USER_id}}</td>
    </tr>
    @endforeach
</tbody>
</table>

