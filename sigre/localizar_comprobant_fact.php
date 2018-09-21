<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>
<!--link href="jquery-ui.css" rel="stylesheet"-->


</head>


<body >
 	    
	   <table width="950px" border="1" align="center" class="contacto_listar_id">
	    <tr>
	      <td colspan="9" align="center" bgcolor="#ccc" class="box1" style='color:#0033ff;font:font-family:bold' ><strong >Informacion de Facturas Procesadas</strong>  </td>
	    </tr>
	    <tr bgcolor="#bf8b90" style='color:#fff;font:font-family:bold'align="center">
    	      <td  >No.Id</td>
            <td style='width:145px;'>Nombre Razon Social</td>
    	      <td style='width:125px;'>Representante</td>
              <td width="124">Fecha</td>
    	     <td >Factura</td>
             <!--td >Descuento</td-->
             <td >Importe Bruto</td>
             <td >Generar   Comprob.</td>
             <td >Aviso de Pago</td>
        </tr>      
             <?php 
              $imporet1=0;
              $porce1=0;
              $deducible=0;
              $buscar_comp=""; 
              $id="";
              $id_provfact="";
              $fact="";
              $contfilas=0;
             
     if (isset($_POST["var13"]))
        {      
        
        include("conexion/Conexion1.php");
        $link=Conectarse(); 
        $buscar_comp=($_POST["var13"]);
        echo $buscar_comp;
      
	      $busqueda=mysql_query("SELECT * FROM tbl_prov  WHERE razon_prov LIKE '%".$buscar_comp."%' or repres_prov LIKE '%".$buscar_comp."%' or prov_rif LIKE '%".$buscar_comp."%' " );
		 
        
         if($busqueda ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
        
                 } /*fin del if error sql*/ 
               // $res = mysql_query($busqueda,$link) or die("Error en: $busqueda: " . mysql_error()); 
               $id_pasaprov="";
                $id_pasafact="";
                 
           while($filas=mysql_fetch_array($busqueda))
           {
            
             if(isset($filas['prov_rif'])) 
               {
                                $id=$filas['prov_rif'];
                                $nomb_prov=$filas['razon_prov'];
                                $represent=$filas['repres_prov'];
                  }
        		$busqueda2 =mysql_query("SELECT * FROM tbl_fact WHERE idprove='".$id."' && id_fact  IN (SELECT id_fact_st  FROM status_fact ) order by fecha_fact ASC ");
                    
            	   	 while($filas2=mysql_fetch_array($busqueda2))
                                {		
                                    $contfilas=$contfilas+1;
                                $fact=$filas2['id_fact'];
                                $id_provfact=$filas2['idprove'];
                                $fech_fact_x=$filas2['fecha_fact'];
                                 $montofact_x=$filas2['monto_fact'];
                                                	
       /***********************convierte DE AMERICANA a cifra LATINA separador mil con punto .**************************/
          
                                   /*if(!empty($montofact_x)){
				$mivalor0 = explode('.',str_replace(',','.',$montofact_x));
				$montofact_x=$mivalor0[0]."".$mivalor0[1].".".$mivalor0[2];
									 }
                */
                                 /*_________________________________calculo de retencion__________________________________*/
                               
                                 /*_________________________________calculo de retencion__________________________________*/
                                
                                
    		         ?>
    	       <tr>
               <?php
               //if ( $id==$id_provfact){
              /* echo "id factura ".$fact." proveedor:<br>".$id."</br>"; 
               echo "monto: ".$montofact_x." DEDUCI: ".$deducible." <br>";*/
                printf("<td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> <td ><font size='2'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td>  <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> ", $id, $nomb_prov, $represent, $fech_fact_x, $fact,  $montofact_x);
                $id_pasaprov=$id_provfact."*".$fact;
                
                //echo "id prov  antes del while prov: {".$id."} y la fact {".$fact."}"."cuenta filas ".$contfilas;
                /***============================================================================================================***/
 ?><td align="center"> 
  <img style='cursor:pointer;width:30px;height: 30px;' title="Generar Comprobante" onClick="win_comprobar('<?php echo  $id_pasaprov; ?>')" src='images/iconos/fact2.jpeg'/>
  <td align="center"> 
  <img style='cursor:pointer;width:30px;height: 30px;' title="Generar Comprobante" onClick="win_comprobar2('<?php echo  $id_pasaprov; ?>')" src='images/page_edit.png'/>
        	 <?php   /***============================================================================================================***/ // }            
              echo '<td><div id="message"></div>';
              // echo ('<a href="treino.php?id="' . $id  . '">' .  $localiza_imagen . " Usuario " .  $ced_alum."</a>" ); ?>
    					     
    					
    					 <td>
                        
<div id='msn_procesar'></div>
     <!---------------------------- modal content -------------------------------->
    	 	<div id="basic-modal-content">
    	 	 <?php /*
        
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
                  printf("<tr bgcolor='#FFFFFF'>  <td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td></tr>",$row00['idprov'], $row00['idfact']);
                  
                        
                                     }
                                                 print ("</TABLE>");  */
                                               
?>       
     
                    
       
		</div><!---basic-modal-content ------>

		
    		
    			
            </td>
           
           
                    
    				
    			  
    			</tr>
    			<p>
    		   <?php } /*fin del while sql*/ 
          }
           }
           ?> 
         
           <td>
           
           </td><td>
	   <!--a href="buscar.php?var2=<?php echo $localiza_x ?>&var1=<?php echo $localiza_x2 ?>&proceso=<?php echo $proceso ?>" > <input type="button" style="background:url(images/fondo_input/fondo_input_g.png));width:150px; height:30px ;" value="[Volver a Buscar]" ></a></td></tr-->
	      <!---/*---------------fin while fechtarray-----------------------------------------------*/-->
	      
	      </table>
                      
<!-- Load jQuery, SimpleModal and Basic JS files -->
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>

</body>
</html>
