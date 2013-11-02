 function irA(cod){
	 			console.log("ESTE ES EL CODDIGO"+cod);
                var urls= new Array(10);
                urls[0]="php/instalaciones.php";
        		urls[1]="php/turnos.php";
                urls[2]="php/portada.php";
                urls[3]="php/consultar.php";
                urls[4]="php/profesionales.php";
	        	urls[5]="abmturno/abmturno.php";
				urls[6]="abmpaciente/buscarPaciente.php";
				
				urls[7]="abmusuario/buscarUsuario.php";
				
       
        	
                $("#div_screen").load(urls[cod]);
				
            
        }


    