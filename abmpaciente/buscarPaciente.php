
		<script language="javascript" type="text/javascript">
		function bu(){		
				dni=document.getElementById('dni').value
				nom=document.getElementById('nombre').value
				ap=document.getElementById('apellido').value
				var url ="abmpaciente/displayBuscarpaciente.php?dni="+dni+"&nombre="+nom+"&apellido="+ap;
                $("#contenidopacientes").load(url);
		}
		function CargarAlta(){
		 	  var url="abmpaciente/altas.php";
			 $("#contenidopacientes").load(url);
		
		}
	</script>
	


	
	<div class="row-fluid">
		<div class="span12">
			<div class="well">
				<table><tr>
				<td style="width:20%"><h5>Dni</h5><input type="text" id="dni" value=""/></td>
				<td style="width:20%"><h5>Nombre</h5><input type="text" id="nombre" value=""/></td>
				<td style="width:20%"><h5>Apellido</h5><input type="text" id="apellido" value=""/></td>
				<td style="width:10%"><INPUT TYPE="button"  class="btn-primary"  value="Buscar" onClick="bu()"/></td>
				
				</tr>
				</table>
				
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<div class="well">
				<div id="contenidopacientes"></div>
				
			</div>
		</div>
	</div>
