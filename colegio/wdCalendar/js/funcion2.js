// JavaScript Document
/*=================funcion CONVIERTE A FORMATO LATIN-american==========================*/
function fconve_latin(numx)
	   {
	        var puntos=new Array();
            var separa_ob=new Array();
            var separa1=new Array();
            numero=numx;
            separa= numero.split(',');
            alert("El valor 1 cifra entrada : "+separa);
            separa1=separa[0];
            alert("El valor 2 sin decimales: "+separa1);
            separa2=separa1.replace('.','');
            alert("El valor Extraido: "+separa2);/*esta aqui 9,999*/
            /*------------------------------------------------------------------*/
            caract1= numero.indexOf(','); extrae=numero.substring(caract1);
            separapto2=extrae.replace(',','.');
            //alert("E: "+separapto2);
            puntos=[separa2, separapto2];
            arreglo=puntos.join("");resultado=arreglo;
            alert("El salida final para calcular: "+resultado);
return  resultado;     
        }
 /*=================funcion CONVIERTE A FORMATO american-latin ===========================*/
        function fconve_america(numx)
	   {
	        var puntos=new Array();
            var separa_ob=new Array();
             numero=numx;          
            valor_ob= numero.split(',');
           // alert("El valor 21: "+valor_ob);
            separa_ob=valor_ob[0];
            //alert("El valor 22: "+separa_ob);/* hasta aqui bien*/
            separa_ob2=separa_ob.replace(',','.');
           // alert("El valor Extraido23: "+ separa_ob2);
            /*------------------------------------------------------------------*/
            caract1= numero.indexOf(','); extrae=numero.substring(caract1);
            separapto2=extrae.replace(',','.');
            puntos=[separa_ob2, separapto2];
            arreglo=puntos.join("");
    return  arreglo;     
        }
        
      /*=================FIN funcion CONVIERTE A FORMATO american-latin ===========================*/   
	function fcalc_inv()
	   {
	       	var entradavlor91act=(document.getElementById("91oct_act").value);
                arreglo=fconve_latin(entradavlor91act);
                vlor91act=Number(arreglo);
                alert("lo que retorna: "+ vlor91act);
                
            if ((vlor91act == 0) || (isNaN(vlor91act)) )
            {
               alert("Debe Ingresar Numeros en el formato 99.999,99  "+vlor91act);
               document.getElementById("91oct_act").focus(); 
            }
            else if (vlor91act > 0){
           /*===========================================*/
                    var entradavlor91ant=(document.getElementById("91oct_ant").value);
                    arreglo2=fconve_latin(entradavlor91ant);
           /*===========================================*/
                    vlor91ant=parseFloat(arreglo2).toFixed(2);
                    if ((vlor91ant == 0) || (isNaN(vlor91ant)) )
                    {
                       alert("Debe Ingresar Numeros en el formato 99.999,99  ");
                       document.getElementById("91oct_ant").focus(); 
                    }
                    else if (vlor91ant > 0){
            /*===========================================*/
            arreglo3=fconve_latin(entradavlor91ant);
            var vlor95act=(document.getElementById("95oct_act").value);
            var vlor95ant=(document.getElementById("95oct_ant").value);
            /* Entrada de los valores de los octanos que vienen de la consulta DB*/
            var vlor_91=(document.getElementById("valor91").value);
            var vlor_95=(document.getElementById("valor95").value);           
            /* CALCULOS*/
            resultdo91=parseFloat(vlor91act-vlor91ant).toFixed(2);
            resultdo95=parseFloat(vlor95act-vlor95ant).toFixed(2);
            /* Totaliza los octanos ingresados y sus indice de costos correspondientes*/
            ttal_vta91=resultdo91*vlor_91;
            ttal_vta95=resultdo95*vlor_95;
            total_vtas_oct=ttal_vta91 + ttal_vta95;
             /* REtorna los valores al formulario*/
             
           	document.getElementById("litros_91act").value = resultdo91;
            document.getElementById("litros_95act").value = resultdo95;
            document.getElementById("ventas_91oct").value = parseFloat(ttal_vta91).toFixed(2);
            document.getElementById("ventas_95oct").value = parseFloat(ttal_vta95).toFixed(2);
            document.getElementById("totales_bsf").value = parseFloat(total_vtas_oct).toFixed(2);
                }
            }
	    }
            /*                   */
  	function fcalc_carab()
			{
      	        	 /* tipo B*/
			/* Entrada de los octanos ingresado por  usuario*/
			var vlor91actb=(document.getElementById("91oct_actb").value);
            var vlor91antb=(document.getElementById("91oct_antb").value);
            var vlor95actb=(document.getElementById("95oct_actb").value);
            var vlor95antb=(document.getElementById("95oct_antb").value);
            /* Entrada de los valores de los octanos que vienen de la consulta DB*/
            var vlor_91b=(document.getElementById("valor91b").value);
            var vlor_95b=(document.getElementById("valor95b").value);           
            /* CALCULOS*/
            resultdo91b=parseFloat(vlor91actb-vlor91antb).toFixed(2);
            resultdo95b=parseFloat(vlor95actb-vlor95antb).toFixed(2);
            /* Totaliza los octanos ingresados y sus indice de costos correspondientes*/
            ttal_vta91b=resultdo91b * vlor_91b;
            ttal_vta95b=resultdo95b * vlor_95b;
            total_vtas_octb=ttal_vta91b + ttal_vta95b;
             /* REtorna los valores al formulario*/
           	document.getElementById("litros_91actb").value = resultdo91b;
            document.getElementById("litros_95actb").value = resultdo95b;
            document.getElementById("ventas_91octb").value = parseFloat(ttal_vta91b).toFixed(2);
            document.getElementById("ventas_95octb").value = parseFloat(ttal_vta95b).toFixed(2);
            document.getElementById("totales_bsfb").value = parseFloat(total_vtas_octb).toFixed(2);
			 /* ==========================totales ventas s1a_y_b==================================*/
            	       var tot_octs1a=(document.getElementById("totales_bsf").value);
                       var tot_octs2a=(document.getElementById("totales_bsfb").value);
                        var efectivo=(document.getElementById("efectivo").value);
                        var factura=(document.getElementById("factura").value);
                       /*=================calculos==================*/
                       total_vtas=0;
                       diferen=0;
                       total_vta_efec_fact=0;
                       /*---------------------------------*/
                       total_vtas=(parseFloat(tot_octs1a).toFixed(2) + tot_octs2a);
                       total_vta_efec_fact=efectivo + factura;
                       diferen=parseFloat(total_vta_efec_fact - total_vtas).toFixed(2);
                       /*=================retorna Salida==================*/
                        document.getElementById("por_entregar").value = total_vtas;
                        document.getElementById("total_venta").value = total_vta_efec_fact;
                        document.getElementById("diferencia").value = diferen;
                        
            /* ==========================S2A==================================*/
			}
           
            function fcalc_s2a()
			{
      	        	 /* tipo B*/
			/* Entrada de los octanos ingresado por  usuario*/
			var vlor91actb=(document.getElementById("91oct_act_s2a").value);
            var vlor91antb=(document.getElementById("91oct_ant_s2a").value);
            var vlor95actb=(document.getElementById("95oct_act_s2a").value);
            var vlor95antb=(document.getElementById("95oct_ant_s2a").value);
            /* Entrada de los valores de los octanos que vienen de la consulta DB*/
            var vlor_91b=(document.getElementById("valor91_s2a").value);
            var vlor_95b=(document.getElementById("valor95_s2a").value);           
            /* CALCULOS*/
            resultdo91b=parseFloat(vlor91actb - vlor91antb).toFixed(2);
            resultdo95b=parseFloat(vlor95actb - vlor95antb).toFixed(2);
            /* Totaliza los octanos ingresados y sus indice de costos correspondientes*/
            ttal_vta91b=resultdo91b * vlor_91b;
            ttal_vta95b=resultdo95b * vlor_95b;
            total_vtas_octb=ttal_vta91b + ttal_vta95b;
             /* REtorna los valores al formulario*/
           	document.getElementById("litros_91act_s2a").value = resultdo91b;
            document.getElementById("litros_95act_s2a").value = resultdo95b;
            document.getElementById("ventas_91oct_s2a").value = parseFloat(ttal_vta91b).toFixed(2);
            document.getElementById("ventas_95oct_s2a").value = parseFloat(ttal_vta95b).toFixed(2);
            document.getElementById("totales_bsf_s2a").value = parseFloat(total_vtas_octb).toFixed(2);
	       }
            function fcalc_s2b()
			{
      	        	 /* tipo B*/
			/* Entrada de los octanos ingresado por  usuario*/
			var vlor91actb=(document.getElementById("91oct_act_s2b").value);
            var vlor91antb=(document.getElementById("91oct_ant_s2b").value);
            var vlor95actb=(document.getElementById("95oct_act_s2b").value);
            var vlor95antb=(document.getElementById("95oct_ant_s2b").value);
            /* Entrada de los valores de los octanos que vienen de la consulta DB*/
            var vlor_91b=(document.getElementById("valor91_s2b").value);
            var vlor_95b=(document.getElementById("valor95_s2b").value);           
            /* CALCULOS*/
            resultdo91b=parseFloat(vlor91actb - vlor91antb).toFixed(2);
            resultdo95b=parseFloat(vlor95actb - vlor95antb).toFixed(2);
            /* Totaliza los octanos ingresados y sus indice de costos correspondientes*/
            ttal_vta91b=resultdo91b * vlor_91b;
            ttal_vta95b=resultdo95b * vlor_95b;
            total_vtas_octb=ttal_vta91b + ttal_vta95b;
             /* REtorna los valores al formulario*/
           	document.getElementById("litros_91act_s2b").value = resultdo91b;
            document.getElementById("litros_95act_s2b").value = resultdo95b;
            document.getElementById("ventas_91oct_s2b").value = parseFloat(ttal_vta91b).toFixed(2);
            document.getElementById("ventas_95oct_s2b").value = parseFloat(ttal_vta95b).toFixed(2);
            document.getElementById("totales_bsf_s2b").value = parseFloat(total_vtas_octb).toFixed(2);
			
			}
          
            /* ==========================S3==================================*/
             function fcalc_s3a()
			{
      	        	 /* tipo B*/
			/* Entrada de los octanos ingresado por  usuario*/
			var vlor91actb=(document.getElementById("91oct_act_s3a").value);
            var vlor91antb=(document.getElementById("91oct_ant_s3a").value);
            var vlor95actb=(document.getElementById("95oct_act_s3a").value);
            var vlor95antb=(document.getElementById("95oct_ant_s3a").value);
            /* Entrada de los valores de los octanos que vienen de la consulta DB*/
            var vlor_91b=(document.getElementById("valor91_s3a").value);
            var vlor_95b=(document.getElementById("valor95_s3a").value);           
            /* CALCULOS*/
            resultdo91b=parseFloat(vlor91actb - vlor91antb).toFixed(2);
            resultdo95b=parseFloat(vlor95actb - vlor95antb).toFixed(2);
            /* Totaliza los octanos ingresados y sus indice de costos correspondientes*/
            ttal_vta91b=resultdo91b * vlor_91b;
            ttal_vta95b=resultdo95b * vlor_95b;
            total_vtas_octb=ttal_vta91b + ttal_vta95b;
             /* REtorna los valores al formulario*/
           	document.getElementById("litros_91act_s3a").value = resultdo91b;
            document.getElementById("litros_95act_s3a").value = resultdo95b;
            document.getElementById("ventas_91oct_s3a").value = parseFloat(ttal_vta91b).toFixed(2);
            document.getElementById("ventas_95oct_s3a").value = parseFloat(ttal_vta95b).toFixed(2);
            document.getElementById("totales_bsf_s3a").value = parseFloat(total_vtas_octb).toFixed(2);
		
			}
            function fcalc_s3b()
			{
      	        	 /* tipo B*/
			/* Entrada de los octanos ingresado por  usuario*/
			var vlor91actb=(document.getElementById("91oct_act_s3b").value);
            var vlor91antb=(document.getElementById("91oct_ant_s3b").value);
            var vlor95actb=(document.getElementById("95oct_act_s3b").value);
            var vlor95antb=(document.getElementById("95oct_ant_s3b").value);
            /* Entrada de los valores de los octanos que vienen de la consulta DB*/
            var vlor_91b=(document.getElementById("valor91_s3b").value);
            var vlor_95b=(document.getElementById("valor95_s3b").value);           
            /* CALCULOS*/
            resultdo91b=parseFloat(vlor91actb - vlor91antb).toFixed(2);
            resultdo95b=parseFloat(vlor95actb - vlor95antb).toFixed(2);
            /* Totaliza los octanos ingresados y sus indice de costos correspondientes*/
            ttal_vta91b=resultdo91b * vlor_91b;
            ttal_vta95b=resultdo95b * vlor_95b;
            total_vtas_octb=ttal_vta91b + ttal_vta95b;
             /* REtorna los valores al formulario*/
           	document.getElementById("litros_91act_s3b").value = resultdo91b;
            document.getElementById("litros_95act_s3b").value = resultdo95b;
            document.getElementById("ventas_91oct_s3b").value = parseFloat(ttal_vta91b).toFixed(2);
            document.getElementById("ventas_95oct_s3b").value = parseFloat(ttal_vta95b).toFixed(2);
            document.getElementById("totales_bsf_s3b").value = parseFloat(total_vtas_octb).toFixed(2);
			
			}
            /* ==========================S4==================================*/
              function fcalc_s4a()
			{
      	        	 /* tipo B*/
			/* Entrada de los octanos ingresado por  usuario*/
			var vlor91actb=(document.getElementById("91oct_act_s4a").value);
            var vlor91antb=(document.getElementById("91oct_ant_s4a").value);
            var vlor95actb=(document.getElementById("95oct_act_s4a").value);
            var vlor95antb=(document.getElementById("95oct_ant_s4a").value);
            /* Entrada de los valores de los octanos que vienen de la consulta DB*/
            var vlor_91b=(document.getElementById("valor91_s4a").value);
            var vlor_95b=(document.getElementById("valor95_s4a").value);           
            /* CALCULOS*/
            resultdo91b=parseFloat(vlor91actb-vlor91antb).toFixed(2);
            resultdo95b=parseFloat(vlor95actb-vlor95antb).toFixed(2);
            /* Totaliza los octanos ingresados y sus indice de costos correspondientes*/
            ttal_vta91b=resultdo91b * vlor_91b;
            ttal_vta95b=resultdo95b * vlor_95b;
            total_vtas_octb=ttal_vta91b + ttal_vta95b;
             /* REtorna los valores al formulario*/
           	document.getElementById("litros_91act_s4a").value = resultdo91b;
            document.getElementById("litros_95act_s4a").value = resultdo95b;
            document.getElementById("ventas_91oct_s4a").value = parseFloat(ttal_vta91b).toFixed(2);
            document.getElementById("ventas_95oct_s4a").value = parseFloat(ttal_vta95b).toFixed(2);
            document.getElementById("totales_bsf_s4a").value = parseFloat(total_vtas_octb).toFixed(2);
			
			}
            function fcalc_s4b()
			{
      	        	 /* tipo B*/
			/* Entrada de los octanos ingresado por  usuario*/
			var vlor91actb=(document.getElementById("91oct_act_s4b").value);
            var vlor91antb=(document.getElementById("91oct_ant_s4b").value);
            var vlor95actb=(document.getElementById("95oct_act_s4b").value);
            var vlor95antb=(document.getElementById("95oct_ant_s4b").value);
            /* Entrada de los valores de los octanos que vienen de la consulta DB*/
            var vlor_91b=(document.getElementById("valor91_s4b").value);
            var vlor_95b=(document.getElementById("valor95_s4b").value);           
            /* CALCULOS*/
            resultdo91b=parseFloat(vlor91actb-vlor91antb).toFixed(2);
            resultdo95b=parseFloat(vlor95actb-vlor95antb).toFixed(2);
            /* Totaliza los octanos ingresados y sus indice de costos correspondientes*/
            ttal_vta91b=resultdo91b*vlor_91b;
            ttal_vta95b=resultdo95b*vlor_95b;
            total_vtas_octb=ttal_vta91b + ttal_vta95b;
             /* REtorna los valores al formulario*/
           	document.getElementById("litros_91act_s4b").value = resultdo91b;
            document.getElementById("litros_95act_s4b").value = resultdo95b;
            document.getElementById("ventas_91oct_s4b").value = parseFloat(ttal_vta91b).toFixed(2);
            document.getElementById("ventas_95oct_s4b").value = parseFloat(ttal_vta95b).toFixed(2);
            document.getElementById("totales_bsf_s4b").value = parseFloat(total_vtas_octb).toFixed(2);
			
            }