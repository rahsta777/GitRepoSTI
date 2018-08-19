<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>	
<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Leidy" /> 

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >

</head>
<body>
<div style="padding:25px;">
<form action="reg_grcia_audit2.php" method="post" >
        <div class="columna">
		<fieldset>
		     	
        	<dl>
			 <dt><div>Numero de Gerencia:</div></dt>
                <dd><input type="text" name="num_grcia_autar" id="num_grcia_autar" size="25" maxlength="128" onchange="numero()"/></dd>
			</dl>
            <dl>
			 <dt><div>Detalle:</div></dt>
			    <dd><input type="text" name="descrp_grcia_autar" id="descrp_grcia_autar" size="25" maxlength="128" /></dd>
			</dl>
            
            <dl>
			 <dt><div>N&uacutemero de cargo:</div></dt>

			    <dd>
<?php       	include("conexion/Conexion1.php");
   						 $link = Conectarse();   
                                   
                                    	$cursor ="SELECT * from   i006t_cargo";
                                    	$result=mysql_query($cursor, $link);
                                    		echo "<select name='num_carg_detallex'>";
                                     while($row = mysql_fetch_array($result)){
                                            ?>
                                           <option value= "<?= $row['num_cargos']; ?> "><?=$row['num_cargos']." ".$row["descrip_cargos"]; ?></option>
                                            <?php
                                        }
                                    ?>
                                    	<option selected>Ninguno </select></select>
	</dl>
           
            <dl>
			 
    <dl>
			 
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
