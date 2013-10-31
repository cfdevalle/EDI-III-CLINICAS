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
	
	public function getTablePacientes($quey){
		 //usuario,password,nombre,apellido,rol
		$consulta=$quey;
		//echo $consulta;
		$result=mysql_query($consulta);
		if (false === $result) {
			echo mysql_error();
		}
		echo("<Table class='table table-condensed' >");
		echo("<tr class='info'><td>Legajo</td><td>Nombre</td><td>Apellido</td><td>Dni</td><td>Dirreccion</td><td>Telefono</td><td>Accion</td></tr>");
		while($row = mysql_fetch_row($result)){
				//echo('<TR><TD id="id_paciente">'.$row[0].'</TD><TD id="apellido">'.$row[2].'</TD><TD id="nombre">'.$row[1].'</TD></TR>');
				echo('<TR><TD id="id">'.$row[0].'</TD><TD id="nombre">'.$row[1].'</TD><TD id="apellido">'.$row[2].'</TD><TD id="dni">'.$row[3].'</TD><TD id="direccion">'.$row[4].'</TD><TD id="telefono">'.$row[5].'</TD><TD><input type="button" value="Borrar" class="btn-primary" onclick="borrar('.$row[0].')" /> / <input type="button" value="Modificar" class="btn-primary" onclick="modificar('.$row[0].')" /></TD></TR>');
		}
		echo('</table>');
	}
	
}
?>

