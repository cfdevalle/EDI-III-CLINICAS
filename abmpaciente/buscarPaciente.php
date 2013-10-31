<HTML>
<HEAD>
	<SCRIPT language= "JavaScript"type= "text/javascript" src="../static/js/jquery-1.5.js"></SCRIPT>
    <SCRIPT language= "JavaScript"type= "text/javascript" src="../static/js/jquery-ui.min.js"></SCRIPT>
    <SCRIPT language= "JavaScript"type= "text/javascript" src="../static/js/abmpaciente.js"></SCRIPT>
	<link type="text/css" rel="stylesheet" href="../static/css/bootstrap-responsive.css"/>
	<link type="text/css" rel="stylesheet" href="../static/css/bootstrap.css"/>
	<script language="javascript" type="text/javascript">
		function bu(){		
				dni=document.getElementById('dni').value
				nom=document.getElementById('nombre').value
				ap=document.getElementById('apellido').value
				var url ="displayBuscarpaciente.php?dni="+dni+"&nombre="+nom+"&apellido="+ap;
                $("#contenido").load(url);
		}
		function CargarAlta(){
		 	  var url="altas.php";
			 $("#contenido").load(url);
		
		}
	</script>
	
</HEAD>
<BODY>
<BODY>

	<h3> Buscar Paciente </h3>
	<hr />
	<div class="row-fluid">
		<div class="span12">
			<div class="well">
				<table><tr>
				<td>Dni<input type="text" id="dni" value=""/></td>
				<td>Nombre<input type="text" id="nombre" value=""/></td>
				<td>Apellido<input type="text" id="apellido" value=""/></td>
				<td><INPUT TYPE="button"  class="btn-primary"  value="Buscar" onClick="bu()"/></td>
				<td> Dar De Un Paciente </td>
				<td><INPUT TYPE="button"  class="btn-primary"  value="Alta" onClick="CargarAlta()"/></td>
				</tr>
				</table>
				
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<div class="well">
				<div id="contenido"></div>
				
			</div>
		</div>
	</div>
</BODY>
</HTML>