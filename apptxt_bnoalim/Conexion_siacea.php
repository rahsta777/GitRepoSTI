<?php
Function Conectarse()
{ 
    mysql_query("SET NAMES 'utf8'");
   if (!($Link=mysql_connect("localhost","root","%ceasupervisorroot%"))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysql_select_db("10.10.1.11/siacea",$Link)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $Link; 
} 
?>
