<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<?php

   session_start ();
?>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/sddm.css" >
<link rel="stylesheet" type="text/css" href="css/style_audit.css" >
<script type='text/javascript' src='js/func_menu.js'></script>
<script language="javascript" type="text/javascript" src="js/niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="css/niceforms-default.css" />
<script language= "JavaScript" src="js/checkcolor.js"></script>
<!--script language= "JavaScript" src="js/activ_desac.js"></script-->
<!---  calendarios --->

<script src="calendario/js/jquery-1.5.2.js" type="text/javascript"></script>
<script src="js/jquery.maskedinput.js" type="text/javascript"></script>
<link rel="stylesheet" href="calendario/css/jquery.ui.all.css" type="text/css">
<script type="text/javascript" src="calendario/js/jquery.ui.core.js"></script>
<script type="text/javascript" src="calendario/js/jquery.ui.datepicker.js"></script>
<script>
                                    	
/**************************************************/
	
/**************************************************/
	$(function() {
	$( "#fecha" ).datepicker({ 
                                    		 autoSize: true,
                                                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                                                dayNamesMin: ['Dom', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                                                firstDay: 1,
                                                monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                                                monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
                                                dateFormat: 'dd/mm/yy',
                                                changeMonth: true,
                                                changeYear: true,
                                    			yearRange: "-90:+0",
                                    			
                                    		
                                    		});

/*$( "#fecha1" ).datepicker({ 
                                    		 autoSize: true,
                                                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                                                dayNamesMin: ['Dom', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                                                firstDay: 1,
                                                monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                                                monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
                                                dateFormat: 'dd/mm/yy',
                                                changeMonth: true,
                                                changeYear: true,
                                    			yearRange: "-90:+0",
                                    			
                                    		
                                    		});                                    	


	$( "#fecha2" ).datepicker({ 
                                    		 autoSize: true,
                                                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                                                dayNamesMin: ['Dom', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                                                firstDay: 1,
                                                monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                                                monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
                                                dateFormat: 'dd/mm/yy',
                                                changeMonth: true,
                                                changeYear: true,
                                    			yearRange: "-90:+0",
                                    			
                                    		
                                    		});

                                    		$( "#fecha3" ).datepicker({ 
                                    		 autoSize: true,
                                                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                                                dayNamesMin: ['Dom', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                                                firstDay: 1,
                                                monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                                                monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
                                                dateFormat: 'dd/mm/yy',
                                                changeMonth: true,
                                                changeYear: true,
                                    			yearRange: "-90:+0",
                                    			
                                    		
                                    		});*/
                                    		
                                    		
                                    	});
  </script> 
<!--------------------------------------->
<script> 
jQuery(function($){
   $(".fecha").mask("99/99/9999");
   $(".fecha1").mask("99/99/9999");
   $("#telefono").mask("(999) 999-9999");
   $("#codigo").mask("9999");
			$("#cod_audnoconfr").mask("a***-a**-a*-a*-99-9999");
   $("#cod_auditor").mask("a***-a**-a*-a*-99-9999");
  $("#cod_plan").mask("a***-9999");
   $("#cod_p").mask("a***-9999");
   $("#telefone").mask("(999)-999.99.99");
 $("#caracter").mask("a******************");
 $.mask.definitions['~']='[EV]';
 $("#ced").mask("~-99.999.999");
	$("#ced1").mask("~-99.999.999");
 $("#cifra").mask("999.999,99");
 $("#porcentajes").mask("999,99");
 $("#propio").mask("~9.99 ~9.99 999"); 

});
</script> 
<script>
$(document).ready(function(){
   $("#num_unit").mouseover(function(event){
      $("#msn").css('display','inline');
    });
   $("#num_unit").mouseout(function(event){
      $("#msn").css('display','none');
   });
/***-----------------------------------------*
  $(".cedulaplan").mouseover(function(event){
      $(".msncedplan").css('display','inline');
    });
   $(".cedulaplan").mouseout(function(event){
      $(".msncedplan").css('display','none');
   });
  ****************************************
  $(".cedulapro").mouseover(function(event){
      $(".msnpro").css('display','inline');
    });
   $(".cedulapro").mouseout(function(event){
      $(".msnpro").css('display','none');
   });
/**********************************************/
/****************************************/
  $(".cedulapersonal").mouseover(function(event){
      $(".msnpersonal").css('display','inline');
    });
   	$(".cedulapersonal").mouseout(function(event){
    $(".msnpersonal").css('display','none');
   });
/**********************************************/
/*******************************************/
});
</script>
<!----------->
<link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
<!-- Contact Form CSS files -->
<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />
<!-- tab Ajax -->
     <link rel="stylesheet" type="text/css" href="ajaxtabs/ajaxtabs.css" />
    <script type="text/javascript" src="ajaxtabs/ajaxtabs.js"></script>
    <link rel="stylesheet" href="ajaxtabs/jquery.ui.all.css">
    <link rel="stylesheet" href="ajaxtabs/demos.css"/>
<!-- fin tab Ajax -->




<style type="text/css" media="screen, print">
@font-face {
	font-family: "ghostclanexpand";
      	src: url("ttf/ghost_clan/ghostclanexpand.ttf");
 }
 </style>
<style type="text/css" media="screen, print">
@font-face {
	font-family: "ghostclangradital";
      	src: url("ttf/ghost_clan/ghostclanlaserital.ttf");
 }
 </style>
 <style type="text/css" media="screen, print">
 
@font-face {
	font-family: "ghostclan3d";
      	src: url("ttf/ghost_clan/ghostclan3d.ttf");
 }
#titul {float:left; font-family: "ghostclanexpand", sans-serif,bold;font-size:17px;color: #FFFFFF;text-shadow: black 0.1em 0.1em 0.2em;}
#subtitl {float:left; font-family: "ghostclangradital", sans-serif,bold;font-size:18px;color: #00FF00;text-shadow: black 0.1em 0.1em 0.2em}
</style>

<title>SICOA</title>



<style type="text/css">
#apDiv1 {
	
	width:80px;
	height:20px;

}

</style>
<!--script src="js/jquery.min.js" type="text/javascript"> </script-->

<script type="text/javascript">
window.onload=function(){
var pos=window.name || 0;
window.scrollTo(0,pos);
}
window.onunload=function(){
window.name=self.pageYOffset || (document.documentElement.scrollTop+document.body.scrollTop);
}
</script> 

</head>

