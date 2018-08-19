<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	   <title>Estadisticas con Jquery | Jquery Easy</title>
		<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="js/highcharts.js"></script>
		<!-- Este archivo es para darle un estilo (Este archivo es Opcional) -->
	    <script type="text/javascript" src="js/themes/grid.js"></script>
		<!-- Este archivo es para poder exportar losd atos que obtengamos -->
		<script type="text/javascript" src="js/modules/exporting.js"></script>
	
		<script type="text/javascript">
		
			var chart;
			$(document).ready(function() {
				chart = new Highcharts.Chart({
					chart: {
						renderTo: 'container',
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false
					},
					title: {
						text: 'Ranking de Navegadores, 2011'
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
/*====================================
series: [{
			type: 'bar',
            name: 'Tokyo',
            data: [10]
        }, {
        	type: 'bar',
            name: 'New York',
            data: [25]
        }, {
        	type: 'bar',
            name: 'Berlin',
            data: [35]
        }, {
        	type: 'bar',
            name: 'London',
            data: [45]
        }]
/*===================================*/
				    series: [{
						type: 'pie',
						name: 'Avances POA',
						data: [
							['Firefox',   50],
							['IE',       40],
							{
								name: 'Chrome',    
								y: 25,
								sliced: true,
								selected: true
							},
							['Safari',    45],
							['Opera',     25],
							['Others',   10]
						]

					}]
				});
			});
				
		</script>
<style type="text/css">
		   h4{ font-family:Arial, Helvetica, sans-serif;
		   color:#630;}
		   .cabecera{
                background: #4A3C31;
                border-bottom: 5px solid #69AD3C;
                margin:-8px 0 0 -8px;
                width: 100%;
			}
           .cabecera img{ 
		        margin:40px 0 0 30px;
		    }

</style>	
	</head>
<body>
<div class="cabecera"><a href="http://jqueryeasy.com/"><img src="http://www.jqueryeasy.com/application/views/templates/colorvoid/static/images/logo.gif" border="0" /></a></div>

	
	
	
	<center><h4>Graficos Estadisticos con Jquery</h4></center>
	
	<div id="container" style="width: 800px; height: 400px; margin: 0 auto"></div>
		
		
</body>
</html>
