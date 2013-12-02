<script>
		function borrar($id){
			console.log("id"+$id);
			$.post( "abmpaciente/abmBorrar.php",{id:$id},
		function(respuesta){
				var url ="abmpaciente/displayBuscarpaciente.php";
                $("#contenidopacientes").load(url);
	})
		}
		function modificar($id){
			 console.log("id"+$id);
		 	 var url="abmpaciente/abmModificar.php?id="+$id;
			 $("#contenidopacientes").load(url);
	
		}
</script>
<?php

		
	function buscarPacientes(){
		$response="";
		$consulta="SELECT * FROM paciente";
		if (!(empty($_GET['dni']))){
			$consulta=$consulta." WHERE dni like '".$_GET["dni"]."%'";
		}
		if (!(empty($_GET['nombre']))){
			if (strlen($consulta)<=22){
				$consulta=$consulta." WHERE nombre like '".$_GET["nombre"]."%'";
			}else{
				$consulta=$consulta." AND nombre like '".$_GET["nombre"]."%'";
			}
		}
		if (!(empty($_GET['apellido']))){
			if (strlen($consulta)<=22){
				$consulta=$consulta." WHERE apellido like \"".$_GET["apellido"]."%\"";
			}else{
				$consulta=$consulta." AND apellido like \"".$_GET["apellido"]."%\"";
			}
		}
		
		$consulta=$consulta." ORDER BY id_paciente ASC";
		
		return $consulta;
	}
	
	
	$query=buscarPacientes();
	
	 include "../collection/CollectionPacientes.php";
	 include '../domain/DataBaseConnector.php';
	$generaGrilla=new CollectionPacientes();
	 $db=new DataBaseConnector();
	 
	 $db->conectar();
	 $generaGrilla->getTablePacientes($query);
	 $db->desconectar();
?>
	
	


 