<body >
<?PHP
   if (isset($_SESSION["usuario_valido"]))
   {
    $usuario_actual=$_SESSION["usuario_valido"];
    $nombre_user=$_SESSION["nom_usuario"];
    $tipo_user=$_SESSION["tipo_user"];
    
?>
<div class="contenedor"  >
<!--************* id barra1**************** -->
<div id="barra1">
<div id="b1"><img src="images/pdvsa.png" width="230px"></div>
<div id="b0">Sistema De Control de Auditoria</div>
<div id="b3"><img  id="b1" src="images/Profile.png" width="20px" ><p id="titul" style="margin-right:10px;">Usuario:</p><p id="subtitl" style="margin-right:10px;"><?PHP echo $usuario_actual; ?></p>
<p id="titul" style="margin-right:10px;">Acceso:  </p><p id="subtitl" style="margin-right:10px;"><?PHP echo $tipo_user;?></p></div>

</div><!--**************fin id barra1**************** -->
<div id="fila" >
<div  id="box1">
<!-- *********************************Menu Principal****************************** -->

<div id="box3" >
<div class="main"><img src="images/PNG/Config0.png" width="16%" style="float:left">

<select name="opcion" class="contacto_v" onchange="getComboA(this)">
                    <option value="general">General</option>
                    <!--option value="mantenimiento">Mantenimiento</option-->
                    <option value="documentos">Documentos</option>
                    <option value="reportes">Reportes</option>
                    <option selected> Ninguno</option> </select>

</div></div>

<div class="clearfloat"></div>

<!-- *********************************Menu General****************************** -->
<!-- ***************************************opcion general menu Modulo de usuario**************************** -->
<div  class="frame1">
<div class="navbar" id="opcion1">
<!--**************************************************************************************************-->
<div class="mainDiv" >
<div class="topItem" ><img src="images/HP-MSN.png" width="16%" style="float:left">Usuarios</div>        
<div class="dropMenu" ><!-- -->
<div class="subMenu" style="display:none;">
<div class="subItem"><a href="#" onmouseover="blendon('contenido0'); blendoff('contenido1'); blendoff('contenido2');blendoff('contenido3');blendoff('contenido4'); oculta('contaud0'); oculta('contaud1'); oculta('contaud2'); oculta('contaud3'); oculta('contaud4'); oculta('contaud5'); oculta('contaud6');oculta('contaud7');oculta('contaud8'); oculta('contaud9');  blendoff('report00'); blendoff('contmant0'); "  onclick="return false;" >Gestion de Usuario</a></div>
<div class="subItem"><a href="#" onmouseover="blendon('contenido1');blendoff('contenido0'); blendoff('contenido2'); blendoff('contenido3');blendoff('contenido4');blendoff('contaud0');blendoff('contaud1'); blendoff('contaud2');blendoff('contaud3');blendoff('contaud4');blendoff('contaud5');blendoff('contaud6');blendoff('contaud7');blendoff('contaud8');blendoff('contaud9'); blendoff('contmant0');"  onclick="return false;" >Perfil de Usuario</a></div>
<div class="subItem"><a href="#" onmouseover="blendon('contenido2'); blendoff('contenido0');blendoff('contenido1'); blendoff('contenido3');blendoff('contenido4');blendoff('contaud0');blendoff('contaud1'); blendoff('contaud2');blendoff('contaud3');blendoff('contaud4');blendoff('contaud5');blendoff('contaud6');blendoff('contaud7');blendoff('contaud8');blendoff('contaud9'); blendoff('contmant0');"  onclick="return false;" >Listado Alfabetico</a></div>
<!--div class="subItem"><a href="#" onmouseover="blendon('contenido3'); blendoff('contenido0');blendoff('contenido2'); blendoff('contenido1');blendoff('contenido4');blendoff('contaud0');blendoff('contaud1'); blendoff('contaud2');blendoff('contaud3');blendoff('contaud4');blendoff('contaud5');blendoff('contaud6');blendoff('contaud7');blendoff('contaud8');blendoff('contaud9');"  onclick="return false;" >Listado por Categoria</a></div>
<div class="subItem"><a href="#" onmouseover="blendon('contenido4');blendoff('contenido0'); blendoff('contenido2'); blendoff('contenido3');blendoff('contenido1');blendoff('contaud0');blendoff('contaud1'); blendoff('contaud2');blendoff('contaud3');blendoff('contaud4');blendoff('contaud5');blendoff('contaud6');blendoff('contaud7');blendoff('contaud8');blendoff('contaud9');"  onclick="return false;" >Listado por Centro</a></div-->
</div>
</div>
</div>


<!-- *************************************************************** -->
<div class="mainDiv" >
<div class="topItem"><img src="images/PNG/Config.png" width="16%" style="float:left">Auditorias</div>        
<div class="dropMenu" ><!-- -->
    
	<div class="subMenu" style="display:none;">
    <div class="subItem"><a href="#" onmouseover="visible('contaud0'); blendoff('contaud1'); blendoff('contaud2'); blendoff('contaud3'); blendoff('contaud4'); blendoff('contaud5'); blendoff('contaud6'); blendoff('contaud7'); blendoff('contaud8'); blendoff('contaud9'); oculta('contenido0'); oculta('contenido1'); oculta('contenido2'); oculta('contenido3');oculta('contenido4');oculta('report00'); blendoff('contmant0');blendoff('contmant1');" onclick="return false;" >Datos Auditorias</a></div>
    <div class="subItem"><a href="#" onmouseover="visible('contaud1'); blendoff('contaud0'); blendoff('contaud2'); blendoff('contaud3'); blendoff('contaud4'); blendoff('contaud5'); blendoff('contaud6'); blendoff('contaud7'); blendoff('contaud8'); blendoff('contaud9'); blendoff('contenido0'); blendoff('contenido1'); blendoff('contenido2'); blendoff('contenido3'); blendoff('contenido4'); blendoff('contmant0');blendoff('contmant1');"  onclick="return false;" >Auditorias</a></div>
    <div class="subItem"><a href="#" onmouseover="visible('contaud2'); blendoff('contaud0'); blendoff('contaud1'); blendoff('contaud3'); blendoff('contaud4'); blendoff('contaud5'); blendoff('contaud6'); blendoff('contaud7'); ;blendoff('contaud8'); blendoff('contaud9'); blendoff('contenido0'); blendoff('contenido1'); blendoff('contenido2'); blendoff('contenido3'); blendoff('contenido4'); oculta('report00'); blendoff('contmant0');blendoff('contmant1');"  onclick="return false;" >Programaci&oacute;n</a></div>
    <div class="subItem"><a href="#" onmouseover="visible('contaud3'); blendoff('contaud0'); blendoff('contaud1'); blendoff('contaud2'); blendoff('contaud4'); oculta('contaud5'); oculta('contaud6'); oculta('contaud7'); oculta('contaud8'); oculta('contaud9'); oculta('contenido0');oculta('contenido1'); oculta('contenido2');oculta('contenido3'); oculta('contenido4'); oculta('report00'); blendoff('contmant0');blendoff('contmant1');"  onclick="return false;">Plan</a></div>
    <div class="subItem"><a href="#" onmouseover="visible('contaud4'); blendoff('contaud0'); blendoff('contaud1'); blendoff('contaud2'); blendoff('contaud3'); blendoff('contaud5');blendoff('contaud6'); blendoff('contaud7'); blendoff('contaud8'); blendoff('contaud9'); blendoff('contenido0');blendoff('contenido1'); blendoff('contenido2'); blendoff('contenido3'); blendoff('contenido4');oculta('report00'); blendoff('contmant0');blendoff('contmant1');"  onclick="return false;" >Hallazgo</a></div>
    <div class="subItem"><a href="#" onmouseover="visible('contaud5'); blendoff('contaud0'); blendoff('contaud1'); blendoff('contaud2'); blendoff('contaud3'); blendoff('contaud4');blendoff('contaud6'); blendoff('contaud7'); blendoff('contaud8'); blendoff('contaud9'); blendoff('contenido0');blendoff('contenido1'); blendoff('contenido2'); blendoff('contenido3'); blendoff('contenido4'); blendoff('contmant0');"  onclick="return false;" >Informe</a></div>
    <div class="subItem"><a href="#" onmouseover="visible('contaud6'); blendoff('contaud0'); blendoff('contaud1'); blendoff('contaud2'); blendoff('contaud3'); blendoff('contaud4');blendoff('contaud5'); blendoff('contaud7'); blendoff('contaud8'); blendoff('contaud9'); blendoff('contenido0'); blendoff('contenido1'); blendoff('contenido2'); blendoff('contenido3'); blendoff('contenido4');oculta('report00'); blendoff('contmant0'); blendoff('contmant1');"  onclick="return false;" >NoConformidad</a></div>
    <div class="subItem"><a href="#" onmouseover="visible('contaud7'); blendoff('contaud0'); blendoff('contaud1'); blendoff('contaud2'); blendoff('contaud3'); blendoff('contaud4');blendoff('contaud5'); blendoff('contaud6'); blendoff('contaud8'); blendoff('contaud9'); blendoff('contenido0'); blendoff('contenido1'); blendoff('contenido2'); blendoff('contenido3'); blendoff('contenido4');oculta('report00'); blendoff('contmant0'); blendoff('contmant1');"  onclick="return false;" >Declaracion/Acciones</a></div>
    <div class="subItem"><a href="#" onmouseover="visible('contaud8'); blendoff('contaud0'); blendoff('contaud1'); blendoff('contaud2'); blendoff('contaud3'); blendoff('contaud4'); blendoff('contaud5'); blendoff('contaud6'); blendoff('contaud7'); blendoff('contaud9'); blendoff('contenido0'); blendoff('contenido1'); blendoff('contenido2'); blendoff('contenido3'); blendoff('contenido4');oculta('report00'); blendoff('contmant0'); blendoff('contmant1');"  onclick="return false;" >Plan Accion Corrct</a></div>
    <div class="subItem"><a href="#" onmouseover="visible('contaud9'); blendoff('contaud0'); blendoff('contaud1'); blendoff('contaud2'); blendoff('contaud3'); blendoff('contaud4');blendoff('contaud5'); blendoff('contaud6'); blendoff('contaud7'); blendoff('contaud8'); blendoff('contenido0'); blendoff('contenido1'); blendoff('contenido2'); blendoff('contenido3'); blendoff('contenido4');oculta('report00'); blendoff('contmant0');blendoff('contmant1');"  onclick="return false;" >Seguimiento y accion</a></div>
    </div>
</div>
</div>

<!-- ***************************************************************--> 
<div class="mainDiv" >
<div class="topItem"  ><img src="images/Window.png" width="25px" style="float:left">Mantenimiento</div>        
<div class="dropMenu" >
<div class="subMenu" style="display:none;">
    <div class="subItem"><a href="#" onmouseover="visible('contmant0'); blendoff('contmant1'); blendoff('contenido0'); blendoff('contenido1'); blendoff('contenido2');blendoff('contenido3');blendoff('contenido4'); oculta('contaud0'); oculta('contaud1'); oculta('contaud2'); oculta('contaud3'); oculta('contaud4'); oculta('contaud5'); oculta('contaud6');oculta('contaud7');oculta('contaud8'); oculta('contaud9');  blendoff('report00');" onclick="return false;" >Auditorias</a></div>
    <div class="subItem"><a href="#" onmouseover="visible('contmant1');  blendoff('contmant0'); blendoff('contmant2'); blendoff('contmant3'); blendoff('contmant4'); blendoff('contmant5'); blendoff('contenido0'); blendoff('contenido1'); blendoff('contenido2');blendoff('contenido3');blendoff('contenido4'); oculta('contaud0'); oculta('contaud1'); oculta('contaud2'); oculta('contaud3'); oculta('contaud4'); oculta('contaud5'); oculta('contaud6');oculta('contaud7');oculta('contaud8'); oculta('contaud9');  blendoff('report00');blendoff('contmant0');blendoff('contmant1');"  onclick="return false;" >Usuarios</a></div>
    <!--div class="subItem"><a href="#" onmouseover="visible('contmant2'); blendoff('contaud0'); blendoff('contaud1'); blendoff('contaud3'); blendoff('contaud4'); blendoff('contaud5'); blendoff('contmant0');"click="return false;" >Disponble</a></div>
    <div class="subItem"><a href="#" onmouseover="visible('contmant3'); blendoff('contaud0'); blendoff('contaud1'); blendoff('contaud2'); blendoff('contaud4'); oculta('contaud5'); blendoff('contmant0');"  onclick="return false;">Disponble</a></div>
    <div class="subItem"><a href="#" onmouseover="visible('contmant4'); blendoff('contaud0'); blendoff('contaud1'); blendoff('contaud2'); blendoff('contaud3'); blendoff('contaud5');"  onclick="return false;" >Disponbleo</a></div>
    <div class="subItem"><a href="#" onmouseover="visible('contmant5'); blendoff('contmant0'); blendoff('contmant1'); blendoff('contmant2'); blendoff('contmant3'); blendoff('contmant4');"  onclick="return false;" >Disponble</a></div-->
 </div>
</div>
</div>

<!-- *************************************************************** -->
<div class="mainDiv" >
<div class="topItem"  ><img src="images/documen_db.png" width="16%" style="float:left">Backups</div>        
<div class="dropMenu" ><!-- -->
	<div class="subMenu" style="display:none;">
		<div class="subItem"><a href="backup.php">Generar el Backups</a></div>
  <div class="subItem"><a href="restore1.php">Restaurar la DB</a></div>
		
        </div>
</div>
</div>
<!-- ***************************************fin opcion GENERAL**************************** -->

<!-- ********************************* Menu OPCION 1 ****************************** -->
</div><!-- *****finopcion 1*********** -->
<!-- *********************************Menu Mantenimiento*************************-->
<!-- ******************************************************************* -->
<div class="navbar"  id="opcion2">
<div class="mainDiv" >
<div class="topItem" >Mantenimiento..</div>        
<div class="dropMenu" ><!-- -->
	<div class="subMenu" style="display:none;">
		<div class="subItem"><a href="#">Configuration</a></div>
	 <div class="subItem"><a href="#">Tool Box</a></div>
		<div class="subItem"><a href="#">Contact Us</a></div>
		<div class="subItem"><a href="#">Sub Menu 4</a></div>
		<div class="subItem"><a href="#">Sub Menu 5</a></div>
	</div>
</div>
</div>


<!-- *************************************************************** -->


<!-- *************************************************************** -->
<div class="mainDiv" >
<div class="topItem"  >Mantenimiento3</div>        
<div class="dropMenu" ><!-- -->
	<div class="subMenu" style="display:none;">
		<div class="subItem"><a href="#">Gestion de Usuario</a></div>
		<div class="subItem"><a href="#">Perfil de usuario</a></div>
		<div class="subItem"><a href="#">Listado Alfabetico</a></div>
		<!--div class="subItem"><a href="#">Listado por Centro</a></div>
         <div class="subItem"><a href="#">Listado por Categorias</a></div-->
        </div>
</div>
</div>

<!-- *************************************************************** -->
<div class="mainDiv" >
<div class="topItem"  >Mantenimiento4</div>        
<div class="dropMenu" ><!-- -->
	<div class="subMenu" style="display:none;">
		<div class="subItem"><a href="#">Configuration</a></div>
		<div class="subItem"><a href="#">Sub Menu 2</a></div>
		<div class="subItem"><a href="#">Sub Menu 3</a></div>
		<div class="subItem"><a href="#">Sub Menu 4</a></div>
        </div>
</div>
</div>

<!-- *************************************************************** -->
<div class="mainDiv" >
<div class="topItem"  >Mantenimiento5</div>        
<div class="dropMenu" ><!-- -->
	<div class="subMenu" style="display:none;">
		<div class="subItem"><a href="#">Configuration</a></div>
		<div class="subItem"><a href="#">Sub Menu 2</a></div>
		<div class="subItem"><a href="#">Sub Menu 3</a></div>
		<div class="subItem"><a href="#">Sub Menu 4</a></div>
        </div>
</div>
</div>
</div>
<!-- *********************************End OPCION2****************************** -->

<!-- *********************************Menu Reportes*************************-->
<!-- ******************************************************************* -->
<div class="navbar" id="opcion4">
<div class="mainDiv" >
<div class="topItem" >Usuarios</div>        
<div class="dropMenu" ><!-- -->
	   <div class="subMenu" style="display:none;">
    <div class="subItem"><a href="../reportes/rep_useraudit.php" onmouseover="visible('report00'); oculta('report01'); blendoff('contaud0'); blendoff('contaud1'); blendoff('contaud2'); blendoff('contaud3'); blendoff('contaud4'); blendoff('contaud5'); blendoff('contaud6'); blendoff('contaud7'); blendoff('contaud8'); blendoff('contaud9'); blendoff('contenido0'); blendoff('contenido1'); blendoff('contenido2'); blendoff('contenido3'); blendoff('contenido4');" onclick="return false;" >Reporte de Usuarios</a></div> 
    <div class="subItem"><a href="#" onmouseover="visible('report01'); oculta('report00'); blendoff('contaud0'); blendoff('contaud1'); blendoff('contaud2'); blendoff('contaud3'); blendoff('contaud4'); blendoff('contaud5'); blendoff('contaud6'); blendoff('contaud7'); blendoff('contaud8'); blendoff('contaud9'); blendoff('contenido0'); blendoff('contenido1'); blendoff('contenido2'); blendoff('contenido3'); blendoff('contenido4')" onclick="return false;" >Reporte de tal</a></div>    
	</div>
</div>
</div>


<!-- **********************************************************-->
<div class="mainDiv" >
<div class="topItem"  >Auditoria</div>        
<div class="dropMenu" >
	<div class="subMenu" style="display:none;">
		<div class="subItem"><a href="#" onmouseover="visible('report01'); oculta('report00'); blendoff('contaud0'); blendoff('contaud1'); blendoff('contaud2'); blendoff('contaud3'); blendoff('contaud4'); blendoff('contaud5'); blendoff('contaud6'); blendoff('contaud7'); blendoff('contaud8'); blendoff('contaud9'); blendoff('contenido0'); blendoff('contenido1'); blendoff('contenido2'); blendoff('contenido3'); blendoff('contenido4');" onclick="return false;" >NoConformidad</a></div>
		<div class="subItem"><a href="#">Perfil</a></div>
		<div class="subItem"><a href="#">Tasa de Auditores</a></div>
		<div class="subItem"><a href="#">Listado por CIF/</a></div>
        </div>
</div>
</div>

 <!-- **********************************************************-->
<!--div class="mainDiv" >
<div class="topItem"  >Reportes2</div>        
<div class="dropMenu" >
	<div class="subMenu" style="display:none;">
		<div class="subItem"><a href="#">Gestion de Usuario</a></div>
		<div class="subItem"><a href="#">Perfil de usuario</a></div>
		<div class="subItem"><a href="#">Listado Alfabetico</a></div>
		<div class="subItem"><a href="#">Listado por Centro</a></div>
         <div class="subItem"><a href="#">Listado por Categorias</a></div>
        </div>
</div>
</div-->

 <!-- **********************************************************-->
<!--div class="mainDiv" >
<div class="topItem"  >Reportes3</div>        
<div class="dropMenu" >
	<div class="subMenu" style="display:none;">
		<div class="subItem"><a href="#">Configuration</a></div>
		<div class="subItem"><a href="#">Sub Menu 2</a></div>
		<div class="subItem"><a href="#">Sub Menu 3</a></div>
		<div class="subItem"><a href="#">Sub Menu 4</a></div>
        </div>
</div>
</div-->

<!-- **********************************************************-->
<!--div class="mainDiv" >
			<div class="topItem"  >Reportes4</div>        
						<div class="dropMenu" >
									<div class="subMenu" style="display:none;">
												<div class="subItem"><a href="#">Configuration</a></div>
												<div class="subItem"><a href="#">Sub Menu 2</a></div>
												<div class="subItem"><a href="#">Sub Menu 3</a></div>
												<div class="subItem"><a href="#">Sub Menu 4</a></div>
									</div>
					</div>
			</div-->
</div>
<!-- *********************************FIN OPCION 3 ****************************** -->

<!-- **********************************************************-->
<!-- ******************************************************************* -->
<div  class="navbar" id="opcion3">
<div class="mainDiv" >
<div class="topItem" >Auditoria</div>        
<div class="dropMenu" ><!-- -->
	<div class="subMenu" style="display:inline;">
 <div class="subItem"><a href="documentos/Plan de auditoria.doc" >Plan de Auditoria</a></div>
	<div class="subItem"><a href="documentos/formato de acciones correctivas y preventivas.doc" >Acciones Correp.Prev.</a></div>
	<div class="subItem"><a href="documentos/Hallazgos auditoria.doc" >Hallazgo Auditoria</a></div>
 <div class="subItem"><a href="documentos/Informe de Auditoria.doc" >Informe Auditoria</a></div>
 <div class="subItem"><a href="documentos/Plan de auditorias de gestion de la calidad.doc" >Plan de Auditorias</a></div>
	</div>
</div>
</div>


<!-- *************************************************************** -->
<div class="mainDiv" >
<div class="topItem"  >De No Comformidad</div>        
<div class="dropMenu" ><!-- -->
	<div class="subMenu" style="display:none;">
		<div class="subItem"><a href="documentos/reportenoconfor.pdf" >No Conformidad</a></div>
		<div class="subItem"><a href="#">Perfil</a></div>
		<div class="subItem"><a href="#">Tasa de Auditores</a></div>
		<div class="subItem"><a href="#">Listado por CIF/</a></div>
        </div>
</div>
</div>

<!-- *************************************************************** -->
<div class="mainDiv" >
<div class="topItem"  >Documentos3</div>        
<div class="dropMenu" ><!-- -->
	<div class="subMenu" style="display:none;">
		<div class="subItem"><a href="#">Gestion de Usuario</a></div>
		<div class="subItem"><a href="#">Perfil de usuario</a></div>
		<div class="subItem"><a href="#">Listado Alfabetico</a></div>
		<div class="subItem"><a href="#">Listado por Centro</a></div>
         <div class="subItem"><a href="#">Listado por Categorias</a></div>
        </div>
</div>
</div>

<!-- *************************************************************** -->
<div class="mainDiv" >
<div class="topItem"  >Documentos4</div>        
<div class="dropMenu" ><!-- -->
	<div class="subMenu" style="display:none;">
		<div class="subItem"><a href="#">Configuration</a></div>
		<div class="subItem"><a href="#">Sub Menu 2</a></div>
		<div class="subItem"><a href="#">Sub Menu 3</a></div>
		<div class="subItem"><a href="#">Sub Menu 4</a></div>
        </div>
</div>
</div>

<!-- *************************************************************** -->
<div class="mainDiv" >
<div class="topItem"  >Documentos5</div>        
<div class="dropMenu" ><!-- -->
	<div class="subMenu" style="display:none;">
		<div class="subItem"><a href="#">Configuration</a></div>
		<div class="subItem"><a href="#">Sub Menu 2</a></div>
		<div class="subItem"><a href="#">Sub Menu 3</a></div>
		<div class="subItem"><a href="#">Sub Menu 4</a></div>
        </div>
</div>
</div>
</div>
<!-- *********************************FIN OPCION4****************************** -->
</div><!-- ***********end frame1*********** -->
<script type="text/javascript" src="js/xpmenuv21.js"></script>

</div><!-- *********************************FIN BOX1******************* -->
<div   class="clearfloat"></div>
<div id="fondoPrincipal">

</div>
<div ><!-- *********************************usuario/general****************************** -->
<!-- *********************************Perfil de usuario****************************** -->
	<div  class="contenido" id="contenido1">

		<script type="text/javascript">
function seleccionar_todo(){
   for (i=0;i<document.f1.elements.length;i++)
      if(document.f1.elements[i].type == "checkbox")
         document.f1.elements[i].checked=1
} 
function deseleccionar_todo(){
   for (i=0;i<document.f1.elements.length;i++)
      if(document.f1.elements[i].type == "checkbox")
         document.f1.elements[i].checked=0
} </script>
		 <fieldset>
		     <legend ><img src="images/HP-MSN1.png" width="30px">Perfil de Usuario</legend>
             
	<?php	
     include("conexion/Conexion1.php");
		$link=Conectarse(); 
	 	$busqueda=mysql_query("SELECT * FROM user_audit ");
	 
            	print ("<TABLE cellspacing='0' cellpadding='4' border='0'  ALIGN=CENTER> ");
		print ("<TR bgcolor='#3151B2' style='color:#fff;font:font-family:bold'>");
		print ("<TH>&nbsp;</TH>");
		print ("<TH>Status</TH>");
		print ("<TH>Estado</TH>");
		print ("<TH width='20%'>Codigo</TH>");
		print ("<TH width='20%' >Nombre</TH>");
		print ("<TH width='40%'>Apellido</TH>");
		print ("<TH>Alias</TH>");
		print ("<TH>Perfil</TH>");
		print ("</TR>");   
 		$contchka=0;
           while($filas=mysql_fetch_array($busqueda))
           {
            $contchka+=1;
												$status=$filas['estado_user'];
												//$localiza_imagen=$filas['foto_alumno'];
												$nombre=$filas['nomb_user'];
												$apell1=$filas['apel1_user'];
												$alias=$filas['alias_user'];
												$cod_empl=$filas['cod_emplea_user'];
												$perfil_user=$filas['perfil_user'];
/*echo $contchka;*/
 print ("<TR>\n");
?>
<form id="form1" method="post" action="">
<tr align='center' id="colorcheck"> 
<td bgcolor='#FFFFFF'><input type="checkbox" name="<?php echo 'chequeado'.$contchka ?>" value="<?php echo $cod_empl;?>" id="<?php echo $cod_empl;?>" onclick="Cambio(this.id)" /></td>
 <?php
	 if($status=="activo"){?>
<TD> <a href=""><input type="hidden" value="<?php echo $cod_empl;?>" id="valor_icono"  onclick="cambia_status(this.id)"><img src="images/accept.png" width="20" height="20" border="0" name="imagen1"></a></TD > 
 <?php
		/*print ("<TD > <a href='#' onmouseover='cambia(imagen1,img1)' onmouseout='cambia(imagen1,img2)'><img src='images/accept.png' width='20' height='20' border='0' name='imagen1'></a><br><br> </TD>\n");*//*<img src='images/accept.png' width='20px'>*/

		}
	if($status=="inactivo"){
		print ("<TD > <a href='#' onmouseover='cambia(imagen1,img2)' onmouseout='cambia(imagen1,img1)'><img src='images/inactve.png' width='20' height='20' border='0' name='imagen1'></a><br><br> </TD>\n");/*<img src='images/inactve.png' width='20px'>*/

		}
if($status=="baja"){
		print ("<TD > <a href='#' onmouseover='cambia(imagen1,img2)' onmouseout='cambia(imagen1,img1)'><img src='images/error.gif' width='20' height='20' border='0' name='imagen1'></a><br><br> </TD>\n");/*<img src='images/inactve.png' width='20px'>*/

		}
	?>							 					

<?php	
             
printf("<td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'>
                   <font size='2'>&nbsp;%s</td>  <td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td> <td ><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td>
                     </tr>",$status, $cod_empl, $nombre, $apell1, $alias, $perfil_user);
		}
?>	
</form>
</TABLE>
 
<!--a href="javascript:seleccionar_todo()">Marcar todos</a> 
<a href="javascript:deseleccionar_todo()">Marcar ninguno</a--> 

		</dl>
		    </fieldset>
	</div><!-- *********************************contenido tab****************************** -->
	
<div class="contenido"  id="contenido0">
<fieldset>
<legend><img src="images/HP-MSN1.png" width="30px">Gestionar Usuarios </legend>
	<dl>
<div class="tabs">
					<ul id="countrytabs" class="shadetabs" >
							<li><a href="#" rel="#default" class="selected">Informacion</a></li>
							<li><a href="reg_user_audit.php" rel="countrycontainer">Registro Usuarios</a></li>
							<li><a href="cons_perfuser.php" rel="countrycontainer">Vista Perfil Usuarios</a></li>
					</ul>
	<div id="countrydivcontainer" style="padding:5px;background:white url(fondo_input.gif) top left repeat-x;border-radius:10px 50px 10px 50px;width:90%; ">
          <p>Este módulo permite el registro de las Tablas básicas</p>
    </div>
</div>

	</dl>
		    </fieldset>

	</div>

		<!----***************************************************************************************************-->
    	<div class="contenido"  id="contenido2">
 		<fieldset>
		     <legend ><img src="images/HP-MSN1.png" width="30px">Listado alfabetico</legend>
			
	 	

            	<dl>
			
		</dl>
		    </fieldset>
	</div>
<!----***************************************************************************************************-->
	<div class="contenido"  id="contenido3">
<fieldset>
		     <legend ><img src="images/HP-MSN1.png" width="30px">Listado Por Categoria</legend>
		333333333  3 3 3 3 3 3 3
            	<dl>
			
		</dl>
		    </fieldset>
	</div>
<!----*************************************************************************-->
	<div class="contenido"  id="contenido4">
<fieldset>
		     <legend ><img src="images/HP-MSN1.png" width="30px">Listado Por Centro</legend>
		4444 4 4 4 4 4 4 4 4  4
            	<dl>
			
		</dl>
		    </fieldset>

	</div>
</div><!-- ************************fin usuario/general****************** -->
<div>
<!-- *********************************Auditoria/general*************************** -->
<!----******************************contaud0****************************-->
		<div class="contenido"  id="contaud0">
<fieldset>
		     <legend ><img src="images/PNG/Config.png" width="30px">Datos Auditados</legend>
		
            	<dl>
                <div id="tabs">
		<ul id="conttabs" class="shadetabs" >
		<!--li><a href="#" rel="#default" class="selected">Informacion</a></li-->
   	        <li><a href="reg_grcia_audit.php" rel="countrycontainer" class="selected" >Registro Grcias</a></li>
                <li><a href="reg_personal_audit.php" rel="countrycontainer">Personal</a></li>
                <li><a href="reg_rol_audit.php" rel="countrycontainer">Roles</a></li>
                <li><a href="reg_unit_audit.php" rel="countrycontainer">Unidad</a></li>
		        <li><a href="reg_cargo_audit.php" rel="countrycontainer">Cargos</a></li>
				<li><a href="reg_filial_audit.php" rel="countrycontainer">Filial</a></li>
                <li><a href="reg_requisito_audit.php" rel="countrycontainer">Requisitos</a></li>  
	            <li><a href="reg_activ_audit.php" rel="countrycontainer">Actividad</a></li> 
				<li><a href="reg_tip_nc.php" rel="countrycontainer">Tipo de NC</a></li>			 
				<li><a href="reg_evaldor.php" rel="countrycontainer">Evaluador</a></li>
				<li><a href="reg_requiere.php" rel="countrycontainer">Requiere</a></li>
					</ul>
	<div id="divcontainer" style="padding:5px;background:white; url(images/plateados.jpg) top left repeat-x;border-radius:10px 50px 10px 50px;width:90%; ">
    <p>Este módulo permite el registro de las Tablas básicas</p>
 </div>
</div>
			
		</dl>
		    </fieldset>
	</div>

<!----******************************************fin contaud0*********************************************************-->
<!----****************************************contaud1***********************************************************-->
<div class="contenido"  id="contaud1"><!-/-->
<fieldset>
<legend><img src="images/PNG/Config.png" width="30px">Datos Auditorias</legend>
	
<dl>
	<div id="tabs">
					<ul id="conttabs1" class="shadetabs" >
							<li><a href="#" rel="#default" class="selected">Informacion</a></li>
							<li><a href="reg_audit.php" rel="countrycontainer">Registro Auditoria</a></li>
							<li><a href="reg_propo_audit.php" rel="countrycontainer">Datos Proponente</a></li>
		     <li><a href="cons_auditorias.php" rel="countrycontainer">Consultas</a></li> 
      
                            
                            
					</ul>
	<div id="divcontainer1" style="padding:5px;background:white; url(images/plateados.jpg) top left repeat-x;border-radius:10px 50px 10px 50px;width:75%; ">
    <p>Este módulo permite el registro de las Tablas básicas</p>
 </div>
</div>

	</dl>
 </fieldset>
	</div>



<!----***************************************************************************************************-->
<!----****************************************contaud2***********************************************************-->
	<div class="contenido"  id="contaud2">
<fieldset>
		     <legend ><img src="images/PNG/Config.png" width="30px">Programaci&oacute;n</legend>
		<dl>
	<div id="tabs">
					<ul id="countrytabs1" class="shadetabs" >
							<li><a href="#" rel="#default" class="selected">Informacion</a></li>
							<li><a href="reg_progcio_audit.php" rel="countrycontainer">Registro program</a></li>
							<li><a href="cons_prgaudit00.php" rel="countrycontainer">Consulta</a></li>
                            <li><a href="reg_evaluadr_audit.php" rel="countrycontainer">Disponoble</a></li>
                            
                            
					</ul>
	<div id="countrydivcontainer1" style="padding-left:30px;background:white url(fondo_input.gif) top left repeat-x;border-radius:10px 50px 10px 50px;width:70%; ">
    <p>Este m&oacute;dulo permite el registro de las Tablas básicas</p>
 </div>
</div>

	</dl>
		    </fieldset>
	</div>
            
			
		
<!----***************************************************************************************************-->
<!----****************************************contaud3***********************************************************-->
	<div class="contenido"  id="contaud3">
<fieldset>
        <legend ><img src="images/PNG/Config.png" width="30px">Plan</legend>
	<dl>
	<div id="tabs">
	 <ul id="countrytabs11" class="shadetabs" >
            <li><a href="#" rel="#default" class="selected">Informacion</a></li>
            <li><a href="reg_plan_audit.php" rel="countrycontainer">Registro Plan</a></li>
            <li><a href="consu_plan.php" rel="countrycontainer">Consulta</a></li>
            <li><a href="reg_evaluadr_audit.php" rel="countrycontainer">Disponoble</a></li>
         </ul>
	<div id="countrydivcontainer11" style="padding:5px;background:white url(fondo_input.gif) top left repeat-x;border-radius:10px 50px 10px 50px;width:100%; ">
        <p>Este m&oacute;dulo permite el registro de las Tablas básicas</p>
      </div>
      </div>
	</dl>
		    </fieldset>
	</div>

<!----***************************************************************************************************-->
<!----****************************************contaud4***********************************************************-->
	<div class="contenido"  id="contaud4">
<fieldset>
		     <legend ><img src="images/PNG/Config.png" width="30px">Hallazgo</legend>
		Aqui lo de auditoria 4
            	<dl>
			
		</dl>
		    </fieldset>
	</div>
<!----***************************************************************************************************-->
<!----****************************************contaud5***********************************************************-->
	<div class="contenido"  id="contaud5">
<fieldset>
		     <legend ><img src="images/PNG/Config.png" width="30px">Informe</legend>
		Aqui lo de auditoria 5
            	<dl>
			
		</dl>
		    </fieldset>
	</div>
<!----***************************************************************************************************-->
<!----****************************************contaud6***********************************************************-->
	<div class="contenido"  id="contaud6">
<fieldset>
		     <legend ><img src="images/PNG/Config.png" width="30px">No Conformidad</legend>
		<dl>
	<div id="tabs">
					<ul id="countrytabs12" class="shadetabs" >
							<li><a href="#" rel="#default" class="selected">Informacion</a></li>
							<li><a href="reg_nocomf.php" rel="countrycontainer">Informe No-Comforidad</a></li>
							<li><a href="consu_nocomfor.php" rel="countrycontainer">Consulta</a></li>
							<!--li><a href="requeriente_nocon.php" rel="countrycontainer">Requiriente</a></li-->
       <!--li><a href="reg_evaluadr_audit.php" rel="countrycontainer">Reg. Evaluador</a></li-->                    
					</ul>
	<div id="countrydivcontainer12" style="padding:5px;background:white url(fondo_input.gif) top left repeat-x;border-radius:10px 50px 10px 50px;width:100%; ">
    <p>Este módulo permite el registro de las Tablas básicas</p>
 </div>
</div>

	</dl>
		    </fieldset>
	</div>
<!----***************************************************************************************************-->
<!----****************************************contaud7***********************************************************-->
	<div class="contenido"  id="contaud7">
<fieldset>
		     <legend ><img src="images/PNG/Config.png" width="30px">Declaracion Acciones</legend>
		Aqui lo de auditoria 7
            	<dl>
			
		</dl>
		    </fieldset>
	</div>
<!----***************************************************************************************************-->
<!----****************************************contaud7***********************************************************-->
	<div class="contenido"  id="contaud8">
<fieldset>
		     <legend ><img src="images/PNG/Config.png" width="30px">Acciones Corre/prev.</legend>
		Aqui lo de auditoria 8
            	<dl>
			
		</dl>
		    </fieldset>
	</div>
<!----***************************************************************************************************-->
<!----****************************************contaud7***********************************************************-->
	<div class="contenido"  id="contaud9">
<fieldset>
		     <legend ><img src="images/PNG/Config.png" width="30px">Auditoria</legend>
		Aqui lo de auditoria 9
            	<dl>
			
		</dl>
		    </fieldset>
	</div>
<!----***************************************************************************************************-->
<!--==============================================Mantenimiento contmant0================================-->
	<div class="contenido"  id="contmant0">
<fieldset>
		     <legend ><img src="images/PNG/Config.png" width="30px">Mantenimiento</legend>
		
            	<dl>

                <div id="tabs">
		<ul id="contmant0tabs" class="shadetabs" >
		<li><a href="#" rel="#default" class="selected">Informacion</a></li>
   	            <li><a href="buscar_audit.php" rel="countrycontainer">Auditorias</a></li>
                <li><a href="reg_rol_audit.php" rel="countrycontainer">Disponible</a></li>
                <!--li><a href="reg_unit_audit.php" rel="countrycontainer">Disponible</a></li>
																<li><a href="reg_cargo_audit.php" rel="countrycontainer">Disponible</a></li-->
															
					</ul>
	<div id="contmant0divcontainer" style="padding:5px;background:white; url(images/fondo_input/fondo_input2.png) top left repeat-x;border-radius:10px 50px 10px 50px;width:90%; ">
    <p>Este módulo permite el Realizar Mantenimiento, anular y actualizar informacion de los registros</p>
 </div>
</div>
			
		</dl>
		    </fieldset>
	</div>
<!--====================================================================================================-->

<!--==============================================Mantenimiento contmant1================================-->
	<div class="contenido"  id="contmant1">
<fieldset>
		     <legend ><img src="images/PNG/Config.png" width="30px">Mantenimiento</legend>
		
         	<dl>
        
              <div id="tabs">
        	  <ul id="contmant01tabs" class="shadetabs" >
        	     <li><a href="#" rel="#default" class="selected">Informacion</a></li>
           	     <li><a href="cons_auditados.php" rel="countrycontainer">Eliminar Usuario</a></li>
                 <li><a href="reg_rol_audit.php" rel="countrycontainer">Disponible</a></li>
                 <!--li><a href="reg_unit_audit.php" rel="countrycontainer">Disponible</a></li>
        		 <li><a href="reg_cargo_audit.php" rel="countrycontainer">Disponible</a></li-->
        															
      		  </ul>
        	<div id="contmant01divcontainer" style="padding:5px;background:white; url(images/fondo_input/fondo_input2.png) top left repeat-x;border-radius:10px 50px 10px 50px;width:90%; ">
            <p>Este módulo permite el Realizar Mantenimiento, anular y actualizar informacion de los registros</p>
         </div>
        </div>
        			
        </dl>
		    </fieldset>
	</div>
<!--====================================================================================================-->




</div><!-- *********************************fin Auditoria/general****************************** -->
<!----**************************************Inicio Modulo Reportes****************************************-->
<div  class="contenido" id="report00">
		 <fieldset>
		     <legend ><img src="images/HP-MSN1.png" width="30px">Reportes de Usuarios</legend>
             
	<dl>


<?php
require('reportes/fpdf.php');
$sel = array (1,3);
		class PDF extends FPDF
		{
		// Cabecera de página
				function Header()
				{
								// Logo
								$this->Image('reportes/imagenes_02.jpg',10,8,33);
								// Arial bold 15
								$this->SetFont('Arial','B',15);
								// Movernos a la derecha
								$this->Cell(80);
								// Título
								$this->Cell(30,10,'Informe de Usuarios del Sistemas','C');
								// Salto de línea
								$this->Ln(20);
				}

		// Pie de página
					function Footer()
					{
									// Posición: a 1,5 cm del final
									$this->SetY(-15);
									// Arial italic 8
									$this->SetFont('Arial','I',8);
									// Número de página
									$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
					}
		}
print ("<Table>\n"); 
print ("<TR>\n");
	 	$busqueda=mysql_query("SELECT * FROM user_audit ");
	 print ("<TABLE cellspacing='0' cellpadding='4' border='0'  ALIGN=CENTER> ");
		print ("<TR>");
		//print ("<TH>&nbsp;</TH>");
		print ("<TH>Status</TH>");
		print ("<TH>Codigo</TH>");
		print ("<TH width='20%'>Nombre</TH>");
		print ("<TH width='20%' >Apellido</TH>");
		print ("<TH>Alias</TH>");
		print ("<TH>Perfil</TH>");
		print ("</TR>");   
 	$c_code = "";
$c_name = "";
$c_price = "";
$c_alias= "";
	$c_perfil= "";
	$c_sttus= "";	
    $c_apll ="";
  while($filas=mysql_fetch_array($busqueda))
    {
		 $status=$filas['estado_user'];
		//$localiza_imagen=$filas['foto_alumno'];
		$nombre=$filas['nomb_user'];
		$apell1=$filas['apel1_user'];
		$alias=$filas['alias_user'];
		$cod_empl=$filas['cod_emplea_user'];
		$perfil_user=$filas['perfil_user'];
		print ("<TR>\n");
		$c_code = $c_code.$cod_empl."\n";
        $c_name = $c_name.$nombre."\n";
		$c_apll = $c_apll.$apell1."\n";
		$c_alias=$c_alias.$alias."\n";
		$c_perfil=$c_perfil.$perfil_user."\n";
		$c_sttus=$c_sttus.$status."\n";
				?>
				<!--tr align='center' id="apDiv1"> 
				<td bgcolor='#FFFFFF'><input type="checkbox" value="<?php echo $cod_empl;?>" id="<?php echo $cod_empl;?>" onclick="Cambio(this.id)" /></td-->
					
				<?php	
								         
				printf("<td><font size='2'>&nbsp;%s</td> <td bgcolor='#FFFFFF'>
								               <font size='2'>&nbsp;%s</td>  <td><font size='2'>&nbsp;%s</td> <td bgcolor='#FFFFFF'><font size='2'>&nbsp;%s</td> <td ><font size='2'>&nbsp;%s</td> <td bgcolor='#FFFFFF'><font size='2'>&nbsp;%s</td>

								                 </tr>",$status, $cod_empl, $nombre, $apell1, $alias, $perfil_user);

		}
echo'<tr><td><a href="report_user00.pdf">Descargar Reporte</a></td></tr>';
//Now show the 3 columns
$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','b',12);
$pdf->Cell(25,10,'Reporte Usuarios');
$pdf->ln(5);
$pdf->Cell(25,20,"Estado");
$pdf->Cell(25,20,"Codigo");
$pdf->Cell(25,20,"Nombre");
$pdf->Cell(25,20,"apellido");
$pdf->Cell(25,20,"Alias");
$pdf->Cell(25,20,"Perfil");
$pdf->ln(5);
$pdf->SetFont('Arial','b',10);
//Now show the 3 columns
$pdf->SetFont('Arial','',12);

$pdf->SetY(48);
$pdf->SetX(10);
$pdf->MultiCell(20,6,$c_sttus,1);

$pdf->SetY(48);
$pdf->SetX(35);
$pdf->MultiCell(20,6,$c_code,1);

$pdf->SetY(48);
$pdf->SetX(58);
$pdf->MultiCell(20,6,$c_name,1);

$pdf->SetY(48);
$pdf->SetX(86);
$pdf->MultiCell(30,6,$c_apll,1);

$pdf->SetY(48);
$pdf->SetX(115);
$pdf->MultiCell(20,6,$c_alias,1);

$pdf->SetY(48);
$pdf->SetX(135);
$pdf->MultiCell(30,6,$c_perfil,1);

$filename="report_user00.pdf";
$pdf->Output($filename,'F');
print ("</TABLE>\n");
 

?>	

		</dl>
		    </fieldset>
</div><!-- *********************************contenido tab report00****************************** -->
	<!----**************************************Fin Modulo Reportes****************************************-->

<!----**************************************Inicio Modulo Reportes****************************************-->
<div  class="contenido" id="report01">
		 <fieldset>
		     <legend ><img src="images/HP-MSN1.png" width="30px">Reportes Auditorias</legend>
             
	     <dl>
              <div id="tabs">
            		<ul id="report01tabs" class="shadetabs" >
                		  <li><a href="#" rel="#default" class="selected">Informacion</a></li>
                   	      <li><a href="buscar_reportnocomft.php" rel="countrycontainer">NoConformidad</a></li>
                          <li><a href="reg_rol_audit.php" rel="countrycontainer">otro</a></li>
                          <!--li><a href="reg_unit_audit.php" rel="countrycontainer">Disponible</a></li>
                		  <li><a href="reg_cargo_audit.php" rel="countrycontainer">Disponible</a></li-->
            		 </ul>
            	<div id="report01divcontainer" style="padding:5px;background:white; url(images/fondo_input/fondo_input2.png) top left repeat-x;border-radius:10px 50px 10px 50px;width:90%; ">
                <p>Este módulo permite el Realizar Mantenimiento, anular y actualizar informacion de los registros</p>
             </div>
            </div>
			

		 </dl>
		    </fieldset>
</div><!-- *********************************contenido tab report00****************************** -->
	<!----**************************************Fin Modulo Reportes****************************************-->

	
</div><!-- *********************************fin fila****************************** -->
</div><!-- *********************************fin contendor****************************** -->
 <?php 
}
  /*if(isset($_SESSION["tipo_user"]) and ($_SESSION["tipo_user"])=='Usuario')
  {
      ?>  <div id="fila_conectar">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='acceso.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  </div> <?php
   		}*/
     elseif(!isset($_SESSION["tipo_user"]))
 		 {
      ?> <div id="fila_conectar">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='acceso.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  </div> <?php     
   }?>
</body>
<script type="text/javascript">
var countries=new ddajaxtabs("countrytabs", "countrydivcontainer")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()
</script>
<script type="text/javascript">
var countries=new ddajaxtabs("conttabs", "divcontainer")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()
</script>
<script type="text/javascript">
var countries=new ddajaxtabs("conttabs1", "divcontainer1")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()
</script>
<script type="text/javascript">
var countries=new ddajaxtabs("countrytabs1", "countrydivcontainer1")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()
</script>
<script type="text/javascript">
var countries=new ddajaxtabs("countrytabs11", "countrydivcontainer11")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()
</script>
<script type="text/javascript">
var countries=new ddajaxtabs("countrytabs12", "countrydivcontainer12")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()
</script>
<script type="text/javascript">
var countries=new ddajaxtabs("contmant0tabs", "contmant0divcontainer")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()
</script>

<script type="text/javascript">
var countries=new ddajaxtabs("contmant01tabs", "contmant01divcontainer")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()
</script>
<script type="text/javascript">
var countries=new ddajaxtabs("report01tabs", "report01divcontainer")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()
</script>
<!-- Load jQuery, SimpleModal and Basic JS files -->
<!--script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script-->




</html>
















