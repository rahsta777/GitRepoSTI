// JavaScript Document


	
  

jQuery(function($){
   $("#fecha").mask("99/99/9999");
   $("#fecha1").mask("99/99/9999");
   $("#fechfam").mask("99/99/9999");
   $("#fechfam1").mask("99/99/9999");
   $("#fechfam2").mask("99/99/9999");
   
   $("#telefono").mask("(999)999-9999");
   $("#telefono2").mask("(999)999-9999");
   $("#telefono3").mask("(999)999-9999");
   $("#codigo").mask("9999-9999-9999-9999");
   $("#codigo3").mask("999");
  
   
   $("#caracter").mask("a******************");
   $.mask.definitions['~']='[EV]';
   $("#ced").mask("~-99.999.999");
   ("#ced").mask("~-99.999.999");
   $("#cifra").mask("999.999,99");
    $("#porcentajes").mask("999,99");
   $("#num_nomin").mask("9999")
	$("#propio").mask("~9.99 ~9.99 999"); 
    
    
      
   
});
