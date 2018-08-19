<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>	
<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Leidy" /> 

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />



</head>
<body>
<div style="padding:25px;">
	<?php  	include("conexion/Conexion1.php");
   						 $link = Conectarse();  ?>
<form action="reg_nocomf_tipo2.php" method="post" >
        <div class="columna">
		<fieldset>
		    
	
        	<dl>
			 <dt><div>Numero de Auditoria:</div></dt>

<dd> <?php       
                                   
                                    	$cursor ="SELECT * from  d003t_detalle_aud";
                                    	$result=mysql_query($cursor, $link);
                                    		echo "<select name='num_audit_noconfor_'>";
                                     while($row = mysql_fetch_array($result)){
                                            ?>
                                           <option value= "<?= $row['num_auditoria1']; ?> "><?=$row['num_auditoria1']." ".$row[" 	tex_Descrp"]; ?></option>
                                            <?php
                                        }
                                    ?>
 																																			<option selected>Ninguno </select>
                                    </select>
			   </dd>






      
			</dl>
            <dl>
			 <dt><div>Fecha Auditoria Nocomformidad</div></dt>
			    <dd><input type="text" name="cargo_desc" id="desc_noconfr" size="25" maxlength="128" /></dd>
			</dl>
            <dl>
			 <dt><div>Cedula Proponente:</div></dt>
      <dd> <?php       
                                   
                                    	$cursor ="SELECT * from  d003t_detalle_aud";
                                    	$result=mysql_query($cursor, $link);
                                    		echo "<select name='num_audit_noconfor_'>";
                                     while($row = mysql_fetch_array($result)){
                                            ?>
                                           <option value= "<?= $row['num_auditoria1']; ?> "><?=$row['num_auditoria1']." ".$row[" 	tex_Descrp"]; ?></option>
                                            <?php
                                        }
                                    ?>
 																																			<option selected>Ninguno </select>
                                    </select>
			   </dd>          



<dd><input type="text" name="num_noconfr" id="num_rol" size="10"  /></dd>
			</dl>



            <dl>
			 <dt><div>Estado:</div></dt>
			    <dd><input type="text" name="cargo_desc" id="desc_noconfr" size="25" maxlength="128" /></dd>
			</dl>
            <dl>
			 <dt><div>Descripcion:</div></dt>
                <dd><input type="text" name="num_noconfr" id="num_rol" size="10"  /></dd>
			</dl>
            <dl>
			 <dt><div>Clasificacion:</div></dt>
			    <dd><input type="text" name="cargo_desc" id="desc_noconfr" size="25" maxlength="128" /></dd>
			</dl>
            <dl>
			 <dt><div>Tificacion:</div></dt>
                <dd><input type="text" name="num_noconfr" id="num_rol" size="10"  /></dd>
			</dl>
            <dl>
			 <dt><div>Tipo Unidad Conformidad:</div></dt>
			    <dd><input type="text" name="cargo_desc" id="desc_noconfr" size="25" maxlength="128" /></dd>
			</dl>
            <dl>
			 <dt><div>Numero de Requierente:</div></dt>
                <dd><input type="text" name="num_noconfr" id="num_rol" size="10"  /></dd>
			</dl>
            <dl>
			 <dt><div>Recomendaciones:</div></dt>
			    <dd><input type="text" name="cargo_desc" id="desc_noconfr" size="25" maxlength="128" /></dd>
			</dl>
            <dl>
			 <dt><div>Numero de No Conformidad:</div></dt>
                <dd><input type="text" name="num_noconfr" id="num_rol" size="10"  /></dd>
			</dl>
            <dl>
			 <dt><div>Cedula Evaluador:</div></dt>
			    <dd><input type="text" name="cargo_desc" id="desc_noconfr" size="25" maxlength="128" /></dd>
			</dl>
            
           
           
			 
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
