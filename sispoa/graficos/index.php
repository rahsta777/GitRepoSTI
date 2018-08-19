
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	   <title>Estadisticas con Jquery | Jquery Easy</title>
	

		<!--===========================================================================================-->
		<!--script type="text/javascript">
		
			
			$(document).ready(function() {
				chart = new Highcharts.Chart({
					chart: {
						renderTo: 'mostrargraficas',
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
					/*plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: 'pointer',
							dataLabels: {
								enabled: false
							},
							showInLegend: true
						}
					},*/
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
			            y: 80,
			            floating: true,
			            borderWidth: 1,
			            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
			            shadow: true
			        },

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
			});
				
		</script-->
<!--========================================================================================-->
		<script type="text/javascript">
        $(document).ready(function() {
            var options = {
               chart: {
						renderTo: 'mostrargraficas',
						type: 'bar',
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
                        categories: []
                    },
                
    /*plotOptions: {
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
        },*/
        plotOptions: {
                            bar: {
                            	allowPointSelect: true,
                                dataLabels: {
                                    enabled: true,
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
			            y: 80,
			            floating: true,
			            borderWidth: 1,
			            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
			            shadow: true
			        },
               series: []
            }
            
                  $.getJSON("graficos/data_bar_graf.php", function(json) {
                    options.xAxis.categories = json[0]['data']; //xAxis: {categories: []}
                    options.series[0] = json[1];
                    chart = new Highcharts.Chart(options);
                });
            
            
        });   
        </script>

	</head>
	
<body>
	<div id="mostrargraficas" style="width: 50%; height: 300px; margin: 0 auto;"></div>

</body>
</html>
