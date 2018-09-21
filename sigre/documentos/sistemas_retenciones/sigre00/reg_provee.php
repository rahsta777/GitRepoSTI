<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>	
<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="richard" /> 

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
<link rel="stylesheet" type="text/css" href="css/sddm.css" >
<link rel="stylesheet" type="text/css" href="css/style_audit.css" >
<script language="javascript" type="text/javascript" src="js/niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="css/niceforms-default.css" />
<script language= "JavaScript" src="js/jquery.maskedinput.js"></script>
<script language= "JavaScript" src="js/funciones.js"></script>
<link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
</head>
<body>
<div style="padding:25px;">
<form action="reg_provee2.php" method="post" >
        <div class="columna">
		<fieldset>
		     <legend><img src="images/iconos/edit_user.png" width="30px">Datos Prooveedor </legend>
		<dl>
			 <dt><div>Rif:</div></dt>
			    <dd><input type="text" name="prove_rif" id="prove_rif" placeholder="Ejem. J-12345678-0" /></dd>
			</dl>
        	<dl>
			 <dt><div>Razon Social:</div></dt>
                <dd><input type="text" name="prove_nom" id="prove_rif" size="25" maxlength="128" /></dd>
			</dl>
            <dl>
			 <dt><div>Direccion1:</div></dt>
			    <dd><input type="text" name="prove_dir1" id="prove_dir1" size="25" maxlength="128" /></dd>
			</dl>
            <dl>
			 <dt><div>Direccion2:</div></dt>
			    <dd><input type="text" name="prove_dir2" id="prove_dir2" size="25" maxlength="128" /></dd>
			</dl>
            <dl>
			 <dt><div>Lugar de servicio:</div></dt>
			    <dd>
				<select  name="prove_edo" id="gender">
				    <option value="administrador">Dist. Federal</option>
				    <option value="auditorlider">Aragua</option>
				    <option value="auditorlider">Carabobo</option>
         			<option value="usuario">Protuguesa</option> 
         			<option value="usuario">Barinas</option> 
				    <option selected>Ninguno</option>
			     </select>
			    </dd>
			</dl>
            
            
            <dl>
			 <dt><div>Representante:</div></dt>
			    <dd><input type="text" name="prove_repre" id="nomb_user" size="25" maxlength="128" /></dd>
			</dl>
			</dl>
			
			<dl>
			 <dt><div>Tlf. Contacto:</div></dt>
			    
			    <dd><input type="text" name="prove_contact" id="telefone" size="25" maxlength="128" /></dd>
			     
			</dl>
			<dl>
			 <dt><div>Email</div></dt>
			    
			    <dd><input type="text" name="prove_correo" id="nomb_user" size="25" placeholder="ejemplo@um.es" required pattern="[\w-\.]{0,25}@[\w-]{1,20}\.[\w]{2,3}" /></dd>
			     
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
