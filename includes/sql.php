<?PHP
	function conectarBase(){
		mysql_connect("localhost","root","Toro33398060");
	//	mysql_connect($server,$usuario,$pass);
		mysql_select_db("edi3");
	//	mysql_select_db($base);
		
	}
	function consulta($query){
		$result=mysql_query($query);
		return $result;
	}
?>
	
