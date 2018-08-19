 <!--DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
    <head>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
    <body-->  
   
<?php
// require'include/../func.class.php';
  
  
                                   /* echo'<script type="text/javascript">
                                       alert("El  File: '.$csv .'  responsa:'.$resp_prod_w .'   ")
                                       </script>';*/
 //require'func.class.php';
//$objprod=new Crudpoa;
//$consult_idProdMayor=$objprod->mostrar_program_idProdMayor();
     // include("conexion.class.php");
   // if(isset($_POST['submit']))
   // {
 /* var $con;
  function Crudpoa(){
    $this->con=new DBManager;
        }
    if($this->con->conectar()==true){*/
      include("conexion/Conexion1.php");
      $Link=Conectarse(); 
      $query_num_services0 =  mysql_query("SELECT *  FROM tb_productos ORDER BY id_prod ASC ");
       while ($row_filas = mysql_fetch_array($query_num_services0)) {
                               $idprod_x=$row_filas['id_dir'];
                                $nom_prod_x=$row_filas['nomb_produc'];
                                echo "id del producto".$idprod_x;
                            }

      //Connect to Database
          if ($_FILES['archivo']['size'] > 0) {
            $csv = $_FILES['archivo']['tmp_name'];
            echo $csv;
            $handle = fopen($csv,'r');
          while ($data = fgetcsv($handle,999,",","'")) {
                if ($data[0]) { 
                           /************************************************************************************************************************************
                              if (isset($data[0]))
                                    {
                                      $objpoa=new Crudpoa;
                                      if ( $objpoa->insertar(array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7])) == true){
                                      echo 'Guardando...................';
                                          }else{
                                              echo 'Se produjo un error. Intente nuevamente';
                                          } 
                                     }else
                                  echo "Error al ingresar Datos Verifique, Complete el formulario";
                                  ************************************************************************************************************************************/

                              $registrocvs=mysql_query("INSERT INTO tb_productos  (id_dir, nomb_produc, metas, indicador, fecha_ini, fecha_cul, fech_registro, responsable_prod) VALUES('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."','".$data[6]."','".$data[7]."') ");
                          if(!$registrocvs){
                                  die('No se Registro el Archivo CSV en La DB: ' . mysql_error());
                                   }

                      }
                     /* else {
                         echo 'Se produjo un error. Intente nuevamente';
                       // $update = "UPDATE `tb_productos` SET  `nomb_produc`='".$data[1]."', `metas`='".$data[2]."', `metas`='".$data[3]."', `metas`='".$data[4]."', `metas`='".$data[5]."', `metas`='".$data[6]."', `indicador`=".$data[7]." WHERE unidad_dir=".$data[0];
                       // $conexion->query($update);
                       // $users_edited++;
                    }*/


            }

            echo 'OK';

      }

   //}       
/*conexiones, conexiones everywhere
ini_set('display_errors', 1);
error_reporting(E_ALL);
    var $con;
 	function Crudpoa(){
 		$this->con=new DBManager;
 	      }
 	//if($this->con->conectar()==true){
			
		 //Aquí es donde seleccionamos nuestro csv
         $fname = $_FILES['archivo']['name'];
         echo 'Cargando nombre del archivo: '.$fname.' ';
         $chk_ext = explode(".",$fname);
         echo $chk_ext;
          ?>
         <script type="text/javascript">
         alert("SE completo la Carga en la Base de datos".'"$chk_ext"').'$chk_ext';</script>;
         
         <?php
         if(strtolower(end($chk_ext)) == "csv")
             {
                 //si es correcto, entonces damos permisos de lectura para subir
                 $filename = $_FILES['archivo']['tmp_name'];
                 $handle = fopen($filename, "r");
               
                  //$query_n = mysql_query("SELECT * FROM tb_productos WHERE id_prod = (SELECT MAX(id_prod) from tb_productos)");
                 $consult_idProdMayor="SELECT * FROM tb_productos WHERE id_prod = (SELECT MAX(id_prod) from tb_productos)");
                        if($consult_idProdMayor) {
                                            $contador=0;
                                            while( $row_activ = mysql_fetch_array($consulta) ){
                                          
                                                  $ultimo_id= $row_activ['id_prod']+1;
                                                  echo $ultimo_id;
                                            }
                                        }
                 while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
                     {
                       //Insertamos los datos con los valores...
                        $sql = "INSERT into tb_productos (id_dir, nomb_produc, metas, indicador, fecha_ini, fecha_cul, fech_registro, responsable_prod) values('$ultimo_id','$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]')";
                        mysql_query($sql) or die(mysql_error());
                     }
                 //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
                 fclose($handle);
                 echo "Importación exitosa!";
                 
             }
         else
             {
                //si aparece esto es posible que el archivo no tenga el formato adecuado, inclusive cuando es cvs, revisarlo para             //ver si esta separado por " , "
                 echo "Archivo invalido!";
             }   
    //}*/
	
   
    ?>

   <!--h1>Importando archivo CSV</h1>
   <form action='<?php echo $_SERVER["PHP_SELF"];?>' method='post' enctype="multipart/form-data">
    Importar Archivo : <input type='file' name='sel_file' size='20'>
   <input type='submit' name='submit' value='submit'>
  </form>
 </body>
</html-->


