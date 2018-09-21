

    <?PHP
   include("conexion/Conexion1.php");
			$link=Conectarse(); 
  		$idEliminar	= ($_POST["var15"]);
        
                        echo "paso el id ".$idEliminar;
		if($idEliminar!=""){
			$sql  = "DELETE FROM tbl_prov WHERE prov_rif='$idEliminar' ";
			mysql_query($sql,$link);
            ?>
        <script type="text/javascript">
                        alert("Registro Eliminado"+<?PHP echo $idEliminar ?>);
                        </script> <?PHP 
            echo "Eliminado.....";
	
	}
 	header('Location:index0.php');
    ?>