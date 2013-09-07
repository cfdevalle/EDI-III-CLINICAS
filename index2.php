<HTML>
<HEAD>

</HEAD>
<BODY>
	<?PHP
		if (!(empty($_GET['error'])))
			$error=$_GET['error'];
		else
			$error="n";
		if ($error==="user")
			echo ("<H3>Error en el nombre/clave de usuario</H3>");
	?>
	<FORM method="post" action="login.php">
		<TABLE>
			<TR>
				<TD>Usuario</TD>
				<TD><INPUT name="txt_user" type="text"></TD>
			</TR>
			<TR>
				<TD>Clave</TD>
				<TD><INPUT name="txt_pass" type="password"></TD>
			</TR>
			<TR>
				<TD><INPUT type="submit" value="Ingresar"></TD>
				<TD><INPUT type="reset" value="Borrar"></TD>
			</TR>
			
		</TABLE>
	</FORM>
</BODY>
</HTML>
