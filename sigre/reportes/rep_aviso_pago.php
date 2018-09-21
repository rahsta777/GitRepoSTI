<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php
require('fpdf.php');
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
								$this->Cell(30,10,'Gerencia de Pagos Corporativos ');
                                $this->Ln(5);
                                $this->Setx(30);
                                $this->Cell(30,10,'Tesoreria y Finanzas');
                                $this->SetFont('Arial','B',9);
                                $this->Ln(6);
                                
								
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
		$c_dir2_prov = "";
		$c_represent_prove= "";
        $c_tlf_prove="";
        $c_mail_prove= "";
        $c_represent_prove="";
        $c_lugar_prove="";
        $c_dir_prov = "";
        $c_fech_prov = "";;
        $c_import_fact ="";
        $c_factu_prov="";
        $c_fech_fact="";
        $c_desc_fact="";
$c_deducible_fact="";   
$c_base_impo="";
$c_impuesto="";   
$c_impuesto0="";
$c_impuesto1 =""; 
$c_impuesto2="";
$c_des_deduc1="";
$c_des_deduc2="";
$c_des_deduc3="";
        ?>
        

  <table width="950px" border="0" align="center" class="contacto_listar_id">
   <tr><td></td><td></td><td></td>
<td height="20" align="center" colspan="4" ><a HREF='citas.php' onClick="javascript:window.close(self)" ><img src="../images/Exit.png" title="Cerrar"  width="26" height="26"  />Cerrar</a></td>
	    <tr>
	      <td colspan="9" align="center" bgcolor="#ccc" class="box1" style='color:#0033ff;font:font-family:bold' ><strong >Aviso de Pago</strong>  </td>
	    </tr>
	    <tr bgcolor="#bf8b90" style='color:#fff;font:font-family:bold'align="center">
    	      <td  >No.Id</td>
            <td style='width:145px;'>Nombre Razon Social</td>
    	      <td style='width:125px;'>Representante</td>
              

             <?php 
              $imporet1=0;
              $porce1=0;
              $deducible=0; 
              $base_impo=0;
              $impuesto=0;
              
     if (isset($_GET["varidavis"]))
        {      
        
        include("conexion/Conexion1.php");
        $link=Conectarse(); 
        $buscar_avisopgo=trim($_GET["varidavis"]);
        
        $matriavisos = explode('*',$buscar_avisopgo);
				 $bus1av=$matriavisos[0];
                 $bus2av=$matriavisos[1];
        //echo "paso ".$buscar_avisopgo;
      
	      $busqueda=mysql_query("SELECT * FROM tbl_prov  WHERE  prov_rif ='".$bus1av."' " );
		 
        
         if($busqueda ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
        
                 } /*fin del if error sql*/ 
               // $res = mysql_query($busqueda,$link) or die("Error en: $busqueda: " . mysql_error()); 
           while($filas=mysql_fetch_array($busqueda))
           {
            
             if(isset($filas['prov_rif'])) 
               {
                                $id_avisopgo=$filas['prov_rif'];
                                $nomb_prov_avisopgo=$filas['razon_prov'];
                                $represent_avisopgo=$filas['repres_prov'];
                                $dir_avisopgo=$filas['dir1_prov'];
                                $lugar_avisopgo=$filas['lugar_prov'];
                                	
                                	
                                 
                                
                                //$fecha1=$filas['fe_fecha'];
                                //WHERE idprove='".$id."'
                  }
        		$busqueda2 =mysql_query("SELECT * FROM tbl_fact WHERE idprove='".$bus1av."' && id_fact  IN (SELECT id_fact_st  FROM status_fact ) order by fecha_fact ASC ");
                    
            	   	 while($filas2=mysql_fetch_array($busqueda2))
                                {		
                                $fact_avisopgo=$filas2['id_fact'];
                                $id_provfact_avisopgo=$filas2['idprove'];
                                $desc_provfact_avisopgo=$filas2['descrip'];
                                $fech_fact_x_avisopgo=$filas2['fecha_fact'];
                                 $montofact_x_avisopgo=$filas2['monto_fact'];
                                  $busqueda3 =mysql_query("SELECT * FROM status_fact  WHERE id_fact_st='".$fact_avisopgo."'  ");
                                while($filas3=mysql_fetch_array($busqueda3))
                                       {   
                                         $Deduc_x=$filas3['deducible']/100;
                                         $Deduc1_x=$filas3['deducible1']/100;
                                         $Deduc2_x=$filas3['deducible2']/100;

                                         $Deduc_x01=$filas3['deducible'];
                                         $Deduc11_x=$filas3['deducible1'];
                                         $Deduc21_x=$filas3['deducible2'];
                                         //echo "Paso 1:  Deducc1:[$Deduc_x]   Deducc2:[$Deduc1_x]  Deducc3:[$Deduc2_x] ";  
                                    	
                                          $busqueda32 =mysql_query("SELECT * FROM tip_retencion  ");
                                          while($filas32=mysql_fetch_array($busqueda32))
                                               { 
                                                   if (($Deduc_x01==$filas32['VALOR']) and ($Deduc_x01!=0))
                                                   { 
                                                       $des_Deduc_x= $filas32['descr_tip_ret'];
                                                       //echo $des_Deduc_x."<br>";
                                                      
                                                   }
                                                   else if ($Deduc_x01==0) 
                                                       $des_Deduc1_x="sin descrip";

                                                       if (($Deduc11_x==$filas32['VALOR']) and ($Deduc11_x!=0)){
                                                          $des_Deduc1_x=$filas32['descr_tip_ret'];
                                                          //echo $des_Deduc1_x."<br>";
                                                        
                                                       } else 
                                                          if ($Deduc11_x==0) 
                                                       $des_Deduc1_x="sin descrip";
                                                    if (($Deduc21_x==$filas32['VALOR']) and ($Deduc21_x!=0)){
                                                    $des_Deduc2_x=$filas32['descr_tip_ret'];
                                                    //echo $des_Deduc2_x."<br>";
                                                    
                                                   } else 
                                                   if ($Deduc21_x==0)  $des_Deduc2_x="sin descrip";
                                               
                                               //echo "Paso 1:  Deducc1:[$Deduc_x]   Deducc2:[$Deduc1_x]  Deducc3:[$Deduc2_x] ";  
                                           }

                                   }
                                   $montofact_r1=$montofact_x_avisopgo;              	
       /***********************convierte DE AMERICANA a cifra LATINA separador mil con punto .**************************/
          
                                   if(!empty($montofact_x_avisopgo)){
				$mivalor0 = explode('.',str_replace(',','.',$montofact_x_avisopgo));
				$montofact_x_avisopgo=$mivalor0[0]."".$mivalor0[1].".".$mivalor0[2];
									 }
              //  echo "paso2: montofact :[$montofact_x_avisopgo]   "; 
                  /*_________________________________calculo de retencion__________________________________*/
                               $calc_deduc=($montofact_x_avisopgo*$Deduc_x);
                               $calc_deduc1=($montofact_x_avisopgo*$Deduc1_x);
                               $calc_deduc2=($montofact_x_avisopgo*$Deduc2_x);
                                                                     
                                 
                                $imporet1=$calc_deduc+$calc_deduc1+$calc_deduc2;
                                 /*_________________________________calculos__________________________________*/
                                 /*========================formato a latino para mostrar en pantalla===================================*/
                               
                                $monto_format=number_format($calc_deduc,2,",",".");
                                $monto_format1=number_format($calc_deduc1,2,",",".");
                                $monto_format2=number_format($calc_deduc2,2,",",".");
                                 //echo "Paso3: monto_format1:[$monto_format]   monto_format2:[$monto_format1] monto_format3:[$monto_format2] ";  

                                $imporet1=number_format($imporet1,2,",",".");
                                $deduc1=$monto_format;
                                $deduc2=$monto_format1;
                                $deduc3=$monto_format2;
                               $des="Descrip %";
                                 //echo $deducible." base imp ".$base_impo." importe ".$imporet1." impuesto ".$impuesto;
                                 /*_________________________________calculo de retencion__________________________________*/
                                
                                
    		         ?>
    	       <tr>
               <?php
              
                printf("<td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> <td ><font size='2'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> ", $id_avisopgo, $nomb_prov_avisopgo, $represent_avisopgo);
                /***============================================================================================================***/
                
                   ?>  </tr> 
         <tr bgcolor="#bf8b90" style='color:#fff;font:font-family:bold'align="center">   
              <td width="124">Fecha</td>   
              <td >Factura</td>
              <td >Descuento</td>
              <td >Importe Bruto</td>
             
        </tr>    <?php  
                printf("<tr><td><font size='2'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td> <td bgcolor='#ccc'><font size='2'>&nbsp;%s</td> ", $fech_fact_x_avisopgo, $fact_avisopgo, $imporet1, $montofact_r1);
                  ?>  </tr> 
         <tr bgcolor="#bf8b90" style='color:#fff;font:font-family:bold'align="center">   
               <td >% </td>
               <td >% Deducc.</td>
              <td >Descuento</td>
              
             
        </tr>    <?php  
                 printf("<tr><td><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td>", $des_Deduc_x, $Deduc_x, $monto_format);
                 printf("<tr><td><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td>", $des_Deduc1_x, $Deduc1_x, $monto_format1);
                 printf("<tr><td><font size='2'>&nbsp;%s</td><td><font size='2'>&nbsp;%s</td> <td><font size='2'>&nbsp;%s</td>", $des_Deduc2_x, $Deduc2_x , $monto_format2);
 ?>
        	 <?php   /***============================================================================================================***/ // }            
              
              /*========== pasar a Variable para imprimir como objetos pdf $c_code = $c_code.$cod_empl."\n";=========*/
		$c_ide_prov =$c_ide_prov.$id_avisopgo."\n"; 
		
		$c_represent_prove= "";
        $c_tlf_prove="";
        $c_mail_prove= "";
        $c_represent_prove="";
        $c_factu_prov =$c_factu_prov.$fact_avisopgo."\n";
        $c_import_fact =$c_import_fact.$montofact_r1."\n";
        $c_fech_fact=$c_fech_fact.$fech_fact_x_avisopgo."\n"; 
        $c_desc_fact=$c_desc_fact.$desc_provfact_avisopgo."\n";
        $c_deducible_fact=$c_deducible_fact.$deducible."\n";  
        $c_base_impo= $c_base_impo.$base_impo."\n"; 
        $c_impuesto=$c_impuesto.$imporet1."\n";
        $c_impuesto0=$c_impuesto0.$monto_format."\n";
        $c_impuesto1=$c_impuesto1.$monto_format1."\n";
        $c_impuesto2=$c_impuesto2.$monto_format2."\n";
        $c_des_deduc1=$c_des_deduc1.$des_Deduc_x."\n";
        $c_des_deduc2=$c_des_deduc2.$des_Deduc1_x."\n";
        $c_des_deduc3=$c_des_deduc3. $des_Deduc2_x."\n";
        ?>
        
    					     
    					
    				
<div id='msn_procesar'></div>
     <!---------------------------- modal content -------------------------------->
    	 	
           
           
                    
    				
    			  
    			</tr>
    			<p>
    		   <?php } /*fin del while sql*/ 
          }
          
           }
           $c_nomb_prov =$c_nomb_prov .$nomb_prov_avisopgo."\n";
		
        $c_lugar_prove= $c_lugar_prove.$lugar_avisopgo."\n";
        $c_dir_prov =$c_dir_prov. $dir_avisopgo."\n";
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
$pdf->ln(2);
$pdf->SetFont('Arial','I',9);
//Now show the 3 columns
//****************************/
$pdf=new PDF('L','mm','Letter'); // vertical, milimetros y tamaño
$pdf->Open();
$pdf->AddPage(); // agregamos la pagina
$pdf->SetMargins(20,20,20); // definimos los margenes en este caso estan en milimetros
$pdf->Ln(2); // dejamos un pequeño espacio de 10 milimetros
//************cuadro de codigo y fecha*****************/
$pdf->SetFont('Arial','B',8);
	$pdf->SetFillColor(0, 126, 216);
		$pdf->SetTextColor(64);
		$pdf->SetDrawColor(0, 126, 216);
