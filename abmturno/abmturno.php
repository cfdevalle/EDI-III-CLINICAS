<HTML>
<HEAD>
	<TITLE>Turnos</TITLE>
	<link href="../static/css/abmturno.css" rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="../static/css/bootstrap-responsive.css"/>
    <link type="text/css" rel="stylesheet" href="../static/css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="../static/css/abmturno.css"/>
    
    <SCRIPT language= "JavaScript"type= "text/javascript" src="../static/js/abmturno.js"></SCRIPT>
</HEAD>

    

<body  style="background-image:url(../static/img/fondo.jpg)">
	<div id="contenedor">
          <!--  <div id="cabecera" style="background-image:url(../static/img/clinica3.jpg)">
                
            </div>-->
            <div id="contenido">
			<DIV id="frontContainer">
                    <div class="well">
                        <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#">asignacion de turnos</a>
                                </li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">...</a></li>
                       </ul>
                        <div class="row-fluid">
                            
                               <?PHP
                                        //echo("<H1>Turnos<H1>");
                                        include '../domain/Turno.php';
                                        include '../collection/CollectionTurnos.php';
                                        include "../collection/CollectionUsuarios.php";
                                        include '../domain/DataBaseConnector.php';
                                        include '../domain/TablaHorario.php';
									
										$collectionU=new CollectionUsuarios();
                                        $db=new DataBaseConnector();
                                        $collectionT=new CollectionTurnos();
                                        $tabla=new TablaHorario();

                                        $db->conectar();
                                ?>
                                <DIV class="span12">
									<FORM id="formProf">
										<TABLE>
											<TR>
												<TD>Profesional</TD>
												<TD>
													<?PHP $collectionU->getComboProfesionales("usuario","combo"); ?>
												</TD>
												<TD><INPUT type="button" value="Enviar" onClick="enviar();"></TD>
											</TR>
										</TABLE>
									</FORM>
                                </DIV>
                                <div class="span12" id="div_screen">
                                <?PHP                                        
									if (!(empty($_GET['usuario']))){
										if(!(empty($_GET['nombre']))){
											echo("<H3>".$_GET["nombre"]."</H3>");
										}
										$arrayTurno=$collectionT->getTurnos($_GET['usuario']);
										$tabla->dibujarTabla($arrayTurno);
									}
                                ?>     
								</div>
                        </div>
                        
                        
                    </div>
           </DIV><!--front-->
           <DIV id="backContainer">
			   <DIV class="centrado">
					<P>Prueba</P>
					<INPUT type="button" value="Cancelar" onClick="backAtras();">
			   </DIV>
           </DIV>	
			
           </div>
	
	</div>
       
	</body> 
</HTML>
