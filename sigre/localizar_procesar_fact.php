<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>
<!--script language="JavaScript">
function procedur_stat_fact(idfact){
     //alert("Factura procesada "+idfact;
  var codg_ret0 = $("#codg_ret0").val();
  var codg_ret1 = $("#codg_ret1").val();
  var codg_ret2 = $("#codg_ret2").val();
  alert(" "+codg_ret0+" "+codg_ret1+" "+codg_ret2);

        var parametros2 = {
                "fact" : idfact , "codg_xret0" : codg_ret0, " codg_xret1" : codg_ret1, "codg_xret2" : codg_ret2
        };
        $.ajax({
                data:  parametros2,
                url:   'savefactura_procsda.php',
                type:  'post',
                beforeSend: function () {
                        $("#msn_procesar").html("<center>Procesando, espere por favor... <img src='images/loading.gif' /><center>");
                },
                success:  function (response) {
                        $("#msn_procesar").html(response);
                }
              
        });
}
</script-->
</head>


<body >
 	    <?php if (isset($_GET["proceso"])){ ?>
	   
        <?php } ?>
	   <table width="950px" border="1" align="center" class="contacto_listar_id">
	    <tr>
	      <td colspan="11" align="center" bgcolor="#ccc" class="box1" style='color:#0033ff;font:font-family:bold' ><strong >Informacion de Facturas x Pagar</strong>  </td>
	    </tr>
	    <tr bgcolor="#bf8b90" style='color:#fff;font:font-family:bold'align="center">
    	      <td  >No.Id</td>
            <td style='width:145px;'>Nombre Razon Social</td>
    	      <td style='width:125px;'>Representante</td>
              <td width="124">Fecha</td>
    	     <td >Factura</td>
             
             <td >Importe Bruto</td>
             <td >Procesar</td>
             
             
        </tr>      
             <?php 
              $imporet1=0;
              $porce1=0;
              $deducible=0; 
     if (isset($_POST["var13"]))
        {      
        
        include("conexion/Conexion1.php");
        $link=Conectarse(); 
        $buscar=($_POST["var13"]);
        //echo $buscar;
      
	      $busqueda=mysql_query("SELECT * FROM tbl_prov  WHERE razon_prov LIKE '%".$buscar."%' or repres_prov LIKE '%".$buscar."%' or prov_rif LIKE '%".$buscar."%' " );
		 
        
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
                                $represent=$filas['repres_prov'];
                                
                                
                                //$fecha1=$filas['fe_fecha'];
                                //WHERE idprove='".$id."'
                  }
        		$busqueda2 =mysql_query("SELECT * FROM tbl_fact WHERE idprove='".$id."' && id_fact  NOT IN (SELECT id_fact_st  FROM status_fact ) order by fecha_fact ASC ");
                    $fact2="";
            	   	 while($filas2=mysql_fetch_array($busqueda2))
                                {		
                                $fact=$filas2['id_fact'];
                                $fact2=$fact;
                                $id_provfact=$filas2['idprove'];
                                $fech_fact_x=$filas2['fecha_fact'];
                                 $montofact_x=$filas2['monto_fact'];
                                                	
       /***********************convierte DE AMERICANA a cifra LATINA separador mil con punto .**************************/
          $montofact_r1=$montofact_x;
                                   if(!empty($montofact_x)){
				$mivalor0 = explode('.',str_replace(',','.',$montofact_x));
				$montofact_x=$mivalor0[0].",".$mivalor0[1].".".$mivalor0[2];
									 }
                
                                 /*_________________________________calculo de retencion__________________________________*/
                               $porce1=0.142858;
                                $imporet1=($montofact_x*$porce1);
                                $monto_format=number_format($imporet1,2,".",",");
                                $deducible=$monto_format;
                                 /*_________________________________calculo de retencion__________________________________*/
                                
                                
    		         ?>
    	       <tr>
               <?php
               $id_pasaprov2=$fact."*".$deducible;
               
               /*if ($fact!=$fact2){*/
              /* echo "id factura ".$fact." proveedor:<br>".$id."</br>"; 
               echo "monto: ".$montofact_x." DEDUCI: ".$deducible." <br>";*/
               
                printf("<td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> <td ><font size='2'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td>  <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> ", $id, $nomb_prov, $represent, $fech_fact_x, $fact, $montofact_r1);
                /***============================================================================================================***/

 ?><td> <img style='cursor:pointer;width:40px;height: 40px;' title="Procesar Factura" onClick="win_procesar_fact('<?php echo  $id_pasaprov2; ?>')" src='images/gear_wheel.png'/> 
 <!--td><input type="hidden"  name="status_fact" id="status_fact" size="25" value="<?php echo $fact."*".$deducible;?>"/>   <a href="javascrpt:;"  style="background:url(images/fondo_input/fondo_input.png);width:550px;height:200px ;margin:10px;" title="Procesar :<?php echo $id_pasaprov2;?>" onClick="procedur_stat_fact('<?php echo $id_pasaprov2; ?>');" > Procesar</a-->

        	 <?php   /***=}===========================================================================================================***/ // }            
              echo '<td><div id="message"></div>';
              // echo ('<a href="treino.php?id="' . $id  . '">' .  $localiza_imagen . " Usuario " .  $ced_alum."</a>" ); ?>
    					     
    					
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
