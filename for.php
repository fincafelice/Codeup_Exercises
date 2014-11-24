<?php

// Prompt user for a starting number and ending number, 
// then display all the numbers from the starting to ending 
// using a for loop.

fwrite(STDOUT, 'Enter a beginning number:  ');
$userStart = trim(fgets(STDIN));
fwrite(STDOUT, 'Enter an ending number:  ');
$userEnd = trim(fgets(STDIN));

for ($start= $userStart; $start <= $userEnd; $start++) {
	echo "$start\n";
}
