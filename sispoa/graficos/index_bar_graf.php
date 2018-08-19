<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Pie Chart</title>
         <!--link href="../css/cake.generic.css"    type="text/css" rel="stylesheet"-->
		<!--script type="text/javascript"   src="../include/js/jquery.min.js">   </script-->
		<!--=========================================================================================-->
		<script type="text/javascript">
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'container',
                    type: 'bar'

                },

                title: {
                    text: 'Avances POA Por Direccion'
                },
                 subtitle: {
                        text: 'CONTRALORIA DE EDO. ANZOATEGUI',
                        x: -20
                    },
                 xAxis: {
                        categories: []
                    },

                     yAxis: {
                        title: {
                            text: '% Avances Proyectos'
                        },
                        plotLines: [{
                                value: 0,
                                width: 1,
                                color: '#808080'
                            }]
                    },
                    
                     tooltip: {
                        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<b>{point.y}</b> of total<br/>'
                    },
           /*tooltip: {
                   formatter: function() {
                         return '<b>'+ this.point.name +'</b>: '+ this.y +' %';
                    }
                },*/
    
               plotOptions: 

                        {

                             bar: {
                                 allowPointSelect: true,
                        cursor: 'pointer',
                            dataLabels: {
                                        enabled: true,
                         formatter: function () {
                        return this.y + '%';
                                                }


                                        }
                                    }
                        },
                 /*  plotOptions: {
                        series: {
                            borderWidth: 0,
                            dataLabels: {
                                enabled: true,
                                format: '{point.y}'
                            }
                        }
                    },  */

                         legend: {
                                layout: 'vertical',
                                align: 'right',
                                verticalAlign: 'top',
                                x: -40,
                                y: 12,
                                floating: true,
                                borderWidth: -1,
                                backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                                shadow: true
                            },
                    credits: {
                    enabled: false
                },
               series: []
        }
           /* $.getJSON("graficos/data_bar_graf.php", function(json) {
                
                options.series[0].data = json;
                chart = new Highcharts.Chart(options);
            });*/
            
                  $.getJSON("graficos/data_bar_graf.php", function(json) {
                    options.xAxis.categories = json[0]['data']; //xAxis: {categories: [] data_bar_graf.php}
                    options.series[0] = json[1];
                    //alert("Valor jason de las Dir. ["+json[0]['data']+"] % los avance ["+json[1]['data']+"]");//muestra los valore de X
                    chart = new Highcharts.Chart(options);
                    
                });
            
            
        });   
        </script>

      	  
		 
<!--script type="text/javascript" src="../include/js/highcharts.js"></script>

<script type="text/javascript" src="../include/js/themes/grid.js"></script>

<script type="text/javascript" src="../include/js/modules/exporting.js"></script-->

		
        
	</head>
	<body>
	
		 <div id="container" style="width: 700px; height: 400px; margin: 1 auto"></div>
		
	</body>
</html>
