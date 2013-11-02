<script>
		function borrar($id){
					console.log("id"+$id);
			$.post( "abmusuario/abmBorrarUsuario.php",{id:$id},
		function(respuesta){
				var url ="abmusuario/displayBuscarUsuario.php";
                $("#contenidoUsuario").load(url);
	})
		}
		function modificar($id){
		$.post( "abmpaciente/abmModificar.php",{id:$id},
		function(respuesta){
				var url ="abmpaciente/displayBuscarpaciente.php";
                $("#contenidopacientes").load(url);
	})	
			//console.log("nombre"+$nombre);
		}
</script>
<?php

		
	function buscarUsuario(){
		
		$response="";
		$consulta="SELECT * FROM usuario";
		
		if (!(empty($_GET['nombre']))){
			$consulta=$consulta." WHERE nombre=  '".$_GET["nombre"]."'";
		}
		if (!(empty($_GET['apellido']))){
			if (strlen($consulta)<=22){
				$consulta=$consulta." WHERE apellido=  \"".$_GET["apellido"]."\"";
			}else{
				$consulta=$consulta." AND apellido=  \"".$_GET["apellido"]."\"";
			}
		}
		if (!(empty($_GET['rol']))){
			if (strlen($consulta)<=22){
				$consulta=$consulta." WHERE rol	= \"".$_GET["rol"]."\"";
			}else{
				$consulta=$consulta." AND rol =  \"".$_GET["rol"]."\"";
			}
		}
		
		$consulta=$consulta." ORDER BY id_usuario ASC";
		return $consulta;
	}
	

	$query=buscarUsuario();
		
	 include "../collection/CollectionUsuarios.php";
	 include '../domain/DataBaseConnector.php';
	 $generaGrilla=new CollectionUsuarios();
	 $db=new DataBaseConnector();
	 
	 $db->conectar();
	 $generaGrilla->getTableUsuario($query);
	 $db->desconectar();
?>
	
	


 