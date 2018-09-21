<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>
<!--link href="jquery-ui.css" rel="stylesheet"-->
<!--script>
function procedur_stat_fact(elemento1){
        var parametros2 = {
                "fact" : elemento1 /*,
                "monto_deducido" : valorCaja2*/
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
	      <td colspan="9" align="center" bgcolor="#ccc" class="box1" style='color:#0033ff;font:font-family:bold' ><strong >Informacion de Facturas Procesadas</strong>  </td>
	    </tr>
	    <tr bgcolor="#bf8b90" style='color:#fff;font:font-family:bold'align="center">
    	      <td  >No.Id</td>
            <td style='width:145px;'>Nombre Razon Social</td>
    	      <td style='width:125px;'>Representante</td>
              <td width="124">Fecha</td>
    	     <td >Factura</td>
             <td >Descuento</td>
             <td >Importe Bruto</td>
             <td >Procesada</td>
        </tr>         
             <?php 
              $imporet1=0;
              $porce1=0;
              $deducible=0; 
              $calc_deduc=0;
              $calc_deduc1=0;
              $calc_deduc2=0;
     if (isset($_POST["var14"]))
        {      
        
        include("conexion/Conexion1.php");
        $link=Conectarse(); 
        $buscar=($_POST["var14"]);
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
                  }
                       $calc_deduc=0;
                       $calc_deduc1=0;
                       $calc_deduc2=0;

        		$busqueda2 =mysql_query("SELECT * FROM tbl_fact WHERE idprove='".$id."' && id_fact IN (SELECT id_fact_st  FROM status_fact )  ");
                    $fact2="";
                     
            	   	 while($filas2=mysql_fetch_array($busqueda2))
                                {		
                                $fact=$filas2['id_fact'];
                                $id_provfact=$filas2['idprove'];
                                $fech_fact_x=$filas2['fecha_fact'];
                                 $montofact_x=$filas2['monto_fact'];
                                $busqueda3 =mysql_query("SELECT * FROM status_fact  WHERE id_fact_st='".$fact."'  ");
                                while($filas3=mysql_fetch_array($busqueda3))
                                       {   
                                             $Deduc_x=$filas3['deducible']/100;
                                             $Deduc1_x=$filas3['deducible1']/100;
                                             $Deduc2_x=$filas3['deducible2']/100;
                                         
                                             
                                               $fact2=$fact;	           
                                                  	
                                          $montofact_r1=$montofact_x;
                                         if(!empty($montofact_x)){
                                  				$mivalor0 = explode('.',str_replace(',','.',$montofact_x));
                                  				$montofact_x=$mivalor0[0]."".$mivalor0[1].".".$mivalor0[2];
                                         // echo "monto Fact:  ".$montofact_x."  [".$mivalor0[0]."]  [".$mivalor0[1]."]  [".$mivalor0[2]."]";
              									            }
                                           
                                          
                              
                                               /*_________________________________calculo de retencion__________________________________*/
                                             $calc_deduc=($montofact_x*$Deduc_x);
                                             $calc_deduc1=($montofact_x*$Deduc1_x);
                                             $calc_deduc2=($montofact_x*$Deduc2_x);
                                                  // echo "$montofact_x  Deducc1:[$calc_deduc]   Deducc2:[$calc_deduc1]  Deducc3:[$calc_deduc2] ";                                   
                                      }
                                $imporet1=$calc_deduc+$calc_deduc1+$calc_deduc2;
                                /*======================mostrar en formato latino=====================================*/
                               
                                /* if(!empty($calc_deduc)){
                                    $valordeduc0 = explode(',',str_replace('.',',',$calc_deduc));
                                    $calc_deduc=$valordeduc0[0]."".$valordeduc0[1].",".$valordeduc0[2];
                                   // echo " => ".$calc_deduc." "; 
                                    }*/
                                /*========================formato a latino para mostrar en pantalla===================================*/
                               
                                $monto_format=number_format($calc_deduc,2,",",".");
                                $monto_format1=number_format($calc_deduc1,2,",",".");
                                $monto_format2=number_format($calc_deduc2,2,",",".");

                                $imporet1=number_format($imporet1,2,",",".");
                                $deduc1=$monto_format;
                                $deduc2=$monto_format1;
                                $deduc3=$monto_format2;
                                /*===========================================================*/
                               
                               // echo "<br>Monto Fact: ".$montofact_x." Deducc1 es:[$deduc1]   Deducc2:[$deduc2]  Deducc3:[$deduc3] ";  
    		         ?>
    	       <tr>
               <?php
              /*
               echo "id factura ".$fact." proveedor:<br>".$id."</br>"; 
               echo "monto: ".$montofact_x." DEDUCI: ".$deducible." <br>";*/
               //echo $fact2."/".$fact;
               
                //if (($fact!=$fact2) && ($id==$id_provfact)) {
                    printf("<td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> ", $id, $nomb_prov, $represent, $fech_fact_x, $fact, $imporet1, $montofact_r1);
                // }
 ?><td><?php
	 //if($statusfact_x=="procesada"){?>
 <a href="#message"><input type="hidden" value="<?php echo $fact;?>" id="valor_icono"  onclick="cambia_status(this.id)"><img src="images/accept.png" width="20" height="20" border="0" name="imagen1"></a></TD > 
 <?php
	//	}
	                    
	?>		
        	 <?php // }            
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
    		   <?php } /*fin del while sql fact/prove*/ 
          }/*fin del while sql proveedores*/ 
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
