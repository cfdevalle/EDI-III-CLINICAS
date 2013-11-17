<?php
	if (isset($_GET['id'])){
		$id=$_GET['id'];
		
	
	
	include '../domain/DataBaseConnector.php';
	$db=new DataBaseConnector();
	$db->conectar();
	$c='SELECT * FROM paciente WHERE id_paciente='.$id;

	$result=mysql_query($c);
	while($row = mysql_fetch_row($result)){
		$id=(int)$row[0];
		$nombre = $row[1];
		$apellido = $row[2];
		$dni = $row[3];
		$direccion = $row[4];
		$telefono = $row[5];
	}
	$script="
	<script>
		function llenarCampos(){
			console.log(\"entro a la funcion java script\");
			document.getElementById(\"nombreMod\").value='".$nombre."';
			
			document.getElementById(\"apellidoMod\").value='".$apellido."';
			document.getElementById(\"dniMod\").value='".$dni."';
			document.getElementById(\"domicilioMod\").value='".$direccion."';
			document.getElementById(\"telefonoMod\").value='".$telefono."';
		}
		
		llenarCampos();
	</script>
	";
	$tabla="<table>
				<tr><td><h4>Datos Personales</h4></td></tr>
				<tr>
					<td>Nombre ".$nombre."</td>
					<td>Apellido ".$apellido."</td>
					<td>Dni: ".$dni."</td>
				</tr>
				<tr>
					<td>Direcccion: ".$direccion."</td>
					<td>Telefono: ".$telefono."</td>
				</tr>
			</table>
		";
	echo($script);	
    $db->desconectar();
?>
		    </hr>
			<form action="abmpaciente/abmModificar.php" method="post">
			<table>
				<tr><td><h4>Modificar Datos</h4></td><td>Historia Clinica <?php echo($id);?></td></tr>
				
				<tr><td style="width:5px">Nombre<input type="text" value="" name="nombre" id="nombreMod" /></td>
					<td style="width:5px">Apellido<input type="text" value="" name="apellido" id="apellidoMod" /></td>
					<td style="width:5px">Dni<input type="text" value="" name="dni" id="dniMod" /> </td>
				</tr>
				<tr>
					<td style="width:5px">Direcccion<input type="text" value="" name="domicilio" id="domicilioMod" /></td>
					<td style="width:5px">Telefono<input type="text" value="" name="telefono" id="telefonoMod" /></td>
				</tr>
				<tr><td><input type="hidden" value="<?php echo($id); ?>" name="id" />
						<INPUT TYPE="submit"  class="btn-primary"  value="Modificar"/></td>
				</tr>
				
			</table>
			</form>
<?php }
$aux = 0;
if (isset($_POST['id'])){
	$consulta = "UPDATE paciente SET  ";
	if (!(empty($_POST['nombre']))){
		$nom=$_POST['nombre'];
		if ($aux == 0){		
		
		$consulta = $consulta."nombre='".$nom."'";
		$aux=1;
		}
		else{
		$consulta = $consulta.",nombre='".$nom."'";
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
	if (!(empty($_POST['dni']))){
		$dni=$_POST['dni'];
		if ($aux == 0 ){
			$consulta = $consulta."dni='".$dni."'";
			$aux=1;
		}
		else{
			$consulta = $consulta.",dni='".$dni."'";
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
	
	$consulta=$consulta."  where id_paciente=".$_POST['id'];
	//echo($consulta);
	include '../domain/DataBaseConnector.php';
	$db=new DataBaseConnector();
	$db->conectar();
	mysql_query($consulta);
	$db->desconectar();
	
	
	header("Location: ../wrapperDoc.php?ver=pac");
	
	}
	
?>