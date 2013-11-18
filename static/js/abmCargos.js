function altaCargo(){
		//console.log("entrooooooo");
		rol=document.getElementById('txt_rol').value;
		desc=document.getElementById('txt_desc').value;
		combo=document.getElementById('combo');
		var otorga=combo.options[combo.selectedIndex].value;
		//console.log(rol+" "+desc+" "+otorga+" ");
		div_error= document.getElementById('error');
		
		mensaje_error = "<p style='color:red'>Debe Completar Todos los Campos</p>";
		mensaje_error2 = "<p style='color:red'>*</p>";
		
		if (document.getElementById('txt_rol').value == '' || document.getElementById('txt_desc').value == ''){
			div_error.innerHTML = mensaje_error;
			if (rol =="" ){document.getElementById('errorU').innerHTML = mensaje_error2;}else{document.getElementById('errorU').innerHTML = '';}
			if (desc == ""){document.getElementById('errorP').innerHTML = mensaje_error2;}else{document.getElementById('errorP').innerHTML = '';}
		}else{
			
			div_error.innerHTML = '';
			document.getElementById('errorU').innerHTML = '';
			document.getElementById('errorP').innerHTML = '';
			//console.log(rol+" "+desc+" "+otorga+" ");
			enviarDatoCargo(rol,desc,otorga);
			
		
		}
		
}

function enviarDatoCargo(r,d,o){
/*	
var param={
		dato:dato
	};
*/	console.log(r+" "+d+" "+o+" ");
	$.post("abmusuario/abmCargo.php",{rol:r,descripcion:r},
	function(respuesta){
		//console.log("respeusta: "+respuesta);
	var url ="abmusuario/abmCargo.php";
     $("#div_screen").load(url);
	});
}