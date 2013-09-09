<?PHP
class Usuario{
	private $usuario;
	private $password;
	private $nombre;
	private $apellido;
	private $rol;
	
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
	public function setNombre($nombre){
		$this->password=$nombre;
	}
	public function setApellido($apellido){
		$this->password=$apellido;
	}
	public function setRol($rol){
		$this->password=$rol;
	}
	
	public function getUsuario(){
		return $this->usuario;
	}
	public function getPassword(){
		return $this->password;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function getApellido(){
		return $this->apellido;
	}
	public function getRol(){
		return $this->rol;
	}
}
?>
