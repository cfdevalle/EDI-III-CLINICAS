<?php
	$response="";
	

	include '../domain/DataBaseConnector.php';
	$db=new DataBaseConnector();
	if (!(empty($_POST['combo']))||!(empty($_POST['comboU']))){
		$cargo=$_POST["combo"];
		$usr=$_POST['comboU'];

	} 
	$db->conectar();
	$consulta="INSERT INTO usuario_rol (rol,usuario) VALUES ('".$cargo."','".$usr."')";
	echo("<p>".$consulta."</p>");
	$result=mysql_query($consulta);
	
	if (false === $result) {
		$response=mysql_error();
	}else{
		$response="Se inserto: ".$cargo;
	}
	
	$db->desconectar();
	header("Location: ../wrapperAdm.php");
	echo $response;
?>