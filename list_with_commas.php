<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
// Create function to allow sorting option.

// Change string to array to manipulate data.
function humanizedList ($physicistsString, $alpha = false) {


	$explodePhysicistsString = explode (", ", $physicistsString);
	// print_r($explodePhysicistsString);

	if ($alpha) {
		sort ($explodePhysicistsString);
	}
	
	$lastName = array_pop ($explodePhysicistsString);
	// print_r($explodePhysicistsString);

	// $endingName = 'and Tony Stark';
	// array_push($explodePhysicistsString, $endingName);
	// sort($explodePhysicistsString);
	// print_r($explodePhysicistsString);

	$famousFakePhysicists = implode (", ", $explodePhysicistsString);
	// return "{$famousFakePhysicists}, and {$lastName}";
	return "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}, and {$lastName}.\n";
}

echo humanizedList($physicistsString, true);
// print_r($famousFakePhysicists);
// echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";

// print_r($explodePhysicistsString);