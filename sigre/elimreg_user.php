

    <?PHP
   include("conexion/Conexion1.php");
			$link=Conectarse(); 
  		$idEliminar	= ($_POST["var12"]);
        
                        echo "paso el id ".$idEliminar;
		if($idEliminar!=""){
			$sql  = "DELETE FROM user_audit WHERE cod_emplea_user='$idEliminar' ";
			mysql_query($sql,$link);
            ?>
        <script type="text/javascript">
                        alert("Registro Eliminado"+<?PHP echo $idEliminar ?>);
                        </script> <?PHP 
            echo "Eliminado.....";
	
	}
 	header('Location:index0.php');
    ?>