<?php

// User defined functions.

function add($a, $b) {
    echo ($a + $b) . PHP_EOL;
}

function subtract($a, $b) {
    echo ($a - $b) . PHP_EOL;
}

function multiply($a, $b) {
    echo ($a * $b) . PHP_EOL;
}

function divide($a, $b) {
    echo ($a / $b) . PHP_EOL;
}

function modulus ($a, $b) {
	echo ($a % $b) . PHP_EOL;
}

add(5,6);
subtract(8,6);
multiply (4,3);
divide (25,5);
modulus (4,3);
