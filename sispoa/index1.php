<?PHP
   session_start ();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
<title><title>SICPOA</title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>
<body>
<?PHP
//require('views/plantillas/header.php');
  if (isset($_SESSION["usuario_valido"]))
				 {
								$usuario_actual=$_SESSION["usuario_valido"];
								$nombre_user=$_SESSION["nom_usuario"];
								$tipo_user=$_SESSION["tipo_user"]
    
			?>
<script language="javascript">
 params  = 'width='+screen.width;
 params += ', height='+screen.height;
 params += ', top=0, left=0'
 params += ', fullscreen=yes'
 params += ',scrollbars=yes'
var ventana = window.self;
	ventana.opener = window.self;
	ventana.close();
	window.open("index2.php" , "Prueba" , params);
</script>
 <?php
 }
   else
   {
      ?>  <div style="display: block; left: 30%;" id="popup" class="popup">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='index.php' > <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  
                    </div> <?php 
   }
   ?>
</body>
</html>
