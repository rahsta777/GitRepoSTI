 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
<script type="text/javascript">   
         $(function(){
  $('#frmArchivo').submit(function(){
    
    var comprobar = $('#archivo').val().length;
      var valorfile=$('#archivo').val();
   
    //alert("paso el archivo [ "+valorfile+" ]  este es el la Longitud: [ "+comprobar+" ]");
    
    if(comprobar>0){
      
      var formulario = $('#frmArchivo');
      
      var archivos = new FormData();  
      
      var url = 'views/plantillas/impor_cvs_poa.php';
      
        for (var i = 0; i < (formulario.find('input[type=file]').length); i++) { 
        
                 archivos.append((formulario.find('input[type="file"]:eq('+i+')').attr("name")),((formulario.find('input[type="file"]:eq('+i+')')[0]).files[0]));
         
            }
        
      $.ajax({
        
        url: url,
        
        type: 'POST',
        
        contentType: false, 
        
              data: archivos,
        
                processData:false,
        
        beforeSend : function (){
          
          $('#success_message').html('<center><img src="../views/images/cargando.gif" width="50" heigh="50"></center>');  
        
        },
        success: function(data){
          
          if(data == 'OK'){

            $('#success_message').html('<label style="padding-top:10px; color:green;">Importacion de CSV exitosa</label>'); 
            return false; 

          }else{

            $('#success_message').html('<label style="padding-top:10px; color:red;">Error en la importacion del CSV</label>');
            return false;

          }
          
      
        }
        
      });
      
      return false;
      
    }else{
      
      alert('Selecciona un archivo CSV para importar');
      
      return false;
      
    }
  });
});
</script>


 <!--script type="text/javascript">
$(document).ready(function(){   
  $('#frmArchivo').submit(function(){
    var valorfile=$('#archivo').val();
    var comprobar = $('#archivo').val().length;
    //alert("paso el archivo [ "+valorfile+" ]  este es el la Longitud: [ "+comprobar+" ]");
    
    if(comprobar>0){
      
      var formulario = $('#frmArchivo');
      
      var archivos = new FormData();  
      //alert("paso "+archivos);

      var url = 'views/plantillas/impor_csv_poa.php';
      
        for (var i = 0; i < comprobar; i++) { 
        
                  archivos.append((formulario.find('input[type="file"]:eq('+i+')').attr("name")),((formulario.find('input[type="file"]:eq('+i+')')[0]).files[0]));
                  // alert("paso "+archivos);

                     }
        
      $.ajax({
        
        url: "views/plantillas/impor_csv_poa.php",
        
        type: 'POST',
        
        contentType: false, 
        
              data: archivos,
        
              processData:false,
        
        beforeSend : function (){
                $('#success_message').fadeIn('slow').hide(2000);
          /* $("#success_message").append("<div class='modal1'><div class='center1'> <center> <img src='views/images/gif-load.gif' width='30px'> Guardando...<i class='glyphicon glyphicon-thumbs-up'></i></center></div></div>").fadeIn('slow').hide(1000);;

          $('#success_message').html('<center><img src="../views/images/cargando.gif" width="50" heigh="50"></center>');*/  
        
        },
        success: function(data){
          
          if(data == 'OK'){
            $("#success_message").html(response).fadeIn('slow').delay(2000).hide(300);
            //$('#success_message').html('<label style="padding-top:10px; color:green;">Importacion de CSV exitosa</label>'); 
            return false; 

          }else{
            $("#success_message").html(response).fadeIn('slow').delay(2000).hide(300);
            //$('#success_message').html('<label style="padding-top:10px; color:red;">Error en la importacion del CSV</label>');
            return false;

          }
          
      
        }
        
      });
      
      return false;
      
    }else{
      
      alert('Selecciona un archivo CSV para importar');
      
      return false;
      
    }
  });
});
</script>

