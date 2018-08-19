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
	 $busqueda=mysql_query("SELECT * FROM d004t_nocomformidad");
	 
  print("<TABLE cellspacing='0' cellpadding='2' border='0'  ALIGN=CENTER> ");
		print ("<TR bgcolor='#3151B2' style='color:#fff;font:font-family:bold'>");
		print ("<TH>No.Auditoria</TH>");
		print ("<TH>fecha</TH>");
		print ("<TH width='5%'>Cedula Proponente</TH>");
		print ("<TH width='15%' >Tipo NoComf.</TH>");
		print ("<TH width='15%'>Clasific.</TH>");
		print ("<TH>No.Unidad</TH>");
		print ("<TH>Cedula Evaluador</TH>");
		print ("<TH>No.Rqrte.</TH>");
		print ("</TR>");   
 		    while($filas=mysql_fetch_array($busqueda))
           {
											$num_audx=$filas['num_audit'];
											$fechx=$filas['fech_audit_noconfom'];
											$ced_proponx=$filas['num_ced_proponente'];
											$numTip_ncx=$filas['text_tipo_nc'];
											$clasifx=$filas['text_clasificacion'];
											$num_unidx=$filas['num_inidad_nocofor'];
											$ced_evaldrx=$filas['num_ced_evaluador'];
											$num_reqrtex=$filas['num_requierent'];
			print ("<TR>\n");
printf("<td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td>  <td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td> <td ><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td>
                     <td ><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td></tr>",$num_audx, $fechx, $ced_proponx, 	$numTip_ncx, $clasifx, $num_unidx, 	$ced_evaldrx, $num_reqrtex);
		}
print ("</TABLE>\n");
 
?>
  </div>       	
			
	
</body>
	</html>	   
