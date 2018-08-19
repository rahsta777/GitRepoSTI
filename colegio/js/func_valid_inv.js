 function fvalida(elemento)
{ 
    
   var  nombre=parseFloat((document.getElementById("nombre").value));
     var  apellido=parseFloat((document.getElementById("apellx").value));
              
         if (nombre.value == "" || nombre.value.indexOf(" ") == 0) {
            alert("Es obligatorio ingresar Datos en apellido")
             document.getElementById("nombre").focus();
            }
         if (apellido.value == "" || apellido.value.indexOf(" ") == 0 ) {
                 alert("Es obligatorio ingresar Datos en nombre")
                 document.getElementById("apellx").focus();
           
            }
        

}
        