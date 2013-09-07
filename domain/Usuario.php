<?PHP
class Usuario{
	private $usuario;
	private $password;
	
	public function __construct($usu,$pass){
		$this->usuario=$usu;
		$this->password=$pass;
	}
	public function setUsuario($usu){
		$this->usuario=$usu;
	}
	public function setPassword($pass){
		$this->password=$pass;
	}
	public function getUsuario(){
		return $this->usuario;
	}
	public function getPassword(){
		return $this->password;
	}
}
?>
