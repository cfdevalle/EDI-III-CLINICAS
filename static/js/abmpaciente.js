function checkKey(key){
	var unicode
	if (key.charCode)
		{unicode=key.charCode;}
	else
		{unicode=key.keyCode;}
			//alert(unicode); // Para saber que codigo de tecla presiono , descomentar
	if (unicode == 13){
		nom=document.getElementById('txt_nombre').value;
		ape=document.getElementById('txt_apellido').value;
		console.log(nom,ape);
		enviarDato(nom,ape);
	}
}
function alta(){
		
		nom=document.getElementById('txt_nombre').value;
		ape=document.getElementById('txt_apellido').value;
		dni=    document.getElementById('txt_dni').value;
		dom=    document.getElementById('txt_domicilio').value;
		tele=	document.getElementById('txt_telefono').value;
		
		div_error= document.getElementById('error');
		
		mensaje_error = "<p style='color:red'>Debe Completar Todos los Campos</p>";
		mensaje_error2 = "<p style='color:red'>*</p>";
		
		if (document.getElementById('txt_nombre').value == '' || document.getElementById('txt_apellido').value == '' || document.getElementById("txt_dni").value == '' || document.getElementById("txt_domicilio").value == '' || document.getElementById("txt_telefono").value == ''){
			div_error.innerHTML = mensaje_error;
			if ( nom =="" ){document.getElementById('errorN').innerHTML = mensaje_error2;}else{document.getElementById('errorN').innerHTML = '';}
			if (ape == ""){document.getElementById('errorA').innerHTML = mensaje_error2;}else{document.getElementById('errorA').innerHTML = '';}
			if (dni == ""){document.getElementById('errorD').innerHTML = mensaje_error2;}else{document.getElementById('errorD').innerHTML = '';}
			if (dom == ""){document.getElementById('errorDom').innerHTML = mensaje_error2;}else{document.getElementById('errorDom').innerHTML = '';}
			if (tele == ""){document.getElementById('errorT').innerHTML = mensaje_error2;}else{document.getElementById('errorT').innerHTML = '';}
		}else{
			
			div_error.innerHTML = '';
			document.getElementById('errorN').innerHTML = '';
			document.getElementById('errorA').innerHTML = '';
			document.getElementById('errorD').innerHTML = '';
			document.getElementById('errorDom').innerHTML = '';
			document.getElementById('errorT').innerHTML = '';
			enviarDato(nom,ape,dni,dom,tele);
			
		
		}
		
}
function enviarDato(nom,ape,dni,dom,tele){
/*	
var param={
		dato:dato
	};
*/
	$.post( "abmpaciente/abmAltas.php",{nombre:nom,apellido:ape,dni:dni,domicilio:dom,telefono:tele},
	function(respuesta){
		//console.log("respeusta: "+respuesta);
		var url ="abmpaciente/displayBuscarpaciente.php";
        $("#contenidopacientes").load(url);
	});
}


/* modificaciones    ------------------------------------------------------------------------------------------------------------------------**/

function modificar(){
		
		nom=document.getElementById('txt_nombre').value;
		ape=document.getElementById('txt_apellido').value;
		dni=    document.getElementById('txt_dni').value;
		dom=    document.getElementById('txt_domicilio').value;
		tele=	document.getElementById('txt_telefono').value;
		
		console.log(nom,ape,dni,dom,tele);
			enviarDatoM(nom,ape,dni,dom,tele);
			
		
		}
		

function enviarDatoM(nom,ape,dni,dom,tele){
/*	
var param={
		dato:dato
	};
*/
	$.post( "abmpaciente/abmModificar.php",{nombre:nom,apellido:ape,dni:dni,domicilio:dom,telefono:tele},
	function(respuesta){
		//console.log("respeusta: "+respuesta);
		//var url ="abmpaciente/displayBuscarpaciente.php";
        //$("#contenidopacientes").load(url);
	});
}




