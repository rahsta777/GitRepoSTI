<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
<title> Inicial De Sistema</title>

<link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
<!-- Page styles -->
<link rel="stylesheet" type="text/css" href="css/style_audit.css" >
<!-- Contact Form CSS files -->
<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />

<style type="text/css" media="screen, print">
@font-face {
	font-family: "Bab";
      	src: url("ttf/Bad.ttf");
 }
 @font-face {
	font-family: "ghostclangrad";
      	src: url("ttf/ghost_clan/ghostclanlaserital.ttf");
 }
 
#titul {float:left; font-family: "Bab", sans-serif,bold;font-size:1.8em;color: #0039a3;text-shadow: black 0.1em 0.1em 0.2em}
#titulLogin {float:left; font-family: "ghostclangrad", sans-serif,bold;font-size:35px;color: #0041c2;text-shadow: black 0.1em 0.1em 0.2em}
</style>
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
<script language="JavaScript" type="text/javascript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=yes,width=300,height=300,top=85,left=140";
window.open(pagina,"",opciones);
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
<body onload="Abrir_ventana('acceso1.php')">
<?php

include("conexion/Conexion1.php"); 
/*include("fnc/f_fecha.php");*/
		
 ?>

 <div class="pweb" >

 <div >

<div id="top" style="width:180%px;height:450px;left:30px;top:60px;"> <p><a href="javascript:close();"><img style="position:absolute;top:0px;left:750px;"src="images/Exit.png" alt="Salir" width="30" height="30" border="0" align="right"></a></p> 

  <div id="header"> <img src="images/imagenes_02.gif" width="50%">
     <div id="login-form" > </div>
    <p id="titul">SICOA</p>
    <H3><p>Aplicativo para</p></h3>
  </div>
	<div id='content'>
		<div id='basic-modal'>
			<img src="images/Profile_user_access.png" width="5%"><input id="dato_00" type="button" name='basic' value='INGRESAR' class='basic'/>
		</div>
	</div><!--fin content-->
    <div ><img src="images/plateados02.jpg" width="99%" height="35%"></div>
 
</div><!--fin top-->
</div>
</div><!--CONTENEDOR -->
</div><!--pweb -->

		<!---------------------------- modal content ------------------------------->
    		<div id="basic-modal-content">
    			 <form action="index0.php" method="POST" >
            
     	         <!--- --------------------------------------------------------------------------->
                 <div class="cuadro_login" id="dato">
                        <div  id="fila" >
                         <div   id="dato_login" align="center" ><img src="images/lock.png"><div ><span class="header2" id="titulLogin" >Datos de Acceso</span></div></div>
                           <div style='display:none'>
    			                 <img src='images/lock_off.png' alt='' />
                            </div>
                       	
                        </div>
                            <div style="font-size:14px; font-family:sans-serif,bold;">
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
			<img src='images/x.png' alt='' />
		</div>
	
	

<!-- Load jQuery, SimpleModal and Basic JS files -->
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>

</body>
</html>
