    /**
 * @author Propietario
 */
/*==============================================*/
codigosx=new Array();
nombresx=new Array();

function verifica(elemento)
{

    boton=document.getElementById(elemento);

    if(boton.checked==true)
        {

        var separador=boton.value.split("*");

           codigosx.push(separador[0]);
           nombresx.push(separador[1]);
        }

    else
        {
            codigosx.pop();
            nombresx.push();
        }
}
 function datos()
 {
      document.getElementById('codigos').value=codigosx.toString();
      document.getElementById('nombres').value=nombresx.toString();
      alert(document.getElementById('codigos').value);
      alert(document.getElementById('nombres').value);
 alert("paso al modulo Cons_auditados de js"+codigosx+nombresx)
	}
/*==================================================*/
function Cambio(elemento)
{
var valor1=(document.getElementById(elemento).value);
var valor=parseFloat(document.getElementById(elemento).value);
/*var checkboxes = document.getElementById("form1");*/
var datarray=new array();
datarray=valor1;
 for (var x=0; x < datarray.length; x++) 
		
     alert("paso2:  "+datarray[x]+" ");
   
/*==================================================*/
    /*var checkboxes = document.getElementById("colorcheck").checkbox;
    var cont = 0;
     
    for (var x=0; x < checkboxes.length; x++) {
    if (checkboxes[x].checked) {
    /*document.formchecka.elements[x].checked

   
    }
    }*
if (elemento.checked){
        alert("paso3:  "+valor1+" ")
        document.getElementById('colorcheck').style.backgroundColor='ff0000'
    }else
        document.getElementById('colorcheck').style.backgroundColor=''

 	

if (valor>0){
	       alert("paso:  "+valor1+" ")*
        document.getElementById('elemento').style.background ='blue';
      		document.getElementById('elemento').checked = false;
								document.getElementById('elemento').checked = false;
							
    
	}
    if (valor+1>valor)
     document.getElementById('colorcheck').checked=false;*/
/*==============================================*/

   
 
 	  
     /* if (valor!="0"){
	
		document.getElementById('apDiv1').style.background ='red';
       
function Cambio(elemento)
{
if (document.getElementById(elemento).value=="rojo")
 	{
		document.getElementById('verde').checked = false;
		document.getElementById('amarillo').checked = false;
		document.getElementById('apDiv1').style.background ='red';
	}
		else if(document.getElementById(elemento).value=="verde")
			   {
			   	document.getElementById('rojo').checked = false;
			   	document.getElementById('amarillo').checked = false;
			   	document.getElementById('apDiv1').style.background ='green';
			   }
				else 
				{
				document.getElementById('rojo').checked=false;
				document.getElementById('verde').checked=false;
				document.getElementById('apDiv1').style.background='yellow';
			     }
}


    
	/*======================funcion para solo numeros de 4 digitos o mas==================================*/ 	
	}
function numero()
   {
    var patronum= /^[0-9]{4}/;
   	var num_form=(document.getElementById('num_unit').value);
     testar=patronum.test(num_form);
   
    
    if (testar==false){
        alert("Escriba un Valor Numerico de 4 cuatro Digitos (0001) o mayor");
        (document.getElementById("num_unit").focus());
        return false;
   }
 else 
        return true;
}          
/*======================funcion para nombre==================================*/  

function palabras() {
        var patron=/[a-z]|[A-Z]{10,25}/
        var  palabra=document.getElementById("descp_unit").value;
        testar=patron.test(palabra);
        if(testar==false)
            alert("Escriba palabras ");
            document.getElementById("descp_unit").focus();
       }
       function palabras4() {
        var patron=/[a-z]{10,25}/
        var  palabra=document.getElementById("apellx_docent").value;
        testar=patron.test(palabra);
        if(testar==false)
            alert("Escriba solo palabras");
            (document.getElementById("apellx_docent").focus());
       }
/*========================================================*/  
function codigos() {
        var patroncod=/(^([a-z]|[A-Z]{4}\-[a-z]|[A-Z]{3}\-[a-z]|[A-Z]{2}\-[a-z]|[A-Z]{2}\-[9]{2}\-[9]{4})|^)$/ 
        var  vcodigo=document.getElementById("codigo_audit").value;
        testar=patroncod.test(vcodigo);
        //alert("Test= ["+testar+"]")
        if(testar==false)
            alert("Debe Especificar en el codigo en el Formato (Aaaa-acb-ab-ab-99-9999)");
            document.getElementById("codigo_audit").focus();
       }
