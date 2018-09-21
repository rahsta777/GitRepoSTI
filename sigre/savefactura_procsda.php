<?php
        include("conexion/Conexion1.php");
      $link12=Conectarse(); 
        $fecha=date('Y-n-d');
        $idfact_x=($_POST['fact']);
        $codg_xret0=($_POST['codg_xret0']);
        $codg_xret1=($_POST['codg_xret1']);
        $codg_xret2=($_POST['codg_xret2']);
         //echo"id fact : ".$idfact_x." codg_xret0: ".$codg_xret0."  codg_xret1: ".$codg_xret1."  codg_xret2: ".$codg_xret2;
       $dedu1="";
       $dedu2=0;
        $dedu0 = explode('*',$idfact_x);
				 $dedu1=$dedu0[0];
                 $dedu2=$dedu0[1];
                  /***********************convierte DE AMERICANA a cifra LATINA separador mil con punto .**************************
          
        if(!empty($idfact_x)){
				$mivalor = explode('.',str_replace(',','.',$idfact_x));
				$idfact=$mivalor[0]."".$mivalor[1].".".$mivalor[2];
									 }
    /*_______________________________________________________________________________________________*/
        echo"id fact dedu1: ".$dedu1." deducible dedu2: ".$dedu2;
        $status="procesada";
        if (mysql_num_rows(mysql_query("SELECT id_fact_st FROM status_fact WHERE id_fact_st	='" . $_POST['fact'] . "'", $link12))==0) {
        $sql="INSERT INTO status_fact (	id_fact_st, status_fact, deducible, deducible1, deducible2) VALUES ('$dedu1','$status', '$codg_xret0', '$codg_xret1', '$codg_xret2')";
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