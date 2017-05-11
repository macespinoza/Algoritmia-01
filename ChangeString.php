<?PHP
class ChangeString {
	
	public $cadena;
	public $cadenaSalida;
	
	function build($cadenaOrigen){
		$this->cadena =$cadenaOrigen;
		return $this->procesar();
	}
	function procesar(){
		$this->cadenaSalida="";
		for($i=0;$i<strlen($this->cadena);$i++){
			if( (ord(substr($this->cadena,$i,1)))==90 or (ord(substr($this->cadena,$i,1)))==122 ){
				$this->cadenaSalida .= chr((ord(substr($this->cadena,$i,1)))-25);
			}else if( ( (ord(substr($this->cadena,$i,1)))>=65 and (ord(substr($this->cadena,$i,1)))<90 ) or ((ord(substr($this->cadena,$i,1)))>=97 and (ord(substr($this->cadena,$i,1)))<122 ) ){
				$this->cadenaSalida .= chr((ord(substr($this->cadena,$i,1)))+1);
			}else{
				$this->cadenaSalida .= chr(ord(substr($this->cadena,$i,1)));
			}
		}
		return $this->cadenaSalida; 
	}

}
//$clase = new ChangeString(); 
//echo $clase->build("123 abcd*3");

?>



