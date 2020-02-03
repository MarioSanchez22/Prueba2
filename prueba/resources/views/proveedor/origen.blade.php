<select class="form-control  form-control-sm" id="pais" name="pais" >
    @if($origen==2)
            @foreach ($pais as $paises)
            <option value="{{$paises->id}}" selected >{{$paises->paisnombre}}</option>
            @endforeach
    @else
    <option value="98"  selected >Perú</option>
    @endif
</select>


<script>

$.ajax({
                    url:"/proveedor/pais/"+89,
                    method:"GET",
                    success:function(data){
                        $('#select3lista').html(data);
                    }
                });
   $('#pais').change(function(){
                var pais= $(this).val();

                $.ajax({
                    url:"/proveedor/pais/"+pais,
                    method:"GET",
                    success:function(data){
                        $('#select3lista').html(data);
                    }
                });
            });</script>
