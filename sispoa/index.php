 <?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>
<script type="text/javascript">
function openDialog() {
    $('#overlay').fadeIn('bounce', function() {
    $('#popup').css('display','block').effect( "bounce", "slow");
    $('#popup').animate({'left':'30%'},500);
      Limpiar();
    });
}

function closeDialog(id) {
    $('#'+id).css('position','absolute');
    $('#'+id).animate({'left':'-100%'}, 500, function() {
        $('#'+id).css('position','fixed');
        $('#'+id).css('left','100%');
        $('#overlay').fadeOut.effect('bounce', 'slow');
    });
}
</script>
<script type="text/javascript">

function consulta_ajax(){
   var clavex = $("#clave").val();
    var logeox = $("#login").val();
   var enviarx = $("#enviar").val();
     
        var pasaLoginPass = {
                "clvex" : clavex , "logox" : logeox
              
        };
         //alert("valor a pasar : "+pasaLoginPass); 
        $.ajax({
                data:{clvex:clavex, logox:logeox,enviarx:enviarx},
                url:   'accss_2.php',//views/plantillas/
                type:  'post',
                beforeSend: function () {
                        $("#la_consulta").html("Procesando, espere por favor...");
                        Limpiar(); 
                },
                success:  function (response) {
                        $("#la_consulta").html(response);
                        Limpiar(); 
                }

        });
        
}
</script>
<script type="text/javascript">
  function Limpiar()
{
    $("#login").val("");
    $("#clave").val("");
    
</script>  

</head>

<?php
//require('include/dbconfig.php');
require('views/plantillas/header.php');
//require('models/class.Conexion.php');



//require '../libs/Smarty.class.php';
//$db=new Conexion();

require'include/func.class.php';
$objuser=new Crudpoa;
$consul_cuantos=$objuser->mostrar_count_users();
if($consul_cuantos) {
    while( $row_user = mysql_fetch_array($consul_cuantos) ){
    /*while ($row_activ = $consulta->mysql_fetch_array()) {*/
     $resul_qtos=$row_user['cantuser']; 
     //echo $resul_qtos;
    
    }
}
/*==================================*/
$objprog=new Crudpoa;
$cons_cuantos_prog=$objprog->mostrar_count_programs();
if($cons_cuantos_prog) {
    while( $row_prog = mysql_fetch_array($cons_cuantos_prog) ){
    /*while ($row_activ = $consulta->mysql_fetch_array()) {*/
     $resul_qtos_prog=$row_prog['cantprod']; 
     //echo $resul_qtos_prog;
    
    }
}
/*==================================*/

       // require'graficos/index.php';

?>
<body onload="Limpiar()"; >
<!--=============================================================================================-->
<div>
    <div id="column-right"> <a href="#" >
        <div class="content"  class="subMenu" style="">
            <div  class="frame1">
                <div class="navbar1" >
                    <div class="mainDiv" >
                      <div class="dropMenu">
                            <div class="subMenu" >
                                       <ul class="ca-menu"  class="list-group-item>
                                            <li>
                                                <a href="#" >
                                                    <span class="ca-icon"></span>
                                                    <div class="ca-content">
                                                        <h2 class="ca-main"></h2>
                                                        <h3 class="ca-sub"></h3>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" >
                                                    <span class="ca-icon">&#112</span>
                                                    <div class="ca-content">
                                                        <h2 class="ca-main">Menu</h2>
                                                        <h3 class="ca-sub">Menú Principal</h3>
                                                    </div>
                                                </a>
                                            </li>
                                            
                                             <li>
                                                <a href="#" id="div-btn1" style="cursor:pointer;" onmouseover="blendon('capa00');  blendoff('capa01'); blendoff('capa02');"  onclick="return false;" >
                                                    <span class="ca-icon">&#85</span>
                                                    <div class="ca-content">
                                                        <h3 class="ca-main">Usuarios  <span class="badge"> <?php echo $resul_qtos ;?></h3> <div style="float:rigth;"></span></div>
                                                        <h3 class="ca-sub">Gestion de Usuarios del Sistemas</h3>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" id="div-btn2" style="cursor:pointer;" onmouseover="blendon('capa01');  blendoff('capa00'); blendoff('capa02');"  onclick="return false;" >
                                                    <span class="ca-icon">&#179</span>
                                                    <div class="ca-content">
                                                        <h2 class="ca-main">Programacion  <span class="badge"> <?php echo $resul_qtos_prog ;?></span></h2>
                                                        <h3 class="ca-sub">Gestion de la Actividades planisficadas</h3>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" id="div-btn3"  style="cursor:pointer;" onmouseover="blendon('capa02');  blendoff('capa01'); blendoff('capa00');"  onclick="return false;" >
                                                    <span class="ca-icon">&#117;</span>
                                                    <div class="ca-content">
                                                        <h2 class="ca-main">Estadisticas  <span class="badge"> <?php echo $resul_qtos_prog ;?></span></h2>
                                                        <h3 class="ca-sub">Vista de Avances de las Activides  </h3>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"  id="div-btn4">
                                                    <span class="ca-icon">S</span>
                                                    <div class="ca-content">
                                                        <h2 class="ca-main">Mantenimiento  </h2>
                                                        <h3 class="ca-sub">Gestion de Modulo</h3>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"  id="div-btn5">
                                                    <span class="ca-icon">d</span>
                                                    <div class="ca-content">
                                                        <h2 class="ca-main">Otros  </h2>
                                                        <h3 class="ca-sub">Disponibles</h3>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul><!-- ca-menu" -->
                            </div><!--subMenu -->
                        </div><!--dropMenu -->
                    </div><!--mainDiv -->
                </div><!--navbar1 -->
            </div><!--frame1  -->
        </div><!--  content-->
</a></div><!--column-right -->
        <!-- inicio frame central -->
<!--//////////////////////////// fin frame central /////////////////////////////-->
<div id="contenido">
<div id="overlay" class="overlay"></div>

<div style="display: block; left: 30%;" id="popup" class="popup">
  <a onclick="closeDialog('popup');" class="close"></a>


  <!--===============================================-->
    <?php  //if (!isset($_SESSION["usuario_valido"]))  { ?>
        <form action="" method="POST" >
          <div class="cuadro_login" id="dato">
                       <div   id="dato_login" align="center"  ><img style="width:9%" src="views/images/favicon1.png" ><div style="font-size:20px;" id="subtitl1"><legend><span class="header2">Iniciar Sessión</span></legend></div></div>
                            <div  id="fila" >
                          <div style='display:none'>
                           <img src='views/images/lock_off.png' alt='' />
                            </div>
                              </div>
                             <hr>
                                      <div id="form5" style="font-size:13px; padding:10px;padding:10px;margin:15px;  ">
                                        <strong style="margin:10px;">Login:  </strong><input type="text"  name="login" id="login" size="10" placeholder="Usuario">
                                        <strong>Clave:  </strong><input type="password"  name="clave" id="clave" size="10" placeholder="Password" onkeyup="consulta_ajax();">
                                        <!--input style="margin-left:160px;margin-top:10px;" id="enviar" name="enviar"   type="submit" value="enviar" class="btn-primary"  onclick="consulta_ajax();"-->
                                   </div>
                     </form>
                      <div id="dato_login"  align="center"  ><span id="la_consulta"></div>
  </div><!---cuadro_login ------>
    

   <!--===============================================-->

</div>
        <div id="central">
             <div id="central-content">
                <h1></h1>
                <p></p></div>
                 <!--==============================================================-->
                <div class="contenido"  id="capa00" style"display:none;">
                    <fieldset>
                        <legend ><span class="ca-icon2">&#85</span>Gestion de Usuario</legend>
                            <dl>
                                <div id="tabs">
                                        <ul> <?php //if ($tipo_user == "administrador"){ ?>
                                                <li><a href="views/plantillas/cpaguser.php" >Listar</a></li>
                                                <?php //} ?>
                                                <li><a href="views/plantillas/rg01.php" >Regitro Usuarios</a></li>          
                                        </ul>
                                </div>
                            </dl>
                     </fieldset>
                    </div>
                    <!--==============================================================-->
                    <div class="contenido"  id="capa01" style"display:none;">
                    <fieldset>
                        <legend><span class="ca-icon2">&#179</span>Gestion de Programacion</legend>
                            <dl>
                                <div id="tabs1">
                                        <ul> <?php //if ($tipo_user == "administrador"){ ?>
                                                <li><a href="views/plantillas/rg02.php" >Ingresar Producto</a></li>
                                                <?php //} ?>
                                                <li><a href="views/plantillas/poa_cpagdo.php" >Mostrar Producto</a></li>          
                                                 <li><a href="views/plantillas/impor_csv.php" >Importar  Productos</a></li>
                                                <li><a href="views/plantillas/xxxx.php" >Act. Avance del Productos</a></li>
                                        </ul>
                                </div>
                            </dl>
                     </fieldset>
                    </div>
                     <!--==============================================================-->
                     <!--==============================================================-->
                    <div class="contenido"  id="capa02" style"display:none;">
                    <fieldset>
                        <legend><span class="ca-icon2">&#117</span>Gestion de Estadistica</legend>
                           
                                <div id="tabs2">
                                        <ul> 
                                                <li><a href="views/plantillas/consul_activiti.php" > Avances</a></li>
                                               
                                                <li><a href="graficos/index.php" >Mostrar Producto</a></li>          
                                        </ul>
                                </div>
                            
                     </fieldset>
                    </div>
                     <!--==============================================================-graficos/index_bar_graf.php->
                </div> <!--=============================  central-content=================================-->
        </div> <!--=============================  central=================================-->
<!--//////////////////////////// fin frame central /////////////////////////////-->
        
        
<!--=============================================================================================-->
</div>
</body>
</html>
<?php include_once 'views/plantillas/footer.php'; ?>
