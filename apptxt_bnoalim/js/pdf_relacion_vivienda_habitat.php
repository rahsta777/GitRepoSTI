<?php
define('FPDF_FONTPATH','font/');
require('mc_table3.php');
require('fphp_nomina.php');
//mysql_connect('10.10.1.11','root','%ceasupervisorroot%');
//mysql_selectdb('siacea');
connect();
//---------------------------------------------------

//---------------------------------------------------
//	Imprime la cabedera del documento
function Cabecera($pdf, $ftiponom, $nomina, $proceso, $periodo, $periodo_fecha) {
	$pdf->AddPage();
	$pdf->SetDrawColor(255, 255, 255); $pdf->SetFillColor(255, 255, 255); $pdf->SetTextColor(0, 0, 0);
	$pdf->SetFont('Arial', 'B', 8);
	
	$pdf->Cell(190, 5, ('CONTRALORIA DEL ESTADO'), 0, 1, 'L');
	$pdf->Cell(190, 5, ('DIRECCION DE RECURSOS HUMANOS'), 0, 1, 'L');
	$pdf->Cell(190, 5, ('REPORTE DE RETENCIONES Y APORTES PATRONALES'), 0, 1, 'L');
	$pdf->Cell(190, 5, ('CORRESPONDIENTE A LA LEY DE REGIMEN PRESTACIONAL DE VIVIENDA Y HABITAT'), 0, 1, 'L');
	$pdf->Cell(190, 5, ('TIPO DE NOMINA '.$nomina), 0, 1, 'L');
	//$pdf->Cell(190, 5, ($proceso), 0, 1, 'L');
	$pdf->Ln(1);
	$pdf->SetFont('Arial', '', 8);
	$pdf->Cell(190, 5, ($periodo_fecha), 0, 1, 'C');
	$pdf->Ln(3);
	
	$pdf->SetFont('Arial', 'B', 8);
	$pdf->SetDrawColor(0, 0, 0); $pdf->SetFillColor(255, 255, 255); $pdf->SetTextColor(0, 0, 0);
	$pdf->SetWidths(array(20, 80, 30, 30, 30));
	$pdf->SetAligns(array('C', 'C', 'C', 'C', 'C'));
	$pdf->Row(array('CEDULA', 'APELLIDOS Y NOMBRES', 'SALARIO', 'RETENCIONES', 'APORTES'));
}
//---------------------------------------------------

//---------------------------------------------------
//	Creación del objeto de la clase heredada
$pdf = new PDF_MC_Table();
$pdf->Open();
$pdf->SetMargins(10, 15, 10);

//	Tipo de Nomina
$sql = "SELECT Nomina FROM tiponomina WHERE CodTipoNom = '".$ftiponom."'";
$query_nomina = mysql_query($sql) or die ($sql.mysql_error());
if (mysql_num_rows($query_nomina) != 0) $field_nomina = mysql_fetch_array($query_nomina);

//	Tipo de Proceso
$sql = "SELECT Descripcion FROM pr_tipoproceso WHERE CodTipoProceso = '".$ftproceso."'";
$query_proceso = mysql_query($sql) or die ($sql.mysql_error());
if (mysql_num_rows($query_proceso) != 0) $field_proceso = mysql_fetch_array($query_proceso);

//	Periodo
$fecha_desde=$fperiodo."-01";
$fecha_hasta=$fperiodo."-30";
//list($fecha_desde, $fecha_hasta) = getPeriodoProceso($ftproceso, $fperiodo, $ftiponom);
$periodo_fecha = "DESDE: ".formatFechaDMA($fecha_desde)." HASTA: ".formatFechaDMA($fecha_hasta);


Cabecera($pdf, $ftiponom, $field_nomina['Nomina'], $field_proceso['Descripcion'], $periodo, $periodo_fecha);

