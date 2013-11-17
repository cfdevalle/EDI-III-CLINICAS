<?php
	class Rol{
		private $rol;
		private $descripcion;
		private $alta;
		
		
		public function __construct($r,$desc,$a){
			$this->rol=$r;
			$this->descripcion=$desc;
			$this->alta=$a;
		}
		
		public function setRol($r){
			$this->rol=$r;
		}
		public function setDescripcion($desc){
			$this->descripcion=$desc;
		}
		public function setAlta($a){
			$this->alta=$a;
		}
		
		public function getRol(){
			return $this->rol;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function getAlta(){
			return $this->alta;
		}
?>