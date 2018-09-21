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
    
	if (isset($_POST["prove_rif"])and ($_POST["prove_nom"]!="")) 
		{
			//------------------------ Datos de Entrada 
			$rif_y=$_POST['prove_rif'];
			$nomb_y=$_POST['prove_nom'];
            $dir1_y=$_POST['prove_dir1'];
			$dir2_y=($_POST['prove_dir2']);
            $lugar_serv_y=($_POST['prove_edo']);
            $represen_y=($_POST['prove_repre']);
            $tlf_cont_y=($_POST['prove_contact']);
            $email_y=($_POST['prove_correo']);
        //echo "campos".$rif_y;
		$clv_tem="111111";
		$perfiluser="proveedor";
        $status_usery="activo";
         $salt = substr ($rif_y,0,2);
			$clave_crypt = crypt ($clv_tem,$salt);
            
	if (mysql_num_rows(mysql_query("SELECT prov_rif FROM tbl_prov WHERE prov_rif	='" . $_POST['prove_rif'] . "'", $link))==0) {
   	$query="insert into tbl_prov (prov_rif, razon_prov, dir1_prov, dir2_prov, repres_prov, lugar_prov, Tlf_prove, Email_prov) VALUES ('$rif_y','$nomb_y', '$dir1_y', '$dir2_y', '$represen_y', '$lugar_serv_y', '$tlf_cont_y', '$email_y')";
		mysql_query ($query,$link);
      		$query_user="insert into user_audit (nomb_user, cod_emplea_user, perfil_user, clav_user, alias_user, ver_clv_user, estado_user) VALUES ('$rif_y', '$rif_y', '$perfiluser', '$clave_crypt', '$rif_y', '$clv_tem','$status_usery')";
            	mysql_query ($query_user,$link);
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
 
