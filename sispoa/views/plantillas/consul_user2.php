<?php
/*require'include/../func.class.php';
 		$objUser=new Crudpoa;
		$consulta=$objUser->mostrar_users();*/
			

?>
  		
<?php

?>
<?php
include("conexion/Conexion1.php");
$Link=Conectarse(); 
//require('config.php');$status="activo";WHERE estado_user=".$status."

$query_num_services =  mysql_query("SELECT id_user, nomb_user  FROM user_audit ORDER BY id_user ASC");
$num_total_registros = mysql_num_rows($query_num_services);

//Si hay registros
 if ($num_total_registros > 0) {
	//numero de registros por página
    $rowsPerPage = 3;

    //por defecto mostramos la página 1
    $pageNum = 1;

    // si $_GET['page'] esta definido, usamos este número de página
    if(isset($_GET['page'])) {
		sleep(1);
    	$pageNum = $_GET['page'];
	}
		// echo $pageNum; 
	//echo 'page'.$_GET['page'];

    //contando el desplazamiento
    $offset = ($pageNum - 1) * $rowsPerPage;
    $total_paginas = ceil($num_total_registros / $rowsPerPage);
 		//echo 'total paginas: ['.$total_paginas."]";
	 
			$query_services = mysql_query("SELECT *  FROM user_audit ORDER BY id_user ASC  LIMIT $offset, $rowsPerPage");
	    while ($row_services = mysql_fetch_array($query_services)) {
	                       // $service = new Service($row_services['nomb_user']);
	    	$nombre_x=$row_services['nomb_user'];
			$apelli_x=$row_services['apel1_user'];
			$perfil_x=$row_services['perfil_user'];
			$alias_x=$row_services['alias_user'];
			$fech_ing_x=$row_services['fec_inin_user'];
			//printf(" <table><tr><td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td>   <td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td> <!--5--> <td><font size='2'>&nbsp;%s</td></tr></table>",$nombre_x, $apelli_x, $perfil_x, $alias_x, $fech_ing_x);
			$descripcion_desformateada = "<strong>Fecha de Reg</strong>:  ".$fech_ing_x;
	        $arrayTexto = split(' ',$descripcion_desformateada);
	        $texto = '';
	        $contador = 0;
	        
			// Reconstruimos la cadena
				        while(300 >= strlen($texto) + strlen($arrayTexto[$contador])){
				        	$texto .= ' '.$arrayTexto[$contador];
				            $contador++;
				        }
	        $p_desc = $texto.'...<br>';
			echo '<div class="service_list" id="service'.$row_services['id_user'].'" data="'.$row_services['id_user'].'">
	                         	
	                         <div class="center_block">
	                                <a title="ID del Usuario:'.$row_services['nomb_user'].'" class="product_img_link" href="#">
	                                <img  alt="'.$row_services['id_user'].'" ></a>
	                                <h3><a title="'.$row_services['alias_user'].'" href="#">'.$row_services['nomb_user']." ".$row_services['apel1_user'].'</a></h3>
	                                <p class="product_desc">'.$p_desc.'</p>';
	                               $query_num_ratings =  mysql_query("SELECT COUNT(*) as num FROM user_audit WHERE rating_id=".$row_services['id_user'], $conexion);
									$num_ratings = mysql_result($query_num_ratings, 0, "num");
								
									$query_sum_ratings =  mysql_query("SELECT SUM(rating_num) as sum FROM user_audit WHERE rating_id=".$row_services['id_user'], $conexion);
											if(mysql_result($query_sum_ratings0, 0, "sum") > 0)
												$sum_ratings0 = mysql_result($query_sum_ratings0, 0, "sum");
											else
												$sum_ratings0 = 0;
											
											echo $sum_rating0;
											
											$rating0 = 0;
											
											if ($num_ratings0 > 0) {
												$rating0 = round($sum_ratings0 / $num_ratings0);
											}
								                             
	                                echo '<div class="rating" id="rating'.$row_services['id_user'].'" data="'.$row_services['id_user'].'">';
								
									for ($i=1; $i<=5; $i++) {
										if ($i <= $rating)
											echo '<div class="estrella selected" id="rating'.$row_services['id_user'].'_'.$i.'" data='.$i.'>&nbsp;</div>';
										else
											echo '<div class="estrella" id="rating'.$row_services['id_user'].'_'.$i.'" data='.$i.'>&nbsp;</div>';
									}
	                                    echo "<strong>Perfil del Usuario: </strong>".$row_services['perfil_user'].""; 
	                                    
	                                     echo '<div id="sumrating" data="<?=$sum_ratings?>" style="display:none">&nbsp;</div>
	                                        <div id="numrating" data="<?=$num_ratings?>" style="display:none">&nbsp;</div>
	                                        <div id="actual" data="<?=$rating?>" style="display:none;">&nbsp;</div>
	                                        <div class="ok" style="display:none;">&nbsp;</div>
	                                    </div>
	                           	
	                            </div>

	                        </div>';

		}
		}
		 if ($total_paginas > 1) {
	                        echo '<div class="pagination">';
	                        echo '<ul>';
	                            if ($pageNum != 1)
	                                    echo '<li><a class="paginate" data="'.($pageNum-1).'">Anterior</a></li>';
	                            	for ($i=1;$i<=$total_paginas;$i++) {
	                                    if ($pageNum == $i)
	                                            //si muestro el índice de la página actual, no coloco enlace
	                                            echo '<li class="active"><a>'.$i.'</a></li>';
	                                    else
	                                            //si el índice no corresponde con la página mostrada actualmente,
	                                            //coloco el enlace para ir a esa página
	                                            echo '<li><a class="paginate" data="'.$i.'">'.$i.'</a></li>';
	                            }
	                            if ($pageNum != $total_paginas)
	                                    echo '<li><a class="paginate" data="'.($pageNum+1).'">Siguiente</a></li>';
	                       echo '</ul>';
	                       echo '</div>';
	                    }
	
	} 
