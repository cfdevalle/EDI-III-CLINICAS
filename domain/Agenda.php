<?php
	class Agenda{
		private $usuario;
		private $dia;
		private $horario;
		
	public function __construct($usr,$d,$h){
	
		$this->usuario=$usr;
		$this->dia=$d;
		$this->horario=$h;
	}
	
	public function setUsuario($usr){
	
		$this->usuario=$usr;
	}
	public function setDia($d){
	
		$this->dia=$d;
	}
	public function setHorario($h){
	
		$this->horario=$h;
	}
	
	public function getUsuario(){
		return $this->usuario;
	}
	public function getDia(){
		return $this->dia;
	}
	public function getHorario(){
		return $this->horario;
	}
	
?>