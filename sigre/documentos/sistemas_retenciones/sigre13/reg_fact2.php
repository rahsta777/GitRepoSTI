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
   include("fnc/f_fecha.php");
    
	if (isset($_POST["id_fact"])and ($_POST["fecha_fact"]!="")) 
		{
			//------------------------ Datos de Entrada 
			$idfact_y=$_POST['id_fact'];
			$importefact_y=$_POST['mont_fact'];
      $razonsocial_y=$_POST['nomb_fact'];
			$descrip_facty=($_POST['descr_fact']);
      $id_prov=($_POST['id_provfac']);
      
			//-------------------------------------------
			/*$fechafatc_y=($_POST['fecha_fact']); , ,     , , , */
			$fechafatc_y=cambia_fecha_a_db($_POST['fecha_fact']); 
    /*echo "idfactura: ".$idfact_y."<br>";
    echo "fecha: ".$fechafatc_y."<br>";
    echo "importe|: ".$$importefact_y."<br>";
    echo "descrip: ".$descrip_facty."<br>";*/
    echo "id proveedor".$id_prov."<br>";
		
		
	if (mysql_num_rows(mysql_query("SELECT   id_fact FROM  tbl_fact WHERE    id_fact	='" . $_POST['id_fact'] . "'", $link))==0) {
   	$query="insert into  tbl_fact (id_fact, fecha_fact, monto_fact, descrip,  idprove) VALUES ('$idfact_y','$fechafatc_y','$importefact_y', '$descrip_facty', '$id_prov')";
		mysql_query ($query,$link);
      $query2="insert into  tbl_factprov (idprov, idfact) VALUES ('$id_prov', '$idfact_y')";
    mysql_query ($query2,$link);
      	?>
        <script type="text/javascript">
                        alert("Registro Efectuado");
                        </script><?php
       			} else {
       		?>
          <script type="text/javascript">
                        alert("Ya Fue Creado un Registro Similar , por favor, Verifique su Ingreso");
                        </script>	
    <?php
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
 
