<?PHP
   session_start ();
?>

<html>
<head>
<title>REgistro Usuario/Acceso</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/stilo_div.css" rel="stylesheet" type="text/css" />
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
    include("Conexion1.php"); 
   $link=Conectarse(); 
	include("f_fecha.php");
	if (isset($_POST["clvx"])and ($_POST["clvx"]!="")) 
		{
			//------------------------ Datos de Entrada 
			$clv_y=$_POST['clvx'];
			$nomb_y=$_POST['nombx'];
			$tipouser_y=$_POST['nivel'];
			$privy=($_POST['status_user']);
			$logi_y=($_POST['login']);
			$salt = substr ($logi_y,0,2);
			$clave_crypt = crypt ($clv_y,$salt);
			//-------------------------------------------
			/*$fec_ing_y=($_POST['fech_ingx']); , ,     , , , */
			$fec_ing_y=cambia_fecha_a_db($_POST['fech_ingx']); 
	    
	    echo "clave: ".$clv_y."<br>";
	     echo "nomb: ".$nomb_y."<br>";
             echo "Login: ".$logi_y."<br>";
             echo "nivel: ".$tipouser_y."<br>";
             echo "Clave Encriptada: ".$clave_crypt."<br>";
	
			$query="insert into usuarios (nombre, usuario, pass, clave, permiso)) 
            VALUES ('$nomb_y', '$logi_y', '$clv_y', '$clave_crypt', '$tipouser_y')";
			$result=mysql_query($query);
			if (!$result){
					?>
                     <script type="text/javascript">
                        alert("problemas al registrar");
                        </script>
                        <?php }
						else {
							$affected = mysql_affected_rows($result);
								?>
		                          <script type="text/javascript">
                                  alert("Registro realizado...... pulse cualquier tecla para Contonuar");
                                 </script>
                        <?php
					 		}
	
	}		
 ?>
<div >
  <div  id="imagen"></div>
</div>
<div  class="codrops-top">
    
</div>

<div  class="pweb">

<!---====================Menu de navegacion=====================-->
    
            
           
            <div id='basic-modal'>
            <li><a href="#"><input type="button" name='basic' value='Ver Registros' class='basic'/></a></li>
            </div> 
        
<!---=========================================-->
       
       
                           
                
                <form name="form" method="post" action="reg_user.php" class="contacto" id="dato">
                     <table> <tr><td><div ><p>Clave:
                                        <td><input type="password" id="clvx" name="clvx" size="20">
                                        </p></div>
                                        
                                        <tr><td><div ><p>Login :
                                        <td><input type="text" name="login" size="15">
                                        </div>
                                        <tr><td><div ><p>Nombres :
                                        <td><input type="text" name="nombx" size="25">
                                        </div>
                                        
                                        
                                        <tr><td><div> <p>Tipo de usuario:
                                        <td><select name="nivel">
                                          <option value="usuario">Usuario</option>
                                          <option value="admin">Administrador</option>
                                        </select>
                                        </p></div>
                                                  					
				                                       
                                       <tr><td> <div><p>Fecha de Ingreso:
                                        <td><input type="text" name="fech_ingx" size="12" id="capass">
                                        </p></div>
                                        
                                        <tr><td> <div><p>Status:
                                           <td> <select name="status_user">
                                        	<option>Activo</option>
                                            <option>Inactivo</option>
                                            <option selected>Ninguno 
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
  	<div id="basic-modal-content">
			
    <?php

   include("Conexion1.php"); 
   $link3=Conectarse(); 
           $sql00="SELECT * FROM usuarios";
	    $resultado_sql00=mysql_query($sql00, $link3);
                $nfilas=mysql_num_rows($resultado_sql00);
	print ("<TABLE A align='center' cellspacing='0'cellpadding=7 width='400px' border='0' style='font-size:12px'>\n");
                           
							 print ("<TR  class='contacto_v'>\n");
							 print ("<TH  >Login:</TH>\n");
							 print ("<TH >Nombre</TH>\n");
                             
                             
                              print ("<TH >Tipo usuario</TH>\n");
										
							 print ("</TR>\n");
							 for ($i=0; $i<$nfilas; $i++)
												{
												$row00=mysql_fetch_array($resultado_sql00);
				         // printf("<tr bgcolor='#FFFFFF'><td><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s&nbsp;</td>  <td><font size='2'>&nbsp;%s&nbsp;</td> <td><font size='2'>&nbsp;%s&nbsp;</td></tr>",$row["id"], $row["nomb_exp"].$row["apell_exp"],$row["origen_exp"],$row["nomb_proy_exp"]);
		   										print ("<TR  align='center' >\n");
                                                print ("<TD>" . $row00['usuario'] . "</TD>\n");
												print ("<TD>" . $row00['nombre'] . "</TD>\n");
												
                                               
												print ("<TD>" . $row00['permisos'] . "</TD>") ;
												
								              
												print ("</TR>\n");
								
					                           }
              print ("</TABLE>");                                 
?>

</div>		
			
             
    
     <!-- preload the images -->
		<div style='display:none'>
			<img src='img/basic/x.png' alt='' />
		</div> 
     <!------------------------------------------------------->             
                        
                
<!--/div> <!--fin div limpia borde -->

</div><!--pweb -->
<?php 
}
  if(isset($_SESSION["tipo_user"]) and ($_SESSION["tipo_user"])=='Usuario')
  {
      ?>  <div id="fila_conectar">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='menup.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  </div> <?php
   }
    elseif(!isset($_SESSION["tipo_user"]))
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