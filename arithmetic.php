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

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo ($a / $b) . PHP_EOL;
	} else {
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
divide ('e', 'w');
modulus ('q', 'v');
