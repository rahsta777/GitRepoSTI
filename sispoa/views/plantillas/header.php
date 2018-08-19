<?PHP
   session_start ();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
    <head>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="views/css/estilos.css" rel="stylesheet" media="screen">

        <title>Sistema de Control y Gestion para el Plan Operativo</title>
       
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Creative CSS3 Animation Menus" />
        <meta name="keywords" content="menu, navigation, animation, transition, transform, rotate, css3, web design, component, icon, slide" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="views/images/favicon1.png"> 
        <!--link rel="stylesheet" type="text/css" href="css/reset.css"-->
        <link rel="stylesheet" type="text/css" href="views/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="views/css/style1.css" />
        <link rel="stylesheet" href="views/css/bootstrap.min.css">
        <link rel="stylesheet" href="views/css/jquery-ui.css">
        <link type="text/css" href="views/css/css_paginar/styles.css" rel="stylesheet" />
         <!--script type="text/javascript" src="include/js/jquery.min.js"></script-->
       <script type="text/javascript" src="include/js/jquery-2.2.3.min.js"></script>
    <style type="text/css" media="screen, print">
@font-face {
  font-family: "ghostclanexpand";
        src: url("views/fonts/ttf/ghost_clan/ghostclanexpand.ttf");
 }
 </style>
<style type="text/css" media="screen, print">
@font-face {
  font-family: "ghostclangradital";
        src: url("views/fonts/ttf/ghost_clan/ghostclanlaserital.ttf");
 }
 </style>
 <style type="text/css" media="screen, print">
 
@font-face {
  font-family: "ghostclan3d";
        src: url("views/fonts/ttf/ghost_clan/ghostclan3d.ttf");
 }
#titul {padding:4px;float:left; font-family:"ghostclanexpand", sans-serif,bold;font-size:12px;color: #9ec0ff;text-shadow: blue 0.1em 0.1em 0.2em;}
/*#titul1 { padding:4px;float:left; font-family:"ghostclanexpand", sans-serif,bold;font-size:12px;color: #9ec0ff;text-shadow: blue 0.1em 0.1em 0.2em;}*/
#subtitl {padding:4px;float:left; font-family:"ghostclanexpand", sans-serif,bold;font-size:12px;color: #bcd0db;text-shadow: black 0.1em 0.1em 0.6em}
/*#subtitl1 {padding:4px;float:left; font-family:"ghostclanexpand", sans-serif,bold;font-size:12px;color: #bcd0db;text-shadow: black 0.1em 0.1em 0.6em}*/
</style>

        <!---->
     </head>

<body>
  <?PHP
//require('views/plantillas/header.php');

                $usuario_actual=$_SESSION["usuario_valido"];
                $nombre_user=$_SESSION["nom_usuario"];
                $tipo_user=$_SESSION["tipo_user"]
    
      ?>
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container1">
 
        <div class="navbar-header">
            
            <a class="navbar-brand" href=""><img src="views/images/Logo_Cont_Edo_Anz.png" > <p>Aplicación para el Control POA de la Contraloria Del Estado Anzoategui</p></a>
        </div>

<!--===========================================-->
   <div id="barra1"  >
    <div  id="b3"> 
          <div id="b1"><span class="ca-icon2">&#85</span></div>  
          <div id="titul" ><p >Usuario:</p></div>
           <div id="subtitl" ><p ><?PHP echo $usuario_actual; ?> </p></div>
          <div id="b1"><?PHP if ($tipo_user=="administrador") { echo '<span class="ca-icon2" title="Permitido" >&#119</span>';?> <?PHP } else echo '<span class="ca-icon2" title="Restringuido" >&#120</span>'; ?> </div> 
          <div id="titul"  style="margin-right:8px;margin-left:6px;"><p >Acceso:</p> </div>
          <div  id="subtitl" style="margin-right:px;margin-left:6px;" ><p><?PHP echo $tipo_user;?> </p></div>
          <p><a href="views/plantillas/cerrar_session.php" title="Cerrar sesión"><img style="width:25px;height:25px ;" src="views/images/relogin.png" alt=""  border="0" align="right"></a></p> 
          <!--p><a href="acceso.php"><img src="images/iconos/exitxfce.png" title="Login" width="30" height="30" border="0" align="right"></a></p--> 
           <p><a href="javascript:close();"><img src="views/images/exitxfce.png" title="Salir"  border="0" align="right" style="width:25px;height:25px ;"></a></p> 
     </div>
  </div><!--**************fin id barra1**************** -->
 
    </div>
</div>
<div id="contenedor">  

  
