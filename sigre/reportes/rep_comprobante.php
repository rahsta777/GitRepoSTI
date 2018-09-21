<?php
require('fpdf.php');
header('Content-type: text/html; charset=utf-8'); 

$sel = array (1,3);
		class PDF extends FPDF
		{
		// Cabecera de página
				function Header()
				{
								// Logo
        $this->SetDrawColor(0,180,180);
        $this->SetFillColor(230,230,0);
       	$this->Image('imagenes_02.jpg',10,8,33);
								// Arial bold 15
								$this->SetFont('Arial','B',13);
								// Movernos a la derecha
								$this->Cell(30);
								// Título
                                $this->Ln(5);
                                $this->Setx(30);
							    $this->Cell(30,10,'Comprobante de Retencion de impuesto al Valor Agregado');
								$this->Ln(5);
								$this->Setx(30);
								$this->Cell(30,10,'Gerencia de Pagos Corporativos Tesoreria y Finanzas');
                                $this->SetFont('Arial','B',9);
                                $this->Ln(6);
                                $this->Cell(30,10,'Ley de Iva Art.11 "Seran  responsables de pago del impuesto en calidadde agente de retencion  ,  los');
                                $this->Ln(3);
                                $this->Cell(30,10,'los compradores o adquientes de determinado beines  inmuebles y los receptores de ciertos  servicios');	
				                $this->Ln(3);
                                $this->Cell(30,10,'a quienes la administracion tributaria desgne como tal');
								
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
        $c_ide_prov = "";
		$c_nomb_prov = "";
		$c_dir_prov = "";
		$c_represent_prove= "";
        $c_tlf_prove="";
        $c_mail_prove= "";
        $c_represent_prove="";
        $c_lugar_prove="";
        $c_fech_prov = "";;
        $c_import_fact ="";
        $c_factu_prov="";
        $c_fech_fact="";
        $c_desc_fact="";
$c_deducible_fact="";   
$c_base_impo="";
$c_impuesto="";     
        ?>
        

  <table width="950px" border="0" align="center" class="contacto_listar_id" id="boxcita">
   <tr><td></td><td></td><td></td>
<td height="20" align="center" colspan="4" ><a HREF='citas.php' onClick="javascript:window.close(self)" ><img src="../images/Exit.png" title="Cerrar"  width="26" height="26"  />Cerrar</a></td>

	    <tr>
	      <td colspan="9" align="center" bgcolor="#ccc" class="box1" style='color:#0033ff;font:font-family:bold' ><strong >Informacion de Facturas Procesadas</strong>  </td>
	    </tr>
	    <tr bgcolor="#bf8b90" style='color:#fff;font:font-family:bold'align="center">
    	      <td  >No.Id</td>
            <td style='width:145px;'>Nombre Razon Social</td>
    	      <td style='width:125px;'>Representante</td>
              <td width="124">Fecha</td>
    	     <td >Factura</td>
             <td >Descuento</td>
             <td >Importe Bruto</td>
             
        </tr>      
             <?php 
              $imporet1=0;
              $porce1=0;
              $deducible=0; 
              $base_impo=0;
              $impuesto=0;
              
     if (isset($_GET["varid"]))
        {      
        
        include("conexion/Conexion1.php");
        $link=Conectarse(); 
        $buscarvarcomp=trim($_GET["varid"]);
        $matris = explode('*',$buscarvarcomp);
				 $bus1=$matris[0];
                 $bus2=$matris[1];
               
        $buscar_comp=trim($bus1);
         // echo "id prove ".$bus1." fact ".$bus2;
      
	      $busqueda=mysql_query("SELECT * FROM tbl_prov  WHERE  prov_rif ='".$buscar_comp."' " );
		 
        
         if($busqueda ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
        
                 } /*fin del if error sql*/ 
               // $res = mysql_query($busqueda,$link) or die("Error en: $busqueda: " . mysql_error()); 
           while($filas=mysql_fetch_array($busqueda))
           {
            
             if(isset($filas['prov_rif'])) 
               {
                                $id=$filas['prov_rif'];
                                $nomb_prov=$filas['razon_prov'];
                                $represent=$filas['repres_prov'];
                                
                                
                                //$fecha1=$filas['fe_fecha'];
                                //WHERE idprove='".$id."'
                  }
        		$busqueda2 =mysql_query("SELECT * FROM tbl_fact WHERE idprove='".$id."' && 	id_fact= '$bus2'&& id_fact  IN (SELECT id_fact_st  FROM status_fact WHERE id_fact_st='$bus2' ) order by fecha_fact ASC ");
                    
            	   	 while($filas2=mysql_fetch_array($busqueda2))
                                {		
                                $fact=$filas2['id_fact'];
                                $id_provfact=$filas2['idprove'];
                                $desc_provfact=$filas2['descrip'];
                                $fech_fact_x=$filas2['fecha_fact'];
                                 $montofact_x=$filas2['monto_fact'];
                                 	
                                                	
       /***********************convierte DE AMERICANA a cifra LATINA separador mil con punto .**************************/
          
                                  if(!empty($montofact_x)){
                                          $mivalor0 = explode(',',str_replace('.',',',$montofact_x));
                                          $montofact_x1=$mivalor0[0].",".$mivalor0[1].".".$mivalor0[2];
                                          echo "monto Fact:  ".$montofact_x1."  [".$mivalor0[0]."]  [".$mivalor0[1]."]  [".$mivalor0[2]."]";
                                            }
                
                                 /*_________________________________calculos__________________________________*/
                               $porce1=14;$iva=0.12;
                                $imporet1=($montofact_x*($porce1/100));
                                $monto_format=number_format($imporet1,2,".",",");
                                
                                echo "Monto: $monto_fact";
                                  
                                           
                                $deducible=$monto_format;
                               
                                $base_impo=$montofact_x-$imporet1;
                               
                                $imporet1=number_format($imporet1,2,".",",");
                                
                                
                                 $impuesto=($base_impo*$iva);
                                 $impuesto=number_format($impuesto,2,".",",");
                                // echo $deducible." base imp ".$base_impo." importe ".$imporet1." impuesto ".$impuesto;
                                 /*_________________________________calculo de retencion__________________________________*/
                                
                                
    		         ?>
    	       <tr>
               <?php
              
                printf("<td bgcolor='#ccc'><font size='3'>&nbsp;%s</td> <td ><font size='3'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='3'>&nbsp;%s</td> <td><font size='3'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='3'>&nbsp;%s</td> <td><font size='3'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='3'>&nbsp;%s</td> ", $id, $nomb_prov, $represent, $fech_fact_x, $fact, $deducible, $montofact_x);
                /***============================================================================================================***/
 ?>
        	 <?php   /***============================================================================================================***/ // }            
              
              /*========== pasar a Variable para imprimir como objetos pdf $c_code = $c_code.$cod_empl."\n";=========*/
		$c_ide_prov =$c_ide_prov.$id."\n"; 
		$c_nomb_prov =$c_nomb_prov .$nomb_prov."\n";
		$c_dir_prov = "";
		$c_represent_prove= "";
        $c_tlf_prove="";
        $c_mail_prove= "";
        $c_represent_prove="";
        $c_lugar_prove="";
        $c_factu_prov =$c_factu_prov.$fact."\n";
        $c_import_fact =$c_import_fact.$montofact_x."\n";
        $c_fech_fact=$c_fech_fact.$fech_fact_x."\n"; 
        $c_desc_fact=$c_desc_fact.$desc_provfact."\n";
        $c_deducible_fact=$c_deducible_fact.$deducible."\n";  
        $c_base_impo= $c_base_impo.$base_impo."\n"; 
        $c_impuesto=$c_impuesto.$impuesto."\n";
        ?>
        
    					     
    				
    				
<div id='msn_procesar'></div>
     <!---------------------------- modal content -------------------------------->
    	 	
           
           
                    
    				
    			  
    			</tr>
    			<p>
    		   <?php } /*fin del while sql*/ 
          }
           }
           ?> 
         
           <td>
           
           </td><td>
	  
	      <!---/*---------------fin while fechtarray-----------------------------------------------*/-->
	      
	      </table>
          <?php 
		 
						
  
//echo "paso ".$c_propo;

/*==========================================================================*/
//Now show the 3 columns
$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->ln(5);
$pdf->SetFont('Arial','I',9);
//Now show the 3 columns
//****************************/
$pdf=new PDF('L','mm','Letter'); // vertical, milimetros y tamaño
$pdf->Open();
$pdf->AddPage(); // agregamos la pagina
$pdf->SetMargins(20,20,20); // definimos los margenes en este caso estan en milimetros
$pdf->Ln(7); // dejamos un pequeño espacio de 10 milimetros
//************cuadro de codigo y fecha*****************/
$pdf->SetFont('Arial','B',8);
	$pdf->SetFillColor(0, 126, 216);
		$pdf->SetTextColor(64);
		$pdf->SetDrawColor(0, 126, 216);
$pdf->SetY(9);
$pdf->SetX(210);
$pdf->Cell(40,6,"No.Factura ".$c_factu_prov,1,'C');

$pdf->SetY(19);
$pdf->SetX(210);
$pdf->cell(40,6,"Fecha",1,'C');

$pdf->SetY(25);
$pdf->SetX(210);
$pdf->cell(40,6,$c_fech_fact,1,'C');
$pdf->Ln(10); 
//***************************/
$pdf->SetY(50);
$pdf->SetX(10);
$pdf->Cell(85,6,"2. NOMBRE O RAZON SOCIAL DEL AGENTE DE RETENCION  ",1,'C');
//***************************/
$pdf->SetY(57);
$pdf->SetX(10);
$pdf->cell(40,6,"PDVSA GAS",1,'C');
 
//***************************/
$pdf->SetY(50);
$pdf->SetX(100);
$pdf->Cell(130,6,"3. REGISTRO DE INFORMACION FISCAL RAZON SOCIAL DEL AGENTE DE RETENCION  ",1,'C');
$pdf->Ln(10);
//***************************/
$pdf->SetY(57);
$pdf->SetX(100);
$pdf->Cell(70,6,"rif pdvsa",1,'C');
$pdf->Ln(10);
//***************************/
$pdf->SetY(65);
$pdf->SetX(10);
$pdf->Cell(70,6,"5. DIRECCION FICAL DEL AGENTE DE RETENCION  ",1,'C');
$pdf->Ln(10);
//***************************/
$pdf->SetY(70);
$pdf->SetX(10);
$pdf->Cell(70,6,"direccion de pdvsa",1,'C');
$pdf->Ln(10);
/*===================Tipo de Conformidad===================*/

$pdf->SetY(80);
$pdf->SetX(10);
$pdf->Cell(80,6,"6. NOMBRE O RAZON SOCIAL DEL SUJETO DE RETENIDO",1,'C');
$pdf->Ln(10);
/*==========================================*/
$pdf->SetY(87);
$pdf->SetX(10);
$pdf->Cell(40,6,$c_nomb_prov,1,'C');
$pdf->Ln(10);
/*==========================================*/
//***************************/
$pdf->SetY(80);
$pdf->SetX(100);
$pdf->Cell(130,6,"7 REGISTRO DE INFORMACION FISCAL RAZON SOCIAL DEL CONTRIBUYENTE  ",1,'C');
//***************************/
$pdf->SetY(87);
$pdf->SetX(100);
$pdf->Cell(70,6,$c_ide_prov,1,'C');

 
/*========================================================================Area===================*/
$pdf->SetFont('Arial','B',6);
$pdf->SetY(97);
$pdf->SetX(10);
$pdf->Cell(10,6,"Oper.No",1,'C');
/*==========================================*/
/*===================Area===================*/
$pdf->SetFont('Arial','B',4);
$pdf->SetY(104);
$pdf->SetX(10);
$pdf->Cell(10,6,"OPER.No",1,'C');
/*==========================================*/

$pdf->SetY(97);
$pdf->SetX(20);
$pdf->Cell(20,6,"FECHA DE LA FACTURA",1,'C');
/*==========================================*/
/*==========================================*/
$pdf->SetFont('Arial','B',7);
$pdf->SetY(104);
$pdf->SetX(20);
$pdf->Cell(20,6,$c_fech_fact,1,'C');
/*==========================================*/
/*===================Area===================*/
$pdf->SetFont('Arial','B',4);
$pdf->SetY(97);
$pdf->SetX(40);
$pdf->Cell(13,6,"No.de CONTROL",1,'C');
/*==========================================*/
$pdf->SetY(104);
$pdf->SetX(40);
$pdf->Cell(13,6,"",1,'C');
/*===================Area===================*/
$pdf->SetFont('Arial','B',4);
$pdf->SetY(97);
$pdf->SetX(53);
$pdf->Cell(14,6,"No. NOTA DEBITO",1,'C');
/*==========================================*/
$pdf->SetY(104);
$pdf->SetX(53);
$pdf->Cell(14,6,"",1,'C');
/*===================Area===================*/
$pdf->SetFont('Arial','B',4);
$pdf->SetY(97);
$pdf->SetX(69);
$pdf->Cell(15,6,"No. NOTA CREDITO.",1,'C');
/*==========================================*/
$pdf->SetY(104);
$pdf->SetX(69);
$pdf->Cell(15,6,"",1,'C');
/*===================Area===================*/
$pdf->SetFont('Arial','B',4);
$pdf->SetY(97);
$pdf->SetX(85);
$pdf->Cell(15,6,"TIPO TRANSACCION.",1,'C');
/*==========================================*/

$pdf->SetY(104);
$pdf->SetX(85);
$pdf->Cell(15,6,"",1,'C');
/*===================Area===================*/
$pdf->SetFont('Arial','B',4);
$pdf->SetY(97);
$pdf->SetX(101);
$pdf->Cell(27,6,"NUMERO DE LA FACTURA AFECTADA.",1,'C');
/*===================Area===================*/

/*===================Area===================*/
$pdf->SetFont('Arial','B',7);
$pdf->SetY(104);
$pdf->SetX(101);
$pdf->Cell(27,6,$c_factu_prov,1,'C');
/*==========================================*/
$pdf->SetFont('Arial','B',4);
$pdf->SetY(97);
$pdf->SetX(129);
$pdf->Cell(26,6,"TOTAL COMPRAS INCLUYENDO IVA",1,'C');
/*==========================================*/
$pdf->SetFont('Arial','B',7);
$pdf->SetY(104);
$pdf->SetX(129);
$pdf->Cell(26,6,$c_import_fact,1,'C');
/*==========================================*/
$pdf->SetFont('Arial','B',4);
$pdf->SetY(97);
$pdf->SetX(156);
$pdf->Cell(29,6,"COMPRA SIN DERECHO A CREDITO IVA",1,'C');
/*==========================================*/
$pdf->SetY(104);
$pdf->SetX(156);
$pdf->Cell(29,6,"",1,'C');
/*==========================================*/
$pdf->SetFont('Arial','B',4);
$pdf->SetY(97);
$pdf->SetX(185);
$pdf->Cell(15,6,"BASE IMPONIBLE.",1,'C');
/*==========================================*/
/*==========================================*/
$pdf->SetFont('Arial','B',7);
$pdf->SetY(104);
$pdf->SetX(185);
$pdf->Cell(15,6,$c_base_impo,1,'C');
$pdf->SetFont('Arial','B',4);
$pdf->SetY(97);
$pdf->SetX(200);
$pdf->Cell(15,6,"% ALICUOTA.",1,'C');
/*==========================================*/
$pdf->SetFont('Arial','B',7);
$pdf->SetY(104);
$pdf->SetX(200);
$pdf->Cell(15,6,"12%",1,'C');
/*==========================================*/
$pdf->SetFont('Arial','B',4);
$pdf->SetY(97);
$pdf->SetX(216);
$pdf->Cell(20,6,"IVA.",1,'C');
/*==========================================*/
$pdf->SetFont('Arial','B',7);
$pdf->SetY(104);
$pdf->SetX(216);
$pdf->Cell(20,6,$c_impuesto,1,'C');
/*==========================================*/
$pdf->SetFont('Arial','B',4);
$pdf->SetY(97);
$pdf->SetX(238);
$pdf->Cell(20,6,"IMP. RETENIDO 75%.",1,'C');
/*==========================================*/
$pdf->SetY(104);
$pdf->SetX(238);
$pdf->Cell(20,6,"",1,'C');



$filename="comprobante_retencion.pdf";
$pdf->Output($filename,'F');
echo'<a href="comprobante_retencion.pdf"> <img src="../images/confprint.png">Imprimir Comprobante </a>';

//$pdf->Output();

?>
