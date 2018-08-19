<html>
<head>
<style>
#success_message{ display: none;}
#message_send{ display: none;}

</style>
<script type="text/javascript">
    $(document).ready(function(){   
        //default usage
        //$("#message1").charCount();
        //custom usage
        $("#desc_metas").charCount({
            allowed: 200,        
            warning: 10,
            counterText: 'Caracteres Restantes: '    
        });
    });
</script>
<script type="text/javascript">
$(document).ready(function() {
    $("#btn_enviar").click(function(){
       // $("#success_message").append("<fieldset><div class='popup'><div class='content1-popup'> <center> <img src='views/images/gif-load.gif'><h4> Guardando...</h4><i class='glyphicon glyphicon-thumbs-up'></i></center></div></div></fieldset>");
     //$("#success_message").show();//muestra el div
        var unidad_dir_x= $("#unidad_dir").val();
        var desc_prod_x = $("#desc_metas").val();
        var nomb_produc_x = $("#nomb_produc").val();
        var indicador0_x = $("#indicador0").val();
        var fecha_act_x = $("#fech_act_reg").val();
        var fecha_in_x = $("#fecha_in").val();
        var fecha_in2_x = $("#fecha_in2").val();
        var resp_prod_x = $("#resp_prod").val();
        // $('#success_message').fadeIn('slow').hide(2000);
      // alert("Para trasferir con los datos jquery ajax con datos: "+" [ "+unidad_dir_x   +" ] "+" "+" [ "+nomb_produc_x  +" ] "+" "+" [ "+ desc_prod_x+" ] "+" [ "+ indicador0_x+" ] "+" [ "+ fecha_act_x+" ] "+" [ "+ fecha_in_x+" ] "+" [ "+ fecha_in2_x+" ] "+" [ "+ resp_prod_x+" ] ");       
        $.ajax({
            type: "post",
            url: "views/plantillas/rg021.php",
            data:  { unidad_dir_td:unidad_dir_x,desc_prod_td:desc_prod_x,nomb_produc_td:nomb_produc_x,indicador0_td:indicador0_x,fecha_in_td:fecha_in_x,fecha_in2_td:fecha_in2_x,resp_prod_td:resp_prod_x,fecha_act_td:fecha_act_x},
                       beforeSend: function () {
                        //$('#message_send').fadeIn(2000, function() { $(this).remove(); }).hide(300);
                        $('#message_send').fadeIn('slow').hide(2000);
                     // $("#success_message").append("<div class='modal1'><div class='center1'> <center> <img src='views/images/gif-load.gif'> Guardandoo...<i class='glyphicon glyphicon-thumbs-up'></i></center></div></div>");
                       //$('#success_message').fadeIn('slow').hide(1000)
                       //$("#success_message").append("<div class='modal1'><div class='center1'> <center> <img src='views/images/gif-load.gif'> Guardando...<i class='glyphicon glyphicon-thumbs-up'></i></center></div></div>");
                       //$("#success_message").append("<fieldset><div class='popup'><div class='content1-popup'> <center> <img style='width:1.5em' src='views/images/gif-load.gif'><h4> Guardando...</h4><i class='glyphicon glyphicon-thumbs-up'></i></center></div></div></fieldset>");

            },
                success:  function (response) {
                      $("#success_message").html(response).fadeIn('slow').delay(2000).hide(300);
                      //$("#success_message").html(response).effect( "bounce", "slow").hide(4000).css('color', 'red').css('font-size', '20px');   
                        //$('#success_message').fadeIn('slow').hide(2000);
                         // $("#success_message").append("<div class='modal1'><div class='center1'> <center> <img src='views/images/gif-load.gif'> Guardo...<i class='glyphicon glyphicon-thumbs-up'></i></center></div></div>");
                }
        });
        Limpiar();
        return false;
        });
    });
        function Limpiar()
        {
            $("#unidad_dir").val("");
            $("#desc_metas").val(" ");
            $("#nomb_produc").val(""); 
            $("#indicador0").val("");
            $("#fech_act_reg").val("");
            $("#fecha_in").val(""); 
            $("#fecha_in2").val("");
            $("#resp_prod").val(""); 

        }
</script>
<script>
    $(function() {
        $( "#fecha_in" ).datepicker({ 
         autoSize: true,
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesMin: ['Dom', 'Lu', 'Ma', 'Mi', 'Je', 'Vi', 'Sa'],
            firstDay: 1,
            monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
            dateFormat: 'dd/mm/yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-90:+0",
            
        
        });
        
        
        
    });
    </script>
    <script>
    $(function() {
        $( "#fecha_in2" ).datepicker({ 
         autoSize: true,
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesMin: ['Dom', 'Lu', 'Ma', 'Mi', 'Je', 'Vi', 'Sa'],
            firstDay: 1,
            monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
            dateFormat: 'dd/mm/yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-90:+0",
            
        
        });
        
        
        
    });
    </script>
   <!--script type="text/javascript">
        $("#btn_enviar").click(function()
            {
                $("#success_message").append("<div class='modal1'><div class='center1'> <center> <img src='views/images/gif-load.gif'> Guardando...<i class='glyphicon glyphicon-thumbs-up'></i></center></div></div>");
                var Usuarios                = new Object(); 
                Usuarios.usuario_x          = $('#first_name').val();
                Usuarios.usuario_apell_x    = $('input#apell_user').val();
                Usuarios.usuario_email_x    = $('input#email').val();
                var DatosJson = JSON.stringify(Usuarios);
                $('#success_message').fadeIn('slow').hide(2000);
               //$('#success_message').slideDown({ opacity: "show" }, "slow") 
                // alert("paso al jquery ajax con datos: "+" [ "+Usuarios.usuario_x+" ] "+" "+" [ "+Usuarios.usuario_apell_x +" ] "+" "+" [ "+ Usuarios.usuario_email_x+" ] "+" Con Datos Json:"+DatosJson);
               
                $.post('views/plantillas/funciones.php',
                { 
                    DatosJson_td:DatosJson
                },
                function(data, textStatus) {
                    if(data.error=="Si"){
                        $("#"+-.campo+"").focus();                       
                        $("#success_message").html(data.error_msg);
                    }else{
                        $("#success_message").html("");
                        $("#success_message").html(data.error_msg);
                        $('#success_message').fadeOut('slow');
                        $('.popup-overlay').fadeOut('slow');
                        change_page('0');
                    }
                }, 
                "json"      
                );
                
                
            });

