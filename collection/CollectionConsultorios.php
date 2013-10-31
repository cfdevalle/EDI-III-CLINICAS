<?PHP
class CollectionConsultorios{	

	public function getComboConsultorios($id,$class){
		 //usuario,password,nombre,apellido,rol
		$consulta='SELECT c.numero,c.nombre FROM consultorio c ORDER BY numero ASC';
		$result=mysql_query($consulta);
		if (false === $result) {
			echo mysql_error();
		}
		echo('<SELECT id="'.$id.'" name="'.$id.'" class="'.$class.'">');
		echo('<option value="vacio">---</option>');
		while($row = mysql_fetch_row($result)){
				echo('<option value="'.$row[0].'">'.$row[0].'-'.$row[1].'</option>');
		}
		echo('</SELECT>');
	}
	
	
}
?>
