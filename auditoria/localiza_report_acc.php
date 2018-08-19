<html>
<head>
<title>Actualizaci&oacute;n</title>
</head>
<body >
 
	    <?php if (isset($_GET["proceso"])){ ?>
	   <div style="left: auto;" >   
		      <div>
			<div class="center" id="imagen"><!--<img src="mages/Top.jpg" height="100" width="900">--> </div>
		      </div>
	   </div>
        <?php } 
/*===Inicializa la Libreria y la Clase de Fpdf  ===*/
require('reportes/fpdf.php');
		class PDF extends FPDF
		{
		// Cabecera de página
				function Header()
				{
								// Logo
        $this->SetDrawColor(0,50,124);
        $this->SetFillColor(255,255,255);
       	$this->Image('reportes/imagenes_02.jpg',10,8,40);
								// Arial bold 15
								$this->SetFont('Arial','B',13);
								// Movernos a la derecha
								$this->Cell(80);
								// Título
								$this->Setx(60);
							 $this->Cell(30,10,'Gerencia de Fraccionamineto Y Despacho');
								$this->Ln(6);
								
								$this->Setx(40);
								$this->Cell(30,10,'Manual de Procedimiento para la Administracion');	
								$this->Ln(6);
								
								$this->Setx(80);
								$this->Cell(30,10,'de la Calidad');
								$this->Ln(10);
								$this->Setx(50);
								$this->Cell(100,10,'Reporte de No Comformidad',1,0,"C",1);
								// Salto de línea
								$this->Ln(20);
				}
		// Pie de página
					function Footer()
					{
									// Posición: a 1,5 cm del final
									$this->SetY(-15);
									// Arial italic 8
									$this->SetFont('Arial','I',8);
									// Número de página
									$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
					}
		}
