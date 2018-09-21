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
	 	$busqueda=mysql_query("SELECT * FROM  tbl_prov ORDER BY razon_prov ASC;");
	 
							print("<TABLE cellspacing='0' cellpadding='2' border='0'  ALIGN=CENTER> ");
							print ("<TR bgcolor='#3151B2' style='color:#fff;font:font-family:bold'>");
							print ("<TH>&nbsp;</TH>");
							print ("<TH>No. Rif</TH>");
							print ("<TH>Razon Social</TH>");
							print ("<TH width='10%'>Direccion</TH>");
							print ("<TH width='15%' >Representante</TH>");
							print ("<TH width='30%'>Telefono</TH>");
							
							print ("</TR>");   
 		       while($filas=mysql_fetch_array($busqueda))
           {
												$idrif_x=$filas['prov_rif'];
												$fecha_x=$filas['razon_prov'];
												$importe_x=$filas['dir1_prov'];
												$Nomb_proveex=$filas['repres_prov'];
												$descrip_x=$filas['Tlf_prove'];
													
        					print ("<TR>\n");
?>
<tr align='center' id="apDiv1"> 
<td>&nbsp</td>
<!--td bgcolor='#FFFFFF'><input type="checkbox" value="<?php echo $idrif_x;?>" id="<?php echo $idrif_x;?>" onclick="Cambio(this.id)" /></td-->
 <?php
 if(isset($status)){
      if($status =="activo"){?>
<TD> <a href=""><input type="hidden" value="<?php echo $idrif_x;?>" id="valor_icono"  onclick="cambia_status(this.id)"><img src="images/accept.png" width="20" height="20" border="0" name="imagen1"></a></TD > 
 <?php
		/*print ("<TD > <a href='#' onmouseover='cambia(imagen1,img1)' onmouseout='cambia(imagen1,img2)'><img src='images/accept.png' width='20' height='20' border='0' name='imagen1'></a><br><br> </TD>\n");*//*<img src='images/accept.png' width='20px'>*/

		}
	if($status=="inactivo"){
		print ("<TD > <a href='#' onmouseover='cambia(imagen1,img2)' onmouseout='cambia(imagen1,img1)'><img src='images/inactve.png' width='20' height='20' border='0' name='imagen1'></a><br><br> </TD>\n");/*<img src='images/inactve.png' width='20px'>*/

		}
if($status=="baja"){
		print ("<TD > <a href='#' onmouseover='cambia(imagen1,img2)' onmouseout='cambia(imagen1,img1)'><img src='images/error.gif' width='20' height='20' border='0' name='imagen1'></a><br><br> </TD>\n");/*<img src='images/inactve.png' width='20px'>*/

		}
}
                           
	?>							 					

<?php	

printf(" <td><font size='2'>&nbsp;%s</td> <!--2--> <td bgcolor='#9DA7C6'>
                   <font size='2'>&nbsp;%s</td>  <!--3--> <td><font size='2'>&nbsp;%s</td> <!--4--> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td> <!--5--> <td><font size='2'>&nbsp;%s</td></tr>",$idrif_x, $fecha_x, $importe_x, $Nomb_proveex, $descrip_x);
		}
print ("</TABLE>\n");
 
?>
  </div>       	
			
	
</body>
	</html>	   
