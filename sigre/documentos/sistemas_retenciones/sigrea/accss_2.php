<?PHP
   session_start ();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
<?php
 include("conexion/Conexion1.php"); 
 $link=Conectarse(); 
	$clvx=($_GET["var1"]);
	$logeo=($_GET["var2"]);

$salt = substr($logeo,0,2);
$clave_crypt =crypt($clvx,$salt);
$query="SELECT * FROM 	user_audit where clav_user ='".$clave_crypt."' and alias_user='".$logeo."' ";
$result= mysql_query($query);
$row = mysql_fetch_array ($result);
$numr= mysql_num_rows($result);
//mostrando el resultado
if(!$numr)
{
 echo "No Permitido: ";
$url_relativa="acceso.php"; 
		} else {
    	  $usuario_valido = $logeo;
        $usuario_desp=$row['nomb_user'];
        $nivl=$row['perfil_user'];
        $_SESSION["nom_usuario"] = $usuario_desp;
        $_SESSION["usuario_valido"] = $usuario_valido;
         $_SESSION["tipo_user"] = $nivl;
          $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");
       //echo "el usuarios Valido es:".$ss."nivel".$nivl;
		if($numr){
			echo " Accesso permitido....";
		//echo "<meta http-equiv=Refresh content=1;url=menup.php?a=1>";
		//print ("<P ALIGN='CENTER' style='color:#009;text-shadow:#ffff'; class='header2' >[ <A HREF='menup.php'><span style='color:#009;font-weight:bold;text-shadow:#ffff;background:url(images/fondo_input/fondo_input_g.png);' >Conectar</span></A>]");
		}
}
?>
</body>

</html>
