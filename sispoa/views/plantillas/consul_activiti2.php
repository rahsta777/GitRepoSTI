<?php
 require'include/../func.class.php';
$objprod=new Crudpoa;
$consulta=$objprod->mostrar_program_poa21();
?>
<!--script type="text/javascript">
$(document).ready(function(){
	// mostrar formulario de actualizar datos
	$("table tr .modi a").click(function(){
		$('#tabla').hide();
		$("#formulario").show();
		$.ajax({
			url: this.href,
			type: "GET",
			success: function(datos){
				$("#formulario").html(datos);
			}
		});
		return false;
	});
	
	// llamar a formulario nuevo
	$("#nuevo a").click(function(){
		$("#formulario").show();
		$("#tabla").hide();
		$.ajax({
			type: "GET",
			url: 'nuevo.php',
			success: function(datos){
				$("#formulario").html(datos);
			}
		});
		return false;
	});
});

</script-->
<tbody>
	<table align="center"  cellpadding="40"  class="table table-striped table-hover table-responsive table-bordered">
   		<tr>
   			<th>No.</th>
   			<th>Dirección</th>
    		<th >Producto</th>
    		<th>Indicadores</th>
    		<th>Responsable</th>
    		<th>Fecha Inicio</th>
    		<th>Fecha Fin</th>
    		<th></th>
            <th></th>
        </tr>
<?php
if($consulta) {
	$contador=0;
	while( $row_activ = mysql_fetch_array($consulta) ){
	/*while ($row_activ = $consulta->mysql_fetch_array()) {*/
	$contador++;
	?>
	
		  <tr class="info">
		   		<td ><?php echo $contador; ?></td>
			  <td ><?php echo $row_activ['nomb_direcciones'] ?></td>
			  <td><?php echo $row_activ['nomb_produc'] ?></td>
			  <td><?php echo $row_activ['indicador'] ?></td>
			   <td><?php echo $row_activ['responsable_prod'] ?></td>
			    <td><?php echo $row_activ['fecha_ini'] ?></td>
			    <td><?php echo $row_activ['fecha_cul'] ?></td>
			
			  <td><span class="modi"><a href="actualizar.php?id=<?php echo $row_activ['nomb_user'] ?>"><img src="images/database_edit.png" title="Editar" alt="Editar" /></a></span></td>
			  <td><span class="dele"><a onClick="EliminarDato(<?php echo $row_activ['nomb_user'] ?>); return false" href="eliminar.php?id=<?php echo $row_user['id'] ?>"><img src="images/delete.png" title="Eliminar" alt="Eliminar" /></a></span></td>
		  </tr>
	<?php
	}
}
?>
    </table>
    </tbody>