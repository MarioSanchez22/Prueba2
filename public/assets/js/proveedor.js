////INDEX
$('#buscar').click(function(){
    var ruc=$('#PROVE_ruc').val();
    var razon=$('#PROVE_razon_social').val();
    var etiqueta=$('#PROVE_etiqueta').val();
    $('#tablageneral').hide();
    if(ruc==''){
        ruc='0';
    }
    if(razon==''){
        razon='0';
    }
    if(etiqueta==''){
        etiqueta='0';
    }
$.ajax({
url:"proveedor/buscar/"+ruc+"/"+razon+"/"+etiqueta,
method:"GET",
success:function(data1){
    $('#tabla1').html(data1);
    }
});
});

function bloquear(proveedor){
    $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url:"proveedor/darBaja",
        method:"POST",
        data:{
            PROVE_id:proveedor
        },
        success:function(data){
            $('#'+data+'').load(location.href+" #"+data+">*");
        }
    });
}
function activar(proveedor){
    $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url:"proveedor/darAlta",
        method:"POST",
        data:{
            PROVE_id:proveedor
        },
        success:function(data){
            $('#'+data+'').load(location.href+" #"+data+">*");
        }
    });
}
//////////////////////////

