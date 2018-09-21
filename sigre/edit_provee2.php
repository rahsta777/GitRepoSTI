
<?php
        include("conexion/Conexion1.php");
      $Link=Conectarse(); 
        $fecha=date('Y-n-d');
        $idprove_x=trim($_POST['varprove']);
        $nomb_prove_x=($_POST['varprovenom']);
        $dir1_prove_x=($_POST['varprovedir1']);
        $dir2_prove_x=($_POST['varprovedir2']);
        $repre_prove_x=($_POST['varproverepre']);
        $tlf_prove_x=($_POST['varprovetlf']);
        $email_prove_x=($_POST['varproveemail']);
        $lugar_prove_x=($_POST['varlugar_prov']);
                
                
          
        if(!empty($idprove_x)){
		echo "pasaron las var ".$idprove_x.$nomb_prove_x.$dir1_prove_x.$dir2_prove_x.$repre_prove_x.$tlf_prove_x.$email_prove_x.$lugar_prove_x."<br>";
        	
									
    /*_______________________________________________________________________________________________*/
       
        
        $Sql = "UPDATE tbl_prov  SET  prov_rif='".$idprove_x."', razon_prov='".$nomb_prove_x."', dir1_prov='".$dir1_prove_x."', dir2_prov='".$dir2_prove_x."', repres_prov='".$repre_prove_x."', lugar_prov='".$lugar_prove_x."', Tlf_prove='".$tlf_prove_x."' , Email_prov='".$email_prove_x."'  WHERE prov_rif ='".$idprove_x."' ";
        $result= mysql_query($Sql,$Link);
				if (!$result){
			 	?>
                     <script type="text/javascript">
                        alert("No se Realizo La Actualizaci&oacute;n");
                        </script>
                          <?php                  
                           
                   	       
						}else { ?>
						  <script type="text/javascript">
                        alert("Registro Efectuado");
                        </script>
                        <?php
                     
					 		} 
              
                 ?>
                     
          <?php  
                }
            ?>
		

