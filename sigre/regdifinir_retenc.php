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

<link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
</head>
<body>
<div style="padding:25px;">
<form action="regdifinir_retenc2.php" method="post" >

        <div class="columna">
		<fieldset>
		     <legend><img src="images/iconos/edit_user.png" width="30px">Definir Retenciones</legend>
		<dl>
			 <dt><div>C&oacute;digo:</div></dt>
			    <dd><input type="text" name="codi_retenc" id="codi_retenc" size="25" placeholder="Ejem. EPS" /></dd>
			</dl>
        	<dl>
			 <dt><div>Descripcion:</div></dt>
                <dd><input type="text" name="descr_retenc" id="descr_retenc" size="25" maxlength="45" /></dd>
			</dl>
            <dl>
			 <dt><div>Valor Retencion:</div></dt>
                <dd><input type="text" name="valor_retenc" id="valor_retenc" size="25" maxlength="128" /></dd>
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
