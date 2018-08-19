  
<!DOCTYPE html>
<html>
<head>
<title> Inicial De Sistema</title>


<!------------------------------------------->
<!--------------------------------CSS------------------------------------------->


<!------------------------------------------->



</head>
<body >
  
       
	   <table width="800" border="1" align="center" class="contacto_listar_id">
	     
	     
                    
	    <div id="carta_imprimir">
	    <tr>
	      <td colspan="8" align="center" bgcolor="#751b23" id="box1" ><strong >LISTADO</strong>  </td>
	    </tr>
	    <tr bgcolor="#bf8b90" align="center">
    	      <td width="6">ID</td>
    	      <td width="60">foto</td>
    	      <td width="60">Cedula</td>
    	      <td width="100">Nombres</td>
    	      <td width="100">Apellidos</td>
    	      <td  colspan="3">Grados</td>
    	       
        </tr>      
             <?php 
     if (isset($_GET["var1"]))
        {      
       include("Conexion1.php"); 
        $link=Conectarse(); 
        $buscar=($_GET["var1"]);
        
            $busqueda=mysql_query("SELECT * FROM tab_plan WHERE  id_docent LIKE '%".$buscar."%'   ");//  UNION ALL SELECT * FROM tab3_inscrip WHERE ced LIKE '%".$buscar."%' OR nomb LIKE '%".$buscar."%' ");
         
         if($busqueda ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
        
                 } /*fin del if error sql*/ 
               // $res = mysql_query($busqueda,$link) or die("Error en: $busqueda: " . mysql_error()); 
           while($filos=mysql_fetch_array($busqueda))
           {
           $cont1=$filos['contenido1'];
           $cont2=$filos['contenido2'];
           $cont3=$filos['contenido3'];
           if(isset($filos['id_docent'])) 
               {
                 
                    $cid=$filos['id_docent'];
            		
                    $busqueda2=mysql_query("SELECT * FROM tab3_inscrip WHERE  ced = '".$cid."'   ");
                    while($filas=mysql_fetch_array($busqueda2))
                    {
                    $id=$filas['ide_doc'];
                    $localiza_imagen=$filas['foto_doc'];
                    $nombre=$filas['nomb'];
            		$ced_a=$filas['ced'];
            		$apell=$filas['Apell_doc'];
            	
                 ?>
    	      
   
    	  
    		    <tr>
               <?php 
                //echo ('<a href="treino.php?id="' . $id  . '">' .  $localiza_imagen . " Usuario " .  $ced_alum."</a>" ); 
                printf("<td><font size='2'>&nbsp;%s</td> <td><font size='2'> <img src='%s' width ='40' height='40'> </td> <td><font size='2'>&nbsp;%s&nbsp;</td>  <td><font size='2'>&nbsp;%s&nbsp;</td> <td><font size='2'>&nbsp;%s&nbsp;</td> ", $id, $localiza_imagen, $ced_a, $nombre, $apell);
                ?>

               <td><a href="imprimir.php?id1=<?php echo $id;?>&con1=<?php echo $cont1 ;?> "><img  width ="50" height="50"  src="<?php echo $cont1 ?>"></a></TD> <?php
               //echo ('<td> <a href="imprimir.php?id1="'.  $id   .'"> <img src=" '.  $cont1 . '" width ="50" height="50"></a></td>' );
               ?>
               <td><a href="imprimir.php?id1=<?php echo $id;?>&con1=<?php echo $cont2 ;?> "><img  width ="50" height="50"  src="<?php echo $cont2 ?>"></a></TD> <?php 
               //echo ('<td> <a href="imprimir.php?id1="' . $id  . '"?id2="' . $cont2  . '"> <img src=" '. $cont2  . '" width ="50" height="50"></a></td>' ); ?>
               <td><a href="imprimir.php?id1=<?php echo $id;?>&con1=<?php echo $cont3 ;?> "><img  width ="50" height="50"  src="<?php echo $cont3 ?>"></a></TD> <?php
               //echo ('<td> <a href="imprimir.php?id="' . $id  . '"> <img src=" '.  $cont3 . '" width ="50" height="50"></a></td>' ); 
              	//echo "<a href='galeriac.php?num=".($nro_pagina+1)."&variable1=".($instrumento)."'>Siguiente</a> ";
        		     }
                }
               ?>
    								
                       
    					
    				
                    
    				 <?php
                                     if (isset($_SESSION['usuario_valido']))
                                    { 
                                    ?>
    	                                     
    			      
    					  
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