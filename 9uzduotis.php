<?php

include "8uzduotis.php";

class Staff extends Person {

	public $statusas = "darbuotojas";

	public function asmensDuomenys() {
		echo "$this->name $this->surname, $this->statusas";
	}
	
}

class Client extends Person {
	
	
}

$staff = new Staff();
$staff->asmensDuomenys();