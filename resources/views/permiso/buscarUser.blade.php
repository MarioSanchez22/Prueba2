@php
  use App\persona;
  use App\rol;
  use App\sucursal;
  use App\empresa;
  use App\empleado;
@endphp
<script src="{{asset('assets/libs/bootstrap-table/bootstrap-table.min.js')}}"></script>

<!-- Init js -->
<script src="{{asset('assets/js/pages/bootstrap-tables.init.js')}}"></script>

<table   data-toggle="table"
    data-page-size="6"
    data-buttons-class="xs btn-light"
    data-pagination="true" class="table-bordered " style="display: inline-table;>
    <thead class="thead-light">
        <tr>
            <th data-field="state" >#</th>
            <th data-field="name">Usuario</th>
            <th data-field="id" data-switchable="false">Nombre Usuario</th>
            <th data-field="email">Documento de identidad</th>
            <th data-field="perfil">Perfil</th>

            <th data-field="estado">Estado</th>
            <th data-field="opciones">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            @php
                $persona=persona::where('PERSONA_id','=',$usuario->PERSONA_id)->first();
                $rol=rol::where('ROL_id','=',$usuario->ROL_id)->first();
            @endphp
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$persona->PERSONA_nombres}}</td>
                <td>{{$persona->PERSONA_identificador}}</td>
                <td>{{$rol->ROL_descripcion}}</td>
                <td>
                    @if($usuario->USER_estado==1)
                        <span class="badge bg-soft-success text-success shadow-none">Activo</span>
                    @else
                        <span class="badge bg-soft-danger text-danger shadow-none">Bloqueado</span>
                    @endif
                </td>
                <td>
                    <a href="{{route('privilegiosEdit',[$usuario->id])}}" class="action-icon" title="Editar"> <i class="mdi mdi-square-edit-outline"></i></a>
                    @if($usuario->USER_estado==1)
                        <a href="#" class="action-icon" title="Bloquear"> <i class="mdi mdi-block-helper"></i></a>
                    @else
                        <a href="#" class="action-icon" title="Activar"> <i class="mdi mdi-transfer-up"></i></a>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
 <!-- Bootstrap Tables js -->



     <!-- Bootstrap Tables js -->
