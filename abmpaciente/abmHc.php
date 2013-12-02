
<?php
		if (isset($_GET['hc'])){
			$hc=$_GET['hc'];
			$nombre=$_GET['nom'];
			$apellido=$_GET['ap'];
			$dni=$_GET['dni'];
	
									
?>	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />		
	<form action="abmpaciente/abmHc.php" method="post">
			<table>
				<tr><td><h4>Historia Clinica </h4></td><td style="width:80px"></td><td>N° <?php echo($hc);?></td><td style="width:280px"></td><td><h5>Nombre:</h5></td><td><?php echo($nombre);?></td><td>&nbsp;</td><td><h5>Apellido:</h5></td><td><?php echo($apellido);?></td><td>&nbsp;</td><td><h5>Dni:</h5></td><td> <?php echo($dni);?></td></tr>
			</table>
			<table>	
				<tr><td><h5>Operaciones</h5></td><td style="width:15px"></td><td><h5>Tratamientos</h5></td><td style="width:50px"></td><td><h5>Alergias</h5></td></tr>
				<tr>
					<td>
						 <textarea rows="15"  placeholder="Informaciones de operaciones realizadas" type="text" value="" name="opera"></textarea>
					</td>
					<td style="width:50px"></td>
					<td>
						 <textarea rows="15"  placeholder="Tratamientos " type="text" value="" name="trata"></textarea>
					</td>
					<td style="width:50px"></td>
					<td>
						 <textarea rows="15"  placeholder="Patologias o alegias" type="text" value="" name="alergias"></textarea>
					</td>
					
				</tr>
				<tr><td><input type="hidden" value="<?php echo($hc); ?>" name="hc" />
						<INPUT TYPE="submit"  class="btn-primary"  value="Alta"/></td>
				</tr>
				
			</table>
	</form>
<?php 
	}
$aux=0;
if (isset($_POST['hc'])){
	$consulta = "INSERT INTO historia_clinica (id_paciente,operaciones,alergias,tratamientos)";
	$consulta=$consulta." VALUES (".$_POST['hc'].",'".$_POST['opera']."','".$_POST['trata']."','".$_POST['alergias']."')";
	echo($consulta);
	include '../domain/DataBaseConnector.php';
	$db=new DataBaseConnector();
	$db->conectar();
	mysql_query($consulta);
	$db->desconectar();
	
	
	header("Location: ../wrapperSec.php");
	
	}