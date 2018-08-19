<?php
  require'../include/func.class.php';
$objprod=new Crudpoa;
$objprod2=new Crudpoa;
$consulta=$objprod->mostrar_program_poa2();//mostrar_program_poa2(); este hay que arreglar para que muestre los direcciones en el eje x
$consulta2=$objprod2->mostrar_direcc_poa2();
/*while ($row_activ = $consulta->mysql_fetch_array()) {*/
/*if($consulta) {
	
	$rows = array();
	
while($r = mysql_fetch_array($consulta)) {
	$row[0] = $r[0];
	$row[1] = $r[1];
	
	array_push($rows,$row);
	
	}
	print json_encode($rows, JSON_NUMERIC_CHECK);
}
mysql_close($con); $bln['category'][] = $r['unidad_dir'];
*/
if($consulta) {
	$bln = array();
	$bln['name'] = '';
	$rows['name'] = ' de Avance    %';
	while ($r = mysql_fetch_array($consulta)) {
		$iddir=$r['id_dir'];
		
	   // $bln['data'][] = $r[0];
	    $rows['data'][] = $r[1];
	    $consulta2=$objprod2->mostrar_direcc_poa2($iddir);
	    	while ($r2 = mysql_fetch_array($consulta2)) {
	    		$bln['data'][] = $r2[1];

	    	}
	    /*?>
	    <script type="text/javascript">
	    alert("paso");
	    </script>
	    <?php*/
	    //$consulta2=$objprod2->mostrar_direcc_poa2($bln[0]);
	}
	$rslt = array();
	array_push($rslt, $bln);
	array_push($rslt, $rows);
	//echo $rslt;
	print json_encode($rslt, JSON_NUMERIC_CHECK);			
}
else print('No cargo datos');
?> 
