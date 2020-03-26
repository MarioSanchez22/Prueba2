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



//////proveedorCreate


$('#guardaP').click(function(){


 $.ajax({

      success:function(data){
         ;
          alert('se registro');
      }
 });
});
$(document).ready(function() {
//Llenar div de datos al inicio
$(".bt_plus").each(function (el){
  $(this).bind("click",addField);
});
  $.ajax({
      url:"/proveedor/datos/1",
      method:"GET",
      success:function(data){
          $('#verD').html(data);
          }
  });
//Llenar div de origen al inicio
  $.ajax({
      url:"/proveedor/origen/"+0,
      method:"GET",
      success:function(data){
          $('#select2lista').html(data);
          }
  });
//Llenar div de datos al cambiar
  $('#TipoP').change(function(){
      var tipoPr= $(this).val();
      $.ajax({
          url:"/proveedor/datos/"+tipoPr,
          method:"GET",
          success:function(data){
              $('#verD').html(data);
              }
          });
  });
//Llenar div de origem al cambiar
  $('#PROVE_origen').change(function(){
      var origen= $(this).val();
      $.ajax({
          url:"/proveedor/origen/"+origen,
          method:"GET",
          success:function(data){
              $('#select2lista').html(data);
          }
      });
  });

//Llenar div de pais al cambiar
});
function addField(){
// ID del elemento div quitandole la palabra "div_" de delante. Pasi asi poder aumentar el número.
// Esta parte no es necesaria pero yo la utilizaba ya que cada campo de mi formulario tenia un autosuggest,
// así que dejo como seria por si a alguien le hace falta.
var clickID = parseInt($(this).parent('div').attr('id').replace('div_',''));
// Genero el nuevo numero id
var newID = (clickID+1);
// Creo un clon del elemento div que contiene los campos de texto
$newClone = $('#div_'+clickID).clone(true);
//Le asigno el nuevo numero id
$newClone.attr("id",'div_'+newID);
//Asigno nuevo id al primer campo input dentro del div y le borro cualquier valor
// que tenga asi no copia lo ultimo que hayas escrito.(igual que antes no es necesario tener un id)
$newClone.children("input").eq(0).attr("id",'PROVECONT_descripcion'+newID).val('');
//Borro el valor del segundo campo input(este caso es el campo de cantidad)
$newClone.children("input").eq(1).attr("id",'PROVECONT_nombre'+newID).val('');
$newClone.children("input").eq(2).attr("id",'PROVECONT_telefono'+newID).val('');
$newClone.children("input").eq(3).attr("id",'PROVECONT_email'+newID).val('');
//Asigno nuevo id al boton
$newClone.children("button").attr("id",newID)
//Inserto el div clonado y modificado despues del div original
$newClone.insertAfter($('#div_'+clickID));
//Cambio el signo "+" por el signo "-" y le quito el evento addfield
//$("#"+clickID-1).remove();
$("#"+clickID).css("backgroundColor","#c54040");
$("#"+clickID).css("border-Color"," #4e0303");

$("#"+clickID).html('<i class="fe-phone-off" style="width:20px; height:20px;"></i>').unbind("click",addField);
//Ahora le asigno el evento delRow para que borre la fial en caso de hacer click
$("#"+clickID).bind("click",delRow);
}
function delRow() {
// Funcion que destruye el elemento actual una vez echo el click
$(this).parent('div').remove();
}
function addFieldCu(){
// ID del elemento div quitandole la palabra "div_" de delante. Pasi asi poder aumentar el número.
// Esta parte no es necesaria pero yo la utilizaba ya que cada campo de mi formulario tenia un autosuggest,
// así que dejo como seria por si a alguien le hace falta.
var clickID = parseInt($(this).parent('div').attr('id').replace('div_',''));
// Genero el nuevo numero id
var newID = (clickID+1);
// Creo un clon del elemento div que contiene los campos de texto
$newClone = $('#div_'+clickID).clone(true);
//Le asigno el nuevo numero id
$newClone.attr("id",'div_'+newID);
//Asigno nuevo id al primer campo input dentro del div y le borro cualquier valor
// que tenga asi no copia lo ultimo que hayas escrito.(igual que antes no es necesario tener un id)
$newClone.children("input").eq(0).attr("id",'PROVECU_beneficiario'+newID).val('');
//Borro el valor del segundo campo input(este caso es el campo de cantidad)
$newClone.children("input").eq(1).attr("id",'PROVECU_cuenta'+newID).val('');
$newClone.children("input").eq(2).attr("id",'PROVECU_observacion'+newID).val('');

//Asigno nuevo id al boton
$newClone.children("button").attr("id",newID)
//Inserto el div clonado y modificado despues del div original
$newClone.insertAfter($('#div_'+clickID));
//Cambio el signo "+" por el signo "-" y le quito el evento addfield
//$("#"+clickID-1).remove();
$("#"+clickID).css("backgroundColor","#c54040");
$("#"+clickID).css("border-Color"," #4e0303");

$("#"+clickID).html('<i class="fe-phone-off" style="width:20px; height:20px;"></i>').unbind("click",addField);
//Ahora le asigno el evento delRow para que borre la fial en caso de hacer click
$("#"+clickID).bind("click",delRow);
}
function delRowCu() {
// Funcion que destruye el elemento actual una vez echo el click
$(this).parent('div').remove();
}



    $(document).ready(function(){
        $("#PROVE_ruc").keyup(function(){
	        var numruc = $("#PROVE_ruc").val();
	        if(numruc.length == 11){
	        consultadatosSUNAT(numruc);
	    }
        else{
            $("#PROVE_razon_social").val('');
            $("#PROVE_dni").val('');

        }
    });

  function consultadatosSUNAT(PROVE_ruc){
    $('#cargarRuc').show();
    var ruc=$('#PROVE_ruc').val();

        $.ajax({

            method:'GET',
           url: "http://siempreaqui.com/json-sunat/consulta.php",
			data:'nruc='+ruc,
            success:function(data){
                $('#cargarRuc').hide();
                var dataObject = jQuery.parseJSON(data);

                         if (dataObject.success == true) {
						  $("#PROVE_razon_social").val(dataObject.result.RazonSocial);
                           $("#PROVE_razon_comercial").val(dataObject.result.NombreComercial);
                           $("#PROVE_direccion").val(dataObject.result.Direccion);
                           $("#PROVE_dni").val(ruc.substr(2,8));

                         // $("#rs_dni").val(dataObject.result.DNI); No devuelve DNI
                         }
            }
        });
    }
});
