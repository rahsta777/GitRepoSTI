<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>

<!--?php

   session_start ();
?-->
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" >
<link rel="stylesheet" href="css/jquery-ui.css">
<!-----------------------------tabjquery---------------------------------------->
<script language= "JavaScript" src="js/jquery-1.5.2.js"></script>
<script language= "JavaScript" src="js/jquery-ui.js"></script>
<link rel="stylesheet" href="css/style.css">
 


<!---------------------------------------->
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
<link rel="stylesheet" type="text/css" href="css/reset.css"/>
<link rel="stylesheet" type="text/css" href="css/sddm.css" >
<link rel="stylesheet" type="text/css" href="css/style_audit.css" >
<!--script type='text/javascript' src='js/func_menu.js'></script-->
<link rel="stylesheet" type="text/css" media="all" href="css/niceforms-default.css" />

<!----  calendarios ---->

<!---================================Masked input=====================================---->
<!---script src="js/jquery.maskedinput.js" type="text/javascript"></script-->
<!--================================Masked input=====================================---->

<script type='text/javascript' src='js/func_menu.js'></script>
<script language="javascript" type="text/javascript" src="js/niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="css/niceforms-default.css" />
<script language= "JavaScript" src="js/checkcolor.js"></script>
<script language= "JavaScript" src="js/activ_desac.js"></script>



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
#titul {padding:5px;float:left; font-family: "ghostclanexpand", sans-serif,bold;font-size:16px;color: #FFFFFF;text-shadow: black 0.1em 0.1em 0.2em;}
#subtitl {padding:5px;float:left; font-family: "ghostclangradital", sans-serif,bold;font-size:14px;color: #00FF00;text-shadow: black 0.1em 0.1em 0.2em}
</style>

<title>SIGRE</title>


 <script type="text/javascript">
  /**===============================================================**/
      $(function() {
    $( "#tabs" ).tabs({
      beforeLoad: function( event, ui ) {
        ui.jqXHR.fail(function() {
          ui.panel.html(
            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
            "If this wouldn't be a demo." );
        });
      }
    });
  });
   /**===============================================================**/
    
   $(function() {
    $( "#tabs1" ).tabs({
      beforeLoad: function( event, ui ) {
        ui.jqXHR.fail(function() {
          ui.panel.html(
            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
            "If this wouldn't be a demo." );
        });
      }
    });
  });
  
   
   /**===============================================================**/
    $(function() {
    $( "#tabs2" ).tabs({
      beforeLoad: function( event, ui ) {
        ui.jqXHR.fail(function() {
          ui.panel.html(
            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
            "If this wouldn't be a demo." );
        });
      }
    });
  });
     /**===============================================================**/
      $(function() {
    $( "#tabs3" ).tabs({
      beforeLoad: function( event, ui ) {
        ui.jqXHR.fail(function() {
          ui.panel.html(
            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
            "If this wouldn't be a demo." );
        });
      }
    });
  });
       /**===============================================================**/
      $(function() {
    $( "#tabs4" ).tabs({
      beforeLoad: function( event, ui ) {
        ui.jqXHR.fail(function() {
          ui.panel.html(
            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
            "If this wouldn't be a demo." );
        });
      }
    });
  });
    /**===============================================================**/
      $(function() {
    $( "#tabs5" ).tabs({
      beforeLoad: function( event, ui ) {
        ui.jqXHR.fail(function() {
          ui.panel.html(
            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
            "If this wouldn't be a demo." );
        });
      }
    });
  });
       /**===============================================================**/
      $(function() {
    $( "#tabs6" ).tabs({
      beforeLoad: function( event, ui ) {
        ui.jqXHR.fail(function() {
          ui.panel.html(
            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
            "If this wouldn't be a demo." );
        });
      }
    });
  });
  </script>



</head>

<body >



