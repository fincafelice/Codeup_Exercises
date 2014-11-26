<?php

// User defined functions.
// *Validate all the arguments, and display an error if 
// the input is not numeric.

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo ($a + $b) . PHP_EOL;
	} else {
		echo "ERROR: Please enter numbers only.\n";
	}
}

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo ($a - $b) . PHP_EOL;
	} else {
		echo "ERROR: Please enter numbers only.\n";
	}
}


function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo ($a * $b) . PHP_EOL;
	} else {
		echo "ERROR: Please enter numbers only.\n";
	}
}
// *Validate divide by 0 errors, display error if 
// attempts to divide by 0 are made.

function divide($a, $b) {
	if ($b == 0) {
		echo "DIVISOR can not be zero. \n";
	} elseif (is_numeric($a) && is_numeric($b)) {
    	echo ($a / $b) . PHP_EOL;
	}  else {
		echo "ERROR: Please enter numbers only.\n";
	}
}

function modulus ($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo ($a % $b) . PHP_EOL;
	} else {
		echo "ERROR: Please enter numbers only.\n";
	}
}

add('p', 'o');
subtract('h', 'j');
multiply ('n', 'd');
divide (3, 0);
modulus ('q', 'v');
