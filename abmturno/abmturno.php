<HTML>
<HEAD>
	<TITLE>Turnos</TITLE>
	<link href="../static/css/abmturno.css" rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="../static/css/bootstrap-responsive.css"/>
        <link type="text/css" rel="stylesheet" href="../static/css/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="../static/css/divs.css"/>
</HEAD>

    

<body  style="background-image:url(../static/img/fondo.jpg)">
	<div id="contenedor">
            <div id="cabecera" style="background-image:url(../static/img/clinica3.jpg)">
                
            </div>
            <div id="contenido">
                    <div class="well">
                        <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#">asignacion de turnos</a>
                                </li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">...</a></li>
                       </ul>
                        <div class="row-fluid">
                            <div class="span12" id="div_screen">
                               <?PHP
                                        //echo("<H1>Turnos<H1>");
                                        include '../domain/Turno.php';
                                        include '../collection/CollectionTurnos.php';
                                        include '../domain/DataBaseConnector.php';
                                        include '../domain/TablaHorario.php';

                                        $db=new DataBaseConnector();
                                        $collection=new CollectionTurnos();
                                        $tabla=new TablaHorario();

                                        $db->conectar();
                                        $arrayTurno=$collection->getTurnos("jlopez");
                                        $total=sizeof($arrayTurno);

                                        $tabla->dibujarTabla($arrayTurno);
                                ?>     
                            </div>
                        </div>
                        
                        
                    </div>
           </div>
	
	</div>
       
	</body> 
</HTML>
