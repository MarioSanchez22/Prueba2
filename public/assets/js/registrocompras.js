$(document).ready(function() {
    $("#costo").blur(function(b){
         //obtenemos el texto introducido en el campo
         consulta = $('#costo').val();
         costoA=$('#costoAnterior').val();
         var n1 =parseInt(consulta);
         var n2=parseInt(costoA);
         //hace la búsqueda
         $("#costo").delay(0).queue(function(n) {


           if(n1>n2){
             alert('El costo subio');}


         });


  });
    if ($('table#tabA tbody tr').length == 0){
        $('button[name=guardartodo]').prop('disabled',true);
    }
     else{
        var $prov = $("#bpro").select2();
        $.ajax({
                url:"{{route('datosTemp')}}",
                method:"get",

            success:function(data){

             $prov.val(data[0].PROV_id).trigger("change"); //lo selecciona
             $("#bpro").select2({
    minimumInputLength: 3,

  });

            }
       });



     }




    $('#guardarAr').click(function () {


var nombre = $('#PRO_nombre').val();
var cantidad = $('#cantidad').val();
var costo =$('#costo').val();
var codigo=$('#PRO_codigo').val();
var idprod=$('#PRO_id').val();
var medida=$('#UME_id').val();
var $example1 = $("#bprodu").select2();
var garantia=$('#PRO_garantia').val();
var proveedor=$('#bpro').val();
var factura=$('input[name=COMPRO_factura]').val();
var facturaF=$('input[name=COMPRO_facturaF]').val();
var gria=$('input[name=COMPRO_gria]').val();
var griaF=$('input[name=COMPRO_griaF]').val();
var costoAr=$('#costoAnterior').val();

$.ajax({
                 url:"{{route('rProductoCStore')}}",
                 method:"POST",
                 data:{
                    idprod,
                    garantia,
                    costo,
                    cantidad,
                    factura,
                    facturaF,
                    gria,
                    griaF,
                    proveedor
                 },
             success:function(data){
                var n3 =parseInt(costo);
         var n4=parseInt(costoAr);
if(n3>n4){
                Swal.fire({
position: 'top',
type: 'warning',
title: 'El costo subio',
showConfirmButton: false,
timer: 1500
})}
                // $('#tabA tbody').append('<tr><td class="align-middle" style="padding: 4px;">'+codigo+'</td><td class="align-middle" style="padding: 4px;">' + nombre + '</td><td class="align-middle" style="padding: 4px;">' + cantidad + '</td><td class="align-middle" style="padding: 4px;">' + costo + '</td><td class="align-middle" style="padding: 4px;">'+medida+'</td><td class="align-middle subtotal" style="padding: 4px;" >' + costo*cantidad +'</td><td class="align-middle" style="padding: 4px;"><a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a><a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a></td></tr>');

$('#PRO_nombre').val('');

$('#cantidad').val('');
$('#costo').val('');
$('#PRO_codigo').val('')
$('#UME_id').val('');
$('#CATPRO_id').val('');
$('#MARCA_id').val('');
$('#PRO_modelo').val('');
$example1.append($('<option>', { //agrego los valores que obtengo de una base de datos
                     value: 0,
                   text: '[Busque articulo]',
                  selected: true
                  }));
$example1.val(0).trigger("change"); //lo selecciona
$("#bprodu").select2({
    minimumInputLength: 3,
    dropdownParent: $("#agregarArti")
  });
$('#agregarArti').modal('hide');
$('#tabA').load(location.href+" #tabA>*");
$('#calculos').load(location.href+" #calculos>*");
if( $('#factura').is(':checked') ||  $('#gria').is(':checked')){
    $('button[name=guardartodo]').prop('disabled',false);}
    else{
        $('button[name=guardartodo]').prop('disabled',true);}
/*
var sum=0;
$('.subtotal').each(function() {
sum += parseFloat($(this).text().replace(/,/g, ''), 10);
porc=18*sum/100;
total=sum+porc;
});
;
$('#subT').val(sum.toFixed(2));
$('#igvP').val(porc.toFixed(2));
$('#totalPr').val(total.toFixed(2)); */

             }
         });





});
  $("#bprodu").select2({
    minimumInputLength: 3,
    dropdownParent: $("#agregarArti")
  });
  $('#bprodu').change(function(selectPro){
      selectPro=$('#bprodu').val();
       var producto = selectPro;

       $.ajax({
                url:"{{route('comprasShowart')}}",
                method:"POST",
                data:{
                    producto:producto,
                },
            success:function(data){
                $('#PRO_codigo').val(data[0].PRO_codigo);
                $('#PRO_id').val(data[0].PRO_id);
               $('#PRO_nombre').val(data[0].PRO_nombre);
               $('#PRO_garantia').val(data[0].PRO_gcomprar);
               $('#CATPRO_id').val(data[1].CATPRO_descripcion);
               $('#MARCA_id').val(data[2].MARCA_descripcion);
               $('#PRO_modelo').val(data[0].PRO_modelo);
               $('#UME_id').val(data[3].UME_descripcion);
               $('#costoAnterior').val(data[4].COMPROI_costo);


            }
       });
  });
  $('#guardarPr').each(function (el){
    $(this).bind("click",saveProducto);
});

function saveProducto(){
    var codigo= $('#PRO_rcodigo').val();
    var categoria=$('#PRO_rcategoria').val();
 var serie=$('input:radio[name=serie]:checked').val()
    var nombre=$('#PRO_rnombre').val();
    var marca=$('#PRO_rmarca').val();
    var modelo=$('#PRO_rmodelo').val();
    var detalle=$('#PRO_rdetalle').val();
    var unidad=$('#PRO_runi').val();
    var gmin=$('#PRO_rmin').val();
    var gmax=$('#PRO_rmax').val();
    var dcomprar=$('#PRO_rcomprar').val();
    var dvender=$('#PRO_rvender').val();
    var ultimo=$('#id_ultimoP').val();
    var $example = $("#bprodu").select2();
        $.ajax({
            url:"{{route('rProductoStore')}}",
            method:"POST",
            data:{
             codigo,
             categoria,
             serie,
             nombre,
             marca,
             modelo,
             detalle,
             unidad,
             gmin,
             gmax,
             dcomprar,
             dvender
            },
        success:function(data){
            $("#agregarArticulo").modal("hide");

$example.append($('<option>', { //agrego los valores que obtengo de una base de datos
               value: data.PRO_id,
               text: data.PRO_codigo+' - '+data.PRO_nombre,
               selected: true
              }));
$example.val(data.PRO_id).trigger("change"); //lo selecciona
$("#bprodu").select2({
minimumInputLength: 3,
dropdownParent: $("#agregarArti")
});
limpiarFormPro();
        }
    });
}
function limpiarFormPro(){
    $('#PRO_rcodigo').val('');
    $('#PRO_rcategoria').val('1');
    $('#PRO_rnombre').val('');
    $('#PRO_rmarca').val('1');
    $('#PRO_rmodelo').val('');
    $('#PRO_rdetalle').val('');
    $('#PRO_runi').val('1');
    $('#PRO_rmin').val('');
    $('#PRO_rmax').val('');
    $('#PRO_rcomprar').val('');
    $('#PRO_rvender').val('');
    $('#id_ultimoP').val('');

};

$('#guardarPr').each(function (el){
    $(this).bind("click",saveProducto);
});

function saveProducto(){
    var codigo= $('#PRO_rcodigo').val();
    var categoria=$('#PRO_rcategoria').val();
 var serie=$('input:radio[name=serie]:checked').val()
    var nombre=$('#PRO_rnombre').val();
    var marca=$('#PRO_rmarca').val();
    var modelo=$('#PRO_rmodelo').val();
    var detalle=$('#PRO_rdetalle').val();
    var unidad=$('#PRO_runi').val();
    var gmin=$('#PRO_rmin').val();
    var gmax=$('#PRO_rmax').val();
    var dcomprar=$('#PRO_rcomprar').val();
    var dvender=$('#PRO_rvender').val();
    var ultimo=$('#id_ultimoP').val();
    var $example = $("#bprodu").select2();
        $.ajax({
            url:"{{route('rProductoStore')}}",
            method:"POST",
            data:{
             codigo,
             categoria,
             serie,
             nombre,
             marca,
             modelo,
             detalle,
             unidad,
             gmin,
             gmax,
             dcomprar,
             dvender
            },
        success:function(data){
            $("#agregarArticulo").modal("hide");

$example.append($('<option>', { //agrego los valores que obtengo de una base de datos
               value: data.PRO_id,
               text: data.PRO_codigo+' - '+data.PRO_nombre,
               selected: true
              }));
$example.val(data.PRO_id).trigger("change"); //lo selecciona
$("#bprodu").select2({
minimumInputLength: 3,
dropdownParent: $("#agregarArti")
});
limpiarFormPro();
        }
    });
}
function limpiarFormPro(){
    $('#PRO_rcodigo').val('');
    $('#PRO_rcategoria').val('1');
    $('#PRO_rnombre').val('');
    $('#PRO_rmarca').val('1');
    $('#PRO_rmodelo').val('');
    $('#PRO_rdetalle').val('');
    $('#PRO_runi').val('1');
    $('#PRO_rmin').val('');
    $('#PRO_rmax').val('');
    $('#PRO_rcomprar').val('');
    $('#PRO_rvender').val('');
    $('#id_ultimoP').val('');

};
})

