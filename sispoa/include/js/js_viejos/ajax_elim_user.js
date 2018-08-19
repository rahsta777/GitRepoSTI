
function elimin_user()
{
    var var1 = $("#id1").val();
   alert("paso el ajaxJQ id "+var1)
    $("#respuesta").html("<img src="loader.gif"><span> Por favor espera un momento</span>");
    $.ajax({
        type: "POST",
        dataType: 'html',
        url: "elimreg_user.php",
        data: "id1="+var1,
        success: function(resp){
            $('#respuesta').html(resp);
            Limpiar();
            Cargar();
        }
    });
}   

function Limpiar()
{
    $("#cedula").val("");
    $("#nombre").val("");
    $("#fecha").val("");
    $("#cargo").val("");
}