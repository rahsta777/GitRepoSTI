<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>
<!--link href="jquery-ui.css" rel="stylesheet"-->
<script>
function elimina_fact(idfact){
     //alert("Factura procesada "+idfact;
        var parametros2 = {
                "fact" : idfact /*,
                "monto_deducido" : valorCaja2*/
        };
        $.ajax({
                data:  parametros2,
                url:   'elimfactura.php',
                type:  'post',
                beforeSend: function () {
                        $("#msn_procesar").html("<center>Procesando, espere por favor... <img src='images/loading.gif' /><center>");
                },
                success:  function (response) {
                        $("#msn_procesar").html(response);
                }
              
        });
}
</script>
</head>


<body >
 	    
	   <table width="950px" border="1" align="center" class="contacto_listar_id">
	    <tr>
	      <td colspan="9" align="center" bgcolor="#ccc" class="box1" style='color:#0033ff;font:font-family:bold' ><strong >Informacion de Facturas Procesadas Para Mantenimiento</strong>  </td>
	    </tr>
	    <tr bgcolor="#bf8b90" style='color:#fff;font:font-family:bold'align="center">
    	      <td  >No.Id</td>
            <td style='width:145px;'>Nombre Razon Social</td>
    	      <td width="124">Fecha Fact.</td>
    	     <td >Factura</td>
            
             <td >Importe Bruto</td>
             <td >Actualizar</td>
             <td >Borrar</td>
        </tr>      
             <?php 
              $imporet1=0;
              $porce1=0;
              $deducible=0; 
     if (isset($_POST["variante"]))
        {       
        
        include("conexion/Conexion1.php");
        $link=Conectarse(); 
        $buscarmant_fact=($_POST["variante"]);
        //echo "La Entrada: ".$buscarmant_fact;
       // $busqueda =mysql_query("SELECT * FROM tbl_fact WHERE id_fact='".$buscarmant_fact."' && id_fact IN (SELECT id_fact_st  FROM status_fact )  ");
                  
      $busqueda=mysql_query("SELECT * FROM tbl_factprov  WHERE idfact LIKE '%".$buscarmant_fact."%' or idprov LIKE '%".$buscarmant_fact."%' " );
	      //$busqueda=mysql_query("SELECT * FROM tbl_prov  WHERE razon_prov LIKE '%".$buscarmant_fact."%' or repres_prov LIKE '%".$buscarmant_fact."%' or prov_rif LIKE '%".$buscarmant_fact."%' " );
		 
        
         if($busqueda ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
        
                 } /*fin del if error sql*/ 
               // $res = mysql_query($busqueda,$link) or die("Error en: $busqueda: " . mysql_error()); 
           while($filas=mysql_fetch_array($busqueda))
           {
            
                 if(isset($filas['idprov'])) 
                      {
                                    $id_provfact=$filas['idprov'];
                                    $id_factfact=$filas['idfact'];
                      }
        		  $busqueda2 =mysql_query("SELECT * FROM tbl_fact WHERE idprove='".$id_provfact."' && id_fact IN (SELECT id_fact_st  FROM status_fact ) order by fecha_fact ASC ");
                    $fact2="";
            	   	 while($filas2=mysql_fetch_array($busqueda2))
                      {		
                                $fact=$filas2['id_fact'];
                                //echo $fact;
                                $fact2=$fact;
                                $id_provfact=$filas2['idprove'];
                                $fech_fact_x=$filas2['fecha_fact'];
                                 $montofact_x=$filas2['monto_fact'];
                                                	
       /***********************convierte DE AMERICANA a cifra LATINA separador mil con punto .**************************/
          
                               if(!empty($montofact_x)){
                              				$mivalor0 = explode('.',str_replace(',','.',$montofact_x));
                              				$montofact_x=$mivalor0[0]."".$mivalor0[1].".".$mivalor0[2];
                  									 }             
                  		         ?>
                  	       <tr>
                             <?php
                             $id_pasaprov2=$fact."*".$deducible;
                             
                             /*if ($fact!=$fact2){*/
                            /* echo "id factura ".$fact." proveedor:<br>".$id."</br>"; 
                             echo "monto: ".$montofact_x." DEDUCI: ".$deducible." <br>";*/
                               $busqueda3 =mysql_query("SELECT * FROM tbl_prov WHERE prov_rif='".$id_provfact."' order by prov_rif ASC ");
                    $fact2="";
                           while($filas3=mysql_fetch_array($busqueda3))
                              {
                                        
                                       
                                        $prov_rif_x=$filas3['prov_rif'];
                                        $razon_prov_x=$filas3['razon_prov'];
                                       

                             

                                     
                                      printf("<td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> <td ><font size='2'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td>  <td><font size='2'>&nbsp;%s</td> ", $id_provfact, $razon_prov_x, $fech_fact_x, $fact, $montofact_x);
                                          /***============================================================================================================***/
                                   ?> <td></a><img style='cursor:pointer;width:40px;height: 40px;' title="Actualizar" onClick="win_actualiza_fact('<?php echo $fact ; ?>')" src='images/iconos/fact2.jpeg'/>
                                <td><img style='cursor:pointer;width:30px;height: 30px;' title="Borrar Fact" onClick="elimina_fact('<?php echo $fact ; ?>')" src='images/error.gif'/>
                              	  			  
                          			</tr>
                          			<p>
            		   <?php      }
                        } /*fin del while sql tabla fact*/ 
          } /*fin del while sql tabla factprov*/ 
      }
           ?> 
            
	      </table>
                      
<!-- Load jQuery, SimpleModal and Basic JS files -->
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>

</body>
</html>
