

	
	
				<table>
				<form action="abmpaciente/abmAltas.php" method="post" id="formulario" name="cargo">
					<tr><td><h5>Nombre</h5></td>
					<td><INPUT TYPE="text" id="txt_nombre" name="nombre" /></td><td><div id="errorN"></div></td>
					
					<td><h5>Apellido</h5></td>
					<td><INPUT TYPE="text" id="txt_apellido" name="apellido"/></td><td><div id="errorA"></div></td>
						<td><h5>Dni </h5></td>
					<td><INPUT TYPE="text" id="txt_dni" name="dni"/></td><td><div id="errorD"></div></td>
					</tr>
					<tr>
					<td><h5>Direccion</h5></td>
					<td><INPUT TYPE="text" id="txt_domicilio" name="domicilio" /></td><td><div id="errorDom"></div></td>
					<td><h5>Telefono</h5></td>
					<td><INPUT TYPE="text" id="txt_telefono" name="telefono" /></td><td><div id="errorT"></div></td>
					<td><h5>Email</h5></td>
					<td><INPUT TYPE="text" id="txt_email" name="email" /></td><td><div id="errorE"></div></td>
					</tr>
					<tr>
					<td><INPUT TYPE="button"  class="btn-primary"  value="Alta" onClick="alta();"/></td><td><div id="error"></div></td>
					</tr>
				</table>
			</form>