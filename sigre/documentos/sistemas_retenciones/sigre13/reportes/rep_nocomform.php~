<?php
require('fpdf.php');
$sel = array (1,3);
		class PDF extends FPDF
		{
		// Cabecera de página
				function Header()
				{
								// Logo
        $this->SetDrawColor(0,50,124);
        $this->SetFillColor(255,255,255);
       	$this->Image('imagenes_02.jpg',10,8,33);
								// Arial bold 15
								$this->SetFont('Arial','B',13);
								// Movernos a la derecha
								$this->Cell(80);
								// Título
							 $this->Cell(30,10,'Gerencia de Fraccionamineto Y Despacho');
								$this->Ln(6);
								
								$this->Setx(80);
								$this->Cell(30,10,'Manual de Procedimiento para la Administracion');	
								$this->Ln(6);
								
								$this->Setx(120);
								$this->Cell(30,10,'de la Calidad');
								$this->Ln(10);
								$this->Setx(100);
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
//mi consulta
 include("conexion/Conexion1.php");
		$link=Conectarse(); 
        $ide1="nc0015   ";
        //$ide1=$_GET['id1'];
	 $busqueda=mysql_query("SELECT * FROM d004t_nocomformidad where num_audit='$ide1'");
  $totEmp = mysql_num_rows($busqueda);
		$c_ide = "";
		$c_propo = "";
		$c_fecha = "";
		$c_descrp= "";
		$c_tiponoconfor= "";
        $c_desc_tiponoconfor= "";
		$c_requiere= "";
		$c_unidad="";
        $c_descrpunidad="";
        $c_nomb_pro="";
        $c_descp_tipnc= "";
	
  print ("<Table>\n"); 
print ("<TR>\n");
while($filas=mysql_fetch_array($busqueda))
  {
					$idex=$filas['num_audit'];
						//$localiza_imagen=$filas['foto_alumno'];
						$fechx=$filas['fech_audit_noconfom'];
						$ced_propx=$filas['num_ced_proponente'];
						$descrx=$filas['text_descrip'];
						$tipo_ncx=$filas['text_tipo_nc'];
      $requiere_ncx=$filas['num_requierent'];
      $unidadareancx=$filas['num_inidad_nocofor'];
                       // echo "unidad ".$unidadareancx;
      	/*printf("<td bgcolor='#FFFFFF'>
						    <font size='2'>&nbsp;%s</td>  <td bgcolor='#FFFFFF'><font size='2'>&nbsp;%s</td> <td ><font size='2'>&nbsp;%s</td> 
						    </tr>",$idex, $ced_propx, $descrx);
		/*========== pasar a Variable para imprimir como objetos pdf =========*/
						$c_ide = $c_ide.$idex."\n";
						$c_propo = $c_propo.$ced_propx."\n";
						$c_fecha = $c_fecha.$fechx."\n";
				        $c_descrp= $c_descrp.$descrx."\n";
						
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
        
/*========== pasar a Variable para imprimir como objetos pdf =========*/
$c_descp_tipnc=$c_descp_tipnc.$descp_tipncx."\n";
$c_requiere=$c_requiere.$num_requiereNCx."\n";
$c_unidad=$c_unidad.$num_unidadncx."\n";
$c_descrpunidad=$c_descrpunidad.$descp_unidadncx."\n";
$c_tiponoconfor= $c_tiponoconfor.$num_tipncx."\n";

/*==========================================================================*/
//Now show the 3 columns
$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->ln(5);
$pdf->SetFont('Arial','b',10);
//Now show the 3 columns
//****************************/
$pdf=new PDF('L','mm','Letter'); // vertical, milimetros y tamaño
$pdf->Open();
$pdf->AddPage(); // agregamos la pagina
$pdf->SetMargins(20,20,20); // definimos los margenes en este caso estan en milimetros
$pdf->Ln(10); // dejamos un pequeño espacio de 10 milimetros
//************cuadro de codigo y fecha*****************/
$pdf->SetY(9);
$pdf->SetX(210);
$pdf->Cell(40,6,"No. ".$c_ide,1,'C');

$pdf->SetY(19);
$pdf->SetX(210);
$pdf->cell(40,6,"Dia Mes Ano",1,'C');

$pdf->SetY(25);
$pdf->SetX(210);
$pdf->cell(40,6,$c_fecha,1,'C');
$pdf->Ln(10); 
//***************************/
$pdf->SetY(50);
$pdf->SetX(10);
$pdf->Cell(35,6,"Proponentes:  ".$c_nomb_pro,1,'C');

$pdf->SetY(57);
$pdf->SetX(10);
$pdf->Cell(33,6,"Descripcion:  ".$c_descrp,1,'C');
/*===================Tipo de Conformidad===================*/
$pdf->SetY(65);
$pdf->SetX(10);
$pdf->Cell(250,6,"",1,'C');
$pdf->SetY(65);
$pdf->SetX(90);
$pdf->Cell(250,6,"Tipo de No Conformidad",'C');
/*==========================================*/
$pdf->SetY(75);
$pdf->SetX(10);
$pdf->Cell(33,6,"Descripcion:  ".$c_descp_tipnc,1,'C');

/*===================Area===================*/
$pdf->SetY(85);
$pdf->SetX(10);
$pdf->Cell(250,6,"",1,'C');
$pdf->SetY(85);
$pdf->SetX(90);
$pdf->Cell(250,6,"Area o Unidad",'C');
/*==========================================*/
/*=================Unidad=====================*/
$pdf->SetY(95);
$pdf->SetX(10);
$pdf->Cell(33,6,"Descripcion:  ".$c_descrpunidad,1,'C');
/*==========================================*/


$filename="index2_prueba.pdf";
$pdf->Output($filename,'F');
echo'<a href="reportes/index2_prueba.pdf">Descargar reporte</a>';
//$pdf->Output();

?>