/**============================================================================*/
    </script-->
<!--script type="text/javascript">
  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description of your project'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});


</script-->
<!-- Bootstrap library -->


</head>

<body>


<div class="container">

<form class="well form-horizontal" action="" method="post"  id="contact_form">
<!-- Form Name -->
<div class="columna_izquierda">
<fieldset>
<div style="text-align:center;"><legend>Datos de la Direccion</legend></div>
<?php $fecha=date('d/m/Y');?>    <input type="hidden" name="fech_act_reg" id="fech_act_reg"  value="<?php echo $fecha;?>" ><!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" >Unidad Ejecutora</label> 
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                 
                <select  name='unidad_dir' id='unidad_dir' class='form-control'>
                 <?php 
                 include("conexion/Conexion1.php");
                 $link=Conectarse(); 
                    $sql_dir ="SELECT * FROM `tb_Direcciones`";
                    $resultdir=mysql_query($sql_dir, $link);
                       
                        while($row2 = mysql_fetch_array($resultdir))
                          {
                            $var01=$row2['nomb_direcciones'];
                            $var02=$row2['Alias'];
                            $var03=$row2['id_direcciones'];
                            echo $var01;
                  ?>
                      <option value= "<?= $var03; ?> "><?=$var02;?></option>
                          <?php
                             }
                          ?>
                      <option selected>Eliga uno... </option></select>
        </div>
    </div>
</div>
 <!-- Text input-->
<!--div class="form-group">
  <label class="col-md-4 control-label">Agregar No. de items o productos </label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-zoom-in"></i></span>
      <input id="agrega_prod" name="agrega_prod" type="text" size="4" />
      <div id="sheepItForm_add_n_button" type="button" class="button"><a><span>Ejecutar</span></a></div>
      </div>
      </div>
  </div-->

  </fieldset>
</div><!-- div Columna -->


<div class="columna_izquierda">
<fieldset>
<div style="text-align:center;"><legend>Datos de la Planificacion</legend></div>

 <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Producto</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-zoom-in"></i></span>
  <input  name="nomb_produc" id="nomb_produc" placeholder="Escriba un nombre de Producto" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Descripción o Metas</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-th-list"></i></span>
  <div>  <textarea id="desc_metas" name="desc_metas" placeholder="Indique Metas" class="form-control"></textarea>
        </div>
  <!--input name="desc_metas" id="desc_metas" placeholder="Indique Metas" class="form-control"  type="text"-->
    </div>
  </div>
</div>
 
<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" >Indicador de progreso </label> 
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-th-list"></i></span>
               <select size="1" name="indicador0" id="indicador0">
                    <option value="10">10%</option>
                    <option value="25">25%</option>
                    <option value="50">50%</option>
                     <option value="100">100%</option>
                    <option selected>Ninguno</option>
                 </select>
        </div>
    </div>
</div>
<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" >Fecha Inicio</label> 
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-th-list"></i></span>
                <input name="fecha_in" id="fecha_in" placeholder="Indique Fecha en que se inicia" class="form-control"  type="text">
        </div>
    </div>
</div>
<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" >Fecha Culminacion</label> 
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-th-list"></i></span>
                <input name="fecha_in2" id="fecha_in2" placeholder="Indique Fecha" class="form-control"  type="text">
        </div>
    </div>
</div>
        <div class="form-group">
          <label class="col-md-4 control-label">Responsable</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-th-list"></i></span>
             <input name="resp_prod" id="resp_prod"  placeholder="resp_prod" class="form-control"  type="text">
            </div>
          </div>
        </div>

</fieldset>
       
 
 </div><!-- div Columna -->
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
<div style="position:fixed;top:30px;"class="alert alert-danger" role="alert" id="success_message"><i class="glyphicon glyphicon-thumbs-up"></i> </div>
<div style="position:fixed;top:30px;"class="alert alert-success" role="alert" id="message_send"><i class="glyphicon glyphicon-thumbs-up"></i>ENVIANDO..... </div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div style="float:left" >
    <button type="submit" class="btn btn-primary btn-lg" id="btn_enviar">Enviar <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</form>

</div>

    <!-- /.container -->
	<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script-->
</body>
</html>