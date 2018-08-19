         
	//$(document).ready(function(){
	  //  var1 = $("#fecha1").val();
       // var2 = $("#fecha").val();
      //  $("#enviar").click(function(){
       //     alert(var1+var2);
    //    });
 function consulta_ajax()
 {
    	var var1=(document.getElementById("fecha").value);
        //var var2=(document.getElementById("fecha1").value);
        var var2=(document.getElementById("turno").value);
       // alert(var1+var2+var3);
  if ((var1.length==0)&& (var2.length==" "))
  { 
    alert("debe llenar todos los campos");
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
xmlhttp.open("POST","resumen_conb_02graf.php?var1="+var1+"&var2="+var2,true);


xmlhttp.send();

}
	}
