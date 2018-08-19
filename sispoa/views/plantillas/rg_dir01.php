<?PHP
   session_start ();
?>  
<html>
<head>
<style>
#success_message1{ display: none;}
#message_send1{ display: none;}
</style>
<script type="text/javascript">
$(document).ready(function() {
 // $("#apell_user").attr("disabled", "disabled");
  //$("#apell_user2").attr("disabled", "disabled");
  
    $("#btn_enviar1").click(function(){
       // $("#success_message1").append("<div class='modal1'><div class='center1'> <center> <img src='views/images/gif-load.gif'> Guardando...<i class='glyphicon glyphicon-thumbs-up'></i></center></div></div>");
         var var_ajax1= $("#first_name_dirone").val();
         var var_ajax2 = $("#localizer_dir").val();
          var var_ajax3 = $("#alias_dirone").val();
         
             
        //alert("paso al jquery ajax con datos: "+" [ "+nom_usuario+" ] "+" "+" [ "+desc_usuario  +" ] "+" "+" [ "+ apell2_usuario+" ] ");     
        $.ajax({
            type: "post",
            url: "views/plantillas/rg_dir02.php",
            data:  {var_ajax1_td:var_ajax1, var_ajax2_td:var_ajax2, var_ajax3_td:var_ajax3},
                       beforeSend: function () {
                      // $('#message_send').fadeIn(400, function() { $(this).remove(); });
                       $('#message_send1').fadeIn('slow').hide(2000);
                       // $("#message_send").append("<fieldset><div class='popup'><div class='content1-popup'> <center> <img style='width:1.5em' src='views/images/gif-load.gif'><h4> Enviando...</h4><i class='glyphicon glyphicon-thumbs-up'></i></center></div></div></fieldset>");

            },
                success:  function (response) {
                          $("#success_message1").html(response).fadeIn('slow').delay(2000).hide(300);
                          //$("#success_message1").html(response).effect( "bounce", "slow").hide(1000);//.css('color', 'red').css('font-size', '18px'); 
                        // $('#success_message1').css('color', 'red').css('font-size', '20px'); 
                }
        });
        Limpiar_user();
        return false;
    });
});
        function Limpiar_user()
        {
            $("#first_name_dirone").val("");
            $("#localizer_dir").val("");
            $("#alias_dirone").val("");
           
           
            

        }
</script>


</head>

<body onload="Limpiar_user()"; >
<?php
if (isset($_SESSION["usuario_valido"]))
         {
                $usuario_actual=$_SESSION["usuario_valido"];
                $nombre_user=$_SESSION["nom_usuario"];
                $tipo_user=$_SESSION["tipo_user"]
    
      ?>
<div class="container" >

    <form class="well form-horizontal" action="" method="post"  id="contact_form">

<!-- Form Name -->

<!-- Text input-->
<div  class="columna_izquierda" >
    <fieldset>
      <div style="text-align:center;"><legend>Datos de la Dirección</legend></div>
      <div class="form-group">
        <label class="col-md-4 control-label">Nombre de la Dirección</label>  
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input  name="first_name_dirone" id="first_name_dirone" placeholder="Nombre Dirección" class="form-control"  type="text">
          </div>
        </div>
      </div>
<div class="form-group">
  <label class="col-md-4 control-label" >Alias </label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="alias_dirone" id="alias_dirone" placeholder="Nombre o Alias" class="form-control"  type="text">
    </div>
  </div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Localización</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="localizer_dir" id="localizer_dir" placeholder="Ubicación" class="form-control"  type="text">
    </div>
  </div>
</div>
<!--div class="form-group">
  <label class="col-md-4 control-label" >2do. Apellido </label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="apell_user" id="apell_user2" placeholder="Escriba un Apellido" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" >Categoria </label> 
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
               <select size="1" name="category_userx" id="category_userx">
                    <option value="ingeniero">Ingeniero</option>
                    <option value="tecnico">T&eacutecnico</option>
                    <option value="licenciado">Licenciado</option>
                    <option value="abogado">Abogado</option>
                    <option selected>Ninguno</option>
                 </select>
        </div>
    </div>
</div>
< Text input>
<div class="form-group">
    <label class="col-md-4 control-label" >Perfil </label> 
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <select size="1" name="perfil_userx" id="perfil_userx">
                    <option value="Administrador">Administrador</option>
                    <option value="Director">Director</option>
                    <option value="Funcionario">Funcionario</option> 
                    <option value="Contralor">Contralor</option> 
                    <option selected>Ninguno</option>
                 </select>
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" >Sexo</label> 
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <select size="1" name="sexo_user" id="sexo_user">
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                    <option selected>Ninguno</option>
                 </select>
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" >Status</label> 
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <select size="1" name="status" id="status">
                    <option value="activo">Activo</option>
                    <option value="inactivo">Inactivo</option>
                    <option value="bloqueo">Bloqueo</option>
                    <option selected>Ninguno</option>
                 </select>
        </div>
    </div>
</div>
   
      
          <?php $fecha=date('d/m/Y');?> <input name="fech_user_reg" id="fech_user_reg"   type="hidden" value="<?php echo $fecha;?>">
           

        <hr>
        <div  class="columna_derecha">
        <fieldset>
       <div style="text-align:center;"> <legend >Datos de Acceso</legend></div>
        
       <div class="form-group">
          <label class="col-md-4 control-label">Login</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
             <input name="Login" id="Login"  placeholder="Usuario" class="form-control"  type="text">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Password</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
             <input type="password" name="passwordx" id="passwordx"  placeholder="Ejmplo Asss12345" class="form-control"  type="text">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Confirmar Password</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
             <input type="password" name="password2" id="password2"   placeholder="Ejmplo Asss12345"  class="form-control"  type="text">
            </div>
          </div>
        </div-->

        </fieldset>
         </div>






<!-- radio checks -->
 <!--div class="form-group">
                        <label class="col-md-4 control-label">Do you agree Terms and Conditions ??</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="hosting" value="yes" /> Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="hosting" value="no" /> No
                                </label>
                            </div>
                        </div>
   </div-->


<!-- Success message -->
<div style="position:fixed;top:30px;" class="alert alert-danger" role="alert" id="success_message1"><i class="glyphicon glyphicon-thumbs-up"></i> </div>
<div style="position:fixed;top:30px;" class="alert alert-success" role="alert" id="message_send1"><i class="glyphicon glyphicon-thumbs-up"></i>ENVIANDO..... </div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div style="float:left; position:inherit:;">
    <button type="submit" class="btn btn-primary btn-lg" id="btn_enviar1">Enviar <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</form>
</div>
    </div><!-- /.container -->
	<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script-->
   <?php
 }
   else
   {
      ?>  <div style="display: block; left: 30%;" id="popup" class="popup">  <div id="box_conectar"> 
                      <p><img src='images/error.gif' alt='' /></p>
                      <?php
     print ("<BR><img  id='aline_imagen' src='images/lock.png' alt='' /> \n");
     print ("<P id='contacto' ALIGN='CENTER'>Acceso no autorizado</P>\n");
     print (" <P id='contacto' ALIGN='CENTER'> <A HREF='index.php' > <input type='button' style='background:url(images/fondo_input/fondo_input_g.png);' value='[Conectar]' ></A> </P>\n");
    ?>
                    </div>  
                    </div> <?php 
   }
   ?>
</body>
</html>