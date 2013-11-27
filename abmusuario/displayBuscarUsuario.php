<script>
/*		function borrar(id){
			console.log("id"+id);
			var url="abmusuario/abmBorrarUsuario.php?id="+id;
			window.location.href = url
		
		function(respuesta){
				var url ="abmusuario/displayBuscarUsuario.php";
                $("#contenidoUsuario").load(url);
	}
		}
*/
	function modificarU($id){
			 console.log("id"+$id);
		 	 var url="abmusuario/abmModificarUsuario.php?id="+$id;
			 $("#contenidoUsuario").load(url);
	
		}
</script>
<?php

		
	function buscarUsuario(){
		
		$response="";
		$consulta="SELECT u.* ,r.rol FROM usuario u,usuario_rol r ";
		
		if (!(empty($_GET['nombre']))){
			$consulta=$consulta." WHERE u.nombre=  '".$_GET["nombre"]."' AND u.usuario=r.usuario";
		}
		if (!(empty($_GET['apellido']))){
			if (strlen($consulta)<=49){
				$consulta=$consulta." WHERE u.apellido= '".$_GET["apellido"]."' AND u.usuario=r.usuario";
			}else{
				$consulta=$consulta." AND u.apellido=  '".$_GET["apellido"]."'";
			}
		}
		if (!(empty($_GET['rol']))){
			if (strlen($consulta)<=50){
				$consulta=$consulta." WHERE r.rol	= \"".$_GET["rol"]."\" AND u.usuario=r.usuario";
			}else{
				$consulta=$consulta." AND r.rol =  \"".$_GET["rol"]."\"";
			}
		}
	
		if ((empty($_GET['nombre']))&&(empty($_GET['apellido']))&&(empty($_GET['rol']))){			
		$consulta=$consulta."WHERE u.usuario=r.usuario";
		}
			

		
		
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
	
	


 