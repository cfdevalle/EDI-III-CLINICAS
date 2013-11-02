<?php
	$response="";
	
	$id=0;
	include '../domain/DataBaseConnector.php';
	$db=new DataBaseConnector();
	if (!(empty($_POST['nombre']))||!(empty($_POST['apellido']))){
		$usr=$_POST['usuario'];
		$pass=$_POST['password'];
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$rol=$_POST['rol'];
	} 
	
	$db->conectar();
	$c='SELECT id_usuario FROM usuario ORDER BY id_usuario DESC LIMIT 1';

	$result=mysql_query($c);
	while($row = mysql_fetch_row($result)){
		$id=(int)$row[0];
	}
	$id=$id+1;
	$consulta="INSERT INTO usuario (id_usuario,usuario,password,nombre,apellido,rol) VALUES (".$id.", \"".$usr."\", \"".$pass."\",'".$nombre."',\"".$apellido."\",\"".$rol."\")";
	echo("<p>".$consulta."</p>");
	$result=mysql_query($consulta);
	
	if (false === $result) {
		$response=mysql_error();
	}else{
		$response="Se inserto: ".$id;
	}
	
	$db->desconectar();
	//echo $response;
?>