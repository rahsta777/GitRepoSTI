<!DOCTYPE html>
<html>
<head>
<title> Inicial De Sistema</title>

<link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
<!-- Page styles -->
<link type='text/css' href='css/stilo_div.css' rel='stylesheet' media='screen' /> 
<!-- Contact Form CSS files -->
<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />

<!------------------------------------------->


<!------------------------------------------->



</head>
<body >
<?php
// Conexión a la base de datos
include("Conexion1.php"); 
include("f_fecha.php");
		
 ?>
        <div id='basic-modal'>
			<input  type="button" name='basic' value='INGRESAR' class='basic'/>
		</div>

		<!---------------------------- modal content ------------------------------->
    		<div id="basic-modal-content">
    			 <form action="menu.php" method="POST" >
            
     	         <!--- --------------------------------------------------------------------------->
                <hr>
                           
                                   <div style="font-size:14px;">
                                        <strong>Login:</strong><input type="text"  name="login" id="login" size="10" >
                                        <strong>Clave:</strong><input type="password"  name="clave" id="clave" size="10" onKeypress="consulta_ajax()">
                                       <input id="enviar"  type="submit" value="enviar" onclick="consulta_ajax()">
                                   </div>
               </form>
                    
		</div><!---basic-modal-content ------>

		<!-- preload the images -->
		<div style='display:none'>
			<img src='img/basic/x.png' alt='' />
		</div>
	<!-- Load jQuery, SimpleModal and Basic JS files -->
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>

</body>
</html>
