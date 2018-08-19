<?php
   session_start ();
?>
<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>	
<meta http-equiv="content-type" content="text/html" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
<script language= "JavaScript" src="js/checkcolor.js"></script>
<script language= "JavaScript" src="js/ajax_cambia_status.js"></script>
<link rel="stylesheet" type="text/css" href="css/style_audit.css" >
</head>
<body>
<?php
   if (isset($_SESSION["usuario_valido"]))
   {
    $usuario_actual=$_SESSION["usuario_valido"];
    $nombre_user=$_SESSION["nom_usuario"];  
    $tipo_user=$_SESSION["tipo_user"]
    
?>

<div >
	<?php	
  include("conexion/Conexion1.php");
		$link=Conectarse(); 
	 $busqueda=mysql_query("SELECT * FROM j0013t_auditoria, d003t_detalle_aud ");
					print("<TABLE cellspacing='0' cellpadding='2' border='0'  ALIGN=CENTER> ");
					print ("<TR  bgcolor='#3151B2' style='color:#fff;font:font-family:bold'>");
					print ("<TH>No.de Auditoria:</TH>");
					print ("<TH>Descripcion</TH>");
					print ("<TH width='10%'>No.gerencia</TH>");
					print ("<TH width='15%' >No.Unidad</TH>");
					print ("<TH width='15%'>Fecha</TH>");
					print ("<TH>No.Requisito</TH>");
					print ("</TR>");   
 		 while($filas=mysql_fetch_array($busqueda))
        {
									
									 //$localiza_imagen=$filas['foto_alumno'];
													
									
        		print ("<TR>\n");
 

 if(isset($filas['num_auditoria']))
                  {
																			$id=$filas['num_auditoria'];
																				//$fecha1=$filas['fe_fecha_planes'];
																			$n_gcia=$filas['num_gerencia'];
																		$text_unidad=$filas['tex_unidad'];
																		$fecha=$filas['fe_fecha'];
																			
            	     }	
        if(isset($filas['num_auditoria1']))
                  {
																		$id=$filas['num_auditoria1'];
																		$descrip1=$filas['tex_Descrp'];
																		$n_requis=$filas['num_requisito'];	
																			$n_level=$filas['num_nivl'];
																		//$fecha1=$filas['fe_fecha_planes'];
																	
            	     }				
			?>
				<tr align='center' id="apDiv1"> 
				
 
							 					

<?php	

printf("<td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'>
                   <font size='2'>&nbsp;%s</td>  <td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td> <td ><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td>
                     </tr>",$id, $descrip1, $n_gcia, $text_unidad, $fecha, $n_requis);
					
		}
print ("</TABLE>\n");
 //////////////////////////////////////////////////////////
}
  
    elseif(!isset($_SESSION["tipo_user"]))
  {
      ?> <div id="fila_conectar">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='acceso.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  </div> 
<?php     
   }
//////////////////////// 
?>
  </div>       	
			
	
</body>
	</html>	   
