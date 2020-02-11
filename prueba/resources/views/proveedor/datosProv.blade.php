

@if($tipoPr==1)

<div class="col-md-5">
    <div class="form-group">
    <label class="control-label" for="PROVE_razon_social">
       Razon social
    </label><div class="input-group">
    <input type="text" class="form-control form-control-sm" required  placeholder="Razon social" id="PROVE_razon_social" name="PROVE_razon_social"> </div>
</div></div>

   <div class="col-md-5">
    <div class="form-group">
      <label class="control-label">Razon comercial: </label>
      <div class="input-group">
      
      <input type="text" class="form-control form-control-sm" placeholder="Razon comercial" name="PROVE_razon_comercial" id="PROVE_razon_comercial"> </div>
   </div></div>
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
     <div class="input-group">
    <input type="text" class="form-control form-control-sm" required  placeholder="Documento" id="PROVE_dni" name="PROVE_dni">
    <div  id="cargarDni" style="display:none"> <button class="btn btn-info btn-sm" type="button"  >
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="sr-only">f</span>
    </button></div>
</div>
</div>
<div class="col-md-4">
    <div class="form-group">
    <label class="control-label" for="PROVE_razon_social" >
       Nombre
    </label>
    <div class="input-group">
        <input type="text" class="form-control form-control-sm" required  placeholder="Nombre" name="PROVE_razon_social"  id="PROVE_razon_social"> </div>
</div></div>
@endif
<div class="col-md-2">
    <div class="form-group">
      <label class="control-label">Dias de crédito: </label>
      <div class="input-group">
        
      <input type="number" class="form-control form-control-sm" required min="1" placeholder="Dias " name="PROVE_dias_credito"> </div>
   </div></div>

   <script>
      $(document).ready(function(){
        $('#cargarDni').hide();

          $("#PROVE_dni").keyup(function(){
     var numdni= $("#PROVE_dni").val();
     if(numdni.length == 8){
     consultadatosSUNAT2(numdni);


     }
   });


    function consultadatosSUNAT2(PROVE_dni){
        $('#cargarDni').show();

      var dni=$('#PROVE_dni').val();

          $.ajax({

              method:'GET',
             url: "http://siempreaqui.com/json-sunat/consulta.php",
           data:'nruc='+dni,

              success:function(data){

                  $('#cargarDni').hide();
                  var dataObject = jQuery.parseJSON(data);

                           if (dataObject.success == true) {
                      $("#PROVE_razon_social").val(dataObject.result.RazonSocial);
                             $("#PROVE_ruc").val(dataObject.result.RUC);
                             $("#PROVE_direccion").val(dataObject.result.Direccion);


                           // $("#rs_dni").val(dataObject.result.DNI); No devuelve DNI
                           }
                           else{

      var token='?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImFsaWNpYXJvZHJpZ3VlejEzMUBnbWFpbC5jb20ifQ.a3lvPXVhSwXBw-I8VQ9gS7WS-HZMAzMTMCcFLW3V1eE';

          $.ajax({

              method:'GET',
             url: "https://dniruc.apisperu.com/api/v1/dni/"+dni +token,


             success:function(data){
                        var resultados=data;


                            $('#PROVE_razon_social').val(data.apellidoPaterno+" "+data.apellidoMaterno+" "+ data.nombres);


                    }
          });

                           }



              }
          });


      }
      function consultadatosRENIEC(PROVE_dni){

      var dni=$('#PROVE_dni').val();
      var token='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImFsaWNpYXJvZHJpZ3VlejEzMUBnbWFpbC5jb20ifQ.a3lvPXVhSwXBw-I8VQ9gS7WS-HZMAzMTMCcFLW3V1eE';

          $.ajax({

              method:'GET',
             url: "https://dniruc.apisperu.com/api/v1/dni",
           data:'nruc='+dni +token,

              success:function(data){

                  var dataObject = jQuery.parseJSON(data);

                           if (dataObject.success == true) {
                      $("#PROVE_razon_social").val(dataObject.result.nombres);
                             $("#PROVE_ruc").val(dataObject.result.RUC);
                             $("#PROVE_direccion").val(dataObject.result.Direccion);


                           // $("#rs_dni").val(dataObject.result.DNI); No devuelve DNI
                           }




              }
          });


      }
  });
  </script>


