//INDEX
var empresaID= $('#usu1_EMPRESA_id').val();
    function bloquear(producto){
       
        
        $.ajaxSetup({
            headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:"producto/darBaja",
            method:"POST",
            data:{
                PRO_id:producto
            },
            success:function(data){
                $('#'+data+'').load(location.href+" #"+data+">*");
                if(empresaID==1){
                        heading= 'Corporación MacroChip'}
                    else{
                        heading='NepComputer SRL.'}
                $.toast({
                 
                    heading:heading,
                    text: 'Producto bloqueado',
                    icon: 'error',
                    position:'top-right',
                    loader: true, // Change it to false to disable loader
                    loaderBg: '#f1556c' // To change the background
                })
            }
        });
    }
    function activar(producto){
        $.ajaxSetup({
            headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:"producto/darAlta",
            method:"POST",
            data:{
                PRO_id:producto
            },
            success:function(data){
                $('#'+data+'').load(location.href+" #"+data+">*");
                if(empresaID==1){
                        heading1= 'Corporación MacroChip'}
                    else{
                        heading1='NepComputer SRL.'}
                $.toast({
                    heading:heading1,
                    text: 'Producto activado',
                    icon: 'success',
                    position:'top-right',
                    loader: true, // Change it to false to disable loader
                    loaderBg: '#1abc9c' // To change the background
                    })
                }
            });
        }