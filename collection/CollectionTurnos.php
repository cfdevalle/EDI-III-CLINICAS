<?PHP
	class CollectionTurnos{	

	public function getTurnos($usuario){
		$vec=array();
		$i=0;
		$j=0;
		$db=new DataBaseConnector();
		$db->conectar();
		$consulta='select t.fecha, p.nombre,p.apellido,u.horarios FROM turno t, paciente p,usuario u WHERE t.usuario="'.$usuario.'" AND u.usuario="'.$usuario.'" AND t.id_paciente=p.id_paciente ORDER BY t.fecha ASC';//.$usaurio;
		$result=mysql_query($consulta);
		$db->desconectar();
		if (false === $result) {
			echo mysql_error();
		}
		while($row = mysql_fetch_row($result)){
		/*	$vec[$i][$j]=$row[0];
			$i=$i+1;
			$vec[$i][$j]=$row[1];
			$i=$i+1;
			$vec[$i][$j]=$row[2];
			$i=$i+1;
			
			$j=$j+1;*/
			$vec[$i]=array(
				"fecha"=>$row[0],
				"nombre"=>$row[1],
				"apellido"=>$row[2],
			);
			$i++;
		}
		return $vec;
	}
}
?>
