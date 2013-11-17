<?php
	class Consultorio{
		private $n_consultorio;
		private $nombre;
		private $descripcion;
	
	public function __construct($n_con,$nom,$desc){
		$this->n_consultorio=$n_con;
		$this->nombre=$nom;
		$this->desc=$desc;
	}
	public function setN_consultorio($n_con){
		 $this->n_consultorio=$n_con;
	}
	public function setNombre($nom){
		 $this->nombre=$nom;
	}
	public function setDescripcion($desc){
		 $this->descripcion=$desc;
	}
	
	public function getN_consultorio(){
		return $this->n_consultorio;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function getDescripcion(){
		return $this->descripcion;
	}
?>