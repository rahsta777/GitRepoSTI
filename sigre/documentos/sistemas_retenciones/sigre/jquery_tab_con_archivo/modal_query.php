<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>


<link rel="stylesheet" href="../css/global.css" type="text/css" media="all" />
<!-- Contact Form CSS files -->
<link type='text/css' href='../css/basic_query_modal.css' rel='stylesheet' media='screen' />

<!-- Page styles -->
<link rel="stylesheet" type="text/css" href="css/style_audit.css" >



</head>
<body>


 


<!---------------------------- modal input -------------------------------->
 

  
	<div id='content'>
		<div id='basic-modal'>
                            <input  style="background:url(images/fondo_input/fondo_input_g.png);width:100px;height:30px ;" type="button"  name='basic' value='Facturas' class='basic'/>
                         </div> 
	</div><!--fin content-->
    

<!---------------------------- modal  input------------------------------->


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
	
	

<!-- Load jQuery, SimpleModal and Basic JS files -->
<script type='text/javascript' src='../js/jquery.js'></script>
<script type='text/javascript' src='../js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='../js/basic.js'></script>

</body>
</html>
