<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>	
<meta http-equiv="content-type" content="text/html" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />


</head>
<body>
<div >
   
	<?php	
     include("conexion/Conexion1.php");
		$link=Conectarse(); 
   include("fnc/f_fecha.php");
	 	$busqueda=mysql_query("SELECT * FROM d001_programa_aud ");
	 
            	print("<TABLE cellspacing='0' cellpadding='0'   align='center'> ");
													print ("<TR bgcolor='#3151B2' style='color:#fff;font:font-family:bold'>");
													print ("<TH>No. Detalle</TH>");
													print ("<TH>Descripcion</TH>");
													print ("<TH width='15%'>Fecha:</TH>");
													print ("<TH>Filial</TH>");
													print ("<TH>N.Cargo</TH>");
													print ("</TR>");   
 		           while($filas=mysql_fetch_array($busqueda))
           			{
																$num_detalle=$filas['num_detalle'];
																$descrp_program=$filas['descrp_program'];
																$fe_fecha=$filas['fe_fecha'];
																$num_filial=$filas['num_filial'];
																$num_cargo=$filas['num_cargo'];
                $fec_cambioy=cambia_fecha_a_normal($filas['fe_fecha']);
														print ("<TR>\n");
?>
<tr align='center' id="apDiv1" style="font size:12px;"> 
						 					

<?php	
printf(" <td >
                   <font size='2'>&nbsp;%s</td>  <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td> <td ><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td>
                     </tr>",$num_detalle, $descrp_program, $fec_cambioy, $num_filial, $num_cargo);
		}
print ("</TABLE>\n");
 
?>
  </div>       	
			
	
</body>
	</html>	   
