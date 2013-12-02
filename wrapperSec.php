<?php 
	
	session_start();
	
	
	$rol=$_SESSION['rolNoLogin'];
	if ($rol == "sec"){
		
	
	
	
	
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
                                <li><a href="javascript:irA(6);">Asignar Turno</a></li>
                                <li><a href="javascript:irA(6);">Buscar Pacientes</a></li>
								<li><a href="javascript:irA(11);">Nuevo Paciente</a></li>
								
                       </ul>
					   
					   <div  id="div_screen"></div>
             </div>
			 </div>
                        
                        
        </div>
     </div>
	 <?php if(isset($_GET['hc'])){
		?>
		<script>
			  $("#div_screen").load("abmpaciente/abmHc.php?hc="+<?php echo($_GET['hc']) ?>+"&nom="+<?php echo($_GET['nombre']) ?>+"&ap="+<?php echo($_GET['apellido']) ?>+"&dni="+<?php echo($_GET['dni']) ?> ) ;
			
		</script>
		<?php
		
		}
?>

</body> 
</HTML>
<?php 
}else{
	header("location: php/restringido.php");
 }

 ?>