<?php
   /*session_start ();*/
?>
<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>	
<meta http-equiv="content-type" content="text/html" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
<script language= "JavaScript" src="js/checkcolor.js"></script>


<script  type="text/javascript">
codigosx=new Array();
nombresx=new Array();

function verifica(elemento)
{

    boton=document.getElementById(elemento);
 			//alert(boton.value);
    if(boton.checked==true)
        {
        			var separador=boton.value.split("*");
           codigosx.push(separador[0]);
           nombresx.push(separador[1]);
        }

    else
        {
            codigosx.pop();
            nombresx.push();
        }
}
 function datos()
 {

      /*alert("paso al modulo Cons_auditados de js"+codigosx+nombresx)*/
      document.getElementById('codigos').value=codigosx.toString();
      document.getElementById('nombres').value=nombresx.toString();
     /* alert(document.getElementById('codigos').value);
      alert(document.getElementById('nombres').value);*/

}
</script>
</head>

<body>
<?php
   /*if (isset($_SESSION["usuario_valido"]) and (($_SESSION["tipo_user"])=='Administrador'))
   {
    $usuario_actual=$_SESSION["usuario_valido"];
    $nombre_user=$_SESSION["nom_usuario"];
    $tipo_user=$_SESSION["tipo_user"]*/
    
