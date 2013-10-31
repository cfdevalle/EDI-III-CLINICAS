 function irA(cod){
                var urls= new Array(10);
                urls[0]="php/instalaciones.php";
        	urls[1]="php/turnos.php";
                urls[2]="php/portada.php";
                urls[3]="php/consultar.php";
                urls[4]="php/profesionales.php";
	        urls[5]="abmturno/abmturno.php";
				
       
        	
                $("#div_screen").load(urls[cod]);
				
            
        }


    