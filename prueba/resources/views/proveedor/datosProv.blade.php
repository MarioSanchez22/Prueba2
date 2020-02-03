


@if($tipoPr==1)

<div class="col-md-5">
    <div class="form-group">
    <label class="control-label" for="PROVE_razon_social">
       Razon social
    </label>
    <input type="text" class="form-control form-control-sm" required  placeholder="Razon social" name="PROVE_razon_social"> </div>
</div>

   <div class="col-md-5">
    <div class="form-group">
      <label class="control-label">Razon comercial: </label>
      <input type="text" class="form-control form-control-sm" placeholder="Razon comercial" name="PROVE_razon_comercial"> </div>
   </div>
@endif
@if($tipoPr==2)
<div class="col-md-3">
    <div class="form-group">
      <label class="control-label">Tipo de documento: </label>
      <select  class="form-control  form-control-sm" name="PROVEDOC_descripcion" id="">
      @foreach($documento as $documentos)
      <option value="{{$documentos->PROVEDOC_id}}">{{$documentos->PROVEDOC_descripcion}}</option>
      @endforeach
      </select>
   </div>
</div>
<div class="col-md-3">
    <label class="control-label" for="PROVE_dni">
       Documento
     </label>
    <input type="text" class="form-control form-control-sm" required  placeholder="Documento" name="PROVE_dni">
</div>
<div class="col-md-4">
    <div class="form-group">
    <label class="control-label" for="PROVE_razon_social">
       Nombre
    </label>
    <input type="text" class="form-control form-control-sm" required  placeholder="Razon social" name="PROVE_razon_social"> </div>
</div>
@endif
<div class="col-md-2">
    <div class="form-group">
      <label class="control-label">Dias de crédito: </label>
      <input type="number" class="form-control form-control-sm" required min="1" placeholder="Dias de crédito" name="PROVE_dias_credito"> </div>
   </div>




