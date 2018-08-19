<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="richard" />

<title>Untitled 1</title>
<link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
<!-- Page styles -->
<link type='text/css' href='css/stilo_div.css' rel='stylesheet' media='screen' /> 
<!-- Contact Form CSS files -->
<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />
</head>

<body>

	           <div id='basic-modal'>
			     <input id="dato_00" type="button" name='basic' value='Accesar' class='basic'/>
		      </div>
        <div id="basic-modal-content">
			 <form action="acceso.php" method="POST" >
        
 	         <!--- --------------------------------------------------------------------------->
            
                    <div  id="fila" >
                      	<div   id="dato_login" align="center" ><img src="images/lock.png"><div style="font-size:20px;" id="cabecera"><span class="header2">Indica Datos de Acceso</span></div></div>
                       <div style='display:none'>
			                 <img src='images/lock_off.png' alt='' />
                        </div>
                   	
                    </div>
                   
                   <hr>
                  <form id="formulario" name="fomulario" method="post"> 
                       <div style="font-size:14px;">
                            <strong>Login:</strong><input type="text"  name="login" id="login" size="12" >
                            <strong>Clave:</strong><input type="password"  name="clave" id="clave" size="12" >
                            <input id="enviar" type="button" value="enviar" onClick="consulta_ajax()" />
                       </div>
                        
                 </form>
                 
		</div><!---basic-modal-content ------>
        <!-- preload the images -->
		<div style='display:none'>
			<img src='../img/x.png' alt='' />
		</div>
	<!-- Load jQuery, SimpleModal and Basic JS files -->
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>

</body>
</html>