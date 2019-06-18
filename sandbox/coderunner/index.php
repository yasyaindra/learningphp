<?php 

$person = new stdCLass;
$person->name = "Indra";
$person->last = "Yasya";
$person->age = 18;

// echo $person->name.' '.$person->last;

echo gettype ((int)'5');

// $person = array(
// 	'name' => 'Indra',
// 	'second' => 'Maulana',
// 	'umur' => '18'
// 	);

// var_dump($person);

// class Person {
// 	public $name;
// 	public $job;

// 	public function __construct($name,$job) {
// 		$this->name = $name;
// 		$this->job = $job;
// 	}

// 	public function communicate($style='voice'){
// 		return 'communicating with '.$style;
// 	}
// }

// $p = New person ('Indra','Yasya');
// echo $p->communicate('telepathy');


/*
sscanf
sprintf
printf
*/

// $name = 'Indra';
// $age = '18';

// $greeting = printf("My name is %s and I am %d", $name, $age);

// echo $greeting;

// $result = sscanf("January 15th, 2019", "%s %[^,], %d");

// print_r($result);

// list($month, $day, $year) = sscanf("January 15th, 2019","%s %[^,], %d");

// echo $day;

// list($name,$age)=array('Yasya Indra', 18);

// echo $age;

// $person = array(
// 	'first' => 'Yasya',
// 	'last'  => 'Indra'
// 	);

// var_dump($person);

// class Person {
// 	public $name;
// 	public $job;
	
// 	public function communication() 
// 	{
// 			return 'communicating';
// 	}
// }
