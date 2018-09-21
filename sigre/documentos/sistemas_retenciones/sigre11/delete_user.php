<?php header('Content-type: text/html; charset=utf-8'); ?>
<?PHP
   session_start ();
?>
<!---___________________________________-------------------validr checkbox -->

<script language="javascript">

cedula=new Array();
codigo=new Array();

function verifica(elemento)
{

    boton=document.getElementById(elemento);

    if(boton.checked==true)
        {

        var separador=boton.value;

           cedula=separador;
           
           //alert("paso "+cedula);
        }

    else
        {
           cedula=separador;
            
        }
}
 function datos()
 {


      document.getElementById('cedula1').value=cedula.toString();
      //document.getElementById('codigo_curso').value=codigo.toString();
      //alert("paso js2"+document.getElementById('cedula1').value);
      //alert(document.getElementById('codigo_curso').value);

}

</script>
<HTML LANG="es">
<HEAD>
   <TITLE>Gestion Participantes - Aprobacion de curso</TITLE>
  <link rel="stylesheet" type="text/css" href="css/reset.css"/>
<link rel="stylesheet" type="text/css" href="css/sddm.css" >
<link rel="stylesheet" type="text/css" href="css/style_audit.css" >

<?PHP
// Incluir bibliotecas de funciones
  //include ("lib/fecha.php");
?>

</HEAD>

<BODY>

