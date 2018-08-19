<?php
Function Conectarse()
{
  if (!($Link=mysql_connect("localhost","root","%ceasupervisorroot%")))
{
	 mysql_query("SET NAMES 'utf8'");
 Echo "Error de Conexi�n ";
 Exit();
  }
  If (!mysql_select_db("10.10.1.11/siacea",$Link))
  {
 Echo "No se encuentra la base de datos";
 Exit();
 }
 return $Link;
 }
 Conectarse();
 Echo "Conexion  realizada exitosamente";
 ?>
