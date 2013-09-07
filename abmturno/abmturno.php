<HTML>
<HEAD>
	<TITLE>Turnos</TITLE>
	<link href="../static/css/abmturno.css" rel='stylesheet' type='text/css'>
</HEAD>
<BODY>
<?PHP
	//echo("<H1>Turnos<H1>");
	include '../domain/Turno.php';
	include '../collection/CollectionTurnos.php';
	include '../domain/DataBaseConnector.php';
	include '../domain/TablaHorario.php';
	
	$db=new DataBaseConnector();
	$collection=new CollectionTurnos();
	$tabla=new TablaHorario();
	
	$db->conectar();
	$arrayTurno=$collection->getTurnos("jlopez");
	$total=sizeof($arrayTurno);
	
	$tabla->dibujarTabla($arrayTurno);
?>
</BODY>
</HTML>