<!--------------------------------------->
<!--?PHP
   if (isset($_SESSION["usuario_valido"]))
   {
    $usuario_actual=$_SESSION["usuario_valido"];
    $nombre_user=$_SESSION["nom_usuario"];
    $tipo_user=$_SESSION["tipo_user"];
    
?-->
<div class="contenedor"  >
<!--************* id barra1**************** -->
<div id="barra1">
<div id="b1"><img src="images/pdvsa.png" width="230px"></div>
<div id="b0">Sistema De Informaci&oacute;n de Retenci&oacute;n</div>
<div id="b3"><img  id="b1" src="images/Profile.png" width="23px" ><p id="titul" style="margin-right:10px;">Usuario:</p><p id="subtitl" style="margin-right:10px;"><?PHP echo $usuario_actual; ?></p>
<p id="titul" style="margin-right:10px;">Acceso:  </p><p id="subtitl" style="margin-right:10px;"><?PHP echo $tipo_user;?></p></div>
<p><a href="cerrar_session.php" title="Cerrar sesión"><img src="images/iconos/relogin.png" alt="" width="30" height="30" border="0" align="right"></a></p> 
<!--p><a href="acceso.php"><img src="images/iconos/exitxfce.png" title="Login" width="30" height="30" border="0" align="right"></a></p--> 
 <p><a href="javascript:close();"><img src="images/iconos/exitxfce.png" title="Salir" width="30" height="30" border="0" align="right"></a></p> 
    </div><!--**************fin id barra1**************** -->
<div id="fila" >
<div  id="box1">
<!-- *********************************Menu Principal****************************** -->

<div id="box3" >
<div class="main"><img src="images/images1.png" width="16%" style="float:left">
<div id="b0" style="padding:5px;left:70px;">MENÚ</div>
<select name="opcion" class="contacto_opcion" onchange="getComboA(this)">
                    <option  value="general">PRINCIPAL</option>
                    <option  value="procesar">PROCESAR CTA.PAGAR</option>
                    <option value="reportes">REPORTE</option>
                    <option selected > NINGUNO</option> </select>

</div></div>

<div class="clearfloat"></div>

<!-- *********************************Menu General****************************** -->
<!-- ***************************************opcion 1 general menu Modulo de usuario**************************** -->
<div  class="frame1">
<div class="navbar" id="opcion1">
<!--**************************************************************************************************-->
<!--?php if ($tipo_user == "administrador"){ ?-->
<div class="mainDiv" >
<div class="topItem" ><img src="images/iconos/user_procesor.png" width="13%" style="float:left">Usuarios</div>        
<div class="dropMenu" ><!-- -->
<div class="subMenu" style="display:none;">
<div class="subItem"><a href="#" onmouseover="blendon('contenido0');blendoff('contenido1'); blendoff('contaud0');   blendoff('contaud1');  blendoff('contmant0'); blendoff('contmant1'); blendoff('contmant2');blendoff('report00'); blendoff('report01'); blendoff('report02'); blendoff(procesar0); "  onclick="return false;" >USUARIOS</a></div>
<div class="subItem"><a href="#" onmouseover="blendon('contenido1'); blendoff('contenido0'); blendoff('contaud0'); blendoff('contaud1'); blendoff('contmant0'); blendoff('contmant1'); blendoff('contmant2'); blendoff('report00'); blendoff('report01'); blendoff('report02'); blendoff(procesar0);"  onclick="return false;" >PERFILES</a></div>
<!--div class="subItem"><a href="#" onmouseover="blendon('contenido2'); blendoff('contenido0');blendoff('contenido1'); blendoff('contenido3');blendoff('contenido4');blendoff('contaud0');blendoff('contaud1'); blendoff('contaud2');blendoff('contaud3');blendoff('contaud4');blendoff('contaud5');blendoff('contaud6');blendoff('contaud7');blendoff('contaud8');blendoff('contaud9'); blendoff('contmant0'); blendoff('report00'); blendoff('report01');"  onclick="return false;" >Listado Alfabetico</a></div-->
<!--div class="subItem"><a href="#" onmouseover="blendon('contenido3'); blendoff('contenido0');blendoff('contenido2'); blendoff('contenido1');blendoff('contenido4');blendoff('contaud0');blendoff('contaud1'); blendoff('contaud2');blendoff('contaud3');blendoff('contaud4');blendoff('contaud5');blendoff('contaud6');blendoff('contaud7');blendoff('contaud8');blendoff('contaud9');"  onclick="return false;" >Listado por Categoria</a></div>
<div class="subItem"><a href="#" onmouseover="blendon('contenido4');blendoff('contenido0'); blendoff('contenido2'); blendoff('contenido3');blendoff('contenido1');blendoff('contaud0');blendoff('contaud1'); blendoff('contaud2');blendoff('contaud3');blendoff('contaud4');blendoff('contaud5');blendoff('contaud6');blendoff('contaud7');blendoff('contaud8');blendoff('contaud9');"  onclick="return false;" >Listado por Centro</a></div-->
</div>
</div>
</div>

<!--?php } ?-->
<!-- *************************************************************** -->
<div class="mainDiv" >
<div class="topItem"><img src="images/iconos/fact2.png" width="16%" style="float:left">Proveedor</div>        
<div class="dropMenu" ><!-- -->
    
	<div class="subMenu" style="display:none;">
    <div class="subItem"><a href="#" onmouseover="visible('contaud0'); blendoff('contaud1'); blendoff('contenido0'); blendoff('contenido1'); oculta('report00'); blendoff('contmant0'); blendoff('contmant1'); blendoff('contmant2'); blendoff('report00'); blendoff('report01'); blendoff('report02'); blendoff(procesar0);" onclick="return false;" >PROVEEDORES</a></div>
    <div class="subItem"><a href="#" onmouseover="visible('contaud1'); blendoff('contaud0'); blendoff('contenido0'); blendoff('contenido1'); blendoff('contmant0'); blendoff('contmant1');  blendoff('contmant2'); blendoff('report00'); blendoff('report01'); blendoff('report02'); blendoff(procesar0);"  onclick="return false;" >FACTURAS</a></div>
  </div>
</div>
</div>

<!-- ***************************************************************--> 
<!--?php if ($tipo_user == "administrador"){ ?-->
<div class="mainDiv" >
<div class="topItem"  ><img src="images/iconos/mantenimiento.PNG" width="25px" style="float:left">Mantenimiento</div>        
<div class="dropMenu" >
<div class="subMenu" style="display:none;">
    <div class="subItem"><a href="#" onmouseover="visible('contmant0'); blendoff('contmant1'); blendoff('contenido0'); blendoff('contenido1');  oculta('contaud0'); oculta('contaud1'); blendoff('report00'); blendoff('report01'); blendoff('report02'); blendoff(procesar0);" onclick="return false;" >USUARIO</a></div>
    <div class="subItem"><a href="#" onmouseover="visible('contmant1'); blendoff('contmant0'); blendoff('contmant2'); blendoff('contenido0'); blendoff('contenido1');  oculta('contaud0'); oculta('contaud1'); oculta('report01'); blendoff('report00'); blendoff('report02'); blendoff(procesar0);"  onclick="return false;" >PROVEEDORES</a></div>
    <div class="subItem"><a href="#" onmouseover="visible('contmant2'); blendoff('contmant1'); blendoff('contaud0'); blendoff('contmant0'); blendoff('contaud1'); blendoff('contenido0'); blendoff('report00'); blendoff('report01'); blendoff('report02'); blendoff(procesar0); "click="return false;" >FACTURAS</a></div>
</div>
</div>
</div>
<!--?php } ?-->

<!-- *************************************************************** -->
<div class="mainDiv" >
<div class="topItem"  ><img src="images/documen_db.png" width="16%" style="float:left">Backups</div>        
<div class="dropMenu" ><!-- -->
	<div class="subMenu" style="display:none;">
		<div class="subItem"><a href="backup.php">BACKUPS</a></div>
  <div class="subItem"><a href="restore1.php">RESTAURAR</a></div>
		
        </div>
</div>
</div>
<!-- ***************************************fin opcion GENERAL**************************** -->

<!-- ********************************* Menu OPCION 1 ****************************** -->
</div><!-- *****finopcion 1*********** -->



<!-- ******************************************************************************-->
<!-- ******************************************************************* -->
<div  class="navbar" id="opcion2">
<div class="mainDiv" >
<div class="topItem" >Proveedor</div>        
<div class="dropMenu" ><!-- -->
  <div class="subMenu" style="display:inline;"> 
  <div class="subItem"><a href="#" onmouseover="visible('procesar0'); oculta('contaud0'); blendoff('contaud1'); blendoff('contenido0'); blendoff('contenido1'); oculta('report00'); blendoff('contmant0'); blendoff('contmant1'); blendoff('contmant2'); blendoff('report00'); blendoff('report01');  blendoff('report02');" onclick="return false;" >FACTURA/PROV.</a></div>
  
  
  </div>
</div>
</div>


<!-- *************************************************************** -
<div class="mainDiv" >
<div class="topItem"  >De No Comformidad</div>        
<div class="dropMenu" >
  <div class="subMenu" style="display:none;">
    <div class="subItem"><a href="documentos/reportenoconfor.pdf" >No Conformidad</a></div>
    <div class="subItem"><a href="#">Perfil</a></div>
    <div class="subItem"><a href="#">Tasa de Auditores</a></div>
    <div class="subItem"><a href="#">Listado por CIF/</a></div>
        </div>
</div>
</div-->
</div>
<!-- *********************************FIN OPCION4****************************** -->
<!-- *********************************Menu Reportes OPCION 4*************************-->
<!-- ******************************************************************* -->
<div class="navbar" id="opcion3">

<div class="mainDiv" >
<div class="topItem" >Usuarios</div>        
<div class="dropMenu" ><!-- -->
	   <div class="subMenu" style="display:none;">
    <div class="subItem"><a href="../reportes/rep_useraudit.php" onmouseover="visible('report00'); oculta('report01'); oculta('report01'); oculta('contenido0'); oculta('contenido1'); oculta('contenido2'); oculta('contaud0'); blendoff('contaud1'); blendoff('contenido0'); blendoff('contenido1'); blendoff('procesar0');" onclick="return false;" >Reporte de Usuarios</a></div> 
    <!--div class="subItem"><a href="#" onmouseover="visible('report01'); oculta('report00'); blendoff('contaud0'); blendoff('contaud1'); blendoff('contaud2'); blendoff('contaud3'); blendoff('contaud4'); blendoff('contaud5'); blendoff('contaud6'); blendoff('contaud7'); blendoff('contaud8'); blendoff('contaud9'); blendoff('contenido0'); blendoff('contenido1'); blendoff('contenido2'); blendoff('contenido3'); blendoff('contenido4')" onclick="return false;" >Reporte de tal</a></div-->    
	</div>
</div>
</div>


<!-- **********************************************************-->
<div class="mainDiv" >
<div class="topItem"  >Facturas</div>        
<div class="dropMenu" >
	<div class="subMenu" style="display:none;">
		<div class="subItem"><a href="#" onmouseover="visible('report01'); oculta('report00'); oculta('report02'); blendoff('contenido0'); blendoff('contenido1'); blendoff('contaud0'); blendoff('contaud1'); blendoff('procesar0') ;" onclick="return false;" >Facturas1</a></div>
		<div class="subItem"><a href="#" onmouseover="visible('report02'); oculta('report00');oculta('report01'); blendoff('contaud0'); blendoff('contaud1'); blendoff('contenido0'); blendoff('contenido1'); blendoff('contenido2'); blendoff('procesar0');" onclick="return false;" >Facturas2</a></div>
		<!--div class="subItem"><a href="#">Tasa de Auditores</a></div>
		<div class="subItem"><a href="#">Listado por CIF/</a></div-->
        </div>
</div>
</div>
</div>
<!-- *********************************FIN OPCION 3 ****************************** -->
<!-- ******************************************************************************-->

<!-- **********************************************************-->

</div><!-- ***********end frame1*********** -->
<script type="text/javascript" src="js/xpmenuv21.js"></script>

</div><!-- *********************************FIN BOX1******************* -->
<div   class="clearfloat"></div>
<div id="fondoPrincipal">

</div>
<div ><!-- *********************************usuario/general****************************** -->
<div class="contenido"  id="contenido0">
<fieldset>
<legend><img src="images/iconos/user_procesor.png" width="30px">Gestionar Usuarios </legend>
  <dl>
<div id="tabs">
          <ul>
            
              <li><a href="reg_user_audit.php">Registro Usuarios</a></li>
              <li><a href="cons_perfuser.php" >Vista Perfil Usuarios</a></li>
          </ul>
  
</div>


  </dl>
        </fieldset>
</div>
<!-- *********************************Perfil de usuario****************************** -->
	<div  class="contenido" id="contenido1">

		
		 <fieldset style="padding:5px;background:white; url(images/plateados.jpg) top left repeat-x;border-radius:10px 50px 10px 50px;width:90%; ">
		     <legend ><img src="images/iconos/user_procesor.png" width="30px">Perfil de Usuario</legend>
             
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
	</div>
  <!-- *********************************contenido0 tab****************************** -->
	

</div><!-- ************************fin usuario/general****************** -->
<div>
<!-- ************************************************************ -->
<!----******************************contaud0****************************-->
		<div class="contenido"  id="contaud0">
<fieldset>
		     <legend ><img src="images/iconos/fact2.png" width="30px">Proveedores</legend>
		
            	<dl>
               <div id="tabs1">
                  <ul>
    				          <li><a href="reg_provee.php" class="selected" >Registro Datos</a></li>
                      <li><a href="cons_provee.php" >Consulta</a></li>
					       </ul>
	
                /div>
			
		</dl>
		    </fieldset>
	</div>

<!----******************************************fin contaud0*********************************************************-->
<!----****************************************contaud1***********************************************************-->
<div class="contenido"  id="contaud1"><!-/--->
<fieldset>
<legend><img src="images/iconos/fact.png" width="30px">Facturas</legend>
	
<dl>
	<div id="tabs2">
					<ul>
							<li><a href="reg_fact.php" >Registro Facturas</a></li>
							<li><a href="cons_fact.php" >Consulta</a></li>          
					</ul>
	
</div>

	</dl>
 </fieldset>
	</div>

<!--==============================================Mantenimiento contmant0================================-->
	<div class="contenido"  id="contmant0">
<fieldset>
		     <legend ><img src="images/PNG/Config.png" width="30px">Mant. Usuario</legend>
		
            	<dl>

                <div id="tabs3">
		        <ul>
                <li><a href="buscar_user_mant.php" rel="countrycontainer">Mant. Inteligente</a></li>
   	            <li><a href="delete_user.php" rel="countrycontainer">BORRAR MAXIVO</a></li>
					</ul>

</div>
			
		</dl>
		    </fieldset>
	</div>
<!--====================================================================================================-->

<!--==============================================Mantenimiento contmant1================================-->
	<div class="contenido"  id="contmant1">
<fieldset>
		     <legend ><img src="images/PNG/Config.png" width="30px">Mant. Proveedores</legend>
		
         	<dl>
        
              <div id="tabs4">
        	  <ul  >
        	     
           	     <li><a href="buscar_provee.php" >Proveedor</a></li>
                 <li><a href="reg_rol_audit.php" >Disponible</a></li>
                
      		  </ul>
        
        </div>
        			
        </dl>
		    </fieldset>
	</div>
<!--====================================================================================================-->
<!--==============================================Mantenimiento contmant2================================-->
  <div class="contenido"  id="contmant2">
<fieldset>
         <legend ><img src="images/PNG/Config.png" width="30px">Mant.Factura</legend>
    
          <dl>
        
              <div id="tabs5">
            <ul>
              
                 <li><a href="cons_auditados.php" >Proveedor</a></li>
                 <li><a href="reg_rol_audit.php" >Disponible</a></li>
                 
            </ul>
          
        </div>
              
        </dl>
        </fieldset>
  </div>
<!--====================================================================================================-->

<!--==============================================Mantenimiento contmant2================================-->
  <div class="contenido"  id="procesar0">
<fieldset>
         <legend ><img src="images/PNG/Config.png" width="30px">Procesar Factura</legend>
    
          <dl>
        
              <div id="tabs6">
            <ul  >
              
                 <li><a href="buscar_procesar_fact.php" >Buscar Factura</a></li>
                <li><a href="modal_query.php" >ventana Factura</a></li>
            
                                      
            </ul>
          
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
		     <legend ><img src="images/HP-MSN1.png" width="30px">Reportes Nconformidad</legend>
             
	     <dl>
              <div id="tabs">
            		<ul id="report01tabs" class="shadetabs" >
                		  <li><a href="#" rel="#default" class="selected">Informacion</a></li>
                   	      <li><a href="buscar_reportnocomft.php" rel="countrycontainer">Disponible</a></li>
                          <!--li><a href="reg_rol_audit.php" rel="countrycontainer">otro</a></li>
                          <li><a href="reg_unit_audit.php" rel="countrycontainer">Disponible</a></li>
                		  <li><a href="reg_cargo_audit.php" rel="countrycontainer">Disponible</a></li-->
            		 </ul>
            	<div id="report01divcontainer" style="padding:5px;background:white; url(images/fondo_input/fondo_input2.png) top left repeat-x;border-radius:10px 50px 10px 50px;width:90%; ">
                <p>Este módulo permite el Realizar Mantenimiento, anular y actualizar informacion de los registros</p>
             </div>
            </div>
			

		 </dl>
		    </fieldset>
</div><!-- *********************************contenido tab report01****************************** -->
<!----**************************************Inicio Modulo Reportes****************************************-->
<div  class="contenido" id="report02">
		 <fieldset>
		     <legend ><img src="images/HP-MSN1.png" width="30px">Reportes Acciones Correp/Prev</legend>
             
	     <dl>
              <div id="tabs">
            		<ul id="report02tabs" class="shadetabs" >
                		  <li><a href="#" rel="#default" class="selected">Informacion</a></li>
                   	      <li><a href="buscar_report_acc.php" rel="countrycontainer">disponible</a></li>
                          <!--li><a href="reg_rol_audit.php" rel="countrycontainer">otro</a></li>
                          <li><a href="reg_unit_audit.php" rel="countrycontainer">Disponible</a></li>
                		  <li><a href="reg_cargo_audit.php" rel="countrycontainer">Disponible</a></li-->
            		 </ul>
            	<div id="report02divcontainer" style="padding:5px;background:white; url(images/fondo_input/fondo_input2.png) top left repeat-x;border-radius:10px 50px 10px 50px;width:90%; ">
                <p>Este módulo permite el Realizar Mantenimiento, anular y actualizar informacion de los registros</p>
             </div>
            </div>
			

		 </dl>
		    </fieldset>
</div><!-- *********************************contenido tab report02****************************** -->
	<!----**************************************Fin Modulo Reportes****************************************-->

	
</div><!-- *********************************fin fila****************************** -->
</div><!-- *********************************fin contendor****************************** -->
 <!--?php 
}
  /*if(isset($_SESSION["tipo_user"]) and ($_SESSION["tipo_user"])=='Usuario')
  {
      ?>  <div id="fila_conectar">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <!?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='acceso.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  </div> <!?php
   		}*/
     elseif(!isset($_SESSION["tipo_user"]))
 		 {
      ?> <div id="fila_conectar">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <!?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='acceso.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  </div> <!?php     
   }?-->
   
</body>





</html>
















