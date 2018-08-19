<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style_audit.css" >
</head>
	<body>
<?php

/**
 * @author leydy
 * @copyright 2015
 */include("conexion/Conexion1.php");
$link=Conectarse(); 
 $tipox=$_POST["tipo_audit"];
include("fnc/f_fecha.php");
if ($tipox=="programacion") 
		{
			//------------------------ Datos de Entrada ---------------------------------
		    $idprogram=$_POST["num_detall_prog"];
            $idprogram_d=$_POST["num_detall_prog"]."d";
            $fech_act_prg=$_POST["num_fech_prog"];
            $descrp_act_prg=$_POST["num_desc_prog"];
             $cargo_act_prg=$_POST["num_carg_prog"];
             $filial_act_prg=$_POST["num_filial_prog"];
             $grcia_act=$_POST["num_grcia_prog"];
            $undad_act=$_POST["num_unid_prog"];
            $fec_adb=cambia_fecha_a_db($fech_act_prg); 
             /*echo  "id ".$idprogram."<br>";
             echo  "descrip ".$descrp_act_prg."<br>";
             echo  "cargo".$cargo_act_prg."<br>";
             echo  "filial ".$filial_act_prg."<br>";*/
                
           $Sql_1 = "UPDATE d001_programa_aud SET  fe_fecha='" .$fec_adb. "', descrp_program='".$descrp_act_prg."', num_filial='".$filial_act_prg."', num_cargo='".$cargo_act_prg."' WHERE num_detalle='$idprogram' ";
			$result1=mysql_query($Sql_1);
             echo  "ide con d: ".$idprogram_d."<br>";
            if(isset($result1)){
                /*echo  "Gercia".$grcia_act."<br>";
                echo  "unidad  ".$undad_act."<br>";
                echo  "fecha".$fec_adb."<br>";*/
                $Sql_2 = "UPDATE j0014t_detalle_programa SET  num_gerencia='".$grcia_act."', num_unidad='".$undad_act."', 	fe_mes='".$fec_adb."' WHERE num_detall_program='".$idprogram_d."' ";
                $result2=mysql_query($Sql_2);
                     }
			if (!$result2){
			 	?>
                     <script type="text/javascript">
                        alert("No se Realizo La Actulizaci&oacute;n");
                        </script>
                        
                         <div id="fila_conectar">  <div id="box_conectar"> 
                            <?php
                            print ("<BR><img  id='aline_imagen' src='images/loading.gif' width='10%' alt='' /> \n");
                            print ("<P id='contacto' ALIGN='CENTER'>Aguarde Procesando......</P>\n");
                            echo "<meta http-equiv=Refresh content=1;url=index0.php?a=1>";
							//$affected = pg_affected_rows($result);
                              ?> </div> &aacute; </div> <?php
                   	        echo "<meta http-equiv=Refresh content=1;url=index0.php?a=1>";
						}else { ?>
						  <script type="text/javascript">
                        alert("Registro Efectuado");
                        </script>
                        <div id="fila_conectar">  <div id="box_conectar"> 
                        <?php
                            print ("<BR><img  id='aline_imagen' src='images/loading.gif' width='10%' alt='' /> \n");
                            print ("<P id='contacto' ALIGN='CENTER'>Aguarde Procesando......</P>\n");
                            echo "<meta http-equiv=Refresh content=1;url=index0.php?a=1>";
							//$affected = pg_affected_rows($result);
                              ?> </div> &aacute; </div> <?php
                     
					 		} 
			
        }
        /*------------------------ ACT AUDITORIA ---------------------------------*/
		   
             
        if ($tipox=="auditoria") 
		{
		
		    $idprogram=$_POST["num_audit"];
            $fech_act=$_POST["num_fech_audit"];
            $fec_adb=cambia_fecha_a_db($fech_act); 
            $descrp_act=$_POST["num_desc_audit"];
            $filia_act=$_POST["num_filial"];
            $cargo_act=$_POST["num_cargo"];
            $requisit_act=$_POST["num_requisit_audit"];
            $grcia_act=$_POST["num_gcia_audit"];
           $text_act=$_POST["texto_audit_unid"];
           $ced_act=$_POST["ced_audit"];
           $niv_act=$_POST["num_audit_niv"];
           $notas_act=$_POST["notas_audit"];
              $Sql_3 = "UPDATE j0013t_auditoria SET num_gerencia='" .$grcia_act. "', tex_unidad='".$text_act."', 	num_ced='".$ced_act."', 	fe_fecha='".$fec_adb."' WHERE num_auditoria='$idprogram' ";
			$result3=mysql_query($Sql_3);
             echo  "ide con d: ".$idprogram_d."<br>";
            if(isset($result3)){
                /*echo  "Gercia".$grcia_act."<br>";
                echo  "unidad  ".$undad_act."<br>";
                echo  "fecha".$fec_adb."<br>";*/
                $Sql_4 = "UPDATE d003t_detalle_aud SET  num_requisito='".$requisit_act."', tex_Descrp='".$text_act."', num_nivl='".$niv_act."', tex_nota='".$notas_act."'  WHERE num_auditoria1='".$idprogram_d."' ";
                $result4=mysql_query($Sql_4);
                     }
			if (!$result4){
			 	?>
                     <script type="text/javascript">
                        alert("No se Realizo La Actulizaci&oacute;n");
                        </script>
                        
                         <div id="fila_conectar">  <div id="box_conectar"> 
                            <?php
                            print ("<BR><img  id='aline_imagen' src='images/loading.gif' width='10%' alt='' /> \n");
                            print ("<P id='contacto' ALIGN='CENTER'>Aguarde Procesando......</P>\n");
                            echo "<meta http-equiv=Refresh content=1;url=index0.php?a=1>";
							//$affected = pg_affected_rows($result);
                              ?> </div> &aacute; </div> <?php
                   	        echo "<meta http-equiv=Refresh content=1;url=index0.php?a=1>";
						}else { ?>
						  <script type="text/javascript">
                        alert("Registro Efectuado");
                        </script>
                        <div id="fila_conectar">  <div id="box_conectar"> 
                        <?php
                            print ("<BR><img  id='aline_imagen' src='images/loading.gif' width='10%' alt='' /> \n");
                            print ("<P id='contacto' ALIGN='CENTER'>Aguarde Procesando......</P>\n");
                            echo "<meta http-equiv=Refresh content=1;url=index0.php?a=1>";
							//$affected = pg_affected_rows($result);
                              ?> </div> &aacute; </div> <?php
                     
					 		} 
			
        }
        /*------------------------ ACT PLAN ---------------------------------*/
        if ($tipox=="plan") 
		{
			//------------------------ Datos de Entrada ---------------------------------
		    $idprogram_plan=$_POST["numplan_audit"];
            $idprogram_d=$_POST["numplan_audit"];
            $fech_act_plan=$_POST["fech_plan"];
            $descrp_act_pln=$_POST["desc_plan"];
             $cargo_act_pln=$_POST["num_cargo_plan"];
             $requisito_act_pln=$_POST["num_Requisito_plan"];
             $activi_act_pln=$_POST["num_activ_plan"];
            $undad_act_pln=$_POST["num_unid_plan"];
            $ced_deta_plan=$_POST["num_cedula_plan"];
            $fec_adbpln=cambia_fecha_a_db($fech_act_plan); 
             echo  "fecha ".$fec_adbpln."<br>";
             /*echo  "descrip ".$descrp_act_prg."<br>";
             echo  "cargo".$cargo_act_prg."<br>";
             echo  "filial ".$filial_act_prg."<br>";*/
                
           $Sql_1 = "UPDATE j005t_planes SET  descrp_planes='" .$descrp_act_pln. "', fe_fecha_planes='".$fec_adbpln."' WHERE num_planes='$idprogram_plan' ";
			$result1=mysql_query($Sql_1);
             echo  "ide con d: ".$idprogram_d."<br>";
            if(isset($result1)){
                /*echo  "Gercia".$grcia_act."<br>";
                echo  "unidad  ".$undad_act."<br>";
                echo  "fecha".$fec_adb."<br>";*/
                $Sql_2 = "UPDATE d002t_detalle_plan SET  num_activi='".$activi_act_pln."', 	num_requisito='".$requisito_act_pln."', num_cargo='".$cargo_act_pln."', num_unidaddelleplan='".$undad_act_pln."', fecha_detall='".$fec_adbpln."', num_cedula='".$ced_deta_plan."' WHERE num_plan='".$idprogram_d."' ";
                $result2=mysql_query($Sql_2);
                     }
			if (!$result2){
			 	?>
                     <script type="text/javascript">
                        alert("No se Realizo La Actulizaci&oacute;n");
                        </script>
                        
                         <div id="fila_conectar">  <div id="box_conectar"> 
                            <?php
                            print ("<BR><img  id='aline_imagen' src='images/loading.gif' width='10%' alt='' /> \n");
                            print ("<P id='contacto' ALIGN='CENTER'>Aguarde Procesando......</P>\n");
                            echo "<meta http-equiv=Refresh content=1;url=index0.php?a=1>";
							//$affected = pg_affected_rows($result);
                              ?> </div> &aacute; </div> <?php
                   	        echo "<meta http-equiv=Refresh content=1;url=index0.php?a=1>";
						}else { ?>
						  <script type="text/javascript">
                        alert("Registro Efectuado");
                        </script>
                        <div id="fila_conectar">  <div id="box_conectar"> 
                        <?php
                            print ("<BR><img  id='aline_imagen' src='images/loading.gif' width='10%' alt='' /> \n");
                            print ("<P id='contacto' ALIGN='CENTER'>Aguarde Procesando......</P>\n");
                            echo "<meta http-equiv=Refresh content=1;url=index0.php?a=1>";
							//$affected = pg_affected_rows($result);
                              ?> </div> &aacute; </div> <?php
                     
					 		} 
			
        }
        /*========================Fin UPdate PLAN======================================*/
?>
</body>
</html>