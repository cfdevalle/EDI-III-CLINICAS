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
		tele=	document.getElementById('txt_teleU').value;
		email=	document.getElementById('txt_emailU').value;
		direc=	document.getElementById('txt_direcU').value;
		
		div_error= document.getElementById('error');
		
		mensaje_error = "<p style='color:red'>Campos Obligatorios</p>";
		mensaje_error2 = "<p style='color:red'>*</p>";
		
		if (document.getElementById('txt_usuarioU').value == '' || document.getElementById('txt_passwordU').value == '' || document.getElementById("txt_nombreU").value == '' || document.getElementById("txt_apellidoU").value == '' || document.getElementById("txt_teleU").value == '' || document.getElementById("txt_emailU").value == '' || document.getElementById("txt_direcU").value == ''){
			div_error.innerHTML = mensaje_error;
			if (usr =="" ){document.getElementById('errorU').innerHTML = mensaje_error2;}else{document.getElementById('errorU').innerHTML = '';}
			if (pass == ""){document.getElementById('errorP').innerHTML = mensaje_error2;}else{document.getElementById('errorP').innerHTML = '';}
			if (nom == ""){document.getElementById('errorN').innerHTML = mensaje_error2;}else{document.getElementById('errorN').innerHTML = '';}
			if (ap == ""){document.getElementById('errorA').innerHTML = mensaje_error2;}else{document.getElementById('errorA').innerHTML = '';}
			if (tele == ""){document.getElementById('errorR').innerHTML = mensaje_error2;}else{document.getElementById('errorR').innerHTML = '';}
			if (email == ""){document.getElementById('errorE').innerHTML = mensaje_error2;}else{document.getElementById('errorE').innerHTML = '';}
			if (direc== ""){document.getElementById('errorD').innerHTML = mensaje_error2;}else{document.getElementById('errorD').innerHTML = '';}
		}else{
			
			div_error.innerHTML = '';
			document.getElementById('errorU').innerHTML = '';
			document.getElementById('errorP').innerHTML = '';
			document.getElementById('errorN').innerHTML = '';
			document.getElementById('errorA').innerHTML = '';
			document.getElementById('errorR').innerHTML = '';
			document.getElementById('errorE').innerHTML = '';
			document.getElementById('errorD').innerHTML = '';
			form=document.getElementById('formulario');
			form.submit();
			//enviarDatoUsr(usr,pass,nom,ap,rol);
			
		
		}
		
}

function enviarDatoUsr(usr,pass,nom,ap,rol){
/*	
var param={
		dato:dato
	};
*/	console.log(usr,pass,nom,ap,rol);
	$.post("abmusuario/abmUsuario.php",{usuario:usr,password:pass,nombre:nom,apellido:ap,rol:rol},
	function(respuesta){
		//console.log("respeusta: "+respuesta);
		var url ="abmusuario/abmUsuario.php";
        $("#contenidoUsuario").load(url);
	});
}
