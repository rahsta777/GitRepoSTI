<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>	
<meta http-equiv="content-type" content="text/html" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
<script language= "JavaScript" src="js/checkcolor.js"></script>
<script language= "JavaScript" src="js/ajax_cambia_status.js"></script>

</head>
<body>
<div >
   
	<?php	
  include("conexion/Conexion1.php");
		 $link=Conectarse(); 
	 	$busqueda=mysql_query("SELECT * FROM user_audit ");
	 
							print("<TABLE cellspacing='0' cellpadding='2' border='0'  ALIGN=CENTER> ");
							print ("<TR bgcolor='#3151B2' style='color:#fff;font:font-family:bold'>");
							print ("<TH>&nbsp;</TH>");
							print ("<TH>Status</TH>");
							print ("<TH>Estado</TH>");
							print ("<TH width='10%'>Codigo</TH>");
							print ("<TH width='15%' >Nombre</TH>");
							print ("<TH width='15%'>Apellido</TH>");
							print ("<TH>Alias</TH>");
							print ("<TH>Perfil</TH>");
							print ("</TR>");   
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
?>
<tr align='center' id="apDiv1"> 
<td>&nbsp</td>
<!--td bgcolor='#FFFFFF'><input type="checkbox" value="<?php echo $cod_empl;?>" id="<?php echo $cod_empl;?>" onclick="Cambio(this.id)" /></td-->
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
print ("</TABLE>\n");
 
?>
  </div>       	
			
	
</body>
	</html>	   
