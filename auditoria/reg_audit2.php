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
   	include("fnc/f_fecha.php");
    	if (isset($_POST["num_audit"])and ($_POST["num_desc_audit"]!="")) 
		{
			//------------------------ Datos de Entrada 
			$num_audit_y=$_POST['num_audit'];
			$num_desc_audit_y=$_POST['num_desc_audit'];
			$num_gcia_audit_y=$_POST['num_gcia_audit'];
 		    $texto_audit_unid_y=$_POST['texto_audit_unid'];
			$ced_audit_y=($_POST['ced_audit']);
 		    $num_unid_audit_y=($_POST['num_unid_audit']);
     		$num_fech_audit_y=($_POST['num_fech_audit']);
     		$num_requisit_audit_y=($_POST['num_requisit_audit']);
     		$num_audit_niv_y=($_POST['num_audit_niv']);
     		$notas_audit_y=($_POST['notas_audit']);
            	
           
			/*Encripta Clave*/
           //	$salt = substr ($aliasy,0,2);
			//$clave_crypt = crypt ($clv_y,$salt);
			//-------------------------------------------
			/*$num_fech_audit_y=($_POST['num_fech_audit']); , ,     , , , */
			//$num_fech_audit_y=cambia_fecha_a_db($_POST['num_fech_audit']); 
            $fec_cambio=cambia_fecha_a_db($_POST['num_fech_audit']); 
		echo "fecha: ".$num_fech_audit_y;		
		
	if (mysql_num_rows(mysql_query("SELECT num_auditoria FROM j0013t_auditoria WHERE num_auditoria	='" . $_POST['num_audit'] . "'", $link))==0) {
   	$query="insert into j0013t_auditoria (num_auditoria, num_gerencia, tex_unidad, num_ced, fe_fecha) VALUES ('$num_audit_y','$num_gcia_audit_y', '$texto_audit_unid_y', '$ced_audit_y', '$fec_cambio')";
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
  //------------------------ Datos de Entrada  auditoria detalle---------------------------------------------------
  	if (isset($_POST["num_audit"])and ($_POST["num_desc_audit"]!="")) 
		{
			//------------------------ Datos de Entrada 
			$num_audit_x=$_POST['num_audit'];
                         /*echo("clave:"."").$clv_y;*/
			$desc_audit_x=$_POST['num_desc_audit'];
			  
     		$num_fech_audit_x=($_POST['num_fech_audit']);
     		$num_requisit_audit_x=($_POST['num_requisit_audit']);
     		$num_audit_niv_x=($_POST['num_audit_niv']);
     		$notas_audit_x=($_POST['notas_audit']);
            	
           
			/*Encripta Clave*/
           //	$salt = substr ($aliasy,0,2);
			//$clave_crypt = crypt ($clv_y,$salt);
			//-------------------------------------------
			/*$num_fech_audit_y=($_POST['num_fech_audit']); , ,     , , , */
			$num_fech_audit_y=cambia_fecha_a_db($_POST['num_fech_audit']); 
	//	echo "fecha: ".$fec_ing_y;, fec_inin_user ,  alias_user, clav_user, ver_clv_user, fot_user, estado_user /, ,'$ftoy','$passy','$stadouser_y'
		
		
	if (mysql_num_rows(mysql_query("SELECT num_auditoria1 FROM d003t_detalle_aud WHERE num_auditoria1	='" . $_POST['num_audit'] . "'", $link))==0) {
   	$query="insert into d003t_detalle_aud (num_auditoria1, num_requisito, tex_Descrp, num_nivl, tex_nota) VALUES ('$num_audit_x','$num_requisit_audit_x', '$desc_audit_x', '$num_audit_niv_x','$notas_audit_x' )";
		mysql_query ($query,$link);
      	          ?><script type="text/javascript">
                        alert("Registro Efectuado");
                        </script><?php
			echo "<meta http-equiv=Refresh content=0;url=index0.php?a=1>";
       			} else {
       			  ?><script type="text/javascript">
                        alert("Ya Fue Creado un Registro Similar , por favor, Verifique su Ingreso");
                        </script><?php
       					echo "<meta http-equiv=Refresh content=0;url=index0.php?a=1>";
 		}echo "<meta http-equiv=Refresh content=0;url=index0.php?a=1>";
  }
		
 ?>
 <script type="text/javascript">
                        alert("Debe ingresar datos en Auditoria");
                        </script>
 <?php
 echo "<meta http-equiv=Refresh content=0;url=index0.php?a=1>"; 
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
 
