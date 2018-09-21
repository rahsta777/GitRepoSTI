<?php
        include("conexion/Conexion1.php");
      $link12=Conectarse(); 
        $fecha=date('Y-n-d');
        $idfech_x=($_POST['fechavar']);
         echo"id fact : ".$idfech_x;
       $dedu1="";
       $dedu2=0;
        $dedu0 = explode('*',$idfech_x);
				 $dedu1=$dedu0[0];
                 $dedu2=$dedu0[1];
                  /***********************convierte DE AMERICANA a cifra LATINA separador mil con punto .**************************
          
        if(!empty($idfact_x)){
				$mivalor = explode('.',str_replace(',','.',$idfact_x));
				$idfact=$mivalor[0]."".$mivalor[1].".".$mivalor[2];
									 }
    /*_______________________________________________________________________________________________*/
    $busql =mysql_query("SELECT * FROM tb_citas WHERE 	fech_cita=".$idfech_x."' order by fech_cita DESC ");
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
			//$query="insert into tb_citas (id_fact_cit, id_rprov_cit, fech_cita) VALUES ('$rif_y','$nomb_y', '$dir1_y', '$dir2_y', '$represen_y', '$lugar_serv_y', '$tlf_cont_y', '$email_y')";
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
        }
    /*------------------------------------------------------------------------*/
    
        echo"id fact dedu1: ".$dedu1." deducible dedu2: ".$dedu2;
        $status="procesada";
        if (mysql_num_rows(mysql_query("SELECT id_fact_st FROM status_fact WHERE id_fact_st	='" . $_POST['fact'] . "'", $link12))==0) {
        $sql="INSERT INTO status_fact (	id_fact_st, status_fact, deducible) VALUES ('$dedu1','$status', '$dedu2')";
		mysql_query($sql, $link12);
        	?><script type="text/javascript">
                        alert("Factura procesada "+<?php echo $dedu1; ?>);
                        </script><?php
		}
        else {
       		?><script type="text/javascript">
                        alert("Existen ya una factura Procesada con ese ID, por favor, Verifique.........");
                        </script>	<?php
 		}
		
		

?>