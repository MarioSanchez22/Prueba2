$(document).ready(function() {
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
});
});

function limpiarFormMarca(){
    $('#UME_abreviatura').val('');
    $('#UME_descripcion').val('');
}
function marcaGuarda(){
    var UME_abreviatura=$('#UME_abreviatura').val();
    var UME_descripcion=$('#UME_descripcion').val();
        $.ajax({
            url:"unidadMedida/create",
            method:"POST",
            data:{
                UME_abreviatura:UME_abreviatura,
                UME_descripcion: UME_descripcion,
            },
            success:function(data){
                $('#listaUnidad').hide();
                $('#listaUnidadNueva').html(data);
                $("#con-close-modal").modal("hide");
                limpiarFormMarca();
                    Swal.fire({
                        title: "Unidad agregada Correctamente",
                        type: "success",
                        showConfirmButton: false,
                        timer: 2000
                    });
                },error:function(){
                    Swal.fire({
                        title: "Hubo un error",
                        type: 'warning',
                        showConfirmButton: false,
                        timer: 2000
                });
            }
        });
    }