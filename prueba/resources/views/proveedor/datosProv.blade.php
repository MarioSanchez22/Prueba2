


@if($tipoPr==1)

<div class="col-md-5">
    <div class="form-group">
    <label class="control-label" for="PROVE_razon_social">
       Razon social
    </label>
    <input type="text" class="form-control form-control-sm" required  placeholder="Razon social" id="PROVE_razon_social" name="PROVE_razon_social"> </div>
</div>

   <div class="col-md-5">
    <div class="form-group">
      <label class="control-label">Razon comercial: </label>
      <input type="text" class="form-control form-control-sm" placeholder="Razon comercial" name="PROVE_razon_comercial" id="PROVE_razon_comercial"> </div>
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
    <input type="text" class="form-control form-control-sm" required  placeholder="Documento" id="PROVE_dni" name="PROVE_dni">
    <img src="{{asset('ajax.gif')}}" class="ajaxgif1 hide">
</div>
<div class="col-md-4">
    <div class="form-group">
    <label class="control-label" for="PROVE_razon_social">
       Nombre
    </label>
    <input type="text" class="form-control form-control-sm" required  placeholder="Razon social" name="PROVE_razon_social"  id="PROVE_razon_social"> </div>
</div>
@endif
<div class="col-md-2">
    <div class="form-group">
      <label class="control-label">Dias de crédito: </label>
      <input type="number" class="form-control form-control-sm" required min="1" placeholder="Dias de crédito" name="PROVE_dias_credito"> </div>
   </div>

   <script>
      $(document).ready(function(){
          $('.ajaxgif1').hide();
  
          $("#PROVE_dni").keyup(function(){
     var numdni= $("#PROVE_dni").val();
     if(numdni.length == 8){
     consultadatosSUNAT2(numdni);
  
     }
   });
  
  
    function consultadatosSUNAT2(PROVE_dni){
      $('.ajaxgif1').show();
      var dni=$('#PROVE_dni').val();
  
          $.ajax({
  
              method:'GET',
             url: "http://siempreaqui.com/json-sunat/consulta.php",
           data:'nruc='+dni,
  
              success:function(data){
                  $('.ajaxgif1').hide();
                  var dataObject = jQuery.parseJSON(data);
  
                           if (dataObject.success == true) {
                      $("#PROVE_razon_social").val(dataObject.result.RazonSocial);
                             $("#PROVE_ruc").val(dataObject.result.RUC);
                             $("#PROVE_direccion").val(dataObject.result.Direccion);
  
  
                           // $("#rs_dni").val(dataObject.result.DNI); No devuelve DNI
                           }
  
  
  
              }
          });
  
  
      }
  });
  </script>


