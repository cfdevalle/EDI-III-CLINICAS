
		<script language="javascript" type="text/javascript">
		function bu(){		
				nombre=document.getElementById('nombre').value;
				ap=document.getElementById('apellido').value;
				combo=document.getElementById('combo');
				 var rol=combo.options[combo.selectedIndex].value;
				 console.log(rol);
				var url ="abmusuario/displayBuscarUsuario.php?nombre="+nombre+"&apellido="+ap+"&rol="+rol;
				console.log("ESTO ES LO QUE ENVIA"+url);
                $("#contenidoUsuario").load(url);
		}
		function CargarAlta(){
		 	  var url="abmUsuario/altasUsuario.php";
			 $("#contenidoUsuario").load(url);
		
		}
	</script>
	


	<h3> Profesionales </h3>
	<hr />
	<div class="row-fluid">
		<div class="span12">
			<div class="well">
				<table><tr>
				<td>Nombre<input type="text" id="nombre" value=""/></td>
				<td>Apellido<input type="text" id="apellido" value=""/></td>
				<td>Rol<select  id="combo">
						<option></option>
						<option value="admin">administrativo</option>
						<option value="doc">doctor</option>	
						</select>
				</td>
				<td><INPUT TYPE="button"  class="btn-primary"  value="Buscar" onClick="bu()"/></td>
				<td> Dar De Alta Un Medico </td>
				<td><INPUT TYPE="button"  class="btn-primary"  value="Alta" onClick="CargarAlta()"/></td>
				</tr>
				</table>
				
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<div class="well">
				<div id="contenidoUsuario"></div>
				
			</div>
		</div>
	</div>
