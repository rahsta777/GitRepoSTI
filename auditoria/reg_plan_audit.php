<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>	
<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Leidy" /> 

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >

        </head>
<body>
<div style="padding:25px;">
<form action="reg_plan_audit2.php" method="post" >
        <div class="columna">
		<fieldset>
		     <legend><img src="images/HP-MSN1.png" width="30px">Programacion Auditoria </legend>
	
        	<dl>
			 <dt><div>Numero de Plan:</div></dt>
     <dd>  <input type="text" name="numplan_audit" id="cod_plan" size="15"  />
			   </dd>
                
			</dl>
            
            <dl>
			 <dt><div>Descripci&oacute;n:</div></dt>
			    <dd><input type="text" name="desc_plan" id="desc_plan" size="15" maxlength="20" /></dd>
			</dl>
            <dl>
			 <dt><div>N&uacutemero de Actividad:</div></dt>
			    			</dl>
    <dd> <?php    
			// Conexión a la base de datos
    					include("conexion/Conexion1.php");
   						 $link = Conectarse();   
                                   
          $cursor ="SELECT * from  j002t_activ_proc";
          $result=mysql_query($cursor, $link);
          echo "<select name='num_activ_plan'>";
          while($row = mysql_fetch_array($result)){
             ?>
             <option value= "<?= $row['num_activ']; ?> "><?=$row['num_activ']." ".$row["desc_nom_actvi"]; ?></option>
              <?php                                    }
              ?>
                          	<option selected>Ninguno </select>          </select>
			   </dd>

<dt><div>N&uacutemero de Requisito:</div></dt>
<dd> <?php       
                                   
                                    	$cursor ="SELECT * from  i001t_requisitos";
                                    	$result=mysql_query($cursor, $link);
                                    		echo "<select name='num_Requisito_plan'>";
                                     while($row = mysql_fetch_array($result)){
                                            ?>
                                           <option value= "<?= $row['num_requisito']; ?> "><?=$row['num_requisito']." ".$row["descrip_requisito"]; ?></option>
                                            <?php
                                        }
                                    ?>
                                  	<option selected>Ninguno </select>  </select>
			   </dd>

			    
			</dl>

<dt><div>N&uacutemero de Cargo: </div></dt>

<dd> <?php       
                                   
                                    	$cursor ="SELECT * from   i006t_cargo";
                                    	$result=mysql_query($cursor, $link);
                                    		echo "<select name='num_cargo_plan'>";
                                     while($row = mysql_fetch_array($result)){
                                            ?>
                                           <option value= "<?= $row['num_cargos']; ?> "><?=$row['num_cargos']." ".$row["descrip_cargos"]; ?></option>
                                            <?php
                                        }
                                    ?>
                                    	<option selected>Ninguno </select></select>
			   </dd>




			    
			</dl>

<dt><div>N&uacutemero de Unidad:</div></dt>
<dd> <?php       
                                   
                                    	$cursor ="SELECT * from   i005t_unidad";
                                    	$result=mysql_query($cursor, $link);
                                    		echo "<select name='num_unid_plan'>";
                                     while($row = mysql_fetch_array($result)){
                                            ?>
                                           <option value= "<?= $row['num_unidad']; ?> "><?=$row['num_unidad']." ".$row["descrip_unidad"]; ?></option>
                                            <?php
                                        }
                                    ?>
                                   	<option selected>Ninguno </select></select>
			   </dd>

			    
			</dl>



<dt><div>Fecha :</div></dt>
			    <dd><input type="text" name="fech_plan"   id="fecha2"  class="fecha1" /></dd>
			</dl>

<dt><div>No.C&eacutedula:</div></dt>
			    <dd><input type="text" name="num_cedula_plan" id="ced1"  class="cedulaplan" size="15" /></dd>
		<div class="msncedplan" id="msn" style="display:none"> La C&eacute;dula debe ser ingresada con el formato (E)o V-99.999.999</div>
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
