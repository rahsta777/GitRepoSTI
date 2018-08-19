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
       
                <div id="dato_d" > <img   src='images/user_proceso.png' width='10%' /><strong>Actualizar </strong></div>
                <div id="dato_d" ><?php echo $tipo_user; ?>
                <strong> Usuario:</strong><?php echo $nombre_user; ?></div>
                <div id="dato_d" > Fecha: <?php $fecha=date("d/m/Y"); echo $fecha ;?></div>
        </div>
        <div >
        <ul class="menu4">
            <li><a href="#nogo"></a></li>
            <li><a href="menu.php"><b><strong>INICIO</strong></b></a></li>
            <li><a href="tab_reg_datos.php"><b><strong>Registro</strong></b></a></li>
            <li><a href="buscar.php"><b><strong>Mantenimiento</strong></b></a></li>
            <li><a href="buscar_repo.php"><b><strong>Reportes</strong></b></a></li>
            </ul>
        </div>
</div>
</div>
</div>
<!--========================================================-->
<div class="pweb" class="center"><!--pweb -->
<!--=========================================================================================-->        
  <?php 
include("Conexion1.php");
$link=Conectarse();
if(isset($_POST["ced_act"])){
     
    $ced_x=$_POST["ced_act"];
    $localiza_x=$_POST["variable1"];
    $localiza_x2=$_POST["variable2"];
     $proceso=$_POST["proceso"];

/*$busqueda="SELECT * from tab2_inscrip WHERE ced_a='" . $_POST['ced_act'] . "' ";
 $resultquery=mysql_query($busqueda);*/

/*if($localiza_x=="doc")
    {
    
    $resultquery=mysql_query($busqueda);
     echo "Cedula doc: ".$ced_x." Tipo: ".$localiza_x." la Consulta".$resultquery;
    
              
     }
       
            {
                $busqueda="SELECT * from tab3_inscrip WHERE ced='" . $_POST['ced_act'] . "' ";
                $resultquery=mysql_query($busqueda);
                  echo "Cedula alumn: ".$ced_x." Tipo: ".$localiza_x." la Consulta".$resultquery;
                  $row=mysql_num_rows($resultquery);
              if (!$row){
			 	?>
                     <script type="text/javascript">
                        alert("No existe el registro Docente ");
                        </script>
                        <?php
                   	//echo "<meta http-equiv=Refresh content=1;url=manten1.php?a=1>";
                    
						}
             }
             */
             
             //echo "paso tipo ".$localiza_x;
      if($localiza_x=="doc")
            $busqueda="SELECT * from tab3_inscrip WHERE ced='" . $_POST['ced_act'] . "' ";
     
        if($localiza_x=="alumn")
            $busqueda="SELECT * from tab2_inscrip WHERE ced_a='" . $_POST['ced_act'] . "' ";
            
            if($localiza_x=="alumn_ch")
            $busqueda="SELECT * from tab2_inscrip WHERE ced_a='" . $_POST['ced_act'] . "' ";
     
      $resultquery=mysql_query($busqueda);
      if($resultquery ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
                } /*fin del if error sql*/
      while($filas=mysql_fetch_array($resultquery))        
            {
     
                    if(isset($filas['apell_alumn'])) 
                        {
                           
                            $id=$filas['id_alumn'];
                    		$localiza_imagen=$filas['foto_alumno'];
                            $nombre=$filas['nomb_a'];
                    		$ced_alum=$filas['ced_a'];
                    		$apell=$filas['apell_alumn'];
                            $correo=$filas['correo_alumn'];
                            $tlf=$filas['tlf_alumn'];
                            $fecha=$filas['fech_alumn'];
                            $niv=$filas['niv_alumn'];
                            $direcc=$filas['direc_alumn'];
                            include("f_fecha.php");	
                            $varfech=cambia_fecha_a_normal($fecha);
                            $nacionalid=$filas['nac_alumn'];	
                         }
                    
                    if(isset($filas['Apell_doc']))
                        {
                            $id=$filas['ide_doc'];
                    		$localiza_imagen=$filas['foto_doc'];
                            $nombre=$filas['nomb'];
                    		$ced_alum=$filas['ced'];
                    		$apell=$filas['Apell_doc'];
                            $correo=$filas['correo_doc'];
                            $tlf=$filas['tlf_doc'];
                            $fecha=$filas['fech_doc'];
                            $niv=$filas['nivl'];
                            $direcc=$filas['Direcc_doc'];	
                            include("f_fecha.php");
                            $varfech=cambia_fecha_a_normal($fecha);
                            $nacionalid=$filas['nacionalid_doc'];
       
                        }
    }    
?>
<form  method="POST" action="actualizar2.php"  enctype="multipart/form-data"  >
				<div  style="color: #FFF; font-size:0px;"><?php $fecha_hoy = date("d-m-Y");?></div>
				
                                      	
					<!--======================================================================================================================================------------>
				
						
						
						<div class="content" >
							 <div id="fila_p">
								<div class="fila" >
                                
								<table class="contacto"  id="dato"   >  
                                      <tr>  <div><td><p>C&eacute;dula:
                                        <td><input type="text" id="cedx" name="cedx" value="<?php echo $ced_alum;  ?>"   size="15" onchange="cedula_val()" />
                                        
                                        </p></div>
                                        
                                        
                                         <div  class="imgclase" id="aline_imagen"><img src="<?php echo $localiza_imagen;?>" width ="80" height="100"/></div> 
                                                                                                              
                                       
                                        
                                       <tr>  <div><td><p>Nombres  :
                                        <td><input type="text" name="nomb" id="nomb"  size="30" value="<?php echo  $nombre;?>" onchange="palabras()" />
                                         
                                        <input name="localiza1" type="hidden" value="<?php echo $localiza_x; ?>" />
                                        <div ></div>
                                        
                                        </div>
                                        <tr> <div><td><p>Apellidos:
                                        <td><input type="text" name="apell" size="30" id="apell"  value="<?php echo 	$apell;?>" onchange="palabras2()" /> 
                                        </p></div>
                                        
                                      <tr>   <div><td> <p>Tel&eacute;fono:
                                        <td><input type="text" name="telef" id="telefono" size="27" value="<?php echo $tlf;?>"/>
                                        </p></div>
                                        
                                         <tr>   <div><td> <p>Domicilio de Residencia:
                                        <td><input  type="text"  name="domici" id="domici" size="27" value="<?php echo $direcc;?>"/>
                                        </p></div>
                                        
                                        <?php ?>
                                      <tr>   <div><td><p>Fecha de Registro:
                                        <td><input type="text" name="fech"  id="fech" value="<?php echo $varfech ;?>"  class="fechfam"/>
                                        
   
                                        </p></div>
                                                                               
                                        <tr>  <div><td><p>Email:
                                        <td><input type="text" name="correo" id="correo"  value="<?php echo $correo;?>" onchange="VerifyEmail();"/>
                                        </p></div>
                                        <tr>   <div><td> <p>Nacionalidad:
                                        <td><input type="text"  value="<?php echo $nacionalid ;?>"  />
                                        <tr>   <div><td> 
                                       <a href="buscar.php?var2=<?php echo $localiza_x ?>&var1=<?php echo $localiza_x2 ?>&proceso=<?php echo $proceso ?>" > <input type="button" style="background:url(images/fondo_input/fondo_input_g.png));width:150px; height:30px ;" value="[Volver a Buscar]" ></a>
				       <a href="localizar1.php?var2=<?php echo $localiza_x ?>&var1=<?php echo $localiza_x2 ?>&proceso=<?php echo $proceso ?>" > <input type="button" style="background:url(images/fondo_input/fondo_input_g.png));width:150px; height:30px ;" value="[Volver a listado]" ></a>
                                        </p></div>
                                        </tr>
                                            
                                        
                                       
                                      
                                        
                                        </table>
													<!-----------------------------------------------fin S1B----------------------------------------------------->
										</div><!-- div fila -->
			                 </div><!-- div fila_p -->
													<!--fila hacen el efecto tabulador-->
                        </div><!-- fin de content---->
												
        </form> 
       <?php } /* fin while*/
?>                                           
              
        
		
               
        
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