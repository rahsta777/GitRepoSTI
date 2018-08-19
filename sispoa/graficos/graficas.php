

<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="../views/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="./views/css/style1.css" />
        <link rel="stylesheet" href="./views/css/bootstrap.min.css">
        <link rel="stylesheet" href="./views/css/jquery-ui.css">
        <link type="text/css" href="./views/css/css_paginar/styles.css" rel="stylesheet" />
<title></title>
<script type="text/javascript"   src="../include/js/jquery.min.js">   </script>
</head>
	
<script type="text/javascript">
 $(document).ready(function(){
 	//var new newRow;
 		//$("#contenedor").html("");
		  $.getJSON("data_bar_graf.php", function(json) {
		  tags = json[0]['data']; //xAxis: {categories: [] data_bar_graf.php}
		  values = json[1]['data'];
		  alert("paso valor jason para serie X [ "+tags+" [ y Para La Y [ "+values+" ] ");
		
//$(newRow).appendTo("#tablajson tbody");

		var length=100;
		 //<div><div id ="container" style="background-color: #6877AB;padding:2px;border-radius:10px 20px 20px 10px; border-color:#57d0b2;width="300" ; >
		for (i=0;i<tags.length;i++)
		{
			 //alert("paso valor jason para serie X [ "+tags[i]+" [ y Para La Y [ "+values[i]+" ] ");
			$("#contiene").append('<div  style="margin-right:5px;margin-left:25px;  "font-size: 10pt; color: #AAAAAA'+values[i]+'   ;">'+tags[i]+': </div><div style="font-size: 10pt; color:#204ed2;margin-right:5px;margin-left:5px; "><img src="pixel.png" width="'+values[i]/100*length+'%" height="4%"  style="border-radius:10px 20px 20px 10px;box-shadow: 1px 0px 10px #000; border-color: #204ed2;background:#48'+[i*1]+'883;"> '+values[i]+'%</div>')
			
		}
		});
});
</script>
<body>
Graficas de Barra
	<div style="border-radius:10px 60px 60px 10px; background:#98B4E3;width:40%;height:80%;padding:2px ;margin:40px;opacity:0.9; box-shadow: 1px 0px 10px #000;"><div id="contiene" style="border-radius:10px 60px 60px 10px;"></div></div>
	<div style="float:left;position:absolute;right:600px ;top:100px; ">Leyenda</div>	
		
</body>
</html>
</head>
