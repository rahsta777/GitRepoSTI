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

/**************************************************************************/

</script>
<script>
function realizaProceso(Caja1){
        var parametros14 = {
                "var14" : Caja1 /*,
                "valorCaja2" : valorCaja2*/
        };
        $.ajax({
                data:  parametros14,
                url:   'localizar_fact_procesadas.php',
                type:  'post',
                beforeSend: function () {
                        $("#la_consulta14").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#la_consulta14").html(response);
                }
        });
}
</script>
<script language="JavaScript">

$(document).ready(function(){
                   
                            
                      
                            /* =================registro de nombre y apellido================00*/
                             $("#ayuda02").mouseenter(function(evento){
                                $("#msn02").css("display","block");
                               });
                                  $("#ayuda02").mouseleave(function(evento){ 
                                       $("#msn02").css("display","none");
                                   });
                       
   })                
                
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
										
                                            <strong>Buscar:</strong><input type="text"  name="buscarprov" id="buscarprov14" size="10" style="background:url(images/fondo_input/fondo_input.png);width:100px;height:30px ;" onkeyup="realizaProceso($('#buscarprov14').val());return false;" />
																							<!--input type="button" href="javascript:;" onclick="realizaProceso($('#buscarprov13').val());return false;" value="Calcula"/--> <a><img id="ayuda02" src="img/ayuda.gif"></a>  <!--input type="button" href="javascript:;" onclick="realizaProceso($('#buscarprov13').val());return false;" value="Calcula"/-->
                                            <div id="msn02" class="contacto_v"> <p><strong>Localice producto  indicando: Nombre Representante,  Empresa o Rif.</strong></p></div>        	</div>
  	      																								<div id="la_consulta14"></div>
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
