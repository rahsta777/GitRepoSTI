 
            
	//$(document).ready(function(){
	  //  var1 = $("#fecha1").val();
       // var2 = $("#fecha").val();
      //  $("#enviar").click(function(){
       //     alert(var1+var2);
    //    });
 function consulta_ajax()
 {
    //var fecha_act=new date();
   // var fecha1=new array();
   // fecha1=[0]=fecha_act.getDate();
   // fecha1=[1]=fecha_act.getMonth()+1;
   // fecha1=[2]=fecha_act.getFullYear();
    //var fecha1=(fecha_act.getDate() + "/" + (fecha_act.getMonth() +1) + "/" + fecha_act.getFullYear());
        //alerta(" la Fecha: "+fecha1=[2]);
    	var var1=(document.getElementById("fecha").value);
        var var2=(document.getElementById("fecha1").value);
        //var var3=(document.getElementById("num_nomin").value);
        //alert(var1+var2);
  if ((var1.length==0) && (var2.length==0))
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
xmlhttp.open("POST","resum_nomi.php?var1="+var1+"&var2="+var2,true);


xmlhttp.send();

}
	}
