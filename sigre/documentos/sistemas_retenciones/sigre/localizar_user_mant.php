<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>
<meta charset="utf-8">
<title>Actualizaci&oacute;n Usuario</title>
	<link href="jquery-ui.css" rel="stylesheet">
	<style>
	
	
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	

	
	</style>
<script>
function local_iduser()
			{
				var var_local=(document.getElementById("local_iduser").value);
				
                (document.getElementById("resultado").value = var_local );
				
				
			}</script>
<link rel="stylesheet" type="text/css" href="css/style_audit.css" >

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
	     <tr>
	      <td colspan="9" align="center" bgcolor="#3151B2" class="box1" style="color: white;"><strong >LISTADO</strong>  </td>
	    </tr>
	    <tr bgcolor="#bf8b90" style='color:#fff;font:font-family:bold'align="center">
    	      <td  >No.Id</td>
            <td >Alias</td>
    	      <td width="144">Nombre</td>
    	     <!--td >fecha</td-->
        </tr>      
             <?php 
     if (isset($_POST["var1"]))
        {      
        
        include("conexion/Conexion1.php");
        $link=Conectarse(); 
        $buscar=($_POST["var1"]);
      
	      $busqueda=mysql_query("SELECT * FROM user_audit  WHERE nomb_user LIKE '%".$buscar."%' or apel1_user LIKE '%".$buscar."%' or alias_user LIKE '%".$buscar."%' or perfil_user LIKE '%".$buscar."%'");
		 
		
								/*___________________________________________________________________________*/  
      
         if($busqueda ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
        
                 } /*fin del if error sql*/ 
               // $res = mysql_query($busqueda,$link) or die("Error en: $busqueda: " . mysql_error()); 
           while($filas=mysql_fetch_array($busqueda))
           {
             if(isset($filas['alias_user'])) 
               {
                                $id=$filas['cod_emplea_user'];
                                $alias=$filas['alias_user'];
                                $descrip1=$filas['nomb_user'];
                                
                                //$fecha1=$filas['fe_fecha'];
                  }
        		
            	   				
    		         ?>
    	       <tr>
               <?php 
                printf("<td><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td>  ", $id, $alias, $descrip1);
                ?> <input type="hidden" id="local_iduser" value="<?php echo $id; ?>"><?php
                      //echo ('<a href="#local_iduser1?id="local_iduser' . $id  . '">'</a>'" );
              // echo ('<a href="treino.php?id="' . $id  . '">' .  $localiza_imagen . " Usuario " .  $ced_alum."</a>" ); ?>
    						     
    					
    					 <td>
      

	  <!---------------=================================================================================-------------------->         
       <p><a href="#" id="dialog-link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Actualizar</a></p> 
       

	 			
    	
            </td>
           
            <td>
           
                    
    				
    			  </td>
    			</tr>
    			<p>
    		   <?php } /*fin del while sql*/ 
          }
           
           ?> 
          
      
	      </table>
       
                  
	<!-- ui-dialog -->
<div id="dialog" title="Confirmar Actualizar">
	<p> <?php 
    $id_user="<p id="local_iduser1">;
          $link12=Conectarse(); 
          $sql00="SELECT * FROM tbl_factprov ";
          $resultado_sql00=mysql_query($sql00,$link12);
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
                                               
?>       </p>
</div>
 



<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.js"></script>
<script>
$( "#dialog" ).dialog({
	autoOpen: false,
	width: 700, height: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>
</body>
</html>
