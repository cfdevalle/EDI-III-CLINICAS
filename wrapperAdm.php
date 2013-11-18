<?php 
	
	session_start();
	
	//echo $_SESSION['usuario'];
	
	
	
	
	
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<TITLE>Turnos</TITLE>
<HEAD>
	<link type="text/css" rel="stylesheet" href="static/css/divs.css"/>
    <link type="text/css" rel="stylesheet" href="static/css/bootstrap-responsive.css"/>
    <link type="text/css" rel="stylesheet" href="static/css/bootstrap.css"/>

	<script type="text/javascript" src="static/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="static/js/jquery-ui.min.js"></script>
    <SCRIPT language= "JavaScript"type= "text/javascript" src="static/js/jquery-1.5.js"></SCRIPT>
	<script type="text/javascript" src="static/js/irA.js"></script>
    <SCRIPT language= "JavaScript"type= "text/javascript" src="static/js/abmpaciente.js"></SCRIPT>
	<SCRIPT language= "JavaScript"type= "text/javascript" src="static/js/abmusuario.js"></SCRIPT>
	
	 
    
    
</HEAD>

	


<body  style="background-image:url(static/img/fondo.jpg)">
	<div id="contenedor">
            
	
                
		<div id="contenido">
		  <div class="row-fluid">
		  	<div class="span12">		
    		<div class="well">
						<ul class="nav pull-right">
										<li>Bienvenido:<strong><?php echo $_SESSION['nombre'];echo(' ');echo $_SESSION['apellido']; ?></strong><br /></li>
										<li>Usuario : <?php echo $_SESSION['usuario'];?></li>
										<li><?php echo $_SESSION['rol'];?></li>
										<li class="divider"><hr /></li>
										<li style="text-align:right"><INPUT type="button" value="Cerrar Sesion" onClick="location='/EDII-III-CLINICAS/php/EliminarSesion.php';"/> </li>
										
										
				    	</ul>
						<ul class="nav nav-tabs">
                                <li><a href="javascript:irA(8);">Nuevo Usuario</a></li>
								<li><a href="javascript:irA(10);">Asignar Cargo</a></li>
            					<li><a href="javascript:irA(9);">Nueva especialidad</a></li>
								<li><a href="javascript:irA(7);">Buscar</a></li>
								
                       </ul>
					   
					   <div  id="div_screen"></div>
             </div>
			 </div>
                        
                        
        </div>
     </div>

</body> 
</HTML>