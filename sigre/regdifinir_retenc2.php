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
// Conexi�n a la base de datos
    include("conexion/Conexion1.php");
    $link = Conectarse();
	//include("f_fecha.php");
    
	if (isset($_POST["codi_retenc"])and ($_POST["descr_retenc"]!="")) 
		{
			//------------------------ Datos de Entrada 
			$cod_ret_y=$_POST['codi_retenc'];
			$descrp_ret_y=$_POST['descr_retenc'];
      $valor_ret_y=$_POST['valor_retenc'];
	if (mysql_num_rows(mysql_query("SELECT cod_ret FROM tip_retencion WHERE   cod_ret	='" . $_POST['codi_retenc'] . "'", $link))==0) {
   	$query="insert into tip_retencion (cod_ret, descr_tip_ret, VALOR) VALUES ('$cod_ret_y','$descrp_ret_y', $valor_ret_y)";
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
 
