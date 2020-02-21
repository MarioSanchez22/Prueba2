<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if($producto[0]->PRO_costo!=$compra)

@if ($producto[0]->PRO_costo<$compra)
    <p>El costo aumentó en: {{($compra-$producto[0]->PRO_costo)/$producto[0]->PRO_costo*100}}%> 
@else
    <p>El costo disminuyó en: {{($producto[0]->PRO_costo-$compra)/$producto[0]->PRO_costo*100}}%> 
@endif  
    <form method="POST" action="{{route('productoAjuste',['id'=>$producto[0]->PRO_id])}}" >
    {{ csrf_field() }}
    <label for="PRO_venta1">Costo Nuevo del Producto:{{$compra}}</label><br>
    <label for="PRO_venta1">Costo Antiguo del Producto:{{$producto[0]->PRO_costo}}</label><br>
    <label for="PRO_venta2">Precio de Venta Antiguo del Producto (20%):{{$producto[0]->PRO_venta1}}</label><br>
    <label for="PRO_venta3">Precio de Venta Antiguo del Producto (50%):{{$producto[0]->PRO_venta2}}</label><br>
    <label for="PRO_venta3">Precio de Venta Antiguo del Producto (60%):{{$producto[0]->PRO_venta3}}</label>
    <br>
    <br>
    <label for="PRO_venta1">costo nuevo:</label><input placeholder="Costo nuevo"type="number" name="PRO_costo" style="width:100px; " value="{{$compra}}" required >
    
    <label for="PRO_venta1">G1:20%:</label><input placeholder="Venta 1..."type="number" name="PRO_venta1" style="width:100px; " value="{{$compra/0.8}}" required >
    <label for="PRO_venta2">G2:50%:</label><input placeholder="Venta 2..."type="number" name="PRO_venta2" style="width:100px;" value="{{$compra/0.5}}" required>
    <label for="PRO_venta3">G3:60%:</label><input placeholder="Venta 3..."type="number" name="PRO_venta3" style="width:100px;" value="{{$compra/0.4}}" required>       <br>
    <br>
    <input type="submit" value="Ajuste"> <!-- <input type="submit" value="Guardar">-->
    </form>
    @endif
</body>
</html>
