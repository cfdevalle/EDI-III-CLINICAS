<?php
		session_start();
		session_unset($_SESSION['usuario']);
		session_unset($_SESSION['nombre']);
		session_unset($_SESSION['apellido']);
		
		session_destroy();
		
		header("location:/EDII-III-CLINICAS/index.php");
		exit;
?>