/*==================================================*/
?>
	   <table width="700" border="0" align="center" class="contacto_listar_id">
	   
	    <div id="carta_imprimir">
	    <tr>
	      <td colspan="9" align="center" bgcolor="#751b23" class="box1" ><strong >LISTADO</strong>  </td>
	    </tr>
	    <tr bgcolor="#bf8b90" align="center">
    	      <td width="10">No.Id</td>
    	      <td width="30">Descripci&oacute;n</td>
    	    <td width="144">An&acute;lisis</td>
        </tr>      
          <?php 

     if (isset($_GET["repvar1"]))
        {      
        include("conexion/Conexion1.php");
								$link=Conectarse(); 
        $buscar=($_GET["repvar1"]);
        //$buscar2=($_GET["var2"]);
       //$procso=($_GET["proceso"]);
        
      /* echo "paso buscar el campo id:".$buscar."<br>";  
       echo "paso buscar tipo: (".$buscar2.")";*/
	 // echo "paso proceso: (".$procso.")";
        //echo "paso la busca ".$buscar; $busqueda=mysql_query("SELECT * from viento  WHERE  nombre LIKE '%".$buscar."%' OR tipo_art LIKE '%".$buscar."%' UNION ALL SELECT * from cuerda  WHERE  nombre LIKE '%".$buscar."%' OR tipo_art LIKE '%".$buscar."%' UNION ALL SELECT * from percusion  WHERE  nombre LIKE '%".$buscar."%' OR tipo_art LIKE '%".$buscar."%' UNION ALL SELECT * from electronicos  WHERE  nombre LIKE '%".$buscar."%' OR tipo_art LIKE '%".$buscar."%' "); 
    	//$busqueda=mysql_query("SELECT * from  tab3_inscrip, tab2_inscrip WHERE ced_doc LIKE '%".$buscar."%' OR Nomb_doc LIKE '%".$buscar."%' OR nomb_alumn LIKE '%".$buscar."%' OR ced_represe_alumn LIKE '%".$buscar."%'");
       
/*if (mysql_num_rows(mysql_query("SELECT num_detalle FROM d001_programa_aud WHERE num_detalle	='" . $_GET["var1"] . "'", $link))==true) {*/
            //echo "paso buscar tipo: (".$buscar2.")";

        /* UNION ALL SELECT * FROM  j005t_planes WHERE num_planes LIKE '%".$buscar."%' OR descrp_planes LIKE '%".$buscar."%' ");*/
         /*____________________________________________________________________________________
       if ($buscar2=="programacion"){
	      $busqueda=mysql_query("SELECT * FROM d001_programa_aud WHERE num_detalle LIKE '%".$buscar."%' or descrp_program  LIKE '%".$buscar."%'");
		  }
		if ($buscar2=="auditoria"){
	         //echo "paso buscar tipo: (".$buscar2.")";
	         $busqueda=mysql_query("SELECT * FROM d003t_detalle_aud WHERE num_auditoria1 LIKE '%".$buscar."%' or tex_Descrp  LIKE '%".$buscar."%'");
	      }
	    if ($buscar2=="plan"){
	       //echo "paso buscar tipo: (".$buscar2.")";
	    $busqueda=mysql_query("SELECT * FROM j005t_planes WHERE num_planes LIKE '%".$buscar."%' or descrp_planes LIKE '%".$buscar."%' ");
	      }
		if ($buscar2=="noconform"){
		  //echo "paso buscar tipo: (".$buscar2.")";
	        $busqueda=mysql_query("SELECT * FROM  d004t_nocomformidad WHERE num_audit LIKE '%".$buscar."%' or text_descrip LIKE '%".$buscar."%' ");
												      }
								/*___________________________________________________________________________*/  
 
/*============== Se inicializan las variables que van a guardar los datos========================*/
 $c_ide_acc = "";
$c_analisis_acc = "";
$c_fechaentr_acc = "";
$c_fechaculm_acc = "";
$c_descrp_acc= "";
$c_metodolog= "";
$c_herramta_acc= "";
$c_accion_aplicada= "";
$c_co_aprobado="";
  $c_comentario="";
  $c_ced_proponte="";
  $c_respustas_seguimto= "";
  $c_cierre=  "";
  $c_co_ced_aseg_sgc=  "";
  $c_co_ced_representte=  "";
  $c_fechaahora="";
/*=============================================================================================*/
$busqueda=mysql_query("SELECT * FROM  d005tacciones_correc_prev WHERE num_accion_corr_pre LIKE '%".$buscar."%' or descrip_accion_correc_prev LIKE '%".$buscar."%' ");
         if($busqueda ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
        
                 } /*fin del if error sql*/ 
               // $res = mysql_query($busqueda,$link) or die("Error en: $busqueda: " . mysql_error()); 
           while($filas=mysql_fetch_array($busqueda))
           {
                     $idex=$filas['num_accion_corr_pre'];
			         $analisis_accx =$filas['analis_accion_co_prev'];
                    $fechaentr_accx =$filas['fecha_entreg'];
                    $fechaculm_accx =$filas['fe_culmin'];
                    $descrp_accx=$filas['descrip_accion_correc_prev'];
                    $metodologx=$filas['metodolog_accion'];
                    $herramta_accx= $filas['herramientas']; 
                    $accion_aplicadax= $filas['accion_aplicada']; 
                    $co_aprobadox=$filas['co_aprob']; 
                     $comentariox=$filas['comentario']; 
                     $ced_propontex=$filas['num_ced_proponente']; 
                     $respustas_seguimtox=$filas['respseguimiento']; 
                     $cierrex=$filas['cierre']; ;
                     $co_ced_aseg_sgcx=$filas['co_ced_asegu_sgc']; 
                     $co_ced_representtex=$filas['co_ced_representt_sgc'];
                     $fech_act=date("d/m/Y");
                      // echo "unidad ".$unidadareancx;
																	printf("<td bgcolor='#FFFFFF'>
																				<font size='2'>&nbsp;%s</td>  <td bgcolor='#FFFFFF'><font size='2'>&nbsp;%s</td> <td ><font size='2'>&nbsp;%s</td> 
																				</tr>",$idex, $descrp_accx, $analisis_accx );
												/*========== pasar a Variable para imprimir como objetos pdf =========*/
															$c_ide_acc=$c_ide_acc.$idex ."\n";;
                                                            $c_analisis_acc = $c_analisis_acc.$analisis_accx."\n";
                                                            $c_fechaahora=$c_fechaahora.$fech_act."\n";
                                                            $c_fechaentr_acc = "";
                                                            $c_fechaculm_acc = "";
                                                            $c_descrp_acc=$c_descrp_acc.$descrp_accx."\n";
                                                            $c_metodolog= "";
                                                            $c_herramta_acc= "";
                                                            $c_accion_aplicada=$c_accion_aplicada.$accion_aplicadax."\n";
                                                            $c_co_aprobado="";
                                                              $c_comentario=$c_comentario.$comentariox."\n";
                                                              $c_ced_proponte="";
                                                              $c_respustas_seguimto= "";
                                                              $c_cierre=  "";
                                                              $c_co_ced_aseg_sgc=  "";
                                                              $c_co_ced_representte=  "";

    		         ?>
    	       <tr>
               <?php 
	
                //printf("<td><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td>   ", 	$idex, 	$descrx);
              //echo ('<a href="treino.php?id="' . $id  . '">' .  $localiza_imagen . " Usuario " .  $ced_alum."</a>" ); ?>
    						     
    					
    					 <td>
       <!--------------=================================================================================----- 
       <form action="detalle.php" method="post" >
    				 <input name="id_local" type="hidden" value="<?php echo $id_act;?>" />
									<input name="variable1" type="hidden" value="<?php echo $buscar2;?>" />
									<input name="variable2" type="hidden" value="<?php echo $buscar;?>" />
         <input  style="background:url(images/fondo_input/fondo_input_g.png);width:100px;height:30px ;" type="submit"  name='basic' value='Actualizar' class='basic'/>
         </form>
    			==================================================================================================================-->
    			
                    </td>
            
     	</tr>
    			<p>
    		   <?php } /*fin del while sql*/ 
          }
           //echo "paso ".$c_propo;
/*===================================Consulta Proponentes============================================*/
if(isset($c_propo))
		{
				$busqueda2=mysql_query("SELECT *	FROM j008t_ced_proponente WHERE num_ced_proponente ='$ced_propx'  order by num_ced_proponente ASC");
				if(mysql_error())
								 		{
								   		echo mysql_error();
								   		return;
								 		}
					while($row = mysql_fetch_array($busqueda2)) 
								{ 
								$ced_prox=$row['num_ced_proponente'];
								$nomb_prox=$row['descri_proponente'];
		      $c_nomb_pro=$c_nomb_pro.$nomb_prox."\n";
		      			}
		 }
/*=====================================Consulta Tipo NC=====================================================*/
if(isset($tipo_ncx))	
		{
				$busqueda3=mysql_query("SELECT * FROM j009t_tipo_nc WHERE num_tip_nc ='$tipo_ncx' order by num_tip_nc ASC");
				if(mysql_error())
								 		{
								   		echo mysql_error();
								   		return;
								 		} 
								while($row3 = mysql_fetch_array($busqueda3)) 
								{ 
								$num_tipncx=$row3['num_tip_nc'];
								$descp_tipncx=$row3['descr_nc'];
								}
				//mysql_free_result($result);
		}
        /*=====================================Consulta Requierente=====================================================*/
if(isset($requiere_ncx))	
		{
				$busqueda4=mysql_query("SELECT * FROM j011t_requiere WHERE 	num_requiere ='$requiere_ncx' order by num_requiere ASC");
				if(mysql_error())
								 		{
								   		echo mysql_error();
								   		return;
								 		} 
								while($row4 = mysql_fetch_array($busqueda4)) 
								{ 
								$num_requiereNCx=$row4['num_requiere'];
								$descp_requiereNCx=$row4['descrip_requiere'];
								}
				//mysql_free_result($result);
		}
            /*=====================================Consulta UnidadArea=====================================================*/
if(isset($unidadareancx))	
		{
				$busqueda5=mysql_query("SELECT * FROM i005t_unidad WHERE num_unidad ='$unidadareancx' order by num_unidad ASC");
				if(mysql_error())
								 		{
								   		echo mysql_error();
								   		return;
								 		} 
								while($row5 = mysql_fetch_array($busqueda5)) 
								{ 
        								$num_unidadncx=$row5['num_unidad'];
                                        $descp_unidadncx=$row5['descrip_unidad'];
                                }
				//mysql_free_result($result);
		}
 /*=====================================Consulta UnidadArea=====================================================*/
if(isset($evalx))	
		{
				$busqueda5=mysql_query("SELECT * FROM j004t_ced_evaluador WHERE  num_ced_evaluadr ='$evalx' order by num_ced_evaluadr ASC");
				if(mysql_error())
								 		{
								   		echo mysql_error();
								   		return;
								 		} 
								while($row5 = mysql_fetch_array($busqueda5)) 
								{ 
        								$num_evaluadorncx=$row5['num_ced_evaluadr'];
                $descp_evaluadorncx=$row5['descrp'];
                                }
				//mysql_free_result($result);
		}     
   
/*========== pasar a Variable para imprimir como objetos pdf =========*/

//$c_Recomendacion=$c_Recomendacion.$recomendx."\n";
/*==========================================================================*/
//Now show the 3 columns
$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->ln(5);
$pdf->SetFont('Arial','b',10);
//Now show the 3 columns
//****************************/
$pdf=new PDF('P','mm','Letter'); // vertical, milimetros y tamaño
$pdf->Open();
$pdf->AddPage(); // agregamos la pagina
$pdf->SetMargins(20,20,20); // definimos los margenes en este caso estan en milimetros
$pdf->Ln(10); // dejamos un pequeño espacio de 10 milimetros
//*****************************/
$pdf->SetY(9);
$pdf->SetX(160);
$pdf->Cell(40,6,"No. ".$c_ide_acc,1,'C');

$pdf->SetY(19);
$pdf->SetX(160);
$pdf->cell(40,6,"Dia Mes Ano",1,'C');

$pdf->SetY(25);
$pdf->SetX(160);
$pdf->cell(40,6,$c_fechaahora,1,'C');
$pdf->Ln(10); 
//***************************/

$pdf->SetY(57);
$pdf->SetX(10);
$pdf->Cell(33,6,"Descripcion: "."  ".$c_descrp_acc,1,'C');
/*===================Tipo de Conformidad===================*/
$pdf->SetY(65);
$pdf->SetX(10);
$pdf->Cell(195,6,"",1,'C');
$pdf->SetY(65);
$pdf->SetX(68);
$pdf->Cell(194,6,"Analisis de la Conformidad",'C');
/*==========================================*/
$pdf->SetY(75);
$pdf->SetX(10);
$pdf->Cell(33,6,"Descripcion:  "."  ".$c_analisis_acc,1,'C');

/*===================Area===================*/
$pdf->SetY(85);
$pdf->SetX(10);
$pdf->Cell(195,6,"",1,'C');
$pdf->SetY(85);
$pdf->SetX(68);
$pdf->Cell(194,6,"Descripcion de la accion Preventiva/Correctiva",'C');
/*==========================================*/
/*=================Unidad=====================*/
$pdf->SetY(95);
$pdf->SetX(10);
$pdf->Cell(33,6,"Descripcion:  "."  ".$c_accion_aplicada,1,'C');
/*==========================================*/
/*===================Requiere===================*/
$pdf->SetY(105);
$pdf->SetX(10);
$pdf->Cell(195,6,"",1,'C');
$pdf->SetY(105);
$pdf->SetX(10);
$pdf->Cell(194,6,"Propuesta Por:",'C');
$pdf->SetX(90);
$pdf->Cell(194,6,"Fecha:        "." ".$c_fechaahora,1,'C');
/*==========================================*/
$pdf->SetY(115);
$pdf->SetX(10);
$pdf->Cell(195,6,"",1,'C');
$pdf->SetY(115);
$pdf->SetX(10);
$pdf->Cell(33,6,"Aprobacion ",'C');
/*==========================================*/
$pdf->SetY(125);
$pdf->SetX(10);
$pdf->Cell(100,6,"",1,'C');
$pdf->SetY(125);
$pdf->SetX(10);
$pdf->Cell(100,6,"Comentarios",'C');
$pdf->SetY(133);
$pdf->SetX(10);
$pdf->Cell(100,32,"".$c_comentario,1,'C');
/*==========================================*/
$pdf->SetY(125);
$pdf->SetX(112);
$pdf->Cell(100,6,"",1,'C');
$pdf->SetY(125);
$pdf->SetX(112);
$pdf->Cell(100,6,"Grupo Evaluador",'C');
$pdf->SetY(133);
$pdf->SetX(112);
$pdf->Cell(100,32,"",'C');
/*==========================================*/
$pdf->SetY(166);
$pdf->SetX(10);
$pdf->Cell(195,6,"",1,'C');
$pdf->SetY(166);
$pdf->SetX(125);
$pdf->Cell(10,6,"Firma",'C');
/**********************/
$pdf->SetY(174);
$pdf->SetX(10);
$pdf->Cell(60,15,"",1,'C');
/**********************/
$pdf->SetY(190);
$pdf->SetX(10);
$pdf->Cell(60,5,"Proponente",1,'C');
/**********************/
$pdf->SetY(174);
$pdf->SetX(76);
$pdf->Cell(60,15,"",1,'C');
/**********************/
$pdf->SetY(190);
$pdf->SetX(76);
$pdf->Cell(60,5,"Asegurador de la Calidad",1,'C');
/**********************/
/************************/
$pdf->SetY(174);
$pdf->SetX(140);
$pdf->Cell(60,15,"",1,'C');
/**********************/
$pdf->SetY(190);
$pdf->SetX(140);
$pdf->Cell(60,5,"Responsable",1,'C');
/**********************/
/*==========================================*/
$filename="reportes/index2_prueba.pdf";
$pdf->Output($filename,'F');
echo'<a href="reportes/index2_prueba.pdf">Descargar reporte</a>';
//$pdf->Output();

?>   
           </div>
           <tr><td>
           
           </td><td>
	   <!--a href="buscar.php?var2=<?php echo $localiza_x ?>&var1=<?php echo $localiza_x2 ?>&proceso=<?php echo $proceso ?>" > <input type="button" style="background:url(images/fondo_input/fondo_input_g.png));width:150px; height:30px ;" value="[Volver a Buscar]" ></a></td></tr-->
	      <!---/*---------------fin while fechtarray-----------------------------------------------*/-->
	      <div id="box_admin1" > 
		          
         </div>
	      <!---/*---------------fin while fechtarray-----------------------------------------------*/-->
	      </table>
                      	<!-- Load jQuery, SimpleModal and Basic JS files -->



</body>
</html>
