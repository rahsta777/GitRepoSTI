




<?php header('Content-type: text/html; charset=utf-8'); ?>
<?PHP
   session_start ();
?>
<html>
<head>
<title> Listado</title>


<!--=========================0rutina jqry.ajax o para enviar una variable para consultar=================================-->
<script>
 datos_comp="";
function busca_comprob(coprobant){
   
        var datos_comp = {
                "var13" : coprobant /*,
                "valorCaja2" : valorCaja2*/
        };
        $.ajax({
                data:  datos_comp,
                url:   'localizar_comprobant_fact.php',
                type:  'post',
                beforeSend: function () {
                        $("#la_consulta_compb").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#la_consulta_compb").html(response);
                }
        });
}
</script>

</head>
<body>
<?PHP
   if (isset($_SESSION["usuario_valido"]))
				 {
								$usuario_actual=$_SESSION["usuario_valido"];
								$nombre_user=$_SESSION["nom_usuario"];
								$tipo_user=$_SESSION["tipo_user"]
    
			?>
					
                           <div  style="font-size:14px;">
                                      
								                         <div style="width:20%">       																			              																			
											
                                            <strong>Buscar:</strong><input type="text"  name="buscar_comp" id="buscar_comp" size="25" style="background:url(images/fondo_input/fondo_input.png);width:150px;height:30px ;" onkeyup="busca_comprob($('#buscar_comp').val());return false;">
																																	</div>
  	      																								<div id="la_consulta_compb"></div>
     </div>       
        
                    

                    <?php
 }
   else
   {
      ?>  <div id="fila_conectar">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='acceso.php' TARGET='_top'> <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  </div> <?php
   }
   ?>
  


</body>
</html>
