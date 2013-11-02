<?PHP 
		//echo "Hola";//.$_POST["var1"]." ".$_POST["var2"];
		
	function test(){
		$response="";
		if (!(empty($_POST['idPaciente']))){
			$response=$response.$_POST["idPaciente"];
		}
		if (!(empty($_POST['nombrePaciente']))){
			$response=$response.$_POST["nombrePaciente"];
		}
		if (!(empty($_POST['apellidoPaciente']))){
			$response=$response.$_POST["apellidoPaciente"];
		}
		
		return "Succes ".$response;
	}
	$alta=test();
	
	echo $alta;
?>
