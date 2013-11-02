function enviar(){
	combo=document.getElementById("comboUsuario");
	usuario = combo.options[combo.selectedIndex].value;
	nombre = combo.options[combo.selectedIndex].text;
	console.log("nombre"+nombre);
	if (combo.options[combo.selectedIndex].text !="---"){
		
		var url="abmturno/displayturno.php?usuario="+nombre;
		<!--console.log("entro al if"+url);-->
		
		$("#div_altaTurno").load(url);
	}else{
		document.getElementById("div_altaTurno").innerHTML="";
	}
}	
function abrirCarga(hora){
	document.getElementById("txt_fecha").innerHTML=hora.id;
	document.getElementById("backContainer").style.zIndex="3";
}

function backAtras(){
	//console.log("back atras");
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
	id=document.getElementById("txt_pacienteId").value;
	nombre=document.getElementById("txt_pacienteNombre").value;
	apellido=document.getElementById("txt_pacienteApellido").value;
	$.post( "altaturno/altaturno.php",{idPaciente:id,nombrePaciente:nombre,apellidoPaciente:apellido},
	function(respuesta){
		console.log("respeusta: "+respuesta);
	});
	
}
function buscarPaciente(){ 
	id=document.getElementById("txt_pacienteId").value;
	nombre=document.getElementById("txt_pacienteNombre").value;
	apellido=document.getElementById("txt_pacienteApellido").value;
	$.post( "buscarpacientes/buscarpacientes.php",{idPaciente:id,nombrePaciente:nombre,apellidoPaciente:apellido},
	function(respuesta){
		console.log("respeusta: "+respuesta);
	});
}
