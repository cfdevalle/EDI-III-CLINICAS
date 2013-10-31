function enviar(){
	combo=document.getElementById("comboUsuario");
	if (combo.options[combo.selectedIndex].text !="---"){
		location.href="abmTurno.php?usuario="+combo.options[combo.selectedIndex].value+"&nombre="+combo.options[combo.selectedIndex].text;
	}else{
		document.getElementById("div_screen").innerHTML="";
	}
}	
function abrirCarga(hora){
	document.getElementById("txt_fecha").innerHTML=hora.id;
	document.getElementById("backContainer").style.zIndex="3";
}

function backAtras(){
	console.log("back atras");
	document.getElementById("backContainer").style.zIndex="1";
}
function cambiarInput(opcion){
	input=document.getElementById("txt_paciente");
	combo=document.getElementById("comboPacientes");
	input.value=combo.options[combo.selectedIndex].text;
	input.name=combo.options[combo.selectedIndex].value;
}
function altaTurno(){
	respuesta="";
	//relocate('/altaturno/altaturno.php',{'var1':'hola','var2':'Mundo'});
	$.post( "altaturno/altaturno.php",{var1:"contenido1",var2:"contenido"},function(respuesta){
//respuesta es el resultado que devuelve nuestro archivo que recibe las variables
});
	alert(respuesta);
}
