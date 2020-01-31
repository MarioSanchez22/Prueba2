@php
//dd($pais);
 $output=' 
        <div class="row col-md-12" style="padding-bottom:12px">  
          <div class="col-md-4">
            <label for="">Origen de proveedor</label>
              <select class="form-control  form-control-sm" id="TipoP" name="PROVE_origen">
                <option value="0">Local</option>
                <option value="1">Importado</option>
              </select> 
          </div>
          <div class="col-md-4">
            <label for="">País</label>
              <select class="form-control  form-control-sm" id="PROVE_pais" name="PROVE_pais">
                <option value="0">País</option>
                <option value="1">Local</option>
              </select> 
          </div>
          <div class="col-md-4">
            <label for="">Región</label>
              <select class="form-control  form-control-sm" id="PROVE_region" name="PROVE_region">
                <option value="0">Región</option>
                <option value="1">Local</option>
              </select> 
          </div> 
        </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="control-label" for="PROVE_razon_social"> '; if ($tipoPr==0) { $output.= 'Razon social';} else{ $output.= 'Nombre';} $output .= '</label>
                <input type="text" class="form-control form-control-sm" required  placeholder="Razon social" name="PROVE_razon_social"> </div>
             </div>
             
            ';

           if ($tipoPr==0) {
            $output .= '
            
            <div class="col-md-4">
              <div class="form-group">
                <label class="control-label">RUC: </label>
                <input type="text" class="form-control form-control-sm" required  placeholder="RUC de empresa" name="PROVE_ruc"> </div>
             </div>

             <div class="col-md-4">
              <div class="form-group">
                <label class="control-label">Razon comercial: </label>
                <input type="text" class="form-control form-control-sm" placeholder="Razon comercial" name="PROVE_razon_comercial"> </div>
             </div>
             <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Web: </label>
                <input type="text" class="form-control form-control-sm"  placeholder="direccion web" name="PROVE_email"> </div>
             </div>
          

           ';
           } else {  $output .= ''; }

           $output.=' 
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Dias de crédito: </label>
                <input type="number" class="form-control form-control-sm" required min="1" placeholder="Dias de crédito" name="PROVE_dias_credito"> </div>
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

            
            ';

         echo $output;


@endphp
