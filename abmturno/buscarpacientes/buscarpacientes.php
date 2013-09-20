<?PHP 
		//echo "Hola";//.$_POST["var1"]." ".$_POST["var2"];
		
	function buscarPacientes(){
		$response="";
		$consulta="SELECT * FROM paciente";
		if (!(empty($_POST['idPaciente']))){
			$consulta=$consulta." WHERE id_paciente=".$_POST["idPaciente"]."";
		}
		if (!(empty($_POST['nombrePaciente']))){
			if (strlen($consulta)<=22){
				$consulta=$consulta." WHERE nombre like \"".$_POST["nombrePaciente"]."\"";
			}else{
				$consulta=$consulta." AND nombre like \"".$_POST["nombrePaciente"]."\"";
			}
		}
		if (!(empty($_POST['apellidoPaciente']))){
			if (strlen($consulta)<=22){
				$consulta=$consulta." WHERE apellido like \"".$_POST["apellidoPaciente"]."\"";
			}else{
				$consulta=$consulta." AND apellido like \"".$_POST["apellidoPaciente"]."\"";
			}
		}
		
		$consulta=$consulta." ORDER BY apellido ASC";
		
		return "query: ".$consulta;
	}
	
	
	$response=buscarPacientes();
	echo $response;
?>
