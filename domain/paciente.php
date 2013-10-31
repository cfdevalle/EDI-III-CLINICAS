<?php
class Paciente{
	private $id;
	private $nombre
	private $apellido;
	
	public function __construct($id,$nombre,$apellido){
		$this->$id=$id;
		$this->$nombre=$nombre;
		$this->$apellido=$apellido;
	}
	
	public function setId($id){
		$this->$id=$id;
	}
	
	public function setNombre($nomb){
		$this->$nombre=$nomb;
	}
	public function setApellido($app){
		$this->$apellido=$app;
	}
	
	public function getId(){
		return $this->$id;
	}
	public function getnombre(){
		return $this->$nombre;
	} 
	public function getApellido(){
		return $this->$apellido;
	}
? >