
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	   <title>Estadisticas con Jquery | Jquery Easy</title>
	<?php 	$rows = array();
	 require'../include/func.class.php';
$objprod=new Crudpoa;
$consulta=$objprod->mostrar_program_poa2();
$arragley=array();
$arraglex=array();
$k=0;
while($r = mysql_fetch_array($consulta)) {
	$k++;
	$row[0] = $r[0];
	$row[1] = $r[1];
	$arragley[$k]= $r['unidad_dir'];
    $arraglex[$k]= $r['indicador'];
	/*echo $arragley[$k] ."<br>";
	echo $arraglex[$k] ."<br>";*/
	array_push($rows,$row[0]);
	array_push($rows,$row[1]);
	//echo $row[0]." => ".$row[1]."<br>";
	}
	for($i = 0 ;$i<count($arragley);$i++){
		//echo $arragley[$i]."/ ".$arraglex[$i];
	}
?>
		<!--===========================================================================================--
		<script type="text/javascript">
		
			var chart;jQuery.noConflict(); 
			$(document).ready(function() {
				chart = new Highcharts.Chart({
					chart: {
						renderTo: 'container',
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false
					},
					title: {
						text: 'Avances Por Dirección '
					},
					xAxis: {
                        categories: ['DAC','DPYS','DHR','DSJ','DG']
                    },
					tooltip: {

						formatter: function() {
							return '<b>'+ this.point.name +'</b>: '+ this.y +' %';
						}
					},
                   
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: 'pointer',
							dataLabels: {
								enabled: false
							},
							showInLegend: true
						}
					},
					plotBands: [{
						   color: 'rgba(124,252,0, 0.3)',
						   from: 1000,
						   to: 1500,
						   label: {
						      text: 'Expected Sales'
						   }
						}],
						/*====================================*/

			 series: [{
						type: 'bar',
						name: 'Avances POA',
						data: [
							['Firefox',   50],
							['IE',       40],
							['Safari',    45],
							['Opera',     25],
							['Others',   10]
						]

					}]

					});
			/*====================================
				$.getJSON("data.php", function(json) {
	        	options.series[0].data = json;
	        	chart = new Highcharts.Chart(options);
	        });
	       /*====================================*/ 
	        
	        
      	});   
					/*===================================*/
		</script-->

<script type="text/javascript">
		$(document).ready(function() {
			var options = {
				chart: {
	                renderTo: 'container',
	                plotBackgroundColor: null,
	                plotBorderWidth: null,
	                plotShadow: false
	            },
	            title: {
	                text: 'Avances POA Por Direccion'
	            },
	            tooltip: {
	               formatter: function() {
	                     return '<b>'+ this.point.name +'</b>: '+ this.y +' %';
	                }
	            },
	            xAxis: {
                        categories: ['DAC','DPYS','DHR','DSJ','DG']
                    },
	            
    plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },

                 legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'top',
                        x: -40,
                        y: 100,
                        floating: true,
                        borderWidth: 1,
                        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                        shadow: true
                    },
	            series: [{
	                type: 'bar',
	                name: 'Browser share',
	                data: []
	            }]
	        }
	        
	        $.getJSON("data.php", function(json) {
	        options.series[0].data = json;
	        chart = new Highcharts.Chart(options);
	        });
	        
	        
	        
      	});   
		</script>

			
</script>

	</head>
	
<body>


	
	
	<center><h4>Grafico de Avance </h4></center>
	
	<div id="container" style="width: 60%; height: 60%;"></div>
		
		
</body>
</html>
