<html lang="en">
<head>
    <title id='Description'>jqxChart Bar Series Example</title>
    <!--link rel="stylesheet" href="styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="jqxcore.js"></script>
    <script type="text/javascript" src="jqxchart.js"></script>
    <script type="text/javascript" src="jqxdata.js"></script-->
   
    <script type="text/javascript">
        $(document).ready(function () {

            // prepare chart data
            var sampleData = [
                { Country: 'China', Population: 1347350000, Percent: 19.18},
                { Country: 'India', Population: 1210193422, Percent: 17.22},
                { Country: 'USA', Population: 313912000, Percent: 4.47},
                { Country: 'Indonesia', Population: 237641326, Percent: 3.38},
                { Country: 'Brazil', Population: 192376496, Percent: 2.74}];

            // prepare jqxChart settings
            var settings = {
                title: "Top 5 most populated countries",
                description: "Statistics for 2011",
                showLegend: true,
                enableAnimations: true,
                padding: { left: 20, top: 5, right: 20, bottom: 5 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 10 },
                source: sampleData,
                categoryAxis:
                    {
                        dataField: 'Country',
                        showGridLines: true,
                        flip: false
                    },
                colorScheme: 'scheme01',
                seriesGroups:
                    [
                        {
                            type: 'column',
                            orientation: 'horizontal',
                            columnsGapPercent: 100,
                            toolTipFormatSettings: { thousandsSeparator: ',' },
                            valueAxis:
                            {
                                flip: true,
                                unitInterval: 100000000,
                                maxValue: 1500000000,
                                displayValueAxis: true,
                                description: '',
                                formatFunction: function (value) {
                                    return parseInt(value / 1000000);
                                }
                            },
                            series: [
                                    { dataField: 'Population', displayText: 'Population (millions)' }
                                ]
                        }
                    ]
            };

            // setup the chart
            $('#jqxChart').jqxChart(settings);
        });
    </script>
</head>
<body class='default'>
    <div id='jqxChart' style="width:580px; height:400px; position: relative; left: 0px; top: 0px;">
    </div>
</body>
</html>
