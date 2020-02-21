<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
</head>
<body>
<p>{{$rpta}}</p><br>
<table class="egt">
    <tr>
        <th>#</th>
        <th>Codigo</th>
        <th>Producto</th>
        <th>Costo</th>
        <th>Precio1</th>
        <th>Precio2</th>
        <th>Precio3</th>
    </tr>
    @foreach ($producto as $productos)
        <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$productos->PRO_id}}</td>
                <td>{{$productos->PRO_nombre}}</td>
                <td>{{$productos->PRO_costo}}</td>
                <td>{{$productos->PRO_venta1}}</td>
                <td>{{$productos->PRO_venta2}}</td>
                <td>{{$productos->PRO_venta3}}</td>
        </tr>
     @endforeach
</table>

<div>
@if($producto->isEmpty())
<p>El producto no esta registrado</p>
@endif
<form action="{{route('productoBuscar')}}" method="POST">
{{ csrf_field() }}
Ingresa codigo del Producto: <input placeholder="Codigo..." type="text" name="PRO_id" required><br>

Costo de Compra:<input placeholder="Costo..." type="number" name="PRO_costo" required>
<br>
<input type="submit" value="Comprar">
<a href="{{route('home')}}">Retornar</a>
</form>
<br>
<br>


</div>

<script>

</script>
</body>
</html>