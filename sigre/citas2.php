
<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>

<?php

   session_start ();
?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="richard" />

	<title>Citas Proveedores</title>
  <script>
function buscaprove_cita2(val_cita2){
        var pasaval2 = {
                "varcitas2" : val_cita2 /*,
                "valorCaja2" : valorCaja2*/
        };
        $.ajax({
                data:  pasaval2,
                url:   'localizar_prove_cita2.php',
                type:  'post',
                beforeSend: function () {
                        $("#la_consulta_provecitas2").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#la_consulta_provecitas2").html(response);
                }
        });
}
</script>
<script language="JavaScript">


function win_citas(fechid) {
      //alert("id que llega al openwin es:["+id+"]");
    var url="reg_fech_cita.php.php?varfecha="+fechid; 
    msgWindow=window.open(url,"OpenWindow",
"width=1000,height=500,scrollbars=no");

}


</script>
</head>
<body>
<?PHP
   if ((isset($_SESSION["tipo_user"])=="proveedor"))
   {
    $usuario_actual=$_SESSION["usuario_valido"];
    $nombre_user=$_SESSION["nom_usuario"];
    $tipo_user=$_SESSION["tipo_user"];
    
?>

<div style="float:left ;">
	<div><h1 id="bcitas">Lista de Citas </h1></div>
				  	
                       <div id="boxcita"  >
   		                            																	              																			
									    <div  id="bcitas" >Buscar: </div>
                                        <div >
                                         <input type="text"  name="buscaprovecitas2" id="buscaprovecitas2" size="10" style="background:url(images/fondo_input/fondo_input.png);width:100px;height:30px ;" onkeyup="buscaprove_cita2($('#buscaprovecitas2').val());return false;" />
	   	                           </div>
  	      				   <div id="la_consulta_provecitas2"></div>
				        </div>       
        
                    
</div>
</div>
<?php 
}
  /*if(isset($_SESSION["tipo_user"]) and ($_SESSION["tipo_user"])=='Usuario')
  {
      ?>  <div id="fila_conectar">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <!?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='acceso.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  </div> <!?php
   		}*/
     elseif(!isset($_SESSION["tipo_user"]))
 		 {
      ?> <div id="fila_conectar">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='acceso.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  </div> <?php     
   }?>

</body>
</html>