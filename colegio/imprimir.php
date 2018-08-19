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
    $tipo_user=$_SESSION["tipo_user"]
    
?>
  


    

    
    
    <!--==================================================== Inicio     del      formulario==============================---->
    <!--=================================================================================================================---->
<div style="left: auto;" >   
<div >
  <div class="center" id="imagen"><!--<img src="mages/Top.jpg" height="100" width="900">--> </div>
</div>
</div>
<!--========================================================-->
<div  class="codrops-top">

<div class="cabezera">
<div id="alinear" >
       <div>
       
                <div id="dato_d" ><strong>Men&uacute </strong></div>
                <div id="dato_d" ><?php echo $tipo_user; ?>
                <strong> Usuario:</strong><?php echo $nombre_user; ?></div>
                <div id="dato_d" > Fecha: <?php $fecha=date("d/m/Y"); echo $fecha ;?></div>
        </div>
        <ul class="menu4">
            <li><a href="#nogo"></a></li>
            <li><a href="menu.php"><b><strong>INICIO</strong></b></a></li>
            <li><a href="tab_reg_datos.php"><b><strong>Registro</strong></b></a></li>
            <li><a href="buscar.php"><b><strong>Mantenimiento</strong></b></a></li>
            <li><a href="buscar.php"><b><strong>Reporte</strong></b></a></li>
           
                   
            </ul>
</div>
</div>
</div>
<!--========================================================-->
<div class="pweb" class="center"><!--pweb -->
<!--=========================================================================================-->        
         <table width="800" border="1" align="center" class="contacto_listar_id">
          <tr bgcolor="#bf8b90" align="center">
    	      <td width="6">ID</td>
    	      <td width="60">Foto</td>
              <td width="60">C&eacute;dula</td>
    	      <td width="100">Nombres</td>
    	      <td width="100">Apellidos</td>
    	      <td  colspan="3">Nivel</td>
              
    	       
        </tr> 
        <tr>         
       <?php 
		if (isset($_GET["id1"]))
        {      
       include("Conexion1.php"); 
        $link=Conectarse(); 
        $id_busc=($_GET["id1"]);
        $contenido=($_GET["con1"]);
        //echo  $id_busc;
            $consulta=mysql_query("SELECT * FROM tab3_inscrip WHERE  	ide_doc ='".$id_busc."'   ");
         
         if($consulta ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
        
                 } /*fin del if error sql*/ 
               // $res = mysql_query($busqueda,$link) or die("Error en: $busqueda: " . mysql_error()); 
           while($row1=mysql_fetch_array($consulta))
           {
            
                    $id=$row1['ide_doc'];
                    $localiza_imagen=$row1['foto_doc'];
                    $nombre=$row1['nomb'];
            		$ced_a=$row1['ced'];
            		$apell=$row1['Apell_doc'];
                    ?>
    	         
               <?php 
                     printf("<tr><td><font size='2'>&nbsp;%s</td> <td><font size='2'> <img src='%s' width ='60' height='60'> </td> <td><font size='2'>&nbsp;%s&nbsp;</td>  <td><font size='2'>&nbsp;%s&nbsp;</td> <td><font size='2'>&nbsp;%s&nbsp;</td></tr><tr> <td colspan='4'><font size='2'> <img src='%s' width ='350' height='380'> </td></tr>", $id, $localiza_imagen, $ced_a, $nombre, $apell, $contenido);
                      
                      
                      //echo ('<td> <a href="imprimir.php?id="' . $id  . '"> <img src=" '.  $cont1 . '" width ="50" height="50"></a></td>' ); 
                      //echo ('<td> <a href="imprimir.php?id="' . $id  . '"> <img src=" '. $cont2  . '" width ="50" height="50"></a></td>' ); ?>
               
                 <?php
            }
        }
         ?>      
      </tr>   
      </table>
<!--==========================================================================================-->                    
</div><!--pweb -->
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