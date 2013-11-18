<?php
	$response="";
	

	include '../domain/DataBaseConnector.php';
	$db=new DataBaseConnector();
	if (!(empty($_POST['rol']))||!(empty($_POST['descripcion']))){
		$rol=$_POST["rol"];
		$desc=$_POST['descripcion'];
		$otorga=$_POST['combo'];
		
	} 
	$db->conectar();
	$consulta="INSERT INTO rol (rol,descripcion,alta) VALUES (\"".$rol."\", \"".$desc."\",".$otorga.")";
	echo("<p>".$consulta."</p>");
	$result=mysql_query($consulta);
	
	if (false === $result) {
		$response=mysql_error();
	}else{
		$response="Se inserto: ".$rol;
	}
	
	$db->desconectar();
	header("Location: ../wrapperAdm.php");
	echo $response;
?>