$pdf->SetY(9);
$pdf->SetX(210);
$pdf->Cell(40,6,"Aviso de Pago No. ",1,'C');

$pdf->SetY(16);
$pdf->SetX(210);
$pdf->cell(40,6,"Fecha:".$c_fech_fact,1,'C');
 
$pdf->SetY(23);
$pdf->SetX(210);
$pdf->cell(40,6,"Codigo Acreedor",1,'C');
    
//***************************/
$pdf->SetY(30);
$pdf->SetX(210);
$pdf->cell(40,6,"Banco:",1,'C');
//***************************/
$pdf->SetY(37);
$pdf->SetX(210);
$pdf->cell(40,6,"Descuento:",1,'C');
//***************************/
$pdf->SetY(44);
$pdf->SetX(210);
$pdf->cell(40,6,"Cuenta:",1,'C');
 //***************************/
$pdf->SetY(51);
$pdf->SetX(210);
$pdf->cell(40,6,"No.Rif:",1,'C');
//***************************/
$pdf->SetY(58);
$pdf->SetX(210);
$pdf->cell(40,6,"Moneda de Pago:",1,'C');
//***************************/
$pdf->SetY(65);
$pdf->SetX(210);
$pdf->cell(40,6,"Propuesta:",1,'C');
/*=======================================*/
$pdf->SetY(34);
$pdf->SetX(10);
$pdf->Cell(40,6,$c_nomb_prov,'C');
$pdf->Ln(10);
/*==========================================*/

