<?php
/*
	Miscellaneous
*/

// Return integer value
echo "\n" . intval(2.34);           // 2
echo "\n" . intval("2.34");         // 2
echo "\n" . intval(-2.34);          // -2
echo "\n" . intval("-2.34");        // -2
echo "\n" . intval("asd");          // 0

// Differences with floor()
// https://stackoverflow.com/questions/36924689/php-intval-vs-floor
echo "\n" . intval(-0.1);           // 0   truncates decimal part
echo "\n" . floor(-0.1);            // -1  rounds down to the nearest integer

// Binary to decimal
echo "\n" . intval("10101010", 2);  // 170

// Hexadecimal to decimal
echo "\n" . intval("AA", 16);       // 170



// Read user input (terminal). Should validate user input
$user_input = readline("Type y/n: ");
echo $user_input;


// Include another PHP file
include "5-1-include.php";
?>