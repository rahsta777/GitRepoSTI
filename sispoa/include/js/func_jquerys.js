function ConsultaDatos(){
    $.ajax({
      url: 'consul_user.php',
      cache: false,
      type: "GET",
      success: function(datos){
        $("#tabla").html(datos);
      }
    });
  }

/*======================registras=================================================*
$(document).ready(function() {
    $("#btn_enviar").click(function(){
    $("#success_message").show();//muestra el div
      alert("paso al jquery ajax");
       var nom_usuario= $("#first_name").val();
        var desc_usuario = $("#apell_user").val();
        var email_usuario = $("#email").val();
       
      
       // alert('Datos : '+idcod_prov+""+desc_prov+""+tipo_prov+""+rif_prov+""+otrades_prov);
        var parametros12 = {
                "usuario_x" : nom_usuario ,
                "usuario_apell_x" : desc_usuario,
                "usuario_email_x" : email_usuario
        };
        $.ajax({
            type: "post",
            url: "funciones.php",
            data:  {usuario_x:usuario_y,usuario_apell_x:usuario_apell_y,usuario_email_x:usuario_email_y},
            beforeSend: function () {
                        $("#success_message").html("Procesando, espere por favor...");
            },
                success:  function (response) {
                        $("#success_message").html(response).effect( "bounce", "slow").hide(1000);
                }
        });
        return false;
    });
});
/*function Limpiar()
{
    $("#cod_prov_t1").val("");
    $("#desc_prov_t1").val("");
    $("#tipo_prov_t1").val("");
    $("#rif_prov_t1").val("");
}
*/
	/**_________________________________________________________________________
  $(document).ready(function() {
		$('#div-btn1').click(function(){
                      alert("Entro opcion 1");
                    
                    $.ajax({
                        type: "POST",
                        url: "formulario.php",
                        success: function(a) {
                            $('#central').slideDown('slow', function() {
                                $('#central').html(a);
                              });
                            /*$('#content').css('background-image', 'url(images/fondo.gif)');*/
                            /*$('#central').css('background-color', 'black'); 
                            $('#central').css('color', 'white'); 
                            $('#central').css('border', '1px white');
                            
                        }
                    });
                });

		$('#div-btn2').click(function(){
		 alert("Entro opcion 2");
		$.ajax({
	            type: "POST",
	            url: "inc/products.php",
	       		success: function(a) {

	       			$('#central').html(a);
	          	}
			});
		});
                
                $('#div-btn3').click(function(){

		$.ajax({
	            type: "POST",
	            url: "inc/news.php",
	       		success: function(a) {

	       			$('#central').html(a);

	          	}
			});
		});
                
                $('#div-btn4').click(function(){

		$.ajax({
	            type: "POST",
	            url: "inc/contact.php",
	       		success: function(a) {

	       			$('#central').html(a);

	          	}
			});
		});


	});


 
  /===============================================================**/
      $(function() {
        /*alert("paso al 1er tabs");*/
    $( "#tabs" ).tabs({
       beforeLoad: function( event, ui ) {
        ui.jqXHR.fail(function() {
          ui.panel.html(
            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
            "If this wouldn't be a demo." );
        });
      }
    });
  });
   
    
   $(function() {
    $( "#tabs1" ).tabs({
      beforeLoad: function( event, ui ) {
        ui.jqXHR.fail(function() {
          ui.panel.html(
            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
            "If this wouldn't be a demo." );
        });
      }
    });
  });
  
   
   
    $(function() {
    $( "#tabs2" ).tabs({
      beforeLoad: function( event, ui ) {
        ui.jqXHR.fail(function() {
          ui.panel.html(
            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
            "If this wouldn't be a demo." );
        });
      }
    });
  });
    
      $(function() {
    $( "#tabs3" ).tabs({
      beforeLoad: function( event, ui ) {
        ui.jqXHR.fail(function() {
          ui.panel.html(
            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
            "If this wouldn't be a demo." );
        });
      }
    });
  });
      
      $(function() {
    $( "#tabs4" ).tabs({
      beforeLoad: function( event, ui ) {
        ui.jqXHR.fail(function() {
          ui.panel.html(
            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
            "If this wouldn't be a demo." );
        });
      }
    });
  });
   
      $(function() {
    $( "#tabs5" ).tabs({
      beforeLoad: function( event, ui ) {
        ui.jqXHR.fail(function() {
          ui.panel.html(
            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
            "If this wouldn't be a demo." );
        });
      }
    });
  });
       
      $(function() {
    $( "#tabs6" ).tabs({
      beforeLoad: function( event, ui ) {
        ui.jqXHR.fail(function() {
          ui.panel.html(
            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
            "If this wouldn't be a demo." );
        });
      }
    });
  });

      $(function() {
    $( "#tabs7" ).tabs({
      beforeLoad: function( event, ui ) {
        ui.jqXHR.fail(function() {
          ui.panel.html(
            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
            "If this wouldn't be a demo." );
        });
      }
    });
  });
/**para la ventana Fadein**/
  /**===============================================================**=**/


  $(document).ready(function(){
  $('#open').click(function(){
    $('#popup').fadeIn('slow');
    //$('body').css('opacity', '0.5');
    return false;
  });
  
  $('#close').click(function(){
    $('#popup').fadeOut('slow');
    //$('body').css('opacity', '1');
    return false;
  });
  
  $('#open').click(function(){
    $('#popup2').fadeIn('slow');
    //$('body').css('opacity', '0.5');
    return false;
  });
  
  $('#close').click(function(){
    $('#popup2').fadeOut('slow');
    //$('body').css('opacity', '1');
    return false;
  });
});
/**para para trasferir archivo cvs a guardar a la DB del poa**/
  /**===============================================================*/

  $(function(){
  $('#frmArchivo').submit(function(){
    
    var comprobar = $('#archivo').val().length;
      var valorfile=$('#archivo').val();
   
    alert("paso el archivo [ "+valorfile+" ]  este es el la Longitud: [ "+comprobar+" ]");
    
    if(comprobar>0){
      
      var formulario = $('#frmArchivo');
      
      var archivos = new FormData();  
      
      var url = '../../views/plantillas/impor_cvs_poa.php';
      
        for (var i = 0; i < (formulario.find('input[type=file]').length); i++) { 
        
                 archivos.append((formulario.find('input[type="file"]:eq('+i+')').attr("name")),((formulario.find('input[type="file"]:eq('+i+')')[0]).files[0]));
         
            }
        
      $.ajax({
        
        url: url,
        
        type: 'POST',
        
        contentType: false, 
        
              data: archivos,
        
                processData:false,
        
        beforeSend : function (){
          
          $('#success_message').html('<center><img src="../recursos/cargando.gif" width="50" heigh="50"></center>');  
        
        },
        success: function(data){
          
          if(data == 'OK'){

            $('#success_message').html('<label style="padding-top:10px; color:green;">Importacion de CSV exitosa</label>'); 
            return false; 

          }else{

            $('#success_message').html('<label style="padding-top:10px; color:red;">Error en la importacion del CSV</label>');
            return false;

          }
          
      
        }
        
      });
      
      return false;
      
    }else{
      
      alert('Selecciona un archivo CSV para importar');
      
      return false;
      
    }
  });
});
 /**===============================================================**=**/