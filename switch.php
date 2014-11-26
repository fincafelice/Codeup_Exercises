<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
         // Output Monday
     	echo '1' . PHP_EOL;
     	break;
     case 2:
     	echo'2' . PHP_EOL;
     	break;
 	case 3:
     	echo'3' . PHP_EOL;
     	break;
 	case 4:
     	echo'4' . PHP_EOL;
     	break;
	case 5:
     	echo'5' . PHP_EOL;
     	break;
 	case 6:
     	echo'6' . PHP_EOL;
     	break;
 	case 7:
     	echo'7' . PHP_EOL;
     	break;
         // Output Tuesday
     // etc through day 7
 }