?>
<div >
   
	<?php	
 include("conexion/Conexion1.php");
		$link=Conectarse(); 
 if (isset($_POST['basic']))      
  $ok = $_POST['basic'];
  
 if (isset($ok))
  {
   ?>
	<!---------------------------- modal content ------------------------------->
  <div id="basic-modal-content">
    			            
     	  <!--- --------------------------------------------------------------------------->
         
                                           
<?php	
    //echo "paso ok".$ok;
    $mi_arreglo_de_codigos = explode(',',$_POST[codigos]);
    $mi_arreglo_de_nombres = explode(',',$_POST[nombres]);
    $listachk = $mi_arreglo_de_codigos;
    $listachk1 = $mi_arreglo_de_nombres;
	   //echo print_r($listachk)."<br>";
      $nfilas = count ($listachk);
              /*print("<TABLE cellspacing='0' cellpadding='2' border='0'  ALIGN=CENTER> ");
														print ("<TR bgcolor='#3151B2' style='color:#fff;font:font-family:bold'>");
              //print ("<TH>&nbsp;</TH>");
														print ("<TH width='10%'>Codigo</TH>");
														print ("<TH width='15%'>Nombre</TH>");
														print ("<TH width='15%'>Apellido</TH>");
														print ("<TH width='15%'>Alias</TH>");
														print ("<TH width='15%'>Perfil</TH>");
														print ("</TR>");*/
  
      for ($i=0; $i<$nfilas; $i++)
      	{
												$arraycodigos = $listachk[$i];
												//	print ("lista arreglo:".$arraycodigos);
												// Obtener datos de la  i-sima codigos = '$arraycodigos'
													$sql2 = "select * from user_audit where cod_emplea_user = '$arraycodigos'";
													$consulta2 = mysql_query ($sql2,	$link) or die ("Fallo en la consulta2");
													$arraycodigos = $listachk[$i];
				         
								if ($row = mysql_fetch_array($consulta2));
											{
				           $nombre=$row['nomb_user'];
															$apell1=$row['apel1_user'];
															$alias=$row['alias_user'];
															$cod_empl=$row['cod_emplea_user'];
															$perfil_user=$row['perfil_user'];								    
				         	$Sql3="DELETE FROM  user_audit  WHERE cod_emplea_user = '$arraycodigos'";
												  mysql_query ($Sql3,$link)or die (mysql_error()) ;
												  /*$Sql4="delete  from reg_participante where cedula ='$arraycodigos'";
												  mysql_query ($Sql4,$Link2)or die (mysql_error()) ;
												  $Sql5="delete  from sta_part where ced_st = '$arraycodigos'";
														mysql_query ($Sql5,$Link2)or die (mysql_error()) ;
												 
												 // echo "consulta".$Sql3; echo "<br>";*/	
													?>  
													<tr align='center' id="apDiv1"> 
													<?php		
													/*printf("<td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td>  <td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td> <td ><font size='2'>&nbsp;%s</td> </tr>",$cod_empl, $nombre, $apell1, $alias, $perfil_user);
										   print ("</TABLE>\n");
													print ("<br>");*/
												} //fin de ciclo if 
														
	      } /* fin de ciclo que genera la matriz de consulta for */
       mysql_free_result($consulta2);
      //print ("<P><strong>N&uacute;mero total de Registros a Eliminar: " . $nfilas . "</strong></P>\n");

   // Cerrar conexin
     // mysql_close ($Link2);

     /* print ("<P>[ <A HREF='cons_auditados.php'>Participante</A> | ");
      print ("<A HREF='index0.php'>Menu principal</A> ]</P>\n");*/
 
echo "<meta http-equiv=Refresh content=0;url=index0.php?a=1>";

?>
		</div><!---basic-modal-content-->
		<!-- preload the images -->
		<div style='display:none'>
			<img src='images/x.png' alt='' />
		</div>
<?php	
}/******************** fin del ok aprobado******************/                       
else
  {
								$busqueda=mysql_query("SELECT * FROM user_audit");
							print ("<FORM ACTION='cons_auditados.php' onsubmit='datos();' METHOD='POST'>\n");
							print("<TABLE cellspacing='0' cellpadding='2' border='0'  ALIGN=CENTER> ");
							print ("<TR bgcolor='#3151B2' style='color:#fff;font:font-family:bold'>");
							print ("<TH>Status</TH>");
							print ("<TH>Estado</TH>");
							print ("<TH width='10%'>Codigo</TH>");
							print ("<TH width='15%' >Nombre</TH>");
							print ("<TH width='15%'>Apellido</TH>");
							print ("<TH>Alias</TH>");
							print ("<TH>Perfil</TH>");
							print ("</TR>");   
					while($filas=mysql_fetch_array($busqueda))
						  {
												$status=$filas['estado_user'];
											//$localiza_imagen=$filas['foto_alumno'];
													$nombre=$filas['nomb_user'];
													$apell1=$filas['apel1_user'];
													$alias=$filas['alias_user'];
													$cod_empl=$filas['cod_emplea_user'];
													$perfil_user=$filas['perfil_user'];
								print ("<TR>\n");
							?>
						<td><input type="checkbox" value="<?php echo $filas['cod_emplea_user']."*".$filas['nomb_user'];?>" id="<?php echo $filas['cod_emplea_user']."*".$filas['nomb_user'];?>" onClick="verifica(this.id);"/></td>
					<?php
						printf("<td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td>  <td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td> <td ><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td>
						                  </tr>",$status, $cod_empl, $nombre, $apell1, $alias, $perfil_user);
								}/** [fin while $filas] ****/
     print ("</TABLE>\n");
							 print ("<BR>\n");
				?>	
					<div id='content'>
							<div id='basic-modal'>
							<?php print ("<TABLE align='center'><td><INPUT TYPE='SUBMIT' NAME='basic' VALUE='Eliminar Marcados X'  class='basic'>\n</td></TABLE>");  
										echo '<input name="codigos" id="codigos" type=hidden>';
          echo '<input name="nombres" id="nombres" type=hidden>';	?>	
							</div>
						</div><!--fin content-->
					<?php	print ("</FORM>\n");			
			}	
			

			

	

//////////////////////////////////////////////////////////
  /*}
  
  elseif(!isset($_SESSION["tipo_user"]))
  {
      ?> <div id="fila_conectar">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='acceso.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  </div> 
<?php     
   }*/
//////////////////////// 
?>
  </div>       	
			
	
</body>
	</html>	   
