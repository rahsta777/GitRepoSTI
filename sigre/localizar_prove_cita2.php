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

<!--script>
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
</script-->
</head>


<body >
 	    
	   <table width="950px" border="1" align="center" class="contacto_listar_id">
	    <tr>
	      <td colspan="9" align="center" bgcolor="#ccc" class="box1" style='color:#0033ff;font:font-family:bold' ><strong >Informacion de Facturas Con Solicitud de Cita</strong>  </td>
	    </tr>
	    <tr bgcolor="#bf8b90" style='color:#fff;font:font-family:bold'align="center">
    	      <td  >No.Id</td>
            <td style='width:145px;'>Nombre Razon Social</td>
    	      <td style='width:125px;'>Representante</td>
              <td >Factura</td>
              <td >Fecha Factura</td>
             <td >Fecha Cita</td>
             <td >Descuento</td>
             <td >Importe Bruto</td>
            </tr>      
             <?php 
              $imporet1_citas2=0;
              $porce1_citas2=0;
              $deducible_citas2=0; 
              $cont_idfecha2=0;
     if (isset($_POST["varcitas2"]))
        {      
        
        include("conexion/Conexion1.php");
        $link=Conectarse(); 
        $buscarcitas_prov2=($_POST["varcitas2"]);
        //echo $buscar;
      
	      $busqueda_sql2=mysql_query("SELECT * FROM tbl_prov  WHERE razon_prov LIKE '%".$buscarcitas_prov2."%' or repres_prov LIKE '%".$buscarcitas_prov2."%' or prov_rif LIKE '%".$buscarcitas_prov2."%' " );
		 
        
         if($busqueda_sql2 ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
        
                 } /*fin del if error sql*/ 
               // $res = mysql_query($busqueda,$link) or die("Error en: $busqueda: " . mysql_error()); 
           while($filas_citas2=mysql_fetch_array($busqueda_sql2))
           {
            
             if(isset($filas_citas2['prov_rif'])) 
               {
                                $idcitas2=$filas_citas2['prov_rif'];
                                $nomb_provcitas2=$filas_citas2['razon_prov'];
                                $representcitas2=$filas_citas2['repres_prov'];
                               
                                
                                //$fecha1=$filas['fe_fecha'];
                                //WHERE idprove='".$id."'
                  }
                  $busqueda2 =mysql_query("SELECT * FROM tbl_fact WHERE idprove='".$idcitas2."' && id_fact IN (SELECT id_fact_cit FROM tb_citas)  && id_fact Not IN ( SELECT id_fact_st  FROM status_fact )order by fecha_fact DESC ");
        		      $busqueda21 =mysql_query("SELECT * FROM tb_citas WHERE id_rprov_cit='".$idcitas2."' ");
                   
              while($filas_citas21=mysql_fetch_array($busqueda21))
                    { 
                        $fecha_cta=$filas_citas21['fech_cita'];
                        // echo "paso por rutina: ".$fecha_cta;
                      }
            	   	 while($filas_citas3=mysql_fetch_array($busqueda2))
                                {		
                                    $cont_idfecha2+=1;
                                    
                                $factcitas2=$filas_citas3['id_fact'];
                                $fact22=$factcitas2;
                                  //$fecha_cta=$filas_citas3['id_fact_cit'];
                                $fech_fact_citasx2=$filas_citas3['fecha_fact'];
                                $fecha_citasx2=0;//$filas_citas3['fech_cita'];
                                 $montofact_citasx2=$filas_citas3['monto_fact'];
                               // $id_provfactcitas2=$filas_citas3['idprove'];
                                 
                               
                                
                                 

                                                	
       /***********************convierte DE AMERICANA a cifra LATINA separador mil con punto .**************************/
                          
               if(!empty($montofact_citasx2)){
                    				$mivalor0 = explode('.',str_replace(',','.',$montofact_citasx2));
                    				$montofact_citasx2=$mivalor0[0]."".$mivalor0[1].".".$mivalor0[2];
									       }
                
                                 /*_________________________________calculo de retencion__________________________________*/
                               $porce1_citas2=0.142858;
                                $imporet1_citas=($montofact_citasx2*$porce1_citas2);
                                $monto_format2=number_format($imporet1_citas2,2,".",",");
                                $deducible_citas2=$monto_format2;
                                 /*_________________________________calculo de retencion__________________________________*/
                                
                                
    		         ?>
    	       <tr bgcolor="#ccc">
               <?php
              // $id_pasaprov32=$id_provfactcitas."*".$factcitas;
               
             
                
                printf("<td bgcolor='#ccc'><font size='2'>&nbsp;%s</td>  <td ><font size='2'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td>  <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td>", $idcitas2, $nomb_provcitas2, $representcitas2, $factcitas2, $fech_fact_citasx2, $fecha_cta, $deducible_citas2, $montofact_citasx2 );
                /***============================================================================================================***/
 ?><!--td><input type=""  name="id3" id="id3"  value="<?php echo $id_pasaprov32; ?>" --> 
 <td> <!--img style='cursor:pointer;width:40px;height: 40px;' title="Generar cita" onClick="win_citas('<?php echo  $id_pasaprov32; ?>')" src='images/iconos/fact2.jpeg'/--> 
 
    
                 
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
