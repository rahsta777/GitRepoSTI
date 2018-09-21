

    <?PHP
   include("conexion/Conexion1.php");
			$link=Conectarse(); 
  		$idEliminarusers	= ($_POST["valorchk_user"]);
        
                        echo "paso el id ".$idEliminarusers;
		if($idEliminarusers!=""){
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