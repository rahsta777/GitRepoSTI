<?PHP
   session_start ();
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
//require_once'include/func.class.php';
 include("Conexion1.php"); 
$link=Conectarse(); 
$clvx=($_POST["clvex"]);
$logeo=($_POST["logox"]);
//echo $clvx."<br>"."  ".$logeo."<br>";
//---Encritar la clve y el usuario------ //
$salt = substr($logeo,0,2);
$clave_crypt =crypt($clvx,$salt);
//---Encritar la clve y el usuario------ //
//echo $clave_crypt."<br>"."  ".$salt."<br>";

//$objuser_verf=new Crudpoa;
//$query_x=$objuser_verf->mostrar_users_verif($logeo,$clave_crypt);
$query_x="SELECT * FROM user_audit WHERE clav_user ='".$clave_crypt."' && alias_user='".$logeo."' ";
$result_x= mysql_query($query_x);
$row = mysql_fetch_array ($result_x);
$numr= mysql_num_rows($result_x);
//echo "paso".$result_x;
//mostrando el resultado
$nivl=$row['perfil_user'];
//echo "paso usuario".$nivl;
if(!$numr)
{
echo "<strong>Acceso No Permitido.....</strong>  ";
//$url_relativa="acceso.php"; 
} else {
    	$usuario_valido = $logeo;
        $usuario_desp=$row['nomb_user'];
        $nivl=$row['perfil_user'];
        $ide_user=$row['id_user'];
        $_SESSION["nom_usuario"] = $usuario_desp;
        $_SESSION["usuario_valido"] = $usuario_valido;
        $_SESSION["tipo_user"] = $nivl;
        $_SESSION["ide_user"] = $ide_user;
        $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");
       //echo "el usuarios Valido es:".$ss."nivel".$nivl;
if($numr){
 echo " <strong>Accesso permitido....".$usuario_desp." Nivel: ".$nivl."</strong>";
 // header("location:index0.php");
//if (isset($_POST["enviar"])){
?>
<script >
setTimeout ("alert ('Después');",20000); 
	window.location = "index1.php";
</script>
<?php
//}
//print ("<P ALIGN='CENTER' style='color:#009;text-shadow:#ffff'; class='header2' >[ <A HREF='menup.php'><span style='color:#009;font-weight:bold;text-shadow:#ffff;background:url(images/fondo_input/fondo_input_g.png);' >Conectar</span></A>]");
}
}
?>
</body>

</html>