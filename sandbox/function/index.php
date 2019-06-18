<?php

// function say_hello($name) {
// 	return "Hi $name";
// }

// echo say_hello('Wahyu');
// function pp($value) {
// 	echo '<pre>';
// 	print_r($value);
// 	echo '</pre>';
// }

// $arr = array('name'=>'Indra', 'address'=>'Tangerang','occupation'=>'conveyor');

// echo pp($arr);

echo '<pre>';
function array_pluck($toPluck, $arr) {
	return array_map(function($item) {
 		print_r ($item);
	}, $arr);
}

$people = array(
		array('name' => 'Indra','age' => 18,'occupation' => 'Guru'),
		array('name' => 'Wahyu','age' => 17,'occupation' => 'Beatboxer'),
		array('name' => 'Afifan','age' => 10,'occupation' => 'Pelajar')
);

$plucked = array_pluck('name ',$people); 

print_r($plucked);
echo '</pre>';