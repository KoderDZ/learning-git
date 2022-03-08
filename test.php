<?php 

class Roditelj{
	PRIVATE $prv_var = "Privatna varijabla";
	PUBLIC $pub_var = "Javna varijabla";
	PROTECTED $ptd_var = "Nasledna varijabla";

	PRIVATE STATIC $prv_static_var = "Privatna STATICKA varijabla";

    function get($varName){return $this->$varName;}

function getPrivateVar($varName){
    echo "P: " . __CLASS__ . "->" . $varName . ":"; 
    return $this->$varName; } 
function getPrivateStaticVar($varName){echo "Self: " . __CLASS__ . "::" . $varName; return Roditelj::$prv_static_var; }	
function getSelf($varName){echo "Self: " . __CLASS__ . "::" . $varName . ": "; return  self::$$varName; }	


}

class Dete extends Roditelj {   }

$rod = new Roditelj();
echo $rod->getSelf('prv_static_var') . "\n\n";
//echo $osoba->get('prv_var');

$osoba = new Dete();	
echo $osoba->getPrivateVar('prv_var') . "\n";
echo $osoba->get('prv_var') . "\n";
//$osoba->getPrivateStaticVar('prv_static_var');


?>