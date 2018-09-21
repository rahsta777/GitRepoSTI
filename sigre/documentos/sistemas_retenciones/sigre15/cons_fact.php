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
	 	$busqueda=mysql_query("SELECT * FROM  tbl_fact ");
	 
							print("<TABLE cellspacing='0' cellpadding='2' border='0'  ALIGN=CENTER> ");
							print ("<TR bgcolor='#3151B2' style='color:#fff;font:font-family:bold'>");
							print ("<TH>&nbsp;</TH>");
							print ("<TH>No. Factura</TH>");
							print ("<TH>Fecha</TH>");
							print ("<TH width='10%'>importe</TH>");
							print ("<TH width='15%' >Proveedor</TH>");
							print ("<TH width='30%'>Descripcion</TH>");
							
							print ("</TR>");   
 		       while($filas=mysql_fetch_array($busqueda))
           {
												$idfac_x=$filas['id_fact'];
												$fecha_x=$filas['fecha_fact'];
												$importe_x=$filas['monto_fact'];
												$Nomb_proveex=$filas['idprove'];
												$descrip_x=$filas['descrip'];
													
        					print ("<TR>\n");
?>
<tr align='center' id="apDiv1"> 
<td>&nbsp</td>
<!--td bgcolor='#FFFFFF'><input type="checkbox" value="<?php echo $cod_empl;?>" id="<?php echo $cod_empl;?>" onclick="Cambio(this.id)" /></td-->
 <?php
	 if($status=="activo"){?>
<TD> <a href=""><input type="hidden" value="<?php echo $idfac_x;?>" id="valor_icono"  onclick="cambia_status(this.id)"><img src="images/accept.png" width="20" height="20" border="0" name="imagen1"></a></TD > 
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

printf("<!--1--> <td><font size='2'>&nbsp;%s</td> <!--2--> <td bgcolor='#9DA7C6'>
                   <font size='2'>&nbsp;%s</td>  <!--3--> <td><font size='2'>&nbsp;%s</td> <!--4--> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td> <!--5--> <td><font size='2'>&nbsp;%s</td></tr>",$idfac_x, $fecha_x, $importe_x, $Nomb_proveex, $descrip_x);
		}
print ("</TABLE>\n");
 
?>
  </div>       	
			
	
</body>
	</html>	   
