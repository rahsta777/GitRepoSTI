<?php header('Content-type: text/html; charset=utf-8'); ?>
<?PHP 
   session_start ();
?>
<html>
<head>


<link rel="stylesheet" type="text/css" href="css/style_audit.css" >

<title> Listado</title>
<script>
function buscar_prove(elemento12){
        var datosvar = {
                "var12" : elemento12 /*,
                "valorCaja2" : valorCaja2*/
        };
        $.ajax({
                data:  datosvar,
                url:   'localizar_prov_mant.php',
                type:  'post',
                beforeSend: function () {
                        $("#la_consulta12").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#la_consulta12").html(response);
                }
        });
}
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
										
                                            <strong>Buscar:</strong><input type="text"  name="buscapromant" id="buscapromant" size="10" style="background:url(images/fondo_input/fondo_input.png);width:100px;height:30px ;" onkeyup="buscar_prove($('#buscapromant').val());return false;" />
																							<!--input type="button" href="javascript:;" onclick="realizaProceso($('#buscarprov13').val());return false;" value="Calcula"/-->
                                                                	</div>
  	      																								<div id="la_consulta12"></div>
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
