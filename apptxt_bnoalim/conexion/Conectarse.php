<?php
Function Conectarse()
{
  if (!($Link=mysql_connect("10.10.1.11","root","%ceasupervisorroot%")))
{
	 mysql_query("SET NAMES 'utf8'");
 Echo "Error de Conexi�n ";
 Exit();
  }
  If (!mysql_select_db("siacea",$Link))
  {
 Echo "No se encuentra la base de datos";
 Exit();
 }
 return $Link;
 }
 Conectarse();
 Echo "Conexion  realizada exitosamente";
 ?>
