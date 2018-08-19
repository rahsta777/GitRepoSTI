<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>	
<meta http-equiv="content-type" content="text/html" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
<script language= "JavaScript" src="js/checkcolor.js"></script>
<script language= "JavaScript" src="js/ajax_cambia_status.js"></script>

</head>
<body>
<?php
$ok = $_POST['okaprobado'];
   if (isset($ok))
   {

   // Conectar con el servidor de base de datos
include("conexion/Conexion1.php");
		$link=Conectarse(); 
   
       

    /*$fech1=cambia_fecha_a_mysql($_POST['fech1']);
    $fech2=cambia_fecha_a_mysql($_POST['fech2']);
    $curso=$_POST['curso'];
echo "En aprobar"."paso fech1: ".$fech1." fecha 2: ".$fech2."codigo: ".$curso;*/
    $mi_arreglo_de_cedulas = explode(',',$_POST[cedula1]);
    $mi_arreglo_de_codigos = explode(',',$_POST[codigo_curso]);
    $aprobar2 = $mi_arreglo_de_cedulas;
    $apr_cod2 = $mi_arreglo_de_codigos;
      echo print_r($aprobar2)."<br>";
      echo print_r($apr_cod2)."<br>";

      $nfilas = count ($aprobar2);
   	     for ($i=0; $i<$nfilas; $i++)
      	{
		$cedulaaprob = $aprobar2[$i];
		$apr_cod3 = $apr_cod2[$i];
		  print ("La CEDULA Check: [" . $cedulaaprob."] El codigo check [" . $apr_cod3 . "]</P>\n");
       		// Obtener datos de la  i-sima  cedula = '$cedulaaprob'
			$sql2 = "select * from reg_tip_curso,reg_participante where ced_curse = '$cedulaaprob' && cod_curse = '$apr_cod3' && cedula =  '$cedulaaprob' order by ced_curse asc";
			$consulta2 = mysql_query ($sql2,$Link2) or die ("Fallo en la consulta2");
			$cedulaaprob=$aprobar2[$i];
					if ($row = mysql_fetch_array($consulta2));	
						{
                            	$cod="02";
								$Sql3="insert into sta_part (ced_st,cod_st,cod_curs_st) values ('$cedulaaprob',$cod,'$apr_cod3')";
								mysql_query ($Sql3,$Link2)or die (mysql_error()) ;
                                //echo "consulta".$Sql3; echo "<br>";
                                print ("___________________________________________");
								print ("Participantes a Aprobar :\n");
                                print ("<UL>\n");
								print ("   <LI>Cedula: " . $row['ced_curse'] . "");
								print ("   <LI>Codigo Curso: " . $row['cod_curse'] . "");
								print ("   <LI>Nombres: " . $row['nombres'] . "");
								print ("   <LI>Apellido  : " . $row['apellidos'] . "");
								print ("   <LI>Curso:  " . $row['deno_curs'] . "");
                                print ("<UL>\n");
                                print ("___________________________________________");
							}/* fin de ciclo if  */		
							mysql_free_result($consulta2);		  
			
	} /* fin de ciclo que genera la matriz de consulta for */
					  
      print ("<P>Nùmero total de Participantes a Aprobar: " . $nfilas . "</P>\n");

   // Cerrar conexin
     // mysql_close ($Link2);
	
      print ("<P>[ <A HREF='aprob_parts4.php'>Participante</A> | ");
      print ("<A HREF='menu.php'>Menu principal</A> ]</P>\n");
  }
