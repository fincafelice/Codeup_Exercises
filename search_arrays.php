<?php

// arrays of first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// Create a function that returns TRUE or FALSE if an array value is found. 
function trueFalse ($name, $array)
{
	// Assign the returned data from array search to a variable
	$result = array_search($name, $array);
 	// var_dump($result);
 	if ($result === False)
 	{
 		return 'False';
 	} else
 	{
 		return 'True';
 	}
}

$nameToSearch = 'Amy';
$arrayToSearch = $names;
echo trueFalse ($nameToSearch, $arrayToSearch) . PHP_EOL;

$count = 0;
foreach ($names as $name) 
{
	if (array_search($name, $compare) !== false) 
	{
		$count++;
	}
}
echo $count . PHP_EOL;