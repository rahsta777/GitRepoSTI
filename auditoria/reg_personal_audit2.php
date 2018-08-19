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
	//include("f_fecha.php");
    
	if (isset($_POST["num_ced_person"])and ($_POST["nomb_descrp_person"]!="")) 
		{
			//------------------------ Datos de Entrada 
			$cd_person=$_POST['num_ced_person'];
   $nomb_y=$_POST['nomb_descrp_person'];
		 $indicad=$_POST['indica_person'];
			$gcia=($_POST['grcia_person']);
   $unitx=($_POST['unidad_audit']); 
   $rolx=($_POST['rol_audit']); 
   $nocargox=($_POST['num_carg_detallex']); 
			/*Encripta Clave*/
            
			//-------------------------------------------
			/*$fec_ing_y=($_POST['fech_ingx']); , ,     , , , */
			//$fec_ing_y=cambia_fecha_a_db($_POST['fech_ingx']); 
	//	echo "fecha: ".$fec_ing_y;, fec_inin_user ,  alias_user, clav_user, ver_clv_user, fot_user, estado_user /, ,'$ftoy','$passy','$stadouser_y'
		
		
	if (mysql_num_rows(mysql_query("SELECT num_ced_personal FROM i004t_personal WHERE num_ced_personal	='" . $_POST['num_ced_person'] . "'", $link))==0) {
   	$query="insert into i004t_personal (num_ced_personal, nom_personal, num_cargo, text_indicador, num_gerencia, num_unidad, num_rol) VALUES ('$cd_person','$nomb_y', '$nocargox', '$indicad', '$gcia', '$unitx', '$rolx')";
		mysql_query ($query,$link);
      ?><script type="text/javascript">
                        alert("Registro Efectuado");
                        </script><?php
       			} else {
       		?><script type="text/javascript">
                        alert("Ya Fue Creado un Registro Similar , por favor, Verifique su Ingreso");
                        </script>	<?php
 		}echo "<meta http-equiv=Refresh content=3;url=index0.php?a=1>";
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
 
