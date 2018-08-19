<?PHP
   session_start ();
?>

<html >
	<head>
	
		<title>
			[Menu Sistema]
		</title>
 
<link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />
<link href="css/stilo_div.css" rel="stylesheet" type="text/css" />
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<!-- calendario --------------------------------------------------------->

  
  
	</head>
	<body onLoad=focos();>
    
    
    <?PHP
   if (isset($_SESSION["usuario_valido"]))
   {
    $usuario_actual=$_SESSION["usuario_valido"];
    $nombre_user=$_SESSION["nom_usuario"];
    $tipo_user=$_SESSION["tipo_user"];
    
   if (isset($_POST['fotoact']))
   {
    /*echo $_POST['fotoact'];*/ }
 $rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['fotoact']['tmp_name'];
$nombreImagen=$_FILES['fotoact']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;

if ($_FILES['fotoact']['name']<>"")
{
	//echo 'intento cambiar la imagen';
	move_uploaded_file($rutaTemporal,$rutaDestino);
	
	}
   echo "cedula:  ".$_POST['cedx']."<br>";
   echo "Nombre:  ".$_POST['nomb']."<br>";
   echo "Apellido:  ".$_POST['apell']."<br>";
   echo "FEcha:  ".$_POST['fech']."<br>";
   echo "Tlf:  ".$_POST['telef']."<br>";
   echo "Direcc:  ".$_POST['domici']."<br>";
   echo "Correo:  ".$_POST['correo']."<br>";
   echo "foto:  ".$rutaDestino."<br>";
   echo "tipo localiza:  ".$_POST['localiza1']."<br>";
   
   
   include("Conexion1.php"); 
   $link=Conectarse(); 
    /* isset($_POST['imagen1']) and*/
   if (isset($_POST['cedx']) and  isset($_POST['nomb']) and isset($_POST['apell']) and isset($_POST['fech']) and isset($_POST['telef']) and isset($_POST['domici'])and isset($_POST['correo']) )
   {
    include("f_fecha.php");
       $varfech=cambia_fecha_a_db($_POST['fech']);
          
            if ($_POST['localiza1']=="doc"){  // nivl='" .$_POST['']. "',  foto_doc='".$_POST['fotoact']."',
                $cad="UPDATE tab3_inscrip set nomb='" .$_POST['nomb']. "', apell_doc='" .$_POST['apell']. "',
        					  tlf_doc='" .$_POST['telef']. "',
        					 foto_doc='".$rutaDestino."',
        					  fech_doc='".$varfech."', 
                              Direcc_doc='".$_POST['domici']."',
                              correo_doc='".$_POST['correo']."', 
                              ced='".$_POST['cedx']."' where ced='".$_POST['cedx']."'";
                 }             
           if ($_POST['localiza1']=="alumn"){//nac_alumn='" .$_POST['']. "', edad_alumn='".$_POST['']."', foto_alumno='".$_POST['imagen1']."',
                $cad="UPDATE tab2_inscrip set nomb_a='" .$_POST['nomb']. "', apell_alumn='" .$_POST['apell']. "',
        					 tlf_alumn='" .$_POST['telef']. "',
        					 foto_alumno='".$rutaDestino."',
        					  fech_alumn='".$varfech."', 
                              direc_alumn='".$_POST['domici']."',
                              correo_alumn='".$_POST['correo']."',
                               ced_a='".$_POST['cedx']."' where ced_a='".$_POST['cedx']."'";
            }
            /*===================================*/
               $resupdate= mysql_query($cad);
				 if(!$resupdate){die ("ERROR AL MODIFICAR EL REGISTRO". mysql_error());} 
                  else 
				    {
				   ?>
				<div id="fila_conectar">  <div id="box_conectar"> 
                            <?php
                            print ("<img  id='aline_imagen' src='images/loading.gif' width='10%'  /> \n");
                            echo "<p>&nbsp;</p>";
                   			echo "<p>&nbsp;</p>";
                   			echo "<p>&nbsp;</p>";
                            print ("<P id='contacto' ALIGN='CENTER'>Aguarde Actualizando......</P>\n");
                           	echo "<meta http-equiv=Refresh content=1;url=buscar.php?a=1>";
							
                              ?> </div>  </div> <?php			
            } 
              /*====================================*/
            
               
    } else {
     ?>
                     <script type="text/javascript">
                        alert("Dede cargar todos los datos en el formulario de Actualizacion");
                        </script>
                         <?php 
            echo "<meta http-equiv=Refresh content=3;url=buscar.php?a=1>";}
?>
  


   

                    <?php
 }
   else
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
   ?>
                    </body>
					</html>