// JavaScript Document


	
  

jQuery(function($){
   $("#fecha").mask("99/99/9999");
   $("#fecha1").mask("99/99/9999");
   $("#telefono").mask("(999) 999-9999");
   $.mask.definitions['~']='[GJN]';
   $("#prove_rif").mask("~-99999999-9");
   $("#codigo3").mask("999");
  $("#numero_nom").mask("999"); 
   $("#telefone").mask("(999)-999.99.99");
   $("#caracter").mask("a******************");
     
   $("#mont_fact").mask("999.999,99");
    $("#porcentajes").mask("999,99");
   $("#id_fact").mask("9999")
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
var patroncifra = new Array(9,2)

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
