<?PHP
class DataBaseConnector{	
	private $host;
	private $usuario;
	private $password;
	
	
	public function conectar(){
		$link=mysql_connect("localhost","root","");
		mysql_select_db("edi3",$link) 	OR DIE ("Error: no se pudo conectar");
	}
	public function desconectar(){
		mysql_close(); 
	}
	function consulta($query){
		$result=mysql_query($query);
		return $result;
	}
}
?>
