// JavaScript Document
//-----------------------------------------------------------------
 function flotante() {
                  var valor_precio=(document.getElementById("precio").value);
                  var cant=(document.getElementById("cantidad2").value);
                  total=parseFloat(valor_precio*cant).toFixed(3);
                  document.getElementById("numero").value = total;
					       //alert(total);
                  }
 function fconve_america()
	   {
	 var numero1=(document.getElementById("cifra_latin").value);
	 var aux1=0;
         var separa=new Array();
                resultado=0;
	        numero1=num;
            separa= numero1.split('.');
            cant_array=separa.length;
            aux1=separa[0];
            for(i=0;i<cant_array;i++)
            {
            alert("El valor 1 cifra entrada : "+separa+"cantida arreglos:  "+cant_array);
            separa1=aux1;
            //alert("El valor 2 sin decimales: "+separa1);
            separa2=separa1.replace(',','.');
            //alert("El valor Extraido: 9,999"+separa2+"valor de I"+i);/*esta aqui 9,999*/
            aux1=separa2;
            }
            //resultado=separa2;
            /*------------------------------------------------------------------*/
            caract1= numero.indexOf(','); 
            extrae=numero.substring(caract1);
            separapto2=extrae.replace('.',',');/* voy por aqui check*/
            //alert("E: "+separapto2);
            //puntos=[separa2, separapto2];
           // arreglo=puntos.join("");
            resultado2=separapto2;
            //alert("El salida final para calcular: "+resultado);
         document.getElementById("resultado2").value = parseFloat(resultado2).toFixed(2); 
        
        }
function fconve_america_buena(elemento)//buena perfecta muestra en foemato latin 99.999,99
	   {
	 var numero1=(document.getElementById("precio").value);
            // alert("valor de entrada : "+numero1);
	 var aux1=0;
            var separa=new Array();
            resultado=0;
            //==========================/miles/=================================== 
	        separa= numero1.split('.');
            $array1=separa[0];
            separa2=$array1.replace(',','.');/* esta aqui bien*/
            
           //==========================/decimales/=================================== 
           $array2=separa[1];
            puntos=[separa2,",",$array2];
            arreglo=puntos.join("");
            resultado=arreglo;
           //alert("La salida final es : "+resultado);
            document.getElementById("resultado").value = resultado;
          
        }					       
       
						       
       
					