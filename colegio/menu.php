<?PHP
   session_start ();
?>

<html >
<meta http-equiv="Content-Type" content="text/html; ;charset= chinese"> 
	<head>
	
		<title>
			[Menu Sistema]
		</title>
 
<link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />
<link href="css/stilo_div.css" rel="stylesheet" type="text/css" />
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<!-- calendario --------------------------------------------------------->

  
  
	</head>
	<body onLoad=focos();>
    
    <?PHP
   if (isset($_SESSION["usuario_valido"]))
   {
    $usuario_actual=$_SESSION["usuario_valido"];
    $nombre_user=$_SESSION["nom_usuario"];
    $tipo_user=$_SESSION["tipo_user"];
    
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
       
                <div id="dato_d" ><strong>Men&uacute </strong></div>
                <div id="dato_d" ><?php echo $tipo_user; ?>
                <strong> Usuario:</strong><?php echo $nombre_user; ?></div>
                <div id="dato_d" > Fecha: <?php $fecha=date("d/m/Y"); echo $fecha ;?></div>
        </div>
       
</div>
</div>
</div>
<!--========================================================-->

       
<div class="pweb" class="center"><!--pweb -->
           <div id="top" > 
                  <div id="header"> 
                     <div id="login-form" > </div>
                    
                    <h3>Sistema Integrado de Gesti&oacute;n y Control Alumnos  de Idioma Chinos 中國語言學校</h3>
                    <!--h2>集成系統，用於監控學生</h2-->
                  </div>
                	
        <div  class="content"  style="width:120%; height:40%;">		
        	
            <div id="dato_menu"><a href="tab_reg_datos.php" ><img  src="images/agre_user1.png">
			<input type='button' name='basic' value='Ingreso' class='basic'/></a></div>
            
              <?php if ($tipo_user == "admin"){ ?>        
            
            <div id="dato_menu"><a href="buscar.php" ><img  src="images/page_edit.png">
            <input type='button' name='basic' value='Mantenimiento' class='basic'/></a></div>
            <div id="dato_menu"><a href="reg_user.php" ><img  src="images/page_edit.png">
            <input type='button' name='basic' value='REgistrar' class='basic'/></a></div>
	    <?php }if(($tipo_user == "usuario") and ($tipo_user != "admin")){ ?>
	    <div id="dato_menu"><a href="buscar_repo.php" ><img  src="images/page_edit.png">
            <input type='button' name='basic' value='Reporte ' class='basic'/></a></div>
            <?php } ?>
          <div id="dato_menu"><a href="plan.php" ><img  src="images/database_add.png"  >
            <input type='button' name='basic' value='Plan de Evaluacion' class='basic'/></a></div>
            
            
           <div id="dato_menu"> <a href="buscarplan.php" ><img  src="images/calculator_accept.png">
            <input type='button' name='basic' value='Imprimir Plan' class='basic'/></a></div>
            
            
            
           
                  
            
	  </div>
                
                    
                    
                    
                		
                	
                    
                  <p><a href="javascript:close();"><img src="images/salir.gif" alt="Salir" width="20" height="20" border="0" align="right"></a></p>
            </div><!--fin top-->
               
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