<?PHP
   session_start ();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Registro Usuario</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/stilo_div.css" rel="stylesheet" type="text/css" />
 
          <link href="css/estilo.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />
<!-- calendario --------------------------------------------------------->
<link rel="stylesheet" href="calendario/css/jquery.ui.all.css" type="text/css">
<script type="text/javascript" src="calendario/js/jquery.ui.core.js"></script>
<script type="text/javascript" src="calendario/js/jquery.ui.datepicker.js"></script>
<script>
                                    	$(function() {
                                    		$( "#capass" ).datepicker({ 
                                    		 autoSize: true,
                                                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                                                dayNamesMin: ['Dom', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                                                firstDay: 1,                                               monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                                                monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
                                                dateFormat: 'dd/mm/yy',
                                                changeMonth: true,
                                                changeYear: true,
                                    			yearRange: "-90:+0",
                                    			
                                    		
                                    		});
                                    		
                                    		
                                    		
                                    	});
  </script> 
  <!-- calendario --------------------------------------------------------->
</head>
 <!--script type="text/javascript">
  function validarDatos(){
   var mensaje="";
    var bandera=true;
    var codigo=document.getElementById("codigoval");
  if(codigo.value=="") bandera=false;
    else{
      var patronNom = /^[1-9]+\ [1-9]+\ [1-9]+/
      bandera=patronNom.test(codigo.value)
    }
  if(!bandera) mensaje="--Debe indicar nombre y apellidos\n(minimo tres palabras)";
  </script--->
  <script type="text/javascript"> 
  function foco(idElemento)
						{
					
 						document.getElementById("clvx").focus();
						}
	</script>
	
<body  onLoad=foco();>
<?PHP
  if (isset($_SESSION["usuario_valido"]))
   {
    $usuario_actual=$_SESSION["usuario_valido"];
    $nombre_user=$_SESSION["nom_usuario"];
    $tipo_user=$_SESSION["tipo_user"]
    
?>
<?php // recuperar datos
  $codval=(isset($_POST["clvx"])?$_POST["clvx"]:"");
  ?>
<?php
// Conexión a la base de datos
  
	include("f_fecha.php");
	if (isset($_POST["clvx"]) and !empty($_POST['login'])) 
		{
	 //------------------------ Datos de Entrada 
	   
            $clv_y=$_POST['clvx'];
	    $nomb_y=$_POST['nombx'];
            $tipouser_y=$_POST['nivel'];
	    $logi_y=$_POST['login'];
            $salt = substr ($logi_y,0,2);
	    $clave_crypt = crypt ($clv_y,$salt);
	     echo "clave: ".$clv_y."<br>";
	     echo "nomb: ".$nomb_y."<br>";
             echo "Login: ".$logi_y."<br>";
             echo "nivel: ".$tipouser_y."<br>";
             echo "Clave Encriptada: ".$clave_crypt."<br>";
            
			//-------------------------------------------
			/*$fec_ing_y=($_POST['fech_ingx']); , ,     , , , */
		//	$fec_ing_y=cambia_fecha_a_db($_POST['fech_ingx']); 
	//	echo "fecha: ".$fec_ing_y;
    include("Conexion1.php"); 
   
    
	$que1="INSERT INTO usuarios (nombre, usuario, pass, clave, permiso) VALUES ('$nomb_y', '$logi_y', '$clv_y', '$clave_crypt', '$tipouser_y' )";
	$result=mysql_query($que1);
			if (!$result){ ?>
                     <script type="text/javascript">
                        alert("Registro realizado...... pulse cualquier tecla para Contonuar");
                        </script>
                        <?php  }
					
					 
	
	}
	else {
							
								?>
		                         <script type="text/javascript">
									    alert("DEBE INGRESAR POR LO MENOS lOGIN Y CLAVE......");
								          </script>
                        <?php
					 		}
    
 ?>
<div>
<div >
  <div class="center" id="imagen"><!--<img src="mages/Top.jpg" height="100" width="900">--> </div>
</div>

<div  class="codrops-top">
<!--========================================================-->
<div class="cabezera">
<div id="alinear" >
       <div>
       
                <div id="dato_d" ><strong>Ingreso de Datos </strong></div>
                <div id="dato_d" ><?php echo $tipo_user; ?>
                <strong> Usuario:</strong><?php echo $nombre_user; ?></div>
                <div id="dato_d" > Fecha: <?php $fecha=date("d/m/Y"); echo $fecha ;?></div>
        </div>
        <ul class="menu4">
            <li>|<a href="#nogo"><b></b></a></li>
            <li>|<a href="menu.php"><b><strong>INICIO</strong></b></a></li>
            <li>|<a href="tab_reg_datos.php"><b><strong>Registro</strong></b></a></li>
            <li>|<a href="#nogo"><b><strong>Mantenimiento</strong></b></a></li>
            <li>|<a href="#nogo"><b><strong>Reporte</strong></b></a></li>
             <li>|<a href="#nogo"><b><strong>Administrar</strong></b></a></li>
           
        </ul>
</div>
</div>
<!--================================================================================================================-->
</div>
<div class="pweb" class="center" > 
        <form name="form" method="post" action="reg_user.php" class="contacto" id="dato">
                     <table> <tr><td><div ><p>Clave:
                                        <td><input type="password" id="clvx" name="clvx" size="20">
                                        </p></div>
                                        
                                        <tr><td><div ><p>Login :
                                        <td><input type="text" name="login" size="15">
                                        </div>
                                        <tr><td><div ><p>Nombre :
                                        <td><input type="text" name="nombx" size="25">
                                        </div>
                                                                                
                                        <tr><td><div> <p>Tipo de usuario:
                                        <td><select name="nivel">
                                          <option value="usuario">Usuario</option>
                                          <option value="admin">Administrador</option>
                                        </select>
                                        </p></div>
                                                  					
				                                       
                                                                             
                                       
                                        </table>
                                        <div class="contacto_menu">
                                        
                                        	<div> 
                                        	  <div align="center">
                                        	    <input type="submit" name="insertar registro" value="Enviar Datos"\>
                                        	  </div>
                                        	</div>
                                            
                                       		<div>
                                       		  <div align="center">
                                       		    <input type="reset" name="Limpiar" value="Restablecer"\>
                                   		      </div>
                                       		</div>
                                                                             
                                        </div>
                                        </form>
                                         
 <!-- modal content -->
  
                
<!--/div> <!--fin div limpia borde -->
</div><!--CONTENEDOR -->
</div>
<!--================================================================================================================-->
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
    <!-- Load jQuery, SimpleModal and Basic JS files -->

<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>

 <!-- Load jQuery, SimpleModal and Basic JS files -->
</body>
</html>