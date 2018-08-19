<?php 
include("conexion.class.php");

class Crudpoa{
 //constructor	
 	var $con;
 	function Crudpoa(){
 		$this->con=new DBManager;
 	}
/***==========================Todo Planes operativos==============================================**/
	function insertar($campos){
		if($this->con->conectar()==true){
			//print_r($campos);
			//echo "INSERT INTO cliente (nombres, ciudad, sexo, telefono, fecha_nacimiento) VALUES ('".$campos[0]."', '".$campos[1]."','".$campos[2]."','".$campos[3]."','".$campos[4]."')";
			return mysql_query("INSERT INTO tb_productos (id_dir, nomb_produc, metas, indicador, fecha_ini, fecha_cul, fech_registro, responsable_prod) VALUES ('".$campos[0]."','".$campos[1]."','".$campos[2]."','".$campos[3]."','".$campos[4]."','".$campos[5]."','".$campos[6]."','".$campos[7]."')");
		}
	}
	
	function insertar_ids_dir_func($campos1){
		if($this->con->conectar()==true){
			//print_r($campos);
			return mysql_query("INSERT INTO tb_direcc_funcnary (id_funcnary, id_direcc, id_directory, id_def_poa) VALUES ('".$campos1[0]."','".$campos1[1]."','".$campos1[2]."','".$campos1[3]."')");
		}
	}
	

	/***==========================Todo user==============================================**/
	function insertar_user($campos){
		if($this->con->conectar()==true){
			//print_r($campos);
			//echo "INSERT INTO cliente (nombres, ciudad, sexo, telefono, fecha_nacimiento) VALUES ('".$campos[0]."', '".$campos[1]."','".$campos[2]."','".$campos[3]."','".$campos[4]."')";
			return mysql_query("INSERT INTO user_audit (nomb_user, apel1_user, apel2_user, category_user, perfil_user, sex_user, estado_user, fec_inin_user, alias_user, clav_user) VALUES ('".$campos[0]."','".$campos[1]."','".$campos[2]."','".$campos[3]."','".$campos[4]."','".$campos[5]."','".$campos[6]."','".$campos[7]."','".$campos[8]."','".$campos[9]."')");
		}
	}
	function mostrar_users(){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM user_audit ORDER BY nomb_user DESC");
		}
	}
	function mostrar_users_verif($valor0,$valor1){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM user_audit WHERE  clav_user = '".$valor1."' and  alias_user = '".$valor0."' 	ORDER BY nomb_user DESC");
		}
	}
	function mostrar_count_users(){
		if($this->con->conectar()==true){
			return mysql_query("SELECT COUNT( * ) AS cantuser FROM user_audit ORDER BY nomb_user DESC");
		}
	}
	/***===================================fin Todo user=====================================0 **/
	function mostrar_program_poa2(){
		if($this->con->conectar()==true){
			return mysql_query("SELECT id_prod, indicador FROM tb_productos ");
		}
	}
	function mostrar_program_poa21(){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM tb_productos INNER JOIN tb_Direcciones ON  tb_Direcciones.id_direcciones = tb_productos.id_dir ");
		}
	} 
	function mostrar_program_poa(){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM tb_productos ORDER BY id_dir ASC");
		}
	}
	function mostrar_program_idProdMayor(){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM tb_productos WHERE id_prod = (SELECT MAX(id_prod) from tb_productos)");
		}
	}
function mostrar_count_programs(){
		if($this->con->conectar()==true){
			return mysql_query("SELECT COUNT( * ) AS cantprod FROM tb_productos ");
		}
	}
	function eliminar($id){
		if($this->con->conectar()==true){
			return mysql_query("DELETE FROM cliente WHERE id=".$id);
		}
	}
	/***===================================fin Todo Direccciones=====================================0 **/
	function insertar_direcnes($elemnto){
		if($this->con->conectar()==true){
		return mysql_query("INSERT INTO tb_Direcciones (nomb_direcciones, Alias, localizacion_direcciones) VALUES ('".$elemnto[0]."','".$elemnto[1]."','".$elemnto[2]."')");
		}
	}
}
?>