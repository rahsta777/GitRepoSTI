<?PHP
   session_start ();
?>

<html >
	<head>
	
		<title>
			[Plan de Eval]
		</title>
 

<link href="css/stilo_div.css" rel="stylesheet" type="text/css" />
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/nivl_grd.js"></script>
<!-- calendario --------------------------------------------------------->

  <script src="js/jquery.min.js" type="text/javascript"></script>

 <!-- Load jQuery, SimpleModal and Basic JS files -->
 <link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>

 <!-- Load jQuery, SimpleModal and Basic JS files --> 
	</head>
	<body onLoad=focos();>
   <?PHP
   if (isset($_SESSION["usuario_valido"]))
   {
    $usuario_actual=$_SESSION["usuario_valido"];
    $nombre_user=$_SESSION["nom_usuario"];
    $tipo_user=$_SESSION["tipo_user"]
    
?> 
    
 <?php
    
	if (!empty($_POST["docente1"]) and !empty($_POST["Nivel_docent"]) and !empty($_POST["grado_docent"]) )
	{
	   
       $leve_doc=$_POST["Nivel_docent"];
        /*if($leve_doc=="1"){
              $conten1="images/Grado1.gif";
              $conten2="images/Grado2.gif";
              $conten3="images/Grado3.gif";
          }else {
              $conten1="images/Grado4.gif";
              $conten2="images/Grado5.gif";
              $conten3="images/Grado6.gif";
            
          }*/
          $gradoc=$_POST["grado_docent"];
          echo "EL Valor del GRado:  ".$gradoc;
         if($leve_doc=="1"){ 
            
              if($gradoc=="1")
                $conten1="images/Grado1.gif";
                
                 if($gradoc=="2")
                $conten2="images/Grado2.gif";
                
                 if($gradoc=="3")
                $conten3="images/Grado3.gif";
                 
                  if($gradoc=="12"){
                    $conten1="images/Grado1.gif";
                    $conten2="images/Grado2.gif";
                             }
                     if($gradoc=="13"){
                    $conten1="images/Grado1.gif";
                    $conten2="images/Grado3.gif";
                     }
                    if($gradoc=="23"){
                     $conten1="images/Grado2.gif";
                    $conten2="images/Grado3.gif";
                     }
                     
                     if($gradoc=="123"){
                        $conten1="images/Grado1.gif";
                        $conten2="images/Grado2.gif";
                        $conten3="images/Grado3.gif";
                         }
                     
                     
             
             }else {
                        
                     if($gradoc=="4")
                    $conten1="images/Grado4.gif";
                      
                     if($gradoc=="5")
                    $conten2="images/Grado5.gif";
                    
                     if($gradoc=="6")
                    $conten3="images/Grado6.gif";
                     
                   if($gradoc=="45"){
                    $conten1="images/Grado4.gif";
                    $conten2="images/Grado5.gif";
                     }
                     if($gradoc=="46"){
                    $conten1="images/Grado4.gif";
                    $conten2="images/Grado6.gif";
                     }
                     if($gradoc=="56"){
                    $conten1="images/Grado5.gif";
                    $conten2="images/Grado6.gif";
                     }
                     
                     if($gradoc=="456"){
                    $conten1="images/Grado4.gif";
                    $conten2="images/Grado5.gif";
                    $conten3="images/Grado6.gif";
                     }
            
             }
            
            
         
       
          
        $ced_doc=$_POST["docente1"];
            
          /*
        include("f_fecha.php");
        $var3=cambia_fecha_a_db($_POST['fech']);
        echo" "."<br>".$var3;/*foto_repr '$rutaDestino'*/
  /*+++++++++++++++++++++++++++++++++++++++++,+++++++++++++++++++++++++++++++++*/
 /**/
   include("Conexion1.php"); 
   $link=Conectarse(); 
   if (mysql_num_rows(mysql_query("SELECT id_docent FROM tab_plan WHERE id_docent='" . $ced_doc. "'", $link))==0) {
   $Sql="insert into tab_plan (id_docent, contenido1, contenido2, contenido3,niv_doc) VALUES ('".$ced_doc."', '".$conten1."', '".$conten2."', '".$conten3."', '".$leve_doc."')";
		mysql_query ($Sql,$link);
        ?>
								   <div id="fila_conectar">  <div id="box_conectar"> 
							             <?php
						         	    print ("<BR><img  id='aline_imagen' src='img/loading.gif' width='10%' alt='' /> \n");
								        echo "<p>&nbsp;</p>";
										echo "<p>&nbsp;</p>";
										echo "<p>&nbsp;</p>";
								    print ("<P id='contacto' ALIGN='CENTER'>Aguarde Procesando......</P>\n");
									echo "<meta http-equiv=Refresh content=1;url=plan.php?a=1>";
      	
       			
       	                         } else {
       			?>
									 <script type="text/javascript">
									    alert("Ya Existe un Docente con ese Nivel");
								          </script> <?php 
       			                      echo "<meta http-equiv=Refresh content=0;url=plan.php?a=1>";
 		                     }
                         
  }
  /*+===========================================================================*/
      
	

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
       
                <div id="dato_d" ><strong>Plan de Evaluaci&oacute;n </strong></div>
                <div id="dato_d" ><?php echo $tipo_user; ?>
                <strong> Usuario:</strong><?php echo $nombre_user; ?></div>
                <div id="dato_d" > Fecha: <?php $fecha=date("d/m/Y"); echo $fecha ;?></div>
        </div>
        <ul class="menu4">
            <li><a href="#nogo"></a></li>
            <li><a href="menu.php"><b><strong>INICIO</strong></b></a></li>
            <li><a href="tab_reg_datos.php"><b><strong>Registro</strong></b></a></li>
            <li><a href="buscar.php"><b><strong>Mantemiento</strong></b></a></li>
           <li><a href="buscar_repo.php"><b><strong>Reportes</strong></b></a></li>
                   
            </ul>
</div>
</div>
</div>
<!--========================================================-->
<div class="pweb" class="center"><!--pweb -->
<!--=========================================================================================-->        
        <div id="fila_p">
								<div class="fila" >
                               
                                 
									<!-----------------------cara------------------------------->
                                    <form  method="POST" action="plan.php" enctype="multipart/form-data" >
				 <table class="contacto"  id="dato" border="0">  
                                
                                       <tr> <td> <p>Cedula Docente:</td>
                                                <td>
                                                    <div><?php
                                                    include("Conexion1.php"); 
                                        $link=Conectarse(); 
                                                      echo "<td> <select name='docente1'>";	
                                                  	$cursor2 = mysql_db_query("db_colegio", "SELECT ced, nomb FROM tab3_inscrip", $link);
                                                	while ($row = mysql_fetch_array($cursor2))
                                                	
                                                    { ?>
                                                     <option value="<?=$row["ced"]; ?>"><?=$row["nomb"]." ".$row["ced"]; ?></option>
                                                    <?php
                                                    }
                                                	mysql_free_result($cursor2);
                                                	echo"<option selected='selected'>Seleccione un Docente</select></td>";?>  </p>
                                                    </div>
                                                </td>
                                            </tr>
                                          <tr>   <div><td> <p>Nivel:
                                          <td></td>
                                        <td><select name="Nivel_docent" id="Nivel_docent" onchange="pasanivel()">
                                             <option value="1">b&aacute;sico</option>
                                              <option value="2">Avanzado</option>
                                              <option value="0" selected="selected">Seleccione un Nivel</option>
                                              
                                            </select>
                                        
                                        </p></div>
                                        </tr>
                                        
                                        <tr>   <div><td> <p>Grado:
                                          <td></td>
                                        <td><select name="grado_docent">
                                             <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                              <option value="6">6</option>
                                              <option value="12">1 y 2</option>
                                              <option value="13">1 y 3</option>
                                              <option value="23">2 y 3</option>
                                              <option value="123">1, 2, y 3</option>
                                              <option value="45">4 y 5</option>
                                              <option value="46">4 y 6</option>
                                              <option value="56">5 y 6</option>
                                              <option value="456">4, 5, y 6</option>
                                              <option value="0" selected="selected">Seleccione un Grado</option>
                                              
                                            </select>
                                        
                                        </p></div>
                                        </tr>
                                        
                                         <tr><td><p>
                                        <input type="submit" id="addPerson" value="Registrar Plan/Docent" style="width:90px;">
                                        </p></td>
                                           <td><p> 
                                           <div id='content'>
                                    		<div id='basic-modal'>
                                    			<a href="#"><input type="button" name='basic' value='Ver Registros' class='basic'/></a> 
                                    		</div>
                                    	   </div>                         
                                          
                                            </p></td></tr>
                                        </div>
                                    <!----------------------------------------------------------------------------------------->
                                        <?php $fecha = date("d-m-Y");?>
                                      
                                       
                                            <p>
                                           
                                        
                                        
                                                                          </tr>
                                         <!----------------------------------------------------------------------------------------->
                                        <?php $fecha_regplan = date("d-m-Y"); ?>
                                      <tr>   <div>
                                        <td><input type="hidden" name="fech_docent"  id="fech_docent" value="<?php echo $fecha_regplan;?>"  class="fechfam">
                                        </p></div>
                                                                               
                                       
                                          
                                        
                                        <?php
                                        /*
                                    	$cursor ="SELECT nomb, ced FROM tab3_inscrip";
                                    	$result=pg_query($conn, $cursor);
                                    		echo "<select name='dpto'>";
                                     while($row = pg_fetch_array($result)){
                                            ?>
                                             <option value="<?=$row["id_dpto"]; ?>"><?=$row["concep_dpto"]; ?></option>
                                            <?php
                                        }
                                   */ ?>
                                    </select>
										
                                        </p>
                                        
                                       
                                        </table>
											</form>	
	
          
													<!-----------------------------------------------fin cara s3b----------------------------------------------------->
													</div><!-- div fila -->
													</div><!-- div fila_p -->  
        
        
		
               
        
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
   <!-------------------------------------------------- modal content -------------------------------------------->
  	<div id="basic-modal-content">
			   <?php
      $sql00="SELECT * FROM tab_plan ";
			$resultado_sql00=mysql_query($sql00);
      $nfilas=mysql_num_rows($resultado_sql00);
            	print ("<TABLE A align='center' cellspacing='0'cellpadding=7 width='400px' border='0' style='font-size:12px'>\n");
              print ("<TR  class='contacto_v'>\n");
							print ("<TH >C&eacute;dula</TH>\n");
							print ("<TH colspan='3'>Grado</TH>\n");
							print ("</TR>\n");
							 for ($i=0; $i<$nfilas; $i++)
												{
												$row00=mysql_fetch_array($resultado_sql00);
				          printf("<tr bgcolor='#FFFFFF'>  <td><font size='2'>&nbsp;%s&nbsp;</td> <td><font size='2'><img src='%s' width ='60' height='60'> </td> <td><font size='2'><img src='%s' width ='60' height='60'> </td> <td><font size='2'><img src='%s' width ='60' height='60'> ;</td></tr>",$row00['id_docent'], $row00['contenido1'], $row00['contenido2'], $row00['contenido3']);
                           printf("  <td><font size='2'>&nbsp;%s&nbsp;</td> <td><font size='2'> &nbsp;%s&nbsp;</td> <td><font size='2'>&nbsp;%s&nbsp; </td> <td><font size='2'>&nbsp;%s&nbsp; ;</td>",$row00['id_docent'], $row00['contenido1'], $row00['contenido2'], $row00['contenido3']);
		   									
					                           }
                                                 print ("</TABLE>");  
                                               
?>       
</div>
   
                <!-- preload the images -->
		<div style='display:none'>
			<img src='images/x.png' alt='' />
		</div>
  <!--------------------------------------------------fin modal content --------------------------------------------> 	
  </body>
	</html>



