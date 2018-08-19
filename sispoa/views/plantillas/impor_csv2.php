
<?php//require'func.class.php';
//require'include/../func.class.php';
include("conexion/Conexion1.php")
 $Link=Conectarse(); 
/*===================================================*
	$tipo = $_FILES['csv_file_x']['type'];
    $tamanio = $_FILES['csv_file_x']['size'];
    $archivotmp = $_FILES['csv_file_x']['tmp_name'];
    $tipo = $_FILES['csv_file_x']['type'];
	$tamanio = $_FILES['csv_file_x']['size'];
	$archivotmp = $_FILES['csv_file_x']['tmp_name'];
	$respuesta = new stdClass();
	
	  /*if (is_uploaded_file($_FILES['csv_file_td']['tmp_name'])) {
        echo "<h1>" . "File ". $_FILES['csv_file_td']['name'] ." uploaded successfully." . "</h1>";
        echo "<h2>Displaying contents:</h2>";
         readfile($_FILES['csv_file_td']['tmp_name']);
	    }
 
	    //Import uploaded file to Database
        $handle = fopen($_FILES['csv_file_td']['tmp_name'], "r");
	    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
           $import="INSERT into  tb_productos(unidad_dir,nomb_produc,metas,indicador,fecha_ini,fecha_cul,fech_registro,responsable_prod) values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]')";
	        mysql_query($import) or die(mysql_error());
	    }
	    fclose($handle);
	    print "Import done";*/
	    //view upload form
/*===================================================0



$fp = fopen($file_in_w,'r');
	if (!$fp) {echo 'ERROR: No ha sido posible abrir el archivo. Revisa su nombre y sus permisos.'; exit;}
$loop = 0; // contador de líneas
	while (!feof($fp)) { // loop hasta que se llegue al final del archivo
	$loop++;
	$line = fgets($fp); // guardamos toda la línea en $line como un string
	// dividimos $line en sus celdas, separadas por el caracter |
	// e incorporamos la línea a la matriz $field
$field[$loop] = explode ('|', $line);
	// generamos la salida HTML
	echo '
	 <div>
	  <div>Nombre: '.$field[$loop][0].'</div>
	  <div>Email: '.$field[$loop][1].'</div>
	  <div>Website: '.$field[$loop][2].'</div>
	  <div>Teléfono: '.$field[$loop][3].'</div>
	 </div>
	';
	$fp++; // necesitamos llevar el puntero del archivo a la siguiente línea
	}
	fclose($fp);

	/**********/
	

    $file_import = $_FILES['csv_file_td']['name'];

    if ($_FILES["csv_file_td"]["type"] == "text/comma-separated-values") {
        if (@move_uploaded_file($_FILES['file']['tmp_name'], $file_import)) {
            $fp = fopen($file_import, 'r');
            //$contador = 0;
           // $users_edited = 0;
           // $users_added = 0;
            while (($data = fgetcsv($fp, 1000,",","'")) {
               // if ($contador > 0) {
                    if (empty($data[0])) {
                        mysql_query ("INSERT INTO `tb_productos` (`id_dir`, `nomb_produc`, `metas`, `indicador`, `fecha_ini`, `fecha_cul`, `fech_registro`, `responsable_prod) values('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."','".$data[6]."','".$data[7]."')"); 
                        /*VALUES ('".$data[1]."', '".$data[2]."', '".$data[3]."', ".$data[4].")";*/
                        //$Conectarse->query($insert);
                        //$users_added++;
                    }
                    else {
                         echo 'Se produjo un error. Intente nuevamente';
                       // $update = "UPDATE `tb_productos` SET  `nomb_produc`='".$data[1]."', `metas`='".$data[2]."', `metas`='".$data[3]."', `metas`='".$data[4]."', `metas`='".$data[5]."', `metas`='".$data[6]."', `indicador`=".$data[7]." WHERE unidad_dir=".$data[0];
                       // $conexion->query($update);
                       // $users_edited++;
                    }
                //}
               // $contador++;
            }
        }
        $message_import = '<p>La importacion se ha realizado con exito!<br/>Se han actualizado '.$users_edited.' registros.<br/>Se han insertar '.$users_added.' usuarios nuevos.</p>';
    }

    else {
        $message_import = '<p>El archivo subido no es correcto!</p>';
    }
	
?>
