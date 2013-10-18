<?PHP
	$response="";
	include '../../domain/DataBaseConnector.php';
	$db=new DataBaseConnector();
	$dato;
	if (!(empty($_POST['dato']))){
		$dato=$_POST['dato'];
	}
	$db->conectar();
	$consulta='INSERT INTO paciente (id_paciente ) VALUES ('.$dato.')';//.$usaurio;
	$result=mysql_query($consulta);
	$db->desconectar();
	if (false === $result) {
		$response=mysql_error();
	}else{
		$response="Se inserto: ".$dato;
	}
	
	
	echo $response;
?>
