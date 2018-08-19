  

<html>
<head>
<title> Inicial De Sistema</title>


<!------------------------------------------->
<!--------------------------------CSS------------------------------------------->
<!-------------------------------------------------------------------------->
<link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
<!-- Page styles -->
<link type='text/css' href='css/stilo_div.css' rel='stylesheet' media='screen' /> 
<!-- Contact Form CSS files -->
<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />
 <link href="css/estilo.css" rel="stylesheet" type="text/css" />
<!----------------------------------------------------------------------------->

<!------------------------------------------->

<style type="text/css" media="print">
.carta_no_imprimir {
display: none
}
#carta_imprimir {
display: block;
}
.resto {
display: none
}
</style>

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
	      <td colspan="9" align="center" bgcolor="#751b23" id="box1" ><strong >LISTADO</strong>  </td>
	    </tr>
	    <tr bgcolor="#bf8b90" align="center">
    	      <td >ID</td>
    	      <td >foto</td>
    	      <td width="144">Cedula</td>
    	      <td width="150">Nombres</td>
    	      <td>Apellidos</td>
	      <td>Nacionalidad</td>
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
        $buscar2=($_GET["var2"]);
	//$procso=($_GET["proceso"]);
        
       // echo "paso buscar nombre o cedula:".$buscar."<br>";  
         // echo "paso buscar tipo: (".$buscar2.")";
	 // echo "paso proceso: (".$procso.")";
        //echo "paso la busca ".$buscar; $busqueda=mysql_query("SELECT * from viento  WHERE  nombre LIKE '%".$buscar."%' OR tipo_art LIKE '%".$buscar."%' UNION ALL SELECT * from cuerda  WHERE  nombre LIKE '%".$buscar."%' OR tipo_art LIKE '%".$buscar."%' UNION ALL SELECT * from percusion  WHERE  nombre LIKE '%".$buscar."%' OR tipo_art LIKE '%".$buscar."%' UNION ALL SELECT * from electronicos  WHERE  nombre LIKE '%".$buscar."%' OR tipo_art LIKE '%".$buscar."%' "); 
    	//$busqueda=mysql_query("SELECT * from  tab3_inscrip, tab2_inscrip WHERE ced_doc LIKE '%".$buscar."%' OR Nomb_doc LIKE '%".$buscar."%' OR nomb_alumn LIKE '%".$buscar."%' OR ced_represe_alumn LIKE '%".$buscar."%'");
        if ($buscar2=="doc"){
            //echo "paso buscar tipo: (".$buscar2.")";
            $busqueda=mysql_query("SELECT * FROM tab3_inscrip WHERE  nomb LIKE '%".$buscar."%' or ced LIKE '%".$buscar."%'  ");//  UNION ALL SELECT * FROM tab3_inscrip WHERE ced LIKE '%".$buscar."%' OR nomb LIKE '%".$buscar."%' ");
            }
        if ($buscar2=="alumn_ve"){
	   $nacionalidad="venezolana";
                //echo "paso buscar tipo: (".$buscar2.")";
                $busqueda=mysql_query("SELECT * FROM tab2_inscrip WHERE  (nomb_a LIKE '%".$buscar."%' or ced_a LIKE '%".$buscar."%') and nac_alumn ='" .$nacionalidad. "' ");
            }
          if ($buscar2=="alumn_ch"){
              //echo "paso buscar tipo: (".$buscar2.")";
              $nacionalidad="chino";
              $busqueda=mysql_query("SELECT * FROM tab2_inscrip WHERE   (nomb_a LIKE '%".$buscar."%' or ced_a LIKE '%".$buscar."%') and nac_alumn ='" .$nacionalidad. "'   ");
            }
	    if ($buscar2=="alumn"){
	        //echo "paso buscar tipo: (".$buscar2.")";
                $busqueda=mysql_query("SELECT * FROM tab2_inscrip WHERE  nomb_a LIKE '%".$buscar."%' or ced_a LIKE '%".$buscar."%'  ");
            }
         if($busqueda ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
        
                 } /*fin del if error sql*/ 
               // $res = mysql_query($busqueda,$link) or die("Error en: $busqueda: " . mysql_error()); 
           while($filas=mysql_fetch_array($busqueda))
           {
           
           if(isset($filas['apell_alumn'])) 
               {
                    $id=$filas['id_alumn'];
            		$localiza_imagen=$filas['foto_alumno'];
		      $nombre=$filas['nomb_a'];
            		$ced_alum=$filas['ced_a'];
            		$apell=$filas['apell_alumn'];
			$nacionalidad=$filas['nac_alumn'];
            		
        		}
                if(isset($filas['Apell_doc']))
                {
                    $id=$filas['ide_doc'];
            		$localiza_imagen=$filas['foto_doc'];
		      $nombre=$filas['nomb'];
            		$ced_alum=$filas['ced'];
            		$apell=$filas['Apell_doc'];
			$nacionalidad=$filas['nacionalid_doc'];
            	}	
    		
                 ?>
    	      
    	    
    	  
    		    <tr>
               <?php 
                printf("<td><font size='2'>&nbsp;%s</td> <td><font size='2'> <img src='%s' width ='40' height='40'> </td> <td><font size='2'>&nbsp;%s&nbsp;</td>  <td><font size='2'>&nbsp;%s&nbsp;</td> <td><font size='2'>&nbsp;%s&nbsp;</td> <td><font size='2'>&nbsp;%s&nbsp;</td> ", $id, $localiza_imagen, $ced_alum, $nombre, $apell, $nacionalidad);
              // echo ('<a href="treino.php?id="' . $id  . '">' .  $localiza_imagen . " Usuario " .  $ced_alum."</a>" ); ?>
    								
                       
    					
    					 
                    	
                  
                    
    				 <?php
                                     if (isset($_SESSION['usuario_valido']))
                                    { 
                                    ?>
    	                                     
    			      
    					  <form action="borrar.php" method="post">
						       <input name="id" type="hidden" value="<?php echo $id ;?>" />
						       
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
           <tr><td>
           <div  id="dato"><input type="button" name="Submit2" value="[Imprimir]"  onclick="javascript:window.print(self);" onMouseOut="MM_swapImgRestore()"></div>
           </td><td>
	   <a href="buscar.php?var2=<?php echo $localiza_x ?>&var1=<?php echo $localiza_x2 ?>&proceso=<?php echo $proceso ?>" > <input type="button" style="background:url(images/fondo_input/fondo_input_g.png));width:150px; height:30px ;" value="[Volver a Buscar]" ></a></td></tr>
	      <!---/*---------------fin while fechtarray-----------------------------------------------*/-->
	      <div id="box_admin1" > 
		          
         </div>
	      <!---/*---------------fin while fechtarray-----------------------------------------------*/-->
	      </table>
                      	<!-- Load jQuery, SimpleModal and Basic JS files -->



</body>
</html>