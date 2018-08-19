<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css" >
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<script type="text/javascript"  src="js/jquery.min.js"></script>
<script type="text/javascript"  src="js/bootstrap.min.js"></script>
<script  language= "JavaScript" src="js/jquery.js"></script>
<script  language= "JavaScript" src="js/jquery-1.5.2.js"></script>
<script type="text/javascript"  src="js/jquery-ui.js"></script>
<script language= "JavaScript"  src="js/jquery_002.js"></script>
<style>
#success_message{ display: none;}
</style>
<script type="text/javascript">
$(document).ready(function(){
  
      $('#periodo_txt').mask('1111-11'); 
    /*  $('#date').mask('1111-11');
      $('.time').mask('00:00:00');
      $('.date_time').mask('99/99/9999 00:00:00');
      $('.phone').mask('9999-9999');
      $('.phone_with_ddd').mask('(99) 99 999 99 99');
      $('.money').mask('000.000.000.000.000,00', {reverse: true});*/
});
</script>
<script type="text/javascript">

$(document).ready(function() {

      $("#btn_enviar").click(function(){
       $("#success_message").show();//muestra el div
         var periodo_txt_x= $("#periodo_txt").val();
          
       // alert("paso al jquery ajax con datos: "+" [ "+periodo_txt_x+" ] "); $('#success_message').fadeIn('slow').hide(2000);
        $.ajax({
            type: "post",
            url: "listartxta_balim.php",
            data:  {periodo_txt_tx:periodo_txt_x},
                       beforeSend: function () {
                       $("#success_message").append("<div class='modal1'><div class='center1'> <center> <img src='images/gif-load.gif'> Enviando...<i class='glyphicon glyphicon-thumbs-up'></i></center></div></div>");
            },
                success:  function (response) {
                        $("#success_message").html(response).effect( "bounce", "slow");
                }
        });
        Limpiar();
        return false;
    });
});
        function Limpiar()
        {
            $("#periodo_txt").val("");
          

        }
</script>

</head>


<body>
<div class="container">

    <form class="well form-horizontal" action="" method="post"  id="contact_form">

<!-- Form Name -->


<!-- Text input-->

<div class="form-group"><img style="width:20%; height:20%;float:right;padding:5px;margin-top:10px;margin-right:40px;" src="images/Logo_Cont_Edo_Anz.png">
<div style="padding:5px;margin-left:80px; : "><h2>Lista txt del Bono de Alimentación</h2></div>
  <label class="col-md-4 control-label">Ingresar periodo</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-zoom-in"></i></span>
  <input  name="periodo_txt" id="periodo_txt" maxlength="7"  placeholder="ingrese 9999-99 Ejem 2014-04" class="form-control"  type="text">
    </div>
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" id="btn_enviar">Generar TXT <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
<div id="success_message">
  
</div>
</form>
</div>
    </div>

</body>
</html>
