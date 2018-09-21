<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>

<head>
<script language="JavaScript">


function win_citas(fechid) {
      //alert("id que llega al openwin es:["+id+"]");
    var url="reg_fech_cita.php?varfecha="+fechid; 
    msgWindow=window.open(url,"OpenWindow",
"width=1000,height=500,scrollbars=no");

}


</script>

<!--link href="jquery-ui.css" rel="stylesheet"-->

<script>
function guarda_fact_cita(idcita){
     //alert("Factura procesada "+idfact;
        var paramecita = {
                "fechavar" : idcita /*,
                "monto_deducido" : valorCaja2*/
        };
        $.ajax({
                data:  paramecita,
                url:   'savecitas_prov.php',
                type:  'post',
                beforeSend: function () {
                        $("#msn_procesar_citas").html("<center>Procesando, espere por favor... <img src='images/loading.gif' /><center>");
                },
                success:  function (response) {
                        $("#msn_procesar_citas").html(response);
                }
              
        });
}
</script>
</head>


<body >
 	    
	   <table width="950px" border="1" align="center" class="contacto_listar_id">
	    <tr>
	      <td colspan="9" align="center" bgcolor="#ccc" class="box1" style='color:#0033ff;font:font-family:bold' ><strong >Informacion de Factura</strong>  </td>
	    </tr>
	    <tr bgcolor="#bf8b90" style='color:#fff;font:font-family:bold'align="center">
    	      <td  >No.Id</td>
            <td style='width:145px;'>Nombre Razon Social</td>
    	      <td style='width:125px;'>Representante</td>
              <td width="124">Fecha</td>
    	     <td >Factura</td>
             <td >Descuento</td>
             <td >Importe Bruto</td>
             <td >Cita</td>
             
            
             
             
        </tr>      
             <?php 
              $imporet1_citas=0;
              $porce1_citas=0;
              $deducible_citas=0; 
              $cont_idfecha=0;
     if (isset($_POST["varcitas"]))
        {      
        
        include("conexion/Conexion1.php");
        $link=Conectarse(); 
        $buscarcitas_prov=($_POST["varcitas"]);

      
	      $busqueda_sql=mysql_query("SELECT * FROM tbl_prov  WHERE razon_prov LIKE '%".$buscarcitas_prov."%' or repres_prov LIKE '%".$buscarcitas_prov."%' or prov_rif LIKE '%".$buscarcitas_prov."%' " );
		 
         
         if($busqueda_sql ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
        
                 } /*fin del if error sql*/ 
               // $res = mysql_query($busqueda,$link) or die("Error en: $busqueda: " . mysql_error()); 
           while($filas_citas=mysql_fetch_array($busqueda_sql))
           {
           
             if(isset($filas_citas['prov_rif'])) 
               {
                                $idcitas=$filas_citas['prov_rif'];
                                $nomb_provcitas=$filas_citas['razon_prov'];
                                $representcitas=$filas_citas['repres_prov'];

                                 
                                
                                //$fecha1=$filas['fe_fecha'];
                                //WHERE idprove='".$id."'
                  } 
                  
        		$busqueda1 =mysql_query("SELECT * FROM tbl_fact WHERE idprove='".$idcitas."' && id_fact NOT IN (SELECT id_fact_st  FROM status_fact )  && id_fact  NOT IN (SELECT id_fact_cit  FROM tb_citas )order by fecha_fact DESC ");
                    $fact2="";
            	   	 while($filas_citas2=mysql_fetch_array($busqueda1))
                                {		
                                $cont_idfecha+=1;
                                //echo "paso por rutina: ".$idcitas;
                                $factcitas=$filas_citas2['id_fact'];
                                $fact2=$factcitas;
                                $id_provfactcitas=$filas_citas2['idprove'];
                                $fech_fact_citasx=$filas_citas2['fecha_fact'];
                                 $montofact_citasx=$filas_citas2['monto_fact'];
                                                	
       /***********************convierte DE AMERICANA a cifra LATINA separador mil con punto .**************************/
          
                                   if(!empty($montofact_citasx)){
                                  				$mivalor0 = explode('.',str_replace(',','.',$montofact_citasx));
                                  				$montofact_citasx=$mivalor0[0]."".$mivalor0[1].".".$mivalor0[2];
									                     }
                
                                /*_________________________________calculo de retencion__________________________________*/
                               $porce1_citas=0.142858;
                                $imporet1_citas=($montofact_citasx*$porce1_citas);
                                $monto_format=number_format($imporet1_citas,2,".",",");
                                $deducible_citas=$monto_format;
                                 /*_________________________________calculo de retencion__________________________________*/
                                
                                
    		         ?>
    	       <tr bgcolor="#ccc">
               <?php
               $id_pasaprov3=$id_provfactcitas."*".$factcitas;
               
             
               
                printf("<td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> <td ><font size='2'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> ", $idcitas, $nomb_provcitas, $representcitas, $fech_fact_citasx, $factcitas, $deducible_citas, $montofact_citasx);
                /***============================================================================================================***/
 ?><!--td><input type=""  name="id3" id="id3"  value="<?php echo $id_pasaprov3; ?>" --> 
 <td> <img style='cursor:pointer;width:40px;height: 40px;' title="Generar cita" onClick="win_citas('<?php echo  $id_pasaprov3; ?>')" src='images/iconos/fact2.jpeg'/> 
 
    
                 
               </td>
        	 <?php   /***=}===========================================================================================================***/ // }            
              echo '<td><div id="msn_procesar_citas"></div>';
              ?>
    					     
    					
    					 <td>
                         <!--a href="javascript:;" class="deleteuser" onclick="Procesoquery_factur(<?php echo $id;?>);">
		<img src="images/correcto.gif" width="25" height="25" title="Procesar Factura"/>
    	<div id='content'-->
		<div id='basic-modal'>
                            <!--input  style="background:url(images/fondo_input/fondo_input_g.png);width:100px;height:30px ;" type="button"  name='basic' value='Factura' class='basic'/-->
                         </div> 
	</div><!--fin content-->
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
                  printf("<tr bgcolor='#9DA7C6'>  <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td></tr>",$row00['idprov'], $row00['idfact']);
                  
                        
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
                      


</body>
</html>
