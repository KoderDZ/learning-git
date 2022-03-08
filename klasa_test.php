<?php 

class Roditelj{
	PRIVATE $prv_var = "Privatna varijabla";
	PUBLIC $pub_var = "Javna varijabla";
	PROTECTED $ptd_var = "Nasledna varijabla";

	PRIVATE STATIC $prv_static_var = "Privatna varijabla";

function getPrivateVar($varName){echo "P: " . __CLASS__ . "->" . $varName . ": "; return $this->$varName; } 
/*function getPrivateStaticVar($varName){echo "PS: " . __CLASS__ . "::" . $varName . ":"; return self::$$varName; }*/
function getPrivateStaticVar($varName){echo "Self: " . __CLASS__ . "::" . $varName . ": "; return self::$$varName; }	
function getSelf($varName){echo "Self: " . __CLASS__ . "::" . $varName . ": "; return self::$$varName; }	

function __construct($prezime){
		
		
echo <<<END
\n\nPorodica  $prezime  
Nesto napisano preko roditelja \n
END;

    }
}

class Dete extends Roditelj {
	function __construct($prezime){
		PARENT::__construct($prezime);
	} 
	function getVar($varName){
		echo "PUB/PTD: " . __CLASS__ . "->" . $varName . ": ";
		echo $this->$varName . "\n";
	}
	//function getPrivateVar_($varName){ echo $this->getPrivateVar($varName) . "\n"; }
	function getPrivateStaticVar_($varName){ echo $this->getPrivateStaticVar($varName) . "\n"; }
}

$rod = new Roditelj('Zvekanović');
echo $rod->getSelf('prv_static_var');


$osoba = new Dete('Zvekanović');	
$osoba->getVar('pub_var') ;
$osoba->getVar('ptd_var') ;
//$osoba->getPrivateVar('prv_var') ;

echo " " . $osoba->getPrivateStaticVar_('prv_static_var');


?>