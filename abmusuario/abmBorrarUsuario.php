<?php 

	if (!(empty($_POST['id']))){
		$id=$_POST['id'];
	
	} 

	
	include '../domain/DataBaseConnector.php';
	$db=new DataBaseConnector();
	$db->conectar();
	$query="DELETE FROM usuario WHERE id_usuario=".$id;
	echo $query;
	
	$result=mysql_query($query);
	$db->desconectar();
?>