
<table align="right">
		<tr> 
			<td>Bienvenido:<strong><?php echo $_SESSION['nombre'];echo(' ');echo $_SESSION['apellido']; ?></strong></td>
		</tr>
		<tr>
			<td>Usuario : <?php echo $_SESSION['usuario'];?></td>
		</tr>
		<tr>
			<td><?php echo $_SESSION['rol'];?></td>
		</tr>
	
		<tr>
			<td><INPUT type="button" value="Cerrar Sesion" width="30px" onClick="location='/EDII-III-CLINICAS/php/EliminarSesion.php';"/>
			<INPUT type="button" value="Cambiar Contraseña" onClick="irA(12)"/> 
			</td>
		</tr>
	
</table>