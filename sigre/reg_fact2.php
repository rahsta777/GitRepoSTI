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
			$importefact_x=$_POST['mont_fact'];
      //3F333333333333333333333333333338$razonsocial_y=$_POST['nomb_fact'];
			$descrip_facty=($_POST['descr_fact']);
      $id_prov=($_POST['id_provfac']);
      
			
			/*$fechafatc_y=($_POST['fecha_fact']); , ,     , , , */
			$fechafatc_y=cambia_fecha_a_db($_POST['fecha_fact']); 
    /*echo "idfactura: ".$idfact_y."<br>";
    echo "fecha: ".$fechafatc_y."<br>";
   
    echo "descrip: ".$descrip_facty."<br>";*/
    //echo "id proveedor".$id_prov."<br>";
		 /***********************convierte DE LATINA  a cifra AMERICANA separador  .**************************/
         if(!empty($importefact_x)){
				$mivalor = explode('.',str_replace(',','.',$importefact_x));
				$importefact_y=$mivalor[0].",".$mivalor[1].".".$mivalor[2];
         //echo "importe|: ".$$importefact_y."<br>";
									 }
                   $fechacit1=$fechafatc_y+21; 
                   echo $fechacit1;
                //$total=$cantvta*$preciovta0;
                /*$total=number_format($total,3,".",",");*/
        /*==========================================================================================*/  
		
	if (mysql_num_rows(mysql_query("SELECT   id_fact FROM  tbl_fact WHERE    id_fact	='" . $_POST['id_fact'] . "'", $link))==0) {
   	$query="insert into  tbl_fact (id_fact, fecha_fact, monto_fact, descrip,  idprove) VALUES ('$idfact_y','$fechafatc_y','$importefact_y', '$descrip_facty', '$id_prov')";
		mysql_query ($query,$link);
      $query2="insert into  tbl_factprov (idprov, idfact) VALUES ('$id_prov', '$idfact_y')";
    mysql_query ($query2,$link);
     $query3="insert into  tb_citas (id_rprov_cit, id_fact_cit, fech_fact) VALUES ('$id_prov', '$idfact_y', $fechafatc_y)";
    mysql_query ($query3,$link);

       
      	
          $busqueda2 =mysql_query("SELECT * FROM tbl_prov WHERE prov_rif='".$id_prov."'");
              while($filas2=mysql_fetch_array($busqueda2))
                                { 
                                $prove_dat_razon_provx=$filas2['razon_prov'];
                                $prove_dat_repres_provx=$filas2['repres_prov'];
                                $prove_dat_Tlf_provex=$filas2['Tlf_prove'];
                                $prove_dat_Emailx=$filas2['Email_prov'];
                                 echo $prove_dat_Emailx;
                                 /* echo $prove_dat_Emailx;
                                 $para=$prove_dat_Emailx;
                                  $título = "Se Registro Factura;  $_POST['id_fact'] ";
                                  $mensaje = 'Se Registro Factura';*/
                                  ?>
                                 <script type="text/javascript">
                        alert('Fue enviado Correo de notificacion de registro de Factura ');
                        </script> <?php 
                               
                            // Cabeceras adicionales 
                            /*$cabeceras .= 'To: Dir De Pago PDVSA <mary@example.com>, Kelly <kelly@example.com>' . "\
                            r\n";
                            $cabeceras .= 'Recordatorio su cheque esta por revision de nuestros analista ' . "\r\n";

                            // Enviarlo
                            mail($para, $título, $mensaje, $s);*/
                               }
                        echo "<meta http-equiv=Refresh content=0;url=index0.php?a=1>";
       			} else {

       		?>
          <script type="text/javascript">
                        alert("Ya Fue Creado un Registro Similar , por favor, Verifique su Ingreso");
                        </script>	
    <?php
 		}

    echo "<meta http-equiv=Refresh content=0;url=index0.php?a=1>";
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
 
