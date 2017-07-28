<?php
class NumberList {
	public $number = array(1, 2, 3, 4, 5);
	

public function add($number) {

	array_push($number, 8);

}

public function avarage() {
	array_sum($number)/count($number);
}

}

$NumberList = new NumberList;
$NumberList->add($number);
$NumberList->avarage();