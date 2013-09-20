<HTML>
<HEAD>
<?php include("includes/metas.php")?>
</HEAD>
<BODY>
	<?PHP
		include '/domain/DataBaseConnector.php';
		include '/domain/Usuario.php';
		include '/collection/CollectionUsuarios.php';
		
		
		
		
		$user=$_POST["txt_usuario"];
		$pass=$_POST["txt_password"];
		$usuario=new Usuario($user,$pass);
		$collection=new CollectionUsuarios();
		$db=new DataBaseConnector();
		//echo("<P>Usuario: ".$usuario->getUsuario()."</P>")
		$db->conectar();
		$result=$db->consulta("SELECT * FROM usuario WHERE usuario.usuario='".$usuario->getUsuario()."' AND usuario.password='".$usuario->getPassword()."'");
		$num_rows = mysql_num_rows($result);
		$db->desconectar();
		//echo("SELECT * FROM usuario WHERE usuario.usuario='".$usuario->getUsuario()."' AND usuario.password='".$usuario->getPassword()."'");
		if ($num_rows==1){
			header("Location: abmturno/abmTurno.php");
		}else{
			header("location: index.php?usr=errorForUser");
		}
		
		
	?>
</BODY>
</HTML>
