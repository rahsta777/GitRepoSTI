<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">  
<html>
<?php

   session_start ();
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
<link rel="stylesheet" type="text/css" href="css/sddm.css" >
<link rel="stylesheet" type="text/css" href="css/style_audit.css" >
<script type='text/javascript' src='js/func_menu.js'></script>
<script language="javascript" type="text/javascript" src="js/niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="css/niceforms-default.css" />

<link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
<!-- Page styles -->

<!-- Contact modal wind CSS files -->
<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />
<title>SIGAUDIT</title>
<script type="text/javascript">
/*Important Function to blend the tabs in and out*/
function blendoff(idname) {document.getElementById(idname).style.display = 'none';}
function blendon(idname) {document.getElementById(idname).style.display = 'block';}
</script>

<script language="JavaScript">
function pedirVoto(){
    if (confirm("Aqui va mi Control de acceso al sistema de auditoria")){
       window.open("acceso.php")
    }
}
</script> 
</head>

<body ><!---onload="pedirVoto()"-->
<?PHP
   if (isset($_SESSION["usuario_valido"]))
   {
    $usuario_actual=$_SESSION["usuario_valido"];
    $nombre_user=$_SESSION["nom_usuario"];
    $tipo_user=$_SESSION["tipo_user"]
    
?>
<div class="contenedor" >
<!--************* id barra1**************** -->
<div id="barra1">
<div id="b1"><img src="images/pdvsa.png" width="230px"></div>
<div id="b2">Sistema Integrado para El Control de Auditorias</div>
<div id="b3">Mensajes del Sistemas:</div>
<div id="b4">id-Usuario:<div id="titulo"><?PHP echo $usuario_actual; ?></div></div>
<div id="b4">Modo:<div id="titulo"><?PHP echo $tipo_user; ?></div></div>

</div><!--**************fin id barra1**************** -->
<div id="fila" >
<div  id="box1">
<!-- *********************************Menu Principal****************************** -->

<div id="box3" >
<div class="main"><img src="images/PNG/Config0.png" width="20px" style="float:left">
<select name="opcion" class="contacto_v" onchange="getComboA(this)">
                    <option value="usuario">General</option>
                    <option value="auditor">Clientes/Proyecto</option>
                    <option value="documento">Proyectos Abiertos</option>
                    <option value="proy">Documentos</option>
                    <option selected> Ninguno</option> </select>

</div></div>
<div class="clearfloat"></div>
<!-- *********************************Menu Documentos****************************** -->
<!-- ******************************************************************* -->
<div  class="frame1">
<div class="navbar" id="opcion1">
<div class="mainDiv" >
<div class="topItem" ><img src="images/HP-MSN.png" width="25px" style="float:left">Usuarios</div>        
<div class="dropMenu" ><!-- -->
<div class="subMenu" >
<!--div class="subItem"><a href="#" >Gestionar Usuario</a></div-->
<div class="subItem"><a href="#" onmouseover="blendon('contenido0'); blendoff('contenido1'); blendoff('contenido2');blendoff('contenido3');;blendoff('contenido4');"  onclick="return false;" >Gestion de Usuario</a></div>
<div class="subItem"><a href="#" onmouseover="blendon('contenido1'); blendoff('contenido0'); blendoff('contenido2'); blendoff('contenido3');blendoff('contenido4');"  onclick="return false;" >Perfil de Usuario</a></div>
<div class="subItem"><a href="#" onmouseover="blendon('contenido2'); blendoff('contenido0');blendoff('contenido1'); blendoff('contenido3');blendoff('contenido4');"  onclick="return false;" >Listado Alfabetico</a></div>
<div class="subItem"><a href="#" onmouseover="blendon('contenido3'); blendoff('contenido0');blendoff('contenido2'); blendoff('contenido1');blendoff('contenido4');"  onclick="return false;" >Listado por Categoria</a></div>
<div class="subItem"><a href="#" onmouseover="blendon('contenido4');blendoff('contenido0'); blendoff('contenido2'); blendoff('contenido3');blendoff('contenido1');"  onclick="return false;" >Listado por Centro</a></div>
	</div>
</div>
</div>


<!-- *************************************************************** -->
<div class="mainDiv" >
<div class="topItem"  ><img src="images/PNG/Config.png" width="25px" style="float:left">Auditorias</div>        
<div class="dropMenu" ><!-- -->
	<div class="subMenu" style="display:block;">
		<div class="subItem"><a href="#">Programacion</a></div>
		<div class="subItem"><a href="#">Plan</a></div>
		<div class="subItem"><a href="#">Hallazgo</a></div>
		<div class="subItem"><a href="#">Informe/</a></div>
        <div class="subItem"><a href="#">No Conformidad</a></div>
        <div class="subItem"><a href="#">Declaracion de Acciones C o P</a></div>
        <div class="subItem"><a href="#">Plan de accion Correctivas o Preventivas </a></div>
        <div class="subItem"><a href="#">Seguimiento y accion</a></div>
        </div>
</div>
</div>

<!-- *************************************************************** -->
<div class="mainDiv" >
<div class="topItem"  ><img src="images/Window.png" width="25px" style="float:left">Personalizacion</div>        
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
<div class="topItem"  ><img src="images/documen_db.png" width="25px" style="float:left">Backups</div>        
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
<div class="topItem"  ><img src="images/PNG/Config.png" width="25px" style="float:left">Version</div>        
<div class="dropMenu" ><!-- -->
	<div class="subMenu" style="display:none;">
		<div class="subItem"><a href="#">Configuration</a></div>
		<div class="subItem"><a href="#">Sub Menu 2</a></div>
		<div class="subItem"><a href="#">Sub Menu 3</a></div>
		<div class="subItem"><a href="#">Sub Menu 4</a></div>
        </div>
</div>
</div>
<!-- *********************************End Menu****************************** -->
</div><!-- *****finopcion 1*********** -->
<!-- *********************************Menu Auditorias*************************-->
<!-- ******************************************************************* -->
<div class="navbar"  id="opcion2">
<div class="mainDiv" >
<div class="topItem" >Clientes/Proyectos</div>        
<div class="dropMenu" ><!-- -->
	<div class="subMenu" style="display:inline;">
		<div class="subItem"><a href="#">Configuration</a></div>
	        <div class="subItem"><tea href="#">Tool Box</a></div>
		<div class="subItem"><a href="#">Contact Us</a></div>
		<div class="subItem"><a href="#">Sub Menu 4</a></div>
		<div class="subItem"><a href="#">Sub Menu 5</a></div>
	</div>
</div>
</div>


<!-- *************************************************************** -->
<div class="mainDiv" >
<div class="topItem"  >Auditorias2</div>        
<div class="dropMenu" ><!-- -->
	<div class="subMenu" style="display:none;">
		<div class="subItem"><a href="#">Gestion de Auditores</a></div>
		<div class="subItem"><a href="#">Perfil</a></div>
		<div class="subItem"><a href="#">Tasa de Auditores</a></div>
		<div class="subItem"><a href="#">Listado por CIF/</a></div>
        </div>
</div>
</div>

<!-- *************************************************************** -->
<div class="mainDiv" >
<div class="topItem"  >Auditorias3</div>        
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
<div class="topItem"  >Auditores4</div>        
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
<div class="topItem"  >Auditorias5</div>        
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
<!-- *********************************End ****************************** -->

<!-- *********************************Menu mantenimiento*************************-->
<!-- ******************************************************************* -->
<div class="navbar" id="opcion3">
<div class="mainDiv" >
<div class="topItem" >Proyectos Abiertos</div>        
<div class="dropMenu" ><!-- -->
	<div class="subMenu" style="display:inline;">
		<div class="subItem"><a href="#">Configuration</a></div>
	        <div class="subItem"><tea href="#">Tool Box</a></div>
		<div class="subItem"><a href="#">Contact Us</a></div>
		<div class="subItem"><a href="#">Sub Menu 4</a></div>
		<div class="subItem"><a href="#">Sub Menu 5</a></div>
	</div>
</div>
</div>


<!-- *************************************************************** -->
<div class="mainDiv" >
<div class="topItem"  >Proyectos1</div>        
<div class="dropMenu" ><!-- -->
	<div class="subMenu" style="display:none;">
		<div class="subItem"><a href="#">Gestion de Auditores</a></div>
		<div class="subItem"><a href="#">Perfil</a></div>
		<div class="subItem"><a href="#">Tasa de Auditores</a></div>
		<div class="subItem"><a href="#">Listado por CIF/</a></div>
        </div>
</div>
</div>

<!-- *************************************************************** -->
<div class="mainDiv" >
<div class="topItem"  >Proyectos2</div>        
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
<div class="topItem"  >Proyectos3</div>        
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
<div class="topItem"  >Proyectos4</div>        
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
<!-- *********************************End ****************************** -->

<!-- *********************************Menu REportes*************************-->
<!-- ******************************************************************* -->
<div  class="navbar" id="opcion4">
<div class="mainDiv" >
<div class="topItem" >Documentos</div>        
<div class="dropMenu" ><!-- -->
	<div class="subMenu" style="display:inline;">
		<div class="subItem"><a href="#"></a></div>
	        <div class="subItem"><tea href="#">Tool Box</a></div>
		<div class="subItem"><a href="#">Contact Us</a></div>
		<div class="subItem"><a href="#">Sub Menu 4</a></div>
		<div class="subItem"><a href="#">Sub Menu 5</a></div>
	</div>
</div>
</div>


<!-- *************************************************************** -->
<div class="mainDiv" >
<div class="topItem"  >Documentos2</div>        
<div class="dropMenu" ><!-- -->
	<div class="subMenu" style="display:none;">
		<div class="subItem"><a href="#">Gestion de Auditores</a></div>
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
</div><!-- ***********end frame1*********** -->
<!-- *********************************End Menu****************************** -->
<script type="text/javascript" src="js/xpmenuv21.js"></script>
</div>
<div   class="clearfloat"></div>
<div  id="">
<!-- *********************************formulario gestion usuario****************************** -->
	<div  class="contenido" id="contenido0">

		<form action="reg_user_audit.php" method="post" >
        <div class="columna">
		<fieldset>
		     <legend><img src="images/HP-MSN1.png" width="30px">Datos Personal </legend>
		<dl>
			 <dt><label for="gender">Estado:</label></dt>
			    <dd>
			     <select size="1" name="status_userx" id="gender">
				    <option value="man">Inactivo</option>
				    <option value="Girl">Baja</option>
				    <option selected>Activo</option>
			     </select>
			    </dd>
			</dl>
        	<dl>
			 <dt><label for="nombre">Nombre:</label></dt>
                <dd><input type="text" name="nomb_userx" id="nomb_user" size="25" maxlength="128" /></dd>
			</dl>
            <dl>
			 <dt><label for="apell1">Apellido 1:</label></dt>
			    <dd><input type="text" name="apel1_userx" id="apel1_user" size="25" maxlength="128" /></dd>
			</dl>
            <dl>
			 <dt><label for="apell2">Apellido 2:</label></dt>
			    <dd><input type="text" name="apel2_userx" id="apel2_user" size="25" maxlength="128" /></dd>
			</dl>
            <dl>
			 <dt><label for="email">Iniciales:</label></dt>
			    <dd><input type="text" name="ini_nomb_userx" id="nomb_user" size="25" maxlength="128" /></dd>
			</dl>
            <dl>
			 <dt><label for="gender">Categoria:</label></dt>
			    <dd>
			     <select size="1" name="category_userx" id="gender">
				    <option value="inactivo">Inactivo</option>
				    <option value="activo">Activo</option>
				    <option selected>Ninguno</option>
			     </select>
			    </dd>
            </dl>
            <dl>
			 <dt><label for="gender">Perfil:</label></dt>
			    <dd>
			     <select size="1" name="perfil_userx" id="gender">
				    <option value="administrador">Administrador</option>
				    <option value="Colaborador">Colaborador</option>
				    <option selected>Activo</option>
			     </select>
			    </dd>
            </dl>
            <dl>
			 <dt><label for="email">Codigo Empleado:</label></dt>
			    <dd><input type="text" name="cod_emplea_userx" id="nomb_user" size="25" maxlength="128" /></dd>
			</dl>
			</dl>
			
			<dl>
			 <dt><label for="gender">Sexo:</label></dt>
			    <dd>
			     <select size="1" name="sex_userx" id="gender">
				    <option value="man">hombre</option>
				    <option value="Girl">Mujer</option>
				    <option selected>No definida</option>
			     </select>
			    </dd>
			</dl>
            </fieldset>
            </div>
            <!----------------------------------------------------------->
            <div  class="columna">
		 <fieldset>
		     <legend ><img src="images/HP-MSN1.png" width="30px">Acceso</legend>
			
            <dl>
			 <dt><label for="nombre">Nombre:</label></dt>
			    <dd><input type="text" name="alias_userx" id="alias_user" size="25" maxlength="128" /></dd>
			</dl>
            <dl>
			 <dt><label for="password">Password:</label></dt>
			    <dd><input type="password" name="clav_userx" id="clav_user" size="25" maxlength="32" /></dd>
			</dl>
            <dl>
			 <dt><label for="password">Confirmar Password:</label></dt>
			    <dd><input type="password" name="passwordx" id="password" size="25" maxlength="32" /></dd>
			</dl>
			<dl>
			 <dt><label for="upload">Subir foto:</label></dt>
			    <dd><input type="file" name="fot_userx" id="upload" /></dd>
			</dl>
		
		    </fieldset>
		    </div>
        <!---............................................................-->
		    
            <fieldset class="action">
		     <input type="submit" name="Enviar" id="submit" value="Enviar" />
		    </fieldset>
		    
           
		</form>

	</div><!-- *********************************fin formulario gestios usuario****************************** -->
	<div class="contenido"  id="contenido1">ido  111111111111111111111111111111
	</div>
    <div class="contenido"  id="contenido2">ido  2222222222222222222222  2222
	</div>
	<div class="contenido"  id="contenido3">ido  333333333333 3333333333333333
	</div>
	<div class="contenido"  id="contenido4">ido  4444 44444 4444 4444 4444 44
	</div>
</div>





</div><!-- *********************************fin fila****************************** -->
</div><!-- *********************************fin contendor****************************** -->
 <?php 
}
  if(isset($_SESSION["tipo_user"]) and ($_SESSION["tipo_user"])=='Usuario')
  {
      ?>  <div id="fila_conectar">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='menup.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  </div> <?php
   }
    elseif(!isset($_SESSION["tipo_user"]))
  {
      ?>  <div id="fila_conectar">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='acceso.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  </div> <?php     
   }?>
</body>
</html>
















