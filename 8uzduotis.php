<pre>
<?php


class Person {

	private $name;
	private $surname;
	private $age;
	
	function __construct()
	{
		$this->name = 'Viktorija';
		$this->surname = 'Gardauskienė';
		$this->age = '30';
	}


}


$person = new Person();
	print_r($person);