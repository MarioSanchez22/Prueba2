<select class="form-control  form-control-sm" id="region" name="PROVE_region" >
         @foreach ($region as $regiones)
            <option value="{{$regiones->id}}">{{$regiones->estadonombre}}</option>
            @endforeach
</select>
