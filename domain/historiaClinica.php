<?php 
	class historiaClinica{
		
		private $id_historia_clinica;
		private $id_paciente;
		private $operaciones;
		private $alergias;
		private $tratamientos;
		
		
		public function __construct($id_historiaC,$id_pas,$operaciones,$alergias,$tratamientos){
		$this->id_historia_clinica=$id_historiaC;
		$this->id_paciente=$id_pas;
		$this->operaciones=$operaciones;
		$this->alergias=$alergias;
		$this->tratamientos=$tratamientos;
	}
		public function setId_historia_clinica($id){
			$this->id_historia_clinica=$id;
		}
		public function setId_paciente($id){
			$this->id_paciente=$id;
		}
		public function setOperaciones($op){
			$this->operaciones=$op;
		}
		public function setAlergias($al){
			$this->alergias=$al;
		}
		public function setTratamientos($tra){
			$this->tratamientos=$tra;
		}
		
		public function getId_historia_clinica(){
			return $this->id_historia_clinica;
		}
		public function getId_paciente(){
			return $this->id_paciente;
		}
		public function getOperaciones(){
			return $this->operaciones;
		}
		public function getAlergias(){
			return $this->alergias;
		}
		public function getTratamientos(){
			return $this->tratamientos:
		}
		
		
		
	
	
	} 
	
	
	
?>