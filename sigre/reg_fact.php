<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>	
<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="richard" /> 

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
<link rel="stylesheet" type="text/css" href="css/sddm.css" >
<link rel="stylesheet" type="text/css" href="css/style_audit.css" >
<script type='text/javascript' src='js/func_menu.js'></script>
<script language="javascript" type="text/javascript" src="js/niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="css/niceforms-default.css" />
<script language= "JavaScript" src="js/checkcolor.js"></script>
<script language= "JavaScript" src="js/ajax_cambia_status.js"></script>

<link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
<!----  calendarios ---->
<script src="calendario/js/jquery-1.5.2.js" type="text/javascript"></script>
<link rel="stylesheet" href="calendario/css/jquery.ui.all.css" type="text/css">
<script type="text/javascript" src="calendario/js/jquery.ui.core.js"></script>
<script type="text/javascript" src="calendario/js/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="calendario/js/jquery.ui.widget.js"></script>
<!---------------------------------------------------------------------------->
 <script language= "JavaScript" src="js/jquery.maskedinput.js"></script>
<script language= "JavaScript" src="js/funciones.js"></script>
 <!------------------------------------------------------------------------------>
</head>

<body>
<div style="padding:25px;">
<form action="reg_fact2.php" method="post" >
        <div class="columna">
		<fieldset>
		     <legend><img src="images/iconos/edit_user.png" width="30px">Datos Factura </legend>
		<dl>
			 <dt><div>No.fact:</div></dt>
			    <dd><input type="text" name="id_fact" id="id_fact" size="25" maxlength="128" /></dd>
			</dl>
        	<dl>
			 <dt><div>Fecha de Factura</div></dt>
                <dd><input type="text"  id ="fecha" name="fecha_fact"  size="25" maxlength="128" /></dd>
                 <script>
	$(function() {
		$( "#fecha" ).datepicker({ 
		 autoSize: true,
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesMin: ['Dom', 'Lu', 'Ma', 'Mi', 'Je', 'Vi', 'Sa'],
            firstDay: 1,
            monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
			yearRange: "-90:+0",
			
		
		});
		
		
		
	});
	</script>
			</dl>
            <dl>
			 <dt><div>importe factura</div></dt><!--==required pattern="(^([0-9]{7,10})|^)$"=//// required pattern="(^([0-9]{1,4}/.[0-9]{1,3}/.[0-9]{1,3}/,[0-9]{1,2})|^)$"//// -->
			    <dd><input type="text" name="mont_fact" id="mont_fact" size="25" placeholder="formato Ejemp. 1.000,50"    /></dd>
			</dl>
             <dl>
			 <dt><div>Razon Social </div></dt>
			    <dd>
			    <?php
			     // Conexión a la base de datos
				 	include("conexion/Conexion1.php");
    				$link = Conectarse();
					    $cursor ="SELECT * from  tbl_prov";
		                $result=mysql_query($cursor, $link);
		                echo "<select name='id_provfac'>";
                               while($row = mysql_fetch_array($result)){
                                 ?>
                               <option value= "<?= $row['prov_rif']; ?> "><?=$row['prov_rif']." ".$row['razon_prov']; ?></option>
                                 <?php
                                   }
                                    ?>
                                    	<option selected>Ninguno </select></select> 

				
			    </dd>
			</dl>
            
            
            <dl>
			 <dt><div>Descripcion</div></dt>
			    <dd><input type="text" name="descr_fact" id="nomb_user" size="25" maxlength="128" /></dd>
			</dl>
			</dl>
			
			
            </fieldset>
            <div  class="columna">
		
		    <div STYLE="height:auto;width:40%;position:absolute">
		     <input type="submit" name="Enviar" id="submit" value="Enviar" />
		    </div>
		    </div>
            </div>
            <!------------------------------------------------------------>
            
        <!---............................................................-->
		    
            
		    
           
		</form>
</div>
</body>
	</html>	   
