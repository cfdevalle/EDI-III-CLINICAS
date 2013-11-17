<?php
	class Observaciones{
		
		private $id_observaciones;
		private $id_paciente;
		private $usuario;
		private $fecha;
		private $descripcion;
		
		
		public function __construct($id_ob,$id_pac,$usr,$fe,$desc){
			$this->id_observaciones=$id_ob;
			$this->id_paciente=$id_pac;
			$this->usuario=$usr;
			$this->fecha=$fe;
			$this->descripcion=$desc;
		
		} 
		public function setId_observaciones($id){
			$this->id_observaciones=$id;
		}
		public function setId_paciente($id){
			$this->id_paciente=$id;
		}
		public function setUsuario($usr){
			$this->usuario=$usr;
		}
		public function setFecha($fe){
			$this->fecha=$fe;
		}
		public function setDescripcion($desc){
			$this->descripcion=$desc;
		}
		
		public function getId_observaciones(){
			return $this->id_observaciones;
		}
		public function getId_paciente(){
			return $this->id_paciente;
		}
		public function getUsuario(){
			return $this->usuario;
		}
		public function getFecha(){
			return $this->fecha;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}


?>