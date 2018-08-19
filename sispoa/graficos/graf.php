<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Highcharts Example</title>
<script type="text/javascript" src="../include/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../include/js/highcharts.js"></script>
<script type="text/javascript" src="../include/js/themes/grid.js"></script>
<script type="text/javascript" src="../include/js/modules/exporting.js"></script>

</head>
<body>
<?php
 require'../include/func.class.php';
$objprod=new Crudpoa;
$consulta=$objprod->mostrar_program_poa2();


$data1 = array();
while ($row = mysql_fetch_array($consulta)) {
$data1[] = $row['unidad_dir'];
$data2[] = $row['indicador'];
}
?>
<script type="text/javascript">
$(function () {
$('#container').highcharts({
chart: {
type: 'column',
margin: [ 50, 50, 100, 80]
},
title: {
text: 'List of POS'
},
credits: {
enabled: false
},
xAxis: {
categories: [<?php echo join($data1, "','"); ?>],
labels: {
rotation: -45,
align: 'right',
style: {
fontSize: '13px',
fontFamily: 'Verdana, sans-serif'
}
}},
yAxis: {
min: 0,
title: {
text: 'No. of Ticket'
}
},
legend: {
enabled: false,
layout: 'vertical',
backgroundColor: '#FFFFFF',
align: 'left',
verticalAlign: 'top',
x: 50,
y: 35,
floating: true,
shadow: true
},
tooltip: {
pointFormat: '<b>{point.y:.1f} tickets</b>',
},
plotOptions: {
column: {
pointPadding: 0.2,
borderWidth: 0
}
},
series: [{
name: 'Qty',
data: ['<?php echo join($data2, "','"); ?>'],
dataLabels: {
enabled: true,
rotation: -90,
color: '#FFFFFF',
align: 'right',
x: 4,
y: 10,
style: {
fontSize: '13px',
fontFamily: 'Verdana, sans-serif',
textShadow: '0 0 3px black',
}
});
}
}]
});
</script>
<div id="container" style="min-width: 500px; height: 400px; margin: 0
auto"></div>
</body>
</html>