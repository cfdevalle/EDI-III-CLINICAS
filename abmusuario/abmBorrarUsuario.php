<?php 

	if (!(empty($_GET['id']))){
		$id=$_GET['id'];
	
	} 

	
	include '../domain/DataBaseConnector.php';
	$db=new DataBaseConnector();
	$db->conectar();
	$query="DELETE FROM usuario WHERE id_usuario=".$id;
	echo $query;
	
	$result=mysql_query($query);
	$db->desconectar();
	//header("Location: ../wrapperAdm.php");
?>