o<?php header('Content-type: text/html; charset=utf-8'); ?>
<?PHP 
   session_start ();
?>
<html>
<head>


<link rel="stylesheet" type="text/css" href="css/style_audit.css" >

<title> Listado</title>

<script>
function buscafact_mant(val_mantfact){
        var pasaval = {
                "variante" : val_mantfact /*,
                "valorCaja2" : valorCaja2*/
        };
        
        $.ajax({
                data:  pasaval,
                url:   'localizar_fact_mant.php',
                type:  'post',
                beforeSend: function () {
                        $("#la_consulta_fact").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#la_consulta_fact").html(response);
                }
        });
}
</script>
<script language="JavaScript">

$(document).ready(function(){
                   
                            
                           /*-----------------------------------------------------------*/    
                           /* =================registro cedula================00*/
                             $("#ayuda_ced_01").mouseenter(function(evento){
                                $("#msn_ced01").css("display","block");
                         });
                        $("#ayuda_ced_01").mouseleave(function(evento){
                             $("#msn_ced01").css("display","none");
                         });
                            /* =================registro de nombre y apellido================00*/
                             $("#ayuda_nom_01").mouseenter(function(evento){
                                $("#msn_nom01").css("display","block");
                               });
                                  $("#ayuda_nom_01").mouseleave(function(evento){ 
                                       $("#msn_nom01").css("display","none");
                                   });
                        /*-----------------------------------------------------------*/  
                          
                          $("#ayuda_ape01").mouseenter(function(evento){
                                $("#msn_ape01").css("display","block");
                         });
                        $("#ayuda_ape01").mouseleave(function(evento){
                             $("#msn_ape01").css("display","none");
                         });
                                                
   })                
                
</script>
<!--=========================0rutina jqry.ajax o para enviar una variable para consultar=================================-->

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
										
                                            <strong>Buscar:</strong><input type="text"  name="buscafact" id="buscafact" size="10" style="background:url(images/fondo_input/fondo_input.png);width:100px;height:30px ;" onkeyup="buscafact_mant($('#buscafact').val());return false;" />
																						 <a><img id="ayuda_ced_01" src="img/ayuda.gif"></a>	<!--input type="button" href="javascript:;" onclick="realizaProceso($('#buscarprov13').val());return false;" value="Calcula"/-->
                                            <div id="msn_ced01" class="contacto_v"> <p><strong>Localice producto  indicando: Nombre Representante,  Empresa o Rif.</strong></p></div>                    	</div>
  	      																								<div id="la_consulta_fact"></div>
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
