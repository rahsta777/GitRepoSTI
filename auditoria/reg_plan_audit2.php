<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>
</head>
<?php
   session_start ();
?>

<body>

<?php
	/*include("f_fecha.php.php");*/
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
	if (isset($_POST["numplan_audit"]) and ($_POST["num_activ_plan"]!="")) 
		{
			//-------------------- Datos de Entrada -----------------------------//
	

											$nun_detall_plan1=$_POST['numplan_audit']."d";
           $nun_detall_plan=$_POST['numplan_audit'];
											$descrip_plan=$_POST['desc_plan'];
											$nun_activity=$_POST['num_activ_plan'];
											$nun_requisito=$_POST['num_Requisito_plan'];
											$nun_cargo=($_POST['num_cargo_plan']);
											$nun_unidad=($_POST['num_unid_plan']);
											$fech_plan=($_POST['fech_plan']);
											$num_ced_plan=($_POST['num_cedula_plan']); 
										/*echo("paso detal.Plan ").$nun_detall_plan1."<br>";
										echo("paso plan ").$nun_detall_plan."<br>";
										echo("paso ").$descrip_plan."<br>";
										echo("paso ").$nun_activity."<br>";
										echo("paso ").$nun_requisito."<br>";
										echo("paso ").$nun_cargo."<br>";
										echo("paso ").$fech_plan."<br>";
										echo("paso ").$nun_unidad."<br>";
										echo("paso ").$num_ced_plan."<br>";*/
	         
 $fec_ing=cambia_fecha_a_db($_POST['fech_plan']);
	/*echo "fecha convertida A USA: ".$fec_ing_y;	*/
	if (mysql_num_rows(mysql_query("SELECT num_plan FROM d002t_detalle_plan WHERE num_plan	='" . $_POST['numplan_audit'] . "'", $link))==0) {
   		echo("paso....... a la consulta ");
$query="INSERT INTO d002t_detalle_plan (num_plan, num_detalle, num_activi, num_requisito, num_cargo, num_unidaddelleplan, num_cedula, fecha_detall) VALUES ('$nun_detall_plan', '$nun_detall_plan1', '$nun_activity', '$nun_requisito', '$nun_cargo', '$nun_unidad', '$num_ced_plan', '$fec_ing')";
							mysql_query ($query,$link);

						if (mysql_num_rows(mysql_query("SELECT num_planes FROM j005t_planes WHERE  num_planes	='" . $_POST['numplan_audit'] . "'", $link))==0) {
				 	$query2="INSERT INTO j005t_planes (num_planes, descrp_planes, fe_fecha_planes) VALUES ('$nun_detall_plan', '$descrip_plan', '$fec_ing')";
				        mysql_query ($query2,$link);      		

				    		 ?><script type="text/javascript">
                        alert("Registro Efectuado");
                        </script><?php
				     			} else {
				     		 ?><script type="text/javascript">
                        alert("Ya Fue Creado un Registro Similar , por favor, Verifique su Ingreso");
                        </script>	<?php

																									}	
																echo "<meta http-equiv=Refresh content=0;url=index0.php?a=1>";
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
   } /* fecha_detall,  '$fec_ing_y', /  , fe_fecha_planes '$fech_plan   
											echo "fecha convertida A USA: ".$fec_ing_y;	
*/?>
 </body>
 
