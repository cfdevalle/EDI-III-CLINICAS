<?php
class Paciente{
	private $id;
	private $nombre
	private $apellido;
	private $dni;
	private $direccion;
	private $telefono;
	private $email;
	
	public function __construct($id,$nombre,$apellido,$dni,$direccion,$telefono,$email){
		$this->id=$id;
		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->dni=$dni;
		$this->direccion=$direccion;
		$this->telefono=$telefono;
		$this->email=$email;
	}
	
	
	public function setId($id){
		$this->id=$id;
	}
	
	public function setNombre($nomb){
		$this->nombre=$nomb;
	}
	public function setApellido($app){
		$this->apellido=$app;
	}
	public function setEmail($e){
		$this->email=$e;
	}
	public function setTelefono($tel){
		$this->telefono=$tel;
	}
	public function setDireccion($dir){
		$this->direccion=$dir;
	}
	public function setDni($dni){
		$this->dni=$dni;
	}

	public function getId(){
		return $this->id;
	}
	public function getnombre(){
		return $this->nombre;
	} 
	public function getApellido(){
		return $this->apellido;
	}
		public function getDni(){
		return $this->dni;
	}
	public function getDireccion(){
		return $this->direccion;
	}
	public function getTelefono(){
		return $this->telefono;
	}
	public function getEmail(){
		return $this->email;
	}
?>