<?PHP
class CollectionUsuarios{	
	
	public function getComboProfesionales($id,$class){
		 //usuario,password,nombre,apellido,rol
		$consulta='SELECT u.usuario,u.nombre,u.apellido FROM usuario u WHERE rol="doc" ORDER BY apellido ASC';
		$result=mysql_query($consulta);
		if (false === $result) {
			echo mysql_error();
		}
		echo('<SELECT id="'.$id.'" name="'.$id.'" class="'.$class.'">');
		echo('<option value="vacio">---</option>');
		while($row = mysql_fetch_row($result)){
				echo('<option value="'.$row[0].'">'.$row[2].' '.$row[1].'</option>');
		}
		echo('</SELECT>');
	}
	
	
	
}
?>
