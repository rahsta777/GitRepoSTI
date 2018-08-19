<?php
 ////////////////////////////////////////////////////
//Convierte fecha de sql a normal
////////////////////////////////////////////////////
    function cambia_fecha_a_normal($fecha)
	{
		 if(!empty($fecha)){
			 $mifecha = explode('/',str_replace('-','/',$fecha));
    alert("paso a fecha"+$mifecha); 
			 return $mifecha[2].'/'.$mifecha[1].'/'.$mifecha[0];
		 }
	}
////////////////////////////////////////////////////
//Convierte fecha de normal a sql
////////////////////////////////////////////////////
function cambia_fecha_a_db($fecha)
{
    if(!empty($fecha)){
			 $mifecha = explode('-',str_replace('/','-',$fecha));
    alert("paso a fecha"+$mifecha);
			return $mifecha[2].'-'.$mifecha[1].'-'.$mifecha[0];
		 }
}
?>
