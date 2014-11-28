<?php

// User defined functions.
// *Validate all the arguments, and display an error if 
// the input is not numeric.

// *Make the error messages show the values of the arguments.

// *Refactor the error messages into their own function, 
// have the other functions use it for error messaging.

function errorMsg ($a, $b) {
	echo "ERROR: Please enter numbers only. . $a . $b\n";
}

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	// refactor to return the result
    	return ($a + $b) . PHP_EOL;
	} else {
		errorMsg ($a, $b);
		// echo "ERROR: Please enter numbers only. . $a . $b\n";
	}
}

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	// refactor to return the result
    	return ($a - $b) . PHP_EOL;
	} else {
		errorMsg ($a, $b);
		// echo "ERROR: Please enter numbers only. . $a . $b\n";
	}
}


function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	// refactor to return the result
    	return ($a * $b) . PHP_EOL;
	} else {
		errorMsg ($a, $b);
		// echo "ERROR: Please enter numbers only. . $a . $b\n";
	}
}
// *Validate divide by 0 errors, display error if 
// attempts to divide by 0 are made.

function divide($a, $b) {
	if ($b == 0) {
		echo "DIVISOR can not be zero.\n";
	} elseif (is_numeric($a) && is_numeric($b)) {
    	// refactor to return the result
    	return ($a / $b) . PHP_EOL;
	}  else {
		errorMsg ($a, $b);
		// echo "ERROR: Please enter numbers only. . $a . $b\n";
	}
}

function modulus ($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		// refactor to return the result
		return ($a % $b) . PHP_EOL;
	} else {
		errorMsg ($a, $b);
		// echo "ERROR: Please enter numbers only. . $a . $b\n";
	}
}
   
add(4,6);
subtract(6,4);
multiply ('n',0);
divide (3,0);
modulus (4,5);
