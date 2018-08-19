<?PHP
   session_start ();
?>

<html >
	<head>
	
		<title>
			[Plan de Eval]
		</title>
 
<link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />
<link href="css/stilo_div.css" rel="stylesheet" type="text/css" />
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<!-- calendario --------------------------------------------------------->
<script src="js/jquery-1.5.2.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/jquery.ui.all.css" type="text/css">
        <script type="text/javascript" src="js/jquery.ui.core.js"></script>
        <script type="text/javascript" src="js/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="js/jquery.ui.datepicker.js"></script>
        <script type="text/javascript" src="js/funcion_jq.js"></script>
        <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
  
  
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
    
	if (!empty($_POST["docente1"]) and !empty($_POST["Nivel_docent"]) )
	{
            
                
       $leve_doc=$_POST["Nivel_docent"];
        if($leve_doc=="1"){
              $conten1="images/Grado1.gif";
              $conten2="images/Grado2.gif";
              $conten3="images/Grado3.gif";
          }else {
              $conten1="images/Grado4.gif";
              $conten2="images/Grado5.gif";
              $conten3="images/Grado6.gif";
            
          }
        $ced_doc=$_POST["docente1"];
            
          /*echo" "."<br>".$ced_dat_fam;
          echo" "."<br>".$nombx;
          echo" "."<br>".$apellx;
          echo" "."<br>".$telefx;
          echo" "."<br>".$correo;
          echo" "."<br>".$direc_famx;*/
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
									//echo "<meta http-equiv=Refresh content=1 <A TARGET='_blank'>";
								    echo "<meta http-equiv=Refresh content=1;url=tab_reg_datos.php?a=1>";
      	
       			//	echo "<meta http-equiv=Refresh content=3;url=tab_reg_datos.php?a=1>";
       	} else {
       			?>
									 <script type="text/javascript">
									    alert("YA Existe un Articulo Con esa descripcion");
								          </script><?php 
       			//echo "<meta http-equiv=Refresh content=3;url=tab_reg_datos.php?a=1>";
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
       
                <div id="dato_d" ><strong>Men&uacute </strong></div>
                <div id="dato_d" ><?php echo $tipo_user; ?>
                <strong> Usuario:</strong><?php echo $nombre_user; ?></div>
                <div id="dato_d" > Fecha: <?php $fecha=date("d/m/Y"); echo $fecha ;?></div>
        </div>
        <ul class="menu4">
            <li><a href="#nogo"></a></li>
            <li><a href="menu.php"><b><strong>INICIO</strong></b></a></li>
            <li><a href="tab_reg_datos.php"><b><strong>Registro</strong></b></a></li>
            
            <li><a href="buscar.php"><b><strong>Reporte</strong></b></a></li>
           
                   
            </ul>
</div>
</div>
</div>
<!--========================================================-->
<div class="pweb" class="center"><!--pweb -->
<!--=========================================================================================-->        
        <div id="fila_p">
								<div class="fila" >
                               
                                 <script>
                                        var current = 1;
                                        
                                        function addPerson() {
                                            console.log('running addPerson')
                                            //current keeps track of how many people we have.
                                            current++;
                                            var f = new Date();
                                            fech=(f.getDate() + "-" + (f.getMonth() +1) + "-" + f.getFullYear());
                                            var strToAdd = '<p><td><input id="iditems'+current+'" name="iditems'+current+'" value='+current+' size="1" /></p></td>'
                                            strToAdd1 = '<p><td> <input id="fechaplan'+current+'" name="fechaplan'+current+'" value='+fech+' /></p></td>'
                                            strToAdd2 = '<p><td><input id="horaplan'+current+'" name="horaplan'+current+'" size="5" /></p></td>'
                                            strToAdd3 = '<p><td><input id="pondplan'+current+'" name="pondplan'+current+'" size="5" /></p></td>'
                                            console.log(strToAdd)
                                            $('#mainField').append(strToAdd)
                                            $('#mainField1').append(strToAdd1)
                                            $('#mainField2').append(strToAdd2)
                                            $('#mainField3').append(strToAdd3)
                                        }
                                        
                                        $(document).ready(function(){
                                            $('#addPerson').click(addPerson)
                                        });
                                </script>
									<!-----------------------cara------------------------------->
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
                                                	echo"<option selected='selected'>Ninguno</select></td>";?>  </p>
                                                    </div>
                                                </td>
                                            </tr>
                                          <tr>   <div><td> <p>Nivel:
                                          <td></td>
                                        <td><select name="Nivel_docent">
                                             <option value="1">b&aacute;sico</option>
                                              <option value="2">Avanzado</option>
                                              <option value="0" selected="selected">Seleccione un Nivel</option>
                                              
                                            </select>
                                        
                                        </p></div>
                                        </tr>
                                        
                                         <tr><td><p>
                                        <input type="button" id="addPerson" value="Agregar Items" style="width:90px;">
                                        </p></td></tr>
                                                                         
                                        <tr> <div>
                                        <td>No. Items:
                                            <td>Fechas:
                                            <td>Horas
                                            <td>Pond%:
                                        </tr>    
                                       
                                        </div>
                                    <!----------------------------------------------------------------------------------------->
                                        <?php $fecha = date("d-m-Y");?>
                                      
                                       
                                            <p>
                                           <tr>
                                           <td>
                                            <input id="iditems" name="iditems" size="2" value="1" /></td>
                                            </p>
                                            <p>
                                           <td>
                                            <input id="fechaplan" name="fechaplan" value=" <?php echo $fecha ;?>"/></td>
                                           <td>
                                            <input id="objplan" name="objplan" size="5" />
                                          </p></td>
                                          <td>
                                            <input id="pond" name="pond1" size="5" />
                                          </p></td>
                                          </tr>
                                        </fieldset>
                                        
                                         <tr> 
                                         <td>
                                        <div id="mainField"></div>
                                        </td>
                                         <td>
                                        <div id="mainField1"></div>
                                        </td>
                                         <td>
                                        <div id="mainField2"></div>
                                        </td>
                                         <td>
                                        <div id="mainField3"></div>
                                        </td>
                                         </tr>                                      </tr>
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
                    </body>
					</html>



