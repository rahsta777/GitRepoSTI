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
<script type="text/javascript">
function consulta_ajax(var1)
 {
    	var var1=(document.getElementById("clave").value);
        var var2=(document.getElementById("login").value);
        //alert("paso")+var1;
  if ((var1.length==0) && (var2.length==0))
  { 
    alert("debe llenar todos los campos")+var1.length;
  }
  else{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("la_consulta").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","accss_2.php?var1="+var1+"&var2="+var2,true);


xmlhttp.send();

}
	}
    
</script>

<!------------------------------------------->
<script>
function cerrarse(){
window.close()
}
</script> 
<script type="text/javascript"> 
function focos(idElemento)
						{
							document.getElementById("login").focus();
						}
	
</script>
</head>
<body onLoad=focos();>
<?php
// ConexiÃ³n a la base de datos
include("Conexion1.php"); 
include("f_fecha.php");
		
 ?>
 <div  class="pweb">
 <div >
<div id="top" style="width:788px;height:450px;left:30px;top:60px;"> 
  <div id="header"> 
     <div id="login-form" > </div>
    
    <H3>Sistema Integrado para Control de la Academia de idioma Chino</h3>
  </div>
	<div id='content'>
		<div id='basic-modal'>
			<input id="dato_00" type="button" name='basic' value='INGRESAR' class='basic'/>
		</div>
	</div><!--fin content-->
    <div ><img src="images/muralla_inic.png" width="780" height="285"></div>
  <p><a href="javascript:close();"><img src="images/salir.gif" alt="Salir" width="20" height="20" border="0" align="right"></a></p>
</div><!--fin top-->

</div><!--CONTENEDOR -->
</div><!--pweb -->
		<!---------------------------- modal content ------------------------------->
    		<div id="basic-modal-content">
    			 <form action="menu.php" method="POST" >
            
     	         <!--- --------------------------------------------------------------------------->
                 <div class="cuadro_login" id="dato">
                        <div  id="fila" >
                          	<div   id="dato_login" align="center" ><img src="images/lock.png"><div style="font-size:20px;" id="cabecera"><span class="header2">Indica Datos de Acceso</span></div></div>
                           <div style='display:none'>
    			                 <img src='images/lock_off.png' alt='' />
                            </div>
                       	
                        </div>
                       
                       <hr>
                           
                                   <div style="font-size:14px;">
                                        <strong>Login:</strong><input type="text"  name="login" id="login" size="10" >
                                        <strong>Clave:</strong><input type="password"  name="clave" id="clave" size="10" onkeyup="consulta_ajax(this.value)">
                                       <input id="enviar"  type="submit" value="enviar" onclick="consulta_ajax()">
                                   </div>
                             </form>
                            <div id="dato_login"  align="center"  ><span id="la_consulta"></div>
                     
                     </div><!---cuadro_login ------>
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
