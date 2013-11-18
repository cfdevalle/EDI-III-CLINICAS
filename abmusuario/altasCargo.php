
	
	
				<table>
					<form action="abmusuario/abmCargo.php" method="post" id="cargo">
					<tr><td><h4>Especialidad</h4></td>
					<td ><INPUT TYPE="text" id="txt_rol" name="rol" /></td><td ><div id="errorU"></div></td>
				
					<td><h4>Descripcion</h4></td>
					<td><INPUT TYPE="text" id="txt_desc" name="descripcion"/></td><td><div id="errorP"></div></td>
					</tr>
					<tr><td><h4>Otorga Turno</h4></td>
					<td><select  id="combo" name="combo">
						<option></option>
						<option value="1">si</option>
						<option value="0">no</option>	
						</select>
					</td>
				
					</tr>
					<tr>
					<td><INPUT TYPE="submit"  class="btn-primary"  value="Alta"/></td>
					</tr>
					</table>
					</form>
