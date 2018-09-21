<?php header('Content-type: text/html; charset=utf-8'); ?>
<?PHP 
   session_start ();
?>
<html>
<head>


<link rel="stylesheet" type="text/css" href="css/style_audit.css" >

<title> Listado</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script language= "JavaScript" >
/*$(document).ready(function(){
                                
        var consulta;
                                                                          
         //hacemos focus al campo de búsqueda
        $("#buscarprov13").focus();
                                                                                                    
        //comprobamos si se pulsa una tecla
        $("#buscarprov13").keyup(function(e){
                                     
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#buscarprov13").val();
                                                                           
              //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "localizar_procesar_fact.php",
                    data: "var13="+consulta,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#la_consulta13").html("<p align='center'><img src='ajax-loader.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#la_consulta13").empty();
                          $("#la_consulta13").append(data);
                                                             
                    }
              });
                                                                                  
                                                                           
        });
                                                                   
});*/
/**************************************************************************/

</script>
<script>
function realizaProceso(valorCaja1){
        var parametros = {
                "var13" : valorCaja1 /*,
                "valorCaja2" : valorCaja2*/
        };
        $.ajax({
                data:  parametros,
                url:   'localizar_procesar_fact.php',
                type:  'post',
                beforeSend: function () {
                        $("#la_consulta13").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#la_consulta13").html(response);
                }
        });
}
</script>
</head>
<!--script language= "JavaScript" src="js/checkcolor.js"></script-->

<body>
<?PHP
  if (isset($_SESSION["usuario_valido"]))
				 {
								$usuario_actual=$_SESSION["usuario_valido"];
								$nombre_user=$_SESSION["nom_usuario"];
								$tipo_user=$_SESSION["tipo_user"]
    
			?>
					
                           <div  style="font-size:14px;">
                                      
								                         <div style="width:20%">       																			              																			
										
                                            <strong>Buscar:</strong><input type="text"  name="buscarprov" id="buscarprov13" size="10" style="background:url(images/fondo_input/fondo_input.png);width:100px;height:30px ;" onkeyup="realizaProceso($('#buscarprov13').val());return false;" />
																							<!--input type="button" href="javascript:;" onclick="realizaProceso($('#buscarprov13').val());return false;" value="Calcula"/-->
                                                                	</div>
  	      																								<div id="la_consulta13"></div>
																			        </div>       
        
                    

                    <?php
 }
   else
   {
      ?>  <div id="fila_conectar">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='acceso.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  </div> <?php 
   }
   ?>
 
</body>
</html>
