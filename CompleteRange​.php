<?PHP
class CompleteRange {
	
	public $cadena;
	public $cadenaSalida;
	
	function build($cadenaOrigen){
		$this->cadena =$cadenaOrigen;
		return $this->procesar();
	}
	function procesar(){
		$corchetes = array("[", "]"," ");
		$this->cadena = str_replace($corchetes,"",$this->cadena);
		$cadenaSpliteada = explode(",", $this->cadena);
		for($i=0;$i<(count($cadenaSpliteada)-1);$i++){	
			if(($cadenaSpliteada[$i]+1)==($cadenaSpliteada[$i+1])){
					$this->cadenaSalida .= $cadenaSpliteada[$i];
					$this->cadenaSalida .= ", ";
			}
			else{
				for($j=$cadenaSpliteada[$i];$j<$cadenaSpliteada[$i+1];$j++){
					$this->cadenaSalida .= $j;
					$this->cadenaSalida .= ", ";
				}
			}
		}
		$this->cadenaSalida .= $cadenaSpliteada[count($cadenaSpliteada)-1];
		 return $this->cadenaSalida = "[".$this->cadenaSalida ."]";
		
	}
}

//$clase = new CompleteRange(); 
//echo $clase->build("[2, 4, 9]");

?>