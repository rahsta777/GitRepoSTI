// JavaScript Document
/*======================funcion para nombre==================================*/  

function palabras() {
        var patron=/[a-z]|[A-Z]{10,25}/
        var  palabra=document.getElementById("nombres").value;
        testar=patron.test(palabra);
        if(testar==false)
            alert("Escriba palabras en el Campo Nombres hasta 30 caracteres ");
            document.getElementById("nombres").focus();
       }
       function palabras2() {
        var patron=/[a-z]|[A-Z]{10,25}/
        var  palabra=document.getElementById("apell").value;
        testar=patron.test(palabra);
        if(testar==false)
            alert("Escriba solo palabras en Apellidos");
            (document.getElementById("apell").focus());
       }
/*========================================================*/ 
 function imailcom() {
  //patron1=/(^[a-z]|[A-Z]{10,25}\*@[a-z]|[A-Z]{10,25}\.[a-z]{3}|^)$/
        var   patron1=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/
        var  palabra=document.getElementById("email").value;
        testar=patron1.test(palabra);
        if(testar==false)
            alert("Escriba cualquier combinacion en el Email");
            (document.getElementById("email").focus());
       } 
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
    var patro_ced= /(^([V-v]|[E-e]\-[1-9]{1,2}\.[0-9]{3,3}\.[0-9]{3,3})|^)$/;
    
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

/*======================funcion para nombre==================================*/  

function palabras_inst() {
        var patron=/[a-z]|[A-Z]{10,25}/
        var  palabra=document.getElementById("nombres_inst").value;
        testar=patron.test(palabra);
        if(testar==false)
            alert("Escriba palabras en el Campo Nombres hasta 30 caracteres ");
            document.getElementById("nombres").focus();
       }
       function palabras2_inst() {
        var patron=/[a-z]|[A-Z]{10,25}/
        var  palabra=document.getElementById("apell_inst").value;
        testar=patron.test(palabra);
        if(testar==false)
            alert("Escriba solo palabras en Apellidos");
            (document.getElementById("apell").focus());
       }
/*========================================================*/ 
	
  

jQuery(function($){
   $("#fecha").mask("99/99/9999");
   $(".fecha1").mask("99/99/9999");
   $("#telefono").mask("(999) 999-9999");
   $("#telefono1").mask("(999) 999-9999");
   
$("#apel").mask("aaaaaaaaaaaaaaaaaaaa");
   $("#codigo3").mask("999");
  $("#numero_nom").mask("999"); 
   $("#telefone").mask("(999)-999.99.99");
   $("#caracter").mask("a*********");
   $.mask.definitions['~']='[EV]';
   $("#ced").mask("~-99.999.999");
   $("#ced2").mask("~-99.999.999");
   $("#cifra").mask("999.999,99");
    $("#porcentajes").mask("999,99");
   $("#num_nomin").mask("9999")
	$("#propio").mask("~9.99 ~9.99 999"); 
    
   
   
});
/**************************************************************
Máscara de entrada. Script creado por Tunait! (21/12/2004)
Si quieres usar este script en tu sitio eres libre de hacerlo con la condición de que permanezcan intactas estas líneas, osea, los créditos.
No autorizo a distribuír el código en sitios de script sin previa autorización
Si quieres distribuírlo, por favor, contacta conmigo.
Ver condiciones de uso en http://javascript.tunait.com/
tunait@yahoo.com 
***********************************10****************************/
var patron = new Array(2,2,4)
var patron_tlf = new Array(4,3,2,2)
var patron_cedu = new Array(9)
var patron_nota = new Array(1)

function mascara(d,sep,pat,nums){
if(d.valant != d.value){
  val = d.value
  largo = val.length
  val = val.split(sep)
  val2 = ''
  for(r=0;r<val.length;r++){
    val2 += val[r]  
  }
  if(nums){
    for(z=0;z<val2.length;z++){
      if(isNaN(val2.charAt(z))){
        letra = new RegExp(val2.charAt(z),"g")
        val2 = val2.replace(letra,"")
      }
    }
  }
  val = ''
  val3 = new Array()
  for(s=0; s<pat.length; s++){
    val3[s] = val2.substring(0,pat[s])
    val2 = val2.substr(pat[s])
  }
  for(q=0;q<val3.length; q++){
    if(q ==0){
      val = val3[q]
    }
    else{
      if(val3[q] != ""){
        val += sep + val3[q]
        }
    }
  }
  d.value = val
  d.valant = val
  }
}
 <!------------------------------------------->

