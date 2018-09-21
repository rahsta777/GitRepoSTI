<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>
<title>Actualizaci&oacute;n</title>
<script>
function removeProv(elementoprov){
        var parametros15 = {
                "var15" : elementoprov /*,
                "valorCaja2" : valorCaja2*/
        };
        $.ajax({
                data:  parametros15,
                url:   'elimreg_provee.php',
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
</head>
<body >
 
	    <?php if (isset($_GET["proceso"])){ ?>
	   <div style="left: auto;" >   
		      <div>
			<div class="center" id="imagen"><!--<img src="images/Top.jpg" height="100" width="900">--> </div>
		      </div>
	   </div>
        <?php } ?>
	   <table width="700" border="0" align="center" class="contacto_listar_id">
	     
	     
                    
	    <div id="carta_imprimir">
	    <tr>
	      <td colspan="9" align="center" bgcolor="#3151B2" class="box1" ><strong >LISTADO</strong>  </td>
	    </tr>
	    <tr bgcolor="#bf8b90" style='color:#fff;font:font-family:bold'align="center">
    	      <td  >No.Id</td>
            <td >Nombre Razon Social</td>
    	      <td width="144">Representante</td>
               <td width="144">Actualizar</td>
               <td width="144">Borrar</td>
    	     <!--td >fecha</td-->
        </tr>      
             <?php 
     if (isset($_POST["var12"]))
        {      
        include("conexion/Conexion1.php");
        $linkprov=Conectarse(); 
        $buscar_prov=($_POST["var12"]);
        
       //$procso=($_GET["proceso"]);
        
     // echo "paso buscar el campo id:".$buscar."<br>";  
       /*echo "paso buscar tipo: (".$buscar2.")";*/
	 // echo "paso proceso: (".$procso.")";
        //echo "paso la busca ".$buscar; $busqueda=mysql_query("SELECT * from viento  WHERE  nombre LIKE '%".$buscar."%' OR tipo_art LIKE '%".$buscar."%' UNION ALL SELECT * from cuerda  WHERE  nombre LIKE '%".$buscar."%' OR tipo_art LIKE '%".$buscar."%' UNION ALL SELECT * from percusion  WHERE  nombre LIKE '%".$buscar."%' OR tipo_art LIKE '%".$buscar."%' UNION ALL SELECT * from electronicos  WHERE  nombre LIKE '%".$buscar."%' OR tipo_art LIKE '%".$buscar."%' "); 
    	//$busqueda=mysql_query("SELECT * from  tab3_inscrip, tab2_inscrip WHERE ced_doc LIKE '%".$buscar."%' OR Nomb_doc LIKE '%".$buscar."%' OR nomb_alumn LIKE '%".$buscar."%' OR ced_represe_alumn LIKE '%".$buscar."%'");
       
/*if (mysql_num_rows(mysql_query("SELECT num_detalle FROM d001_programa_aud WHERE num_detalle	='" . $_GET["var1"] . "'", $link))==true) {*/
            //echo "paso buscar tipo: (".$buscar2.")";

        /* UNION ALL SELECT * FROM  j005t_planes WHERE num_planes LIKE '%".$buscar."%' OR descrp_planes LIKE '%".$buscar."%' ");*/
         /*____________________________________________________________________________________*/
       
	      $busquedaprv=mysql_query("SELECT * FROM tbl_prov  WHERE razon_prov LIKE '%".$buscar_prov."%' or repres_prov LIKE '%".$buscar_prov."%' or prov_rif LIKE '%".$buscar_prov."%'");
		 
		
								/*___________________________________________________________________________*/  
      
         if($busquedaprv ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
        
                 } /*fin del if error sql*/ 
               // $res = mysql_query($busqueda,$link) or die("Error en: $busqueda: " . mysql_error()); 
           while($filas_prv=mysql_fetch_array($busquedaprv))
           {
             if(isset($filas_prv['prov_rif'])) 
               {
                                $id_prov=$filas_prv['prov_rif'];
                                $nomb_prov=$filas_prv['razon_prov'];
                                $descrip1_prov=$filas_prv['repres_prov'];
                           
                                //$fecha1=$filas['fe_fecha'];
                  }
        		
            	   				
    		         ?>
    	       <tr>
               <?php 
                printf("<td><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td>  ", $id_prov, $nomb_prov, $descrip1_prov);

                      
               //echo ('<a href="treino.php?id="' . $id  . '">' .  $localiza_imagen . " Usuario " .  $ced_alum."</a>" ); ?>
    						     
    					
    					 
       <!---  ------------=================================================================================-------------------->         
        
      <td> <input type="hidden" id="idprov"  value=" <?php  echo $id_prov ; ?>"  /><a  href="javascript:;" style="background:url(images/fondo_input/fondo_input.png);width:550px;height:200px ;margin:10px;" onClick="newWin()" >Actualizar</a>
    			<!--==================================================================================================================-->
    			
            
            <td><img style='cursor:pointer;width:30px;height: 30px;' title="Generar Comprobante" onClick="removeProv('<?php echo $id_prov ; ?>')" src='images/error.gif'/>
            
           <!--td><a ><input type="button"  name="elim_user" id="elim_prov" size="25" value="<?php echo $id;?>"  style="background:url(images/fondo_input/fondo_input.png);width:150px;height:30px ;" onclick="removeProv($('#elim_prov').val());return false;"> </a-->
    				
                    
    				
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
