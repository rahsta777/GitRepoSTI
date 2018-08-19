<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Documento sin título</title>
<link href="css/estilo.css" rel="stylesheet">
<head>
</head>
<body>
<div class="cabezera">
     
        <a href="<?php echo base_url ('portada.php')?>">Inicio</a>
        |<?php $instrumento="viento"; ?><a href="tiendav/galeriav.php?variable1=<?php echo $instrumento; ?>">INICIO</a>
         <!--a href="<?php echo base_url ('tiendav/galeriav.php')?>">Viento</a-->
        |<?php $instrumento="percusion"; ?><a href="tiendap/galeriap.php?variable1=<?php echo $instrumento; ?>">REGISTRO</a>
         <!--a href="<?php echo base_url ('tiendap/galeriap.php')?>">Percusion</a--> 
        |<?php $instrumento="cuerda"; ?><a href="tiendac/galeriac.php?variable1=<?php echo $instrumento; ?>">REPORTES</a>
         <!--a href="<?php echo base_url ('tiendac/galeriac.php')?>">Cuerda </a--> 
        |<?php $instrumento="electronicos"; ?><a href="tiendae/galeriae.php?variable1=<?php echo $instrumento; ?>">OTROS</a>
         <!--a href="<?php echo base_url ('tiendae/galeriae.php')?>">Electronicos</a-->
                
               
              
        
        <form id="form1" name="form1" method="post" action="buscar_todos.php">
		       BUSCAR
		        <input type="text" style="background:url(img/fondo_input_g.png);width:100px;height:30px ;" name="buscar" id="buscar" />
		<input style="background:url(img/fondo_input_g.png);width:100px;height:30px ;"type="submit" name="aceptar" id="Aceptar" value="Aceptar" />
	      </form>
        </div>
</div>




