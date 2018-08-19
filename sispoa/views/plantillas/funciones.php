
<?PHP

	  $usuario_y = $_POST['nom_usuario_td'];
      $usuario_apell_y  = $_POST['desc_usuario_td'];
      $usuario_apell2_y = $_POST['apell2_usuario_td'];
	echo "Paso el valor ajax_jq: [ ".$usuario_y." ] <br>";

	/*$Usuarios	 = json_decode($_POST["UsuariosPost"]);
	echo "DAtos json del Usuario ".$Usuarios."<br>";
	$usuario_x    			= $Usuarios->usuario_x;
	$usuario_apell_x 	 	= $Usuarios->usuario_apell_x;
	$usuario_email_x     	= $Usuarios->usuario_email_x;
	echo "DAtos json del Usuario ".$usuario_x;*/

	echo'<script type="text/javascript">
	alert("paso a registrar  Nombre: '.$usuario_y.'  Apell: '.$usuario_apell_y.'")
	
	 </script>'
	
	/*$campo1=$_POST['usuario_td'];  $campo1=!empty($_REQUEST['usuario_y'])?$_REQUEST['usuario_y']:'';
	$campo2=!empty($_REQUEST['usuario_apell_y'])?$_REQUEST['usuario_apell_y']:'';*/
	
	/*$cons="INSERT into user_audit (nomb_user, apel1_user) value ('$campo1', '$campo2')";
	$conexion=>query($cons);*/

?>


