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
require'include/func.class.php';
/* include("conexion/Conexion.php"); 
 $link=Conectarse(); */
$clvx=($_POST["clvex"]);
$logeo=($_POST["logox"]);
echo $clvx."<br>"."  ".$logeo."<br>";
//---Encritar la clve y el usuario------ //
$salt = substr($logeo,0,2);
$clave_crypt =crypt($clvx,$salt);
//---Encritar la clve y el usuario------ //
echo $clave_crypt."<br>"."  ".$salt."<br>";
/********************************************/
if ( (isset($clave_crypt) and ($clave_crypt!="")) and  (isset($logeo) and ($logeo!=""))    ) 
    {
               $objuser_verf=new Crudpoa;
            if ( $objuser_verf->mostrar_users_verif(array($clave_crypt, $logeo)) == true){
            	/*=====================================================================*/
					  $query_x=$objuser_verf->mostrar_users_verif($logeo,$clave_crypt);
					//$query="SELECT * FROM 	user_audit where clav_user ='".$clave_crypt."' and alias_user='".$logeo."' ";
					$result_x= mysql_query($query_x);
					$row = mysql_fetch_array ($result_x);
					$numr= mysql_num_rows($result_x);
					echo "paso".$result_x;
					//mostrando el resultado
					if(!$numr)
					{
					echo "No Permitido: ";
					//$url_relativa="acceso.php"; 
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
						 echo " Accesso permitido....".$usuario_desp." Nivel: ".$usuario_valido;
						//echo "<meta http-equiv=Refresh content=1;url=menup.php?a=1>";
						//print ("<P ALIGN='CENTER' style='color:#009;text-shadow:#ffff'; class='header2' >[ <A HREF='menup.php'><span style='color:#009;font-weight:bold;text-shadow:#ffff;background:url(images/fondo_input/fondo_input_g.png);' >Conectar</span></A>]");
						}
					}

            	/*=====================================================================*/



                echo 'consultando..................';
            }else{
                echo 'Se produjo un error. Tratando de consultar en la DB,  Intente nuevamente..........';
            } 
    } else
    echo "Error al Ingresar Datos Verifique, Complete el formulario................";

/*********************************************/
?>

</body>

</html>