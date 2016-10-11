<?php
 class black{
	 private $lo,$ol,$lol;
     function __construct($lo,$ol){
		 $this -> lo = $lo;
		 $this -> ol = $ol;
	 }
	 function sum(){
		 $this -> lol = $this -> lo + $this -> ol;
	 }
	function sume(){
		return $this -> lol;
	}
	
   function __destruct() {
       echo "Уничтожается "  "\n";
   }
 };

?>