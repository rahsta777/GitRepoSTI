<?php

include("conexion/Conexion1.php");
$link=Conectarse(); 
$query_num_services =  mysql_query("SELECT * FROM tbl_fact ORDER BY fecha_fact DESC ");
$num_total_registros = mysql_num_rows($query_num_services);

                    $fact2="";
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
		
	//echo 'page'.$_GET['page'];

    //contando el desplazamiento
    $offset = ($pageNum - 1) * $rowsPerPage;
    $total_paginas = ceil($num_total_registros / $rowsPerPage);
 echo 'total paginas: ['.$offset."]";
                    
    $query_services = mysql_query("SELECT * FROM  tbl_fact ORDER BY fecha_fact  DESC LIMIT $offset, $rowsPerPage");
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
						<div class="service_list" id="service'.$row_services['idprove'].'" data="'.$row_services['idprove'].'">
                         	
                            <div class="center_block">
                                <a title="Factura:'.$row_services['id_fact'].'" class="product_img_link" href="#">
                                <img  alt="'.$row_services['id_fact'].'" ></a>
                                <h3><a title="Factura'.$row_services['id_fact'].'" href="#">'.$row_services['id_fact'].'</a></h3>
                                <p class="product_desc">'.$p_desc.'</p>';
                                
								$query_num_ratings =  mysql_query("SELECT COUNT(*) as num FROM services_rating WHERE rating_id=".$row_services['id_fact']);
								$num_ratings = mysql_result($query_num_ratings, 0, "num");
								
								$query_sum_ratings =  mysql_query("SELECT SUM(rating_num) as sum FROM services_rating WHERE rating_id=".$row_services['id_fact']);
								
								if(mysql_result($query_sum_ratings, 0, "sum") > 0)
									$sum_ratings = mysql_result($query_sum_ratings, 0, "sum");
								else
									$sum_ratings = 0;
								
								echo $sum_rating;
								
								$rating = 0;
								
								if ($num_ratings > 0) {
									$rating = round($sum_ratings / $num_ratings);
								}

                               
                                echo '<div class="rating" id="rating'.$row_services['idprove'].'" data="'.$row_services['idprove'].'">';
							
								for ($i=1; $i<=5; $i++) {
									if ($i <= $rating)
										echo '<div class="estrella selected" id="rating'.$row_services['idprove'].'_'.$i.'" data='.$i.'>&nbsp;</div>';
									else
										echo '<div class="estrella" id="rating'.$row_services['idprove'].'_'.$i.'" data='.$i.'>&nbsp;</div>';
								}
                                    echo $row_services['idprove']; 
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
	
}