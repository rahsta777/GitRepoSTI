<html>
<head>
<title>Actualizaci&oacute;n</title>
</head>
<body >
 
	    <?php if (isset($_GET["proceso"])){ ?>
	   <div style="left: auto;" >   
		      <div>
			<div class="center" id="imagen"><!--<img src="mages/Top.jpg" height="100" width="900">--> </div>
		      </div>
	   </div>
        <?php } ?>
	   <table width="700" border="0" align="center" class="contacto_listar_id">
	     
	     
                    
	    <div id="carta_imprimir">
	    <tr>
	      <td colspan="9" align="center" bgcolor="#3151B2" class="box1" ><strong >LISTADO</strong>  </td>
	    </tr>
	    <tr bgcolor="#bf8b90" style='color:#fff;font:font-family:bold'align="center">
    	      <td >No.Id</td>
    	      <td width="144">Descripcion</td>
    	     <!--td >fecha</td-->
        </tr>      
             <?php 
     if (isset($_GET["var1"]))
        {      
        include("conexion/Conexion1.php");
				$link=Conectarse(); 
        $buscar=($_GET["var1"]);
        $buscar2=($_GET["var2"]);
       //$procso=($_GET["proceso"]);
        
      /* echo "paso buscar el campo id:".$buscar."<br>";  
       echo "paso buscar tipo: (".$buscar2.")";*/
	 // echo "paso proceso: (".$procso.")";
        //echo "paso la busca ".$buscar; $busqueda=mysql_query("SELECT * from viento  WHERE  nombre LIKE '%".$buscar."%' OR tipo_art LIKE '%".$buscar."%' UNION ALL SELECT * from cuerda  WHERE  nombre LIKE '%".$buscar."%' OR tipo_art LIKE '%".$buscar."%' UNION ALL SELECT * from percusion  WHERE  nombre LIKE '%".$buscar."%' OR tipo_art LIKE '%".$buscar."%' UNION ALL SELECT * from electronicos  WHERE  nombre LIKE '%".$buscar."%' OR tipo_art LIKE '%".$buscar."%' "); 
    	//$busqueda=mysql_query("SELECT * from  tab3_inscrip, tab2_inscrip WHERE ced_doc LIKE '%".$buscar."%' OR Nomb_doc LIKE '%".$buscar."%' OR nomb_alumn LIKE '%".$buscar."%' OR ced_represe_alumn LIKE '%".$buscar."%'");
       
/*if (mysql_num_rows(mysql_query("SELECT num_detalle FROM d001_programa_aud WHERE num_detalle	='" . $_GET["var1"] . "'", $link))==true) {*/
            //echo "paso buscar tipo: (".$buscar2.")";

        /* UNION ALL SELECT * FROM  j005t_planes WHERE num_planes LIKE '%".$buscar."%' OR descrp_planes LIKE '%".$buscar."%' ");*/
         /*____________________________________________________________________________________*/
       if ($buscar2=="programacion"){
	      $busqueda=mysql_query("SELECT * FROM d001_programa_aud WHERE num_detalle LIKE '%".$buscar."%' or descrp_program  LIKE '%".$buscar."%'");
		  }
		if ($buscar2=="auditoria"){
	         //echo "paso buscar tipo: (".$buscar2.")";
	         $busqueda=mysql_query("SELECT * FROM d003t_detalle_aud WHERE num_auditoria1 LIKE '%".$buscar."%' or tex_Descrp  LIKE '%".$buscar."%'");
	      }
	    if ($buscar2=="plan"){
	       //echo "paso buscar tipo: (".$buscar2.")";
	    $busqueda=mysql_query("SELECT * FROM j005t_planes WHERE num_planes LIKE '%".$buscar."%' or descrp_planes LIKE '%".$buscar."%' ");
	      }
		if ($buscar2=="noconform"){
		  //echo "paso buscar tipo: (".$buscar2.")";
	        $busqueda=mysql_query("SELECT * FROM  d004t_nocomformidad WHERE num_audit LIKE '%".$buscar."%' or text_descrip LIKE '%".$buscar."%' ");
												      }
								/*___________________________________________________________________________*/  
      
         if($busqueda ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
        
                 } /*fin del if error sql*/ 
               // $res = mysql_query($busqueda,$link) or die("Error en: $busqueda: " . mysql_error()); 
           while($filas=mysql_fetch_array($busqueda))
           {
         if(isset($filas['num_detalle'])) 
               {
																$id=$filas['num_detalle'];
																$descrip1=$filas['descrp_program'];
																
																//$fecha1=$filas['fe_fecha'];
            			}
          if(isset($filas['num_planes']))
                  {
																		$id=$filas['num_planes'];
																		$descrip1=$filas['descrp_planes'];
																		//$fecha1=$filas['fe_fecha_planes'];
																				
            	     }	
                     
        if(isset($filas['num_audit']))
                  {
																			$id=$filas['num_audit'];
																			$descrip1=$filas['text_descrip'];
																			//$fecha1=$filas['fe_fecha_planes'];
																			
            	     }	
        if(isset($filas['num_auditoria1']))
                  {
																		$id=$filas['num_auditoria1'];
																		$descrip1=$filas['tex_Descrp'];
																		//$fecha1=$filas['fe_fecha_planes'];
																	
            	     }				
    		         ?>
    	       <tr>
               <?php 
                printf("<td><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td>   ", $id, $descrip1);
              // echo ('<a href="treino.php?id="' . $id  . '">' .  $localiza_imagen . " Usuario " .  $ced_alum."</a>" ); ?>
    						     
    					
    					 <td>
       <!---------------=================================================================================-------------------->         
       <form action="act_detalle.php" method="post" >
    				 <input name="id_local" type="hidden" value="<?php echo $id;?>" />
									<input name="variable1" type="hidden" value="<?php echo $buscar2;?>" />
									<input name="variable2" type="hidden" value="<?php echo $buscar;?>" />
         <input  style="background:url(images/fondo_input/fondo_input_g.png);width:100px;height:30px ;" type="submit"  name='basic' value='Actualizar' class='basic'/>
                       	</form>
    			<!--==================================================================================================================-->
    			
            </td>
            <td>
            <form action="detalle.php" method="post" name="proceso">
							<input name="id_local" type="hidden" value="<?php echo  $id; ?>"/>
							<input name="variable1" type="hidden" value="<?php echo $buscar2; ?>" />
							<input name="variable2" type="hidden" value="<?php echo $buscar; ?>" />
							<input name="proceso" type="hidden" value="proceso" />
    				   <input style="background:url(images/fondo_input/fondo_input_g.png);width:100px;height:30px ;" name="detalles" type="submit" value="Detalles" />
    				</form>
            </td>
            <td>
            <form action="elimreg.php" method="post" >
    				  <input name="id_local" type="hidden" value="<?php echo  $id; ?>" />
							<input name="variable1" type="hidden" value="<?php echo $buscar2; ?>" />
							<input name="variable2" type="hidden" value="<?php echo $buscar; ?>" />
              <input  style="background:url(images/fondo_input/fondo_input_g.png);width:100px;height:30px ;" type="submit"  name='basic' value='Borrar' class='basic'/>
              </form>
    				</td>
                    
    				
    			  </td>
    			</tr>
    			<p>
    		   <?php } /*fin del while sql*/ 
          }
           
           ?> 
           </div>
           <tr><td>
           
           </td><td>
	   <!--a href="buscar.php?var2=<?php echo $localiza_x ?>&var1=<?php echo $localiza_x2 ?>&proceso=<?php echo $proceso ?>" > <input type="button" style="background:url(images/fondo_input/fondo_input_g.png));width:150px; height:30px ;" value="[Volver a Buscar]" ></a></td></tr-->
	      <!---/*---------------fin while fechtarray-----------------------------------------------*/-->
	      <div id="box_admin1" > 
		          
         </div>
	      <!---/*---------------fin while fechtarray-----------------------------------------------*/-->
	      </table>
                      	<!-- Load jQuery, SimpleModal and Basic JS files -->



</body>
</html>
