function enviar(){
	combo=document.getElementById("usuario");
//	alert(combo.options[combo.selectedIndex].text);
	if (combo.options[combo.selectedIndex].text !="---"){
		location.href="abmTurno.php?usuario="+combo.options[combo.selectedIndex].value+"&nombre="+combo.options[combo.selectedIndex].text;
		//document.forms["formProf"].action="abmTurno.php";
		//document.forms["formProf"].submit();
	}else{
		document.getElementById("div_screen").innerHTML="";
	}
}	
function altaTurno(){
	console.log("alta turno");
	document.getElementById("backContainer").style.zIndex="3";
}

function backAtras(){
	console.log("back atras");
	document.getElementById("backContainer").style.zIndex="1";
}
