// Variables para setear
   	
function val_nombres(elem)
{ var vectornombre=new array;
	var entnombre=(document.getElementById('Nombre').value);
    
        //var var3=(document.getElementById("num_nomin").value);
        //alert(var1+var2);
  if ((entnombre.length!==0) && (entnombre!==""))
  { 
    alert("debe llenar todos los campos")+var1.length;
    return;
  }
}

function val_cifra(elem)
{ var vectornombre=new array;
	
    var entnombre=(document.getElementById('cifra').value);
        //var var3=(document.getElementById("num_nomin").value);
        //alert(var1+var2);
  if ((entnombre.length!==0) && (entnombre!==""))
  { 
    alert("debe llenar todos los campos")+var1.length;
    return;
  }
}
function cifra_val(){
	var cifra=(document.getElementById('cifra1').value);
	for(var i=0; i<cifra.length; i++) {
		var ch=cifra.substring(i,i+1);
		if(ch < "0" || ch > "9" || ch!=="." || ch!==",") {
		alert("Escriba un valor numérico.");
		return false;
	}
	else return true;
}
