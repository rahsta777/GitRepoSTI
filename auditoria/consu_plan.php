<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>	
<meta http-equiv="content-type" content="text/html" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >



</head>
<body>
<div >
   
	<?php	
  include("conexion/Conexion1.php");
		$link=Conectarse(); 
	 $busqueda=mysql_query("SELECT * FROM d002t_detalle_plan");
	 
  print("<TABLE cellspacing='0' cellpadding='2' border='0'  ALIGN=CENTER> ");
		print ("<TR bgcolor='#3151B2' style='color:#fff;font:font-family:bold'>");
		print ("<TH>No.Plan</TH>");
		print ("<TH>No.Detalle</TH>");
		print ("<TH width='5%'>No.Actividad</TH>");
		print ("<TH width='15%' >No.Requisito</TH>");
		print ("<TH width='15%'>No.Cargo</TH>");
		print ("<TH>No.Unidad</TH>");
		print ("<TH>Cedula</TH>");
		print ("</TR>");   
 		    while($filas=mysql_fetch_array($busqueda))
           {
											$numplanx=$filas['num_plan'];
          // echo $numplanx;
											$numdetall=$filas['num_detalle'];
								   $numactiv=$filas['num_activi'];
								   $numrequisito=$filas['num_requisito'];
											$numcargo=$filas['num_cargo'];
											$numunidad=$filas['num_unidaddelleplan'];
												$numced=$filas['num_cedula'];
			print ("<TR>\n");
printf("<td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td>  <td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td> <td ><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td>
                     <td ><font size='2'>&nbsp;%s</td></tr>",$numplanx, $numdetall, $numactiv, $numrequisito, $numcargo, $numunidad, 	$numced);
		}
print ("</TABLE>\n");
 
?>
  </div>       	
			
	
</body>
	</html>	   
