@php
  use App\User;
  use App\rol;
  use App\sucursal;
  use App\empresa;
  use App\empleado;
@endphp

<div  id="preloader">

    <div id="status" >

        @php
        $usuario=Auth::user();
        $empresaUsuario=empresa::where('EMPRESA_id','=',$usuario->EMPRESA_id)->first();
        @endphp

        <strong style="font-size: 20px; color:#2e4965">{{$empresaUsuario->EMPRESA_nombre}}</strong>
          <div class="spinner-grow avatar-sm text-secondary m-2" role="status"></div>

    </div>
</div>
