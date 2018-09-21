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
    
	if (isset($_POST["clav_userx"])and ($_POST["clav_userx"]!="")) 
		{
			//------------------------ Datos de Entrada 
			$clv_y=$_POST['clav_userx'];
			$nomb_y=$_POST['nomb_userx'];
			$apell_y1=$_POST['apel1_userx'];
            		$apell_y2=$_POST['apel2_userx'];
			$iniy=($_POST['ini_nomb_userx']);
            		$catergory=($_POST['category_userx']);
            		$perfiy=($_POST['perfil_userx']);
            		$cod_empley=($_POST['cod_emplea_userx']);
           		$sexy=($_POST['sex_userx']);
            		$aliasy=($_POST['alias_userx']);
            		$clay=($_POST['clav_userx']);
            		$passy=($_POST['passwordx']);
            		$ftoy=($_POST['fot_userx']);
			$status_usery=($_POST['status_userx']);
           
			/*Encripta Clave*/
            		$salt = substr ($aliasy,0,2);
			$clave_crypt = crypt ($clv_y,$salt);
			//-------------------------------------------
			/*$fec_ing_y=($_POST['fech_ingx']); , ,     , , , */
			//$fec_ing_y=cambia_fecha_a_db($_POST['fech_ingx']); 
	//	echo "fecha: ".$fec_ing_y;, fec_inin_user ,  alias_user, clav_user, ver_clv_user, fot_user, estado_user /, ,'$ftoy','$passy','$stadouser_y'
		
		
	if (mysql_num_rows(mysql_query("SELECT cod_emplea_user FROM user_audit WHERE cod_emplea_user	='" . $_POST['cod_emplea_userx'] . "'", $link))==0) {
   	$query="insert into user_audit (nomb_user, apel1_user, apel2_user, ini_nomb_user, cod_emplea_user, category_user, perfil_user, sex_user, alias_user, clav_user, ver_clv_user, estado_user) VALUES ('$nomb_y','$apell_y1', '$apell_y2', '$iniy', '$cod_empley', '$catergory', '$perfiy', '$sexy', '$aliasy', '$clave_crypt', '$clv_y', '$status_usery')";
		mysql_query ($query,$link);
      	?><script type="text/javascript">
                        alert("Registro Efectuado");
                        </script><?php
       			} else {
       		?><script type="text/javascript">
                        alert("Ya Fue Creado un Registro Similar , por favor, Verifique su Ingreso");
                        </script>	<?php
 		}echo "<meta http-equiv=Refresh content=0;url=index0.php?a=1>";
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
 
