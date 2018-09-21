  <?php
        include("conexion/Conexion1.php");
      $link12=Conectarse(); 
        $fecha_act=date('Y-n-d');
        //echo "fecha ".$fecha_act;
        
        $idfechcitas_x=($_POST['valorchk']);
        //print_r($idfechcitas_x);
        $num=count($idfechcitas_x);
        for($n=0;$n<$num;$n++){
                  $elvectorcita=$idfechcitas_x[$n];
                 // print_r($elvectorcita);
                   $dcitas1="";
                   $dcitas2="";
                   $dcitas3="";
                   $dedu0 = explode('*',$elvectorcita);
			     $dcitas1=$dedu0[0];
                 $dcitas2=$dedu0[1];
                 $dcitas3=$dedu0[2];
                 //echo "El rifProvev: [".$dcitas1." ]  No.factura:  [".$dcitas2."]  y fecha fact: [".$dcitas3."]<br>";
        
                  /***********************convierte DE AMERICANA a cifra LATINA separador mil con punto .**************************
          
        if(!empty($idfact_x)){
				$mivalor = explode('.',str_replace(',','.',$idfact_x));
				$idfact=$mivalor[0]."".$mivalor[1].".".$mivalor[2];
									 }
    /*_______________________________________________________________________________________________*
    $busql =mysql_query("SELECT * FROM tb_citas WHERE 	fech_cita=".$dcitas3."' order by fech_cita DESC ");
                    $result2=mysql_query ($busql,$link12);
    if(mysql_error())
 		{
		echo mysql_error();
   		return;
  		}
     	$num = mysql_num_rows($result2);
     	if(!$num)
     		{
     		 include("fnc/f_fecha.php");
		    $query="insert into tb_citas (id_fact_cit, id_rprov_cit, fech_cita) VALUES ('$dcitas2','$dcitas1', '$dcitas3')";
        mysql_query($query, $link12);
     		}
       else
     	  {
                     		?>  <script type="text/javascript">
                        alert("Citas no puede ser procesada excede la cantidad maxima de citas ");
                        </script><?php
                         	 while($filas_citas2=mysql_fetch_array($busql))
                                {		
                                    $cont_idfecha+=1;
                                      $cont_idfecha+=1;
                                    
                                $factcitas=$filas_citas2['id_fact'];
                                $fact2=$factcitas;
                                $id_provfactcitas=$filas_citas2['idprove'];
                                $fech_fact_citasx=$filas_citas2['fecha_fact'];
                                 $montofact_citasx=$filas_citas2['monto_fact'];
                                    
                                }
        }*/
    /*------------------------------------------------------------------------*/
    
        
        if (mysql_num_rows(mysql_query("SELECT id_fact_cit, fech_cita FROM tb_citas WHERE id_fact_cit	='" . $dcitas2 . "' && fech_cita   ='" .$fecha_act. "'", $link12))==0) {
        $sql="INSERT INTO tb_citas (id_fact_cit, id_rprov_cit,  fech_cita, fech_fact) VALUES ('" . $dcitas2 . "', '" . $dcitas1 . "', '".$fecha_act."', '" . $dcitas3 . "')";
		mysql_query($sql, $link12);
        	?><script type="text/javascript">
                        alert("Cita procesada de Fact No.: "+<?php echo $dcitas2 ; ?>);
                        </script><?php
		}
        else {
       		?><script type="text/javascript">
                        alert("Existen ya una factura Procesada con ese ID, por favor, Verifique.........");
                        </script>	<?php
 		}
		
		
  }/**fin del for**/
?>