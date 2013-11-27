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
	public function getComboRol(){
			
		$db=new DataBaseConnector();
		$db->conectar();
		$consulta='SELECT * FROM rol ';
		$result=mysql_query($consulta);
		
		if (false === $result) {
			echo mysql_error();
		}
		echo('<SELECT id="combo" name="combo">');
		echo('<option value="">---</option>');
		while($row = mysql_fetch_row($result)){
				echo('<option value="'.$row[0].'">'.$row[0].'</option>');
		}
		echo('</SELECT>');
		$db->desconectar();
	}
	public function getComboUsuario(){
			 //usuario,password,nombre,apellido,rol
		$db=new DataBaseConnector();
		$db->conectar();
		$consulta="SELECT * FROM usuario";
		$result=mysql_query($consulta);
		
		if (false === $result) {
			echo mysql_error();
		}
		echo('<SELECT id="comboU" name="comboU">');
		echo('<option value="">---</option>');
		while($row = mysql_fetch_row($result)){
				echo('<option value="'.$row[0].'">'.$row[0]." / ".$row[2]."-".$row[3].'</option>');
		}
		echo('</SELECT>');
		$db->desconectar();
	}
	
	public function getTableUsuario($quey){
	
		$result=mysql_query($quey);
		if (false === $result) {
			echo mysql_error();
		}
		echo("<Table class='table table-condensed' >");
		echo("<tr class='info'><td>Usuario</td><td>Password</td><td>Nombre</td><td>Apellido</td><td>Telefono</td><td>Email</td><td>Direccion</td><td>Rol</td><td>Accion</td></tr>");
		while($row = mysql_fetch_row($result)){?>
			
		<?php 
				
				echo('<TR><TD>'.$row[0].'</TD><TD>'.$row[1].'</TD><TD>'.$row[2].'</TD><TD>'.$row[3].'</TD><TD>'.$row[4].'</TD><TD>'.$row[5].'</TD><TD>'.$row[6].'</TD><TD>'.$row[7].'</TD><td><input type="button" value="Modificar" class="btn-primary" onclick="modificarU(\''.$row[0].'\')" /></TD></TR>');
		}
		
		echo('</table>');
	}
	
	


	

	
}
?>
