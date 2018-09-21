<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>


</head>
<!-- Page styles <!-- simplemodal Form CSS files -->
<link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
<!-- Contact Form CSS files -->
<link type='text/css' href='css/basic_query_modal.css' rel='stylesheet' media='screen' />

<!-- Load jQuery, SimpleModal and Basic JS files -->

<body >
 	    <?php if (isset($_GET["proceso"])){ ?>
	   
        <?php } ?>
	   <table width="700" border="0" align="center" class="contacto_listar_id">
	    <tr>
	      <td colspan="9" align="center" bgcolor="#3151B2" class="box1" ><strong >LISTADO</strong>  </td>
	    </tr>
	    <tr bgcolor="#bf8b90" style='color:#fff;font:font-family:bold'align="center">
    	      <td  >No.Id</td>
            <td >Nombre Razon Social</td>
    	      <td width="144">Representante</td>
    	     <!--td >fecha</td-->
        </tr>      
             <?php 
     if (isset($_GET["var13"]))
        {      
        
        include("conexion/Conexion1.php");
        $link=Conectarse(); 
        $buscar=($_GET["var13"]);
        
      
	      $busqueda=mysql_query("SELECT * FROM tbl_prov  WHERE razon_prov LIKE '%".$buscar."%' or repres_prov LIKE '%".$buscar."%' or prov_rif LIKE '%".$buscar."%'");
		 
		
								/*___________________________________________________________________________*/  
      
         if($busqueda ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
        
                 } /*fin del if error sql*/ 
               // $res = mysql_query($busqueda,$link) or die("Error en: $busqueda: " . mysql_error()); 
           while($filas=mysql_fetch_array($busqueda))
           {
             if(isset($filas['prov_rif'])) 
               {
                                $id=$filas['prov_rif'];
                                $nomb_prov=$filas['razon_prov'];
                                $descrip1=$filas['repres_prov'];
                                
                                //$fecha1=$filas['fe_fecha'];
                  }
        		
            	   				
    		         ?>
    	       <tr>
               <?php 
                printf("<td><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td>  ", $id, $nomb_prov, $descrip1);

                      
              // echo ('<a href="treino.php?id="' . $id  . '">' .  $localiza_imagen . " Usuario " .  $ced_alum."</a>" ); ?>
    						     
    					
    					 <td>
    	<div id='content'>
		<div id='basic-modal'>
                            <input  style="background:url(images/fondo_input/fondo_input_g.png);width:100px;height:30px ;" type="button"  name='basic' value='Facturas' class='basic'/>
                         </div> 
	</div><!--fin content-->

     <!---------------------------- modal content -------------------------------->
    		<div id="basic-modal-content">
    			 <?php
          
include("conexion/Conexion1.php");
        $link=Conectarse(); 
            $sql00="SELECT * FROM tbl_factprov ";
      $resultado_sql00=mysql_query($sql00,$link);
               $nfilas=mysql_num_rows($resultado_sql00);
               print ("<TABLE A align='center' cellspacing='0'cellpadding=7 width='400px' border='0' style='font-size:12px'>\n");
               print ("<TR  class='contacto_v'>\n");
               print ("<TH >Id prov</TH>\n");
               print ("<TH colspan='3'>Id_prove</TH>\n");
               print ("</TR>\n");
               for ($i=0; $i<$nfilas; $i++)
                        {
                        $row00=mysql_fetch_array($resultado_sql00);
                  printf("<tr bgcolor='#FFFFFF'>  <td><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td></tr>",$row00['idprov'], $row00['idfact']);
                  
                        
                                     }
                                                 print ("</TABLE>");  
                                               
?>       
     
                    
       
		</div><!---basic-modal-content ------>

		<!-- preload the images -->
		<div style='display:none'>
			<img src='images/x.png' alt='' />
		</div>
    		
    			
            </td>
           
           
                    
    				
    			  
    			</tr>
    			<p>
    		   <?php } /*fin del while sql*/ 
          }
           
           ?> 
         
           <td>
           
           </td><td>
	   <!--a href="buscar.php?var2=<?php echo $localiza_x ?>&var1=<?php echo $localiza_x2 ?>&proceso=<?php echo $proceso ?>" > <input type="button" style="background:url(images/fondo_input/fondo_input_g.png));width:150px; height:30px ;" value="[Volver a Buscar]" ></a></td></tr-->
	      <!---/*---------------fin while fechtarray-----------------------------------------------*/-->
	      
	      </table>
                      


</body>
</html>
