function checkKey(key){
	var unicode
	if (key.charCode)
		{unicode=key.charCode;}
	else
		{unicode=key.keyCode;}
			//alert(unicode); // Para saber que codigo de tecla presiono , descomentar
	if (unicode == 13){
		dato=document.getElementById('txt_ejemplo').value;
		//console.log(dato);
		enviarDato(dato);
	}
}

function enviarDato(dato){
/*	
var param={
		dato:dato
	};
*/
	$.post( "abmEjemplo/abmEjemplo.php",{dato:dato},
	function(respuesta){
		console.log("respeusta: "+respuesta);
	});
}
