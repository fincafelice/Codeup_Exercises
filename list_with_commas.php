<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$explodePhysicistsString = explode (", ", $physicistsString);
// print_r($explodePhysicistsString);

array_pop ($explodePhysicistsString);
// print_r($explodePhysicistsString);

$endingName = 'and Tony Stark';
array_push($explodePhysicistsString, $endingName);
// print_r($explodePhysicistsString);


$famousFakePhysicists = implode (", ", $explodePhysicistsString);
// print_r($famousFakePhysicists);
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";