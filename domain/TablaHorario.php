<?PHP
class tablaHorario{	
	private $formato='H:i:s';
	private $vecDias=array();
	
/*	public function construirTabla($vec){
		$fechaVector=new DateTime($vec[0]["fecha"]);
		//$vecDias=array();

		for ($i=0;$i<7;$i++){
			$hsInicial= new DateTime('2013-09-'.($i+1).' 12:00:00');
		//	echo("<BR>".$hsInicial->format('d-m-Y H:i'));
			for ($j=0;$j<24;$j++){
				if ($j==0){
						$this->vecDias[$i][$j]=$hsInicial->format('d-m-Y H:i');
						echo("<BR>".$this->vecDias[$i][$j]);
				}else{
					$this->vecDias[$i][$j]=$hsInicial->add(new DateInterval('PT0H15M0S'));
					echo("<BR>".$this->vecDias[$i][$j]->format('d-m-Y H:i'));
				}
			
			}			
			
		}
		echo("el 5 5".$this->vecDias[5][5]->format('d-m-Y H:i'));/*
		for ($i=0;$i<sizeof($vec);$i++){
			echo($i."<BR>");
		}
		
		for ($i=0;$i<7;$i++){
			for ($j=0;$j<24;$j++){
				echo ("<BR>".$this->vecDias[$i][$j]->format('Y-m-d H:i'));
				for ($k=0;$k<sizeof($vec);$k++){
				//	echo ("<BR>".$vecDias[$i][$j]->format('Y-m-d H:i'));
					/*if ($vecDias[$i][$j]->format('Y-m-d H:i')==$vec[$k]["fecha"]){
						$vecDias[$i][$j][1]=$vec[$k][1]." ".$vec[$k][2];
						echo($vecDias[$i][$j][1]);
					}else{
						//echo($vecDias[$i][$j]->format('Y-m-d H:i')." libre");
					}
				}
				
			}
		}
	}*/
	
	
	
	public function dibujarTabla($vec){
		$hsInicial= new DateTime('12:00:00');
		$auxStr="";
		echo("<TABLE><TR>
			<TH></TH>
			<TH>HS</TH>
			<TH></TH>
			<TH>Domingo</TH>
			<TH></TH>
			<TH>Lunes</TH>
			<TH></TH>
			<TH>Martes</TH>
			<TH></TH>
			<TH>Miercoles</TH>
			<TH></TH>
			<TH>Jueves</TH>
			<TH></TH>
			<TH>Viernes</TH>
			<TH></TH>
			<TH>Sabado</TH>
			<TH></TH>
			</TR></TABLE>");
			
			
		for ($i=0;$i<8;$i++){
			if ($i==0){
				$auxHs=new DateTime('12:00:00');
				echo("<DIV class=\"columna\">");
					for ($x=0;$x<24;$x++){
						echo($auxHs->format('H:i')."</BR>");
						$auxHs->add(new DateInterval('PT0H15M0S'));
					}
				echo("</DIV>");
			}else{
				$dia=$i;
				echo('<DIV id="dia'.($dia).'" class="columna">');
				$hsInicial= new DateTime('2013-09-'.$dia.' 12:00:00');
				for ($j=0;$j<24;$j++){
					
						
						$libre=true;
						for ($k=0;$k<sizeof($vec);$k++){
							if ($hsInicial->format('Y-m-d H:i:s')==$vec[$k]["fecha"]){
								echo($vec[$k]["nombre"]." ".$vec[$k]["apellido"]."</BR>");
								$libre=false;
							}else{
							}	
						}
						if ($libre){
							echo("<A id=\"".$hsInicial->format('Y-m-d H:i:s')."\"href=#>Libre</A><BR>");
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
