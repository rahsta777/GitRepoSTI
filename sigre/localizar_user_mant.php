<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>
<meta charset="utf-8">
<title>Actualizaci&oacute;n Usuario</title>

<script>
function removeUser(elementouser){
        var parametros12 = {
                "var12" : elementouser /*,
                "valorCaja2" : valorCaja2*/
        };
        $.ajax({
                data:  parametros12,
                url:   'elimreg_user.php',
                type:  'post',
                beforeSend: function () {
                        $("#msn_eliminado").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#msn_eliminado").html(response);
                }
        });
}
</script>

<script language="JavaScript">
function todosuno(valor){
	//obtenemos cuantos campos son en total
    var valo_checa=(document.getElementById(valor).value)
   alert("paso el ajaxJQ el dato es: "+valo_checa)
	cuantos   = eval(ejemplo.contadorx.value);
	//Recibimos el valor si es igual a 1 entonces no se ha checkeado todos y lo chekeamos
	if (document.getElementById(valor).value=="1")
   {
	   alert("paso el ajaxJQ valor 1 es: "+valor)
		for (var x = 1; x <= cuantos; x++) {
			campo = "ID"+x;
			document.getElementById(campo).checked=true;
			document.getElementById("todos").value=0;
		}
	}
	//Si recibimos el valor 0 entonces se ha checkeado a todos y lo desactivamos
	if(valor==0){
	   alert("paso el ajaxJQ valor 0 es: "+valor)
		for (var x = 1; x <= cuantos; x++) {
			campo = "ID"+x;
			document.getElementById(campo).checked=false;
			document.getElementById("todos").value=1;
		}
	}
}

</script>

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
        <form name="ejemplo" id="ejemplo" method="post" >
	   <table width="700" border="0" align="center"  class="table table-hover">
	     <tr>
	      <td colspan="9" align="center" bgcolor="#3151B2" class="box1" style="color: white;"><strong >LISTADO</strong>  </td>
	    </tr>
        
	    <tr bgcolor="#bf8b90" style='color:#fff;font:font-family:bold'align="center">
         
    	      <td  >No.Id</td>
            <td >Alias</td>
    	      <td width="144">Nombre</td>
              <td width="144">Eliminar</td>
              <td width="144">Actualizar</td>
    	     <!--td >fecha</td-->
        </tr>      
             <?php 
     if (isset($_POST["var1"]))
        {      
            ?>
        <?php
        include("conexion/Conexion1.php");
        $link=Conectarse(); 
        $buscar_user=($_POST["var1"]);
      	$i	= 0;
	      $busqueda=mysql_query("SELECT * FROM user_audit  WHERE nomb_user LIKE '%".$buscar_user."%' or apel1_user LIKE '%".$buscar_user."%' or alias_user LIKE '%".$buscar_user."%' or perfil_user LIKE '%".$buscar_user."%'");
		 
		
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
               $i	= $i + 1;
              $id1=$id.$i;
              
               //echo "id es".$id1;
                echo '<td>'.$id.'</td>';
               //echo '<td><input id="ide1'.$i.'" name="ide1'.$i.'" type="checkbox" value="'.$id.'"></td>';
               echo '<td>'.$alias.'</td>';
               echo '<td>'.$descrip1.'</td>';
              
               /*echo '<td><a href="javascript:;" class="deleteuser" onclick="removeUser(<?php echo $id;?>);">';*/
              ?> <td><input type="button"  name="elim_user" id="elim_user" size="25" value="<?php echo $id;?>"  style="background:url(images/fondo_input/fondo_input.png);width:150px;height:30px ;" onclick="removeUser($('#elim_user').val());return false;">
              <td><img style='cursor:pointer;width:40px;height: 40px;' title="Generar Comprobante" onClick="win_Act_user('<?php echo  $id; ?>')" src='images/Modify.png'/>
               <?php 
               /* echo ' <td><p><a href="#" id="dialog-link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Actualizar</a></p></td>';
                echo '<td><div id="msn_eliminado"></div>';*/
               echo '</tr>';
                                //$fecha1=$filas['fe_fecha'];
                  }
        		
            	   				
    		         ?>
    	       <tr>
               <?php 
                /*printf("<td><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td>  ", $id, $alias, $descrip1);*/
                ?> 
                    
    			
    					
    					 
      

	  <!---------------=================================================================================-------------------->         
       
       

	 			
    	
            
           
            <td>
           
                    
    				
    			  </td>
                   </tr>
    			<p>
    		   <?php } /*fin del while sql*/ 
               ?>	 <!--button onclick="elimin_user();" tabindex="7">Eliminar 
                         <br style="clear:both;"--><?php 
               
          }
           
           ?> 
          
      
	      </table>
          </form>
        
            				 
                  
	<!-- ui-dialog -->
<div id="dialog" title="Confirmar Actualizar">
	<p> <?php /*
   
          $link12=Conectarse(); 
          $sql00="SELECT * FROM user_audit WHERE cod_emplea_user='".$id."' ";
          $resultado_sql00=mysql_query($sql00,$link12);
               $nfilas=mysql_num_rows($resultado_sql00);
               print ("<TABLE A align='center' cellspacing='0'cellpadding=7 width='400px' border='0' style='font-size:12px'>\n");
               print ("<TR  class='contacto_v'>\n");
               print ("<TH >Id usuario</TH>\n");
               print ("<TH colspan='3'>Nombre </TH>\n");
                print ("<TH colspan='3'>Alias</TH>\n");
               print ("</TR>\n");
               for ($j=0; $j<$nfilas; $j++)
                        {
                        $row00=mysql_fetch_array($resultado_sql00);
                  printf("<tr  bgcolor='#ffffff>  <td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td></tr>",$row00['cod_emplea_user'], $row00['nomb_user']);
                  
                        
                                     }
                                                 print ("</TABLE>");  ¨*/
                                               
?>      
</div>
 <input type="hidden" value="<?php echo $i; ?>" name="contadorx"/> </p>



<!--script src="external/jquery/jquery.js"></script>
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
</script-->
</body>
</html>
