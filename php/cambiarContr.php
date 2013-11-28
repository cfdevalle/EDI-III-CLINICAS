<?php 
session_start();
if (!isset($_POST['usr'])){
			$u=$_SESSION['usuario'];
			$pas=$_SESSION['pass'];
			
			
	include '../domain/DataBaseConnector.php';
	$db=new DataBaseConnector();
	$db->conectar();
	$c="SELECT * FROM usuario WHERE usuario='".$u."'";

	$result=mysql_query($c);
	while($row = mysql_fetch_row($result)){
		$usuario=$row[0];
		$password = $row[1];
	}
	$script="
	<script>
		function llenarCampos(){
			
			document.getElementById(\"passMod\").value='".$password."';
			
		}
		
		llenarCampos();
	</script>
	";	
	echo($script);
    $db->desconectar();
?>
			<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

			<form action="php/cambiarContr.php" method="post">
			<table>
				<tr><td><h4>Modificar Constraseña</h4></td><td><h5>Usuario: <?php echo($usuario);?></h5></td></tr>
				
				<tr>
					<td style="width:5px">Contraseña Actual<input type="text" value="<?php echo($password);?>" disabled="disabled"/> </td>
					<td style="width:5px">Contraseña Nueva<input type="text" value="" name="pass" id="passMod" /></td>
				
				</tr>
			
				<tr><td><input type="hidden" value="<?php echo($usuario); ?>" name="usr" />
						<INPUT TYPE="submit"  class="btn-primary"  value="Modificar"/></td>
				</tr>
				
			</table>
			</form>
<?php }


if (isset($_POST['usr'])){
	$consulta = "UPDATE usuario SET  ";
	if (!(empty($_POST['pass']))){
		$pass=$_POST['pass'];
		$consulta = $consulta."password='".$pass."'";
	
		
		
	}

	

	

	
	$consulta=$consulta."  where usuario='".$_POST['usr']."'";
	echo($consulta);
	include '../domain/DataBaseConnector.php';
	$db=new DataBaseConnector();
	$db->conectar();
	mysql_query($consulta);
	$db->desconectar();
	$rol=$_SESSION['rolNoLogin'];
	$otorgaTurno=$_SESSION['otorgaturno'];
	if ( $rol === "admin" ){
					header("location: ../wrapperAdm.php");
	}
	else{
					
			if ($rol == "sec"){
						header("location: ../wrapperSec.php");
			}
					
			else {
						if ($otorgaTurno==1){
							
							header("location: ../wrapperDocTurnos.php");
						}
						else {
							header("location: ../wrapperDoc.php");
						}
			}
	}
	


}	

	
	

	
?>