$('#cancelarCompra').click(function () {
    Swal.fire({
   title: 'Esta seguro que desea eliminar datos de esta compra?',

   type: 'warning',
   showCancelButton: true,
   confirmButtonColor: '#1c2c3d',
   cancelButtonColor: '#797979',
   confirmButtonText: 'Si',
   cancelButtonText: 'Cancelar'
 }).then((result) => {
   if (result.value) {
    $.get("{{route('eliminarta')}}",


                       function (data, status) {
                        location.reload();
             });




     Swal.fire(
       'La compra fue eliminada!',


     )
   }

 })
});

   /*        $('#cancelarCompra').click(function () {

$.ajax({
                     url:"{{route('eliminarta')}}",
                     method:"get",
                     succes: function(data){
                        location.reload();
            }

                     });
}); */
    function activacompra(){
        if ($('#factura').is(':checked')) {
        $('input[name=COMPRO_factura]').prop('disabled',false);
        $('input[name=COMPRO_facturaF]').prop('disabled',false);
        $('input[name=COMPRO_factura]').prop('required',true);
        $('input[name=COMPRO_facturaF]').prop('required',true);
        if($('table#tabA tbody tr').length >0){
        $('button[name=guardartodo]').prop('disabled',false);}
        }
        else{
            $('input[name=COMPRO_factura]').prop('disabled',true);
        $('input[name=COMPRO_facturaF]').prop('disabled',true);
        $('input[name=COMPRO_factura]').prop('required',false);
        $('input[name=COMPRO_facturaF]').prop('required',false);
        $('input[name=COMPRO_factura]').val('');
        $('input[name=COMPRO_facturaF]').val('');
        if( $('#gria').is(':checked') &&  $('table#tabA tbody tr').length >0){
        $('button[name=guardartodo]').prop('disabled',false);}
        else{
            $('button[name=guardartodo]').prop('disabled',true);}
        }

        }

