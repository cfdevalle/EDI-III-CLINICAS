function checkKeyUsr(key){
	var unicode
	if (key.charCode)
		{unicode=key.charCode;}
	else
		{unicode=key.keyCode;}
			//alert(unicode); // Para saber que codigo de tecla presiono , descomentar
	if (unicode == 13){
		usr=document.getElementById('txt_usuario').value;
		pass=document.getElementById('txt_password').value;
	
		enviarDato(usr,pass);
	}
}
function altaUsuario(){
		
		usr=document.getElementById('txt_usuarioU').value;
		pass=document.getElementById('txt_passwordU').value;
		nom=    document.getElementById('txt_nombreU').value;
		ap=    document.getElementById('txt_apellidoU').value;
		rol=	document.getElementById('txt_rolU').value;
		
		div_error= document.getElementById('error');
		
		mensaje_error = "<p style='color:red'>Debe Completar Todos los Campos</p>";
		mensaje_error2 = "<p style='color:red'>*</p>";
		
		if (document.getElementById('txt_usuarioU').value == '' || document.getElementById('txt_passwordU').value == '' || document.getElementById("txt_nombreU").value == '' || document.getElementById("txt_apellidoU").value == '' || document.getElementById("txt_rolU").value == ''){
			div_error.innerHTML = mensaje_error;
			if (usr =="" ){document.getElementById('errorU').innerHTML = mensaje_error2;}else{document.getElementById('errorU').innerHTML = '';}
			if (pass == ""){document.getElementById('errorP').innerHTML = mensaje_error2;}else{document.getElementById('errorP').innerHTML = '';}
			if (nom == ""){document.getElementById('errorN').innerHTML = mensaje_error2;}else{document.getElementById('errorN').innerHTML = '';}
			if (ap == ""){document.getElementById('errorA').innerHTML = mensaje_error2;}else{document.getElementById('errorA').innerHTML = '';}
			if (rol == ""){document.getElementById('errorR').innerHTML = mensaje_error2;}else{document.getElementById('errorR').innerHTML = '';}
		}else{
			
			div_error.innerHTML = '';
			document.getElementById('errorU').innerHTML = '';
			document.getElementById('errorP').innerHTML = '';
			document.getElementById('errorN').innerHTML = '';
			document.getElementById('errorA').innerHTML = '';
			document.getElementById('errorR').innerHTML = '';
			enviarDatoUsr(usr,pass,nom,ap,rol);
			
		
		}
		
}

function enviarDatoUsr(usr,pass,nom,ap,rol){
/*	
var param={
		dato:dato
	};
*/
	$.post( "abmusuario/abmUsuario.php",{usuario:usr,password:pass,nombre:nom,apellido:ap,rol:rol},
	function(respuesta){
		//console.log("respeusta: "+respuesta);
		var url ="abmusuario/displayBuscarUsuario.php";
        $("#contenidoUsuario").load(url);
	});
}
