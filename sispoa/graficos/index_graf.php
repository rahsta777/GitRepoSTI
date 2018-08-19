                     <!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Pie Chart</title>
		<script type="text/javascript"   src="../include/js/jquery.min.js">   </script>
		
		<script type="text/javascript">
		$(document).ready(function() {
			var options = {
				chart: {
					 type: 'pie',
	                renderTo: 'container'
	               
	            },
	            title: {
	                text: 'Avances POA Por Direccion'
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
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        /* plotOptions: {
                            pie: {
                                dataLabels: {
                                    enabled: true
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
                        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#8194d9'),
                        shadow: true
                    },*/
	            series: [{
	                data: []
	            }]
	        }
	        
	        $.getJSON("data.php", function(json) {
	        	
				options.series[0].data = json;
	        	chart = new Highcharts.Chart(options);
	        });
	        
	        
	        
      	});   
		</script>
		
<script type="text/javascript" src="../include/js/highcharts.js"></script>

<script type="text/javascript" src="../include/js/themes/grid.js"></script>

<script type="text/javascript" src="../include/js/modules/exporting.js"></script>

		<!--script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script-->
        
	</head>
	<body>
	<center><h4>Grafico de Avance </h4></center>
		 <div id="container" style="width:600px;height:600px; "></div>
		
	</body>
</html>
