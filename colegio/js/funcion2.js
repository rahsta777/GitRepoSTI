// JavaScript Document
/*=================funcion CONVIERTE A FORMATO LATIN-american==========================*/
function fconve_latin(numx)
	   {
	        var aux1=0;
            var numero=0;
            var separa=new Array();
             var resultado=0;
            numero=numx;
            separa= numero.split(',');
            cant_array=separa.length;
            aux1=separa[0];
            for(i=0;i<cant_array;i++)
            {
           //alert("El valor 1 cifra entrada :  "+separa+"cantida arreglos:   "+cant_array);
            separa1=aux1;
            //alert("El valor 2 sin decimales: "+separa1);
            separa2=separa1.replace('.','');
            //alert("El valor Extraido: "+separa2+"valor de I"+i);/*esta aqui 9,999*/
            aux1=separa2;
            }
            /*------------------------------------------------------------------*/
            caract1= numero.indexOf(','); 
            extrae=numero.substring(caract1);
            separapto2=extrae.replace(',','.');
            //alert("E: "+separapto2);
            puntos=[separa2, separapto2];
            arreglo=puntos.join("");resultado=arreglo;
            //alert("El salida final para calcular: "+resultado);
        return  resultado;     
        }
 /*=================funcion CONVIERTE A FORMATO american-latin ===========================*/
        function fconve_america(num)
	   {
	        var aux1=0;
            var numero=0;
            var separa=new Array();
            resultado=0;
	        numero=num;
            separa= numero.split('.');
            cant_array=separa.length;
            aux1=separa[0];
            for(i=0;i<cant_array;i++)
            {
           // alert("El valor 1 cifra entrada : "+separa+"cantida arreglos:  "+cant_array);
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
            resultado=separapto2;
            //alert("El salida final para calcular: "+resultado);
        return  resultado;     
        }
         /*=================funcion Valida ===========================*/  
        

	       /*if ((vlor91ant.length > 0) || (isNaN(vlor91ant)) )
                    {
                       alert("Debe Ingresar Numeros en el formato 99.999,99  ");
                       document.getElementById("91oct_ant").focus(); 
                    }
                    //else if (vlor91ant > 0){
	       
	   }
        
      /*=================FIN funcion CONVIERTE A FORMATO american-latin ===========================*/   
	function fcalc_inv()
	   {
	               /*===========================================*/
	               	var entradavlor91act=(document.getElementById("91oct_act").value);
                    //res=fvalida(entradavlor91act);
                    arreglo=fconve_latin(entradavlor91act);
                    vlor91act=Number(arreglo);
                    /*===========================================*/
                    var entradavlor91ant=(document.getElementById("91oct_ant").value);
                    arreglo2=fconve_latin(entradavlor91ant);
                    vlor91ant=parseFloat(arreglo2).toFixed(2);
                    /*===========================================*/
                    var entradavlor95act=(document.getElementById("95oct_act").value);
                    arreglo3=fconve_latin(entradavlor95act);
                    vlor95act=Number(arreglo3);
                    /*===========================================*/
                    var entradavlor95ant=(document.getElementById("95oct_ant").value);
                    arreglo4=fconve_latin(entradavlor95ant);
                    vlor95ant=Number(arreglo4);
                    
                    /*===========================================*/
                    /*===========================================*/
                    /*===========================================*/
                    /*===========================================*/
                    
            /*===========================================*/
            
            //var vlor95act=(document.getElementById("95oct_act").value);
            //var vlor95ant=(document.getElementById("95oct_ant").value);
            /* Entrada de los valores de los octanos que vienen de la consulta DB*/
            var vlor_91=(document.getElementById("valor91").value);
            var vlor_95=(document.getElementById("valor95").value);           
            /* CALCULOS*/
            resu91=parseFloat(vlor91act-vlor91ant).toFixed(2);
            resu95=parseFloat(vlor95act-vlor95ant).toFixed(2);
            resultdo91=fconve_america(resu91);
            resultdo95 =fconve_america(resu95);
            /* Totaliza los octanos ingresados y sus indice de costos correspondientes*/
            ttal_vta91=resu91*vlor_91;
            ttal_vta95=resu95*vlor_95;
            total_vtas_oct=ttal_vta91 + ttal_vta95;
             /* REtorna los valores al formulario*/
             
           	document.getElementById("litros_91act").value = resultdo91;
            document.getElementById("litros_95act").value = resultdo95;
            document.getElementById("ventas_91oct").value = fconve_america(parseFloat(ttal_vta91).toFixed(2));
            document.getElementById("ventas_95oct").value = fconve_america(parseFloat(ttal_vta95).toFixed(2));
            document.getElementById("totales_bsf").value = parseFloat(total_vtas_oct).toFixed(2);
          }
            /*                   */
  	function fcalc_carab()
			{
      	        	 /* tipo B*/
			/* Entrada de los octanos ingresado por  usuario
			
            var entradavlor91antb=(document.getElementById("91oct_antb").value);
            var entradavlor95actb=(document.getElementById("95oct_actb").value);
            var entradavlor95antb=(document.getElementById("95oct_antb").value);
            
             /*===========================================*/
                    var entradavlor91actb=(document.getElementById("91oct_actb").value);
	               	  //res=fvalida(entradavlor91act);
                    arreglo=fconve_latin(entradavlor91actb);
                    vlor91actb=Number(arreglo);
                    /*===========================================*/
                    var entradavlor91antb=(document.getElementById("91oct_antb").value);
                    arreglo2=fconve_latin(entradavlor91antb);
                    vlor91antb=parseFloat(arreglo2).toFixed(2);
                    /*===========================================*/
                    var entradavlor95actb=(document.getElementById("95oct_actb").value);
                    arreglo3=fconve_latin(entradavlor95actb);
                    vlor95actb=Number(arreglo3);
                    /*===========================================*/
                    var entradavlor95antb=(document.getElementById("95oct_antb").value);
                    arreglo4=fconve_latin(entradavlor95antb);
                    vlor95antb=Number(arreglo4);
                    
            /*===========================================*/
            
            
            /* Entrada de los valores de los octanos que vienen de la consulta DB*/
            var vlor_91bentrada=(document.getElementById("valor91b").value);
            vlor_91b=vlor_91bentrada;
            var vlor_95bentrada=(document.getElementById("valor95b").value); 
            vlor_95b= vlor_95bentrada;         
            /* CALCULOS*/
            resu91b=parseFloat(vlor91actb-vlor91antb).toFixed(2);
            resu95b=parseFloat(vlor95actb-vlor95antb).toFixed(2);
            resultdo91b=resu91b;
            resultdo95b=resu95b;
            
            resultdo91=fconve_america(resu91);
            resultdo95 =fconve_america(resu95);
            /* Totaliza los octanos ingresados y sus indice de costos correspondientes*/
            ttal_vta91b=resultdo91b * vlor_91b;
            ttal_vta95b=resultdo95b * vlor_95b;
            total_vtas_octb=ttal_vta91b + ttal_vta95b;
             /* REtorna los valores al formulario*/
           	document.getElementById("litros_91actb").value = fconve_america(resultdo91b);
            document.getElementById("litros_95actb").value = fconve_america(resultdo95b);
            document.getElementById("ventas_91octb").value = fconve_america(parseFloat(ttal_vta91b).toFixed(2));
            document.getElementById("ventas_95octb").value = fconve_america(parseFloat(ttal_vta95b).toFixed(2));
            document.getElementById("totales_bsfb").value = parseFloat(total_vtas_octb).toFixed(2);
			 /* ==========================totales ventas ==================================*/
            	       var tot_octs1a=(document.getElementById("totales_bsf").value);
                       var tot_octs2a=(document.getElementById("totales_bsfb").value);
                        var efectivo1=(document.getElementById("efectivo").value);
                        var factura1=(document.getElementById("factura").value);
                       /*=================calculos==================*/
                       efectivo=fconve_latin(efectivo1);
                        factura=fconve_latin(factura1);
                       var total_vtas=0;
                       var diferen=0;
                       var total_vta_efec_fact=0;
                       
                       /*---------------------------------*/
                       total_vtas=Number(tot_octs1a) + Number(tot_octs2a);
                       total_vta_efec_fact=Number(efectivo) + Number(factura);
                       diferen=total_vta_efec_fact - total_vtas;
                       /*=================retorna Salida==================*/
                        document.getElementById("por_entregar").value = parseFloat(total_vtas).toFixed(2);
                        document.getElementById("total_venta").value = total_vta_efec_fact;
                        document.getElementById("diferencia").value = parseFloat(diferen).toFixed(2);
                        
            /* ============================================================*/
			}
           
            function fcalc_s2a()
			{
      	        	 /* tipo B*/
			/* Entrada de los octanos ingresado por  usuario
			var vlor91actb=(document.getElementById("91oct_act_s2a").value);
            var vlor91antb=(document.getElementById("91oct_ant_s2a").value);
            var vlor95actb=(document.getElementById("95oct_act_s2a").value);
            var vlor95antb=(document.getElementById("95oct_ant_s2a").value);
             /*===========================================*/
                    var entradavlor91act_s2a=(document.getElementById("91oct_act_s2a").value);
	               	  //res=fvalida(entradavlor91act);
                    arreglo=fconve_latin(entradavlor91act_s2a);
                    vlor91actb=Number(arreglo);
                    /*===========================================*/
                    var entradavlor91ant_s2a=(document.getElementById("91oct_ant_s2a").value);
                    arreglo2=fconve_latin(entradavlor91ant_s2a);
                    vlor91antb=parseFloat(arreglo2).toFixed(2);
                    /*===========================================*/
                    var entradavlor95act_s2a=(document.getElementById("95oct_act_s2a").value);
                    arreglo3=fconve_latin(entradavlor95act_s2a);
                    vlor95actb=Number(arreglo3);
                    /*===========================================*/
                    var entradavlor95ant_s2a=(document.getElementById("95oct_ant_s2a").value);
                    arreglo4=fconve_latin(entradavlor95ant_s2a);
                    vlor95antb=Number(arreglo4);
                    
            /*===========================================*/
            
            
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
                    /*===========================================*/
                    var entradavlor91act_s2b=(document.getElementById("91oct_act_s2b").value);
	               	  //res=fvalida(entradavlor91act);
                    arreglo=fconve_latin(entradavlor91act_s2b);
                    vlor91actb=Number(arreglo);
                    /*===========================================*/
                    var entradavlor91ant_s2b=(document.getElementById("91oct_ant_s2b").value);
                    arreglo2=fconve_latin(entradavlor91ant_s2b);
                    vlor91antb=parseFloat(arreglo2).toFixed(2);
                    /*===========================================*/
                    var entradavlor95act_s2b=(document.getElementById("95oct_act_s2b").value);
                    arreglo3=fconve_latin(entradavlor95act_s2b);
                    vlor95actb=Number(arreglo3);
                    /*===========================================*/
                    var entradavlor95ant_s2b=(document.getElementById("95oct_ant_s2b").value);
                    arreglo4=fconve_latin(entradavlor95ant_s2b);
                    vlor95antb=Number(arreglo4);
                    
            /*===========================================*/
            
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
            /* ==========================totales ventas ==================================*/
            	       var tot_octs1a=(document.getElementById("totales_bsf_s2a").value);
                       var tot_octs2a=(document.getElementById("totales_bsf_s2b").value);
                        var efectivo1=(document.getElementById("efectivos2b").value);
                        var factura1=(document.getElementById("facturas2b").value);
                       /*=================calculos==================*/
                        efectivo=fconve_latin(efectivo1);
                        factura=fconve_latin(factura1);
                       var total_vtas=0;
                       var diferen=0;
                       var total_vta_efec_fact=0;
                       /*---------------------------------*/
                       total_vtas=Number(tot_octs1a) + Number(tot_octs2a);
                       total_vta_efec_fact=Number(efectivo) + Number(factura);
                       diferen=total_vta_efec_fact - total_vtas;
                       /*=================retorna Salida==================*/
                        document.getElementById("por_entregars2b").value = parseFloat(total_vtas).toFixed(2);
                        document.getElementById("total_ventas2b").value = total_vta_efec_fact;
                        document.getElementById("diferencias2b").value = parseFloat(diferen).toFixed(2);
                        
            /* ============================================================*/
			
			}
          
            /* ==========================S3==================================*/
             function fcalc_s3a()
			{
      	        	 /* tipo B*/
			/* Entrada de los octanos ingresado por  usuario
			var vlor91actb=(document.getElementById("91oct_act_s3a").value);
            var vlor91antb=(document.getElementById("91oct_ant_s3a").value);
            var vlor95actb=(document.getElementById("95oct_act_s3a").value);
            var vlor95antb=(document.getElementById("95oct_ant_s3a").value);
            /*===========================================*/
                    var entradavlor91act_s3a=(document.getElementById("91oct_act_s3a").value);
	               	  //res=fvalida(entradavlor91act);
                    arreglo=fconve_latin(entradavlor91act_s3a);
                    vlor91actb=Number(arreglo);
                    /*===========================================*/
                    var entradavlor91ant_s3a=(document.getElementById("91oct_ant_s3a").value);
                    arreglo2=fconve_latin(entradavlor91ant_s3a);
                    vlor91antb=parseFloat(arreglo2).toFixed(2);
                    /*===========================================*/
                    var entradavlor95act_s3a=(document.getElementById("95oct_act_s3a").value);
                    arreglo3=fconve_latin(entradavlor95act_s3a);
                    vlor95actb=Number(arreglo3);
                    /*===========================================*/
                    var entradavlor95ant_s3a=(document.getElementById("95oct_ant_s3a").value);
                    arreglo4=fconve_latin(entradavlor95ant_s3a);
                    vlor95antb=Number(arreglo4);
                    
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
			/* Entrada de los octanos ingresado por  usuario
			var vlor91actb=(document.getElementById("91oct_act_s3b").value);
            var vlor91antb=(document.getElementById("91oct_ant_s3b").value);
            var vlor95actb=(document.getElementById("95oct_act_s3b").value);
            var vlor95antb=(document.getElementById("95oct_ant_s3b").value);
             /*===========================================*/
                    var entradavlor91act_s3b=(document.getElementById("91oct_act_s3b").value);
	               	  //res=fvalida(entradavlor91act);
                    arreglo=fconve_latin(entradavlor91act_s3b);
                    vlor91actb=Number(arreglo);
                    /*===========================================*/
                    var entradavlor91ant_s3b=(document.getElementById("91oct_ant_s3b").value);
                    arreglo2=fconve_latin(entradavlor91ant_s3b);
                    vlor91antb=parseFloat(arreglo2).toFixed(2);
                    /*===========================================*/
                    var entradavlor95act_s3b=(document.getElementById("95oct_act_s3b").value);
                    arreglo3=fconve_latin(entradavlor95act_s3b);
                    vlor95actb=Number(arreglo3);
                    /*===========================================*/
                    var entradavlor95ant_s3b=(document.getElementById("95oct_ant_s3b").value);
                    arreglo4=fconve_latin(entradavlor95ant_s3b);
                    vlor95antb=Number(arreglo4);
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
            /* ==========================totales ventas ==================================*/
            	       var tot_octs1a=(document.getElementById("totales_bsf_s3a").value);
                       var tot_octs2a=(document.getElementById("totales_bsf_s3b").value);
                        var efectivo1=(document.getElementById("efectivos3b").value);
                        var factura1=(document.getElementById("facturas3b").value);
                       /*=================calculos==================*/
                        efectivo=fconve_latin(efectivo1);
                        factura=fconve_latin(factura1);
                       var total_vtas=0;
                       var diferen=0;
                       var total_vta_efec_fact=0;
                       /*---------------------------------*/
                       total_vtas=Number(tot_octs1a) + Number(tot_octs2a);
                       total_vta_efec_fact= Number(efectivo) +  Number(factura);
                       diferen=total_vta_efec_fact - total_vtas;
                       /*=================retorna Salida==================*/
                        document.getElementById("por_entregars3b").value = parseFloat(total_vtas).toFixed(2);
                        document.getElementById("total_ventas3b").value = total_vta_efec_fact;
                        document.getElementById("diferencias3b").value = parseFloat(diferen).toFixed(2);
                        
            /* ============================================================*/
			
			}
            /* ==========================S4==================================*/
              function fcalc_s4a()
			{
      	        	 /* tipo B*/
			/* Entrada de los octanos ingresado por  usuario
			var vlor91actb=(document.getElementById("91oct_act_s4a").value);
            var vlor91antb=(document.getElementById("91oct_ant_s4a").value);
            var vlor95actb=(document.getElementById("95oct_act_s4a").value);
            var vlor95antb=(document.getElementById("95oct_ant_s4a").value);
            /*===========================================*/
                    var entradavlor91act_s4a=(document.getElementById("91oct_act_s4a").value);
	               	  //res=fvalida(entradavlor91act);
                    arreglo=fconve_latin(entradavlor91act_s4a);
                    vlor91actb=Number(arreglo);
                    /*===========================================*/
                    var entradavlor91ant_s4a=(document.getElementById("91oct_ant_s4a").value);
                    arreglo2=fconve_latin(entradavlor91ant_s4a);
                    vlor91antb=parseFloat(arreglo2).toFixed(2);
                    /*===========================================*/
                    var entradavlor95act_s4a=(document.getElementById("95oct_act_s4a").value);
                    arreglo3=fconve_latin(entradavlor95act_s4a);
                    vlor95actb=Number(arreglo3);
                    /*===========================================*/
                    var entradavlor95ant_s4a=(document.getElementById("95oct_ant_s4a").value);
                    arreglo4=fconve_latin(entradavlor95ant_s4a);
                    vlor95antb=Number(arreglo4);
            
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
			/* Entrada de los octanos ingresado por  usuario
			var vlor91actb=(document.getElementById("91oct_act_s4b").value);
            var vlor91antb=(document.getElementById("91oct_ant_s4b").value);
            var vlor95actb=(document.getElementById("95oct_act_s4b").value);
            var vlor95antb=(document.getElementById("95oct_ant_s4b").value);
            /*===========================================*/
                    var entradavlor91act_s4b=(document.getElementById("91oct_act_s4b").value);
	               	  //res=fvalida(entradavlor91act);
                    arreglo=fconve_latin(entradavlor91act_s4b);
                    vlor91actb=Number(arreglo);
                    /*===========================================*/
                    var entradavlor91ant_s4b=(document.getElementById("91oct_ant_s4b").value);
                    arreglo2=fconve_latin(entradavlor91ant_s4b);
                    vlor91antb=parseFloat(arreglo2).toFixed(2);
                    /*===========================================*/
                    var entradavlor95act_s4b=(document.getElementById("95oct_act_s4b").value);
                    arreglo3=fconve_latin(entradavlor95act_s4b);
                    vlor95actb=Number(arreglo3);
                    /*===========================================*/
                    var entradavlor95ant_s4b=(document.getElementById("95oct_ant_s4b").value);
                    arreglo4=fconve_latin(entradavlor95ant_s4b);
                    vlor95antb=Number(arreglo4);
            
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
             /* ==========================totales ventas ==================================*/
            	       var tot_octs1a=(document.getElementById("totales_bsf_s4a").value);
                       var tot_octs2a=(document.getElementById("totales_bsf_s4b").value);
                        var efectivo1=(document.getElementById("efectivos4b").value);
                        var factura1=(document.getElementById("facturas4b").value);
                       /*=================calculos==================*/
                        efectivo=fconve_latin(efectivo1);
                        factura=fconve_latin(factura1);
                       var total_vtas=0;
                       var diferen=0;
                       var total_vta_efec_fact=0;
                       /*---------------------------------*/
                       total_vtas=Number(tot_octs1a) + Number(tot_octs2a);
                       total_vta_efec_fact= Number(efectivo) +  Number(factura);
                       diferen=total_vta_efec_fact - total_vtas;
                       /*=================retorna Salida==================*/
                        document.getElementById("por_entregars4b").value = parseFloat(total_vtas).toFixed(2);
                        document.getElementById("total_ventas4b").value = total_vta_efec_fact;
                        document.getElementById("diferencias4b").value = parseFloat(diferen).toFixed(2);
                        
            /* ============================================================*/
			
            }