<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>	
<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Leidy" /> 

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >

</head>
<body>
<div style="padding:25px;">
<?php       
               include("conexion/Conexion1.php");
              $link = Conectarse();
?>
<form action="reg_personal_audit2.php" method="post" >
        <div class="columna">
		<fieldset>
		     
	
        	<dl>
			 <dt><div>Numero de Cedula:</div></dt>
    <dd><input type="text" name="num_ced_person" id="cedula"  class="cedulapersonal" onchange="valcedula()" /></dd>
     <div class="msnpersonal" id="msn" style="display:none"> La C&eacute;dula debe ser ingresada con el formato (E)o V-99.999.999</div>			
</dl>
            <dl>
			 <dt><div>Nombre:</div></dt>
			    <dd><input type="text" name="nomb_descrp_person" id="nomb_descrp_person" size="25" maxlength="45" onchange="palabras();" /></dd>
			</dl>
            
            <dl>
			 <dt><div>N&uacutemero de cargo:</div></dt>
			    <dd>
<?php       
                                   
                                    	$cursor0 ="SELECT * from i006t_cargo";
                                    	$result0=mysql_query($cursor0, $link);
                                    	echo "<select name='num_carg_detallex'>";
                                     while($row0 = mysql_fetch_array($result0)){
                                            ?>
                                             <option value="<?=$row0["num_cargos"]; ?>"><?=$row0["descrip_cargos"]; ?></option>
                                            <?php
                                        }
                                    ?>
                                    	<option selected>Ninguno </select>


					</dd>
			</dl>
            <dl>
			 <dt><div>Indicador:</div></dt>
			    <dd><input type="text" name="indica_person" id="indica_person" size="5" maxlength="15" /></dd>
			</dl>
            
			 <dt><div>Gerencia</div></dt>
            <dd> <?php       
                           $cursor ="SELECT * from j007t_gerencia ";
                           $result=mysql_query($cursor, $link);
                           echo "<select name='grcia_person'>";
                           while($row = mysql_fetch_array($result)){
                                     ?>
                                             <option value="<?=$row["num_gerencia"]; ?>"><?=$row["descrip"]; ?></option>
                                            <?php
                                        }
                                    ?>
                                    	<option selected>Ninguno </select>
			   </dd>
			</dl>
          
			 <dt><div>No. de Unidad</div></dt>
             <dd> <?php  echo " <select name='unidad_audit'>";
	  
	$cursor2 = mysql_db_query("auditasql", "SELECT 	num_unidad, descrip_unidad FROM i005t_unidad", $link);
	while ($datos = mysql_fetch_array($cursor2))
	{ echo "<option value='".$datos[0]."'>".$datos[1];}
	mysql_free_result($cursor2);
	?>	<option selected>Ninguno </select>
			    </dd>
			</dl>
            
			 <dt><div>No.Rol:</div></dt>
             <dd> <?php  echo " <select name='rol_audit'>";
	  
	$cursor2 = mysql_db_query("auditasql", "SELECT num_rol, descrp_rol FROM j001t_roles", $link);
	while ($datos = mysql_fetch_array($cursor2))
	{ echo "<option value='".$datos[0]."'>".$datos[1];}
	mysql_free_result($cursor2);
	?>	<option selected>Ninguno </select></dd>
			</dl>
           	
            </fieldset>
            </div>
            <!----------------------------------------------------------->
           
        <!---............................................................-->
		    
            <fieldset class="action">
		     <input type="submit" name="Enviar" id="submit" value="Enviar" />
		    </fieldset>
		    
           
		</form>
</div>
</body>
	</html>	   
