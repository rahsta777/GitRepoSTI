<?PHP
   session_start ();
?>
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
	/*$anio_act=date("Y");
    $mes_act=date("m");
    $periodo_fech_act=$anio_act.'-'.$mes_act;
    echo "resultado del periodo   ".$periodo_fech_act;*/
$query_num_services0 =  mysql_query("SELECT id_prod, nomb_produc   FROM tb_productos ORDER BY id_prod ASC	");
$num_total_registros0 = mysql_num_rows($query_num_services0);

//Si hay registros
 if ($num_total_registros0 > 0) {
	//numero de registros por página
    $rowsPerPage0 = 3;

    //por defecto mostramos la página 1
    $pageNum0 = 1;

    // si $_GET['page'] esta definido, usamos este número de página
    if(isset($_GET['page'])) {
		sleep(1);
    	$pageNum0 = $_GET['page'];
	}
	
    //contando el desplazamiento
    $offset0 = ($pageNum0 - 1) * $rowsPerPage0;
    $total_paginas0 = ceil($num_total_registros0 / $rowsPerPage0);
 		//echo 'total paginas: ['.$total_paginas0."]";
	 mysql_query("SET NAMES 'utf8'");
			$query_services0 = mysql_query("SELECT *  FROM tb_productos ORDER BY id_prod ASC LIMIT $offset0, $rowsPerPage0");
			 mysql_query("SET NAMES 'utf8'");
	    while ($row_services0 = mysql_fetch_array($query_services0)) {
	                       // $service = new Service($row_services['nomb_user']);
	    	$unidad_x=$row_services0['unidad_dir'];
			$prod_x=$row_services0['nomb_produc'];
			$metas_x=$row_services0['metas'];
			$inducador_x=$row_services0['indicador'];
			$fech_ing_x=$row_services0['fecha_ini'];
			$fech_cul_x=$row_services0['fecha_cul'];
			$responsable_x=$row_services0['responsable_prod'];
			//printf(" <table><tr><td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td>   <td><font size='2'>&nbsp;%s</td> <td bgcolor='#9DA7C6'><font size='2'>&nbsp;%s</td> <!--5--> <td><font size='2'>&nbsp;%s</td></tr></table>",$nombre_x, $apelli_x, $perfil_x, $alias_x, $fech_ing_x);
			$descripcion_desformateada0 = "<strong>Meta</strong>:".$metas_x;
	        $arrayTexto0 = split(' ',$descripcion_desformateada0);
	        $texto0 = '';
	        $contador0 = 0;
	        
			// Reconstruimos la cadena
	        while(300 >= strlen($texto0) + strlen($arrayTexto0[$contador0])){
	        	$texto0.= ' '.$arrayTexto0[$contador0];
	            $contador0++;
	        }
	        $p_desc0 = $texto0.'...<br>';
			echo '<div class="service_list" id="service'.$row_services0['id_prod'].'" data="'.$row_services0['id_prod'].'">
	                         	
	                         <div class="center_block">
	                               <a title="ID Unidad:'.$row_services0['unidad_dir'].'" class="product_img_link" href="#">
	                               <img  alt="'.$row_services0['id_prod'].'" ></a>
	                               <h4><a title="'.$row_services0['metas'].'" href="#">'.$row_services0['nomb_produc']." ".$row_services0['indicador']."%".'</a></h4>
	                               <p class="product_desc">'.$p_desc0.'</p>';
	                               $query_num_ratings0 =  mysql_query("SELECT COUNT(*) as num FROM tb_productos WHERE rating_id=".$row_services0['id_prod'], $conexion);
								$num_ratings0 = mysql_result($query_num_ratings0, 0, "num");
								
								$query_sum_ratings0 =  mysql_query("SELECT SUM(rating_num) as sum FROM tb_productos WHERE rating_id=".$row_services0['id_prod'], $conexion);
								
								if(mysql_result($query_sum_ratings0, 0, "sum") > 0)
									$sum_ratings0 = mysql_result($query_sum_ratings0, 0, "sum");
								else
									$sum_ratings0 = 0;
								
								echo $sum_rating0;
								
								$rating0 = 0;
								
								if ($num_ratings0 > 0) {
									$rating0 = round($sum_ratings0 / $num_ratings0);
								}

	                               
	                                echo '<div class="rating" id="rating'.$row_services0['id_prod'].'" data="'.$row_services0['id_prod'].'">';
								
									for ($j=1; $j<=5; $j++) {
										if ($j <= $rating0)
											echo '<div class="estrella selected" id="rating'.$row_services0['id_prod'].'_'.$i.'" data='.$i.'>&nbsp;</div>';
										else
											echo '<div class="estrella" id="rating'.$row_services0['id_prod'].'_'.$i.'" data='.$i.'>&nbsp;</div>';
									}
	                                    echo "<strong>Fecha Inicio: </strong>".$row_services0['fecha_ini']." "."<strong>Fecha Culmin.: </strong>".$row_services0['fecha_cul']; 
	                                    
	                                     echo '<div id="sumrating" data="<?=$sum_ratings?>" style="display:none">&nbsp;</div>
	                                        <div id="numrating" data="<?=$num_ratings?>" style="display:none">&nbsp;</div>
	                                        <div id="actual" data="<?=$rating?>" style="display:none;">&nbsp;</div>
	                                        <div class="ok" style="display:none;">&nbsp;</div>
	                                    </div>
	                           	
	                            </div>

	                        </div>';

		}
		
		 if ($total_paginas0 > 1) {
	                        echo '<div class="pagination pagination-sm">';
	                        echo '<ul>';
	                            if ($pageNum0 != 1)
	                                    echo '<li><a class="paginate" data="'.($pageNum0-1).'">Anterior</a></li>';
	                            	for ($j=1;$j<=$total_paginas0;$j++) {
	                                    if ($pageNum0 == $j)
	                                            //si muestro el índice de la página actual, no coloco enlace
	                                            echo '<li class="active"><a>'.$j.'</a></li>';
	                                    else
	                                            //si el índice no corresponde con la página mostrada actualmente,
	                                            //coloco el enlace para ir a esa página
	                                            echo '<li><a class="paginate" data="'.$j.'">'.$j.'</a></li>';
	                            }
	                            if ($pageNum0 != $total_paginas0)
	                                    echo '<li><a class="paginate" data="'.($pageNum0+1).'">Siguiente</a></li>';
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