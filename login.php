<?PHP
include 'includes/metas.php';
include '/includes/sql.php';
include '/domain/Usuario.php';
include '/collection/CollectionUsuarios.php';
include '/domain/DataBaseConnector.php';
if (isset($_POST['selecRol'])){
				session_start();
				$db=new DataBaseConnector();
				$db->conectar();

				$rol=$_POST['selecRol'];
				$us=$_POST['usuario'];
				$contr=$_POST['contraseña'];				
				//$_SESSION['rolNoLogin']=$_POST['selecRol'];
				$r=("SELECT y.alta ,y.descripcion   FROM usuario u, usuario_rol r, rol y WHERE u.usuario='".$us."' AND u.password='".$contr."' and u.usuario=r.usuario and r.rol=y.rol and y.rol='".$rol."'");
				$resultado=mysql_query($r);
				$db->desconectar();
				//echo($r);
				//$otorgaTurno="";
				while ($fila = mysql_fetch_row($resultado)){
					
					$otorgaTurno=$fila[0];
					$_SESSION['otorgaturno']=$fila[0];
					$_SESSION['rol']=$fila[1];
					
					if ($otorgaTurno==1){
				
						header("location: wrapperDocTurnos.php");
					}
					else {
							header("location: wrapperDoc.php");
					}
			
				}
				
				
			

}
else{
$rol="";
$otorgaturno="";
$user=$_POST["txt_usuario"];
$pass=$_POST["txt_password"];


$usuario=new Usuario($user,$pass,' ',' ',' ',' ',' ');

$collection=new CollectionUsuarios();
$db=new DataBaseConnector();
$db->conectar();
$result=$db->consulta("SELECT u.*, r.rol, y.alta ,y.descripcion  FROM usuario u, usuario_rol r, rol y WHERE u.usuario='".$usuario->getUsuario()."' AND u.password='".$usuario->getPassword()."' and u.usuario=r.usuario and r.rol=y.rol");
$num_rows = mysql_num_rows($result);
$db->desconectar();
session_start();
	$_SESSION['usuario']=$usuario->getUsuario();
	$_SESSION['pass']=$usuario->getPassword();
	$vectorRol;
	$i=0;
	while ($row = mysql_fetch_row($result)){
			
			$_SESSION['nombre']=$row[2];
			$_SESSION['apellido']=$row[3];
			//$usuario->setEmail($row[4]);
			//$usuario->setEmail($row[5]);
			//$usuario->setDireccion($row[6]);
			$_SESSION['rolNoLogin']=$row[7];
			$rol = $row[7];
			$vectorRol[$i]=$row[7];
			$otorgaTurno = $row[8];
			$_SESSION['otorgaturno'] = $row[8];
			$_SESSION['rol']=$row[9];
			$i++;
	}
switch ($num_rows){
	case 0:{header("location: index.php?usr=errorForUser");
			break;
			}
	case 1:{
				if ( $rol === "admin" ){
					header("location: wrapperAdm.php");
				}
				else{
					if ($rol == "sec"){
						header("location: wrapperSec.php");
					}
					else {
						if ($otorgaTurno==1){
							
							header("location: wrapperDocTurnos.php");
						}
						else {
							header("location: wrapperDoc.php");
						}
					}
				}
				break;
			}
	default :{
	
	?>
<body  style="background-image:url(static/img/fondo.jpg)" >	
	<div id="contenedor" style="  width:auto; height:auto; margin:10% 35%;">
            <div id="cabecera">
			   <div class="well">	
				<h5>Seleccione Su Especialidad Para Inicar Sesion</h5><h5>Dr. <?php echo($_SESSION['nombre']); echo("  "); echo($_SESSION['apellido']);?></h5>
				<form action="login.php" method="post">
					<select name="selecRol">
					<?php $fin=count($vectorRol);
						for ($j=0;$j<$fin;$j++){?>
						<option value="<?php echo($vectorRol[$j]);?>"><?php echo($vectorRol[$j]);?></option>
					<?php }?>
					<input type="hidden" value="<?php echo($usuario->getUsuario()); ?>" name="usuario" />
					<input type="hidden" value="<?php echo($usuario->getPassword()); ?>" name="contraseña" />
					<INPUT TYPE="submit"  class="btn-primary"  value="OK"/>
					</select>
					</form>	
				</div>
			
		</div>		
	</div>
</body>
	<?php		
		break;
		}
}
		
			
}		
		
			



?>

