<?php

if (!(empty($_POST['id']))){
		$id=$_POST['id'];
}
 
	 
		$consulta='SELECT * FROM paciente WHERE id_paciente='.$id.'"ORDER BY id_paciente ASC';
		$result=mysql_query($consulta);
		if (false === $result) {
			echo mysql_error();
		}
		
		while($row = mysql_fetch_row($result)){
				echo('<option value="'.$row[0].'">'.$row[2].' '.$row[1].'</option>');
		}
		echo('</SELECT>');
	
?>
<HTML>
<HEAD>
	<SCRIPT language= "JavaScript"type= "text/javascript" src="../static/js/jquery-1.5.js"></SCRIPT>
    <SCRIPT language= "JavaScript"type= "text/javascript" src="../static/js/jquery-ui.min.js"></SCRIPT>
    
	<link type="text/css" rel="stylesheet" href="../static/css/bootstrap-responsive.css"/>
	<link type="text/css" rel="stylesheet" href="../static/css/bootstrap.css"/>
</HEAD>
<BODY>
<BODY>

	<h3> Altas de pacientes </h3>
	<hr />
	
				<table>
					<tr><td><h4>Nombre</h4></td>
					<td><INPUT TYPE="text" id="txt_nombre" />
					</tr>
					<tr>
					<td><h4>Apellido</h4></td>
					<td><INPUT TYPE="text" id="txt_apellido"/>
					</tr>
					<tr><td><h4>Dni </h4></td>
					<td><INPUT TYPE="text" id="txt_dni"/>
					</tr>
					<tr>
					<td><h4>Domicilio</h4></td>
					<td><INPUT TYPE="text" id="txt_domicilio" />
					</tr>
					<tr>
					<td><h4>Telefono</h4></td>
					<td><INPUT TYPE="text" id="txt_telefono" onKeyPress="checkKey(event);"/>
					</tr>
					<tr>
					<td><INPUT TYPE="button"  class="btn-primary"  value="Alta" onClick="alta();"/>
					</tr>
				</table>
	
</BODY>
</HTML>