/*======================funcion para la cedula==================================*/            
        
        //cedula= /(^([V-v]|[E-e]\-[9]{2}\.[9]{3,3}\.[9]{3,3})|^)$/    
function valcedula()
{
    var patro_ced= /(^([V-v]|[E-e]\-[1-9]{1,2}\.[0-9]{3,3}\.[0-9]{3,3})|^)$/
    
   	var ced_form=(document.getElementById("cedula").value);
     testar=patro_ced.test(ced_form);
     //testar2=cedula99.test(ced_form);
    //alert("Test1= ["+testar+"]")
    /*if ((testar==true)){
        alert("fuera de rango No escriba V-99.999.999 es el limite de Valores");
        (document.getElementById("cedula").focus());
        return false;}*/
    if (testar==false){
        alert("Escriba un el formato valido V o E-99.999.999 ejemplo V-9.668.179.");
        (document.getElementById("cedula").focus());
        return false;
   }
 else 
        return true;
}                    
  /********************************************************************/
    /********************************************************************/
function query_ajax_prove_procesa()
 {
            var var12=(document.getElementById("buscarprov").value);
            
             //alert("El valor es: ")+var12;
              //alert("paso")+var1;  or  (var1.length==0)  && (var2.length==0)
        if ((var12===0))
        { 
          alert("Debe llenar todos los campos De busqueda por lo menos 3 caracteres")+var12.length;
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
          document.getElementById("la_consulta12").innerHTML=xmlhttp.responseText;
          }
        }
    xmlhttp.open("GET","localizar_procesar_fact.php?var12="+var12,true);
    xmlhttp.send();
    }
  }
/********************************************************************/
function query_ajax_prove()
 {
            var var12=(document.getElementById("buscarprov").value);
            
             //alert("El valor es: ")+var12;
              //alert("paso")+var1;  or  (var1.length==0)  && (var2.length==0)
        if ((var12===0))
        { 
          alert("Debe llenar todos los campos De busqueda por lo menos 3 caracteres")+var12.length;
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
          document.getElementById("la_consulta12").innerHTML=xmlhttp.responseText;
          }
        }
    xmlhttp.open("GET","localizar_prov_mant.php?var12="+var12,true);
    xmlhttp.send();
    }
  }
/********************************************************************/
/*************************** funciones AJAX ****************************/
	/********************************************************************/
function query_ajax_user()
 {
            var var1=(document.getElementById("buscar").value);
            
             //alert("seleccion")+var1;
              //alert("paso")+var1;  or  (var1.length==0)  && (var2.length==0)
        if ((var1===0))
        { 
          alert("Debe llenar todos los campos De busqueda por lo menos 3 caracteres")+var1.length;
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
    xmlhttp.open("GET","localizar_user_mant.php?var1="+var1,true);
    xmlhttp.send();
    }
  }
/********************************************************************/

/********************************************************************/

function consulta_ajax()
 {
				  	var var1=(document.getElementById("buscar").value);
				  	var var2=(document.getElementById("tip_busqd").value);
				     alert("seleccion")+var1;
				      //alert("paso")+var1;  or  (var1.length==0)  && (var2.length==0)
				if ((var1===0))
				{ 
				  alert("Debe llenar todos los campos De busqueda por lo menos 3 caracteres")+var1.length;
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
		xmlhttp.open("GET","localizar1.php?var1="+var1+"&var2="+var2,true);
		xmlhttp.send();
		}
	}
/********************************************************************/
function reporte1_ajax()
 {
    	var repvar1=(document.getElementById("buscareport").value);
    	//var repvar2=(document.getElementById("tip_report").value);
       //alert("seleccion")+var1;
        //alert("paso")+var1;  or  (var1.length==0)  && (var2.length==0)
  if ((repvar1===0))
  { 
    alert("Debe llenar todos los campos De busqueda por lo menos 3 caracteres")+repvar1.length;
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
    document.getElementById("elreporte").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","localiza_report.php?repvar1="+repvar1,true);
xmlhttp.send();
}
	}
/********************************************************************/
/********************************************************************/
function reporte_accion()
 {
    	var repvar1=(document.getElementById("buscareport").value);
    	//var repvar2=(document.getElementById("tip_report").value);
       //alert("seleccion")+var1;
        //alert("paso")+var1;  or  (var1.length==0)  && (var2.length==0)
  if ((repvar1===0))
  { 
    alert("Debe llenar todos los campos De busqueda por lo menos 3 caracteres")+repvar1.length;
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
    document.getElementById("elreporteacc").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","localiza_report_acc.php?repvar1="+repvar1,true);
xmlhttp.send();
}
	}
/********************************************************************/
