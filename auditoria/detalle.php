<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/sddm.css" >
<link rel="stylesheet" type="text/css" href="css/style_audit.css" >
<script type='text/javascript' src='js/func_menu.js'></script>
<script language="javascript" type="text/javascript" src="js/niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="css/niceforms-default.css" />
</head>
	<body>
 <!--=========================================================================================-->        
  <?php 
include("conexion/Conexion1.php");
$link=Conectarse(); 
include("fnc/f_fecha.php");
if(isset($_POST["id_local"]))
{
    $id_x=$_POST["id_local"];
    $localiza_x=$_POST["variable1"];
    $localiza_x2=$_POST["variable2"];
			 //echo "id: [".$id_x."] Tipo: [".$localiza_x."] la Consulta: [".$localiza_x2."]";
/*=======================[programacion]========================================*/
		      if($localiza_x=="programacion"){
            $busqueda0="SELECT * FROM d001_programa_aud WHERE num_detalle='" . $_POST['id_local'] . "' ";
            $resultquery0=mysql_query($busqueda0);
             if($resultquery0 ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
                } /*fin del if error sql*/
      	while($filas0=mysql_fetch_array($resultquery0))        
            {
														  $id=$filas0['num_detalle'];
																$descrip1=$filas0['descrp_program'];
                $fecha0=$filas0['fe_fecha']; 
 															$numfilia0=$filas0['num_filial'];
																$numcargo0=$filas0['num_cargo'];	
             	$num_fech_normal=cambia_fecha_a_normal($fecha0); 
               		//echo "programacion id:[".$numcargo0."]";
																	//echo "Descrip :[".$descrip1."]";
										/*****************************cargos asociado al programa***************************/
          if (isset($numcargo0)){
            $sqlCargos="SELECT * FROM i006t_cargo WHERE num_cargos='" . $numcargo0 . "' ";
            $queryCargos=mysql_query($sqlCargos);
																		while($local=mysql_fetch_array($resultquery0))        
																								{
																										$descrip_cargo=$local['descrip_cargos'];
																											$cod_cargox=$local['num_cargos'];
    																					echo "descripCargo: ".$descrip_cargo."Id: ".$cod_cargox;
																								}	

														}
														/**************************************/
/***************************[formulario]*****************************/
?>
<form action="reg_progcio_audit2.php" method="post" >
<div id="box3" style="	width:400px;" >          
<div class="columna">
		<fieldset>
		     <legend><img src="images/HP-MSN1.png" width="30px">Detalle <?php echo $localiza_x; ?> </legend>
	
        	<dl>
			 <dt><div>Numero de Detalle Programacion:</div></dt>
                <dd><input type="text" name="num_detall_prog" id="num_unit" value="<?php echo  $id; ?>" /></dd>
			</dl>
            
            <dl>
			 <dt><div>Descripci&oacute;n:</div></dt>
			    <dd><input type="text" name="num_desc_prog" id="descp_unit" value="<?php echo $descrip1; ?>" /></dd>
			</dl>
            <dl>
			 <dt><div>N&uacutemero de cargo:</div></dt>
			    <dd> <input type="text" name="num_carg_prog" id="num_carg_prog" value="<?php echo $numcargo0; ?>" /></dd>

   <dt><div>N&uacutemero de filial:</div></dt>
			    <dd> <input type="text" name="num_filial_prog" id="num_filial_prog" value="<?php echo $numfilia0 ; ?>" /></dd>

<dt><div>N&uacutemero de Gerencia:</div></dt>
<dd><input type="text" name="num_grcia_prog" id="num_grcia_prog" value="<?php echo $numfilia0 ; ?>"  /></dd>			    


<dt><div>N&uacutemero de Unidad:</div></dt>
<dd><input type="text" name="num_unid_prog" id="num_unid_prog" value="<?php echo $numfilia0; ?>"  /></dd>			    


<dt><div>Fecha Detalle:</div></dt>
			    <dd><input type="text" name="num_fech_prog"  value="<?php echo $num_fech_normal; ?>" /></dd>
			</dl>


           
            </fieldset>
            </div>
          
		    
            <fieldset class="action">
<?php 
		         print (" <P id='contacto' ALIGN='CENTER'> <A HREF='index0.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Ir Home]' ></A> </P>\n");
		    ?></fieldset>
		    
           
		</form>
</div>
<?php 
     								}
/***************************[fin formulario]*****************************/
   }/* fin if programacion
/*=======================[end programacion]========================================*/
      /*========================================================================[ AUDITORIA ]========================================*/
        if($localiza_x=="auditoria"){
            $busqueda1="SELECT * FROM d003t_detalle_aud, j0013t_auditoria WHERE num_auditoria1='" . $_POST['id_local'] . "' AND num_auditoria='" . $_POST['id_local'] . "' ";
								 $resultquery1=mysql_query($busqueda1);
      if($resultquery1 ==FALSE) 
                {
                 die(mysql_error()); // TODO:$ better error handling
                } /*fin del if error sql*/
      	while($filas1=mysql_fetch_array($resultquery1))        
            {		
                		$id=$filas1['num_auditoria1'];
						$descrip1=$filas1['tex_Descrp'];
                        $num_reqsito=$filas1['num_requisito'];
						//echo "Auditorias id:[".$id."]";
						//echo "Descrip :[".$descrip1."]";
                        $gerenc_audit=$filas1['num_gerencia'];
                        $cedula=$filas1['num_ced'];
                        $tex_unidad=$filas1['tex_unidad'];
                        $fechax=$filas1['fe_fecha'];
                        $nivelx=$filas1['num_nivl'];
                        $notasx=$filas1['tex_nota'];
           $num_fech_normal=cambia_fecha_a_normal($fechax); 
           /************formulario**********************/           
  ?>       <form action="reg_act_audit.php" name="form_regaudit" method="post" >
        <div id="caja1" style="width:400px;" >        
<div class="columna" >
		<fieldset>
		    <legend><img src="images/HP-MSN1.png" width="30px">Detalle <?php echo $localiza_x; ?> </legend>
        	<dl>
			 <dt><div>N&uacutemero de Auditoria:</div></dt>
                <dd><input type="text" name="num_audit"   value="<?php echo $id; ?>" /></dd>
			</dl>
 <div id="msn" style="display:none"> Debe Ingresar Numeros de 4 Digitos o mas
</div> 
            <dl>
			 <dt><div>Descripci&oacute;n:</div></dt>
			    <dd><input type="text" name="num_desc_audit" id="descp_unit" value="<?php echo $descrip1; ?>" onchange="palabras()"/></dd>
			</dl>
            <dl>
			 <dt><div>N&uacutemero de Gerencia:</div></dt>
			    
			 
            <dd> <?php       
                                   
                                    	$cursor ="SELECT * from j007t_gerencia ";
                                    	$result=mysql_query($cursor, $link);
                                    		echo "<select name='num_gcia_audit'>";
                                     while($row = mysql_fetch_array($result)){
                                            ?>
                                             <option value= "<?= $row['num_gerencia']; ?> "><?=$row['num_gerencia']." ".$row["descrip"]; ?></option>
                                            <?php
                                        }
                                    ?>
                                   	<option selected><?php echo $gerenc_audit; ?></select> </select>
			   </dd>
			</dl>
   <dt><div>Texto de Unidad:</div></dt>
			    <dd><input type="text" name="texto_audit_unid" id="num_carg_detallex" size="25"  value="<?php echo $tex_unidad; ?>"/></dd>
			</dl>
<dt><div>N&uacutemero de C&eacutedula:</div></dt>
			    <dd><input type="text" name="ced_audit" id="cedula"  class="cedula" value="<?php echo $cedula;?>"onchange="valcedula()" /></dd>
<div class="msnced" id="msn" style="display:none"> Ingresar c&eacute;dula con el (E)o V-99.999.999
</div> 
			</dl>

			   </dd>			    			    




<dt><div>Fecha Detalle:</div></dt>
<dd><input type="date" name="num_fech_audit"    id="fecha" class="fecha1" value="<?php echo $num_fech_normal; ?>"/></dd>
			</dl>

                        <dt><div>N&uacutemero de Requisito:</div></dt>
			    <dd>
<?php       
                                   
                                    	$cursor3 ="SELECT * from  i001t_requisitos";
                                    	$result3=mysql_query($cursor3, $link);
                                    		echo "<select name='num_requisit_audit'>";
                                     while($row3 = mysql_fetch_array($result3)){
                                            ?>
                                           <option value= "<?= $row3['num_requisito']; ?> "><?=$row3['num_requisito']." ".$row3["descrip_requisito"]; ?></option>
                                            <?php
                                        }
                                    ?>
                                    	<option selected><?php echo $num_reqsito; ?></select></select>
 </dd>
			</dl>
           
            <dl>
            <dt><div>N&uacutemero de Nivel:</div></dt>
			    <dd><input type="text" name="num_audit_niv" id="num_carg_detallex" size="25"  value="<?php echo $nivelx; ?>"/></dd>
			</dl>
           
           <dt><div>Notas:</div></dt>
			    <dd><input type="text" name="notas_audit" id="num_carg_detallex" size="25" value="<?php echo $notasx; ?>" /></dd>
			</dl>
           
            <dl>
            <dl>
			 
    <dl>
			 
			</dl>
			
			
            </fieldset>
            </div>
            
		    
            <fieldset class="action">
           
             <?php 
		         print (" <P id='contacto' ALIGN='CENTER'> <A HREF='index0.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Ir Home]' ></A> </P>\n");
		    ?>
		    </fieldset>
		    
          </div> 
		</form>                                
          <?php                                               
           /*********************************************/                                                         
            }/* fin while auditoria*/


										}
/*=======================[end auditoria]========================================*/
/***************************[formulario]*****************************/






/***************************[fin formulario]*****************************/

										
/*=======================[end auditoria]========================================*/
    /*=========================================(ACT PLAN)================================*/
     //echo $localiza_x;
        if($localiza_x=="plan")  { 
        
        $busqueda2="SELECT * FROM j005t_planes, d002t_detalle_plan WHERE num_planes='" . $_POST['id_local'] . "' AND num_plan='" . $_POST['id_local'] . "' ";
								 
        $resultquery2=mysql_query($busqueda2);
if($resultquery2 ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
                } /*fin del if error sql*/
      	while($filas2=mysql_fetch_array($resultquery2))        
            {		
			$id=$filas2['num_planes'];
			$descrip1=$filas2['descrp_planes'];
            $fe_fecha_planes1=$filas2['fe_fecha_planes'];
            /****detalle plan****/
            $id_plan=$filas2['num_plan'];
            $num_detalle1=$filas2['num_detalle'];
            $d_num_activi1=$filas2['num_activi'];
            $dnum_requisito1=$filas2['num_requisito'];
            $dnum_cargo1=$filas2['num_cargo'];
            $dnum_unidaddelleplan1=$filas2['num_unidaddelleplan'];
            $dfecha_detall1=$filas2['fecha_detall'];
            $dnum_cedula1=$filas2['num_cedula'];
           	//echo "Plan id:[".$id."]";
			//echo "Descrip :[".$descrip1."]";
            $num_fech_normal=cambia_fecha_a_normal($fe_fecha_planes1);
      					
/***************************[formulario PLAN]*****************************/
?>
<form action="" method="post" >
<div id="caja1" style="width:400px;" > 
        <div class="columna">
		<fieldset>
		     <<legend><img src="images/HP-MSN1.png" width="30px">Detalle <?php echo $localiza_x; ?> </legend>
	
        	<dl>
			 <dt><div>Numero de Plan:</div></dt>
     <dd>  <input type="text" name="numplan_audit" id="cod_plan" value="<?php echo $id; ?> " />
			   </dd>
                
			</dl>
            
            <dl>
			 <dt><div>Descripci&oacute;n:</div></dt>
			    <dd><input type="text" name="desc_plan" id="desc_plan" size="15" value="<?php echo $descrip1; ?> " /></dd>
			</dl>
            <dl>
			 <dt><div>N&uacutemero de Actividad:</div></dt>
			    			</dl>
    <dd> <?php    
			
                                   
          $cursor ="SELECT * from  j002t_activ_proc";
          $result=mysql_query($cursor, $link);
          echo "<select name='num_activ_plan'>";
          while($row = mysql_fetch_array($result)){
             ?>
             <option value= "<?= $row['num_activ']; ?> "><?=$row['num_activ']." ".$row["desc_nom_actvi"]; ?></option>
              <?php                                    }
              ?>
                          	<option selected><?php echo $d_num_activi1; ?> </select>          </select>
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
                                  	<option selected><?php echo $dnum_requisito1; ?> </select>  </select>
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
                                    	<option selected><?php echo $dnum_cargo1; ?> </select></select>
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
                                   	<option selected> <?php echo $dnum_unidaddelleplan1; ?> </select></select>
			   </dd>

			    
			</dl>



<dt><div>Fecha :</div></dt>
			    <dd><input type="text" name="fech_plan"   id="fecha2"  class="fecha1" value="<?php echo $num_fech_normal; ?> "/></dd>
			</dl>

<dt><div>No.C&eacutedula:</div></dt>
			    <dd><input type="text" name="num_cedula_plan" id="ced1"  class="cedulaplan" size="15"value="<?php echo $dnum_cedula1; ?> " /></dd>
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
            
             <?php 
		         print (" <P id='contacto' ALIGN='CENTER'> <A HREF='index0.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Ir Home]' ></A> </P>\n");
		    ?>
		    </fieldset>
		    
          </div> 
		</form>

<?php

	}/*fin while PLAn*/



/***************************[fin formulario]*****************************/
       }
/*=======================[end plan]========================================*/
/***************************[formulario]*****************************/






/***************************[fin formulario]*****************************/
       }
/*=======================[end plan]========================================*/
      if($localiza_x=="noconform") {   
        $busqueda3="SELECT * FROM  d004t_nocomformidad WHERE num_audit='" . $_POST['id_local'] . "' ";
        $resultquery3=mysql_query($busqueda3);
          if($resultquery3 ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
                } /*fin del if error sql*/
      	while($filas=mysql_fetch_array($resultquery3))        
            {	
														$id=$filas['num_audit'];
														$descrip1=$filas['text_descrip'];			
																echo "Plan id:[".$id."]";
																	echo "Descrip :[".$descrip1."]";

/***************************[formulario]*****************************/
?>
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
		    <?php 
		         print (" <P id='contacto' ALIGN='CENTER'> <A HREF='index0.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Ir Home]' ></A> </P>\n");
		    ?>
		    </fieldset>
		    
           
		</form>
</div>
<?php 




/***************************[fin formulario]*****************************/
                              
                              }           
									}


?>                                           
           
</body>
</html>
