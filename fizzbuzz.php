<?php

// A program that prints the numbers from 1 to 100. 
// But for multiples of three print “Fizz” instead of the number 
// and for the multiples of five print “Buzz”. 
// For numbers which are multiples of both three and five print “FizzBuzz”.

for ($f = 1; $f <= 100; $f++) {

if ($f % 3 == 0) {
	echo 'Fizz';
}

if ($f % 5 == 0) {
	echo 'Buzz';
}

if ($f % 3 && $f % 5) {
	echo $f;
}

echo "\n";

}