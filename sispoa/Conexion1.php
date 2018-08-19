<?php
Function Conectarse()
{ 
   if (!($Link=mysql_connect("localhost","root","12345"))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysql_select_db("db_app_poa",$Link)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $Link; 
} 
?>
