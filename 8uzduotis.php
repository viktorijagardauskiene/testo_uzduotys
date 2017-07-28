<pre>
<?php


class Person {

	public $name;
	public $surname;
	public $age;
	
	function __construct()	{
		$this->name = 'Viktorija';
		$this->surname = 'Gardauskienė';
		$this->age = '30';
	}

	public function asmensDuomenys() {
		echo "$this->name $this->surname ($this->age)";
	}
}


$person = new Person();
$person->asmensDuomenys();
	