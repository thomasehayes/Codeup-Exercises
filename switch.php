<?php 

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');
 switch($dayOfWeek) {
     case 1:
         // Output Monday
        echo date('l') .PHP_EOL;
        break;
     case 2:
        // Output Tuesday
        // etc through day 7
        echo date('l') .PHP_EOL;
        break;
     case 3:
        echo date('l') .PHP_EOL;
        break;
     case 4:
        echo date('l') .PHP_EOL;
        break;
     case 5:
        echo date('l') .PHP_EOL;
        break;
     case 6:
        echo date('l') .PHP_EOL;
        break;
     case 7:
        echo date('l') .PHP_EOL;
        break;
    default: 
        echo "You have created a new day!";
 }

// if else if to show same output
if ($dayOfWeek == 1) {
    echo date('l') . PHP_EOL;
} else if (date('N') == 2) {
    echo date('l') . PHP_EOL;
} else if (date('N') == 3) {
    echo date('l') . PHP_EOL;
} else if (date('N') == 4) {
    echo date('l') . PHP_EOL;
} else if (date('N') == 5) {
    echo date('l') . PHP_EOL;
} else if (date('N') == 6) {
    echo date('l') . PHP_EOL;
} else if (date('N') == 7) {
    echo date('l') . PHP_EOL;
}

?>