//	Cuerpo
//	Cuerpo
$sql = "SELECT
			mp.CodPersona,
			mp.Ndocumento,
			mp.NomCompleto AS Busqueda,
			SUM(ptne.TotalIngresos),
			SUM(ptnec.Monto) as Retencion,
			(SELECT SUM(TotalIngresos)
				FROM pr_tiponominaempleado
				WHERE CodPersona = mp.CodPersona AND CodTipoNom = '".$ftiponom."' AND Periodo = '".$fperiodo."') AS TotalIngresosMes,
			ptnec.Cantidad,
			(SELECT SUM(Monto) FROM pr_tiponominaempleadoconcepto WHERE CodPersona = mp.CodPersona AND CodTipoNom = '".$ftiponom."' AND Periodo = '".$fperiodo."' AND CodConcepto = '0031') AS Aporte
		FROM
			mastpersonas mp
			INNER JOIN pr_tiponominaempleado ptne ON (mp.CodPersona = ptne.CodPersona)
			INNER JOIN pr_tiponominaempleadoconcepto ptnec ON (ptne.CodPersona = ptnec.CodPersona AND ptne.CodTipoNom = ptnec.CodTipoNom AND ptne.Periodo = ptnec.Periodo AND ptne.CodTipoproceso = ptnec.CodTipoProceso AND ptnec.CodConcepto = '0026')
		WHERE
			ptne.CodTipoNom = '".$ftiponom."' AND
			ptne.Periodo = '".$fperiodo."'
			GROUP BY mp.CodPersona
		ORDER BY length(mp.Ndocumento), mp.Ndocumento";
