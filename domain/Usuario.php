<?PHP
class Usuario{
	private $usuario;
	private $password;
	private $nombre;
	private $apellido;
	private $telefono;
	private $email;
	private $direccion;
	
	
	public function __construct($usu,$pass,$nom,$ap,$tele,$e,$direc){
		$this->usuario=$usu;
		$this->password=$pass;
		$this->nombre=$nom;
		$this->apellido=$ap;
		$this->telefono=$tele;
		$this->email=$e;
		$this->direccion=$direc;
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
	public function setTelefono($tel){
		$this->telefono=$tel;
	}
	public function setEmail($e){
		$this->email=$e;
	}
	public function setDireccion($dir){
		$this->direccion=$dir;
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
	public function getTelefono(){
		return $this->telefono;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getDireccion(){
		return $this->$direccion;
	}

}
?>
