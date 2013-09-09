<?PHP
class tablaHorario{	
	private $formato='H:i:s';
	private $vecDias=array("","LUNES","MARTES","MIERCOELS","JUEVES","VIERNES","SABADOS","DOMINGOS");	
	private $totalFilas=24;
	private $totalColumnas=8;
	
	
	public function dibujarTabla($vec){
		$hsInicial= new DateTime('12:00:00');
		$auxStr="";			
		for ($i=0;$i<$this->totalColumnas;$i++){
			if ($i==0){
				$auxHs=new DateTime('12:00:00');
				echo("<DIV class=\"columnaHs\">");
					for ($x=0;$x<$this->totalFilas;$x++){
						if ($x==0){
							echo("<DIV>HS</DIV>");
						}
						echo("<DIV id=\"fila\">".$auxHs->format('H:i')."</DIV>");
						$auxHs->add(new DateInterval('PT0H15M0S'));
					}
				echo("</DIV>");
			}else{
				$dia=$i;
				echo('<DIV id="dia'.($dia).'" class="columna">');
				$hsInicial= new DateTime('2013-09-'.$dia.' 12:00:00');
				for ($j=0;$j<$this->totalFilas;$j++){
						if ($j==0){
							echo("<DIV id=\"fila\">".$this->vecDias[$i]."-".$hsInicial->format('d')."</DIV>");
						}
						
						$libre=true;
						for ($k=0;$k<sizeof($vec);$k++){
							if ($hsInicial->format('Y-m-d H:i:s')==$vec[$k]["fecha"]){
								echo("<DIV id=\"fila\"><A href=#>".$vec[$k]["nombre"]." ".$vec[$k]["apellido"]."</A></DIV>");
								$libre=false;
							}else{
							}	
						}
						if ($libre){
							echo("<DIV id=\"fila\"><A id=\"".$hsInicial->format('Y-m-d H:i:s')."\" href=# onClick=\"altaTurno();\">Libre</A></DIV>");
						}
					$hsInicial->add(new DateInterval('PT0H15M0S'));
				}
				//$hsInicial->add(new DateInterval('PT0H15M0S'));
				echo("</DIV>");
			}
		}
	}
}
	

?>
