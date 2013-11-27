
	<?php 
		 include "../collection/CollectionUsuarios.php";
		  include '../domain/DataBaseConnector.php';
		   $db=new DataBaseConnector();
	 
	 $db->conectar();
	 $generaCombo=new CollectionUsuarios();

	 
	

	?>
	
				<table>
					<form action="abmusuario/abmAsignarCargo.php" method="post" name="cargo">
					<tr><td><h5>Usuarios</h5><?php
								$generaCombo->getComboUsuario();
								
						?>
					
					</td>
					<td><h5>Especialidad / Cargos</h5> <?php
								$generaCombo->getComboRol();
								
						?>
					</td>
				
				
					<td style=" width: 2%">	<h5>&nbsp;</h5><INPUT TYPE="submit"  class="btn-primary"  value="Asignar Cargo"/></td>
					</tr>
					</table>
					</form>
