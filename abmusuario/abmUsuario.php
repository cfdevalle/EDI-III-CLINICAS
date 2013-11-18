<?php
	$response="";
	
	//$id=0;
	include '../domain/DataBaseConnector.php';
	$db=new DataBaseConnector();
	if (!(empty($_POST['usuario']))||!(empty($_POST['pass']))){
		$usr=$_POST['usuario'];
		$pass=$_POST['pass'];
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$tele=$_POST['telefono'];
		$mail=$_POST['email'];
		$direccion=$_POST['direc'];
		
		echo($usr);	
	} 
	
	$db->conectar();
	/*$c='SELECT id_usuario FROM usuario ORDER BY id_usuario DESC LIMIT 1';

	$result=mysql_query($c);
	while($row = mysql_fetch_row($result)){
		$id=(int)$row[0];
	}
	$id=$id+1;
	*/
	$consulta="INSERT INTO usuario (usuario,password,nombre,apellido,telefono,email,direccion) VALUES ('".$usr."', \"".$pass."\", \"".$nombre."\",'".$apellido."',\"".$tele."\",\"".$mail."\",'".$direccion."')";
	echo("<p>".$consulta."</p>");
	$result=mysql_query($consulta);
	
	if (false === $result) {
		$response=mysql_error();
	}else{
		$response="Se inserto: ".$usr;
	}
	header("location: ../wrapperAdm.php");
	$db->desconectar();
	//echo $response;*/
?>