$pdf->SetY(38);
$pdf->SetX(10);
$pdf->Cell(70,6,$c_dir_prov,'C');
/*==========================================*/

$pdf->SetY(42);
$pdf->SetX(10);
$pdf->Cell(70,6,$c_lugar_prove,'C');
/*==========================================*/

$pdf->SetY(48);
$pdf->SetX(10);
$pdf->Cell(160,6,"Distinguido Sr(es)as) Con el Documento de pago: 33333333 se compensara las partidas abajo",1,'C');

/*========================================================================Area===================*/
$pdf->SetFont('Arial','B',7);
$pdf->SetY(97);
$pdf->SetX(50);
$pdf->Cell(13,6,"Doc/SAP",1,'C');
/*==========================================*/
/*===================Area===================*/
$pdf->SetY(104);
$pdf->SetX(50);
$pdf->Cell(13,6,"Doc.SAP",1,'C');
/*==========================================*/

$pdf->SetY(97);
$pdf->SetX(64);
$pdf->Cell(16,6,"FACTURA",1,'C');
/*==========================================*/
/*==========================================*/

$pdf->SetY(104);
$pdf->SetX(64);
$pdf->MultiCell(16,6,$c_factu_prov,1,'C');
/*==========================================*/
/*===================Area===================*/

$pdf->SetY(97);
$pdf->SetX(80);
$pdf->Cell(20,6,"FECHA",1,'C');
/*==========================================*/
$pdf->SetY(104);
$pdf->SetX(80);
$pdf->MultiCell(20,6,$c_fech_fact,1,'C');
/*===================Area===================*/
$pdf->SetY(110);
$pdf->SetX(75);
$pdf->MultiCell(25,6,$c_des_deduc1,1,'C');
$pdf->SetY(116);
$pdf->SetX(75);
$pdf->MultiCell(25,6,$c_des_deduc2,1,'C');
$pdf->SetY(122);
$pdf->SetX(75);
$pdf->MultiCell(25,6,$c_des_deduc3,1,'C');

$pdf->SetY(97);
$pdf->SetX(100);
$pdf->Cell(20,6,"DESCUENTO",1,'C');
/*==========================================*/
$pdf->SetY(104);
$pdf->SetX(100);
$pdf->MultiCell(20,6,$c_impuesto,1,'C');
$pdf->SetY(110);
$pdf->SetX(100);
$pdf->MultiCell(20,6,$c_impuesto0,1,'C');
$pdf->SetY(116);
$pdf->SetX(100);
$pdf->MultiCell(20,6,$c_impuesto1,1,'C');
$pdf->SetY(122);
$pdf->SetX(100);
$pdf->MultiCell(20,6,$c_impuesto2,1,'C');

 
/*===================Area===================*/

$pdf->SetY(97);
$pdf->SetX(120);
$pdf->Cell(30,6,"IMPORTE Bruto",1,'C');
/*==========================================*/
$pdf->SetY(104);
$pdf->SetX(120);
$pdf->MultiCell(30,6,$c_import_fact,1,'C');
/*===================Area===================*/




$filename="avisopago.pdf";
$pdf->Output($filename,'F');
echo'<a href="'.$filename.'"><img src="../images/confprint.png">imprimir Aviso de Pago</a>';
//$pdf->Output();

?>
