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
echo "\nCount words: "                  . str_word_count($open_secret);
echo "\nReverse : "                     . strrev($open_secret);
echo "\nRepeat string n times: "        . str_repeat($open_secret, 21);
echo "\nFind position of substring: "   . strpos($open_secret, "t");
echo "\nCount substring in string: "    . substr_count($open_secret, "coin");
echo "\nReplace substring with substring: " . str_replace("Bi", "Sh1", $open_secret);
echo "\nStrip surrounding whitespace: " . trim($open_secret);
echo "\nStrip whitespace to the left: " . ltrim($open_secret);
echo "\nStrip whitespace to the right: ". rtrim($open_secret);
echo "\n";
?>