<?php
// starts at 0, counts by 2, stops at 100
// $evenNum = 0;

// do {
// 	echo "$evenNum\n";
// 	$evenNum+=2;
// } while ($evenNum <= 100);

// starts at 100, counts backwards by 5, stops at -10
//$evenNum = 100;

// do {
// 	echo "$evenNum\n";
// 	$evenNum -= 5;
// } while ($evenNum >= -10);

// starts at 2, double each time, stop at 1million

$a = 2;

do {
	echo "$a\n";
	$a*=$a;
} while ($a <= 1000000);

