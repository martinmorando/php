<?php
/*
	Strings
*/

// Formatting
$a = "It is";
$b = "so simple";
$message = $a . " " . $b; 	// Alternative A
$message = "$a $b"; 		// Alternative B
$message = "${a} ${b}"; 	// Alternative C

// Concatenation
$message .= ".\n";
echo $message;

// Some built-in functions related to strings
$open_secret = "Bitcoin";
echo "\nConvert to lowercase: "         . strtolower($open_secret);
echo "\nConvert to uppercase: "         . strtoupper($open_secret);
echo "\nCapitalize (1st char): "        . ucfirst($open_secret);	
echo "\nLength: "                       . strlen($open_secret);
echo "\nReverse : "                     . strrev($open_secret);
echo "\nRepeat n times: "               . str_repeat($open_secret, 21);
echo "\nCount substring in string: "    . substr_count($open_secret, "coin");
echo "\nStrip surrounding whitespace: " . trim($open_secret);
echo "\nStrip whitespace to the left: " . ltrim($open_secret);
echo "\nStrip whitespace to the right: ". rtrim($open_secret); 
echo "\n";
?>