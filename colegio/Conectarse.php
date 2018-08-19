<?php
Function Conectarse()
{
  if (!($Link=mysql_connect("localhost","root","12345")))
{
 Echo "Error de Conexión ";
 Exit();
  }
  If (!mysql_select_db("db_colegio",$Link))
  {
 Echo "No se encuentra la base de datos";
 Exit();
 }
 return $Link;
 }
 Conectarse();
 Echo "Conexion  realizada exitosamente";
 ?>
