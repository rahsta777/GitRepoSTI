<?php

#Basic Line
/* require'../include/func.class.php';
$objprod=new Crudpoa;
$consulta=$objprod->mostrar_program_poa2();

$bln = array();
$bln['name'] = 'Bulan';
$rows['name'] = 'Jumlah Pelawat';
while ($r = mysql_fetch_array($result)) {
    $bln['data'][] = $r['unidad_dir'];
    $rows['data'][] = $r['indicador'];
}

$rslt = array();
array_push($rslt, $bln);
array_push($rslt, $rows);
echo  $rslt;
print json_encode($rslt, JSON_NUMERIC_CHECK);			

mysql_close($con);*/

require'../include/func.class.php';
$objprod=new Crudpoa;
$consulta=$objprod->mostrar_program_poa2();
$arragley=array();
$arraglex=array();
$k=0;
$rows = array();
while($r = mysql_fetch_array($consulta)) {
	$k++;
	$row['data'][0] = $r[0];
	$row['data'][1] = $r[1];
	$arragley[$k]= $r['unidad_dir'];
    $arraglex[$k]= $r['indicador'];
	//echo $arragley[$k] ."<br>";
	//echo $arraglex[$k] ."<br>";
	array_push($rows,$arragley[$k]);
	array_push($rows, $arraglex[$k]);
	
	
	}
	print json_encode($rows, JSON_NUMERIC_CHECK);
	//echo $rows;
	/*for($i = 0 ;$i<count($arragley);$i++){
		echo $arragley[$i]."/ ".$arraglex[$i];
	}*/
?>		
