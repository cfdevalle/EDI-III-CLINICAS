
	<?php 
		 include "../collection/CollectionUsuarios.php";
		  include '../domain/DataBaseConnector.php';
		   $db=new DataBaseConnector();
	 
	 $db->conectar();
	 $generaCombo=new CollectionUsuarios();

	 
	

	?>
	
				<table>
					<form action="abmusuario/abmAsignarCargo.php" method="post" name="cargo">
					<tr><td>Usuarios Sin Cargos<?php
								$generaCombo->getComboUsuario();
								
						?>
					
					</td>
					<td>Especialidad / Cargos <?php
								$generaCombo->getComboRol();
								
						?>
					</td>
				
					
					<td style=" width: 2%"><INPUT TYPE="submit"  class="btn-primary"  value="Asignar Cargo"/></td>
					</tr>
					</table>
					</form>
