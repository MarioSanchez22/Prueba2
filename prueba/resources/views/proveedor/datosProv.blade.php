@php
 //load_data.php DIV
//dd($prove);
 $output = '';
 $output.=' <div class="row"> <div class="col-md-6">
              <div class="form-group">
                <label class="control-label"> '; if ($prove==0) { $output.= 'Razon social';} else{ $output.= 'Nombre';} $output .= '</label>
                <input type="text" class="form-control form-control-sm" required  placeholder="Razon social"> </div>
             </div>
            </div>';

           if ($prove==0) {
            $output .= '
            <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label class="control-label">RUC: </label>
                <input type="text" class="form-control form-control-sm" required  placeholder="RUC de empresa"> </div>
             </div>

             <div class="col-md-4">
              <div class="form-group">
                <label class="control-label">Razon comercial: </label>
                <input type="text" class="form-control form-control-sm" required  placeholder="Razon comercial"> </div>
             </div>
             <div class="col-md-4">
              <div class="form-group">
                <label class="control-label">Web: </label>
                <input type="text" class="form-control form-control-sm" required  placeholder="direccion web"> </div>
             </div>
          </div>

           ';
           } else {  $output .= ''; }

           $output.=' <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Dias de crédito: </label>
                <input type="number" class="form-control form-control-sm" required min="1" placeholder="Dias de crédito"> </div>
             </div>
             <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Etiquetas: </label>
                <input type="text" class="form-control form-control-sm" required  placeholder="Etiquetas"> </div>
             </div>
             <div class="col-md-6">
                <label for="">Origen de proveedor</label>
                <select class="form-control  form-control-sm" id="TipoP" name="TipoP">
                    <option value="0">Importado</option>
                    <option value="1">Local</option>

                    </select>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Telefono: </label>
                <input type="text" class="form-control form-control-sm" required  placeholder="Telefono"> </div>
             </div>

            </div>
            ';



         echo $output;


@endphp
