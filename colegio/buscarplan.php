<?PHP
   session_start ();
?>

<!DOCTYPE html>
<html>
<head>
<title> Listado</title>
<!-------------------------------------------------------------------------->
<link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
<!-- Page styles -->
<link type='text/css' href='css/stilo_div.css' rel='stylesheet' media='screen' /> 
<!-- Contact Form CSS files -->
<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />
 <link href="css/estilo.css" rel="stylesheet" type="text/css" />
<!----------------------------------------------------------------------------->
<!-- Load jQuery, SimpleModal and Basic JS files -->
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>
  
  <script type="text/javascript">
function consulta_ajax()
 {
    	var var1=(document.getElementById("buscar").value);
    	
        
  if ((var1===0))
  { 
    alert("Debe llenar todos los campos De busqueda por lo menos 3 caracteres")+var1.length;
  }
  else{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("la_consulta").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","localizarplan.php?var1="+var1,true);
xmlhttp.send();
}
	}
    
</script>
	</head>
    
	<body>
    
    <?PHP
   if (isset($_SESSION["usuario_valido"]))
   {
    $usuario_actual=$_SESSION["usuario_valido"];
    $nombre_user=$_SESSION["nom_usuario"];
    $tipo_user=$_SESSION["tipo_user"]
    
?>
  


    

    
    
    <!--==================================================== Inicio     del      formulario==============================---->
    <!--=================================================================================================================---->
<div style="left: auto;" >   
<div >
  <div class="center" id="imagen"><!--<img src="mages/Top.jpg" height="100" width="900">--> </div>
</div>
</div>
<!--========================================================-->
<div  class="codrops-top">

<div class="cabezera">
<div id="alinear" >
       <div>
       
                <div id="dato_d" ><strong>Imprimir Plan </strong></div>
                <div id="dato_d" ><?php echo $tipo_user; ?>
                <strong> Usuario:</strong><?php echo $nombre_user; ?></div>
                <div id="dato_d" > Fecha: <?php $fecha=date("d/m/Y"); echo $fecha ;?></div>
        </div>
        <ul class="menu4">
            <li><b></b><a href="#nogo"></a></li>
            <li><a href="menu.php"><b><strong>INICIO</strong></b></a></li>
            <li><a href="tab_reg_datos.php"><b><strong>Registro</strong></b></a></li>
            <li><a href="plan.php"><b><strong>Plan de Eval.</strong></b></a></li>
            <li><a href="buscar.php"><b><strong>Reporte</strong></b></a></li>     
            </ul>
</div>
</div>
</div>
<!--========================================================-->

       
<div class="pweb" class="center"><!--pweb -->
        <form action="menu.php" method="POST" >
                                    <div id="box_reg" style="font-size:14px;">
                                      
                                        <strong>Indique Cedula o Espacio:</strong><input type="text"  name="buscar" id="buscar" size="10" style="background:url(images/fondo_input/fondo_input.png);width:100px;height:30px ;" onkeyup="consulta_ajax()">
                                        
                                   </div>              
        <div id="la_consulta"></div>
		
               
        
                    
</div><!--pweb -->
                    <?php
 }
   else
   {
      ?>  <div id="fila_conectar">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='acceso.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  </div> <?php
   }
   ?>
   

</body>
</html>