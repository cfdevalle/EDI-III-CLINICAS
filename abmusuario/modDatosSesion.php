<?php
	session_start();
	if (isset($_SESSION['usuario'])){
		$usuario=$_SESSION['usuario'];
		
	
	
	include '../domain/DataBaseConnector.php';
	$db=new DataBaseConnector();
	$db->conectar();
	$c="SELECT * FROM usuario WHERE usuario='".$usuario."'";

	$result=mysql_query($c);
	while($row = mysql_fetch_row($result)){
		$usuario=$row[0];
		$password = $row[1];
		$nombre = $row[2];
		$apellido = $row[3];
		$telefono = $row[4];
		$email = $row[5];
		$direccion = $row[6];
	}
	$script="
	<script>
		function llenarCampos(){
			console.log(\"entro a la funcion java script\");
			document.getElementById(\"nombreMod\").value='".$nombre."';
			
			document.getElementById(\"apellidoMod\").value='".$apellido."';
			document.getElementById(\"domicilioMod\").value='".$direccion."';
			document.getElementById(\"telefonoMod\").value='".$telefono."';
			document.getElementById(\"emailMod\").value='".$email."';
		}
		
		llenarCampos();
	</script>
	";	
	echo($script);
    $db->desconectar();
?>
		    </hr>
			<form action="abmusuario/abmModificarUsuario.php" method="post">
			<table>
				<tr><td><h4>Modificar Datos</h4></td><td><h5>Usuario: <?php echo($usuario);?></h5></td></tr>
				
				<tr><!--<td style="width:5px">password<input type="text" value="" name="pass" id="nombreMod" /></td>-->
					<td style="width:5px">nombre<input type="text" value="" name="nombre" id="nombreMod" /></td>
					<td style="width:5px">apellido<input type="text" value="" name="apellido" id="apellidoMod" /> </td>
				</tr>
				<tr>
					<td style="width:5px">direccion<input type="text" value="" name="domicilio" id="domicilioMod" /></td>
					<td style="width:5px">telefono<input type="text" value="" name="telefono" id="telefonoMod" /></td>
					<td style="width:5px">email<input type="text" value="" name="email" id="emailMod" /></td>
					
				</tr>
				<tr><td><input type="hidden" value="<?php echo($usuario); ?>" name="usr" />
						<INPUT TYPE="submit"  class="btn-primary"  value="Modificar"/></td>
				</tr>
				
			</table>
			</form>
<?php }
$aux = 0;
if (isset($_POST['usr'])){
	$consulta = "UPDATE usuario SET  ";
	/*if (!(empty($_POST['pass']))){
		$pass=$_POST['pass'];
		if ($aux == 0){		
		
		$consulta = $consulta."password='".$nom."'";
		$aux=1;
		}
		else{
		$consulta = $consulta.",password='".$nom."'";
		}
		
		
	}*/
	if (!(empty($_POST['nombre']))){
		$nombre=$_POST['nombre'];
		if ($aux == 0 ){
			$consulta = $consulta."nombre='".$nombre."'";
			$aux=1;
		}
		else{
			$consulta = $consulta.",nombre='".$nombre."'";
		}
		
	} 
	if (!(empty($_POST['apellido']))){
		$ap=$_POST['apellido'];
		if ($aux == 0){
			$consulta = $consulta."apellido='".$ap."'";
			$aux=1;
		}
		else{
		$consulta = $consulta.",apellido='".$ap."'";
		
		}
		
	} 
	
	if (!(empty($_POST['domicilio']))){
		$direc=$_POST['domicilio'];
		if ($aux == 0){
			$consulta = $consulta."direccion='".$direc."'";
			$aux=1;
		}
		else{
			$consulta = $consulta.",direccion='".$direc."'";}
		
	} 
	if (!(empty($_POST['telefono']))){
		$tele=$_POST['telefono'];
		if ($aux == 0){
			$consulta = $consulta."telefono='".$tele."'";
			$aux=1;
		}
		else
		{	$consulta = $consulta.",telefono='".$tele."'";}
		
	} 
	if (!(empty($_POST['email']))){
		$email=$_POST['email'];
		if ($aux == 0){
			$consulta = $consulta."email='".$email."'";
			$aux=1;
		}
		else
		{	$consulta = $consulta.",email='".$email."'";}
		
	} 
	
	$consulta=$consulta."  where usuario='".$_POST['usr']."'";
	echo($consulta);
	include '../domain/DataBaseConnector.php';
	$db=new DataBaseConnector();
	$db->conectar();
	mysql_query($consulta);
	$db->desconectar();
	
	
	header("Location: ../wrapperAdm.php");
	
	}
	
?>