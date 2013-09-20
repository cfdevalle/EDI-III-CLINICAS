<?PHP
class CollectionPacientes{	
	
	public function getComboPacientes($id,$class){
		 //usuario,password,nombre,apellido,rol
		$consulta='SELECT p.id_paciente,p.nombre,p.apellido FROM paciente p ORDER BY apellido ASC';
		$result=mysql_query($consulta);
		if (false === $result) {
			echo mysql_error();
		}
		echo('<SELECT id="'.$id.'" name="'.$id.'" class="'.$class.'" onclick="cambiarInput(this);">');
		echo('<option value="vacio">---</option>');
		while($row = mysql_fetch_row($result)){
				echo('<option value="'.$row[0].'">'.$row[2].' '.$row[1].'</option>');
		}
		echo('</SELECT>');
	}
	
	public function getTablePacientes($id,$class){
		//usuario,password,nombre,apellido,rol
		
		
		$consulta='SELECT p.id_paciente,p.nombre,p.apellido FROM paciente p ORDER BY apellido ASC';
				
		$result=mysql_query($consulta);
		if (false === $result) {
			echo mysql_error();
		}
		echo('<Table id="'.$id.'" name="'.$id.'" class="'.$class.'" onclick="cambiarInput(this);">');
		while($row = mysql_fetch_row($result)){
				echo('<TR>"<TD id="id_paciente">'.$row[0].'</TD><TD id="apellido">'.$row[2].'</TD><TD id="nombre">'.$row[1].'</TD></TR>');
		}
		echo('</table>');
	}
}
?>
