<?php
	session_start();
	
	$estado=$_SESSION['otorgaturno'];
	$rol=$_SESSION['rolNoLogin'];
	if ($estado == 0 && $rol != "admin" && $rol != "sec"){
		
	
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
						<?php  include("cuadroLogin.php")?>
						<ul class="nav nav-tabs">
                                <li><a href="#">Turnos Del Dia</a></li>
                                <li><a href="javascript:irA(6);">Busqueda de Pacientes</a></li>
                       </ul>
                       <div  id="div_screen"></div>
             </div>
			 </div>
                        
                        
        </div>
     </div>

</body> 
</HTML>
<?php 
}else{
	header("location: php/restringido.php");
 }

 ?>