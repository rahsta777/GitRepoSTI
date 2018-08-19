<?php
require'include/../func.class.php';
    $var1_wk = htmlspecialchars(trim($_POST['var_ajax1_td']));
    $var2_wk  = htmlspecialchars(trim($_POST['var_ajax2_td']));
    $var3_wk  = htmlspecialchars(trim($_POST['var_ajax3_td']));
        //$xxx = htmlspecialchars(trim($_POST['xxx']));
     $salt = substr ($Login_w,0,2);
     $clave_crypt = crypt ($password_w,$salt);
    
     
      if ((isset($var1_wk) and ($var1_wk!="")) and (isset($var2_wk) and ($var2_wk!="")) and (isset($var3_wk) and ($var3_wk!="")))
    {
            $objuser_reg=new Crudpoa;
            if ( $objuser_reg->insertar_direcnes(array($var1_wk, $var3_wk, $var2_wk)) == true){
                echo 'Guardando...................';
            }else{
                echo 'Se produjo un error. Tratando de Guardar en la DB de Direcciones,  Intente nuevamente..........';
            } 
    } else
    echo "Error al Ingresar Datos Verifique, Complete el formulario................";
    ?>
