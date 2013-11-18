<?php
	session_start();
?>
<HTML>
<HEAD>
	<TITLE>Turnos</TITLE>
	<link href="../static/css/abmturno.css" rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="static/css/bootstrap-responsive.css"/>
    <link type="text/css" rel="stylesheet" href="static/css/bootstrap.css"/>

	<link type="text/css" rel="stylesheet" href="static/css/divs.css"/>

    <SCRIPT language= "JavaScript"type= "text/javascript" src="static/js/jquery-1.5.js"></SCRIPT>
    <SCRIPT language= "JavaScript"type= "text/javascript" src="static/js/jquery-ui.min.js"></SCRIPT>
	<script type="text/javascript" src="static/js/irA.js"></script>
    <SCRIPT language= "JavaScript"type= "text/javascript" src="static/js/abmpaciente.js"></SCRIPT>
	<SCRIPT language= "JavaScript"type= "text/javascript" src="static/js/abmusuario.js"></SCRIPT>

	 
    
    
</HEAD>

	


<body  style="background-image:url(static/img/fondo.jpg)">
	<div id="contenedor">
            
	
                
		<div id="contenido">
		  <div class="row">
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
                                <li><a href="javascript:irA(6);">Turnos Del Dia</a></li>
                                <li><a href="javascript:irA(7);">Busqueda de Pacientes</a></li>
                       </ul>
                       <div  id="div_screen"></div>
             </div>
			 </div>
                        
                        
        </div>
     </div>
<?php if(isset($_GET['ver'])){
		if ($_GET['ver'] == 'pac'){?>
		<script>
			irA2(6);
			
		</script>
		<?php
		}
}
?>
</body> 
</HTML>