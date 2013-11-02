<?PHP
class CollectionAgenda{	
	
	public function getHorarios($usuario){
		 //usuario,password,nombre,apellido,rol
		$db=new DataBaseConnector();
		$db->conectar();
		$consulta='SELECT * FROM agenda WHERE usuario="'.$usuario.'"';
		$result=mysql_query($consulta);
		$db->desconectar();
		$vec=array();
		$i=0;
		if (false === $result) {
			echo mysql_error();
		}else{
			while($row = mysql_fetch_row($result)){
				$vec[$i]=array(
				"dia"=>$row[1],
				"horario"=>$row[2]
				);
			$i++;
			}
		}
		return $vec;
	}
	
	
	
}
?>
