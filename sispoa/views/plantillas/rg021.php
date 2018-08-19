<?php
require'include/../func.class.php';
require'include/../f_fecha.php';
    $unidad_dir_w = htmlspecialchars(trim($_POST['unidad_dir_td']));
    $desc_prod_td_w = htmlspecialchars(trim($_POST['desc_prod_td']));
    $nomb_produc_w = htmlspecialchars(trim($_POST['nomb_produc_td']));
    $indicador0_w = htmlspecialchars(trim($_POST['indicador0_td']));
    $fecha_in_w = htmlspecialchars(trim($_POST['fecha_in_td']));
    $fecha_in2_w = htmlspecialchars(trim($_POST['fecha_in2_td']));
    $fech_reg_w = htmlspecialchars(trim($_POST['fecha_act_td']));
    $resp_prod_w = htmlspecialchars(trim($_POST['resp_prod_td']));
    //$xxx = htmlspecialchars(trim($_POST['xxx']));
    $fecha_in_w =cambia_fecha_a_db($fecha_in_w);
    $fecha_in2_w =cambia_fecha_a_db($fecha_in2_w);
    $fech_reg_w =cambia_fecha_a_db($fech_reg_w);
    echo'<script type="text/javascript">
    alert("paso a registrar  Nombre: '.$unidad_dir_w.'  nombre producto:'.$nomb_produc_w .'  Descripcion: '.$desc_prod_td_w .' indicador:'.$indicador0_w .' fecha inicial:'.$fecha_in_w .'  fecha final:'.$fecha_in2_w .'  fecha actual:'.$fech_reg_w .' responsa:'.$resp_prod_w .'   ")
     </script>';
  
    if ((isset($unidad_dir_w) and ($unidad_dir_w!="")) and (isset($desc_prod_td_w) and ($desc_prod_td_w!="")) and (isset($nomb_produc_w) and ($nomb_produc_w!="")) and (isset($indicador0_w) and ($indicador0_w!="")) and  (isset($fecha_in_w) and ($fecha_in_w!="")) and  (isset($fecha_in2_w) and ($fecha_in2_w!="")) and (isset($fech_reg_w) and ($fech_reg_w!="")) and (isset($resp_prod_w) and ($resp_prod_w!="")))
    {
                $objpoa=new Crudpoa;
            if ( $objpoa->insertar(array($unidad_dir_w,$nomb_produc_w,$desc_prod_td_w,$indicador0_w,$fecha_in_w,$fecha_in2_w,$fech_reg_w,$resp_prod_w)) == true){
                echo 'Guardando...................';
            }else{
                echo 'Se produjo un error. Intente nuevamente';
            } 
    }else
    echo "Error al ingresar Datos Verifique, Complete el formulario";
    ?>
