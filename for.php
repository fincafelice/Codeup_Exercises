<?php

// Prompt user for a starting number and ending number, 
// then display all the numbers from the starting to ending 
// using a for loop.


fwrite(STDOUT, 'Enter a beginning number:  ');
$userStart = trim(fgets(STDIN));
fwrite(STDOUT, 'Enter an ending number:  ');
$userEnd = trim(fgets(STDIN));

// Edit where user chooses increment.
fwrite(STDOUT, 'Enter the increment value:   ');
$userIncrm = trim(fgets(STDIN));

// Default increment to 1 if no input.
if (!$userIncrm){
	$userIncrm =1;
}

for ($start= $userStart; $start <= $userEnd; $start+=$userIncrm) {
	echo "$start\n";
}
