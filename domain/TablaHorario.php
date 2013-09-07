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
			
			
		for ($i=0;$i<7;$i++){
			$dia=$i+1;
			echo('<DIV id="dia'.($dia).'" class="columna">');
			$hsInicial= new DateTime('2013-09-'.$dia.' 12:00:00');
		
			
			for ($j=0;$j<24;$j++){
				if ($j==0){
					
					echo($hsInicial->format('H:i'));
				}else{
					$hsInicial->add(new DateInterval('PT0H15M0S'));
					$libre=true;
					for ($k=0;$k<sizeof($vec);$k++){
						//echo($hsInicial->format('Y-m-d H:i:s')."  ".$vec[$k]["fecha"]);
						
						if ($hsInicial->format('Y-m-d H:i:s')==$vec[$k]["fecha"]){
							//$auxStr="<BR>".$hsInicial->format('H:i').$vec[$k]["nombre"]." ".$vec[$k]["apellido"];
							//echo("<BR>".$hsInicial->format('H:i').$vec[$k]["nombre"]." ".$vec[$k]["apellido"]);
							echo("<BR>".$vec[$k]["nombre"]." ".$vec[$k]["apellido"]);
							$libre=false;
						}else{
							//echo("<BR>".$hsInicial->format('H:i')." libre");
						}	
					}
					if ($libre)
							//echo("<BR><A id=\"".$hsInicial->format('Y-m-d H:i:s')."\"href=#>".$hsInicial->format('H:i')." libre</A>");
							echo("<BR><A id=\"".$hsInicial->format('Y-m-d H:i:s')."\"href=#>Libre</A>");
					//echo($auxStr);
					//echo("<BR>".$hsInicial->format('H:i'));
				}
			}
			//$hsInicial->add(new DateInterval('PT0H15M0S'));
			echo("</DIV>");
		}
		//echo("</TABLE>");
		
		/*for ($i=0;$i<sizeof($vec);$i++){
			echo $vec[$i]['fecha']." ".$vec[$i]['nombre']." ".$vec[$i]['apellido']." </BR>";
		}*/
	}
}
	

?>