?>
 <!--=================================================================================================-->  
  <?php 
  /*
include("conexion/Conexion1.php");
$link=Conectarse(); 
$query_num_services =  mysql_query("SELECT * FROM user_audit ORDER BY id_user  DESC");
$num_total_registros = mysql_num_rows($query_num_services);

                    $fact2="";
//Si hay registros
 if ($num_total_registros > 0) {
	//numero de registros por página
    $rowsPerPage = 2;

    //por defecto mostramos la página 1
    $pageNum = 1;

    // si $_GET['page'] esta definido, usamos este número de página
    if(isset($_GET['page'])) {
		sleep(1);
    	$pageNum = $_GET['page'];
	}
		
	//echo 'page'.$_GET['page'];

    //contando el desplazamiento
    $offset = ($pageNum - 1) * $rowsPerPage;
    $total_paginas = ceil($num_total_registros / $rowsPerPage);

                    
    $query_services = mysql_query("SELECT * FROM user_audit ORDER BY nomb_user DESC  LIMIT $offset, $rowsPerPage");
    while ($row_services = mysql_fetch_array($query_services)) {
                        //$service = new Service($row_services['service_id']);
		
		$descripcion_desformateada = strip_tags($row_services['description']);
        $arrayTexto = split(' ',$descripcion_desformateada);
        $texto = '';
        $contador = 0;
        
		// Reconstruimos la cadena
        while(300 >= strlen($texto) + strlen($arrayTexto[$contador])){
        	$texto .= ' '.$arrayTexto[$contador];
            $contador++;
        }
        $p_desc = $texto.'...<br>';
		
        			echo '
						<div class="service_list" id="service'.$row_services['id_user'].'" data="'.$row_services['id_user'].'">
                         	
                            <div class="center_block">
                                <a title="Factura:'.$row_services['id_user'].'" class="product_img_link" href="#">
                                <img  alt="'.$row_services['nomb_user'].'" ></a>
                                <h3><a title="Factura'.$row_services['id_user'].'" href="#">'.$row_services['nomb_user'].'</a></h3>
                                <p class="product_desc">'.$p_desc.'</p>';
                                
								$query_num_ratings =  mysql_query("SELECT COUNT(*) as num FROM user_audit WHERE id_user=".$row_services['id_user']);
								$num_ratings = mysql_result($query_num_ratings, 0, "num");
								
								$query_sum_ratings =  mysql_query("SELECT SUM(rating_num) as sum FROM user_audit WHERE id_user=".$row_services['id_user']);
								
								if(mysql_result($query_sum_ratings, 0, "sum") > 0)
									$sum_ratings = mysql_result($query_sum_ratings, 0, "sum");
								else
									$sum_ratings = 0;
								
								echo $sum_rating;
								
								$rating = 0;
								
								if ($num_ratings > 0) {
									$rating = round($sum_ratings / $num_ratings);
								}

                               
                                echo '<div class="rating" id="rating'.$row_services['id_user'].'" data="'.$row_services['id_user'].'">';
							
								for ($i=1; $i<=5; $i++) {
									if ($i <= $rating)
										echo '<div class="estrella selected" id="rating'.$row_services['id_user'].'_'.$i.'" data='.$i.'>&nbsp;</div>';
									else
										echo '<div class="estrella" id="rating'.$row_services['id_user'].'_'.$i.'" data='.$i.'>&nbsp;</div>';
								}
  echo $row_services['id_user']; 
                                     echo '<div id="sumrating" data="<?=$sum_ratings?>" style="display:none">&nbsp;</div>
                                        <div id="numrating" data="<?=$num_ratings?>" style="display:none">&nbsp;</div>
                                        <div id="actual" data="<?=$rating?>" style="display:none;">&nbsp;</div>
                                        <div class="ok" style="display:none;">&nbsp;</div>
                                    </div>
                           	
                            </div>

                        </div>';
	}
	
	 if ($total_paginas > 1) {
                        echo '<div class="pagination">';
                        echo '<ul>';
                            if ($pageNum != 1)
                                    echo '<li><a class="paginate" data="'.($pageNum-1).'">Anterior</a></li>';
                            	for ($i=1;$i<=$total_paginas;$i++) {
                                    if ($pageNum == $i)
                                            //si muestro el índice de la página actual, no coloco enlace
                                            echo '<li class="active"><a>'.$i.'</a></li>';
                                    else
                                            //si el índice no corresponde con la página mostrada actualmente,
                                            //coloco el enlace para ir a esa página
                                            echo '<li><a class="paginate" data="'.$i.'">'.$i.'</a></li>';
                            }
                            if ($pageNum != $total_paginas)
                                    echo '<li><a class="paginate" data="'.($pageNum+1).'">Siguiente</a></li>';
                       echo '</ul>';
                       echo '</div>';
                    }
	
}  */

?>