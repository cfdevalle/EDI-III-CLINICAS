<?PHP
//include 'includes/metas.php';
include '/includes/sql.php';
include '/domain/Usuario.php';
include '/collection/CollectionUsuarios.php';
include '/domain/DataBaseConnector.php';


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
if ($num_rows==1){
	session_start();
	$_SESSION['usuario']=$usuario->getUsuario();
	while ($row = mysql_fetch_row($result)){
			$_SESSION['nombre']=$row[2];
			$_SESSION['apellido']=$row[3];
			//$usuario->setEmail($row[4]);
			//$usuario->setEmail($row[5]);
			//$usuario->setDireccion($row[6]);
			
			$rol = $row[7];
			$otorgaTurno = $row[8];
			$_SESSION['rol']=$row[9];
	}
	
	
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

}
else{
header("location: index.php?usr=errorForUser");
}


?>

