<?php
	class usuarioRol{
		private $rol;
		private $usuario;
		
		public function __construct($rol,$usuario){
			$this->rol=$rol;
			$this->usuario=$usuario;
		}
		
		public function setRol($r){
			$this->rol=$r;
		}
		public function setUsuario($usr){
			$this->usuario=$usr;
		}
		
		public function getRol(){
			return $this->rol;
		}
		
		public function getUsuario(){
			return $this->usuario;
		}
		
?>