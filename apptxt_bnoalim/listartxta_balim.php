<?PHP
	 $periodo_txt_rx = $_POST['periodo_txt_tx'];
  	/*echo'<script type="text/javascript">
	alert("paso a la consulta"+"'.$periodo_txt_rx.'")
	alert("paso a registrar el campo usuario ");
	 </script>';
	echo"resultado sql...".$periodo_txt_rx;*/
    include("conexion/Conexion_siacea.php"); 
    $link=Conectarse(); 
 	$date=date("d_m_y");
   	 $tiempo=strftime("%H:%M:%S");
    if (isset($_POST["periodo_txt_tx"]))
        {  
		$busqueda=mysql_query("SELECT Periodo, TotalPagar, Nacionalidad, Ndocumento, FechaFin FROM rh_bonoalimentacion 
        INNER JOIN rh_bonoalimentaciondet ON rh_bonoalimentacion.Periodo='".$periodo_txt_rx."' && rh_bonoalimentacion.CodBonoAlim=rh_bonoalimentaciondet.CodBonoAlim && rh_bonoalimentacion.Anio=rh_bonoalimentaciondet.Anio
        INNER JOIN mastpersonas ON mastpersonas.CodPersona=rh_bonoalimentaciondet.CodPersona 
        where rh_bonoalimentacion.Estado='A'
		order by Ndocumento ASC ");
				 
									print("<TABLE cellspacing='0' cellpadding='2' border='0'  ALIGN=CENTER> ");
									print ("<TR bgcolor='#3151B2' style='color:#fff;font:font-family:bold'>");
									print ("<TH>C&eacute;dula</TH>");
									print ("<TH>Total</TH>");
									print ("<TH>Periodo</TH>");
									print ("</TR>");   
		 		      $jump = "\r\n";
    								$separator = "  ";
    								$file="abono_alim"."$date"."_"."$tiempo".".txt";
    								$fp=fopen($file,"a");
    								$registro = 'titulo' . $separator . 'imagen' . $separator . 'lecturas' . $separator .  $jump;
		 		       				while($lafila=mysql_fetch_array($busqueda))
						           	{
									$Ndocumento_wt=$lafila['Ndocumento'];
									/**************antepone los ceros en la Documento de identidad*********/
									$tamanocifra=strlen($Ndocumento_wt);
									if($tamanocifra < 9){
										for($i = $tamanocifra; $i < 9; $i++){
											$ceros=0;
											$Ndocumento_wt=$ceros.$Ndocumento_wt;
										      }
									}
									$Ndocumento_wt="V".$Ndocumento_wt;
									/*echo $Ndocumento_wt."<br>";*/
									/****************/
									$TotalPagar_wt=$lafila['TotalPagar'];
									$TotalPagar_array = explode('.',str_replace('','.',$TotalPagar_wt));
									$TotalPagar_array=$TotalPagar_array[0].$TotalPagar_array[1];
									$tamTotalPagar=strlen($TotalPagar_array);
									if($tamTotalPagar < 21){
										for($j = $tamTotalPagar; $j < 21; $j++){
											$cerosx=0;
											$TotalPagar_array=$cerosx.$TotalPagar_array;
										      }
									}
									/*echo $TotalPagar_array."<br>";*/
									/***=======================================================**/

									$Periodo_wt=$lafila['FechaFin'];
									/*if(!empty($Periodo_wt)){*/
											$mifecha = explode('-',str_replace('/','-',$Periodo_wt));
												$Periodo_wt=$mifecha[2].$mifecha[1].$mifecha[0];
											 //echo $Periodo_wt."<br>";
									/*********** }**************************************/
									
									printf("<td bgcolor='#9DA7C6'><font size='3'>&nbsp;%s</td>    <td ><font size='3'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='3'>&nbsp;%s</td> 
				</tr>",$Ndocumento_wt, $TotalPagar_array, $Periodo_wt);
				$registro = $Ndocumento_wt . $separator . $TotalPagar_array . $Periodo_wt . $separator  . $jump;
        			fwrite($fp,$registro);
        			chmod($fp, 0777);
        							
										
							}
				//fwrite($fp,$registro);
				//fwrite($file, $registro);
				//fclose($fp);
   				
    			//echo 'Se han guardado '.mysql_num_rows($busqueda).' registros en el txt!';*/
	
		} else {
			echo "No existe periodo";
		}
		echo '<a href="descarga.php?archivo='.$file.'"> Descargar txt <a/>';
		
?>
