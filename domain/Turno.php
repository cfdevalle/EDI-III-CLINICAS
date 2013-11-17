<?PHP
class Turno{
	private $fecha;
	private $usuario;
	private $id_paciente;
	private $n_consultorio;
	
	public function __construct($fe,$usr,$id_pac,$n_consul){
		$this->fecha=$fe;
		$this->usuario=$usr;
		$this->id_paciente=$id_pac;
		$this->n_consultorio=$n_consul;
		
	}
	
	public function setFecha($fe){
		$this->fecha=$fe;
	}
	public function setUsuario($usr){
		$this->usuario=$usr;
	}
	public function setId_paciente($id){
		$this->id_paciente=$id;
	}
	public function setN_consultorio($consul){
		$this->n_consultorio=$consul;
	}
	
	public function getFecha(){
		return $this->fecha;
	}
	public function getUsuario(){
		return $this->usuario;
	}
	public function getId_paciente(){
		return $this->id_paciente;
	}
	public function getN_consultorio(){
		return $this->n_consultorio;
	}
	
}
	

?>
