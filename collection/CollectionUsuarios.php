<?PHP
class CollectionUsuarios{	
	
	public function getComboProfesionales($id,$class){
		 //usuario,password,nombre,apellido,rol
		$db=new DataBaseConnector();
		$db->conectar();
		$consulta='SELECT u.usuario,u.nombre,u.apellido FROM usuario u WHERE rol="doc" ORDER BY apellido ASC';
		$result=mysql_query($consulta);
		$db->desconectar();
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
	public function getTableUsuario($quey){
		 //usuario,password,nombre,apellido,rol
		$consulta=$quey;
		//echo $consulta;
		$result=mysql_query($consulta);
		if (false === $result) {
			echo mysql_error();
		}
		echo("<Table class='table table-condensed' >");
		echo("<tr class='info'><td>legajo</td><td>Usuario</td><td>Password</td><td>Nombre</td><td>Apellido</td><td>Rol</td><td>Accion</td></tr>");
		while($row = mysql_fetch_row($result)){
				//echo('<TR><TD id="id_paciente">'.$row[0].'</TD><TD id="apellido">'.$row[2].'</TD><TD id="nombre">'.$row[1].'</TD></TR>');
				echo('<TR><TD id="legajo">'.$row[0].'</TD><TD id="Usuario">'.$row[1].'</TD><TD id="Password">'.$row[2].'</TD><TD id="Nombre">'.$row[3].'</TD><TD id="Apellido">'.$row[4].'</TD><TD id="rol">'.$row[5].'</TD><TD><input type="button" value="Borrar" class="btn-primary" onclick="borrar('.$row[0].')" /> / <input type="button" value="Modificar" class="btn-primary" onclick="modificar('.$row[0].')" /></TD></TR>');
		}
		echo('</table>');
}
	
	

	
	
	
}
?>
