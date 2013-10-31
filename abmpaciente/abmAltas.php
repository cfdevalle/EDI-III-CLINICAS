<?php
	$response="";
	$nombre="";
	$apellido="";
	$id=0;
	include '../domain/DataBaseConnector.php';
	$db=new DataBaseConnector();
	if (!(empty($_POST['nombre']))||!(empty($_POST['apellido']))){
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$dni=$_POST['dni'];
		$domicilio=$_POST['domicilio'];
		$telefono=$_POST['telefono'];
	} 
	
	$db->conectar();
	$c='SELECT id_paciente FROM paciente ORDER BY id_paciente DESC LIMIT 1';
	//$db->desconectar();
	$result=mysql_query($c);
	while($row = mysql_fetch_row($result)){
		$id=(int)$row[0];
	}
	$id=$id+1;
	$consulta="INSERT INTO paciente (id_paciente,nombre,apellido,dni,direccion,telefono) VALUES (".$id.", \"".$nombre."\", \"".$apellido."\",'".$dni."',\"".$domicilio."\",\"".$telefono."\")";
	echo("<p>".$consulta."</p>");
	$result=mysql_query($consulta);
	//$db->desconectar();
	if (false === $result) {
		$response=mysql_error();
	}else{
		$response="Se inserto: ".$id;
	}
	
	
	//echo $response;
?>