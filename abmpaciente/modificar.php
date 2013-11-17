<HTML>
<HEAD>

</HEAD>
<BODY>
<BODY>
	<h3> Altas de pacientes </h3>
	<hr />
	
				<table>
					<tr><td><h4>Nombre</h4></td>
					<td><INPUT TYPE="text" id="txt_nombre" /></td><td><div id="errorN"></div></td>
					</tr>
					<tr>
					<td><h4>Apellido</h4></td>
					<td><INPUT TYPE="text" id="txt_apellido"/></td><td><div id="errorA"></div></td>
					</tr>
					<tr><td><h4>Dni </h4></td>
					<td><INPUT TYPE="text" id="txt_dni"/></td><td><div id="errorD"></div></td>
					</tr>
					<tr>
					<td><h4>Domicilio</h4></td>
					<td><INPUT TYPE="text" id="txt_domicilio" /></td><td><div id="errorDom"></div></td>
					</tr>
					<tr>
					<td><h4>Telefono</h4></td>
					<td><INPUT TYPE="text" id="txt_telefono" onKeyPress="checkKey(event);"/></td><td><div id="errorT"></div></td>
					</tr>
					<tr>
					<td><INPUT TYPE="button"  class="btn-primary"  value="Alta" onClick="modificar();"/></td><td><div id="error"></div></td>
					</tr>
				</table>
	
</BODY>