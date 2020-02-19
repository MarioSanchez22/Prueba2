@foreach ($contactoPro as $contactos) 
    <div  class="row" style="margin-bottom: 2%;">
        <input type="text" name="PROVECONT_descripcion[]" id="PROVECONT_descripcion"  class="form-control form-control-sm col-sm-2" style="margin-left: 2%;" value="{{$contactos->PROVECONT_descripcion}}">
        <span class="col-sm-1"></span>
        <input type="text" name="PROVECONT_nombre[]" id="PROVECONT_nombre"  class="form-control form-control-sm col-sm-2" value="{{$contactos->PROVECONT_nombre}}">
        <span class="col-sm-1"></span>
        <input type="number" name="PROVECONT_telefono[]" id="PROVECONT_telefono"  class="form-control form-control-sm col-sm-2" value="{{$contactos->PROVECONT_telefono}}">
        <span class="col-sm-1"></span>
        <input type="email" name="PROVECONT_email[]"  id="PROVECONT_email" class=" form-control form-control-sm col-sm-2" style="margin-right: 2%;" value="{{$contactos->PROVECONT_email}}">
        <!--<input class="btn btn-primary bt_plus" id="100" type="button" value="+">-->
        <button class="btn btn-primary" id="{{$loop->index+1}}" type="button"  style="padding: 4px 8px; background-color: #446e8c; border-Color:#04233a;"><i class="fe-phone-forwarded" style="width:20px; height:20px;" ></i></button>
        <div class="error_form"></div>
    </div>
@endforeach
