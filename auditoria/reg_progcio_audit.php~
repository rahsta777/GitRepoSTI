<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>	
<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Leidy" /> 

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >
<script src="calendario/js/jquery-1.5.2.js" type="text/javascript"></script>
<link rel="stylesheet" href="calendario/css/jquery.ui.all.css" type="text/css">
<script type="text/javascript" src="calendario/js/jquery.ui.core.js"></script>
<script type="text/javascript" src="calendario/js/jquery.ui.datepicker.js"></script>
<script>
                                    	$(function() {
                                    		$( "#fecha" ).datepicker({ 
                                    		 autoSize: true,
                                                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                                                dayNamesMin: ['Dom', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                                                firstDay: 1,
                                                monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                                                monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
                                                dateFormat: 'dd/mm/yy',
                                                changeMonth: true,
                                                changeYear: true,
                                    			yearRange: "-90:+0",
                                    			
                                    		
                                    		});
                                    		
                                    		
                                    		
                                    	});
  </script> 
<!----------->


        </head>
<body>
<div style="padding:25px;">
<form action="reg_progcio_audit2.php" method="post" >
        <div class="columna">
		<fieldset>
		     <legend><img src="images/HP-MSN1.png" width="30px">Programacion Auditoria </legend>
	
        	<dl>
			 <dt><div>Numero de Detalle Programacion:</div></dt>
                <dd><input type="text" name="num_detall_prog" id="num_unit" size="10" maxlength="128" /></dd>
			</dl>
            
            <dl>
			 <dt><div>Descripci&oacute;n:</div></dt>
			    <dd><input type="text" name="num_desc_prog" id="descp_unit" size="25" maxlength="35" /></dd>
			</dl>
            <dl>
			 <dt><div>N&uacutemero de cargo:</div></dt>
			    <dd> <?php       
               include("conexion/Conexion1.php");
              $link = Conectarse();                      
                                    	$cursor ="SELECT * from  i006t_cargo";
                                    	$result=mysql_query($cursor, $link);
                                    		echo "<select name='num_carg_prog'>";
                                     while($row = mysql_fetch_array($result)){
                                            ?>
                                             <option value= "<?= $row['num_cargos']; ?> "><?=$row['num_cargos']." ".$row["descrip_cargos"]; ?></option>
                                            <?php
                                        }
                                    ?>
                                    	<option selected>Ninguno </select></select>
			   </dd>

   <dt><div>N&uacutemero de filial:</div></dt>
			    <dd> <?php       
                                    
                                    	$cursor1 ="SELECT * from  j006t_filiales";
                                    	$result=mysql_query($cursor1, $link);
                                    		echo "<select name='num_filial_prog'>";
                                     while($row = mysql_fetch_array($result)){
                                            ?>
                                             <option value= "<?= $row['num_filial']; ?> "><?=$row['num_filial']." ".$row["descrp_filial"]; ?></option>
                                            <?php
                                        }
                                    ?>
                                   	<option selected>Ninguno </select> </select>
			   </dd>

<dt><div>N&uacutemero de Gerencia:</div></dt>
<dd> <?php       
                                   
                                    	$cursor2 ="SELECT * from  j007t_gerencia";
                                    	$result=mysql_query($cursor2, $link);
                                    		echo "<select name='num_grcia_prog'>";
                                     while($row = mysql_fetch_array($result)){
                                            ?>
                                             <option value= "<?= $row['num_gerencia']; ?> "><?=$row['num_gerencia']." ".$row["descrip"]; ?></option>
                                            <?php
                                        }
                                    ?>
                                  	<option selected>Ninguno </select>  </select>
			   </dd>			    


<dt><div>N&uacutemero de Unidad:</div></dt>
<dd> <?php       
                                   
                                    	$cursor2 ="SELECT * from  i005t_unidad";
                                    	$result=mysql_query($cursor2, $link);
                                    		echo "<select name='num_unid_prog'>";
                                     while($row = mysql_fetch_array($result)){
                                            ?>
                                           <option value= "<?= $row['num_unidad']; ?> "><?=$row['num_unidad']." ".$row["descrip_unidad"]; ?></option>
                                            <?php
                                        }
                                    ?>
                                  	<option selected>Ninguno </select>  </select>
			   </dd>			    


<dt><div>Fecha Detalle:</div></dt>
			    <dd><input type="text" name="num_fech_prog"  size="12"  id="fecha1" class="fecha1"/></dd>
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
