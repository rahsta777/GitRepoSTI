<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>	
<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="roberto" /> 

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
<link rel="stylesheet" type="text/css" href="css/sddm.css" >
<link rel="stylesheet" type="text/css" href="css/style_audit.css" >
<script language="javascript" type="text/javascript" src="js/niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="css/niceforms-default.css" />
<script type="text/javascript" src="js/funciones.js"></script>
<link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.js"></script>
<script>
function jqedit_prov(elprove){
     var idprove=document.getElementById('prove_rif').value;
     var nom_prove_js=document.getElementById('prove_nom').value;
     var prove_dir1_js=document.getElementById('prove_dir1').value;
      var prove_dir2_js=document.getElementById('prove_dir2').value;
     var repre_prove=document.getElementById('prove_repre').value;
     var tlf_prove=document.getElementById('telefone').value;
     var email_prove=document.getElementById('prove_correo').value;
     var lugar_prove=document.getElementById('prove_lugar').value;
     
     //alert("Aqui va la data "+idprove+nom_prove_js+prove_dir1_js);
        var argu_prove = {
                "varprove" : idprove,
                "varprovenom" :nom_prove_js,
                "varprovedir1":prove_dir1_js,
                "varprovedir2":prove_dir2_js,
                "varproverepre":repre_prove,
                "varprovetlf":tlf_prove,
                "varproveemail":email_prove,
                "varlugar_prov":lugar_prove 
               
        
        
                                 
        };
        $.ajax({
                data:  argu_prove,
                url:   'edit_provee2.php',
                type:  'post',
                beforeSend: function () {
                        $("#msn_editar").html("<center>Procesando, espere por favor... <img src='images/loading.gif' /><center>");
                },
                success:  function (response) {
                        $("#msn_editar").html(response);
                }
              
        });
}
</script>

</head>
<body>
<div style="padding:25px;">
<form action="reg_provee2.php" method="post" >


<!----------------------------------------------------------------------------->
 <script language= "JavaScript" src="js/jquery.maskedinput.js"></script>
<script language= "JavaScript" src="js/funciones.js"></script>
 <!------------------------------------------------------------------------------>
  <?php 
  include("conexion/Conexion1.php");
        $link=Conectarse(); 
       $varid=trim($_GET["vari"]);
      
  
  //$varid="G-01110-2222";
     if (isset($varid))
     
        {      
     //echo "el valor pasado es: ".$varid;
 $busqueda4=mysql_query("SELECT * FROM tbl_prov WHERE prov_rif ='".$varid."' ");
 if($busqueda4 ==FALSE) 
                {
                 die(mysql_error()); // TODO: better error handling
        
                 }
                 while($filas4=mysql_fetch_array($busqueda4))
           { 
            $id_proveedor=$filas4['prov_rif'];
            $nomb_prov=$filas4['razon_prov'];
            $repres_prov=$filas4['repres_prov'];
            $dir1_prov=$filas4['dir1_prov'];
            $dir2_prov=$filas4['dir2_prov'];
            $ubica_prov=$filas4['lugar_prov'];
            $Tlf_prov=$filas4['Tlf_prove'];
            $correo_prov=$filas4['Email_prov'];
  ?>
  
        <div class="columna">
		<fieldset>
		     <legend><img src="images/iconos/edit_user.png" width="30px">Datos Prooveedor </legend>
		<dl>
			 <dt><div>Rif:</div></dt>
			    <dd><input type="text" name="prove_rif" id="prove_rif" value="<?php echo $id_proveedor  ; ?>" placeholder="Ejem. J-12345678-0" /></dd>
			</dl>
            
        	<dl>
			 <dt><div>Razon Social:</div></dt>
                <dd><input type="text" name="prove_nom" id="prove_nom" size="25" value="<?php echo $filas4['razon_prov']  ; ?>" maxlength="128" /></dd>
			</dl>
            <dl>
			 <dt><div>Direccion1:</div></dt>
			    <dd><input type="text" name="prove_dir1" id="prove_dir1" size="25" value="<?php echo $filas4['dir1_prov']  ; ?>" maxlength="128" /></dd>
			</dl>
            <dl>
			 <dt><div>Direccion2:</div></dt>
			    <dd><input type="text" name="prove_dir2" id="prove_dir2" size="25" value="<?php echo $filas4['dir2_prov']  ; ?>" maxlength="128" /></dd>
			</dl>
            <dl>
			 <dt><div>Lugar de servicio:</div></dt>
			    <dd>
				<select  name="prove_edo" id="prove_lugar" >
				    <option value="Dist. Federal">Dist. Federal</option>
				    <option value="Aragua">Aragua</option>
				    <option value="Carabobo">Carabobo</option>
         			<option value="Portuguesa">Portuguesa</option> 
         			<option value="Barinas">Barinas</option> 
				    <option selected value="<?php echo $filas4['lugar_prov']  ; ?>"  selected><?php echo $filas4['lugar_prov']  ; ?></option>
			     </select>
			    </dd>
			</dl>
            
            
            <dl>
			 <dt><div>Representante:</div></dt>
			    <dd><input type="text" name="prove_repre" id="prove_repre" size="25" value="<?php echo $filas4['repres_prov']  ; ?>" maxlength="128" /></dd>
			</dl>
			</dl>
			
			<dl>
			 <dt><div>Tlf. Contacto:</div></dt>
			    
			    <dd><input type="text" name="prove_contact" id="telefone" size="25"  value="<?php echo $filas4['Tlf_prove']  ; ?>" maxlength="128" /></dd>
			     
			</dl>
			<dl>
			 <dt><div>Email</div></dt>
			    
			    <dd><input type="text" name="prove_correo" id="prove_correo" size="25"  value="<?php echo $filas4['Email_prov']  ; ?>"placeholder="ejemplo@um.es" required pattern="[\w-\.]{0,25}@[\w-]{1,20}\.[\w]{2,3}" /></dd>
			     
			</dl>
            </fieldset>
            <div  class="columna">
            <?php  
          	
              
            
            ?>
		    <div style="height:auto;width:40%;position:relative;margin:10px ;">
		     <input type="hidden"  name="edit_prov" id="edit_prov" size="25" value="<?php echo $id_proveedor."*".$nomb_prov."*".$repres_prov."*".$dir1_prov."*".$dir2_prov."*".$ubica_prov."*".$Tlf_prov."*".$correo_prov;?>"/>   <a href="javascript:;"  style="background:url(images/fondo_input/fondo_input.png);width:550px;height:200px ;margin:10px;" title="Editar Proveedor :" onclick="jqedit_prov($('#edit_prov').val());return false;" >Grabar</a>
		    </div>
            <div style="height:auto;width:40%;position:relative;margin:10px ;">
            <a href="javascript:;" onclick="javascript:window.close();" >Cerrar</a></div>
            <div id="msn_editar"></div>
		    </div>
            
            
      
            
            </div>
            
		    
          <?php  } }
        ?>   
		    
           
		</form>
       
        </div>
        
</body>
	</html>	   