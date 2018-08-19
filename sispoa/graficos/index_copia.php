

<html>
	<head>
	 
	   <title></title>
	   <script type="text/javascript"   src="../include/js/jquery.min.js">   </script>

		
<!--==================================================================================================-->
	<script type="text/javascript">
		$(document).ready(function() {
			var options = {
				chart: {
	                renderTo: 'mostrargrafica',
	                type: 'bar'
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
                        categories: []
                    },
                     yAxis: {
				            min: 0,
				            title: {
				                text: 'Grado de Avances %',
				                align: 'high'
				            },
				            labels: {
				                overflow: 'justify'
				            }
				        },
	            
    			plotOptions: {
				            bar: {
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
                        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                        shadow: true
                    },
	          // series: []
	            series: [{
	                 data: []
	            }]
	        }
	        
	       /* $.getJSON("data.php", function(json) {
	        	
				options.series[0].data = json;
	        	chart = new Highcharts.Chart(options);
	        });*/
	        $.getJSON("data_bar_graf.php", function(json) {
                    options.xAxis.categories = json[0]['data']; //xAxis: {categories: []}
                    options.series[0] = json[1];
                   //pruebas
                   // options.series[0].data= json[1]['data'];*/
                    chart = new Highcharts.Chart(options);
                });
	        
	        
      	});   
		</script>

<!--===========================================================================================-->
	
	
	<!--==================================================================================================-->	
	
<script type="text/javascript" src="../include/js/highcharts.js"></script>

<script type="text/javascript" src="../include/js/themes/grid.js"></script>

<script type="text/javascript" src="../include/js/modules/exporting.js"></script>

	</head>
	
<body>


	
	
	
	
	 <div id="mostrargrafica"  style="min-width: 410px; max-width: 1000px; height: 400px; margin: 0 auto"></div>
	<!--style="width: 60%; height: 60%;"-->
		
		
</body>
</html>