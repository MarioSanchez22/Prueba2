<select class="form-control  form-control-sm" id="region" name="region" >
         @foreach ($region as $regiones)
            <option value="{{$regiones->id}}">{{$regiones->estadonombre}}</option>
            @endforeach
</select>
