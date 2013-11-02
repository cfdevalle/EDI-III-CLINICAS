<HTML>
<HEAD>
<SCRIPT language= "JavaScript"type= "text/javascript" src="../static/js/abmUsuario.js"></SCRIPT>
</HEAD>
<BODY>
<BODY>

	<h3> Altas de Usuario </h3>
	<hr />
	
				<table>
					<tr><td><h4>Usuario</h4></td>
					<td><INPUT TYPE="text" id="txt_usuarioU" /></td><td><div id="errorU"></div></td>
					</tr>
					<tr>
					<td><h4>Password</h4></td>
					<td><INPUT TYPE="text" id="txt_passwordU"/></td><td><div id="errorP"></div></td>
					</tr>
					<tr><td><h4>Nombre</h4></td>
					<td><INPUT TYPE="text" id="txt_nombreU"/></td><td><div id="errorN"></div></td>
					</tr>
					<tr>
					<td><h4>Apellido</h4></td>
					<td><INPUT TYPE="text" id="txt_apellidoU" /></td><td><div id="errorA"></div></td>
					</tr>
					<tr>
					<td><h4>Rol</h4></td>
					<td><INPUT TYPE="text" id="txt_rolU" onKeyPress="checkKey(event);"/></td><td><div id="errorR"></div></td>
					</tr>
					<tr>
					<td><INPUT TYPE="button"  class="btn-primary"  value="Alta" onClick="altaUsuario();"/></td><td><div id="error"></div></td>
					</tr>
				</table>
	
</BODY>
</HTML>