else
   {
        $f1=$_SESSION["fecha1"];
        $f2=$_SESSION["fecha2"] ;
        $c12=$_SESSION["curso12"];
        echo "En aprobar si  "."paso fech1: ".$f1." fecha 2: ".$f2."codigo: ".$c12;
       include("f_fecha.php");

				   //_______________________-paginador_________
$URL = $_SERVER["PHP_SELF"];
$registros_por_pagina = 20;
$numero_de_pagina = 0;
if (isset($_GET['numero_de_pagina'])) {
  $numero_de_pagina = $_GET['numero_de_pagina'];
}
$pagina_de_inicio = $numero_de_pagina * $registros_por_pagina;

//_______________________________________________ Mostrar participantes a Aprobar_________________________________
				 
include("Conex_part.php"); 
$Link=Conectarse_part(); 
// _______________________________________ Desde Aqui La Consulta______________________________________________
        //echo "fecha 1: [".$fech1."]"."fecha 1: [".$fech2."]"."codigo: [".$curso."]";
		$sentencia = "SELECT * FROM reg_tip_curso 
        INNER JOIN tip_curso
on cod_curse=cod_curs && cod_curse = '$c12'
        INNER JOIN reg_participante ON ced_curse=cedula && fecha_incrip >= '$f1' && fecha_incrip <= '$f2'
            WHERE cod_curse
            NOT IN (SELECT cod_curs_st  FROM sta_part where ced_st = ced_curse)
            ORDER BY ced_curse asc";
    //_______________________________________________________________________-

$query_limit_lstgen = sprintf("%s LIMIT %d, %d", $sentencia, $pagina_de_inicio, $registros_por_pagina);
$consulta1 = mysql_query($query_limit_lstgen, $Link) or die(mysql_error());
//$campo = mysql_fetch_assoc($consulta1 );

if (isset($_GET['cantidad_de_registros'])) 
{
  $cantidad_de_registros = $_GET['cantidad_de_registros'];
} 
else 
{
 $consulta  = mysql_query($sentencia);
  $cantidad_de_registros = mysql_num_rows($consulta );
}
$total_de_paginas = ceil($cantidad_de_registros/$registros_por_pagina)-1;

$queryString_lstgen = "";
if (!empty($_SERVER['QUERY_STRING'])) 
{
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) 
   {
    if (stristr($param, "numero_de_pagina") == false && stristr($param, "cantidad_de_registros") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_lstgen = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_lstgen = sprintf("&cantidad_de_registros=%d%s", $cantidad_de_registros, $queryString_lstgen);
?>


<?php if ($cantidad_de_registros == 0) { // mostrar si el registro esta vacio ?>
                No existen registros asociados
  <?php } // fin de mostrar si el registro esta vacio ?>
<?php if ($cantidad_de_registros > 0) { // mostrar si el registro no esta vacio ?>
			
		<?php		if (cod_curs_apr != cod_curs)
                 {
				  $nfilas = mysql_num_rows ($consulta1);
				  if ($nfilas > 0)
						  {
							 print ("<FORM ACTION='cons_act_perfuser.php' onsubmit='datos();' METHOD='POST'>\n");
							 print ("<TABLE A align='center' class='linea' >\n");
						     print ("<TR>");
                            		print ("<TH>&nbsp;</TH>");
                            		print ("<TH>Status</TH>");
                            		print ("<TH>Estado</TH>");
                            		print ("<TH width='10%'>Codigo</TH>");
                            		print ("<TH width='15%' >Nombre</TH>");
                            		print ("<TH width='15%'>Apellido</TH>");
                            		print ("<TH>Alias</TH>");
                            		print ("<TH>Perfil</TH>");
							 print ("</TR>\n");
										 for ($i=0; $i<$nfilas; $i++)
												{
												$filas = mysql_fetch_array ($consulta1);
												/* if ($resultado['cod_curse'] != $resultado['cod_curs_apr']) 
												 { */
												print ("<TR>\n");
												//print ("<TD>" . $i . "</TD>\n");
                                                ?>
                                                <td>
 <input type="checkbox" value="<?php echo $resultado['cedula']."*".$resultado['cod_curse'];?>" id="<?php echo $resultado['cedula']."*".$resultado['cod_curse'];?>" onClick="verifica(this.id);"/>
												</td>
                                                <?php
                                                print ("<TD><font size ='04'>" . $filas['nomb_user'] . "</font></TD>\n");
												print ("<TD><font size ='04'>" .utf8_encode($filas['apel1_user']) . "</font></TD>\n");
												print ("<TD><font size ='04'>" .utf8_encode($filas['alias_user']) . "</font></TD>\n");
												print ("<TD>" . $filas['cod_emplea_user'] . "</TD>\n");
												print ("<TD>" . $filas['perfil_user']  ."</TD>\n");
												print ("<TD>" . $resultado['deno_curs']  ."</TD>\n");
                                                print ("</TR>\n");
																}
                                                                	$status=$filas['estado_user'];
 			//$localiza_imagen=$filas['foto_alumno'];
		      
            
												}
							 print ("</TABLE>\n");
							 print ("<BR>\n");
	print ("<TABLE align='center'><td ><INPUT TYPE='SUBMIT' NAME='okaprobado' VALUE='Participantes Marcados X'>\n</td></TABLE>");
							 echo' <input name="cedula1" id="cedula1" type=hidden>';
                             echo'  <input name="codigo_curso" id="codigo_curso" type=hidden>';
                             print ("</FORM>\n");
						  }
				  else
					 print ("No hay Registro disponibles");
					 
			   // Cerrar conexin
			mysql_close ($Link);
			
				  //----------------------------------------paginador---------------------------

				//mysql_data_seek($consulta,0);
				
	print (" <TABLE align='center'><td ><P>[ <A HREF='menu.php'>Menu principal</A> ]</P></td></TABLE>\n");
      // fin de 1er else del if

?>
             </table>
					
                <br />
                       <table width="80%" border="0" align="center" cellpadding="5" cellspacing="5"  >
                  <tr  >
                    <td width="25%" align="center"  ><?php if ($numero_de_pagina > 0) { // mostrar si no es la primera pagina ?>
                    <a href="<?php printf("%s?numero_de_pagina=%d%s", $URL, 0, $queryString_lstgen); ?>" >[Primero]</a>
                        <?php } // fin mostrar si no es la primera pagina ?>
                    </td>
                    <td width="25%" align="center"  ><?php if ($numero_de_pagina > 0) { // mostrar si no es la primera pagina ?>
                    <a href="<?php printf("%s?numero_de_pagina=%d%s", $URL, max(0, $numero_de_pagina - 1), $queryString_lstgen,'resta'); ?>" >[Anterior] (<?php echo $numero_de_pagina - 1; ?>)</a>
                        <?php } // fin de mostrar si no es la primera pagina ?>
                    </td>
					<?php $fech1= cambia_fecha_a_normal($fech1_e); $fech2=cambia_fecha_a_normal($fech2_e);     ?>
                    <td width="25%" align="center" ><?php if ($numero_de_pagina < $total_de_paginas) { // mostrar si no es la ultima pagina ?>
                     <a href="<?php printf("%s?numero_de_pagina=%d%s&fech1=%s&fech2=%s&curso=%s", $URL, min($total_de_paginas, $numero_de_pagina + 1), $queryString_lstgen,$fech1,$fech2,$curso); ?>"  >Siguiente (<?php echo $numero_de_pagina + 1; ?>)</a>
                        <?php } // fin de mostrar si no es la ultima pagina  ?>
                    </td>
                    <td width="25%" align="center"  ><?php if ($numero_de_pagina < $total_de_paginas) { // mostrar si no es la ultima pagina ?>
                    <a href="<?php printf("%s?numero_de_pagina=%d%s", $URL, $total_de_paginas, $queryString_lstgen); ?>" >[&Uacute;ltimo]</a>
                    <?php } // fin de mostrar si no es la ultima pagina ?>
                    </td>
                  </tr>
				 
                </table>

                          <br />
                      Viendo del <b><?php echo ($pagina_de_inicio + 1) ?></b> a <b><?php echo min($pagina_de_inicio + $registros_por_pagina, $cantidad_de_registros) ?></b> (de <b><?php echo $cantidad_de_registros ?></b> Participantes)
<?php } // fin de mostrar si el registro no esta vacio?><br />
<br/>
 <?php
 
	  //--------------------------------------fin del-paginador-----------------------------------------------
 ?>
<?PHP

  // }
   //else
  // {
    //  print ("<BR><BR>\n");
      //print ("<P ALIGN='CENTER'>Acceso no autorizado</P>\n");
      //print ("<P ALIGN='CENTER'>[ <A HREF='login.php' TARGET='_top'>Conectar</A> ]</P>\n");
   //}
}
?>
<div >
   
	<?php	
   include("conexion/Conexion1.php");
		$link=Conectarse(); 
	 	$busqueda=mysql_query("SELECT * FROM user_audit ");
	 
  print("<TABLE cellspacing='0' cellpadding='2' border='0'  ALIGN=CENTER> ");
		print ("<TR>");
		print ("<TH>&nbsp;</TH>");
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
<tr align='center' id="apDiv1"> 
<td bgcolor='#FFFFFF'><input type="checkbox" value="<?php echo $cod_empl;?>" id="<?php echo $cod_empl;?>" onclick="Cambio(this.id)" /></td>
 <?php
	 if($status=="activo"){?>
<TD> <a href=""><input type="hidden" value="<?php echo $cod_empl;?>" id="valor_icono"  onclick="cambia_status(this.id)"><img src="images/accept.png" width="20" height="20" border="0" name="imagen1"></a></TD > 
 <?php
		/*print ("<TD > <a href='#' onmouseover='cambia(imagen1,img1)' onmouseout='cambia(imagen1,img2)'><img src='images/accept.png' width='20' height='20' border='0' name='imagen1'></a><br><br> </TD>\n");*//*<img src='images/accept.png' width='20px'>*/

		}
	if($status=="inactivo"){
		print ("<TD > <a href='#' onmouseover='cambia(imagen1,img2)' onmouseout='cambia(imagen1,img1)'><img src='images/inactve.png' width='20' height='20' border='0' name='imagen1'></a><br><br> </TD>\n");/*<img src='images/inactve.png' width='20px'>*/

		}
if($status=="baja"){
		print ("<TD > <a href='#' onmouseover='cambia(imagen1,img2)' onmouseout='cambia(imagen1,img1)'><img src='images/error.gif' width='20' height='20' border='0' name='imagen1'></a><br><br> </TD>\n");/*<img src='images/inactve.png' width='20px'>*/

		}
	print ("<TABLE align='center'><td ><INPUT TYPE='SUBMIT' NAME='okaprobado' VALUE='Participantes Marcados X'>\n</td></TABLE>");
							 echo' <input name="cedula1" id="cedula1" type=hidden>';
                                               echo'  <input name="codigo_curso" id="codigo_curso" type=hidden>';
                             print ("</FORM>\n");
	?>							 					

<?php	

		

              //echo ('<a href="treino.php?cod="'. echo $cod_empl  . '>' .  $nombre . " Usuario " .  $apell1. </a>' ); 

		//echo ('<a href="actualiza_asign.php?id1="'. echo $ide2;'"</a>' ); 
printf("<td><font size='2'>&nbsp;%s</td> <td bgcolor='#FFFFFF'>
                   <font size='2'>&nbsp;%s</td>  <td><font size='2'>&nbsp;%s</td> <td bgcolor='#FFFFFF'><font size='2'>&nbsp;%s</td> <td ><font size='2'>&nbsp;%s</td> <td bgcolor='#FFFFFF'><font size='2'>&nbsp;%s</td>
                     </tr>",$status, $cod_empl, $nombre, $apell1, $alias, $perfil_user);
		}
print ("</TABLE>\n");
 
?>
  </div>       	
			
	
</body>
	</html>	   
