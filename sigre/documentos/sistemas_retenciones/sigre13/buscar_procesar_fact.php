<?php header('Content-type: text/html; charset=utf-8'); ?>
<?PHP /*
   session_start ();*/
?>
<html>
<head>
<!-- Contact Form CSS files -->

<script language= "JavaScript" src="js/checkcolor.js"></script>
<!-- Page styles -->
<link rel="stylesheet" type="text/css" href="css/style_audit.css" >
<!-- simplemodal Form CSS files -->
<link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />
<!-- Load jQuery, SimpleModal and Basic JS files -->
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>
<!-- Fin SimpleModal and Basic JS files-->
<title> Listado</title>
</head>
<body>
<?PHP
  /* if (isset($_SESSION["usuario_valido"]))
				 {
								$usuario_actual=$_SESSION["usuario_valido"];
								$nombre_user=$_SESSION["nom_usuario"];
								$tipo_user=$_SESSION["tipo_user"]
    
			*/?>
					
                           <div  style="font-size:14px;">
                                      
								                         <div style="width:20%">       																			              																			
										
                                            <strong>Buscar:</strong><input type="text"  name="buscarprov" id="buscarprov13" size="10" style="background:url(images/fondo_input/fondo_input.png);width:100px;height:30px ;" onkeyup="query_ajax_prove_fact()">
																																	</div>
  	      																								<div id="la_consulta13"></div>
																			        </div>       
        
                    

                    <?php/*
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
   */?>
 
</body>
</html>
