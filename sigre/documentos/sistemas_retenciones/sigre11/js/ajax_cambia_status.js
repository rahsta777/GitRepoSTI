
function cambia_status()
 {
    	var var1=(document.getElementById("valor_icono").value);
        //var var2=(document.getElementById("login").value);
        alert("paso")+var1;
  if ((var1.length==0) )
  { 
    alert("debe llenar todos los campos")+var1.length;
  }
  else{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("la_consulta").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","accss_2.php?var1="+var1,true);


xmlhttp.send();

}
	}
    



