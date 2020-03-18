 $(document).ready(function() {
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
    });


    function limpiarMarca(){
        $('#MARCA_descripcion').val('');
        $('#MARCA_descripcionE').val('');
    };
    function marcaRegistrar(){
        var MARCA_descripcion= $('#MARCA_descripcion').val();
        $.ajax({
            url:"marca/create",
            method:"POST",
            data:{
                MARCA_descripcion:MARCA_descripcion,
            },
            success:function(data){
                $('#modal').modal("hide");
                limpiarMarca();
                $('#listaMarcasNueva').hide();
                $('#listaMarcasNueva2').html(data);
                    Swal.fire({
                        title:"Marca llenada correctamente",
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



    function marcaEditar(){
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
        var MARCA_idE= $('#MARCA_idE').val();
        var MARCA_descripcion= $('#MARCA_descripcionE').val();
        $.ajax({
            url:"marca/update",
            method:"POST",
            data:{
                MARCA_idE:MARCA_idE,
                MARCA_descripcionE:MARCA_descripcion
            },
            success:function(data){
                $('#modal2').modal("hide");
                $('#'+data.MARCA_id+'').load(location.href+" #"+data.MARCA_id+">*");
                limpiarMarca();
                    Swal.fire({
                        title:"Marca editada correctamente",
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

    function MarcaEliminar(Marca){
        Swal.fire({
        title: '¿Está seguro que desea eliminar la marca?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#1c2c3d',
        cancelButtonColor: '#797979',
        confirmButtonText: 'Si',
        cancelButtonText: 'Cancelar'
            }).then((result) =>{
            if (result.value) {
                $.ajax({
                        url:"marca/delete",
                        method:"POST",
                        data:{
                            MARCA_id:Marca,
                        },
                            success:function(data){
                            $('#listaMarcasNueva').hide();
                            $('#listaMarcasNueva2').html(data);
                        }
                    });
            Swal.fire(
                'La compra fue eliminada!',
                )
            }
        })
    };



    function activaRegistrar()
    {
        var MARCA_descripcion=$('#MARCA_descripcion').val();
        if((MARCA_descripcion!=null)&&(MARCA_descripcion!='')){
            $('#btnguarda').prop('disabled',false);
        }else{
            $('#btnguarda').prop('disabled',true);
        }

    };
    function acttivaEditar()
    {

    };

    function MarcaBuscar(Marca){
        $.ajax({
            url:"marca/buscar",
            method:"POST",
            data:{
                MARCA_id:Marca
            },
            success:function(data){
                limpiarMarca();
                $('#MARCA_descripcionE').val(data.MARCA_descripcion);
                $('#MARCA_idE').val(data.MARCA_id);
            }
        });
    }
