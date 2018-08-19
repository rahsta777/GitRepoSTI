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
<form action="reg_nocomf2.php" method="post" >
        <div class="columna">
		<fieldset>
			<dl>
			 <dt><div>No. No Conformidad:</div></dt>
 <dd><input type="text" name="num_audit_noconfor" id="cod_audnoconfr" /></dd>
			</dl>
    <dl>
			 <dt><div>Fecha: </div></dt>
			    <dd><input type="text" name="fecha_desc" id="fecha3" class="fecha1" /></dd>
			 </dl>
    <dl>
			 <dt><div>Cedula Proponente:</div></dt>

								<dd> <?php    	$cursor1 ="SELECT * from i004t_personal";
                      	$result1=mysql_query($cursor1, $link);
                     		echo "<select name='num_proponte_nc'>";
                       while($row = mysql_fetch_array($result1)){
                    ?>
                       <option value= "<?= $row['num_ced_personal']; ?> "><?=$row['num_ced_personal']." ".$row["nom_personal"]; ?></option>
                   
                 <?php
                                $xnomb_prop=$row["nom_personal"];        }
                                    ?>
 																																			<option selected>Ninguno </select>
                                    </select>
           <dd><input type="hidden" name="nomb_pro1" id="nomb_pro1" value="<?php echo $xnomb_prop; ?>" /></dd>
			   </dd>
               
			</dl>
      <dl>
				<?php  /*	include("conexion/Conexion1.php");
   			$link = Conectarse(); */ ?>
			 <dt><div>Tipo de No Conformidad:</div></dt>
									<dd> <?php   	$cursor4 ="SELECT * from j009t_tipo_nc";
                      		$result4=mysql_query($cursor4, $link);
                     		echo "<select name='numero_tipo_nc'>";
                       while($row = mysql_fetch_array($result4)){
                    ?>
                       <option value= "<?= $row['num_tip_nc']; ?> "><?=$row['num_tip_nc']." ".$row["descr_nc"]; ?></option>
                 <?php
                                        }
                                    ?>
 																																			<option selected>Ninguno </select>
                                    </select>
			   </dd>
			</dl>
            <dl>
			 <dt><div>Descripcion:</div></dt>
                <dd><input type="text" name="descrip_noconfr" id="descrip_noconfr" size="10"  /></dd>
			</dl>
            <dl>
			 <dt><div>Clasificacion:</div></dt>
			    <dd><input type="text" name="clasifi_noconfor" id="clasifi_noconfor" size="25" maxlength="128" /></dd>
			</dl>
            <dl>
			 <dt><div>Tificacion:</div></dt>
                <dd><input type="text" name="num_tipificnoconfr" id="num_rol" size="10"  /></dd>
			</dl>
            <dl>
			 <dt><div>Unidad o &Aacute;rea:</div></dt>
<dd> <?php       	 
                                   
                                    	$cursor2 ="SELECT * from i005t_unidad";
                                    	$result2=mysql_query($cursor2, $link);
                                    		echo "<select name='num_unidad_nc'>";
                                     while($row = mysql_fetch_array($result2)){
                                            ?>
                                           <option value= "<?= $row['num_unidad']; ?> "><?=$row['num_unidad']." ".$row["descrip_unidad"]; ?></option>
                                            <?php
                                        }
                                    ?>
 																																			<option selected>Ninguno </select>
                                    </select>
			   </dd>

			    


			</dl>
            <dl>
			 <dt><div>Numero de Requierente:</div></dt>
               	<dd> <?php    	$cursor3 ="SELECT * from j011t_requiere";
                      	$result3=mysql_query($cursor3, $link);
                     		echo "<select name='num_requiere_nc'>";
                       while($row = mysql_fetch_array($result3)){
                    ?>
                       <option value= "<?= $row['num_requiere']; ?> "><?=$row['num_requiere']." ".$row["descrip_requiere"]; ?></option>
                 <?php
                                        }
                                    ?>
 																																			<option selected>Ninguno </select>
                                    </select>
			   </dd> 



            <dl>
			 <dt><div>Recomendaciones:</div></dt>
			    <dd><input type="text" name="recomendaciones" id="desc_noconfr" size="25" maxlength="128" /></dd>
			</dl>
            <dl>
			 <dt><div>Numero de No Conformidad:</div></dt>
                <dd><input type="text" name="num_noconfr" id="num_rol" size="10"  /></dd>
			</dl>
            <dl>
			 <dt><div>Cedula Evaluador:</div></dt>

			    <dd> 
<?php    	$cursor4 ="SELECT * from j004t_ced_evaluador";
                      	$result4=mysql_query($cursor4, $link);
                     		echo "<select name='cedula_evalua'>";
                       while($row4 = mysql_fetch_array($result4)){
                    ?>
                       <option value= "<?= $row4['num_ced_evaluadr']; ?> "><?=$row4['num_ced_evaluadr']." ".$row4["descrp"]; ?></option>
                 <?php
                                        }
                                    ?>
 																																			<option selected>Ninguno </select>
                                    </select>

</dd>
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