//echo $sql;
$query = mysql_query($sql) or die ($sql.mysql_error());
while ($field = mysql_fetch_array($query)) {
	//	---------------------------------------
	if ($field['Cantidad'] != $lunes) {
		$_ARGS['TRABAJADOR'] = $field['CodPersona'];
		//$field['TotalIngresos'] = TOTAL_ASIGNACIONES($_ARGS);
	}
	//	---------------------------------------

$sql_aux="SELECT sum(Monto) as Monto FROM pr_tiponominaempleadoconcepto WHERE CodPersona = '".$field['CodPersona']."' AND CodTipoNom = '".$ftiponom."' AND Periodo = '".$fperiodo."' AND CodConcepto = '0019'";
		$query_aux=mysql_query($sql_aux);
		$prima_hijo=mysql_fetch_assoc($query_aux);
$sql_aux2="SELECT sum(Monto) as Monto FROM pr_tiponominaempleadoconcepto WHERE CodPersona = '".$field['CodPersona']."' AND CodTipoNom = '".$ftiponom."' AND Periodo = '".$fperiodo."' AND CodConcepto = '0185'";
        $query_aux2=mysql_query($sql_aux2);
        $bono_nac_hijo=mysql_fetch_assoc($query_aux2);
$sql_aux3="SELECT sum(Monto) as Monto FROM pr_tiponominaempleadoconcepto WHERE CodPersona = '".$field['CodPersona']."' AND CodTipoNom = '".$ftiponom."' AND Periodo = '".$fperiodo."' AND CodConcepto = '0063'";
        $query_aux3=mysql_query($sql_aux3);
        $bono_vac=mysql_fetch_assoc($query_aux3);
$sql_aux4="SELECT sum(Monto) as Monto FROM pr_tiponominaempleadoconcepto WHERE CodPersona = '".$field['CodPersona']."' AND CodTipoNom = '".$ftiponom."' AND Periodo = '".$fperiodo."' AND CodConcepto = '0156'";
        $query_aux4=mysql_query($sql_aux4);
        $diferencia_bono_vac=mysql_fetch_assoc($query_aux4);
$sql_aux5="SELECT sum(Monto) as Monto FROM pr_tiponominaempleadoconcepto WHERE CodPersona = '".$field['CodPersona']."' AND CodTipoNom = '".$ftiponom."' AND Periodo = '".$fperiodo."' AND CodConcepto = '0082'";
        $query_aux5=mysql_query($sql_aux5);
        $bono_ayuda_mat=mysql_fetch_assoc($query_aux5);
$sql_aux6="SELECT sum(Monto) as Monto FROM pr_tiponominaempleadoconcepto WHERE CodPersona = '".$field['CodPersona']."' AND CodTipoNom = '".$ftiponom."' AND Periodo = '".$fperiodo."' AND CodTipoProceso='SBS' ";
        $query_aux6=mysql_query($sql_aux6);
        $sub_socioe=mysql_fetch_assoc($query_aux6);
$sql_aux7="SELECT sum(Monto) as Monto FROM pr_tiponominaempleadoconcepto WHERE CodPersona = '".$field['CodPersona']."' AND CodTipoNom = '".$ftiponom."' AND Periodo = '".$fperiodo."' AND CodConcepto = '0208' ";
        $query_aux7=mysql_query($sql_aux7);
        $sso_sub=mysql_fetch_assoc($query_aux7);
	$sum_ingresos=0;
	$total+=$field['TotalIngresosMes']-$prima_hijo['Monto']-$bono_nac_hijo['Monto']-$bono_vac['Monto']-$diferencia_bono_vac['Monto']-$bono_ayuda_mat['Monto']-$sub_socioe['Monto'];
//echo $field['TotalIngresosMes'];
//die();
	$sum_ingresos += $field['TotalIngresosMes']-$prima_hijo['Monto']-$bono_nac_hijo['Monto']-$bono_vac['Monto']-$diferencia_bono_vac['Monto']-$bono_ayuda_mat['Monto']-$sub_socioe['Monto'];
	$sum_retenciones += $field['Retencion'];
	//$sum_aportes += $field['Aporte']+$sso_sub['Monto'];
	$sum_aportes += $field['Aporte'];
	$pdf->SetFont('Arial', '', 8);
	$pdf->SetDrawColor(0, 0, 0); $pdf->SetFillColor(255, 255, 255); $pdf->SetTextColor(0, 0, 0);
	$pdf->SetWidths(array(20, 70, 10, 30, 30, 30));
	$pdf->SetAligns(array('R', 'L', 'R', 'R', 'R', 'R'));
	$pdf->Row(array(number_format($field['Ndocumento'], 0, '', '.'),
					utf8_decode($field['Busqueda']),
					number_format($field['Cantidad'], 0, ',', '.'),
					number_format($sum_ingresos, 2, ',', '.'),
					number_format($field['Retencion'], 2, ',', '.'),
					number_format($field['Aporte'], 2, ',', '.')));
	if ($pdf->GetY() > 260) Cabecera($pdf, $ftiponom, $field_nomina['Nomina'], $field_proceso['Descripcion'], $periodo, $periodo_fecha);
}
//---------------------------------------------------
$pdf->SetFont('Arial', 'B', 8);
$pdf->Row(array('', 'TOTAL', '', number_format($total, 2, ',', '.'), number_format($sum_retenciones, 2, ',', '.'), number_format($sum_aportes, 2, ',', '.')));
//---------------------------------------------------
list($nomelaborado, $carelaborado) = getFirmaNomina($|, $fperiodo, $ftproceso, "ProcesadoPor");
list($nomaprobado, $caraprobado) = getFirmaNomina($ftiponom, $fperiodo, $ftproceso, "AprobadoPor");
//---------------------------------------------------
$pdf->Ln(25);
$y = $pdf->GetY();
$pdf->Rect(10, $y, 70, 0.1, "DF");
$pdf->Rect(120, $y, 70, 0.1, "DF");
$pdf->SetFont('Arial', '', 8);
$pdf->SetXY(10, $y);
$pdf->Cell(110, 4, ('ELABORADO POR:'), 0, 0, 'L');
$pdf->Cell(80, 4, ('CONFORMADO POR:'), 0, 1, 'L');
$pdf->Cell(110, 4, utf8_decode($nomelaborado), 0, 0, 'L');
$pdf->Cell(80, 4, utf8_decode($nomaprobado), 0, 1, 'L');
$pdf->Cell(110, 4, utf8_decode($carelaborado), 0, 0, 'L');
$pdf->Cell(80, 4, utf8_decode($caraprobado), 0, 1, 'L');
//---------------------------------------------------
$pdf->Output();
?>
