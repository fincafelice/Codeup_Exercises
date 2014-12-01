<?php


$nothing = null;
$something = '';
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or 
// empty, and display "$variable_name is SET|EMPTY"

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results

function testSetEmpty ($variable) {
	// return isset ($nothing);
	// return isset($something);
	// return isset($array);
	
	if (isset($variable)) {
		return "testSetEmpty is SET\n";
	} else {
		return "testSetEmpty is EMPTY\n";
	}

}

echo testSetEmpty($nothing);
echo testSetEmpty($something);
echo testSetEmpty($array);

// if testSetEmpty() == TRUE {
// 	echo "testSetEmpty is SET\n";
// }	else {
// 	echo "testSetEmpty is EMPTY\n";
// }

$serialized_array = serialize($array);

echo $serialized_array . PHP_EOL;

var_dump(unserialize($serialized_array));