<?PHP
if (isset($_SESSION["usuario_valido"]))
 {
?>

<H1 align="center">Eliminar Participantes</H1>

<?PHP
if(isset($_POST['okaprobado']))
   $ok = $_POST['okaprobado'];
   if (isset($ok))
   {
 //echo "Cedula paso".$_POST['cedula1'];
   // Conectar con el servidor de base de datos
		include("conexion/Conexion1.php");
    $Link2=Conectarse();
   
   // Obtener n�mero de participantes a Aprobar
 
    $mi_arreglo_de_cedulas = explode(',',$_POST['cedula1']);
    //$mi_arreglo_de_codigos = explode(',',$_POST['codigo_curso']);
    $aprobar2 = $mi_arreglo_de_cedulas;
	  //$apr_cod2 = $mi_arreglo_de_codigos;
    echo "2paso: ".$aprobar2."<br>";
    //  echo print_r($apr_cod2)."<br>";*/

      $nfilas = count ($aprobar2);
   	     for ($i=0; $i<$nfilas; $i++)
      	{
		$cedulaaprob = $aprobar2[$i];
		//$apr_cod3 = $apr_cod2[$i];
		  echo "La CEDULA Check: [" . $cedulaaprob."]<br>\n";
       		// Obtener datos de la  i-sima  cedula = '$cedulaaprob'*/
			$sql2 = "SELECT * FROM user_audit where cod_emplea_user = '$cedulaaprob' order by cod_emplea_user asc";
			$consulta2 = mysql_query ($sql2,$Link2) or die ("Fallo en la consulta2");
			$cedulaaprob=$aprobar2[$i];
					if ($row = mysql_fetch_array($consulta2));
						{
      $Sql3="delete  from  user_audit where cod_emplea_user = '$cedulaaprob'";
      mysql_query ($Sql3,$Link2)or die (mysql_error()) ;
      /*$Sql4="delete  from reg_participante where cedula ='$cedulaaprob'";
      mysql_query ($Sql4,$Link2)or die (mysql_error()) ;
      $Sql5="delete  from sta_part where ced_st = '$cedulaaprob'";
						mysql_query ($Sql5,$Link2)or die (mysql_error()) ;
      $Sql6="delete  from califica where id_alumno = '$cedulaaprob'";
						mysql_query ($Sql6,$Link2)or die (mysql_error()) ;*/
             
      /*print ("___________________________________________");
								print ("Participantes a Aprobar :\n");
                                print ("<UL>\n");
								print ("   <LI>Cedula: " . $row['ced_curse'] . "");
								print ("   <LI>Codigo Curso: " . $row['cod_curse'] . "");
								print ("   <LI>Nombres: " . $row['nombres'] . "");
								print ("   <LI>Apellido  : " . $row['apellidos'] . "");
								print ("   <LI>Curso:  " . $row['deno_curs'] . "");
                                print ("<UL>\n");
                                print ("___________________________________________");*/
                                  ?>  
                            <script type="text/javascript">
                        alert("Datos Eliminados ..... pulse cualquier tecla o Enter para continuar");
                        </script>
                        <meta http-equiv="refresh" content="1; url=index0.php">
          <?php  
							}/* fin de ciclo if  */
							mysql_free_result($consulta2);

	} /* fin de ciclo que genera la matriz de consulta for */

      print ("<P>Nùmero total de Participantes a Aprobar: " . $nfilas . "</P>\n");

   // Cerrar conexin
     // mysql_close ($Link2);

      /*print ("<P>[ <A HREF='delete_parts4.php'>Participante</A> | ");*/
      print ("<A HREF='menu.php'>Menu principal</A> ]</P>\n");
  }
   else
   {
				   //_______________________-paginador_________
$URL = $_SERVER["PHP_SELF"];
$registros_por_pagina = 25;
$numero_de_pagina = 0;
if (isset($_GET['numero_de_pagina'])) {
  $numero_de_pagina = $_GET['numero_de_pagina'];
}
$pagina_de_inicio = $numero_de_pagina * $registros_por_pagina;

			   //_______________________________________________ Mostrar participantes a Aprobar_________________________________
 include("conexion/Conexion1.php");
 $Link=Conectarse();
				  /// _______________________________________ Desde Aqui La Consulta______________________________________________
$sentencia = "SELECT * FROM user_audit";
        
//$sentencia ="select * from reg_tip_curso, reg_participante where ced_curse = cedula order by ced_curse asc";
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

		<?php	/*	if (cod_curs_apr != cod_curs)
                 {*/
				  $nfilas = mysql_num_rows ($consulta1);
				  if ($nfilas > 0)
						  {
              print ("<FORM ACTION='delete_user.php' onsubmit='datos();' METHOD='POST'>\n");
							print ("<TABLE cellspacing='0' cellpadding='4' border='0'  ALIGN=CENTER> ");
              print ("<TR bgcolor='#3151B2' style='color:#fff;font:font-family:bold'>");
              print ("<TH>&nbsp;</TH>");
              print ("<TH>Check</TH>");
              print ("<TH>Estado</TH>");
              print ("<TH width='20%'>Codigo</TH>");
              print ("<TH width='20%' >Nombre</TH>");
              print ("<TH width='40%'>Apellido</TH>");
              print ("<TH>Perfil</TH>");
              print ("</TR>");   

											 for ($i=0; $i<$nfilas; $i++)
												{
												$resultado = mysql_fetch_array ($consulta1);
												/* if ($resultado['cod_curse'] != $resultado['cod_curs_apr'])
												 { */

												print ("<TR>\n");
												print ("<TD>" . $i . "</TD>\n");
                                                ?>
                                                <td>
 <input type="checkbox" value="<?php echo $resultado['cod_emplea_user'];?>" id="<?php echo $resultado['cod_emplea_user'];?>" onClick="verifica(this.id);"/>
												</td>
            <?php
                       	print ("<TD>" .$resultado['estado_user'] . "</TD>\n");
												print ("<TD>" . $resultado['cod_emplea_user'] . "</TD>\n");
												print ("<TD>" . $resultado['nomb_user'] . "</TD>\n");
												print ("<TD>" . $resultado['apel1_user']  ."</TD>\n");
												print ("<TD>" . $resultado['perfil_user']  ."</TD>\n");

												print ("</TR>\n");
																}
												}
							 print ("</TABLE>\n");
							 print ("<BR>\n");
	             print ("<TABLE align='center'><td ><INPUT TYPE='SUBMIT' NAME='okaprobado' VALUE='Participantes Marcados X'>\n</td></TABLE>");
							 echo' <input name="cedula1" id="cedula1" type=hidden>';
               echo'  <input name="codigo_curso" id="codigo_curso" type=hidden>';
                             print ("</FORM>\n");
					/*	  }
				  else
					 print ("No hay Registro disponibles");
*/
			   // Cerrar conexin
			mysql_close ($Link);

	//----------------------------------------paginador---------------------------

				//mysql_data_seek($consulta,0);

	/*print (" <TABLE align='center'><td ><P>[ <A HREF='menu.php'>Menu principal</A> ]</P></td></TABLE>\n");*/
   }    // fin de 1er else del if
   ?>
<?php
	} //while ($campo = mysql_fetch_assoc($consulta1));
	{
?>
             </table>
               <br />
                  <table width="80%" border="0" align="center" cellpadding="5" cellspacing="5" >
                  <tr  >
                    <td width="25%" align="center" ><?php if ($numero_de_pagina > 0) { // mostrar si no es la primera pagina ?>
                    <a href="<?php printf("%s?numero_de_pagina=%d%s", $URL, 0, $queryString_lstgen); ?>" >Primero</a>
                        <?php } // fin mostrar si no es la primera pagina ?>
                    </td>
                    <td width="25%" align="center"  ><?php if ($numero_de_pagina > 0) { // mostrar si no es la primera pagina ?>
                    <a href="<?php printf("%s?numero_de_pagina=%d%s", $URL, max(0, $numero_de_pagina - 1), $queryString_lstgen); ?>" >Anterior (<?php echo $numero_de_pagina - 1; ?>)</a>
                        <?php } // fin de mostrar si no es la primera pagina ?>
                    </td>
                    <td width="25%" align="center" ><?php if ($numero_de_pagina < $total_de_paginas) { // mostrar si no es la ultima pagina ?>
                    <a href="<?php printf("%s?numero_de_pagina=%d%s", $URL, min($total_de_paginas, $numero_de_pagina + 1), $queryString_lstgen); ?>"  >Siguiente (<?php echo $numero_de_pagina + 1; ?>)</a>
                        <?php } // fin de mostrar si no es la ultima pagina  ?>
                    </td>
                    <td width="25%" align="center"  ><?php if ($numero_de_pagina < $total_de_paginas) { // mostrar si no es la ultima pagina ?>
                    <a href="<?php printf("%s?numero_de_pagina=%d%s", $URL, $total_de_paginas, $queryString_lstgen); ?>" >&Uacute;ltimo</a>
                        <?php } // fin de mostrar si no es la ultima pagina ?>
                    </td>
                  </tr>
                </table>

                                <br />
                      Viendo del <b>
					  <?php echo ($pagina_de_inicio + 1) ?></b> a <b>
					  <?php echo min($pagina_de_inicio + $registros_por_pagina, $cantidad_de_registros) ?></b> (de <b>
					  <?php echo $cantidad_de_registros ?></b> Usuario)
<?php } // fin de mostrar si el registro no esta vacio?>
<br/>
 <?php
	  //--------------------------------------fin del-paginador-----------------------------------------------
 ?>
<?PHP

  }
  else
   {
      print ("<BR><BR>\n");
     print ("<P ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print ("<P ALIGN='CENTER'>[ <A HREF='login.php' TARGET='_top'>Conectar</A> ]</P>\n");
  }

?>

</BODY>
</HTML>
