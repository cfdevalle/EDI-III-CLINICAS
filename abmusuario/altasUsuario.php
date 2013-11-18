<HTML>
<HEAD>
<SCRIPT language= "JavaScript"type= "text/javascript" src="static/js/abmUsuario.js"></SCRIPT>
</HEAD>
<BODY>
<BODY>			
			
			<h4>Datos De Usuario</h4>
				<hr />
				<form action="abmusuario/abmUsuario.php" method="post" id="formulario" name="cargo">
					<table>
					<tr><td><h5>Usuario</h5></td>
					<td ><INPUT TYPE="text" id="txt_usuarioU" name="usuario" /></td><td ><div id="errorU"></div></td>
				
					<td><h5>Password</h5></td>
					<td><INPUT TYPE="text" id="txt_passwordU" name="pass"/></td><td><div id="errorP"></div></td>
					</tr>
					<tr><td><h5>Nombre</h5></td>
					<td><INPUT TYPE="text" id="txt_nombreU" name="nombre"/></td><td><div id="errorN"></div></td>
					
					<td><h5>Apellido</h5></td>
					<td><INPUT TYPE="text" id="txt_apellidoU" name="apellido" /></td><td><div id="errorA"></div></td>
					</tr>
					<tr>
					<td><h5>Telefono</h5></td>
					<td><INPUT TYPE="text" id="txt_teleU" name="telefono"/></td><td><div id="errorR"></div></td>
					<td><h5>Email</h5></td>
					<td><INPUT TYPE="text" id="txt_emailU" name="email"/></td><td><div id="errorE"></div></td>
					<td><h5>Direccion</h5></td>
					<td><INPUT TYPE="text" id="txt_direcU" name="direc"/></td><td><div id="errorD"></td>
					</tr>
					<tr>
					
					<td ><INPUT TYPE="button"  class="btn-primary"  value="Alta" onClick="altaUsuario();"/></td>
					<td><div id="error"></div></td>
					</tr>
				</table>
			</form>
	<!--</td><td><div id="error"></div>-->
</BODY>
</HTML>