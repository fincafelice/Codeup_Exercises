<?php

$a = 5;
$b = 10;
$c = '10';

if ($a < $b) {
    // output the appropriate result
    echo "$a is ____ $b\n";
}

if ($b > $a) {
    // output the appropriate result
    echo "$b is ____ $a\n";
}

if ($b >= $c) {
    // output the appropriate result
    echo "$b is ____ $c\n";
}

if ($b <= $c) {
    // output the appropriate result
    echo "$b is less than or equal to $c\n";
}

if ($b == $c) {
    // output the appropriate result
    echo "$b is is equal to $c\n";
}

if ($b === $c) {
    // output the appropriate result
    echo "$b is identical to $c\n";
}

// output the appropriate result
if ($b != $c) {
    echo "$b is not equal to $c\n";
}

// output the appropriate result
if ($b !== $c) {
    echo "$b is not identical to $c\n";
}

?>


