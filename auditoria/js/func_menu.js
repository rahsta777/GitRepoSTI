/**
 * @author Propietario
 */
function getComboA(sel) {
    var valor = sel.value;  
    

if (sel.value=="general")
 	{
		document.getElementById('opcion1').style.display = 'inline';
		document.getElementById('opcion2').style.display = 'none';
		document.getElementById('opcion3').style.display = 'none';
		document.getElementById('opcion4').style.display = 'none';

	}
if (sel.value=="mantenimiento")
 	{
		document.getElementById('opcion1').style.display = 'none';
		document.getElementById('opcion2').style.display = 'inline';
		document.getElementById('opcion3').style.display = 'none';
		document.getElementById('opcion4').style.display = 'none';
		
	}
if (sel.value=="documentos")
 	{
		document.getElementById('opcion1').style.display = 'none';
		document.getElementById('opcion2').style.display = 'none';
		document.getElementById('opcion3').style.display = 'inline';
		document.getElementById('opcion4').style.display = 'none';
		
	}
if (sel.value=="reportes")
 	{
		document.getElementById('opcion1').style.display = 'none';
		document.getElementById('opcion2').style.display = 'none';
		document.getElementById('opcion3').style.display = 'none';
		document.getElementById('opcion4').style.display = 'inline';
		
	}

		



}
