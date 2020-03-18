$(document).ready(function() {
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
});
//////////////////////////////////////////
///////////////////Llenar div de datos al inicio
$(".bt_guarda1").each(function (el){
    $(this).bind("click",saveCategoria);
});
function saveCategoria(){
    var codigo=parseInt($('#codigo').val());
    var codigonuevo=codigo+1;
    var categoria=$('#CATPRO_descripcion').val();
    var precio1=$('#CATPRO_precio1').val();
    var precio2=$('#CATPRO_precio2').val();
    var precio3=$('#CATPRO_precio3').val();
    var descuento=$('#CATPRO_descuento').val();
        $.ajax({
            url:"/categoria/store",
            method:"POST",
            data:{
                CATPRO_codigo:codigo,
                CATPRO_descripcion:categoria,
                CATPRO_precio1: precio1/100,
                CATPRO_precio2: precio2/100,
                CATPRO_precio3: precio3/100,
                CATPRO_descuento: descuento/100
            },
            success:function(data){
                $('#listaCategoriasNueva').hide();
                $('#listaCategoriasNueva2').html(data);
                $("#con-close-modal").modal("hide");
                $('#codigo').val(codigonuevo);
                limpiarFormCategoria();
                    Swal.fire({
                        title: "Categoría agregada Correctamente",
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
});

function limpiarFormCategoria(){
    $('#CATPRO_descripcion').val('');
    $('#CATPRO_precio1').val('');
    $('#CATPRO_precio2').val('');
    $('#CATPRO_precio3').val('');
    $('#CATPRO_descuento').val('');

    $('#CATPRO_descripcionE').val('');
    $('#CATPRO_precio1E').val('');
    $('#CATPRO_precio2E').val('');
    $('#CATPRO_precio3E').val('');
    $('#CATPRO_descuentoE').val('');
    $('#bt_guarda1').prop('disabled',true);
};

function categoriaEditar(){
    var CATPRO_id=$('#CATPRO_id').val();

    var CATPRO_descripcion=$('#CATPRO_descripcionE').val();
    var CATPRO_precio1=$('#CATPRO_precio1E').val();
    var CATPRO_precio2=$('#CATPRO_precio2E').val();
    var CATPRO_precio3=$('#CATPRO_precio3E').val();
    var CATPRO_descuento=$('#CATPRO_descuentoE').val();
    $.ajax({
        url:"/categoria/update",
        method:"POST",
        data:{
            CATPRO_id:CATPRO_id,
            CATPRO_descripcion:CATPRO_descripcion,
            CATPRO_precio1: CATPRO_precio1/100,
            CATPRO_precio2: CATPRO_precio2/100,
            CATPRO_precio3: CATPRO_precio3/100,
            CATPRO_descuento: CATPRO_descuento/100
        },
        success:function(data){
            $("#con-close-modal2").modal("hide");
            limpiarFormCategoria();
            $('#'+data+'').load(location.href+" #"+data+">*");
                Swal.fire({
                    title:"Categoría editada correctamente",
                    type: 'success',
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
    };

    function codigoUltimo(){
        $.ajax({
            url:"/categoria/ultimo",
            method:"POST",
                success:function(data){
            $('#codigo').val(data);
            }
        });
    };

    function eliminarCategoria(categoria){
        Swal.fire({
        title: '¿Está seguro que desea eliminar la categoría?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#1c2c3d',
        cancelButtonColor: '#797979',
        confirmButtonText: 'Si',
        cancelButtonText: 'Cancelar'
            }).then((result) =>{
            if (result.value) {
                codigoUltimo();
                $.ajax({
                    url:"/categoria/delete",
                    method:"POST",
                    data:{
                        CATPRO_id:categoria,
                    },
                    success:function(data){
                        $('#listaCategoriasNueva').hide();
                        $('#listaCategoriasNueva2').html(data);
                    }
                });
                Swal.fire(
                    'La categoría fue eliminada!',
                    )
            }
        })
    };


    function buscarCategoria(categoria){
        $.ajax({
            url:"/categoria/buscar",
            method:"POST",
            data:{
                CATEGORIA_id:categoria
            },
            success:function(data){
                $('#CATPRO_codigoE').val(data.CATPRO_codigo);
                $('#CATPRO_descripcionE').val(data.CATPRO_descripcion);
                $('#CATPRO_precio1E').val(parseFloat(data.CATPRO_precio1)*100);
                $('#CATPRO_precio2E').val(parseFloat(data.CATPRO_precio2)*100);
                $('#CATPRO_precio3E').val(parseFloat(data.CATPRO_precio3)*100);
                $('#CATPRO_descuentoE').val(parseFloat(data.CATPRO_descuento)*100);
                $('#CATPRO_id').val(data.CATPRO_id);
            }
        });
    };

function activaboton(){
        var CATPRO_descripcion=$('#CATPRO_descripcion').val();
        var CATPRO_precio1=$('#CATPRO_precio1').val();
        var CATPRO_precio2=$('#CATPRO_precio2').val();
        var CATPRO_precio3=$('#CATPRO_precio3').val();
        var CATPRO_descuento=$('#CATPRO_descuento').val();

        if((CATPRO_descripcion!=null)&&(CATPRO_descripcion!='')&&
        (CATPRO_precio1!=null)&&(CATPRO_precio1!='')&&
        (CATPRO_precio2!=null)&&(CATPRO_precio2!='')&&
        (CATPRO_precio3!=null)&&(CATPRO_precio3!='')&&
        (CATPRO_descuento!=null)&&(CATPRO_descuento!='')){
            $('#bt_guarda1').prop('disabled',false);
        }
        else{
            $('#bt_guarda1').prop('disabled',true);
        }
     };

  function activaboton2(){
       var CATPRO_descripcion=$('#CATPRO_descripcionE').val();
       var CATPRO_precio1=$('#CATPRO_precio1E').val();
       var CATPRO_precio2=$('#CATPRO_precio2E').val();
       var CATPRO_precio3=$('#CATPRO_precio3E').val();
       var CATPRO_descuento=$('#CATPRO_descuentoE').val();

       if((CATPRO_descripcion!=null)&&(CATPRO_descripcion!='')&&
       (CATPRO_precio1!=null)&&(CATPRO_precio1!='')&&
       (CATPRO_precio2!=null)&&(CATPRO_precio2!='')&&
       (CATPRO_precio3!=null)&&(CATPRO_precio3!='')&&
       (CATPRO_descuento!=null)&&(CATPRO_descuento!='')){
           $('#bt_guarda2').prop('disabled',false);
       }
       else{
           $('#bt_guarda2').prop('disabled',true);
       }
    };

 var input=  document.getElementById('CATPRO_precio1');
        input.addEventListener('input',function(){
            var val = this.value;
            this.value = val.replace(/\D|\-/,'');
        })
        input.addEventListener('input',function(){
            if (this.value.length > 2)
                this.value = this.value.slice(0,2);
        })
    var input=  document.getElementById('CATPRO_precio2');
        input.addEventListener('input',function(){
            var val = this.value;
            this.value = val.replace(/\D|\-/,'');
        })
        input.addEventListener('input',function(){
            if (this.value.length > 2)
                this.value = this.value.slice(0,2);
        })
    var input=  document.getElementById('CATPRO_precio3');
        input.addEventListener('input',function(){
            var val = this.value;
            this.value = val.replace(/\D|\-/,'');
        })
        input.addEventListener('input',function(){
            if (this.value.length > 2)
                this.value = this.value.slice(0,2);
        })
    var input=  document.getElementById('CATPRO_descuento');
        input.addEventListener('input',function(){
            var val = this.value;
            this.value = val.replace(/\D|\-/,'');
        })
        input.addEventListener('input',function(){
            if (this.value.length > 2)
                this.value = this.value.slice(0,2);
        })
    var input=  document.getElementById('CATPRO_precio1E');
        input.addEventListener('input',function(){
                var val = this.value;
                this.value = val.replace(/\D|\-/,'');
            })
        input.addEventListener('input',function(){
            if (this.value.length > 2)
                this.value = this.value.slice(0,2);
        })
    var input=  document.getElementById('CATPRO_precio2E');
        input.addEventListener('input',function(){
            var val = this.value;
            this.value = val.replace(/\D|\-/,'');
        })
        input.addEventListener('input',function(){
            if (this.value.length > 2)
                this.value = this.value.slice(0,2);
        })
    var input=  document.getElementById('CATPRO_precio3E');
        input.addEventListener('input',function(){
            var val = this.value;
            this.value = val.replace(/\D|\-/,'');
        })
        input.addEventListener('input',function(){
            if (this.value.length > 2)
                this.value = this.value.slice(0,2);
        })
    var input=  document.getElementById('CATPRO_descuentoE');
        input.addEventListener('input',function(){
            var val = this.value;
            this.value = val.replace(/\D|\-/,'');
        })
        input.addEventListener('input',function(){
            if (this.value.length > 2)
                this.value = this.value.slice(0,2);
        })