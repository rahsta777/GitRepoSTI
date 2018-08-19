<?php
//Si la variable archivo que pasamos por URL no esta 
//establecida acabamos la ejecucion del script.
$ide1=$_GET['archivo'];
//echo "paso la url: ".$ide1;
if (!isset($_GET['archivo']) || empty($_GET['archivo'])) {
   exit();
}

//Utilizamos basename por seguridad, devuelve el 
//nombre del archivo eliminando cualquier ruta. 
$archivo = basename($_GET['archivo']);

$ruta = $archivo;

if (is_file($ruta))
{
   header('Content-Type: application/force-download');
   header('Content-Disposition: attachment; filename='.$archivo);
   header('Content-Transfer-Encoding: binary');
   header('Content-Length: '.filesize($ruta));

   readfile($ruta);
}
else
   exit();
?>