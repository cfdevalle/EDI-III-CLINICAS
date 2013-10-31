<?php 

	if (!(empty($_POST['id']))){
		$id=$_POST['id'];
	} 

	
	include '../domain/DataBaseConnector.php';
	$db=new DataBaseConnector();
	$db->conectar();
	$query="DELETE FROM paciente WHERE id_paciente=".$id;
	echo $query;
	//$db->desconectar();
	$result=mysql_query($query);
	
?>