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
    
    <?PHP if (isset($_POST['cedx']))
   {
    /*echo $_POST['cedx'];*/ } ?>
    <?PHP
   if (isset($_SESSION["usuario_valido"]))
   {
    $usuario_actual=$_SESSION["usuario_valido"];
    $nombre_user=$_SESSION["nom_usuario"];
    $tipo_user=$_SESSION["tipo_user"];
   
   include("Conexion1.php"); 
   $link=Conectarse(); 
    /* isset($_POST['imagen1']) and*/
    $cedx=$_POST['ced_act'];
    $localiza_x=$_POST["variable1"];
   if (isset($cedx)  )
   {
   
          
            if ($localiza_x=="doc"){  // "DELETE  FROM user_tab_nom WHERE id_clv='$ide1'";
                $cad="DELETE from tab3_inscrip WHERE ced='".$cedx."'";
        					 
                 }             
           if ($localiza_x=="alumn"){//nac_alumn='" .$_POST['']. "', edad_alumn='".$_POST['']."', foto_alumno='".$_POST['imagen1']."',
                $cad="DELETE from tab2_inscrip WHERE ced_a='".$cedx."'";
        				
            }
            /*===================================*/
               $resupdate= mysql_query($cad);
				 if(!$resupdate){die ("ERROR AL ELIMINAR  EL REGISTRO". mysql_error());} 
                  else 
				    {
				   ?>
				<div id="fila_conectar">  <div id="box_conectar"> 
                            <?php
                            print ("<BR><img  id='aline_imagen' src='images/loading.gif' width='10%'  /> \n");
                            echo "<p>&nbsp;</p>";
                   			echo "<p>&nbsp;</p>";
                   			echo "<p>&nbsp;</p>";
                            print ("<P id='contacto' ALIGN='CENTER'>Aguarde ELIMINANDO====......</P>\n");
                           	echo "<meta http-equiv=Refresh content=1 <A TARGET='_blank'>";
                            echo "<meta http-equiv=Refresh content=1;url=actualizar.php?a=1>";
							//$affected = pg_affected_rows($result);
                              ?> </div>  </div> <?php			
            } 
              /*====================================*/
            
               
    } else {
     ?>
                     <script type="text/javascript">
                        alert("Dede cargar todos los datos en el formulario de Actualizacion");
                        </script>
                         <?php 
            echo "<meta http-equiv=Refresh content=3;url=localizar1.php?a=1>";}
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