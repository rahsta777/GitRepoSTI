// JavaScript Document


	
  

jQuery(function($){
   $("#fecha").mask("99/99/9999");
   $("#fecha1").mask("99/99/9999");
   $("#telefono").mask("(999) 999-9999");
   $.mask.definitions['~']='[GJ]';
   $("#prove_rif").mask("~-9999999-9");
   $("#codigo3").mask("999");
  $("#numero_nom").mask("999"); 
   $("#telefone").mask("(999)-999.99.99");
   $("#caracter").mask("a******************");
      $("#ced").mask("~-99.999.999");
   $("#cifra").mask("999.999,99");
    $("#porcentajes").mask("999,99");
   $("#num_nomin").mask("9999")
	$("#propio").mask("~9.99 ~9.99 999"); 
    
    
        
   
});
