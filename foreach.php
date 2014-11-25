<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// *Construct a loop that iterates through each value 
// and outputs its type as either 
// integer, float, boolean, array, null, or string.

foreach ($things as $item) {
 	echo 'Datatype is:  ' . gettype($item) . PHP_EOL;
 }
 // exit();

// *Construct a loop that iterates through each value 
// and outputs only values with a type that is scalar.

 foreach ($things as $item) {
 	if (is_scalar($item)) {
 		echo ($item) . PHP_EOL;
 	}
 }
// exit();

// *Create a loop that will echo out every value, 
// including those nested in arrays. 

foreach ($things as $item) {
	if (is_array($item)) {
		foreach ($item as $value) {
		echo "$value\n";
		}
	} else {
		echo "$item\n";
	}
}