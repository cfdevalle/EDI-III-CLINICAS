<HTML>
<HEAD>
<?php include("includes/metas.php")?>
</HEAD>
<BODY>
	<?PHP
		include '/includes/sql.php';
		include '/domain/Usuario.php';
		include '/collection/CollectionUsuarios.php';
		conectarBase();
		
		$user=$_POST["txt_usuario"];
		$pass=$_POST["txt_password"];
		$usuario=new Usuario($user,$pass);
		$collection=new CollectionUsuarios();
		//echo("<P>Usuario: ".$usuario->getUsuario()."</P>")
		
		$result=consulta("SELECT * FROM usuario WHERE usuario.usuario='".$usuario->getUsuario()."' AND usuario.password='".$usuario->getPassword()."'");
		$num_rows = mysql_num_rows($result);
		
		if ($num_rows==1){
			header("Location: abmturno/abmTurno.php");
		}else{
			header("location: index.php?usr=errorForUser");
		}
		
		
	?>
</BODY>
</HTML>
