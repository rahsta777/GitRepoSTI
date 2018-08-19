<?PHP
   session_start ();
?>

<html >
	<head>
	
		<title>
			[Registro de Datos]
		</title>
        <script src="js/jquery-1.5.2.js" type="text/javascript"></script>
        <!--link rel="stylesheet" href="css/jquery.ui.all.css" type="text/css"-->
        <script type="text/javascript" src="js/jquery.ui.core.js"></script>
        <script type="text/javascript" src="js/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="js/jquery.ui.datepicker.js"></script>
        <script type="text/javascript" src="js/funcion_jq.js"></script>
        <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
<link rel="stylesheet" href="css/demos.css">


         <link href="css/stilo_div.css" rel="stylesheet" type="text/css" />
          <link href="css/estilo.css" rel="stylesheet" type="text/css" />
          
          
<!---------------------------------------- genera el imput --------------------------------------------------------->

<!-- calendario ---------------------------------------------------------->
<script>
	$(function() {
	   
		
	

		$( "#fechfam" ).datepicker({ 
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
		$( "#fechfam1" ).datepicker({ 
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
        $( "#fechfam2" ).datepicker({ 
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
   
   
       
  <!-- css tab ---------------------------------------------------------->
	<style>
		.tabs { /* es el rectángulo contenedor */
		margin:0 auto;
		min-height:400px;
		position:relative;
		width:80%;
        height:100%;
		border-radius:10px 60px;;
		box-shadow:1px 10px 2px rgba(255,255,255,255);
        
		}

		.tab { /* cada una de las pestañas */
		float:left;
		}

		.tab label { /* la parte superior con el título de la pestaña */
		background-color:rgba(255, 0, 0, 0.42);
		border-radius:5px 5px 0 0;
		box-shadow:-3px 3px 2px #678 inset;
		color:#fff;
		cursor:pointer;
		left:0px;
        top:15px;
        margin-right:1px;
        margin-top:2px;
		padding:5px 6px 5px 5px ;
		position:relative;
		text-shadow:1px 1px #000;
		}
        
		/* el control input sólo lo necesitamos para que las pestañas permanezcan abiertas así que lo ocultamos */
		.tab [type=radio ] {
		display:none;
		}
        
		/* el contenido de las pestañas */
		.content {
     	background: -webkit-gradient(linear, left top, left bottom, from(#E93C4E), to(#000));
    	background: -moz-linear-gradient(top,  #E93C4E,  #000);
		/*background-color:rgba(25, 89, 210, 0.42);*/
		bottom:0;
		left:0;
		overflow:hidden;
		padding:10px;
		position:absolute;
		right:0;
		top:35px;
        border-radius:10px 60px;
		}
        
		/* y un poco de animación */
		.content >* {
		opacity:0.1;
		-moz-transform:translateX(-100%);
		-webkit-transform:translateX(-100%);
		-o-transform:translateX(-100%);
		-moz-transition:all 0.6s ease;
		-webkit-transition:all 0.6s ease;
		-o-transition:all 0.6s ease;
		}
		/* controlamos la pestaña activa */ [type= "radio" ]:checked ~label {
		background-color:rgba(200, 223, 249, 0.7);
		box-shadow:0 3px 2px #89A inset;
		color:#FFF;
		z-index:2;
		} [type=radio ]:checked ~label ~.content {
		z-index:1;
		} [type=radio ]:checked ~label ~.content >* {
		opacity:1;
		-moz-transform:translateX(0);
		-webkit-transform:translateX(0);
		-o-transform:translateX(0);
		-ms-transform:translateX(0);
		}
        
	</style>
    <script type="text/javascript">
    /*function pasa_items(){
            var var1=document.getElementById("itemsplan" ) ;
            alert(var1);
            var ajax=objetoAjax();
            variable = document.getElementById('itemsplan').value;
            ajax.open("POST","tab_reg_datos.php",true);
            
            ajax.onreadystatechange=function() {
            
            if (ajax.readyState==4) {
            
            document.getElementById('resultado').innerHTML = ajax.responseText;
            
            }
            }
            ajax.send(null);
            
            } 
    
    // Esta función se encarga de crear el objeto XMLHTTPRequest y lo devuelve.
          function getXMLHTTPRequest() {
              try {
                req = new XMLHttpRequest();
              } catch(err1) {
                try {
                  req = new ActiveXObject("Msxml2.XMLHTTP");
                } catch (err2) {
                  try {
                    req = new ActiveXObject("Microsoft.XMLHTTP");
                  } catch (err3) {
                    req = false;
                  }
                }
              }
              return req;
            }
            
            
            var http = getXMLHTTPRequest(); // creo una instancia del objeto XMLHTTPRequest.

function enviarvariable(variable) { // funcion encargada de inviar la variable al archivo php llamado index.php.
    var url = 'tab_reg_datos.php?variable='+variable; // creación de la URL.
    http.open("GET", url, true); // fijando los parametros para el envío de datos.
    http.onreadystatechange = handler; // Qué función utilizar en caso de que el estado de la petición cambie.
    http.send(null); // enviar petición.
}

function handler() {
  if (http.readyState == 4) {
    if(http.status == 200) {
      alert(http.responseText); // El texto de respuesta del archivo index.php lo muestra como una alerta.
    }
  }
}
valor=parseFloat(document.getElementById("itemsplan").value);
enviarvariable(valor); // llamo a la función pasándole como parámetro el valor de la variable que quieres enviar. */
    </script> 
     <!-- css tab --------------------------------------------------------->
   <script type="text/javascript"> 
function focos(idElemento)
						{
							document.getElementById("cedx").focus();
                            document.getElementById("tip_via").focus();
                            document.getElementById("ing_fam").focus();
						}
/*======================funcion para la cedula==================================*/            
        
        //cedula= /(^([V-v]|[E-e]\-[9]{2}\.[9]{3,3}\.[9]{3,3})|^)$/    
function cedula_val()
{
    cedula99= /(^([V-v]|[E-e]\-[9]{2}\.[9]{3,3}\.[9]{3,3})|^)$/
    var patro_ced= /(^([V-v]|[E-e]\-[0-9]{1,2}\.[0-9]{3,3}\.[0-9]{3,3})|^)$/  
   	var ced_form=(document.getElementById('cedx').value);
     testar=patro_ced.test(ced_form);
     testar2=cedula99.test(ced_form);
    //alert("test1 "+testar+", test2  "+testar2)
    if ((testar2==true)){
        alert("fuera de rango No escriba V-99.999.999 es el limite de Valores");
        (document.getElementById("cedx").focus());
        return false;}
    if (testar==false){
        alert("Escriba un el formato valido V o E-99.999.999 ejemplo V-9.668.179.");
        (document.getElementById("cedx").focus());
        return false;
   }
 else 
        return true;
}                    
  /********************************************************************/
  function cedula_doc()
{
    cedula99= /(^([V-v]|[E-e]\-[9]{2}\.[9]{3,3}\.[9]{3,3})|^)$/
    var patro_ced= /(^([V-v]|[E-e]\-[0-9]{1,2}\.[0-9]{3,3}\.[0-9]{3,3})|^)$/  
   	var ced_form=(document.getElementById('ced_docent').value);
     testar=patro_ced.test(ced_form);
     testar2=cedula99.test(ced_form);
    //alert("test1 "+testar+", test2  "+testar2)
    if ((testar2==true)){
        alert("fuera de rango No escriba V-99.999.999 es el limite de Valores");
        (document.getElementById("ced_docent").focus());
        return false;}
    if (testar==false){
        alert("Escriba un el formato valido V o E-99.999.999 ejemplo V-9.668.179.");
        (document.getElementById("ced_docent").focus());
        return false;
   }
 else 
        return true;
}          
  
  

  /*======================funcion para Correos==================================*/  
 function VerifyEmail(){
    var patron=/[\w-\.]{0,25}@[\w-]{1,20}\.[\w]{2,3}/
   	var cifra=(document.getElementById('correo').value);
     testar=patron.test(cifra);
    //alert("paso la cifra: "+testar)
if (testar==false){
        alert("Escriba una Direccion Correo Valido.");
        document.getElementById("correo").focus();
        return false;
   }
} 


/*======================funcion para nombre==================================*/  

function palabras3() {
        var patron=/[a-z]/
        var  palabra=document.getElementById("nomb_docent").value;
        testar=patron.test(palabra);
        if(testar==false)
            alert("Escriba palabras para el Nombre");
            document.getElementById("nomb_docent").focus();
       }
       function palabras4() {
        var patron=/[a-z]/
        var  palabra=document.getElementById("apellx_docent").value;
        testar=patron.test(palabra);
        if(testar==false)
            alert("Escriba solo palabras para el Apellido");
            (document.getElementById("apellx_docent").focus());
       }
        
  /*======================funcion para cifras==================================*/ 
function palabras() {
        var patron=/[a-z]/
        var  palabra=document.getElementById("nomb").value;
        testar=patron.test(palabra);
        if(testar==false)
            alert("Escriba palabras para el Nombre");
            document.getElementById("nomb").focus();
       }
       function palabras2() {
        var patron=/[a-z]/
        var  palabra=document.getElementById("apellx").value;
        testar=patron.test(palabra);
        if(testar==false)
            alert("Escriba solo palabras para el Apellido");
            (document.getElementById("apellx").focus());
       }
        
  /*======================funcion para cifras==================================*/            
          
function cifra_val(){
    var patron=/([0-9]{1,2}\.)*[0-9]{3,3}\,[0-9]*$/
   	var cifra=(document.getElementById('ing_fam').value);
     testar=patron.test(cifra);
    //alert("paso la cifra: "+testar)
if (testar==false){
        alert("Escriba un valor Numerico En el formato 999.999,99 ejem: 1.550,45 ");
        document.getElementById("precio").focus();
        return false;
   }
   else 
   return true;
}   
</script>
	</head>
	<body onLoad=focos();>
    
    <?PHP
   if (isset($_SESSION["usuario_valido"]))
   {
    $usuario_actual=$_SESSION["usuario_valido"];
    $nombre_user=$_SESSION["nom_usuario"];
    $tipo_user=$_SESSION["tipo_user"]
    
?>
    <!--------------------------------------------------------- Insertar los Datos del Representantes a la DB---------------------------------------------------->
    
    <!---------------------------- ============================================================================================----------------------->
    <?php
    
	if (!empty($_POST["cedx"]) and !empty($_POST["nomb"]) and !empty($_POST["apell"]) and !empty($_POST["telef"]) and !empty($_POST["fech"])and !empty($_POST["correo"]))
	{
        $rutaEnServidor='imagenes';
            $rutaTemporal=$_FILES['imagen1']['tmp_name'];
            $nombreImagen=$_FILES['imagen1']['name'];
            $rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
            
            if ($_FILES['imagen1_alum']['name']<>"")
            {
            	//echo 'intento cambiar la imagen';
            	move_uploaded_file($rutaTemporal,$rutaDestino);
            		
            	}
                echo "ruta imagen Repre"."<br>".$rutaDestino;
                
      
        $ced_dat_fam=$_POST["cedx"];
        $nombx=$_POST["nomb"];
        $apellx=$_POST["apell"];
        $telefx=$_POST["telef"];
        $fech_famx=$_POST["fech"]; 
        $direc_famx=$_POST["domici"];  
        $correo=$_POST["correo"];     
          /*echo" "."<br>".$ced_dat_fam;
          echo" "."<br>".$nombx;
          echo" "."<br>".$apellx;
          echo" "."<br>".$telefx;
          echo" "."<br>".$correo;
          echo" "."<br>".$direc_famx;*/
        include("f_fecha.php");
        $var3=cambia_fecha_a_db($_POST['fech']);
        echo" "."<br>".$var3;/*foto_repr '$rutaDestino'*/
  /*+++++++++++++++++++++++++++++++++++++++++,+++++++++++++++++++++++++++++++++*/
 /**/
   include("Conexion1.php"); 
   $link=Conectarse(); 
   if (mysql_num_rows(mysql_query("SELECT ced_represent FROM tab_inscrip WHERE ced_represent='" . $_POST['cedx'] . "'", $link))==0) {
   $Sql="insert into tab_inscrip (ced_represent, Nomb_represent, Apell_represent, Direcc_represent, tlf_represent, correo_represent, fech_insc, foto_repr) VALUES ('".$_POST['cedx']."', '".$nombx."', '".$apellx."', '".$direc_famx."', '".$telefx."', '".$correo."', '".$var3."', '".$rutaDestino."')";
		mysql_query ($Sql,$link);
        ?>
								   <div id="fila_conectar">  <div id="box_conectar"> 
							             <?php
						         	    print ("<BR><img  id='aline_imagen' src='img/loading.gif' width='10%' alt='' /> \n");
								        echo "<p>&nbsp;</p>";
										echo "<p>&nbsp;</p>";
										echo "<p>&nbsp;</p>";
								    print ("<P id='contacto' ALIGN='CENTER'>Aguarde Procesando......</P>\n");
									//echo "<meta http-equiv=Refresh content=1 <A TARGET='_blank'>";
								    echo "<meta http-equiv=Refresh content=1;url=tab_reg_datos.php?a=1>";
      	
       			//	echo "<meta http-equiv=Refresh content=3;url=tab_reg_datos.php?a=1>";
       	} else {
       			?>
									 <script type="text/javascript">
									    alert("YA Existe un Articulo Con esa descripcion");
								          </script><?php 
       			//echo "<meta http-equiv=Refresh content=3;url=tab_reg_datos.php?a=1>";
 		}
  }
  /*+===========================================================================*/
      
	

?> 
    
    <!----------------------------fin rutina sql cara A----------------------->
    <?php?> 
       <!--------------------------------------------------------- Ingresar  DAtos Alumnos a la db---------------------------------------------------->
    <!---------------------------- ============================================================================================----------------------->
   
     <?php
     
	if (!empty($_POST["nomb_alum"]) and !empty($_POST["apell_alum"]) and !empty($_POST["telef_alum"])and !empty($_POST["alum_nacionalidad"])) 
	{
 
            $rutaEnServidor='imagenes';
            $rutaTemporal=$_FILES['imagen1_alum']['tmp_name'];
            $nombreImagen=$_FILES['imagen1_alum']['name'];
            $rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
            
            if ($_FILES['imagen1_alum']['name']<>"")
            {
            	//echo 'intento cambiar la imagen';
            	move_uploaded_file($rutaTemporal,$rutaDestino);
            		
            	}
                //echo "ruta imagen Alum"."<br>".$rutaDestino;
        include("f_fecha.php");
       $varfech_a=cambia_fecha_a_db($_POST['fecha_alumn']);        
       $nombre_a=$_POST["nomb_alum"];
       $apell_a=$_POST["apell_alum"];
      // echo "paso por si ".$ced_a;
	 $_POST["ced_si"]="1";
       if($_POST["ced_si"]=="1")
           {
           $ced_a=$_POST["ced_alum"];
           echo "paso por si ".$ced_a;
          	
           }
          elseif($_POST["ced_si"]=="2"){
         $ced_a=$_POST["cedx"];
         echo "paso por no".$ced_a;
         }
         
       $tlf_a=$_POST["telef_alum"];
       $ced_dc=$_POST["docente"];
       $edad_a=$_POST["edad_alum"];
       $nacio_a=$_POST["alum_nacionalidad"];
       $dom_a=$_POST["domicilio_alum"];
       $correo_a=$_POST["correo_alum"];
       echo "cedula:".$ced_a;
               
       /*$=$_POST[""];
       echo" "."<br>".$nombre_a;
       echo" "."<br>".$apell_a;
       echo" "."<br>".$ced_a;
       echo" "."<br>".$tlf_a;// '$tip_ser_viax',, tip_servicios 
       echo" "."<br>".$dom_a;
       echo" "."<br>".$edad_a;
       echo" "."<br>".$nacio_a;
       echo" "."<br>".$dom_a;
       echo" "."<br>".$correo_a;*/
        /*+++++++++++++++++++++++++++++++++++++++++,+++++++++++++++++++++++++++++++++*/
 /**/
    include("Conexion1.php"); 
    $link2=Conectarse(); 
   if (mysql_num_rows(mysql_query("SELECT ced_a FROM tab2_inscrip WHERE ced_a='" . $ced_a . "'", $link2))==0) {
   $Sql2="insert into tab2_inscrip (ced_a, nomb_a, apell_alumn, edad_alumn, nac_alumn, foto_alumno, tlf_alumn, direc_alumn, fech_alumn, correo_alumn) VALUES ('$ced_a','$nombre_a','$apell_a', '$edad_a', '$nacio_a','".$rutaDestino."', '$tlf_a', '$dom_a', '$varfech_a', '$correo_a' )";
   	mysql_query ($Sql2,$link2);

     	     echo "<strong>El Registro Fue Agregado</strong>";
       				echo "<meta http-equiv=Refresh content=3;url=tab_reg_datos.php?a=1>";
       	} else {
       	    ?>
                     <script type="text/javascript">
                        alert("Ya Fue Creado un Usuario con esa CEDULA, por favor, Verifique su Ingreso");
                        </script>
                        <?php
       			//echo "<strong>Ya Fue Creado un Usuario con esa CEDULA, por favor, Verifique su Ingreso</strong>";
       			//echo "<meta http-equiv=Refresh content=3;url=tab_reg_datos.php?a=1>";
 		}
  }
   if (!empty($ced_dc) and  !empty($ced_a))
   {
     $Sql3="insert into tab23 (id_docen, id_alum) VALUES ('$ced_dc', '$ced_a' )";	
        mysql_query ($Sql3,$link2);	  
     } 
       
        
              
		
	?>
    <!--------------------------------------------------------ingresar datos Profesor Profesor-------------------------------->
    
    <!------------------------------------------------------------------Profesor------------------and !empty($_POST["imagen3"])---------------------------->
    <?php	  
      /*and !empty($_POST["telef_docent"]) and !empty($_POST["Nivel_docent"]) and !empty($_POST["domi_docent"])  and !empty($_POST["correo_docent"])  and !empty($_POST["fech_docent"])*/
	if (!empty($_POST["ced_docent"]) and !empty($_POST["nomb_docent"]) and !empty($_POST["apell_docent"]) ) 
	{
	  $rutaEnServidor='imagenes';
            $rutaTemporal=$_FILES['imagen3']['tmp_name'];
            $nombreImagen=$_FILES['imagen3']['name'];
            $rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
            
            if ($_FILES['imagen3']['name']<>"")
            {
            	//echo 'intento cambiar la imagen';
            	move_uploaded_file($rutaTemporal,$rutaDestino);
            		
           	}
                
       include("f_fecha.php");
       $varfech=cambia_fecha_a_db($_POST['fech_docent']);
      /*echo "paso por docente";
      echo "paso ced".$_POST["ced_docent"]."<br>";
      echo "paso nombre".$_POST["nomb_docent"]."<br>";
      echo "paso apell".$_POST["apell_docent"]."<br>";
      echo "paso tlefono".$_POST["telef_docent"]."<br>";
      echo "paso nivel".$_POST["Nivel_docent"]."<br>";
      echo "paso direccio ".$_POST["domi_docent"]."<br>";
      echo "paso correo ".$_POST["correo_docent"]."<br>";
      echo "paso fecha".$varfech."<br>";
      echo "paso foto".$rutaDestino."<br>";*/
      
   include("Conexion1.php"); 
   $link3=Conectarse(); 
       /*$=$_POST[""];
       $=$_POST[""];             ///  ), , , */
 if (mysql_num_rows(mysql_query("SELECT ced FROM tab3_inscrip WHERE ced='" . $_POST['ced_docent'] . "'", $link3))==0) {
   $Sql3="insert into tab3_inscrip (ced, nomb, apell_doc, tlf_doc, nivl, Direcc_doc, correo_doc, fech_doc, foto_doc, nacionalid_doc) VALUES ('" . $_POST['ced_docent'] . "', '" . $_POST["nomb_docent"]. "', '" . $_POST["apell_docent"]. "', '" . $_POST["telef_docent"]. "', '" . $_POST["Nivel_docent"]. "', '" . $_POST["domi_docent"]. "', '" . $_POST["correo_docent"]. "', '" . $varfech. "', '".$rutaDestino."','" . $_POST["nacionalidad_doc"]. "' )";
		mysql_query ($Sql3,$link3);
      		 ?>
                     <script type="text/javascript">
                        alert("Registro realizado...... pulse cualquier tecla para Contonuar");
                        </script>
                        <?php
       			//	echo "<meta http-equiv=Refresh content=3;url=tab_reg_datos.php?a=1>";
       	} else {
       	    ?>
                     <script type="text/javascript">
                        alert("Ya Fue Creado un Docente con esa CEDULA, por favor, Verifique su Ingreso");
                        </script>
                        <?php
       			//echo "<strong>Ya Fue Creado un Usuario con esa CEDULA, por favor, Verifique su Ingreso</strong>";
       			//echo "<meta http-equiv=Refresh content=3;url=tab_reg_datos.php?a=1>";
 		}
            
            
            
              
			}
       	?>
    
    
    <!--==================================================== Inicio     del      formulario==============================---->
    <!--=================================================================================================================---->
<div > <!--CONTENEDOR -->  
<div >
  <div class="center" id="imagen"><!--<img src="mages/Top.jpg" height="100" width="900">--> </div>
</div>

<div  class="codrops-top">
<!--========================================================-->
<div class="cabezera">
<div id="alinear" >
       <div>
       
                <div id="dato_d" ><img  src='images/database_add.png' width='10%'/><strong>Registro de Datos </strong></div>
                <div id="dato_d" ><?php echo $tipo_user; ?>
                <strong> Usuario:</strong><?php echo $nombre_user; ?></div>
                <div id="dato_d" > Fecha: <?php $fecha=date("d/m/Y"); echo $fecha ;?></div>
        </div>
        <ul class="menu4">
            <li><a href="#nogo"></a></li>
            <li><a href="menu.php"><b><strong>INICIO</strong></b></a></li>
            <li><a href="tab_reg_datos.php"><b><strong>Registro</strong></b></a></li>
            <li><a href="plan.php"><b><strong>Plan de Eval.</strong></b></a></li>
	    <li><a href="buscar.php"><b><strong>Mantemiento</strong></b></a></li>
           <li><a href="buscar_repo.php"><b><strong>Reportes</strong></b></a></li>
          
                   
            </ul>
</div>
</div>
<!--========================================================-->

</div>

       
		<div class="pweb" class="center">
        
			<div>
            
            <form  method="POST" action="tab_reg_datos.php" enctype="multipart/form-data" >
				<div  style="color: #FFF; font-size:0px;"><?php $fecha = date("d-m-Y");?></div>
				<div class="tabs">
                        <input type="submit" style="background:url(images/fondo_input/fondo_input_g.png);width:52px;" name="insertar registro"  value="[Enviar]"\>
                        
                        <input type="reset" name="Limpiar" id="limpiar" style="background:url(images/fondo_input/fondo_input_g.png);width:68px;"  value="[Resetear]" />
                	
					<!--======================================================================================================================================------------>
					<div class="tab"  >
						<input type="radio" id="tab-1" name="tab-group-1" checked>
						<label for="tab-1" class="header2" >
							Representante
						</label>
						<div class="content" >
							 <div id="fila_p">
								<div class="fila" >
                                
								<table class="contacto"  id="dato"   >  
                                      <tr>  <div><td><p>C&eacute;dula o Pasaporte:
                                        <td><input type="text" id="cedx" name="cedx" size="15" onchange="cedula_val()">
                                      
                                       
                                        </p></div>
                                        
                                     
                                       
                                        
                                       <tr>  <div><td><p>Nombres  :
                                        <td><input type="text" name="nomb" id="nomb"  size="35" onchange="palabras()" >
                                        
                                        
                                        <div ></div>
                                        
                                        </div>
                                        <tr> <div><td><p>Apellidos:
                                        <td><input type="text" name="apell" size="35" id="apell"   onchange="palabras2()"> 
                                        </p></div>
                                        
                                      <tr>   <div><td> <p>Tel&eacute;fono:
                                        <td><input type="text" name="telef" id="telefono" size="27">
                                        </p></div>
                                        
                                         <tr>   <div><td> <p>Domicilio:
                                        <td><input  type="text"  name="domici" id="domici" size="27">
                                        </p></div>
                                        
                                        <?php $fecha = date("d-m-Y");?>
                                      <tr>   <div><td><p>Fecha:
                                        <td><input type="text" name="fech"  id="fechfam" value="<?php echo $fecha ;?>"  />
                                        
   
                                        </p></div>
                                                                               
                                        <tr>  <div><td><p>Email:
                                        <td><input type="text" name="correo" id="correo"  onchange="VerifyEmail();">
                                       
                                        
                                        </p></div>
                                        <tr>
                                          <td >Foto:</td>
                                          <td><input type="file" name="imagen1" id="imagen1" /></td>
                                        </tr>
                                        
                                        <?php        ?>
                                     </p></div>
                                        
                                        </table>
													<!-----------------------------------------------fin S1B----------------------------------------------------->
													</div><!-- div fila -->
													</div><!-- div fila_p -->
													<!--fila hacen el efecto tabulador-->
													</div><!-- fin de content---->
													</div><!-- fin class tab 1 ------->
                                                    
<!-----------------------------------------tab2--Registro Alumno----------------------------------------------------------->
<!--======================================================================================================================================------------>
                            <div class="tab">
							<input type="radio" id="tab-2" name="tab-group-1">
							<label for="tab-2" class="header2">
                             Alumno
							</label>
							<div class="content">
                            <!-----contenido del tab2-->
                                <div id="fila_p">
								<div class="fila" >
									<!-----------------------cara A S2-------------------------------->
									<table class="contacto"  id="dato" cellpadding="0" cellspacing="5" align="center" border="0" >  
                                      
                                      <tr>  
                                      <td><p>C&eacute;dula O Pasaporte:</td>
                                        <td><input type="text" name="ced_alum" id="cedx"  size="15" onchange="cedula_val()" ></p></td>
                                       
                                      
                                        </tr>
                                      
                                      
                                         <tr>  <div><td><p>Nombres :
                                        <td><input type="text" name="nomb_alum" id="nomb_alum"  size="25" onchange="palabras()" >
                                        
                                        
                                        <div ></div>
                                        
                                        </div>
                                        <tr> <div><td><p>Apellidos:
                                        <td><input type="text" name="apell_alum" size="25" id="apellx_alum"   onchange="palabras2()"> 
                                        </p></div>
                                        
                                        <tr>   <div><td> <p>Edad:
                                        <td><input type="text" name="edad_alum" id="edad_alum" size="25">
                                        </p></div>
                                        
                                      <tr>   <div><td> <p>Tel&eacute;fono:
                                        <td><input type="text" name="telef_alum" id="telefono2" size="25">
                                        </p></div>
                                        
                                         <tr>   <div><td> <p>Domicilio:
                                        <td><input type="text" name="domicilio_alum" id="domicilio_alum" size="25">
                                        </p></div>
                                        
      
                                        
                                        <tr>   <div><td> <p>Nacionalidad:
                                        <td>
                                        <select name="alum_nacionalidad">
                                              <option value="chino" selected="selected">Chino</option>
                                              <option value="venezolana">Venezolana</option>
                                              <option value="otro">Otro</option>
                                              
                                        </select>
                                        
                                        </p></div>
                                        </tr>
                                        <?php $fecha = date("d-m-Y");?>
                                      <tr>   <div><td><p>Fecha Nac:
                                        <td><input type="text" name="fecha_alumn"  id="fechfam1" value="<?php echo $fecha ;?>" hol/>
                                        </p></div>
                                                                               
                                        <tr>  <div><td><p>Email:
                                        <td><input type="text" name="correo_alum" id="correo_alum"  onchange="VerifyEmail();">
                                        
                                        
                                        </p></div>
                                        <tr>  <div><td><p>Docente:
                                        <?php
                                        include("Conexion1.php"); 
                                        $link=Conectarse(); 
                                                                        
                                                echo "<td> <select name='docente'>";	
                                              	$cursor2 = mysql_db_query("db_colegio", "SELECT ced, nomb FROM tab3_inscrip", $link);
                                            	while ($row = mysql_fetch_array($cursor2))
                                            	
                                                { ?>
                                                 <option value="<?=$row["ced"]; ?>"><?=$row["nomb"]." ".$row["ced"]; ?></option>
                                                <?php
                                                }
                                            	mysql_free_result($cursor2);
                                            	echo"<option selected='selected'>Ninguno</select></td>";
    ?>                                      </tr>
                                        <tr>
                                          <td width="111">Foto:</td>
                                          <td><input type="file" name="imagen1_alum" id="imagen1_alum"  size="10"/></td>
                                        </tr>
                                        
                                        <?php
                                        /*
                                    	$cursor ="SELECT concep_dpto, id_dpto FROM dpto_gas";
                                    	$result=pg_query($conn, $cursor);
                                    		echo "<select name='dpto'>";
                                     while($row = pg_fetch_array($result)){
                                            ?>
                                             <option value="<?=$row["id_dpto"]; ?>"><?=$row["concep_dpto"]; ?></option>
                                            <?php
                                        }
                                   */ ?>
                                    </select>
										
                                        </p></div>
                                        </table>
												 		
                                                    <!-- aqui va el fin de form-->
													<!--fin dato Dere--->
													<!-----------------------------------------------fin cara B----------------------------------------------------->
													</div><!-- div fila -->
													</div><!-- div fila_p -->
                                                     <!----------------------------------------fin del contenido tab2 ------------------------------------------>
          </div>	<!-- fin class content ------->
											         </div><!-- fin class tab 2------->
<!--===============================================================================================================-->
<!---------------------------------------tab3 Registro de docente ------------------------------------------------------->
<!--===============================================================================================================-->
                            <div class="tab">
							<input type="radio" id="tab-3" name="tab-group-1">
							<label for="tab-3" class="header2">
                            <!----------------------------------------tab3 ------------------------------------------>
							Registro Docentes
							</label>
							<div class="content">
                            <!----------------------------------------contenido del s3a ------------------------------------------>
                            <div id="fila_p">
								<div class="fila" >
									<!-----------------------cara------------------------------->
								<table class="contacto"  id="dato">  
                                       <tr>  <div><td><p>Cedula  :
                                        <td><input type="text" name="ced_docent" id="ced_docent"  size="35" onchange="cedula_doc()" >
                                       
                                        
                                        <div ></div>
                                        
                                         <tr>  <div><td><p>Nombres:
                                        <td><input type="text" name="nomb_docent" id="nomb_docent"  size="35" onchange="palabras2()" > 
                                        
                                        </div>
                                        <tr> <div><td><p>Apellidos:
                                        <td><input type="text" name="apell_docent" size="35" id="apellx_docent"   onchange="palabras3()"> 
                                        </p></div>
                                        
                                      <tr>   <div><td> <p>Tel&eacute;fono:
                                        <td><input type="text" name="telef_docent" id="telefono3" size="27">
                                        </p></div>
                                        
                                         <tr>   <div><td> <p>Domicilio:
                                        <td><input type="text" name="domi_docent" id="domi_docent" size="27">
                                        </p></div>
                                        <tr>   <div><td> <p>Nivel:
                                        <td><select name="Nivel_docent">
                                              <option value="1">b&aacute;sico</option>
                                              <option value="2">Avanzado</option>
                                              <option value="0" selected="selected">Seleccione un Nivel</option>
                                              
                                            </select>
                                        
                                        </p></div>
                                        </tr>
                                        
                                        <?php $fecha = date("d-m-Y");?>
                                      <tr>   <div><td><p>Fecha de Registro:
                                        <td><input type="text" name="fech_docent"  id="fechfam2" value="<?php echo $fecha ;?>"  />
                                        </p></div>
                                                                               
                                        <tr>  <div><td><p>Email:
                                        <td><input type="text" name="correo_docent" id="correo_docent"  onchange="VerifyEmail();">
                                       <tr>   <div><td> <p>Nacionalidad:
                                        <td>
                                        <select name="nacionalidad_doc">
                                              <option value="chino" selected="selected">Chino</option>
                                              <option value="venezolana">Venezolana</option>
                                              <option value="otro">Otro</option>
                                              
                                        </select>
                                        
                                        </p></div>
                                        </tr>
                                       
                                        </p></div>
                                        <tr>
                                          <td width="111">Foto Registro:</td>
                                          <td><input type="file" name="imagen3" id="imagen3" /></td>
                                        </tr>
                                        
                                        <td--><?php
                                        /*
                                    	$cursor ="SELECT concep_dpto, id_dpto FROM dpto_gas";
                                    	$result=pg_query($conn, $cursor);
                                    		echo "<select name='dpto'>";
                                     while($row = pg_fetch_array($result)){
                                            ?>
                                             <option value="<?=$row["id_dpto"]; ?>"><?=$row["concep_dpto"]; ?></option>
                                            <?php
                                        }
                                   */ ?>
                                    </select>
										
                                        </p></div>
                                        
                                        </div>
                                        </table>
												 		
          
													<!-----------------------------------------------fin cara s3b----------------------------------------------------->
													</div><!-- div fila -->
													</div><!-- div fila_p -->                           
                                                        <!----------------------------------------fin del contenido s3 ------------------------------------------>
								</div><!-- fin class content -->
							</div><!-- fin class tab3 -->
                                <!-- --------------------------------------------------------------------------------->
								<!----------------------------------------tab4 ------------------------------------------>
                  
                        
				
                    </div><!-- class="tabs"------->
        </form>
																				
                    </div><!--CONTENEDOR -->
                    
					</div><!--pweb -->
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