function guardarmensaje(){
    Swal.fire({
  position: 'top',
  type: 'success',
  title: 'Compra realizada',
  showConfirmButton: false,
  timer: 1500
})
}

    function activacompraG(){
        if ($('#gria').is(':checked')) {
        $('input[name=COMPRO_gria]').prop('disabled',false);
        $('input[name=COMPRO_griaF]').prop('disabled',false);

        $('input[name=COMPRO_gria]').prop('required',true);
        $('input[name=COMPRO_griaF]').prop('required',true);
        if($('table#tabA tbody tr').length >0){
        $('button[name=guardartodo]').prop('disabled',false);}
        }
        else{
        $('input[name=COMPRO_gria]').prop('disabled',true);
        $('input[name=COMPRO_griaF]').prop('disabled',true);
        $('input[name=COMPRO_gria]').prop('required',false);
        $('input[name=COMPRO_griaF]').prop('required',false);
        $('input[name=COMPRO_gria]').val('');
        $('input[name=COMPRO_griaF]').val('');
        if( $('#factura').is(':checked') &&  $('table#tabA tbody tr').length >0){
        $('button[name=guardartodo]').prop('disabled',false);}
        else{
            $('button[name=guardartodo]').prop('disabled',true);}



        }

    };
    $('#datepicker').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
    });
    $('#datepicker').datepicker( new Date());
    $('#datepicker1').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
    });
    // $('#datepicker1').datepicker("setDate", new Date());
     $('#datepicker1').datepicker( new Date());




