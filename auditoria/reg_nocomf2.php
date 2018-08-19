<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>
</head>
<?php
   session_start ();
?>

<body>
<?php
   if (isset($_SESSION["usuario_valido"]))
   {
    $usuario_actual=$_SESSION["usuario_valido"];
    $nombre_user=$_SESSION["nom_usuario"];
    $tipo_user=$_SESSION["tipo_user"]
    
?>

<?php
// Conexión a la base de datos
    include("conexion/Conexion1.php");
    $link = Conectarse();
	 include("fnc/f_fecha.php");
    
	if (isset($_POST["num_audit_noconfor"]) and($_POST["num_proponte_nc"]!="")) 
		{
			//------------------------ Datos de Entrada 
			$num_rolx=$_POST['num_audit_noconfor'];          
			$fechax=$_POST['fecha_desc'];
			$numproponx=$_POST['num_proponte_nc'];
			$numtipox=$_POST['numero_tipo_nc'];
			$descripx=$_POST['descrip_noconfr'];
			$clasificx=$_POST['clasifi_noconfor'];
			$numenotipifica=$_POST['num_tipificnoconfr'];
		 $numunidx=$_POST['num_unidad_nc'];
			$numrequierex=$_POST['num_requiere_nc'];
			$recomendax=$_POST['recomendaciones'];
			$cedula_evalx=$_POST['cedula_evalua'];
	        $nomb_propox=$_POST['nomb_pro1'];
			echo "paso nombre proponente [".$nomb_propox." ]";
		//-------------------------fecha change------------------       		
			$fec_cambiox=cambia_fecha_a_db($_POST['fecha_desc']);echo "fecha cambio: ".$fec_cambiox;
	if (mysql_num_rows(mysql_query("SELECT 	num_audit FROM  d004t_nocomformidad   WHERE 	num_audit	='" . $_POST['num_audit_noconfor'] . "'", $link))==0) {
   	$query="insert into d004t_nocomformidad (num_audit, fech_audit_noconfom, num_ced_proponente, text_descrip, text_clasificacion, text_tipificacion, text_tipo_nc, num_inidad_nocofor, num_requierent, text_recomendacion, num_ced_evaluador) VALUES ('$num_rolx', '$fec_cambiox', '$numproponx', '$descripx', '$clasificx', '$numenotipifica', '$numtipox','$numunidx','$numrequierex', '$recomendax', '$cedula_evalx')";
		mysql_query ($query,$link);
 if (mysql_num_rows(mysql_query("SELECT num_ced_proponente FROM  j008t_ced_proponente  WHERE 	num_ced_proponente ='" . $_POST['num_proponte_nc'] . "'", $link))==0) {
$query2="insert into  j008t_ced_proponente (num_ced_proponente, descri_proponente) VALUES ('$numproponx', '$nomb_propox')";
		mysql_query ($query2,$link);
?><script type="text/javascript">
                        alert("Registro Efectuado");
                        </script><?php
       			} else {
       		?><script type="text/javascript">
                        alert("Ya Fue Creado un Registro Similar en Proponente , por favor, Verifique su Ingreso");
                        </script>	<?php
 		}echo "<meta http-equiv=Refresh content=0;url=index0.php?a=1>";
									}
																	else {
																									?><script type="text/javascript">
																										           alert("Ya Fue Creado un Registro Similar , por favor, Verifique su Ingreso");
																										           </script>	<?php

																									}	 
															echo "<meta http-equiv=Refresh content=0;url=index0.php?a=1>";

  }
		
 ?>
 <?php 
}
  if(isset($_SESSION["tipo_user"]) and ($_SESSION["tipo_user"])=='Usuario')
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
    elseif(!isset($_SESSION["tipo_user"]))
  {
      ?>  <div id="fila_conectar">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='acceso.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  </div> 
<?php     
   }?>
 </body>
 