/*$(function(){
  $('#frmArchivo').submit(function(){
   // $("#btn_enviar2").click(function(){
        //$("#success_message").append("<div class='modal1'><div class='center1'> <center> <img src='views/images/gif-load.gif'> Guardando...<i class='glyphicon glyphicon-thumbs-up'></i></center></div></div>");
      //$("#success_message").show();//muestra el div
       // var csv_file_x= $("#archivo").val(); 
         var csv_file_x = new FormData();
         var comprobar = $('#archivo').val().length;
          csv_file_x.append('archivo',$('#archivo')[0].files[0]);
          if(comprobar>0){
                      var formulario = $('#frmArchivo');
      
                              var archivos = new FormData();  
                              
                              var url = 'importarCSV.php';
                              
                                for (var i = 0; i < (formulario.find('input[type=file]').length); i++) { 
                                
                                         archivos.append((formulario.find('input[type="file"]:eq('+i+')').attr("name")),((formulario.find('input[type="file"]:eq('+i+')')[0]).files[0]));
                                 
                                    }
                                
                              $.ajax({
                                
                                url: url,
                                
                                type: 'POST',
                                
                                contentType: false, 
                                
                                      data: archivos,
                                
                                        processData:false,
                                
                                beforeSend : function (){
                                  
                                  $('#respuesta').html('<center><img src="../views/images/cargando.gif" width="50" heigh="50"></center>');  
                                
                                },
                                success: function(data){
                                  
                                  if(data == 'OK'){

                                    $('#respuesta').html('<label style="padding-top:10px; color:green;">Importacion de CSV exitosa</label>'); 
                                    return false; 

                                  }else{

                                    $('#respuesta').html('<label style="padding-top:10px; color:red;">Error en la importacion del CSV</label>');
                                    return false;

                                  }
                                  
                              
                                }
                                
                              });
                              
                              return false;

                        } else {
      
      alert('Selecciona un archivo CSV para importar');
      
      return false;
      
    }*/
        /* $('#success_message').fadeIn('slow').hide(2000);
        alert("paso al jquery ajax con datos: "+" [ "+csv_file_x+" ] ");     
       /* $.ajax({
            type: "post",
             dataType:"json",
            url: "views/plantillas/impor_cvs_poa.php",
             contentType:false,
            data:csv_file_x,
                       beforeSend: function () {
                         $('#success_message').fadeIn('slow').hide(1000)
                       $("#success_message").append("<div class='modal1'><div class='center1'> <center> <img src='views/images/gif-load.gif'> Guardando...<i class='glyphicon glyphicon-thumbs-up'></i></center></div></div>").fadeIn('slow').hide(1000);;

            },
                success:  function (response) {
                        $("#success_message").html(response).effect( "bounce", "slow").hide(1000);
                         $('#success_message').css('color', 'red').css('font-size', '20px'); 
                }
        });
        Limpiar();
        return false;
    });
});
        function Limpiar()
        {
            $("#ingr_csv").val("");
          

        }*/
<-->
 <body>
<div >
      <fieldset>
      		<div class="form-group">
          <legend>
      		   <div style="margin:10px;">Ingrese archivo CSV</div>   </legend>
             <div  class="columna_izquierda1" >
      		  	<form name='frmArchivo' id="frmArchivo" method="post" enctype="multipart/form-data">     	
              			<input type="file" name="archivo" id="archivo" accept=".csv" />
               			<input type="hidden" name="MAX_FILE_SIZE" value="20000" />       			       
                 	  <div class="form-group">
            			  <label class="col-md-4 control-label"></label>
              			  <div class="col-md-4">
              			    <button type="submit" class="btn btn-primary btn-lg" id="btn_enviar2">Importar<span class="glyphicon glyphicon-send"></span></button>
              			  </div>
                                             
                         <div id="success_message"></div>
                      
            		 </div>
                
              </form> 
            </div>
          </div>  
      </fieldset>
  </div>
  </body>
 </html>