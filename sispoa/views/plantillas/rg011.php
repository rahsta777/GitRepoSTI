<?php
require'include/../func.class.php';
//require'func.class.php';
require'include/../f_fecha.php';
    $nom_usuario_w = htmlspecialchars(trim($_POST['nom_usuario_td']));
    $apell_usuario_w = htmlspecialchars(trim($_POST['desc_usuario_td']));
    $apell2_usuario_w = htmlspecialchars(trim($_POST['apell2_usuario_td']));
    $category_usuario_w = htmlspecialchars(trim($_POST['category_usuario_td']));
    $perfil_usuario_w = htmlspecialchars(trim($_POST['perfil_usuario_td']));
    $sexo_usuario_w = htmlspecialchars(trim($_POST['sexo_usuario_td']));
    $status_usuario_w = htmlspecialchars(trim($_POST['status_usuario_td']));
    $fech_user_reg_w = htmlspecialchars(trim($_POST['fech_user_reg_td']));
    $Depend_func_reg_w = htmlspecialchars(trim($_POST['Depend_func_reg_td']));
    $Login_w = htmlspecialchars(trim($_POST['Login_td']));
    $password_w = htmlspecialchars(trim($_POST['password_td']));
    //$xxx = htmlspecialchars(trim($_POST['xxx']));
    $fech_user_reg_w =cambia_fecha_a_db($fech_user_reg_w);
     $salt = substr ($Login_w,0,2);
     $clave_crypt = crypt ($password_w,$salt);
    
    /*echo'<script type="text/javascript">
    alert("paso a registrar  Login: '.$Login_w.'  Dependencia: '.$Depend_func_reg_w .'")
     </script>';*/


     //$funcionario="funcionary";
     //$director="directory";
    /* if ($perfil_usuario_w)==$funcionario ))
    {

    } else
    echo "Error al ingresar Datos Verifique, Complete el formulario";*/
    
      if ((isset($nom_usuario_w) and ($nom_usuario_w!="")) and (isset($apell_usuario_w) and ($apell_usuario_w!="")) )
    {
                $objuser_reg=new Crudpoa;
            if ( $objuser_reg->insertar_user(array($nom_usuario_w, $apell_usuario_w, $apell2_usuario_w, $category_usuario_w, $perfil_usuario_w, $sexo_usuario_w, $status_usuario_w, $fech_user_reg_w, $Login_w, $clave_crypt)) == true){
                echo 'Guardando...................';
            }else{
                echo 'Se produjo un error. Tratando de Guardar en la DB,  Intente nuevamente..........';
            } 
    } else
    echo "Error al Ingresar Datos Verifique, Complete el formulario................";

/*if ((isset($Depend_func_reg_w)) and ($Depend_func_reg_w!=""))
    {
                $objdepend_reg=new Crudpoa;
            if ( $objdepend_reg->insertar_ids_dir_func(array($Login_w, $Depend_func_reg_w )) == true){
                echo 'Guardando...................';
            }else{
                echo 'Se produjo un error. Tratando de Guardar en la TABLE de DEPENDENCIA..........';
            } 
    } else
    echo "Error al Ingresar Datos Verifique, Complete el formulario................";
*/
    ?>
