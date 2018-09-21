

    <?PHP
   include("conexion/Conexion1.php");
			$link=Conectarse(); 
  		$idEliminar	= ($_POST["fact"]);
        
                        echo "paso el id ".$idEliminar;
		if($idEliminar!=""){
			/*$sql  = "DELETE FROM tbl_fact WHERE id_fact='$idEliminar' ";
			mysql_query($sql,$link);*/
            $sq2  = "DELETE FROM status_fact WHERE id_fact_st='$idEliminar' ";
            mysql_query($sq2,$link);
            $sq3  = "DELETE FROM tb_citas WHERE     id_fact_cit='$idEliminar' ";
            mysql_query($sq3,$link);
            ?>
        <script type="text/javascript">
                        alert("Registro Eliminado"+<?PHP echo $idEliminar ?>);
                        </script> <?PHP 
            echo "Eliminado.....";
	
	}
 	header('Location:index0.php');
    ?>