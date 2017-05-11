<?PHP
class ClearPar{
	
	public $cadena;
	public $cadenaSalida;
	
	function build($cadenaOrigen){
		$this->cadena =$cadenaOrigen;
		return $this->procesar();
	}
	function procesar(){
		$this->cadena = str_replace(" ","",$this->cadena);
		for($i=0;$i<strlen($this->cadena);$i++){
			//echo (ord(substr($this->cadena,$i,1)));
			if((ord(substr($this->cadena,$i,1))) != (ord(substr($this->cadena,$i+1,1)))){
				if($i==0  and ord(substr($this->cadena,$i,1))==41){}
				else if($i==strlen($this->cadena)-1  and ord(substr($this->cadena,$i,1))==40){}
				
				else{
				echo substr($this->cadena,$i,1);
				}
			}
			
		}

	}
}
/*
$clase = new ClearPar(); 
echo $clase->build("((()");
*/

?>



