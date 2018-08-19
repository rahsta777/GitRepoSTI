  
<!DOCTYPE html>
<html>
<head>
<title> Inicial De Sistema</title>


<!------------------------------------------->
<!--------------------------------CSS------------------------------------------->


<!------------------------------------------->



</head>
<body >
  
       
	   <table width="700" border="0" align="center" class="contacto_listar_id">
	     
	     
                    
	    <div id="carta_imprimir">
	    <tr>
	      <td colspan="8" align="center" bgcolor="#751b23" id="box1" ><strong >Docente</strong>  </td>
	    </tr>
	    <tr bgcolor="#bf8b90" align="center">
    	      <td >ID</td>
    	      <td >foto</td>
    	      <td width="144">Cedula</td>
    	      <td width="150">Nombres</td>
    	      <td>Apellidos</td>
    	      <td width="140"></td>
    	       <td width="140"></td>
                <td width="140"></td>
        </tr>      
             <?php 
     if (isset($_GET["var1"]))
        {      
       include("Conexion1.php"); 
        $link=Conectarse(); 
        $buscar=($_GET["var1"]);
        //echo "paso buscar cedula:".$buscar."<br>"; 
         
    	//$busqueda=mysql_query("SELECT * from  tab3_inscrip, tab2_inscrip WHERE ced_doc LIKE '%".$buscar."%' OR Nomb_doc LIKE '%".$buscar."%' OR nomb_alumn LIKE '%".$buscar."%' OR ced_represe_alumn LIKE '%".$buscar."%'");
        
            //echo "paso buscar tipo: (".$buscar2.")"; 
				$busqueda=mysql_query("SELECT * FROM tab23 INNER JOIN tab3_inscrip INNER JOIN tab2_inscrip ON id_docen=ced and id_alum=ced_a and id_docen='".$buscar."' ");            
            /*$busqueda=mysql_query("SELECT * FROM tab23 INNER JOIN tab3_inscrip INNER JOIN ON id_docen=ced and id_docen='".$buscar."' ");*/
				/*$busqueda=mysql_query("SELECT * FROM tab23 INNER JOIN tab3_inscrip ON id_docen=ced and id_docen='".$buscar."' ");*/
            
         /*==================================================================================================000*/   
        /*$sentencia = "SELECT * FROM reg_tip_curso
        INNER JOIN tip_curso
				on cod_curse=cod_curs && cod_curse = '$c12'
        INNER JOIN reg_participante ON ced_curse=cedula && fecha_incrip >= '$f1' && fecha_incrip <= '$f2'
            WHERE cod_curse
            NOT IN (SELECT cod_curs_st  FROM sta_part where ced_st = ced_curse)
            ORDER BY ced_curse asc";*/
             /*==================================================================================================000*/   
			 
          
         if($busqueda ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
        
                 } /*fin del if error sql*/ 
              
           while($filas=mysql_fetch_array($busqueda))
           {
           
           if(isset($filas['apell_alumn'])) 
               {
                    $id_a=$filas['id_alumn'];
            		$localiza_imagen_a=$filas['foto_alumno'];
                    $nombre_a=$filas['nomb_a'];
            		$ced_alum_a=$filas['ced_a'];
            		$apell_a=$filas['apell_alumn'];
            		
        		}
                if(isset($filas['Apell_doc']))
                {
                    $id=$filas['ide_doc'];
            		$localiza_imagen=$filas['foto_doc'];
                    $nombre=$filas['nomb'];
            		$ced_alum=$filas['ced'];
            		$apell=$filas['Apell_doc'];
            	}	
    		
                 ?>
    	      
    	    
    	  
    		    <tr>
               <?php 
                printf("<td><font size='2'>&nbsp;%s</td> <td><font size='2'> <img src='%s' width ='40' height='40'> </td> <td><font size='2'>&nbsp;%s&nbsp;</td>  <td><font size='2'>&nbsp;%s&nbsp;</td> <td><font size='2'>&nbsp;%s&nbsp;</td> ", $id, $localiza_imagen, $ced_alum, $nombre, $apell);
              ?> 
              <tr>
	      <td colspan="8" align="center" bgcolor="#751b23" id="box1" ><strong >Alumnos</strong>  </td>
	    </tr><tr bgcolor="#bf8b90" align="center">
    	      <td >ID</td>
    	      <td >foto</td>
    	      <td width="144">Cedula</td>
    	      <td width="150">Nombres</td>
    	      <td>Apellidos</td>
    	      <td width="140"></td>
    	       <td width="140"></td>
                <td width="140"></td>
        </tr>      <tr>  <?php printf("<td><font size='2'>&nbsp;%s</td> <td><font size='2'> <img src='%s' width ='40' height='40'> </td> <td><font size='2'>&nbsp;%s&nbsp;</td>  <td><font size='2'>&nbsp;%s&nbsp;</td> <td><font size='2'>&nbsp;%s&nbsp;</td> ", $id_a, $localiza_imagen_a, $ced_alum_a, $nombre_a, $apell_a);
              // echo ('<a href="treino.php?id="' . $id  . '">' .  $localiza_imagen . " Usuario " .  $ced_alum."</a>" ); ?>
    								
                       
    					
    					 <td>
                         
                         <!------------------------------------------------------------------------------------->
                     
        
       <!--- --------------------------------------------------------------------------->
            
                        <!--form action="actualizar.php" method="post" name="actualiza" enctype="multipart/form-data">
    				   
    				   <input name="ced_act" type="hidden" value="<?php echo $ced_alum ?>" />
                       <input name="variable1" type="hidden" value="<?php echo $buscar2; ?>" />
                        <input  style="background:url(images/fondo_input/fondo_input_g.png);width:100px;height:30px ;" type="submit"  name='basic' value='Actualizar' class='basic'/>
                       	</form-->
    				  
           <!--------------=================================================================================------------------->
                      
    	

	
<!--==================================================================================================================-->
    			
                    </td>
                    <td>
                     <!--form action="detalle.php" method="post" name="compra">
 				  
    				    <input name="ced_act" type="hidden" value="<?php echo $ced_alum ?>"/>
                        <input name="variable1" type="hidden" value="<?php echo $buscar2; ?>" />
    				   <input style="background:url(images/fondo_input/fondo_input_g.png);width:100px;height:30px ;" name="detalles" type="submit" value="Detalles" />
    				</form>
                    </td>
                    <td>
                     <form action="elimreg.php" method="post" >
    				    <input name="ced_act" type="hidden" value="<?php echo $ced_alum ?>" />
                       <input name="variable1" type="hidden" value="<?php echo $buscar2; ?>" />
                        <input  style="background:url(images/fondo_input/fondo_input_g.png);width:100px;height:30px ;" type="submit"  name='basic' value='Borrar' class='basic'/>
                       	</form>
    				  
    				</form-->
                    </td>
                    
    				 <?php
                                     if (isset($_SESSION['usuario_valido']))
                                    { 
                                    ?>
    	                                     
    			      
    					  <form action="borrar.php" method="post">
    						    <input name="id" type="hidden" value="<?php echo $id ;?>" />
    						    <input name="variable1" type="hidden" value="<?php echo $instrume_sql ;?>" />
    						    <input style="background:url(images/fondo_input/fondo_input_g.png);width:100px;height:30px ;" name="" value="Borrar" type="submit" />
    				      </form>
                                         <?php 
                                    }?>        
    				
    			  </td>
    			</tr>
    			<p>
    		   <?php } /*fin del while sql*/ 
          }
           
           ?> 
           </div>
           
	      <!---/*---------------fin while fechtarray-----------------------------------------------*/-->
	      <div id="box_admin1" > 
		          <?php 
              	?>
         </div>
	      <!---/*---------------fin while fechtarray-----------------------------------------------*/-->
	      </table>
                      	<!-- Load jQuery, SimpleModal and Basic JS files -->



</body>
</html>