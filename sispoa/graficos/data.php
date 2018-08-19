<?php
  require'../include/func.class.php';
$objprod=new Crudpoa;
$consulta=$objprod->mostrar_program_poa21();

 /*while ($row_activ = $consulta->mysql_fetch_array()) {*/
if($consulta) {
	
	$rows = array();
	
while($r = mysql_fetch_array($consulta)) {
	$row[0] = $r[0];
	$row[1] = $r[1];
	/*echo $row[0] ."<br>";
	echo $row1[1] ."<br>";
	/*$row1['data'][] = $r['unidad_dir'];
    $row1['data'][] = $r['indicador'];*/
	array_push($rows,$row);
	
	}
	print json_encode($rows, JSON_NUMERIC_CHECK);
}
/*mysql_close($con);
$bln = array();
$bln['name'] = 'Bulan';
$rows['name'] = 'Jumlah Pelawat';
while ($r = mysql_fetch_array($result)) {
    $bln['data'][] = $r['BULAN'];
    $rows['data'][] = $r['JUMLAH'];
}
$rslt = array();
array_push($rslt, $bln);
array_push($rslt, $rows);
print json_encode($rslt, JSON_NUMERIC_CHECK);			

mysql_close($con);*/

?> 
