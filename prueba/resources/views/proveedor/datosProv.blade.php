
    <div class="col-md-5">
    <div class="form-group">
    <label class="control-label" for="PROVE_razon_social">
        @if($tipoPr==1)
       Razon social
       @else
       Nombre
        @endif
    </label>
    <input type="text" class="form-control form-control-sm" required  placeholder="Razon social" name="PROVE_razon_social"> </div>
</div>
@if($tipoPr==1)


   <div class="col-md-5">
    <div class="form-group">
      <label class="control-label">Razon comercial: </label>
      <input type="text" class="form-control form-control-sm" placeholder="Razon comercial" name="PROVE_razon_comercial"> </div>
   </div>


@endif
<div class="col-md-2">
    <div class="form-group">
      <label class="control-label">Dias de crédito: </label>
      <input type="number" class="form-control form-control-sm" required min="1" placeholder="Dias de crédito" name="PROVE_dias_credito"> </div>
   </div>


   <div class="col-md-6">
    <div class="form-group">
      <label class="control-label">Web: </label>
      <input type="text" class="form-control form-control-sm"  placeholder="direccion web" name="PROVE_email"> </div>
   </div>
   <div class="col-md-6">
    <div class="form-group">
      <label class="control-label">Etiquetas: </label>
      <input type="text" class="form-control form-control-sm" required  placeholder="Etiquetas" name="PROVE_etiqueta"> </div>
   </div>

  <div class="col-md-6">
    <div class="form-group">
      <label class="control-label">Telefono: </label>
      <input type="text" class="form-control form-control-sm" required placeholder="Telefono" name="PROVE_telefono"> </div>
   </div>

